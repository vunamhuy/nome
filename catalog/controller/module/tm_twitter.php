<?php
class ControllerModuleTmTwitter extends Controller {
	public function index($setting) {
		$this->load->language('module/tm_twitter');
		
		$data['heading_title'] = $this->language->get('heading_title');
		
		$data['page_url'] = $setting['page_url'];
		$data['width'] = $setting['width'];
		$data['height'] = $setting['height'];
		$data['color_scheme'] = $setting['color_scheme'];
		$data['widget_id'] = $setting['widget_id'];
		$data['tweet_limit'] = $setting['tweet_limit'];
		
		
		
		if ($this->config->get('fdu_app_id')){
			$data['flb_app_id'] = $this->config->get('fdu_app_id');
		} else {
			$data['flb_app_id'] = false;
		}

		if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/module/tm_twitter.tpl')) {
				return $this->load->view($this->config->get('config_template') . '/template/module/tm_twitter.tpl', $data);
			} else {
				return $this->load->view('default/template/module/tm_twitter.tpl', $data);
			}
	}
}