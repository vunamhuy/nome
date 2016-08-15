<?php
class ControllerModuleTmTwitter extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('module/tm_twitter');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('extension/module');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			if (!isset($this->request->get['module_id'])) {
				$this->model_extension_module->addModule('tm_twitter', $this->request->post);
			} else {
				$this->model_extension_module->editModule($this->request->get['module_id'], $this->request->post);
			}
			
			$this->cache->delete('product');

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('extension/module', 'token=' . $this->session->data['token'], 'SSL'));
		}

		$data['heading_title'] = $this->language->get('heading_title');
		
		$data['text_edit'] = $this->language->get('text_edit');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');

		$data['entry_name'] = $this->language->get('entry_name');
		$data['entry_limit'] = $this->language->get('entry_limit');
		$data['entry_image'] = $this->language->get('entry_image');
		$data['entry_width'] = $this->language->get('entry_width');
		$data['entry_height'] = $this->language->get('entry_height');
		$data['entry_status'] = $this->language->get('entry_status');
		$data['text_yes'] = $this->language->get('text_yes');
		$data['text_no'] = $this->language->get('text_no');
		$data['text_color_scheme_light'] = $this->language->get('text_color_scheme_light');
		$data['text_color_scheme_dark']  = $this->language->get('text_color_scheme_dark');
		$data['text_preview']            = $this->language->get('text_preview');
		
		$data['entry_page_url']        = $this->language->get('entry_page_url');
		$data['entry_dimension']       = $this->language->get('entry_dimension');
        $data['entry_color_scheme']    = $this->language->get('entry_color_scheme');
        $data['entry_faces']   		 = $this->language->get('entry_faces');
        $data['entry_stream'] 		 = $this->language->get('entry_stream');
        $data['entry_header'] 		 = $this->language->get('entry_header');
		$data['entry_border']    = $this->language->get('entry_border');
		$data['entry_widget_id']    = $this->language->get('entry_widget_id');
		$data['entry_tweet_limit']    = $this->language->get('entry_tweet_limit');


		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');
		$data['button_module_add'] = $this->language->get('button_module_add');
		$data['button_remove'] = $this->language->get('button_remove');

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
		if (isset($this->error['widget_id'])) {
			$data['error_widget_id'] = $this->error['widget_id'];
		} else {
			$data['error_widget_id'] = '';
		}
		
		if (isset($this->error['width'])) {
			$data['error_width'] = $this->error['width'];
		} else {
			$data['error_width'] = '';
		}
		if (isset($this->error['page_url'])) {
			$data['error_page_url'] = $this->error['page_url'];
		} else {
			$data['error_page_url'] = '';
		}
		
		if (isset($this->error['height'])) {
			$data['error_height'] = $this->error['height'];
		} else {
			$data['error_height'] = '';
		}
		if (isset($this->error['tweet_limit'])) {
			$data['error_tweet_limit'] = $this->error['tweet_limit'];
		} else {
			$data['error_tweet_limit'] = '';
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

		if (!isset($this->request->get['module_id'])) {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title'),
				'href' => $this->url->link('module/tm_twitter', 'token=' . $this->session->data['token'], 'SSL')
			);
		} else {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title'),
				'href' => $this->url->link('module/tm_twitter', 'token=' . $this->session->data['token'] . '&module_id=' . $this->request->get['module_id'], 'SSL')
			);			
		}

		if (!isset($this->request->get['module_id'])) {
			$data['action'] = $this->url->link('module/tm_twitter', 'token=' . $this->session->data['token'], 'SSL');
		} else {
			$data['action'] = $this->url->link('module/tm_twitter', 'token=' . $this->session->data['token'] . '&module_id=' . $this->request->get['module_id'], 'SSL');
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
		if (isset($this->request->post['tweet_limit'])) {
			$data['tweet_limit'] = $this->request->post['tweet_limit'];
		} elseif (!empty($module_info)) {
			$data['tweet_limit'] = $module_info['tweet_limit'];
		} else {
			$data['tweet_limit'] = '';
		}	
		if (isset($this->request->post['widget_id'])) {
			$data['widget_id'] = $this->request->post['widget_id'];
		} elseif (!empty($module_info)) {
			$data['widget_id'] = $module_info['widget_id'];
		} else {
			$data['widget_id'] = '';
		}	
					
		if (isset($this->request->post['page_url'])) {
			$data['page_url'] = $this->request->post['page_url'];
		} elseif (!empty($module_info)) {
			$data['page_url'] = $module_info['page_url'];
		} else {
			$data['page_url'] = '';
		}
		if (isset($this->request->post['color_scheme'])) {
			$data['color_scheme'] = $this->request->post['color_scheme'];
		} elseif (!empty($module_info)) {
			$data['color_scheme'] = $module_info['color_scheme'];
		} else {
			$data['color_scheme'] = '';
		}
		
		
		
		

		if (isset($this->request->post['width'])) {
			$data['width'] = $this->request->post['width'];
		} elseif (!empty($module_info)) {
			$data['width'] = $module_info['width'];
		} else {
			$data['width'] = 200;
		}	
			
		if (isset($this->request->post['height'])) {
			$data['height'] = $this->request->post['height'];
		} elseif (!empty($module_info)) {
			$data['height'] = $module_info['height'];
		} else {
			$data['height'] = 200;
		}
		
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

		$this->response->setOutput($this->load->view('module/tm_twitter.tpl', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'module/tm_twitter')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}
		
		
		
		if (!$this->request->post['width']) {
			$this->error['width'] = $this->language->get('error_width');
		}
		
		if (!$this->request->post['height']) {
			$this->error['height'] = $this->language->get('error_height');
		}

		return !$this->error;
	}
}