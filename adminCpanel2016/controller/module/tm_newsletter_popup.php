<?php
class ControllerModuleTMNewsletterPopup extends Controller {
    private $error = array();

    public function index() {
        $this->load->language('module/tm_newsletter_popup');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('extension/module');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            if (!isset($this->request->get['module_id'])) {
                $this->model_extension_module->addModule('tm_newsletter_popup', $this->request->post);
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

        $data['entry_name'] = $this->language->get('entry_name');
        $data['entry_status'] = $this->language->get('entry_status');
        $data['entry_title'] = $this->language->get('entry_title');
        $data['entry_description'] = $this->language->get('entry_description');
        $data['entry_bg'] = $this->language->get('entry_bg');
        $data['entry_bg_width'] = $this->language->get('entry_bg_width');
        $data['entry_bg_height'] = $this->language->get('entry_bg_height');
        $data['entry_cookie'] = $this->language->get('entry_cookie');

        $data['help_cookie'] = $this->language->get('help_cookie');

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

        if (isset($this->error['width'])) {
            $data['error_width'] = $this->error['width'];
        } else {
            $data['error_width'] = '';
        }

        if (isset($this->error['height'])) {
            $data['error_height'] = $this->error['height'];
        } else {
            $data['error_height'] = '';
        }
        if (isset($this->error['cookie'])) {
            $data['error_cookie'] = $this->error['cookie'];
        } else {
            $data['error_cookie'] = '';
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
            'href' => $this->url->link('module/tm_newsletter_popup', 'token=' . $this->session->data['token'], 'SSL')
        );

        if (!isset($this->request->get['module_id'])) {
            $data['action'] = $this->url->link('module/tm_newsletter_popup', 'token=' . $this->session->data['token'], 'SSL');
        } else {
            $data['action'] = $this->url->link('module/tm_newsletter_popup', 'token=' . $this->session->data['token'] . '&module_id=' . $this->request->get['module_id'], 'SSL');
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

        if (isset($this->request->post['tm_newsletter_popup_description'])) {
            $data['tm_newsletter_popup_description'] = $this->request->post['tm_newsletter_popup_description'];
        } elseif (!empty($module_info)) {
            $data['tm_newsletter_popup_description'] = $module_info['tm_newsletter_popup_description'];
        } else {
            $data['tm_newsletter_popup_description'] = '';
        }

        $this->load->model('tool/image');
        $data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);

        if (isset($this->request->post['newsletter_popup_bg'])) {
            $data['newsletter_popup_bg'] = $this->request->post['newsletter_popup_bg'];
        } elseif (!empty($module_info)) {
            $data['newsletter_popup_bg'] = $module_info['newsletter_popup_bg'];
        } else {
            $data['newsletter_popup_bg'] = '';
        }

        if (isset($this->request->post['newsletter_popup_bg']) && is_file(DIR_IMAGE . $this->request->post['newsletter_popup_bg'])) {
            $data['popup_bg'] = $this->model_tool_image->resize($this->request->post['newsletter_popup_bg'], 100, 100);
        } elseif (!empty($module_info) && is_file(DIR_IMAGE . $module_info['newsletter_popup_bg'])) {
            $data['popup_bg'] = $this->model_tool_image->resize($module_info['newsletter_popup_bg'], 100, 100);
        } else {
            $data['popup_bg'] = $this->model_tool_image->resize('no_image.png', 100, 100);
        }

        if (isset($this->request->post['newsletter_popup_bg_width'])) {
            $data['newsletter_popup_bg_width'] = $this->request->post['newsletter_popup_bg_width'];
        } elseif (!empty($module_info)) {
            $data['newsletter_popup_bg_width'] = $module_info['newsletter_popup_bg_width'];
        } else {
            $data['newsletter_popup_bg_width'] = '';
        }

        if (isset($this->request->post['newsletter_popup_bg_height'])) {
            $data['newsletter_popup_bg_height'] = $this->request->post['newsletter_popup_bg_height'];
        } elseif (!empty($module_info)) {
            $data['newsletter_popup_bg_height'] = $module_info['newsletter_popup_bg_height'];
        } else {
            $data['newsletter_popup_bg_height'] = '';
        }

        if (isset($this->request->post['newsletter_popup_cookie'])) {
            $data['newsletter_popup_cookie'] = $this->request->post['newsletter_popup_cookie'];
        } elseif (!empty($module_info)) {
            $data['newsletter_popup_cookie'] = $module_info['newsletter_popup_cookie'];
        } else {
            $data['newsletter_popup_cookie'] = '';
        }


        $this->load->model('localisation/language');

        $data['languages'] = $this->model_localisation_language->getLanguages();


        if (isset($this->request->post['status'])) {
            $data['status'] = $this->request->post['status'];
        } elseif (!empty($module_info)) {
            $data['status'] = $module_info['status'];
        } else {
            $data['status'] = '';
        }

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('module/tm_newsletter_popup.tpl', $data));
    }

    protected function validate() {
        if (!$this->user->hasPermission('modify', 'module/tm_newsletter_popup')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }

        if ((utf8_strlen($this->request->post['name']) < 3) || (utf8_strlen($this->request->post['name']) > 64)) {
            $this->error['name'] = $this->language->get('error_name');
        }

        if (!empty($this->request->post['newsletter_popup_bg'])) {
            if (!is_numeric($this->request->post['newsletter_popup_bg_width'])) {
                $this->error['width'] = $this->language->get('error_bg_width');
            }
            if (!is_numeric($this->request->post['newsletter_popup_bg_height'])) {
                $this->error['height'] = $this->language->get('error_bg_height');
            }
        }

        if (!is_numeric($this->request->post['newsletter_popup_cookie'])) {
            $this->error['cookie'] = $this->language->get('error_cookie');
        }

        return !$this->error;
    }
}