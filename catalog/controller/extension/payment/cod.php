<?php
class ControllerExtensionPaymentCod extends Controller {
	public function index() {
		return $this->load->view('extension/payment/cod');
	}

	public function confirm() {
		$json = array();
		
		if (isset($this->session->data['payment_method']['code']) && $this->session->data['payment_method']['code'] == 'cod') {
			// Перевірка наявності order_id перед викликом addOrderHistory
			if (!isset($this->session->data['order_id']) || $this->session->data['order_id'] == '' || $this->session->data['order_id'] == 0) {
				$json['error'] = 'Order ID is missing';
				$this->response->addHeader('Content-Type: application/json');
				$this->response->setOutput(json_encode($json));
				return;
			}
			
			// Завантаження моделі (як в інших методах оплати)
			$this->load->model('checkout/order');
			
			// Перевірка чи order_id існує в базі даних
			$order_id = (int)$this->session->data['order_id'];
			
			// Модель зберігається у registry, тож використовуємо її напряму
			$model_checkout_order = $this->registry->get('model_checkout_order');
			if (!is_object($model_checkout_order)) {
				$json['error'] = 'Model checkout/order not loaded';
				$this->response->addHeader('Content-Type: application/json');
				$this->response->setOutput(json_encode($json));
				return;
			}
			
			$order_info = $model_checkout_order->getOrder($order_id);
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

			// Виклик addOrderHistory (як в інших методах оплати)
			try {
				$model_checkout_order->addOrderHistory($order_id, $order_status_id);
				$redirect_url = $this->url->link('checkout/success');
				$json['redirect'] = $redirect_url;
			} catch (Exception $e) {
				$json['error'] = 'Error calling addOrderHistory: ' . $e->getMessage();
			}
		} else {
			$payment_code = isset($this->session->data['payment_method']['code']) ? $this->session->data['payment_method']['code'] : 'not set';
			$json['error'] = 'Payment method code mismatch. Expected: cod, Got: ' . $payment_code;
		}
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));		
	}
}
