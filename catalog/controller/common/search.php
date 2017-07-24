<?php
class ControllerCommonSearch extends Controller {
	public function index() {
		$this->load->language('common/search');

		$data['text_search'] = $this->language->get('text_search');

		if (isset($this->request->get['search'])) {
			$data['search'] = $this->request->get['search'];
		} else {
			$data['search'] = '';
		}

		return $this->load->view('common/search', $data);
	}

	public function autocomplete(){
		$json = array();


			$this->load->model('catalog/product');
			if (isset($this->request->get['field_id']))
			{
				$field_id = $this->request->get['field_id'];
				switch ($field_id) {
					case 'wherefrom':
						$field_id = 'from';
						break;
					case 'where':
							$field_id = 'to';
							break;

					default:
						$field_id = 'from';
						break;
				}

				$results = $this->model_catalog_product->getProductSearchToAutocomplite($field_id);

				foreach ($results as $result) {
					$json[] = array(
						'name'            => strip_tags(html_entity_decode($result['name'], ENT_QUOTES, 'UTF-8')),
						'contry_iso'        => strip_tags(html_entity_decode($result['contry_iso'], ENT_QUOTES, 'UTF-8'))

					);
				}


			$sort_order = array();

			foreach ($json as $key => $value) {
				$sort_order[$key] = $value['name'];
			}

			array_multisort($sort_order, SORT_ASC, $json);

			}


		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));

	}
}
