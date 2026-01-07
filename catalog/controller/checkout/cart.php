<?php
class ControllerCheckoutCart extends Controller {
	public function index() {
		$this->load->language('checkout/cart');

		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'href' => $this->url->link('common/home'),
			'text' => $this->language->get('text_home')
		);

		$data['breadcrumbs'][] = array(
			'href' => $this->url->link('checkout/cart'),
			'text' => $this->language->get('heading_title')
		);

		if ($this->cart->hasProducts() || !empty($this->session->data['vouchers'])) {
			if (!$this->cart->hasStock() && (!$this->config->get('config_stock_checkout') || $this->config->get('config_stock_warning'))) {
				$data['error_warning'] = $this->language->get('error_stock');
			} elseif (isset($this->session->data['error'])) {
				$data['error_warning'] = $this->session->data['error'];

				unset($this->session->data['error']);
			} else {
				$data['error_warning'] = '';
			}

			if ($this->config->get('config_customer_price') && !$this->customer->isLogged()) {
				$data['attention'] = sprintf($this->language->get('text_login'), $this->url->link('account/login'), $this->url->link('account/register'));
			} else {
				$data['attention'] = '';
			}

			if (isset($this->session->data['success'])) {
				$data['success'] = $this->session->data['success'];

				unset($this->session->data['success']);
			} else {
				$data['success'] = '';
			}

			$data['action'] = $this->url->link('checkout/cart/edit', '', true);

			if ($this->config->get('config_cart_weight')) {
				$data['weight'] = $this->weight->format($this->cart->getWeight(), $this->config->get('config_weight_class_id'), $this->language->get('decimal_point'), $this->language->get('thousand_point'));
			} else {
				$data['weight'] = '';
			}

			$this->load->model('tool/image');
			$this->load->model('tool/upload');
			$this->load->model('catalog/product');

			$data['products'] = array();

			$products = $this->cart->getProducts();

			foreach ($products as $product) {
				// Отримуємо інформацію про товар з БД для перевірки продажу упаковками
				// Отримуємо базову ціну з БД (в USD) для правильного розрахунку податків
				$product_info_query = $this->db->query("SELECT price, sell_by_pack, pack_size, tax_class_id FROM " . DB_PREFIX . "product WHERE product_id = '" . (int)$product['product_id'] . "'");
				$product_base_price = $product_info_query->num_rows ? (float)$product_info_query->row['price'] : 0;
				$sell_by_pack = $product_info_query->num_rows ? (int)$product_info_query->row['sell_by_pack'] : 0;
				$pack_size = $product_info_query->num_rows ? (int)$product_info_query->row['pack_size'] : 0;
				$tax_class_id = $product_info_query->num_rows ? $product_info_query->row['tax_class_id'] : 0;
				$product_info = $this->model_catalog_product->getProduct($product['product_id']);
				
				// Перевіряємо чи отримали дані про товар
				if ($product_info && is_array($product_info)) {
					$sell_by_pack = isset($product_info['sell_by_pack']) ? (int)$product_info['sell_by_pack'] : 0;
					$pack_size = isset($product_info['pack_size']) ? (int)$product_info['pack_size'] : 0;
				} else {
					// Якщо не вдалося отримати дані, спробуємо отримати напряму з БД
					$query = $this->db->query("SELECT sell_by_pack, pack_size FROM " . DB_PREFIX . "product WHERE product_id = '" . (int)$product['product_id'] . "'");
					if ($query->num_rows) {
						$sell_by_pack = isset($query->row['sell_by_pack']) ? (int)$query->row['sell_by_pack'] : 0;
						$pack_size = isset($query->row['pack_size']) ? (int)$query->row['pack_size'] : 0;
					} else {
						$sell_by_pack = 0;
						$pack_size = 0;
					}
				}
				$product_total = 0;

				foreach ($products as $product_2) {
					if ($product_2['product_id'] == $product['product_id']) {
						$product_total += $product_2['quantity'];
					}
				}

				if ($product['minimum'] > $product_total) {
					$data['error_warning'] = sprintf($this->language->get('error_minimum'), $product['name'], $product['minimum']);
				}

				if ($product['image']) {
					$image = $this->model_tool_image->resize($product['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_cart_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_cart_height'));
				} else {
					$image = '';
				}

				$option_data = array();

				foreach ($product['option'] as $option) {
					if ($option['type'] != 'file') {
						$value = $option['value'];
					} else {
						$upload_info = $this->model_tool_upload->getUploadByCode($option['value']);

						if ($upload_info) {
							$value = $upload_info['name'];
						} else {
							$value = '';
						}
					}

					$option_data[] = array(
						'name'  => $option['name'],
						'value' => (utf8_strlen($value) > 20 ? utf8_substr($value, 0, 20) . '..' : $value)
					);
				}

				// Якщо товар продається упаковками, розраховуємо кількість упаковок та ціну за упаковку
				// Це потрібно робити ЗАВЖДИ, незалежно від того, чи залогінений користувач
				$quantity_packs = 0;
				$price_per_pack = '';
				$price_per_unit_formatted = '';
				
				if ($sell_by_pack && $pack_size > 0) {
					// Розраховуємо кількість упаковок (округлюємо вниз)
					// $product['quantity'] - це кількість штук в кошику
					// $pack_size - це кількість штук в одній упаковці
					// $quantity_packs - це кількість упаковок
					$quantity_packs = (int)floor($product['quantity'] / $pack_size);
					// Якщо кількість упаковок = 0, встановлюємо мінімум 1
					if ($quantity_packs < 1 && $product['quantity'] > 0) {
						$quantity_packs = 1;
					}
				} else {
					$quantity_packs = 0; // Для товарів що продаються поштучно
				}
				
				// Display prices
				if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
					// ВАЖЛИВО: Використовуємо ціну з $product['price'], яка вже містить:
					// 1. Базову ціну з БД (в USD)
					// 2. Знижки (product_discount) або спеціальні ціни (product_special)
					// 3. Конвертацію в поточну валюту (UAH)
					// $product['price'] вже конвертована з USD в UAH в cart->getProducts()
					$price_with_tax = $this->tax->calculate($product['price'], $product['tax_class_id'], $this->config->get('config_tax'));
					
					// Отримуємо налаштування валюти для форматування
					$current_currency_code = $this->session->data['currency'];
					$symbol_left = $this->currency->getSymbolLeft($current_currency_code);
					$symbol_right = $this->currency->getSymbolRight($current_currency_code);
					$decimal_place = $this->currency->getDecimalPlace($current_currency_code);
					
					// Функція для форматування вже конвертованої ціни (без множення на курс)
					$format_price = function($amount) use ($symbol_left, $symbol_right, $decimal_place) {
						$amount = round((float)$amount, (int)$decimal_place);
						$formatted = number_format($amount, (int)$decimal_place, '.', ' ');
						return $symbol_left . $formatted . $symbol_right;
					};
					
					if ($sell_by_pack && $pack_size > 0) {
						// ВАЖЛИВО: $product['price'] містить ціну за одиницю (з урахуванням знижок)
						// Це вже розраховано в cart.php як: ціна за упаковку з БД / pack_size
						// $price_with_tax = ціна за одиницю з податками
						// Ціна за упаковку = ціна за одиницю * розмір упаковки
						$price_per_pack_with_tax = $price_with_tax * $pack_size;
						$price_per_pack = $format_price($price_per_pack_with_tax);
						// Ціна за одиницю з податками (для відображення)
						$price_per_unit_formatted = $format_price($price_with_tax);
						// Ціна за упаковку для відображення
						$price = $price_per_pack;
						// Загальна вартість = кількість упаковок * ціна за упаковку з податками
						$total = $format_price($price_per_pack_with_tax * $quantity_packs);
					} else {
						// Для товарів що продаються поштучно
						// Використовуємо вже конвертовану ціну (в UAH)
						$price = $format_price($price_with_tax);
						$total = $format_price($price_with_tax * $product['quantity']);
					}
				} else {
					$price = false;
					$total = false;
				}

				$recurring = '';

				if ($product['recurring']) {
					$frequencies = array(
						'day'        => $this->language->get('text_day'),
						'week'       => $this->language->get('text_week'),
						'semi_month' => $this->language->get('text_semi_month'),
						'month'      => $this->language->get('text_month'),
						'year'       => $this->language->get('text_year')
					);

					if ($product['recurring']['trial']) {
						$recurring = sprintf($this->language->get('text_trial_description'), $this->currency->format($this->tax->calculate($product['recurring']['trial_price'] * $product['quantity'], $product['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']), $product['recurring']['trial_cycle'], $frequencies[$product['recurring']['trial_frequency']], $product['recurring']['trial_duration']) . ' ';
					}

					if ($product['recurring']['duration']) {
						$recurring .= sprintf($this->language->get('text_payment_description'), $this->currency->format($this->tax->calculate($product['recurring']['price'] * $product['quantity'], $product['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']), $product['recurring']['cycle'], $frequencies[$product['recurring']['frequency']], $product['recurring']['duration']);
					} else {
						$recurring .= sprintf($this->language->get('text_payment_cancel'), $this->currency->format($this->tax->calculate($product['recurring']['price'] * $product['quantity'], $product['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']), $product['recurring']['cycle'], $frequencies[$product['recurring']['frequency']], $product['recurring']['duration']);
					}
				}

				$data['products'][] = array(
					'cart_id'   => $product['cart_id'],
					'thumb'     => $image,
					'name'      => $product['name'],
					'model'     => $product['model'],
					'option'    => $option_data,
					'recurring' => $recurring,
					'quantity'  => $product['quantity'],
					'quantity_packs' => isset($quantity_packs) && $quantity_packs > 0 ? (int)$quantity_packs : 0,
					'sell_by_pack' => isset($sell_by_pack) ? (int)$sell_by_pack : 0,
					'pack_size' => isset($pack_size) ? (int)$pack_size : 0,
					'price_per_pack' => isset($price_per_pack) ? $price_per_pack : '',
					'price_per_unit_formatted' => isset($price_per_unit_formatted) ? $price_per_unit_formatted : '',
					'stock'     => $product['stock'] ? true : !(!$this->config->get('config_stock_checkout') || $this->config->get('config_stock_warning')),
					'reward'    => ($product['reward'] ? sprintf($this->language->get('text_points'), $product['reward']) : ''),
					'price'     => $price,
					'total'     => $total,
					'href'      => $this->url->link('product/product', 'product_id=' . $product['product_id'])
				);
			}

			// Gift Voucher
			$data['vouchers'] = array();

			if (!empty($this->session->data['vouchers'])) {
				foreach ($this->session->data['vouchers'] as $key => $voucher) {
					$data['vouchers'][] = array(
						'key'         => $key,
						'description' => $voucher['description'],
						'amount'      => $this->currency->format($voucher['amount'], $this->session->data['currency']),
						'remove'      => $this->url->link('checkout/cart', 'remove=' . $key)
					);
				}
			}

			// Totals
			$this->load->model('setting/extension');

			$totals = array();
			$taxes = $this->cart->getTaxes();
			$total = 0;
			
			// Because __call can not keep var references so we put them into an array. 			
			$total_data = array(
				'totals' => &$totals,
				'taxes'  => &$taxes,
				'total'  => &$total
			);
			
			// Display prices
			if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
				$sort_order = array();

				$results = $this->model_setting_extension->getExtensions('total');

				foreach ($results as $key => $value) {
					$sort_order[$key] = $this->config->get('total_' . $value['code'] . '_sort_order');
				}

				array_multisort($sort_order, SORT_ASC, $results);

				foreach ($results as $result) {
					if ($this->config->get('total_' . $result['code'] . '_status')) {
						$this->load->model('extension/total/' . $result['code']);
						
						// We have to put the totals in an array so that they pass by reference.
						$this->{'model_extension_total_' . $result['code']}->getTotal($total_data);
					}
				}

				$sort_order = array();

				foreach ($totals as $key => $value) {
					$sort_order[$key] = $value['sort_order'];
				}

				array_multisort($sort_order, SORT_ASC, $totals);
			}

			$data['totals'] = array();

			foreach ($totals as $total) {
				// ВАЖЛИВО: $total['value'] вже конвертована в поточну валюту (UAH)
				// Використовуємо $value = 1, щоб не множити на курс повторно
				$data['totals'][] = array(
					'title' => $total['title'],
					'text'  => $this->currency->format($total['value'], $this->session->data['currency'], 1)
				);
			}

			$data['continue'] = $this->url->link('common/home');

			$data['checkout'] = $this->url->link('checkout/checkout', '', true);

			$this->load->model('setting/extension');

			$data['modules'] = array();
			
			$files = glob(DIR_APPLICATION . '/controller/extension/total/*.php');

			if ($files) {
				foreach ($files as $file) {
					$result = $this->load->controller('extension/total/' . basename($file, '.php'));
					
					if ($result) {
						$data['modules'][] = $result;
					}
				}
			}

			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			$data['content_bottom'] = $this->load->controller('common/content_bottom');
			$data['footer'] = $this->load->controller('common/footer');
			$data['header'] = $this->load->controller('common/header');

			$this->response->setOutput($this->load->view('checkout/cart', $data));
		} else {
			$data['text_error'] = $this->language->get('text_empty');
			
			$data['continue'] = $this->url->link('common/home');

			unset($this->session->data['success']);

			$data['column_left'] = $this->load->controller('common/column_left');
			$data['column_right'] = $this->load->controller('common/column_right');
			$data['content_top'] = $this->load->controller('common/content_top');
			$data['content_bottom'] = $this->load->controller('common/content_bottom');
			$data['footer'] = $this->load->controller('common/footer');
			$data['header'] = $this->load->controller('common/header');

			$this->response->setOutput($this->load->view('error/not_found', $data));
		}
	}

