<?php
class ControllerExtensionModuleWebdigifytabs extends Controller {
	public function index($setting) {
		$this->load->language('extension/module/webdigifytabs');

		$this->load->model('catalog/product');
		
		$this->load->model('tool/image');

		$data['bannerfirst'] = $this->load->controller('common/bannerfirst');
		
		$limit = 12;
		$source_type = isset($setting['source_type']) ? $setting['source_type'] : 'latest';
		$category_id = isset($setting['category_id']) ? (int)$setting['category_id'] : 0;
		$filterByCategory = function($products) use ($category_id) {
			if (!$category_id) {
				return $products;
			}
			$filtered = array();
			foreach ($products as $product) {
				$categories = $this->model_catalog_product->getCategories($product['product_id']);
				foreach ($categories as $category) {
					if ((int)$category['category_id'] === $category_id) {
						$filtered[$product['product_id']] = $product;
						break;
					}
				}
			}
			return $filtered;
		};

		// special product
		
		$data['specialproducts'] = array();

		$filter_data = array(
			'sort'  => 'pd.name',
			'order' => 'ASC',
			'start' => 0,
			'limit' => $limit
		);

		$results = $this->model_catalog_product->getProductSpecials($filter_data);
		$results = $filterByCategory($results);

		if ($results) {
			foreach ($results as $result) {
				if ($result['image']) {
					$image = $this->model_tool_image->resize($result['image'], $setting['width'], $setting['height']);
				} else {
					$image = $this->model_tool_image->resize('placeholder.png', $setting['width'], $setting['height']);
				}

					//added for image swap
				
					$images = $this->model_catalog_product->getProductImages($result['product_id']);
	
					if(isset($images[0]['image']) && !empty($images)){
					 $images = $images[0]['image']; 
					   }else
					   {
					   $images = $image;
					   }
						
					//


				if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
					$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$price = false;
				}

				if ((float)$result['special']) {
					$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$special = false;
				}

				if ($result['special_end'] && $result['special_end']!='0000-00-00') {
					$data['specialTime'] = $result['special_end'];
				}
				
				
				if ((float)$result['special']) {
					$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					$data['specialTime'] = $result['special_end'];
					

					
				} else {
					$special = false;
				}

				if ($this->config->get('config_tax')) {
					$tax = $this->currency->format((float)$result['special'] ? $result['special'] : $result['price'], $this->session->data['currency']);
				} else {
					$tax = false;
				}

				if ($this->config->get('config_review_status')) {
					$rating = $result['rating'];
				} else {
					$rating = false;
				}

				$sell_by_pack = isset($result['sell_by_pack']) ? (int)$result['sell_by_pack'] : 0;
				$pack_size = isset($result['pack_size']) ? (int)$result['pack_size'] : 0;
				$price_per_unit_formatted = false;
				if ($sell_by_pack && $pack_size > 0) {
					$price_for_calc = (!is_null($result['special']) && (float)$result['special'] >= 0) ? (float)$result['special'] : (float)$result['price'];
					if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
						$current_currency = $this->session->data['currency'];
						$unit_round_precision = 0;
						$symbol_left = $this->currency->getSymbolLeft($current_currency);
						$symbol_right = $this->currency->getSymbolRight($current_currency);
						$format_price_int = function($amount) use ($symbol_left, $symbol_right) {
							$amount = round((float)$amount, 0);
							return $symbol_left . number_format($amount, 0, '.', ' ') . $symbol_right;
						};
						
						$price_per_unit_base = $price_for_calc / $pack_size;
						$price_per_unit_with_tax_base = $this->tax->calculate($price_per_unit_base, $result['tax_class_id'], $this->config->get('config_tax'));
						$price_per_unit_with_tax_converted = $this->currency->convert($price_per_unit_with_tax_base, 'USD', $current_currency);
						$price_per_unit_with_tax_rounded = round($price_per_unit_with_tax_converted, $unit_round_precision);
						$price_per_unit_formatted = $format_price_int($price_per_unit_with_tax_rounded);
						
						$pack_price_with_tax = $price_per_unit_with_tax_rounded * $pack_size;
						$price = $format_price_int($pack_price_with_tax);
						
						if (!is_null($result['special']) && (float)$result['special'] >= 0) {
							$special_unit_base = (float)$result['special'] / $pack_size;
							$special_unit_with_tax_base = $this->tax->calculate($special_unit_base, $result['tax_class_id'], $this->config->get('config_tax'));
							$special_unit_with_tax_converted = $this->currency->convert($special_unit_with_tax_base, 'USD', $current_currency);
							$special_unit_with_tax_rounded = round($special_unit_with_tax_converted, $unit_round_precision);
							$special_pack_with_tax = $special_unit_with_tax_rounded * $pack_size;
							$special = $format_price_int($special_pack_with_tax);
						}
					}
				}

				$data['specialproducts'][] = array(
					'product_id'  => $result['product_id'],
					'thumb'       => $image,
					'name'        => $result['name'],
					'brand'        => $result['manufacturer'],
					'review'        => $result['reviews'],
					'qty'    	  => $result['quantity'],
					'description' => utf8_substr(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8')), 0, $this->config->get($this->config->get('config_theme') . '_product_description_length')) . '..',
					'price'       => $price,
					'special'     => $special,
					'tax'         => $tax,
					'rating'      => $rating,
					'percentsaving'  => round((($result['price'] - $result['special'])/$result['price'])*100, 0),
					'specialTime' => ($result['special_end']=='0000-00-00' || is_null($result['special_end'])) ? false : $result['special_end'],
					'sell_by_pack' => $sell_by_pack,
					'pack_size'    => $pack_size,
					'price_per_unit_formatted' => $price_per_unit_formatted,
					'href'        => $this->url->link('product/product', 'product_id=' . $result['product_id']),
					'quick'        => $this->url->link('product/quick_view','&product_id=' . $result['product_id']),
					'thumb_swap'  => $this->model_tool_image->resize($images , $setting['width'], $setting['height'])
				);
			}
			
		}
		
