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
			
			// Завантаження моделі (як в інших методах оплати)
			$this->load->model('checkout/order');
			
			// Перевірка чи order_id існує в базі даних
			$order_id = (int)$this->session->data['order_id'];
			$json['debug']['order_id'] = $order_id;
			
			// Якщо модель не завантажилася стандартним способом, спробуємо завантажити напряму
			if (!isset($this->model_checkout_order) || !is_object($this->model_checkout_order)) {
				$model_file = DIR_APPLICATION . 'model/checkout/order.php';
				if (file_exists($model_file)) {
					require_once($model_file);
					$this->model_checkout_order = new ModelCheckoutOrder($this->registry);
				} else {
					$json['error'] = 'Model checkout/order file not found at: ' . $model_file;
					$json['debug']['step'] = 'model_file_not_found';
					$this->response->addHeader('Content-Type: application/json');
					$this->response->setOutput(json_encode($json));
					return;
				}
			}
			
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

			// Виклик addOrderHistory (як в інших методах оплати)
			try {
				$this->model_checkout_order->addOrderHistory($order_id, $order_status_id);
				$redirect_url = $this->url->link('checkout/success');
				$json['redirect'] = $redirect_url;
				$json['debug']['step'] = 'success';
				$json['debug']['redirect_url'] = $redirect_url;
			} catch (Exception $e) {
				$json['error'] = 'Error calling addOrderHistory: ' . $e->getMessage();
				$json['debug']['step'] = 'exception';
				$json['debug']['exception'] = $e->getMessage();
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
