<?php
class ControllerModuleLatest extends Controller {
	public function index($setting) {
		$this->load->language('module/latest');

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_tax'] = $this->language->get('text_tax');

		$data['button_cart'] = $this->language->get('button_cart');
 
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
				
		$data['button_wishlist'] = $this->language->get('button_wishlist');
		$data['button_compare'] = $this->language->get('button_compare');

			$data['text_new'] = $this->language->get('text_new');
			

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
			'limit' => $setting['limit']
		);

		$results = $this->model_catalog_product->getProducts($filter_data);

		if ($results) {
			foreach ($results as $result) {
 
				$review_total = $this->model_catalog_review->getTotalReviewsByProductId($result['product_id']);
				
				if ($result['image']) {
					$image = $this->model_tool_image->resize($result['image'], $setting['width'], $setting['height']);
				} else {
					$image = $this->model_tool_image->resize('placeholder.png', $setting['width'], $setting['height']);
				}

				if (($this->config->get('config_customer_price') && $this->customer->isLogged()) || !$this->config->get('config_customer_price')) {
					$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')));
				} else {
					$price = false;
				}

				if ((float)$result['special']) {
					$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')));
				} else {
					$special = false;
				}

				if ($this->config->get('config_tax')) {
					$tax = $this->currency->format((float)$result['special'] ? $result['special'] : $result['price']);
				} else {
					$tax = false;
				}

				if ($this->config->get('config_review_status')) {
					$rating = $result['rating'];
				} else {
					$rating = false;
				}

$desc = html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8');
				$quick_descr_start = strpos($desc,'</iframe>')+9;
				if ($quick_descr_start > 9){
					$quick_descr = substr($desc, $quick_descr_start);
				}else{
					$quick_descr = $desc;
				}
				
				$data['products'][] = array(
					'product_id'  => $result['product_id'],
					'thumb'       => $image,
 
				'img-width'       => $setting['width'],
				'img-height'       => $setting['height'],
				
					'name'        => $result['name'],
					'description' => utf8_substr(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8')), 0, $this->config->get('config_product_description_length')) . '..',
					'price'       => $price,
					'special'     => $special,
					'tax'         => $tax,
					'rating'      => $rating,
 
					'reviews'    => $review_total,
					'author'     => $result['manufacturer'],
					'description1' => $quick_descr,
					'manufacturers' =>$data['manufacturers'] = $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $result['manufacturer_id']),
					'model' => $result['model'],
					'text_availability' => $result['quantity'],
					'allow' => $result['minimum'],
				
					'href'        => $this->url->link('product/product', 'product_id=' . $result['product_id']),
				);
			}

			if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/module/latest.tpl')) {
				return $this->load->view($this->config->get('config_template') . '/template/module/latest.tpl', $data);
			} else {
				return $this->load->view('default/template/module/latest.tpl', $data);
			}
		}
	}
}