<?php
class ControllerExtensionModuleSlideshow extends Controller {
	public function index($setting) {
		static $module = 0;		

		$this->load->model('design/banner');
		$this->load->model('tool/image');

		$this->document->addStyle('catalog/view/javascript/jquery/swiper/css/swiper.min.css');
		$this->document->addStyle('catalog/view/javascript/jquery/swiper/css/opencart.css');
		$this->document->addScript('catalog/view/javascript/jquery/swiper/js/swiper.jquery.min.js'); 
		
		$data['banners'] = array();

		$results = $this->model_design_banner->getBanner($setting['banner_id']);

		foreach ($results as $result) {
			if (is_file(DIR_IMAGE . $result['image'])) {
				$data['banners'][] = array(
					'title' =>  html_entity_decode(isset($result['title']) ? $result['title'] : '',  ENT_QUOTES, 'UTF-8'),
					'title1' => html_entity_decode(isset($result['title1']) ? $result['title1'] : '',  ENT_QUOTES, 'UTF-8'),
					'link'  => isset($result['link']) ? $result['link'] : '',
					'button' => isset($result['button']) ? $result['button'] : '',
					'description' => isset($result['description']) ? $result['description'] : '',
					'image' => $this->model_tool_image->resize($result['image'], $setting['width'], $setting['height'])
				);
			}
		}

		$data['module'] = $module++;

		return $this->load->view('extension/module/slideshow', $data);
	}
}