<?php
class ControllerCatalogWaypoint extends Controller {
  private $error = array();

	public function index() {
		$this->load->language('catalog/waypoint');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('catalog/waypoint');

		$this->getList();
	}
  public function add() {
		$this->load->language('catalog/waypoint');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('catalog/waypoint');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {

			$this->model_catalog_waypoint->addWaypoint($this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('catalog/waypoint', 'token=' . $this->session->data['token'] . $url, true));
		}

		$this->getForm();
	}
  public function edit() {
		$this->load->language('catalog/waypoint');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('catalog/waypoint');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
			$this->model_catalog_waypoint->editWaypoint($this->request->get['waypoint_id'], $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('catalog/waypoint', 'token=' . $this->session->data['token'] . $url, true));
		}

		$this->getForm();
	}
  public function delete() {
		$this->load->language('catalog/waypoint');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('catalog/waypoint');

  if (isset($this->request->post['selected']) /*&& $this->validateDelete()*/) {
			foreach ($this->request->post['selected'] as $waypoint_id) {
				$this->model_catalog_waypoint->deleteWaypoint($waypoint_id);
			}

			$this->session->data['success'] = $this->language->get('text_success');

			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['page'])) {
				$url .= '&page=' . $this->request->get['page'];
			}

			$this->response->redirect($this->url->link('catalog/waypoint', 'token=' . $this->session->data['token'] . $url, true));
		}

		$this->getList();
	}
  protected function getList() {
		if (isset($this->request->get['sort'])) {
			$sort = $this->request->get['sort'];
		} else {
			$sort = 'name';
		}

		if (isset($this->request->get['order'])) {
			$order = $this->request->get['order'];
		} else {
			$order = 'ASC';
		}

		if (isset($this->request->get['page'])) {
			$page = $this->request->get['page'];
		} else {
			$page = 1;
		}

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('catalog/waypoint', 'token=' . $this->session->data['token'] . $url, true)
		);

		$data['add'] = $this->url->link('catalog/waypoint/add', 'token=' . $this->session->data['token'] . $url, true);
		$data['delete'] = $this->url->link('catalog/waypoint/delete', 'token=' . $this->session->data['token'] . $url, true);

		$data['waypoints'] = array();

		$filter_data = array(
			'sort'  => $sort,
			'order' => $order,
			'start' => ($page - 1) * $this->config->get('config_limit_admin'),
			'limit' => $this->config->get('config_limit_admin')
		);

		$waypoint_total = $this->model_catalog_waypoint->getTotalWaypoints();

		$results = $this->model_catalog_waypoint->getWaypoints($filter_data);

		foreach ($results as $result) {
			$data['waypoints'][] = array(
				'waypoint_id'        => $result['waypoint_id'],
				'name'               => $result['name'],
        'time'               => $result['time'],
        'place'              => $result['place'],
        'manufacturer_id'    => $result['manufacturer_id'],
				'sort_order'         => $result['sort_order'],
				'edit'               => $this->url->link('catalog/waypoint/edit', 'token=' . $this->session->data['token'] . '&waypoint_id=' . $result['waypoint_id'] . $url, true)
			);
		}

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_list'] = $this->language->get('text_list');
		$data['text_no_results'] = $this->language->get('text_no_results');
		$data['text_confirm'] = $this->language->get('text_confirm');

		$data['column_name'] = $this->language->get('column_name');
		$data['column_sort_order'] = $this->language->get('column_sort_order');
		$data['column_action'] = $this->language->get('column_action');

		$data['button_add'] = $this->language->get('button_add');
		$data['button_edit'] = $this->language->get('button_edit');
		$data['button_delete'] = $this->language->get('button_delete');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->session->data['success'])) {
			$data['success'] = $this->session->data['success'];

			unset($this->session->data['success']);
		} else {
			$data['success'] = '';
		}

		if (isset($this->request->post['selected'])) {
			$data['selected'] = (array)$this->request->post['selected'];
		} else {
			$data['selected'] = array();
		}

		$url = '';

		if ($order == 'ASC') {
			$url .= '&order=DESC';
		} else {
			$url .= '&order=ASC';
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['sort_name'] = $this->url->link('catalog/waypoint', 'token=' . $this->session->data['token'] . '&sort=name' . $url, true);
		$data['sort_sort_order'] = $this->url->link('catalog/waypoint', 'token=' . $this->session->data['token'] . '&sort=sort_order' . $url, true);

		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		$pagination = new Pagination();
		$pagination->total = $waypoint_total;
		$pagination->page = $page;
		$pagination->limit = $this->config->get('config_limit_admin');
		$pagination->url = $this->url->link('catalog/waypoint', 'token=' . $this->session->data['token'] . $url . '&page={page}', true);

		$data['pagination'] = $pagination->render();

		$data['results'] = sprintf($this->language->get('text_pagination'), ($waypoint_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($waypoint_total - $this->config->get('config_limit_admin'))) ? $waypoint_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $waypoint_total, ceil($waypoint_total / $this->config->get('config_limit_admin')));

		$data['sort'] = $sort;
		$data['order'] = $order;

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('catalog/waypoint_list', $data));
	}
  protected function createName($request){
    $this->load->model('catalog/manufacturer');
    $name_manufacturer = $this->model_catalog_manufacturer->getManufacturer($request->post['manufacturer_id'] );
    return $request->post['city']."-".$request->post['time']."-".$name_manufacturer['name'];
  }
  protected function validateForm() {
		if (!$this->user->hasPermission('modify', 'catalog/waypoint')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}
    if ((utf8_strlen($this->request->post['city']) < 1) || (utf8_strlen($this->request->post['city']) > 32)) {
      $this->error['city_id'] = $this->language->get('error_city_id');
    }
    if ((utf8_strlen($this->request->post['time']) < 1) || (utf8_strlen($this->request->post['time']) > 10)) {
      $this->error['time'] = $this->language->get('error_time');
    }
    if (!isset($this->request->post['manufacturer_id'])) {
      			  $this->error['manufacturer_id'] = $this->language->get('error_manufacturer_id');
      		  }
    if (empty($this->request->post['name'])) {
            $this->request->post['name'] = $this->createName($this->request);
            }
		return !$this->error;
	}
  protected function getForm() {
    $this->document->addScript('http://maps.google.com/maps/api/js?key=AIzaSyB79WRG7sgoNE4ksW8S4vw6NOsx20H77_o');
    $this->document->addScript('view/javascript/geocoding/gmaps.js');
    //CKEditor
    if ($this->config->get('config_editor_default')) {
        $this->document->addScript('view/javascript/ckeditor/ckeditor.js');
        $this->document->addScript('view/javascript/ckeditor/ckeditor_init.js');
    } else {

        // $this->document->addScript('view/javascript/summernote/opencart.js');
        // $this->document->addStyle('view/javascript/summernote/summernote.css');
    }
    $this->load->model('catalog/manufacturer');

    $data['manufacturers'] = $this->model_catalog_manufacturer->getManufacturers();

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_form'] = !isset($this->request->get['waypoint_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');
		$data['text_default'] = $this->language->get('text_default');
		$data['text_percent'] = $this->language->get('text_percent');
		$data['text_amount'] = $this->language->get('text_amount');
    $data['entry_zone'] = $this->language->get('entry_zone');
		$data['entry_name'] = $this->language->get('entry_name');
		$data['entry_city'] = $this->language->get('entry_city');
		$data['entry_time'] = $this->language->get('entry_time');
    $data['entry_place'] = $this->language->get('entry_place');
    $data['entry_manufacturer'] = $this->language->get('entry_manufacturer');
    $data['entry_latitude'] = $this->language->get('entry_latitude');
    $data['entry_longitude'] = $this->language->get('entry_longitude');
    $data['button_get_geo'] = $this->language->get('button_get_geo');
		$data['entry_sort_order'] = $this->language->get('entry_sort_order');

		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['name'])) {
			$data['error_name'] = $this->error['name'];
		} else {
			$data['error_name'] = '';
		}
    if (isset($this->error['city_id'])) {
			$data['error_city_id'] = $this->error['city_id'];
		} else {
			$data['error_city_id'] = '';
		}
    if (isset($this->error['time'])) {
			$data['error_time'] = $this->error['time'];
		} else {
			$data['error_time'] = '';
		}
    if (isset($this->error['place'])) {
			$data['error_place'] = $this->error['place'];
		} else {
			$data['error_place'] = '';
		}

    if (isset($this->error['manufacturer_id'])) {
			$data['error_manufacturer_id'] = $this->error['manufacturer_id'];
		} else {
			$data['error_manufacturer_id'] = '';
		}
		$url = '';

		if (isset($this->request->get['sort'])) {
			$url .= '&sort=' . $this->request->get['sort'];
		}

		if (isset($this->request->get['order'])) {
			$url .= '&order=' . $this->request->get['order'];
		}

		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('catalog/waypoint', 'token=' . $this->session->data['token'] . $url, true)
		);

		if (!isset($this->request->get['waypoint_id'])) {
			$data['action'] = $this->url->link('catalog/waypoint/add', 'token=' . $this->session->data['token'] . $url, true);
		} else {
			$data['action'] = $this->url->link('catalog/waypoint/edit', 'token=' . $this->session->data['token'] . '&waypoint_id=' . $this->request->get['waypoint_id'] . $url, true);
		}

		$data['cancel'] = $this->url->link('catalog/waypoint', 'token=' . $this->session->data['token'] . $url, true);

    if (isset($this->request->get['waypoint_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$waypoint_info = $this->model_catalog_waypoint->getWaypoint($this->request->get['waypoint_id']);
		}

		$data['token'] = $this->session->data['token'];
		$data['ckeditor'] = $this->config->get('config_editor_default');

    if (isset($this->request->post['city'])) {
      $data['city'] = $this->request->post['city'];
    } elseif (!empty($waypoint_info)) {
      $data['city'] = $waypoint_info['city'];
    } else {
      $data['city'] = '';
    }
    if (isset($this->request->post['time'])) {
      $data['time'] = $this->request->post['time'];
    } elseif (!empty($waypoint_info)) {
      $data['time'] = $waypoint_info['time'];
    } else {
      $data['time'] = "";
    }

		if (isset($this->request->post['name'])) {
			$data['name'] = trim($this->request->post['name']);
		} elseif (!empty($waypoint_info)) {
			$data['name'] = $waypoint_info['name'];
		} else {
			$data['name'] = "";
		}


    if (isset($this->request->post['latitude'])) {
			$data['latitude'] = trim($this->request->post['latitude']);
		} elseif (!empty($waypoint_info)) {
			$data['latitude'] = $waypoint_info['latitude'];
		} else {
      $data['latitude'] = 0;
		}

    if (isset($this->request->post['longitude'])) {
			$data['longitude'] = trim($this->request->post['longitude']);
		} elseif (!empty($waypoint_info)) {
			$data['longitude'] = $waypoint_info['longitude'];
		} else {
      $data['longitude'] = 0;
		}

    if (isset($this->request->post['place'])) {
			$data['place'] = $this->request->post['place'];
		} elseif (!empty($waypoint_info)) {
			$data['place'] = $waypoint_info['place'];
		} else {
			$data['place'] = '';
		}

    if (isset($this->request->post['manufacturer_id'])) {
			$data['manufacturer_id'] = $this->request->post['manufacturer_id'];
		} elseif (!empty($waypoint_info)) {
			$data['manufacturer_id'] = $waypoint_info['manufacturer_id'];
		} else {
			$data['manufacturer_id'] = '';
		}

		if (isset($this->request->post['sort_order'])) {
			$data['sort_order'] = $this->request->post['sort_order'];
		} elseif (!empty($waypoint_info)) {
			$data['sort_order'] = $waypoint_info['sort_order'];
		} else {
			$data['sort_order'] = '';
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('catalog/waypoint_form', $data));
	}
  protected function validateDelete() {
		if (!$this->user->hasPermission('modify', 'catalog/waypoint')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		$this->load->model('catalog/product');

		foreach ($this->request->post['selected'] as $waypoint_id) {
			$product_total = $this->model_catalog_product->getTotalProductsByCitiesId($waypoint_id);

			if ($product_total) {
				$this->error['warning'] = sprintf($this->language->get('error_product'), $product_total);
			}
		}

		return !$this->error;
	}

}
