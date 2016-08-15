<?php

class ControllerModuleTmGoogleMap extends Controller
{
    private $error = array();

    public function index()
    {
        $this->load->language('module/tm_google_map');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('extension/module');
        $this->load->model('tool/image');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            if (!isset($this->request->get['module_id'])) {
                $this->model_extension_module->addModule('tm_google_map', $this->request->post);
            } else {
                $this->model_extension_module->editModule($this->request->get['module_id'], $this->request->post);
            }

            $this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect($this->url->link('extension/module', 'token=' . $this->session->data['token'], 'SSL'));
        }


        $data['heading_title'] = $this->language->get('heading_title');

        $data['text_edit'] = $this->language->get('text_edit');
        $data['text_enabled'] = $this->language->get('text_enabled');
        $data['text_disabled'] = $this->language->get('text_disabled');
        $data['text_add_marker'] = $this->language->get('text_add_marker');
        $data['text_remove_marker'] = $this->language->get('text_remove_marker');
        $data['text_type_land'] = $this->language->get('text_type_land');
        $data['text_type_hybrid'] = $this->language->get('text_type_hybrid');
        $data['text_type_roadmap'] = $this->language->get('text_type_roadmap');
        $data['text_type_satellite'] = $this->language->get('text_type_satellite');
        $data['text_true'] = $this->language->get('text_true');
        $data['text_false'] = $this->language->get('text_false');
        $data['text_width'] = $this->language->get('text_width');
        $data['text_height'] = $this->language->get('text_height');

        $data['entry_name'] = $this->language->get('entry_name');
        $data['entry_status'] = $this->language->get('entry_status');
        $data['entry_address'] = $this->language->get('entry_address');
        $data['entry_geocode'] = $this->language->get('entry_geocode');
        $data['entry_zoom'] = $this->language->get('entry_zoom');
        $data['entry_type'] = $this->language->get('entry_type');
        $data['entry_image'] = $this->language->get('entry_image');
        $data['entry_marker_width'] = $this->language->get('entry_marker_width');
        $data['entry_marker_height'] = $this->language->get('entry_marker_height');
        $data['entry_sensor'] = $this->language->get('entry_sensor');
        $data['entry_width'] = $this->language->get('entry_width');
        $data['entry_height'] = $this->language->get('entry_height');
        $data['entry_styles'] = $this->language->get('entry_styles');
        $data['entry_disable_ui'] = $this->language->get('entry_disable_ui');
        $data['entry_scrollwheel'] = $this->language->get('entry_scrollwheel');
        $data['entry_draggable'] = $this->language->get('entry_draggable');
        $data['entry_active_image'] = $this->language->get('entry_active_image');
        $data['entry_key'] = $this->language->get('entry_key');

        $data['button_save'] = $this->language->get('button_save');
        $data['button_cancel'] = $this->language->get('button_cancel');

        $data['help_geocode'] = $this->language->get('help_geocode');
        $data['help_zoom'] = $this->language->get('help_zoom');
        $data['help_size'] = $this->language->get('help_size');
        $data['help_styles'] = $this->language->get('help_styles');
        $data['help_disable_ui'] = $this->language->get('help_disable_ui');
        $data['help_scrollwheel'] = $this->language->get('help_scrollwheel');
        $data['help_draggable'] = $this->language->get('help_draggable');
        $data['help_active_image'] = $this->language->get('help_active_image');

        if (isset($this->error['warning'])) {
            $data['error_warning'] = $this->error['warning'];
        } else {
            $data['error_warning'] = '';
        }

        if (isset($this->error['name'])) {
            $data['error_name'] = $this->error['name'];
        } else {
            $data['error_name'] = '';
        }

        if (isset($this->error['tm_google_map_key'])) {
            $data['error_key'] = $this->error['tm_google_map_key'];
        } else {
            $data['error_key'] = '';
        }

