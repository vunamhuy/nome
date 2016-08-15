<?php
class ControllerModuleTmGoogleMap extends Controller {
	public function index($setting) {
		$this->load->language('module/tm_google_map');

        $this->document->addStyle('catalog/view/javascript/tmgooglemap/tmgooglemap.css');
        $this->document->addScript('//maps.googleapis.com/maps/api/js?key=' . trim($setting['tm_google_map_key']) . '&amp;sensor=' . $setting['tm_google_map_sensor'] .'');
		$this->document->addScript('catalog/view/javascript/tmgooglemap/jquery.rd-google-map.js');
		
		$data['heading_title'] = $this->language->get('heading_title');

		$data['main_geocode'] = $this->config->get('config_geocode');
        $data['main_address'] = $this->config->get('config_address');

        if (isset($setting['tm_google_map_address'])){
            $data['address'] = $setting['tm_google_map_address'];
        }else{
            $data['address'] = '';
        }
        if (isset($setting['tm_google_map_geocode'])){
            $data['geocode'] = $setting['tm_google_map_geocode'];
        }else{
            $data['geocode'] = '';
        }

		$data['zoom'] = $setting['tm_google_map_zoom'];
		$data['type'] = $setting['tm_google_map_type'];
		$data['width'] = $setting['tm_google_map_width'];
		$data['height'] = $setting['tm_google_map_height'];

        if (strlen(trim($setting['tm_google_map_styles'])) > 0){
			$data['styles'] = trim($setting['tm_google_map_styles']);
        }else{
            $data['styles'] = "[]";
        }

		$data['disable_ui'] = $setting['tm_google_map_disable_ui'];
		$data['scrollwheel'] = $setting['tm_google_map_scrollwheel'];
		$data['draggable'] = $setting['tm_google_map_draggable'];


        $markerWidth = $setting['tm_google_map_marker_width'];
        $markerHeight = $setting['tm_google_map_marker_height'];
        if (is_file(DIR_IMAGE .  $setting['tm_google_map_marker'])){
		    $data['marker_image'] = $this->model_tool_image->resize($setting['tm_google_map_marker'], $markerWidth, $markerHeight);
        }else{
            $data['marker_image'] = '';
        }

        if (is_file(DIR_IMAGE .  $setting['tm_google_map_marker_active'])){
            $data['marker_active_image'] = $this->model_tool_image->resize($setting['tm_google_map_marker_active'], $markerWidth, $markerHeight);
        }else{
            $data['marker_active_image'] = '';
        }

		if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/module/tm_google_map.tpl')) {
			return $this->load->view($this->config->get('config_template') . '/template/module/tm_google_map.tpl', $data);
		} else {
			return $this->load->view('default/template/module/tm_google_map.tpl', $data);
		}
		
	}
	
}