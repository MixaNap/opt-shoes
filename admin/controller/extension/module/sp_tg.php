<?php
class ControllerExtensionModuleSpTg extends Controller {
	private $error = array();
	 
	public function index() {
		$this->load->language('extension/module/sp_tg');

		$this->document->setTitle(strip_tags($this->language->get('heading_title')));
		
		if (version_compare(VERSION,'3.0.0.0', '>=')) {
			$token = 'user_token=' . $this->session->data['user_token'];
			$extension = 'marketplace/extension';
			$data['token'] = $token;
		} else {
			$token = 'token=' . $this->session->data['token'];
			$extension = 'extension/extension';
			$data['token'] = $token;
		}
		
		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('sp_tg', $this->request->post);
			if (version_compare(VERSION,'3.0.0.0', '>=')) {
				if ($this->request->post['sp_tg_status']) {
					$this->request->post['module_sp_tg_status'] = $this->request->post['sp_tg_status'];
				}
				$this->model_setting_setting->editSetting('module_sp_tg', $this->request->post);
			}
			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link($extension, $token . '&type=module', true));
		}

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_edit'] = $this->language->get('text_edit');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');
		$data['text_sp_tg'] = $this->language->get('text_sp_tg');
		$data['text_settings'] = $this->language->get('text_settings'); 
		$data['text_help'] = $this->language->get('text_help'); 
		$data['text_credits'] = $this->language->get('text_credits'); 
		$data['entry_status'] = $this->language->get('entry_status'); 
		$data['entry_telegram_bot_id'] = $this->language->get('entry_telegram_bot_id');
		$data['entry_telegram_send_to_id'] = $this->language->get('entry_telegram_send_to_id');
		$data['entry_telegram_send_status'] = $this->language->get('entry_telegram_send_status');
		$data['entry_telegram_message'] = $this->language->get('entry_telegram_message');
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
			'href' => $this->url->link('common/dashboard', $token, true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link($extension, $token . '&type=module', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/sp_tg', $token, true)
		);

		$data['action'] = $this->url->link('extension/module/sp_tg', $token, true);

		$data['cancel'] = $this->url->link($extension, $token . '&type=module', true);

		if (isset($this->request->post['sp_tg_status'])) {
			$data['sp_tg_status'] = $this->request->post['sp_tg_status'];
		} else {
			$data['sp_tg_status'] = $this->config->get('sp_tg_status');
		}
		
		if (isset($this->request->post['sp_tg_telegram_bot_id'])) {
			$data['sp_tg_telegram_bot_id'] = $this->request->post['sp_tg_telegram_bot_id'];
		} else {
			$data['sp_tg_telegram_bot_id'] = $this->config->get('sp_tg_telegram_bot_id');
		}

		if (isset($this->request->post['sp_tg_telegram_send_to_id'])) {
			$data['sp_tg_telegram_send_to_id'] = $this->request->post['sp_tg_telegram_send_to_id'];
		} else {
			$data['sp_tg_telegram_send_to_id'] = $this->config->get('sp_tg_telegram_send_to_id');
		}
		
		if (isset($this->request->post['sp_tg_telegram_send_status'])) {
			$data['sp_tg_telegram_send_status'] = $this->request->post['sp_tg_telegram_send_status'];
		} elseif ($this->config->get('sp_tg_telegram_send_status')) {
			$data['sp_tg_telegram_send_status'] = $this->config->get('sp_tg_telegram_send_status');
		} else {
			$data['sp_tg_telegram_send_status'] = [];
		}
		
		$this->load->model('localisation/order_status');

		$data['order_statuses'] = $this->model_localisation_order_status->getOrderStatuses();
		
		if (isset($this->request->post['sp_tg_telegram_message'])) {
			$data['sp_tg_telegram_message'] = $this->request->post['sp_tg_telegram_message'];
		} elseif ($this->config->get('sp_tg_telegram_message')) {
			$data['sp_tg_telegram_message'] = $this->config->get('sp_tg_telegram_message');
		} else {
			$data['sp_tg_telegram_message'] = "№ заказа: {order_id}
Имя: {firstname}
Фамилия: {lastname}
Email: {email}
Телефон: {telephone}
Способ доставки: {shipping_method}
Способ оплаты: {payment_method}
Город: {city}
Адрес: {address_1}
Сумма: {total}
Статус заказа: {order_status}
Комментарий: {comment}

Товары:
{products}";
		} 


		$this->load->model('localisation/language');

		$data['languages'] = $this->model_localisation_language->getLanguages();
		
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/sp_tg', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/sp_tg')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
	
}