        if (isset($this->error['tm_google_map_marker_width'])) {
            $data['error_marker_width'] = $this->error['tm_google_map_marker_width'];
        } else {
            $data['error_marker_width'] = '';
        }
        if (isset($this->error['tm_google_map_marker_height'])) {
            $data['error_marker_height'] = $this->error['tm_google_map_marker_height'];
        } else {
            $data['error_marker_height'] = '';
        }
        if (isset($this->error['tm_google_map_marker_height'])) {
            $data['error_marker_height'] = $this->error['tm_google_map_marker_height'];
        } else {
            $data['error_marker_height'] = '';
        }
        if (isset($this->error['tm_google_map_zoom'])) {
            $data['error_zoom'] = $this->error['tm_google_map_zoom'];
        } else {
            $data['error_zoom'] = '';
        }

        if (isset($this->error['tm_google_map_marker_active'])) {
            $data['error_marker_active'] = $this->error['tm_google_map_marker_active'];
        } else {
            $data['error_marker_active'] = '';
        }

        if (isset($this->error['tm_google_map_marker'])) {
            $data['error_marker'] = $this->error['tm_google_map_marker'];
        } else {
            $data['error_marker'] = '';
        }

        if (isset($this->error['tm_google_map_styles'])) {
            $data['error_styles'] = $this->error['tm_google_map_styles'];
        } else {
            $data['error_styles'] = '';
        }


        if (isset($this->error['tm_google_map_geocode'])) {
            $data['error_geocode'] = $this->error['tm_google_map_geocode'];
        } else {
            $data['error_geocode'] = '';
        }

