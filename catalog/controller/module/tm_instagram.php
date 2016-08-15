<?php
class ControllerModuleTmInstagram extends Controller {
	public function index($setting) {
		$this->load->language('module/tm_instagram');
		$this->document->addScript('catalog/view/javascript/instagram/instafeed.min.js');
		
		$data['heading_title'] = $this->language->get('heading_title');
		
		$data['get'] = $setting['get'];
		$data['tag_name'] = $setting['tag_name'];
		$data['clientid'] = $setting['clientid'];
		$data['user_id'] = $setting['user_id'];
		$data['accesstoken'] = $setting['accesstoken'];
		$data['limit'] = $setting['limit'];
		//var_dump($setting);exit;
		if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/module/tm_instagram.tpl')) {
				return $this->load->view($this->config->get('config_template') . '/template/module/tm_instagram.tpl', $data);
			} else {
				return $this->load->view('default/template/module/tm_instagram.tpl', $data);
			}
	}
}