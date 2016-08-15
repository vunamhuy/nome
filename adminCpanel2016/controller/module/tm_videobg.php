<?php

class ControllerModuleTmVideoBG extends Controller
{
    private $error = array();

    public function index()
    {
        $this->load->language('module/tm_videobg');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('extension/module');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            if (!isset($this->request->get['module_id'])) {
                $this->model_extension_module->addModule('tm_videobg', $this->request->post);
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
        $data['text_youtube'] = $this->language->get('text_youtube');
        $data['text_local'] = $this->language->get('text_local');
        $data['text_true'] = $this->language->get('text_true');
        $data['text_false'] = $this->language->get('text_false');

        $data['entry_status'] = $this->language->get('entry_status');
        $data['entry_url'] = $this->language->get('entry_url');
        $data['entry_name'] = $this->language->get('entry_name');
        $data['entry_type'] = $this->language->get('entry_type');
        $data['entry_muted'] = $this->language->get('entry_muted');
        $data['entry_mobile'] = $this->language->get('entry_mobile');
        $data['entry_start'] = $this->language->get('entry_start');
        $data['entry_youtube_image'] = $this->language->get('entry_youtube_image');
        $data['entry_local_image'] = $this->language->get('entry_local_image');
        $data['entry_youtube_image_width'] = $this->language->get('entry_youtube_image_width');
        $data['entry_local_image_width'] = $this->language->get('entry_local_image_width');
        $data['entry_youtube_image_height'] = $this->language->get('entry_youtube_image_height');
        $data['entry_local_image_height'] = $this->language->get('entry_local_image_height');
        $data['entry_description'] = $this->language->get('entry_description');

        $data['button_save'] = $this->language->get('button_save');
        $data['button_cancel'] = $this->language->get('button_cancel');

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
        if (isset($this->error['start'])) {
            $data['error_start'] = $this->error['start'];
        } else {
            $data['error_start'] = '';
        }
        if (isset($this->error['mobile'])) {
            $data['error_mobile'] = $this->error['mobile'];
        } else {
            $data['error_mobile'] = '';
        }
        if (isset($this->error['youtube_url'])) {
            $data['error_youtube_url'] = $this->error['youtube_url'];
        } else {
            $data['error_youtube_url'] = '';
        }
        if (isset($this->error['youtube_image_width'])) {
            $data['error_youtube_image_width'] = $this->error['youtube_image_width'];
        } else {
            $data['error_youtube_image_width'] = '';
        }
        if (isset($this->error['youtube_image_height'])) {
            $data['error_youtube_image_height'] = $this->error['youtube_image_height'];
        } else {
            $data['error_youtube_image_height'] = '';
        }
        if (isset($this->error['local_image'])) {
            $data['error_local_image'] = $this->error['local_image'];
        } else {
            $data['error_local_image'] = '';
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
            'href' => $this->url->link('module/tm_videobg', 'token=' . $this->session->data['token'], 'SSL')
        );

        if (!isset($this->request->get['module_id'])) {
            $data['action'] = $this->url->link('module/tm_videobg', 'token=' . $this->session->data['token'], 'SSL');
        } else {
            $data['action'] = $this->url->link('module/tm_videobg', 'token=' . $this->session->data['token'] . '&module_id=' . $this->request->get['module_id'], 'SSL');
        }

        $data['cancel'] = $this->url->link('extension/module', 'token=' . $this->session->data['token'], 'SSL');

        if (isset($this->request->get['module_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
            $module_info = $this->model_extension_module->getModule($this->request->get['module_id']);
        }

        if (isset($this->request->post['name'])) {
            $data['name'] = $this->request->post['name'];
        } elseif (!empty($module_info)) {
            $data['name'] = $module_info['name'];
        } else {
            $data['name'] = '';
        }

        if (isset($this->request->post['status'])) {
            $data['status'] = $this->request->post['status'];
        } elseif (!empty($module_info)) {
            $data['status'] = $module_info['status'];
        } else {
            $data['status'] = '';
        }

        if (isset($this->request->post['type'])) {
            $data['type'] = $this->request->post['type'];
        } elseif (!empty($module_info)) {
            $data['type'] = $module_info['type'];
        } else {
            $data['type'] = '';
        }
        if (isset($this->request->post['youtube_url'])) {
            $data['youtube_url'] = $this->request->post['youtube_url'];
        } elseif (!empty($module_info)) {
            $data['youtube_url'] = $module_info['youtube_url'];
        } else {
            $data['youtube_url'] = '';
        }
        if (isset($this->request->post['muted'])) {
            $data['muted'] = $this->request->post['muted'];
        } elseif (!empty($module_info)) {
            $data['muted'] = $module_info['muted'];
        } else {
            $data['muted'] = '';
        }
        if (isset($this->request->post['mobile'])) {
            $data['mobile'] = $this->request->post['mobile'];
        } elseif (!empty($module_info)) {
            $data['mobile'] = $module_info['mobile'];
        } else {
            $data['mobile'] = '';
        }
        if (isset($this->request->post['start'])) {
            $data['start'] = $this->request->post['start'];
        } elseif (!empty($module_info)) {
            $data['start'] = $module_info['start'];
        } else {
            $data['start'] = '';
        }

        $this->load->model('tool/image');
        $data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);

        if (isset($this->request->post['youtube_image'])) {
            $data['youtube_image'] = $this->request->post['youtube_image'];
        } elseif (!empty($module_info)) {
            $data['youtube_image'] = $module_info['youtube_image'];
        } else {
            $data['youtube_image'] = '';
        }

        if (isset($this->request->post['youtube_image']) && is_file(DIR_IMAGE . $this->request->post['youtube_image'])) {
            $data['youtube_img'] = $this->model_tool_image->resize($this->request->post['youtube_image'], 100, 100);
        } elseif (!empty($module_info) && is_file(DIR_IMAGE . $module_info['youtube_image'])) {
            $data['youtube_img'] = $this->model_tool_image->resize($module_info['youtube_image'], 100, 100);
        } else {
            $data['youtube_img'] = $this->model_tool_image->resize('no_image.png', 100, 100);
        }

        if (isset($this->request->post['youtube_image_width'])) {
            $data['youtube_image_width'] = $this->request->post['youtube_image_width'];
        } elseif (!empty($module_info)) {
            $data['youtube_image_width'] = $module_info['youtube_image_width'];
        } else {
            $data['youtube_image_width'] = '';
        }

        if (isset($this->request->post['youtube_image_height'])) {
            $data['youtube_image_height'] = $this->request->post['youtube_image_height'];
        } elseif (!empty($module_info)) {
            $data['youtube_image_height'] = $module_info['youtube_image_height'];
        } else {
            $data['youtube_image_height'] = '';
        }

        if (isset($this->request->post['local_image'])) {
            $data['local_image'] = $this->request->post['local_image'];
        } elseif (!empty($module_info)) {
            $data['local_image'] = $module_info['local_image'];
        } else {
            $data['local_image'] = '';
        }

        if (isset($this->request->post['local_image']) && is_file(DIR_IMAGE . $this->request->post['local_image'])) {
            $data['local_img'] = $this->model_tool_image->resize($this->request->post['local_image'], 100, 100);
        } elseif (!empty($module_info) && is_file(DIR_IMAGE . $module_info['local_image'])) {
            $data['local_img'] = $this->model_tool_image->resize($module_info['local_image'], 100, 100);
        } else {
            $data['local_img'] = $this->model_tool_image->resize('no_image.png', 100, 100);
        }

        if (isset($this->request->post['local_muted'])) {
            $data['local_muted'] = $this->request->post['local_muted'];
        } elseif (!empty($module_info)) {
            $data['local_muted'] = $module_info['local_muted'];
        } else {
            $data['local_muted'] = '';
        }

        $this->load->model('localisation/language');

        $data['languages'] = $this->model_localisation_language->getLanguages();

        if (isset($this->request->post['module_description'])) {
            $data['module_description'] = $this->request->post['module_description'];
        } elseif (!empty($module_info)) {
            $data['module_description'] = $module_info['module_description'];
        } else {
            $data['module_description'] = '';
        }

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('module/tm_videobg.tpl', $data));
    }

    protected function validate()
    {
        if ((utf8_strlen($this->request->post['name']) < 3) || (utf8_strlen($this->request->post['name']) > 64)) {
            $this->error['name'] = $this->language->get('error_name');
        }

        if (!$this->user->hasPermission('modify', 'module/tm_videobg')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        if ($this->request->post['type'] == 1) {
            if (!is_numeric($this->request->post['start'])) {
                $this->error['start'] = $this->language->get('error_start');
            }

            if (!isset($this->request->post['youtube_url'])) {
                $this->error['youtube_url'] = $this->language->get('error_youtube_url');
            }

            if ($this->request->post['mobile'] === 'false' && empty($this->request->post['youtube_image'])) {
                $this->error['mobile'] = $this->language->get('error_mobile');
            }

            if (!empty($this->request->post['youtube_image'])) {
                if (!is_numeric($this->request->post['youtube_image_width'])) {
                    $this->error['youtube_image_width'] = $this->language->get('error_youtube_image_width');
                }
                if (!is_numeric($this->request->post['youtube_image_height'])) {
                    $this->error['youtube_image_height'] = $this->language->get('error_youtube_image_height');
                }
            }
        }else{
            if (empty($this->request->post['local_image'])){
                $this->error['local_image'] = $this->language->get('error_local_image');
            }
        }

        return !$this->error;
    }
}