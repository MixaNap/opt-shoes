<?php
class ControllerExtensionPaymentCod extends Controller {
	public function index() {
		return $this->load->view('extension/payment/cod');
	}

	public function confirm() {
		$json = array();
		
		// Логування для діагностики (спроба кількох варіантів)
		$log_paths = array(
			defined('DIR_LOGS') ? DIR_LOGS . 'cod_confirm.log' : '',
			__DIR__ . '/../../../system/storage/logs/cod_confirm.log',
			__DIR__ . '/../../../../system/storage/logs/cod_confirm.log',
			sys_get_temp_dir() . '/cod_confirm.log'
		);
		
		$log_file = '';
		foreach ($log_paths as $path) {
			if ($path && (file_exists(dirname($path)) || @mkdir(dirname($path), 0755, true))) {
				$log_file = $path;
				break;
			}
		}
		
		$log_data = array(
			'time' => date('Y-m-d H:i:s'),
			'payment_method_code' => isset($this->session->data['payment_method']['code']) ? $this->session->data['payment_method']['code'] : 'not set',
			'order_id' => isset($this->session->data['order_id']) ? $this->session->data['order_id'] : 'not set'
		);
		
		if ($log_file) {
			@file_put_contents($log_file, "COD Confirm Start: " . json_encode($log_data) . "\n", FILE_APPEND);
		}
		
		if (isset($this->session->data['payment_method']['code']) && $this->session->data['payment_method']['code'] == 'cod') {
			// Перевірка наявності order_id перед викликом addOrderHistory
			if (!isset($this->session->data['order_id']) || $this->session->data['order_id'] == '' || $this->session->data['order_id'] == 0) {
				$json['error'] = 'Order ID is missing';
				if ($log_file) {
					@file_put_contents($log_file, "COD Confirm Error: Order ID is missing\n", FILE_APPEND);
				}
				$this->response->addHeader('Content-Type: application/json');
				$this->response->setOutput(json_encode($json));
				return;
			}
			
			$this->load->model('checkout/order');
			
			// Перевірка чи order_id існує в базі даних
			$order_id = (int)$this->session->data['order_id'];
			if ($log_file) {
				@file_put_contents($log_file, "COD Confirm: Checking order_id = " . $order_id . "\n", FILE_APPEND);
			}
			
			// Перевірка чи замовлення існує перед викликом addOrderHistory
			$order_info = $this->model_checkout_order->getOrder($order_id);
			if (!$order_info) {
				$json['error'] = 'Order not found: ' . $order_id;
				if ($log_file) {
					@file_put_contents($log_file, "COD Confirm Error: Order not found: " . $order_id . "\n", FILE_APPEND);
				}
				$this->response->addHeader('Content-Type: application/json');
				$this->response->setOutput(json_encode($json));
				return;
			}
			
			$order_status_id = $this->config->get('payment_cod_order_status_id');
			
			if (!$order_status_id || $order_status_id == '') {
				$order_status_id = 1; // Статус за замовчуванням
			}

			if ($log_file) {
				@file_put_contents($log_file, "COD Confirm: Calling addOrderHistory with order_id = " . $order_id . ", status_id = " . $order_status_id . "\n", FILE_APPEND);
			}

			// Виклик addOrderHistory з обробкою помилок
			if (method_exists($this->model_checkout_order, 'addOrderHistory')) {
				$this->model_checkout_order->addOrderHistory($order_id, $order_status_id);
				$redirect_url = $this->url->link('checkout/success');
				$json['redirect'] = $redirect_url;
				if ($log_file) {
					@file_put_contents($log_file, "COD Confirm Success: redirect = " . $redirect_url . "\n", FILE_APPEND);
				}
			} else {
				$json['error'] = 'addOrderHistory method not found';
				if ($log_file) {
					@file_put_contents($log_file, "COD Confirm Error: addOrderHistory method not found\n", FILE_APPEND);
				}
			}
		} else {
			$payment_code = isset($this->session->data['payment_method']['code']) ? $this->session->data['payment_method']['code'] : 'not set';
			$json['error'] = 'Payment method code mismatch. Expected: cod, Got: ' . $payment_code;
			if ($log_file) {
				@file_put_contents($log_file, "COD Confirm Error: Payment method code mismatch. Got: " . $payment_code . "\n", FILE_APPEND);
			}
		}
		
		if ($log_file) {
			@file_put_contents($log_file, "COD Confirm Response: " . json_encode($json) . "\n", FILE_APPEND);
		} else {
			// Якщо логування не працює, додаємо інформацію в JSON для діагностики
			$json['debug'] = array(
				'log_file_not_available' => true,
				'dir_logs_defined' => defined('DIR_LOGS'),
				'dir_logs_value' => defined('DIR_LOGS') ? DIR_LOGS : 'not defined'
			);
		}
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));		
	}
}