		//latest product
		
		$data['latestproducts'] = array();

		switch ($source_type) {
			case 'viewed':
				$results = $this->model_catalog_product->getPopularProducts($limit);
				break;
			case 'bestseller':
				$results = $this->model_catalog_product->getBestSellerProducts($limit);
				break;
			case 'latest':
			default:
				$results = $this->model_catalog_product->getLatestProducts($limit);
				break;
		}
		$results = $filterByCategory($results);

		if ($results) {
			foreach ($results as $result) {
				if ($result['image']) {
					$image = $this->model_tool_image->resize($result['image'], $setting['width'], $setting['height']);
				} else {
					$image = $this->model_tool_image->resize('placeholder.png', $setting['width'], $setting['height']);
				}

					//added for image swap
				
					$images = $this->model_catalog_product->getProductImages($result['product_id']);
	
					if(isset($images[0]['image']) && !empty($images)){
					 $images = $images[0]['image']; 
					   }else
					   {
					   $images = $image;
					   }
						
					//

				if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
					$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$price = false;
				}

				if ((float)$result['special']) {
					$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$special = false;
				}


				if ($result['special_end'] && $result['special_end']!='0000-00-00') {
					$data['specialTime'] = $result['special_end'];
				}
				
				
				if ((float)$result['special']) {
					$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					$data['specialTime'] = $result['special_end'];
					

					
				} else {
					$special = false;
				}

				if ($this->config->get('config_tax')) {
					$tax = $this->currency->format((float)$result['special'] ? $result['special'] : $result['price'], $this->session->data['currency']);
				} else {
					$tax = false;
				}

				if ($this->config->get('config_review_status')) {
					$rating = $result['rating'];
				} else {
					$rating = false;
				}

				$sell_by_pack = isset($result['sell_by_pack']) ? (int)$result['sell_by_pack'] : 0;
				$pack_size = isset($result['pack_size']) ? (int)$result['pack_size'] : 0;
				$price_per_unit_formatted = false;
				if ($sell_by_pack && $pack_size > 0) {
					$price_for_calc = (!is_null($result['special']) && (float)$result['special'] >= 0) ? (float)$result['special'] : (float)$result['price'];
					if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
						$current_currency = $this->session->data['currency'];
						$unit_round_precision = 0;
						$symbol_left = $this->currency->getSymbolLeft($current_currency);
						$symbol_right = $this->currency->getSymbolRight($current_currency);
						$format_price_int = function($amount) use ($symbol_left, $symbol_right) {
							$amount = round((float)$amount, 0);
							return $symbol_left . number_format($amount, 0, '.', ' ') . $symbol_right;
						};
						
						$price_per_unit_base = $price_for_calc / $pack_size;
						$price_per_unit_with_tax_base = $this->tax->calculate($price_per_unit_base, $result['tax_class_id'], $this->config->get('config_tax'));
						$price_per_unit_with_tax_converted = $this->currency->convert($price_per_unit_with_tax_base, 'USD', $current_currency);
						$price_per_unit_with_tax_rounded = round($price_per_unit_with_tax_converted, $unit_round_precision);
						$price_per_unit_formatted = $format_price_int($price_per_unit_with_tax_rounded);
						
						$pack_price_with_tax = $price_per_unit_with_tax_rounded * $pack_size;
						$price = $format_price_int($pack_price_with_tax);
						
						if (!is_null($result['special']) && (float)$result['special'] >= 0) {
							$special_unit_base = (float)$result['special'] / $pack_size;
							$special_unit_with_tax_base = $this->tax->calculate($special_unit_base, $result['tax_class_id'], $this->config->get('config_tax'));
							$special_unit_with_tax_converted = $this->currency->convert($special_unit_with_tax_base, 'USD', $current_currency);
							$special_unit_with_tax_rounded = round($special_unit_with_tax_converted, $unit_round_precision);
							$special_pack_with_tax = $special_unit_with_tax_rounded * $pack_size;
							$special = $format_price_int($special_pack_with_tax);
						}
					}
				}