        $data['breadcrumbs'] = array();

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_home'),
            'href' => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], 'SSL')
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('text_module'),
            'href' => $this->url->link('extension/module', 'token=' . $this->session->data['token'], 'SSL')
        );

        $data['breadcrumbs'][] = array(
            'text' => $this->language->get('heading_title'),
            'href' => $this->url->link('module/tm_google_map', 'token=' . $this->session->data['token'], 'SSL')
        );

        if (!isset($this->request->get['module_id'])) {
            $data['action'] = $this->url->link('module/tm_google_map', 'token=' . $this->session->data['token'], 'SSL');
        } else {
            $data['action'] = $this->url->link('module/tm_google_map', 'token=' . $this->session->data['token'] . '&module_id=' . $this->request->get['module_id'], 'SSL');
        }

        $data['cancel'] = $this->url->link('extension/module', 'token=' . $this->session->data['token'], 'SSL');

        if (isset($this->request->get['module_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
            $module_info = $this->model_extension_module->getModule($this->request->get['module_id']);
        }


        if (isset($this->request->post['tm_google_map_status'])) {
            $data['status'] = $this->request->post['tm_google_map_status'];
        } elseif (!empty($module_info)) {
            $data['status'] = $module_info['status'];
        } else {
            $data['status'] = '';
        }

        if (isset($this->request->post['name'])) {
            $data['name'] = $this->request->post['name'];
        } elseif (!empty($module_info)) {
            $data['name'] = $module_info['name'];
        } else {
            $data['name'] = '';
        }

        if (isset($this->request->post['tm_google_map_key'])) {
            $data['tm_google_map_key'] = $this->request->post['tm_google_map_key'];
        } elseif (!empty($module_info)) {
            $data['tm_google_map_key'] = $module_info['tm_google_map_key'];
        } else {
            $data['tm_google_map_key'] = '';
        }

        if (isset($this->request->post['tm_google_map_address'])) {
            $data['tm_google_map_address'] = $this->request->post['tm_google_map_address'];
        } elseif (!empty($module_info) && isset($module_info['tm_google_map_address'])) {
            $data['tm_google_map_address'] = $module_info['tm_google_map_address'];
        } else {
            $data['tm_google_map_address'] = '';
        }

        if (isset($this->request->post['tm_google_map_geocode'])) {
            $data['tm_google_map_geocode'] = $this->request->post['tm_google_map_geocode'];
        } elseif (!empty($module_info) && isset($module_info['tm_google_map_geocode'])) {
            $data['tm_google_map_geocode'] = $module_info['tm_google_map_geocode'];
        } else {
            $data['tm_google_map_geocode'] = '';
        }

        if (isset($this->request->post['tm_google_map_zoom'])) {
            $data['tm_google_map_zoom'] = $this->request->post['tm_google_map_zoom'];
        } elseif (!empty($module_info)) {
            $data['tm_google_map_zoom'] = $module_info['tm_google_map_zoom'];
        } else {
            $data['tm_google_map_zoom'] = '';
        }
        if (isset($this->request->post['tm_google_map_type'])) {
            $data['tm_google_map_type'] = $this->request->post['tm_google_map_type'];
        } elseif (!empty($module_info)) {
            $data['tm_google_map_type'] = $module_info['tm_google_map_type'];
        } else {
            $data['tm_google_map_type'] = '';
        }

        if (isset($this->request->post['tm_google_map_marker'])) {
            $data['tm_google_map_marker'] = $this->request->post['tm_google_map_marker'];
        } elseif (!empty($module_info)) {
            $data['tm_google_map_marker'] = $module_info['tm_google_map_marker'];
        } else {
            $data['tm_google_map_marker'] = '';
        }

        if (isset($this->request->post['tm_google_map_marker']) && is_file(DIR_IMAGE . $this->request->post['tm_google_map_marker'])) {
            $data['map_marker'] = $this->model_tool_image->resize($this->request->post['tm_google_map_marker'], 100, 100);
        } elseif (!empty($module_info) && isset($module_info['tm_google_map_marker']) && is_file(DIR_IMAGE . $module_info['tm_google_map_marker'])) {
            $data['map_marker'] = $this->model_tool_image->resize($module_info['tm_google_map_marker'], 100, 100);
        } else {
            $data['map_marker'] = $this->model_tool_image->resize('no_image.png', 100, 100);
        }


        if (isset($this->request->post['tm_google_map_marker_active'])) {
            $data['tm_google_map_marker_active'] = $this->request->post['tm_google_map_marker_active'];
        } elseif (!empty($module_info)) {
            $data['tm_google_map_marker_active'] = $module_info['tm_google_map_marker_active'];
        } else {
            $data['tm_google_map_marker_active'] = '';
        }

        if (isset($this->request->post['tm_google_map_marker_active']) && is_file(DIR_IMAGE . $this->request->post['tm_google_map_marker_active'])) {
            $data['map_marker_active'] = $this->model_tool_image->resize($this->request->post['tm_google_map_marker_active'], 100, 100);
        } elseif (!empty($module_info) && isset($module_info['tm_google_map_marker_active']) && is_file(DIR_IMAGE . $module_info['tm_google_map_marker_active'])) {
            $data['map_marker_active'] = $this->model_tool_image->resize($module_info['tm_google_map_marker_active'], 100, 100);
        } else {
            $data['map_marker_active'] = $this->model_tool_image->resize('no_image.png', 100, 100);
        }


        if (isset($this->request->post['tm_google_map_marker_width'])) {
            $data['tm_google_map_marker_width'] = $this->request->post['tm_google_map_marker_width'];
        } elseif (!empty($module_info)) {
            $data['tm_google_map_marker_width'] = $module_info['tm_google_map_marker_width'];
        } else {
            $data['tm_google_map_marker_width'] = '';
        }

        if (isset($this->request->post['tm_google_map_marker_height'])) {
            $data['tm_google_map_marker_height'] = $this->request->post['tm_google_map_marker_height'];
        } elseif (!empty($module_info)) {
            $data['tm_google_map_marker_height'] = $module_info['tm_google_map_marker_height'];
        } else {
            $data['tm_google_map_marker_height'] = '';
        }

        if (isset($this->request->post['tm_google_map_sensor'])) {
            $data['tm_google_map_sensor'] = $this->request->post['tm_google_map_sensor'];
        } elseif (!empty($module_info)) {
            $data['tm_google_map_sensor'] = $module_info['tm_google_map_sensor'];
        } else {
            $data['tm_google_map_sensor'] = '';
        }

        if (isset($this->request->post['tm_google_map_width'])) {
            $data['tm_google_map_width'] = $this->request->post['tm_google_map_width'];
        } elseif (!empty($module_info)) {
            $data['tm_google_map_width'] = $module_info['tm_google_map_width'];
        } else {
            $data['tm_google_map_width'] = '';
        }

        if (isset($this->request->post['tm_google_map_height'])) {
            $data['tm_google_map_height'] = $this->request->post['tm_google_map_height'];
        } elseif (!empty($module_info)) {
            $data['tm_google_map_height'] = $module_info['tm_google_map_height'];
        } else {
            $data['tm_google_map_height'] = '';
        }

        if (isset($this->request->post['tm_google_map_styles'])) {
            $data['tm_google_map_styles'] = $this->request->post['tm_google_map_styles'];
        } elseif (!empty($module_info)) {
            $data['tm_google_map_styles'] = $module_info['tm_google_map_styles'];
        } else {
            $data['tm_google_map_styles'] = '';
        }

        if (isset($this->request->post['tm_google_map_disable_ui'])) {
            $data['tm_google_map_disable_ui'] = $this->request->post['tm_google_map_disable_ui'];
        } elseif (!empty($module_info)) {
            $data['tm_google_map_disable_ui'] = $module_info['tm_google_map_disable_ui'];
        } else {
            $data['tm_google_map_disable_ui'] = '';
        }

        if (isset($this->request->post['tm_google_map_scrollwheel'])) {
            $data['tm_google_map_scrollwheel'] = $this->request->post['tm_google_map_scrollwheel'];
        } elseif (!empty($module_info)) {
            $data['tm_google_map_scrollwheel'] = $module_info['tm_google_map_scrollwheel'];
        } else {
            $data['tm_google_map_scrollwheel'] = '';
        }

        if (isset($this->request->post['tm_google_map_draggable'])) {
            $data['tm_google_map_draggable'] = $this->request->post['tm_google_map_draggable'];
        } elseif (!empty($module_info)) {
            $data['tm_google_map_draggable'] = $module_info['tm_google_map_draggable'];
        } else {
            $data['tm_google_map_draggable'] = '';
        }


        $data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);


        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('module/tm_google_map.tpl', $data));
    }

    protected function validate()
    {
        if (!$this->user->hasPermission('modify', 'module/tm_google_map')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        if (!is_numeric($this->request->post['tm_google_map_zoom'])) {
            $this->error['tm_google_map_zoom'] = $this->language->get('error_zoom');
        }

        if ((utf8_strlen($this->request->post['name']) < 3) || (utf8_strlen($this->request->post['name']) > 64)) {
            $this->error['name'] = $this->language->get('error_name');
        }

        if (!empty($this->request->post['tm_google_map_marker']) || !empty($this->request->post['tm_google_map_marker_active'])) {
            if (!is_numeric($this->request->post['tm_google_map_marker_width'])) {
                $this->error['tm_google_map_marker_width'] = $this->language->get('error_marker_width');
            }
            if (!is_numeric($this->request->post['tm_google_map_marker_height'])) {
                $this->error['tm_google_map_marker_height'] = $this->language->get('error_marker_height');
            }
        }
        if (!empty($this->request->post['tm_google_map_marker']) && empty($this->request->post['tm_google_map_marker_active'])) {
            $this->error['tm_google_map_marker_active'] = $this->language->get('error_marker_active');
        }

        if (empty($this->request->post['tm_google_map_marker']) && !empty($this->request->post['tm_google_map_marker_active'])) {
            $this->error['tm_google_map_marker'] = $this->language->get('error_marker');
        }
        if (empty($this->request->post['tm_google_map_key'])) {
            $this->error['tm_google_map_key'] = $this->language->get('error_key');
        }

        if (isset($this->request->post['tm_google_map_styles'])) {
            $str = html_entity_decode(trim($this->request->post['tm_google_map_styles']));

            if (!empty($str) && !$this->isJSON($str)) {
                $this->error['tm_google_map_styles'] = $this->language->get('error_styles');
            }
        }

        if (isset($this->request->post['tm_google_map_geocode'])){
            foreach ($this->request->post['tm_google_map_geocode'] as $code){
                if (!preg_match("/^[+-]?\d+\.\d+, ?[+-]?\d+\.\d+$/",$code)){
                    $this->error['tm_google_map_geocode'] = $this->language->get('error_geocode');
                    break;
                }
            }
        }

        return !$this->error;
    }

    private function isJSON($string){
        return is_array(json_decode($string)) ? true : false;
    }
}