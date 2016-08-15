<?php
class ControllerModuleTmCategoryMenu extends Controller {
	public function index() {
		$this->load->language('module/tm_category_menu');
		
		
		$this->document->addStyle('catalog/view/javascript/tmcategory/tm_category_menu.css');
		$data['heading_title'] = $this->language->get('heading_title');

		if (isset($this->request->get['path'])) {
			$parts = explode('_', (string)$this->request->get['path']);
		} else {
			$parts = array();
		}

		if (isset($parts[0])) {
			$data['category_id'] = $parts[0];
		} else {
			$data['category_id'] = 0;
		}

		if (isset($parts[1])) {
			$data['child_id'] = $parts[1];
		} else {
			$data['child_id'] = 0;
		}

		$this->load->model('catalog/category');

		$this->load->model('catalog/product');
		$this->load->model('tool/image');

		$data['categories'] = array();

		$categories = $this->model_catalog_category->getCategories(0);

		foreach ($categories as $category) {
			
				// Level 2
				$children_data = array();
				//$subchildren_data = array();

				$children = $this->model_catalog_category->getCategories($category['category_id']);

				foreach ($children as $child) {
					$filter_data = array(
						'filter_category_id'  => $child['category_id'],
						'filter_sub_category' => true
					);
					
					// Level 3
					$subchildren_data = array();
					$subchildren = $this->model_catalog_category->getCategories($child['category_id']);

					foreach ($subchildren as $subchild) {
						$filter_subdata = array(
							'filter_category_id'  => $subchild['category_id'],
							'filter_sub_category' => true
						);
						$subchildren_data[] = array(
							'category_id' => $subchild['category_id'],
							 
	     'name'  => $subchild['name'],
	    
							'href'  => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id'] . '_' . $subchild['category_id']),
							
						);
					}
					if ($child['image']) {
						$image = $this->model_tool_image->resize($child['image'], $this->config->get('config_image_product_width'), $this->config->get('config_image_product_height'));
					} else {
						$image = $this->model_tool_image->resize('placeholder.png', $this->config->get('config_image_product_width'), $this->config->get('config_image_product_height'));
					}
					$children_data[] = array(
						 
	     'name'  => $child['name'],
	    
						'href'  => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id']),
						'thumb'       => $image,
						'subchildren' => $subchildren_data
					);
					
				}
				
				// Level 1
				$data['categories'][] = array(
					'name'     => $category['name'],
					'children' => $children_data,
					'column'   => $category['column'] ? $category['column'] : 1,
					
					'href'     => $this->url->link('product/category', 'path=' . $category['category_id'])
				);
			
		}

		if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/module/tm_category_menu.tpl')) {
			return $this->load->view($this->config->get('config_template') . '/template/module/tm_category_menu.tpl', $data);
		} else {
			return $this->load->view('default/template/module/tm_category_menu.tpl', $data);
		}
	}
}