				$data['latestproducts'][] = array(
					'product_id'  => $result['product_id'],
					'thumb'       => $image,
					'name'        => $result['name'],
					'brand'        => $result['manufacturer'],
					'review'        => $result['reviews'],
					'qty'    	  => $result['quantity'],
					'description' => utf8_substr(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8')), 0, $this->config->get($this->config->get('config_theme') . '_product_description_length')) . '..',
					'price'       => $price,
					'special'     => $special,
					'tax'         => $tax,
					'rating'      => $rating,
					'percentsaving' => round((($result['price'] - $result['special'])/$result['price'])*100, 0),
					'specialTime' => ($result['special_end']=='0000-00-00' || is_null($result['special_end'])) ? false : $result['special_end'],					
					'sell_by_pack' => $sell_by_pack,
					'pack_size'    => $pack_size,
					'price_per_unit_formatted' => $price_per_unit_formatted,
					'href'        => $this->url->link('product/product', 'product_id=' . $result['product_id']),
					'quick'        => $this->url->link('product/quick_view','&product_id=' . $result['product_id']),
					'thumb_swap'  => $this->model_tool_image->resize($images , $setting['width'], $setting['height'])
				);
			}
		}
		
		// bestsellets
		
		$data['bestsellersproducts'] = array();

		$results = $this->model_catalog_product->getBestSellerProducts($limit);
		$results = $filterByCategory($results);

		if ($results) {
			foreach ($results as $result) {
				if ($result['image']) {
					$image = $this->model_tool_image->resize($result['image'], $setting['width'], $setting['height']);
				} else {
					$image = $this->model_tool_image->resize('placeholder.png', $setting['width'], $setting['height']);
				}

				//added for image swap
				
					$images = $this->model_catalog_product->getProductImages($result['product_id']);
	
					if(isset($images[0]['image']) && !empty($images)){
					 $images = $images[0]['image']; 
					   }else
					   {
					   $images = $image;
					   }
						
					//

				if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
					$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$price = false;
				}

				if ((float)$result['special']) {
					$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$special = false;
				}


				if ($result['special_end'] && $result['special_end']!='0000-00-00') {
					$data['specialTime'] = $result['special_end'];
				}
				
				
				if ((float)$result['special']) {
					$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
					$data['specialTime'] = $result['special_end'];
					

					
				} else {
					$special = false;
				}

				if ($this->config->get('config_tax')) {
					$tax = $this->currency->format((float)$result['special'] ? $result['special'] : $result['price'], $this->session->data['currency']);
				} else {
					$tax = false;
				}

				if ($this->config->get('config_review_status')) {
					$rating = $result['rating'];
				} else {
					$rating = false;
				}

				$sell_by_pack = isset($result['sell_by_pack']) ? (int)$result['sell_by_pack'] : 0;
				$pack_size = isset($result['pack_size']) ? (int)$result['pack_size'] : 0;
				$price_per_unit_formatted = false;
				if ($sell_by_pack && $pack_size > 0) {
					$price_for_calc = (!is_null($result['special']) && (float)$result['special'] >= 0) ? (float)$result['special'] : (float)$result['price'];
					if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
						$current_currency = $this->session->data['currency'];
						$unit_round_precision = 0;
						$symbol_left = $this->currency->getSymbolLeft($current_currency);
						$symbol_right = $this->currency->getSymbolRight($current_currency);
						$format_price_int = function($amount) use ($symbol_left, $symbol_right) {
							$amount = round((float)$amount, 0);
							return $symbol_left . number_format($amount, 0, '.', ' ') . $symbol_right;
						};
						
						$price_per_unit_base = $price_for_calc / $pack_size;
						$price_per_unit_with_tax_base = $this->tax->calculate($price_per_unit_base, $result['tax_class_id'], $this->config->get('config_tax'));
						$price_per_unit_with_tax_converted = $this->currency->convert($price_per_unit_with_tax_base, 'USD', $current_currency);
						$price_per_unit_with_tax_rounded = round($price_per_unit_with_tax_converted, $unit_round_precision);
						$price_per_unit_formatted = $format_price_int($price_per_unit_with_tax_rounded);
						
						$pack_price_with_tax = $price_per_unit_with_tax_rounded * $pack_size;
						$price = $format_price_int($pack_price_with_tax);
						
						if (!is_null($result['special']) && (float)$result['special'] >= 0) {
							$special_unit_base = (float)$result['special'] / $pack_size;
							$special_unit_with_tax_base = $this->tax->calculate($special_unit_base, $result['tax_class_id'], $this->config->get('config_tax'));
							$special_unit_with_tax_converted = $this->currency->convert($special_unit_with_tax_base, 'USD', $current_currency);
							$special_unit_with_tax_rounded = round($special_unit_with_tax_converted, $unit_round_precision);
							$special_pack_with_tax = $special_unit_with_tax_rounded * $pack_size;
							$special = $format_price_int($special_pack_with_tax);
						}
					}
				}

				$data['bestsellersproducts'][] = array(
					'product_id'  => $result['product_id'],
					'thumb'       => $image,
					'name'        => $result['name'],
					'brand'        => $result['manufacturer'],
					'review'        => $result['reviews'],
					'qty'    	  => $result['quantity'],
					'description' => utf8_substr(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8')), 0, $this->config->get($this->config->get('config_theme') . '_product_description_length')) . '..',
					'price'       => $price,
					'special'     => $special,
					'tax'         => $tax,
					'rating'      => $rating,
					'percentsaving' => round((($result['price'] - $result['special'])/$result['price'])*100, 0),
					'specialTime' => ($result['special_end']=='0000-00-00' || is_null($result['special_end'])) ? false : $result['special_end'],
					'sell_by_pack' => $sell_by_pack,
					'pack_size'    => $pack_size,
					'price_per_unit_formatted' => $price_per_unit_formatted,
					'href'        => $this->url->link('product/product', 'product_id=' . $result['product_id']),
					'quick'        => $this->url->link('product/quick_view','&product_id=' . $result['product_id']),
					'thumb_swap'  => $this->model_tool_image->resize($images , $setting['width'], $setting['height'])
				);
			}
		}
	
			return $this->load->view('extension/module/webdigifytabs', $data); 
	}
}