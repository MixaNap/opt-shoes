<?php
class ModelToolSpTg extends Model {
	
	public function sendTgMessage($order_id, $order_status_id, $order_info) {
		
		$this->load->model('catalog/product');
		$this->load->model('checkout/order');
		$this->load->model('account/order');
		$allow = false;
		$tg_send_status = $this->config->get('sp_tg_telegram_send_status');
		if (is_array($tg_send_status) && in_array($order_status_id, $tg_send_status)) {
			$allow = true;
		}
		if ($order_info && $allow) {
			$tg_url = 'https://api.telegram.org/bot';
    
			$tg_token = $this->config->get('sp_tg_telegram_bot_id');
			$tg_link = $tg_url . $tg_token . '/sendMessage';
			$tg_users = $this->config->get('sp_tg_telegram_send_to_id');
			$tg_user_id = explode(',', $tg_users);
			$tg_message = $this->config->get('sp_tg_telegram_message');        
	
			$find = [
				'{order_id}',
				'{firstname}',
				'{lastname}',
				'{email}',
				'{telephone}',
				'{comment}',
				'{total}',
				'{shipping_method}',
				'{payment_method}',
				'{order_status}',
				'{company}',
				'{address_1}',
				'{address_2}',
				'{city}',
				'{postcode}',
				'{zone}',  
				'{zone_code}',
				'{country}'
			];
	
			$replace = [ 
				'order_id'        => $order_info['order_id'],
				'firstname'       => $order_info['firstname'],
				'lastname'        => $order_info['lastname'],
				'email'  	      => $order_info['email'],
				'telephone'       => $order_info['telephone'],
				'comment'         => $order_info['comment'],
				'total'           => $this->currency->format($order_info['total'], $order_info['currency_code'], $order_info['currency_value']),
				'shipping_method' => $order_info['shipping_method'],
				'payment_method'  => $order_info['payment_method'],
				'order_status'    => $order_info['order_status'],
				'company'         => $order_info['shipping_company'],
				'address_1'       => $order_info['shipping_address_1'],
				'address_2'       => $order_info['shipping_address_2'],
				'city'            => $order_info['shipping_city'],
				'postcode'        => $order_info['shipping_postcode'],
				'zone'            => $order_info['shipping_zone'],
				'zone_code'       => $order_info['shipping_zone_code'],
				'country'         => $order_info['shipping_country']
			];
			
			$tg_message = str_replace($find, $replace, $tg_message);
			
			$order_products = $this->model_account_order->getOrderProducts($order_id); 
			$products = '';
			foreach ($order_products as $product) {
				$option_data = '';
                $order_option_query = $this->db->query("SELECT * FROM " . DB_PREFIX . "order_option WHERE order_id = '" . (int)$order_id . "' AND order_product_id = '" . (int)$product['order_product_id'] . "'");
                foreach ($order_option_query->rows as $option) {
                    if ($option['type'] != 'file') {
                        $option_data .= $option['name'] . ':' . $option['value'] . ';';
                    }
                }
                $option_data = rtrim($option_data, ';');
				
                if ($option_data) {
                    $option_data = str_replace("\n", " ", addslashes($option_data));
                } else {
                    $option_data = ''; 
                }
				if (!empty($option_data)) $product['name'] .= ' - ' . $option_data;
				$products .= $product['name'] . ' - ' . $this->currency->format($product['price'], $order_info['currency_code'], $order_info['currency_value']) . ' х ' . $product['quantity'] . "\n";
			} 
			
			$tg_message = str_replace('{products}', $products, $tg_message);
			
			$tg_message = strip_tags($tg_message, '<a><b><i>');
			
			$tg_message = html_entity_decode($tg_message);
			 
			foreach ($tg_user_id as $user_id) {
				$tg_data = [
					'chat_id'    => $user_id,
					'text'       => $tg_message,
					'parse_mode' => 'html'
				];
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, $tg_link);
				curl_setopt($ch, CURLOPT_POST, true);
				curl_setopt($ch, CURLOPT_POSTFIELDS, $tg_data);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($ch, CURLOPT_TIMEOUT, 30);
				$response = curl_exec($ch); 
				curl_close($ch); 
			}
		}
	}
	
	public function sendCustomTgMessage($message = '') {

		$tg_url = 'https://api.telegram.org/bot';
    
		$tg_token = $this->config->get('sp_tg_telegram_bot_id');
		$tg_link = $tg_url . $tg_token . '/sendMessage';
		$tg_users = $this->config->get('sp_tg_telegram_send_to_id');
		$tg_user_id = explode(',', $tg_users);
		$tg_message = '';    
		
		$tg_message = strip_tags($message, '<a><b><i>');
			
		$tg_message = html_entity_decode($tg_message);
		
		foreach ($tg_user_id as $user_id) {
			$tg_data = [
				'chat_id'    => $user_id,
				'text'       => $message,
				'parse_mode' => 'html'
			];
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $tg_link);
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $tg_data);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_TIMEOUT, 30);
			$response = curl_exec($ch); 
			curl_close($ch); 
		}
	}
}
	