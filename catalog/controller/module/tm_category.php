<?php
class ControllerModuleTmCategory extends Controller {
	public function index($setting) {
		$this->load->language('module/category');

		$data['heading_title'] = $this->language->get('heading_title');

		

		$this->load->model('catalog/category');

		$this->load->model('catalog/product');

		$this->load->model('design/topmenu');
		$data['categories'] = $this->model_design_topmenu->getMenu();
		$categories = $this->model_catalog_category->getCategories(0);

		

		if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/module/tm_category.tpl')) {
			return $this->load->view($this->config->get('config_template') . '/template/module/tm_category.tpl', $data);
		} else {
			return $this->load->view('default/template/module/tm_category.tpl', $data);
		}
		
	}
	
}