	public function add() {
		$this->load->language('checkout/cart');

		$json = array();

		if (isset($this->request->post['product_id'])) {
			$product_id = (int)$this->request->post['product_id'];
		} else {
			$product_id = 0;
		}

		$this->load->model('catalog/product');

		$product_info = $this->model_catalog_product->getProduct($product_id);

		if ($product_info) {
			// Перевірка для товарів що продаються упаковками
			$sell_by_pack = isset($product_info['sell_by_pack']) ? (int)$product_info['sell_by_pack'] : 0;
			$pack_size = isset($product_info['pack_size']) ? (int)$product_info['pack_size'] : 0;
			
			// Отримуємо кількість з POST запиту
			// Спочатку перевіряємо quantity (воно має містити кількість штук після оновлення JavaScript)
			if (isset($this->request->post['quantity'])) {
				$quantity = (int)$this->request->post['quantity'];
			} else {
				$quantity = 1;
			}
			
			// Якщо товар продається упаковками і передано quantity_packs, конвертуємо в штуки
			// (на випадок якщо JavaScript не оновив quantity)
			if ($sell_by_pack && $pack_size > 0 && isset($this->request->post['quantity_packs']) && !isset($this->request->post['quantity'])) {
				$quantity_packs = (int)$this->request->post['quantity_packs'];
				if ($quantity_packs < 1) $quantity_packs = 1;
				$quantity = $quantity_packs * $pack_size;
			}
			
			if ($sell_by_pack && $pack_size > 0) {
				// Перевіряємо що кількість кратна розміру упаковки
				if ($quantity % $pack_size !== 0) {
					$json['error']['quantity'] = sprintf('Товар продається упаковками по %d шт. Мінімальна кількість: %d шт.', $pack_size, $pack_size);
				}
				// Перевіряємо мінімальну кількість (має бути не менше розміру упаковки)
				if ($quantity < $pack_size) {
					$json['error']['quantity'] = sprintf('Мінімальна кількість для замовлення: %d шт. (1 упаковка)', $pack_size);
				}
			} else {
				// Для товарів що продаються поштучно перевіряємо стандартну мінімальну кількість
				if ($quantity < $product_info['minimum']) {
					$json['error']['quantity'] = sprintf($this->language->get('error_minimum'), $product_info['minimum'], $product_info['name']);
				}
			}

			if (isset($this->request->post['option'])) {
				$option = array_filter($this->request->post['option']);
			} else {
				$option = array();
			}

			$product_options = $this->model_catalog_product->getProductOptions($this->request->post['product_id']);

			foreach ($product_options as $product_option) {
				if ($product_option['required'] && empty($option[$product_option['product_option_id']])) {
					$json['error']['option'][$product_option['product_option_id']] = sprintf($this->language->get('error_required'), $product_option['name']);
				}
			}

			if (isset($this->request->post['recurring_id'])) {
				$recurring_id = $this->request->post['recurring_id'];
			} else {
				$recurring_id = 0;
			}

			$recurrings = $this->model_catalog_product->getProfiles($product_info['product_id']);

			if ($recurrings) {
				$recurring_ids = array();

				foreach ($recurrings as $recurring) {
					$recurring_ids[] = $recurring['recurring_id'];
				}

				if (!in_array($recurring_id, $recurring_ids)) {
					$json['error']['recurring'] = $this->language->get('error_recurring_required');
				}
			}

			if (!$json) {
				$this->cart->add($this->request->post['product_id'], $quantity, $option, $recurring_id);

				$json['success'] = sprintf($this->language->get('text_success'), $this->url->link('product/product', 'product_id=' . $this->request->post['product_id']), $product_info['name'], $this->url->link('checkout/cart'));

				// Unset all shipping and payment methods
				unset($this->session->data['shipping_method']);
				unset($this->session->data['shipping_methods']);
				unset($this->session->data['payment_method']);
				unset($this->session->data['payment_methods']);

				// Totals
				$this->load->model('setting/extension');

				$totals = array();
				$taxes = $this->cart->getTaxes();
				$total = 0;
		
				// Because __call can not keep var references so we put them into an array. 			
				$total_data = array(
					'totals' => &$totals,
					'taxes'  => &$taxes,
					'total'  => &$total
				);

				// Display prices
				if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
					$sort_order = array();

					$results = $this->model_setting_extension->getExtensions('total');

					foreach ($results as $key => $value) {
						$sort_order[$key] = $this->config->get('total_' . $value['code'] . '_sort_order');
					}

					array_multisort($sort_order, SORT_ASC, $results);

					foreach ($results as $result) {
						if ($this->config->get('total_' . $result['code'] . '_status')) {
							$this->load->model('extension/total/' . $result['code']);

							// We have to put the totals in an array so that they pass by reference.
							$this->{'model_extension_total_' . $result['code']}->getTotal($total_data);
						}
					}

					$sort_order = array();

					foreach ($totals as $key => $value) {
						$sort_order[$key] = $value['sort_order'];
					}

					array_multisort($sort_order, SORT_ASC, $totals);
				}

				$json['total'] = sprintf($this->language->get('text_items'), $this->cart->countProducts() + (isset($this->session->data['vouchers']) ? count($this->session->data['vouchers']) : 0), $this->currency->format($total, $this->session->data['currency']));
			} else {
				$json['redirect'] = str_replace('&amp;', '&', $this->url->link('product/product', 'product_id=' . $this->request->post['product_id']));
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function edit() {
		$this->load->language('checkout/cart');

		$json = array();

		// Update
		if (!empty($this->request->post['quantity'])) {
			$this->load->model('catalog/product');
			
			// Отримуємо всі товари з кошика
			$cart_products = $this->cart->getProducts();
			$products_by_cart_id = array();
			foreach ($cart_products as $cart_product) {
				$products_by_cart_id[$cart_product['cart_id']] = $cart_product;
			}
			
			foreach ($this->request->post['quantity'] as $key => $value) {
				$quantity = (int)$value;
				
				// Отримуємо інформацію про товар з кошика
				if (isset($products_by_cart_id[$key])) {
					$cart_product = $products_by_cart_id[$key];
					$product_info = $this->model_catalog_product->getProduct($cart_product['product_id']);
					
					if ($product_info) {
						$sell_by_pack = isset($product_info['sell_by_pack']) ? (int)$product_info['sell_by_pack'] : 0;
						$pack_size = isset($product_info['pack_size']) ? (int)$product_info['pack_size'] : 0;
						
						if ($sell_by_pack && $pack_size > 0) {
							// Користувач вводить кількість упаковок, конвертуємо в штуки
							$quantity = $quantity * $pack_size;
							
							// Перевіряємо що кількість кратна розміру упаковки
							if ($quantity % $pack_size !== 0) {
								$json['error'][$key] = sprintf('Товар продається упаковками по %d шт. Кількість має бути кратною %d.', $pack_size, $pack_size);
								continue;
							}
							// Перевіряємо мінімальну кількість
							if ($quantity < $pack_size) {
								$json['error'][$key] = sprintf('Мінімальна кількість: %d шт. (1 упаковка)', $pack_size);
								continue;
							}
						} else {
							// Для товарів що продаються поштучно
							if ($quantity < $product_info['minimum']) {
								$json['error'][$key] = sprintf($this->language->get('error_minimum'), $product_info['minimum'], $product_info['name']);
								continue;
							}
						}
					}
				}
				
				$this->cart->update($key, $quantity);
			}

			if (empty($json['error'])) {
				$this->session->data['success'] = $this->language->get('text_remove');
			}

			unset($this->session->data['shipping_method']);
			unset($this->session->data['shipping_methods']);
			unset($this->session->data['payment_method']);
			unset($this->session->data['payment_methods']);
			unset($this->session->data['reward']);

			if (empty($json['error'])) {
				$this->response->redirect($this->url->link('checkout/cart'));
			}
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}

	public function remove() {
		$this->load->language('checkout/cart');

		$json = array();

		// Remove
		if (isset($this->request->post['key'])) {
			$this->cart->remove($this->request->post['key']);

			unset($this->session->data['vouchers'][$this->request->post['key']]);

			$json['success'] = $this->language->get('text_remove');

			unset($this->session->data['shipping_method']);
			unset($this->session->data['shipping_methods']);
			unset($this->session->data['payment_method']);
			unset($this->session->data['payment_methods']);
			unset($this->session->data['reward']);

			// Totals
			$this->load->model('setting/extension');

			$totals = array();
			$taxes = $this->cart->getTaxes();
			$total = 0;

			// Because __call can not keep var references so we put them into an array. 			
			$total_data = array(
				'totals' => &$totals,
				'taxes'  => &$taxes,
				'total'  => &$total
			);

			// Display prices
			if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
				$sort_order = array();

				$results = $this->model_setting_extension->getExtensions('total');

				foreach ($results as $key => $value) {
					$sort_order[$key] = $this->config->get('total_' . $value['code'] . '_sort_order');
				}

				array_multisort($sort_order, SORT_ASC, $results);

				foreach ($results as $result) {
					if ($this->config->get('total_' . $result['code'] . '_status')) {
						$this->load->model('extension/total/' . $result['code']);

						// We have to put the totals in an array so that they pass by reference.
						$this->{'model_extension_total_' . $result['code']}->getTotal($total_data);
					}
				}

				$sort_order = array();

				foreach ($totals as $key => $value) {
					$sort_order[$key] = $value['sort_order'];
				}

				array_multisort($sort_order, SORT_ASC, $totals);
			}

			$json['total'] = sprintf($this->language->get('text_items'), $this->cart->countProducts() + (isset($this->session->data['vouchers']) ? count($this->session->data['vouchers']) : 0), $this->currency->format($total, $this->session->data['currency']));
		}

		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}
