<?php
class ModelExtensionTotalSubTotal extends Model {
	public function getTotal($total) {
		$this->load->language('extension/total/sub_total');

		$sub_total = $this->cart->getSubTotal();
		$log_file = 'D:/OSPanel/domains/storage/logs/cart_debug.log';
		
		// DEBUG: Логування для діагностики
		$debug_log = date('Y-m-d H:i:s') . " - DEBUG sub_total.php: METHOD CALLED, getSubTotal() returned={$sub_total}, current_total['total']=" . (isset($total['total']) ? $total['total'] : 'not set') . "\n";
		@file_put_contents($log_file, $debug_log, FILE_APPEND);

		if (!empty($this->session->data['vouchers'])) {
			foreach ($this->session->data['vouchers'] as $voucher) {
				$sub_total += $voucher['amount'];
			}
		}

		$total['totals'][] = array(
			'code'       => 'sub_total',
			'title'      => $this->language->get('text_sub_total'),
			'value'      => $sub_total,
			'sort_order' => $this->config->get('total_sub_total_sort_order')
		);

		$total['total'] += $sub_total;
		
		// DEBUG: Логування після додавання
		$debug_log = date('Y-m-d H:i:s') . " - DEBUG sub_total.php: After adding sub_total={$sub_total}, total['total']={$total['total']}\n";
		@file_put_contents($log_file, $debug_log, FILE_APPEND);
	}
}
