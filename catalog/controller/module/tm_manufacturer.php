<?php
class ControllerModuleTmManufacturer extends Controller
{
    public function index($setting)
    {
        $this->load->language('module/tm_manufacturer');
        $this->load->model('catalog/manufacturer');

        $data['heading_title'] = $this->language->get('heading_title');

        $data['categories'] = array();

        $results = $this->model_catalog_manufacturer->getManufacturers();

        foreach ($results as $result) {

            if (!isset($data['categories'])) {
                $data['categories']['name'] = $result['name'];
            }
            $data['categories']['manufacturer'][] = array(
                'name' => $result['name'],
                'href' => $this->url->link('product/manufacturer/info', 'manufacturer_id=' . $result['manufacturer_id'])
            );
        }

        if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/module/tm_manufacturer.tpl')) {
            return $this->load->view($this->config->get('config_template') . '/template/module/tm_manufacturer.tpl', $data);
        } else {
            return $this->load->view('default/template/module/tm_manufacturer.tpl', $data);
        }
    }
}