<?php
class ControllerExtensionPaymentCod extends Controller {
	public function index() {
		return $this->load->view('extension/payment/cod');
	}

	public function confirm() {
		$json = array();
		
		// Включення виведення помилок для діагностики (вимкнути після виправлення)
		error_reporting(E_ALL);
		ini_set('display_errors', 0);
		ini_set('log_errors', 1);
		
		if (isset($this->session->data['payment_method']['code']) && $this->session->data['payment_method']['code'] == 'cod') {
			// Перевірка наявності order_id перед викликом addOrderHistory
			if (!isset($this->session->data['order_id']) || $this->session->data['order_id'] == '' || $this->session->data['order_id'] == 0) {
				$json['error'] = 'Order ID is missing';
				$this->response->addHeader('Content-Type: application/json');
				$this->response->setOutput(json_encode($json));
				return;
			}
			
			$this->load->model('checkout/order');
			
			// Перевірка чи order_id існує в базі даних
			$order_id = (int)$this->session->data['order_id'];
			
			// Перевірка чи замовлення існує перед викликом addOrderHistory
			$order_info = $this->model_checkout_order->getOrder($order_id);
			if (!$order_info) {
				$json['error'] = 'Order not found: ' . $order_id;
				$this->response->addHeader('Content-Type: application/json');
				$this->response->setOutput(json_encode($json));
				return;
			}
			
			$order_status_id = $this->config->get('payment_cod_order_status_id');
			
			if (!$order_status_id || $order_status_id == '') {
				$order_status_id = 1; // Статус за замовчуванням
			}

			// Виклик addOrderHistory з обробкою помилок
			if (method_exists($this->model_checkout_order, 'addOrderHistory')) {
				$this->model_checkout_order->addOrderHistory($order_id, $order_status_id);
				$json['redirect'] = $this->url->link('checkout/success');
			} else {
				$json['error'] = 'addOrderHistory method not found';
			}
		} else {
			$json['error'] = 'Payment method code mismatch';
		}
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));		
	}
}
