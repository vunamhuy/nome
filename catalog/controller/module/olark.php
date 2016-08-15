<?php

class ControllerModuleOlark extends Controller {
	public function index($setting) {
		if( isset($setting['olark_site_id']) && $setting['olark_site_id'] != '' ){
			$data['olark_site_id'] = $setting['olark_site_id'];
			if( file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/module/olark.tpl') ){
				return $this->load->view($this->config->get('config_template') . '/template/module/olark.tpl', $data);
			} else {
				return $this->load->view('default/template/module/olark.tpl', $data);
			}
		}
	}
}
