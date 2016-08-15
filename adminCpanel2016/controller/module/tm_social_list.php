<?php
class ControllerModuleTmSocialList extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('module/tm_social_list');

		$this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('setting/setting');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
            $this->model_setting_setting->editSetting('tm_social_list', $this->request->post);

            $this->session->data['success'] = $this->language->get('text_success');

            $this->response->redirect($this->url->link('extension/module', 'token=' . $this->session->data['token'], 'SSL'));
        }

		$data['heading_title'] = $this->language->get('heading_title');
		
		$data['text_edit'] = $this->language->get('text_edit');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');

		$data['entry_status'] = $this->language->get('entry_status');
		$data['entry_name'] = $this->language->get('entry_name');
		$data['entry_youtube'] = $this->language->get('entry_youtube');
		$data['entry_facebook'] = $this->language->get('entry_facebook');
		$data['entry_google_plus'] = $this->language->get('entry_google_plus');
		$data['entry_twitter'] = $this->language->get('entry_twitter');
		$data['entry_pinterest'] = $this->language->get('entry_pinterest');
		$data['entry_instagram'] = $this->language->get('entry_instagram');
		$data['entry_vimeo'] = $this->language->get('entry_vimeo');


		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
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
			'href' => $this->url->link('module/tm_social_list', 'token=' . $this->session->data['token'], 'SSL')
		);

        $data['action'] = $this->url->link('module/tm_social_list', 'token=' . $this->session->data['token'], 'SSL');

		$data['cancel'] = $this->url->link('extension/module', 'token=' . $this->session->data['token'], 'SSL');

        if (isset($this->request->post['tm_social_list_status'])) {
            $data['tm_social_list_status'] = $this->request->post['tm_social_list_status'];
        } else {
            $data['tm_social_list_status'] = $this->config->get('tm_social_list_status');
        }
        if (isset($this->request->post['tm_social_list_youtube'])) {
            $data['tm_social_list_youtube'] = $this->request->post['tm_social_list_youtube'];
        } else {
            $data['tm_social_list_youtube'] = $this->config->get('tm_social_list_youtube');
        }
        if (isset($this->request->post['tm_social_list_facebook'])) {
            $data['tm_social_list_facebook'] = $this->request->post['tm_social_list_facebook'];
        } else {
            $data['tm_social_list_facebook'] = $this->config->get('tm_social_list_facebook');
        }
        if (isset($this->request->post['tm_social_list_google_plus'])) {
            $data['tm_social_list_google_plus'] = $this->request->post['tm_social_list_google_plus'];
        }  else {
            $data['tm_social_list_google_plus'] = $this->config->get('tm_social_list_google_plus');
        }
        if (isset($this->request->post['tm_social_list_twitter'])) {
            $data['tm_social_list_twitter'] = $this->request->post['tm_social_list_twitter'];
        } else {
            $data['tm_social_list_twitter'] = $this->config->get('tm_social_list_twitter');
        }
        if (isset($this->request->post['tm_social_list_pinterest'])) {
            $data['tm_social_list_pinterest'] = $this->request->post['tm_social_list_pinterest'];
        } else {
            $data['tm_social_list_pinterest'] = $this->config->get('tm_social_list_pinterest');
        }
        if (isset($this->request->post['tm_social_list_instagram'])) {
            $data['tm_social_list_instagram'] = $this->request->post['tm_social_list_instagram'];
        }else {
            $data['tm_social_list_instagram'] = $this->config->get('tm_social_list_instagram');
        }
        if (isset($this->request->post['tm_social_list_vimeo'])) {
            $data['tm_social_list_vimeo'] = $this->request->post['tm_social_list_vimeo'];
        } else {
            $data['tm_social_list_vimeo'] = $this->config->get('tm_social_list_vimeo');
        }
		
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('module/tm_social_list.tpl', $data));
	}

	protected function validate() {

		if (!$this->user->hasPermission('modify', 'module/tm_social_list')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
}