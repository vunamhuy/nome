<?php
class ControllerModuleBycategory extends Controller {
	public function index($setting) {
		$this->load->language('module/bycategory');

		$data['heading_title'] = $setting['name'];

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
 
		$data['products'] = array();

		$filter_data = array(
			'sort'  => 'p.date_added',
			'order' => 'DESC',
			'start' => 0,
			'limit' => $setting['limit'],
			'filter_category_id'=>$setting['category']
		);

		$data['type'] =  $setting['type'];

		$results = $this->model_catalog_product->getProducts($filter_data);

		if ($results) {
			$data['products'] = $this->createProducts($results, $setting);
			if ($data['products']) {
				if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/module/bycategory.tpl')) {
					return $this->load->view($this->config->get('config_template') . '/template/module/bycategory.tpl', $data);
				} else {
					return $this->load->view('default/template/module/bycategory.tpl', $data);
				}
			}
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
                        'img-width' => isset($setting['width'])?:150,
                        'img-height' => isset($setting['height'])?:150,
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