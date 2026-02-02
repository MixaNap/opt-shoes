<?php
class ControllerExtensionModuleCategory extends Controller {
	public function index($setting) {
		$this->load->language('extension/module/category');

		$data['heading_title'] = $this->language->get('heading_title');

		if (isset($this->request->get['path'])) {
			$parts = explode('_', (string)$this->request->get['path']);
		} else {
			$parts = array();
		}

		if (isset($parts[0])) {
			$data['category_id'] = $parts[0];
		} else {
			$data['category_id'] = 0;
		}

		if (isset($parts[1])) {
			$data['child_id'] = $parts[1];
		} else {
			$data['child_id'] = 0;
		}

		$this->load->model('catalog/category');

		$data['categories'] = array();
		$data['first_open_id'] = 0;

		$categories = $this->model_catalog_category->getCategories(0);

		foreach ($categories as $category) {
			$children_data = array();
			$children = $this->model_catalog_category->getCategories($category['category_id']);
			$has_children = !empty($children);

			if (!$data['first_open_id'] && $has_children) {
				$data['first_open_id'] = $category['category_id'];
			}

			foreach ($children as $child) {
				$children_data[] = array(
					'category_id' => $child['category_id'],
					'name' => $child['name'],
					'href' => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id'])
				);
			}

			$data['categories'][] = array(
				'category_id' => $category['category_id'],
				'name'        => $category['name'],
				'children'    => $children_data,
				'has_children'=> $has_children,
				'href'        => $this->url->link('product/category', 'path=' . $category['category_id'])
				
			);
		}

		return $this->load->view('extension/module/category', $data);
	}
}