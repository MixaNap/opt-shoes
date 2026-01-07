<?php
class ControllerExtensionPaymentCod extends Controller {
	public function index() {
		return $this->load->view('extension/payment/cod');
	}

	public function confirm() {
		$json = array();
		
		// Логування для діагностики
		$log_file = DIR_LOGS . 'cod_confirm.log';
		$log_data = array(
			'time' => date('Y-m-d H:i:s'),
			'payment_method_code' => isset($this->session->data['payment_method']['code']) ? $this->session->data['payment_method']['code'] : 'not set',
			'order_id' => isset($this->session->data['order_id']) ? $this->session->data['order_id'] : 'not set'
		);
		file_put_contents($log_file, "COD Confirm Start: " . json_encode($log_data) . "\n", FILE_APPEND);
		
		if (isset($this->session->data['payment_method']['code']) && $this->session->data['payment_method']['code'] == 'cod') {
			// Перевірка наявності order_id перед викликом addOrderHistory
			if (!isset($this->session->data['order_id']) || $this->session->data['order_id'] == '' || $this->session->data['order_id'] == 0) {
				$json['error'] = 'Order ID is missing';
				file_put_contents($log_file, "COD Confirm Error: Order ID is missing\n", FILE_APPEND);
				$this->response->addHeader('Content-Type: application/json');
				$this->response->setOutput(json_encode($json));
				return;
			}
			
			$this->load->model('checkout/order');
			
			// Перевірка чи order_id існує в базі даних
			$order_id = (int)$this->session->data['order_id'];
			file_put_contents($log_file, "COD Confirm: Checking order_id = " . $order_id . "\n", FILE_APPEND);
			
			// Перевірка чи замовлення існує перед викликом addOrderHistory
			$order_info = $this->model_checkout_order->getOrder($order_id);
			if (!$order_info) {
				$json['error'] = 'Order not found: ' . $order_id;
				file_put_contents($log_file, "COD Confirm Error: Order not found: " . $order_id . "\n", FILE_APPEND);
				$this->response->addHeader('Content-Type: application/json');
				$this->response->setOutput(json_encode($json));
				return;
			}
			
			$order_status_id = $this->config->get('payment_cod_order_status_id');
			
			if (!$order_status_id || $order_status_id == '') {
				$order_status_id = 1; // Статус за замовчуванням
			}

			file_put_contents($log_file, "COD Confirm: Calling addOrderHistory with order_id = " . $order_id . ", status_id = " . $order_status_id . "\n", FILE_APPEND);

			// Виклик addOrderHistory з обробкою помилок
			if (method_exists($this->model_checkout_order, 'addOrderHistory')) {
				$this->model_checkout_order->addOrderHistory($order_id, $order_status_id);
				$redirect_url = $this->url->link('checkout/success');
				$json['redirect'] = $redirect_url;
				file_put_contents($log_file, "COD Confirm Success: redirect = " . $redirect_url . "\n", FILE_APPEND);
			} else {
				$json['error'] = 'addOrderHistory method not found';
				file_put_contents($log_file, "COD Confirm Error: addOrderHistory method not found\n", FILE_APPEND);
			}
		} else {
			$json['error'] = 'Payment method code mismatch';
			file_put_contents($log_file, "COD Confirm Error: Payment method code mismatch\n", FILE_APPEND);
		}
		
		file_put_contents($log_file, "COD Confirm Response: " . json_encode($json) . "\n", FILE_APPEND);
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));		
	}
}
