<?php

class ControllerModuleTmModuleTab extends Controller
{
    public function index($setting)
    {
        $this->load->language('module/tm_module_tab');
        $this->document->addScript('catalog/view/javascript/bootstrap/js/bootstrap-tabcollapse.js');
        static $module = 0;

        $data['heading_title'] = $this->language->get('heading_title');
        $data['heading_specials'] = $this->language->get('heading_specials');
        $data['heading_latest'] = $this->language->get('heading_latest');
        $data['heading_featured'] = $this->language->get('heading_featured');
        $data['heading_bestsellers'] = $this->language->get('heading_bestsellers');

        $data['text_tax'] = $this->language->get('text_tax');
        $data['text_sale'] = $this->language->get('text_sale');
        $data['text_new'] = $this->language->get('text_new');
        $data['text_quick'] = $this->language->get('text_quick');
        $data['text_price'] = $this->language->get('text_price');
        $data['button_wishlist'] = $this->language->get('button_wishlist');
        $data['button_compare'] = $this->language->get('button_compare');
        $data['button_details'] = $this->language->get('button_details');
        $data['text_manufacturer'] = $this->language->get('text_manufacturer');
        $data['text_category'] = $this->language->get('text_category');
        $data['text_model'] = $this->language->get('text_model');
        $data['text_availability'] = $this->language->get('text_availability');
        $data['text_instock'] = $this->language->get('text_instock');
        $data['text_outstock'] = $this->language->get('text_outstock');
        $data['reviews'] = $this->language->get('reviews');
        $data['text_price'] = $this->language->get('text_price');
        $data['text_product'] = $this->language->get('text_product');

        $data['button_cart'] = $this->language->get('button_cart');
        $data['button_wishlist'] = $this->language->get('button_wishlist');
        $data['button_compare'] = $this->language->get('button_compare');

        $this->load->model('catalog/product');

        $this->load->model('tool/image');
        $this->load->model('catalog/manufacturer');
        $this->language->load('product/product');
        $this->language->load('product/category');
        $this->load->model('catalog/review');


        //Specials
        $data['special_products'] = array();
        if ($setting['special'] == "1") {
            $filter_data = array(
                'sort' => 'pd.name',
                'order' => 'ASC',
                'start' => 0,
                'limit' => $setting['limit']
            );

            $results = $this->model_catalog_product->getProductSpecials($filter_data);
            $data['special_products'] = $this->createProducts($results, $setting);
        }

        //Latest
        $data['latest_products'] = array();
        if ($setting['latest'] == "1") {

            $filter_data = array(
                'sort' => 'p.date_added',
                'order' => 'DESC',
                'start' => 0,
                'limit' => $setting['limit']
            );

            $results = $this->model_catalog_product->getProducts($filter_data);
            $data['latest_products'] = $this->createProducts($results, $setting);
        }

        //Bestsellers
        $data['bestseller_products'] = array();
        if ($setting['bestseller'] == "1") {

            $results = $this->model_catalog_product->getBestSellerProducts($setting['limit']);
            $data['bestseller_products'] = $this->createProducts($results, $setting);
        }

        //Featured
        $data['featured_products'] = array();
        if ($setting['featured'] == "1") {

            if (!$setting['limit']) {
                $setting['limit'] = 4;
            }

            $products = array_slice($setting['product'], 0, (int)$setting['limit']);
            $data['featured_products'] = $this->createProducts($products, $setting);
        }

        $data['module'] = $module++;
        if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/module/tm_module_tab.tpl')) {
            return $this->load->view($this->config->get('config_template') . '/template/module/tm_module_tab.tpl', $data);
        } else {
            return $this->load->view('default/template/module/tm_module_tab.tpl', $data);
        }

    }

    private
    function getQuickDesc($product)
    {
        $desc = html_entity_decode($product['description'], ENT_QUOTES, 'UTF-8');
        $quick_descr_start = strpos($desc, '</iframe>') + 9;
        if ($quick_descr_start > 9) {
            return substr($desc, $quick_descr_start);
        } else {
            return $desc;
        }
    }

    private function createProducts($products, $setting)
    {
        $productArray = array();
        if ($products) {
            foreach ($products as $product_info) {
                if (!is_array($product_info)) {
                    $product_info = $this->model_catalog_product->getProduct($product_info);
                }
                $review_total = $this->model_catalog_review->getTotalReviewsByProductId($product_info['product_id']);

                if ($product_info) {
                    if ($product_info['image']) {
                        $image = $this->model_tool_image->resize($product_info['image'], $setting['width'], $setting['height']);
                    } else {
                        $image = $this->model_tool_image->resize('placeholder.png', $setting['width'], $setting['height']);
                    }

                    if (($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) {
                        $price = $this->currency->format($this->tax->calculate($product_info['price'], $product_info['tax_class_id'], $this->config->get('config_tax')));
                    } else {
                        $price = false;
                    }

                    if ((float)$product_info['special']) {
                        $special = $this->currency->format($this->tax->calculate($product_info['special'], $product_info['tax_class_id'], $this->config->get('config_tax')));
                    } else {
                        $special = false;
                    }

                    if ($this->config->get('config_tax')) {
                        $tax = $this->currency->format((float)$product_info['special'] ? $product_info['special'] : $product_info['price']);
                    } else {
                        $tax = false;
                    }

                    if ($this->config->get('config_review_status')) {
                        $rating = $product_info['rating'];
                    } else {
                        $rating = false;
                    }

                    $quick_descr = $this->getQuickDesc($product_info);

                    $productArray[] = array(
                        'product_id' => $product_info['product_id'],
                        'thumb' => $image,
                        'img-width' => $setting['width'],
                        'img-height' => $setting['height'],
                        'name' => $product_info['name'],
                        'description' => utf8_substr(strip_tags(html_entity_decode($product_info['description'], ENT_QUOTES, 'UTF-8')), 0, $this->config->get('config_product_description_length')) . '..',
                        'price' => $price,
                        'special' => $special,
                        'tax' => $tax,
                        'rating' => $rating,
                        'reviews' => $review_total,
                        'author' => $product_info['manufacturer'],
                        'description1' => $quick_descr,
                        'manufacturers' => $data['manufacturers'] = $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $product_info['manufacturer_id']),
                        'model' => $product_info['model'],
                        'text_availability' => $product_info['quantity'],
                        'allow' => $product_info['minimum'],
                        'href' => $this->url->link('product/product', 'product_id=' . $product_info['product_id'])
                    );
                }
            }
        }
        return $productArray;
    }
}