<?php
class ControllerExtensionPaymentCod extends Controller {
	public function index() {
		return $this->load->view('extension/payment/cod');
	}

	public function confirm() {
		$json = array();
		
		// Діагностична інформація
		$debug_info = array(
			'time' => date('Y-m-d H:i:s'),
			'payment_method_code' => isset($this->session->data['payment_method']['code']) ? $this->session->data['payment_method']['code'] : 'not set',
			'order_id' => isset($this->session->data['order_id']) ? $this->session->data['order_id'] : 'not set',
			'session_data_keys' => isset($this->session->data) ? array_keys($this->session->data) : 'no session'
		);
		
		// Додаємо debug інформацію в JSON для діагностики
		$json['debug'] = $debug_info;
		
		if (isset($this->session->data['payment_method']['code']) && $this->session->data['payment_method']['code'] == 'cod') {
			// Перевірка наявності order_id перед викликом addOrderHistory
			if (!isset($this->session->data['order_id']) || $this->session->data['order_id'] == '' || $this->session->data['order_id'] == 0) {
				$json['error'] = 'Order ID is missing';
				$json['debug']['step'] = 'order_id_check_failed';
				$this->response->addHeader('Content-Type: application/json');
				$this->response->setOutput(json_encode($json));
				return;
			}
			
			$this->load->model('checkout/order');
			
			// Перевірка чи order_id існує в базі даних
			$order_id = (int)$this->session->data['order_id'];
			$json['debug']['order_id'] = $order_id;
			
			// Перевірка чи замовлення існує перед викликом addOrderHistory
			$order_info = $this->model_checkout_order->getOrder($order_id);
			if (!$order_info) {
				$json['error'] = 'Order not found: ' . $order_id;
				$json['debug']['step'] = 'order_not_found';
				$this->response->addHeader('Content-Type: application/json');
				$this->response->setOutput(json_encode($json));
				return;
			}
			
			$order_status_id = $this->config->get('payment_cod_order_status_id');
			
			if (!$order_status_id || $order_status_id == '') {
				$order_status_id = 1; // Статус за замовчуванням
			}

			$json['debug']['order_status_id'] = $order_status_id;
			$json['debug']['step'] = 'calling_addOrderHistory';

			// Виклик addOrderHistory з обробкою помилок
			if (method_exists($this->model_checkout_order, 'addOrderHistory')) {
				$this->model_checkout_order->addOrderHistory($order_id, $order_status_id);
				$redirect_url = $this->url->link('checkout/success');
				$json['redirect'] = $redirect_url;
				$json['debug']['step'] = 'success';
				$json['debug']['redirect_url'] = $redirect_url;
			} else {
				$json['error'] = 'addOrderHistory method not found';
				$json['debug']['step'] = 'method_not_found';
			}
		} else {
			$payment_code = isset($this->session->data['payment_method']['code']) ? $this->session->data['payment_method']['code'] : 'not set';
			$json['error'] = 'Payment method code mismatch. Expected: cod, Got: ' . $payment_code;
			$json['debug']['step'] = 'payment_method_mismatch';
		}
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));		
	}
}
