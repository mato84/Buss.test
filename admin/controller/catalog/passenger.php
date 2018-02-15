<?php

class ControllerCatalogPassenger extends Controller
{
    private $error = array();

    public function index() {
        $this->load->language('catalog/passenger');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('catalog/passenger');

        $this->getList();
    }
    public function add() {
        $this->load->language('catalog/passenger');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('catalog/passenger');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {

            $this->model_catalog_passenger->addPassenger($this->request->post);

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

            $this->response->redirect($this->url->link('catalog/passenger', 'token=' . $this->session->data['token'] . $url, true));
        }

        $this->getForm();
    }
    public function edit() {
        $this->load->language('catalog/passenger');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('catalog/passenger');

        if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validateForm()) {
            $this->model_catalog_passenger->editPassenger($this->request->get['pass_id'], $this->request->post);

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

            $this->response->redirect($this->url->link('catalog/passenger', 'token=' . $this->session->data['token'] . $url, true));
        }

        $this->getForm();
    }
    public function delete() {
        $this->load->language('catalog/passenger');

        $this->document->setTitle($this->language->get('heading_title'));

        $this->load->model('catalog/passenger');

        if (isset($this->request->post['selected']) /*&& $this->validateDelete()*/) {
            foreach ($this->request->post['selected'] as $pass_id) {
                $this->model_catalog_passenger->deletePassenger($pass_id);
            }

            $this->session->data['success'] = $this->language->get('text_success_delete');

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

            $this->response->redirect($this->url->link('catalog/passenger', 'token=' . $this->session->data['token'] . $url, true));
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
            'href' => $this->url->link('catalog/passenger', 'token=' . $this->session->data['token'] . $url, true)
        );

        $data['add'] = $this->url->link('catalog/passenger/add', 'token=' . $this->session->data['token'] . $url, true);
        $data['delete'] = $this->url->link('catalog/passenger/delete', 'token=' . $this->session->data['token'] . $url, true);

        $data['passengers'] = array();

        $filter_data = array(
            'sort'  => $sort,
            'order' => $order,
            'start' => ($page - 1) * $this->config->get('config_limit_admin'),
            'limit' => $this->config->get('config_limit_admin')
        );

        $passenger_total = $this->model_catalog_passenger->getTotalPassengers();

        $results = $this->model_catalog_passenger->getPassengers($filter_data);

        foreach ($results as $result) {
            $data['passengers'][] = array(
                'pass_id'            => $result['pass_id'],
                'name'               => $result['name'],
                'surname'            => $result['surname'],
                'phone'              => $result['phone'],
                'email'              => $result['email'],
                'edit'               => $this->url->link('catalog/passenger/edit', 'token=' . $this->session->data['token'] . '&pass_id=' . $result['pass_id'] . $url, true)
            );
        }


        $data['heading_title'] = $this->language->get('heading_title');

        $data['text_list'] = $this->language->get('text_list');
        $data['text_no_results'] = $this->language->get('text_no_results');
        $data['text_confirm'] = $this->language->get('text_confirm');

        $data['column_name'] = $this->language->get('column_name');
        $data['column_surname'] = $this->language->get('column_surname');
        $data['column_phone'] = $this->language->get('column_phone');
        $data['column_email'] = $this->language->get('column_email');
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

        $data['sort_name'] = $this->url->link('catalog/passenger', 'token=' . $this->session->data['token'] . '&sort=name' . $url, true);
        $data['sort_sort_order'] = $this->url->link('catalog/passenger', 'token=' . $this->session->data['token'] . '&sort=sort_order' . $url, true);

        $url = '';

        if (isset($this->request->get['sort'])) {
            $url .= '&sort=' . $this->request->get['sort'];
        }

        if (isset($this->request->get['order'])) {
            $url .= '&order=' . $this->request->get['order'];
        }

        $pagination = new Pagination();
        $pagination->total = $passenger_total;
        $pagination->page = $page;
        $pagination->limit = $this->config->get('config_limit_admin');
        $pagination->url = $this->url->link('catalog/passenger', 'token=' . $this->session->data['token'] . $url . '&page={page}', true);

        $data['pagination'] = $pagination->render();

        $data['results'] = sprintf($this->language->get('text_pagination'), ($passenger_total) ? (($page - 1) * $this->config->get('config_limit_admin')) + 1 : 0, ((($page - 1) * $this->config->get('config_limit_admin')) > ($passenger_total - $this->config->get('config_limit_admin'))) ? $passenger_total : ((($page - 1) * $this->config->get('config_limit_admin')) + $this->config->get('config_limit_admin')), $passenger_total, ceil($passenger_total / $this->config->get('config_limit_admin')));

        $data['sort'] = $sort;
        $data['order'] = $order;

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('catalog/passenger_list', $data));
    }
    protected function validateForm() {
        if (!$this->user->hasPermission('modify', 'catalog/passenger')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }
        if ((utf8_strlen($this->request->post['name']) < 1) || (utf8_strlen($this->request->post['name']) > 32)) {
            $this->error['name'] = $this->language->get('error_name');
        }
        if ((utf8_strlen($this->request->post['surname']) < 1) || (utf8_strlen($this->request->post['surname']) > 32)) {
            $this->error['surname'] = $this->language->get('error_surname');
        }
        if (!isset($this->request->post['phone']) && is_numeric($this->request->post['phone'])) {
            $this->error['phone'] = $this->language->get('error_phone');
        }
        if ((utf8_strlen($this->request->post['phone']) < 10)) {
            $this->error['phone'] = $this->language->get('error_phone_quantity');
        }
        return !$this->error;
    }

    protected function getForm() {
        //CKEditor
        if ($this->config->get('config_editor_default')) {
            $this->document->addScript('view/javascript/ckeditor/ckeditor.js');
            $this->document->addScript('view/javascript/ckeditor/ckeditor_init.js');
        } else {

            $this->document->addScript('view/javascript/summernote/opencart.js');
            $this->document->addStyle('view/javascript/summernote/summernote.css');
        }


        $data['heading_title'] = $this->language->get('heading_title');

        $data['text_form'] = !isset($this->request->get['pass_id']) ? $this->language->get('text_add') : $this->language->get('text_edit');
        $data['text_enabled'] = $this->language->get('text_enabled');
        $data['text_disabled'] = $this->language->get('text_disabled');
        $data['text_default'] = $this->language->get('text_default');
        $data['entry_name'] = $this->language->get('entry_name');
        $data['entry_surname'] = $this->language->get('entry_surname');
        $data['entry_phone'] = $this->language->get('entry_phone');
        $data['entry_email'] = $this->language->get('entry_email');

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
        if (isset($this->error['surname'])) {
            $data['error_surname'] = $this->error['surname'];
        } else {
            $data['error_surname'] = '';
        }
        if (isset($this->error['phone'])) {
            $data['error_phone'] = $this->error['phone'];
        } else {
            $data['error_phone'] = '';
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
            'href' => $this->url->link('catalog/passenger', 'token=' . $this->session->data['token'] . $url, true)
        );

        if (!isset($this->request->get['pass_id'])) {
            $data['action'] = $this->url->link('catalog/passenger/add', 'token=' . $this->session->data['token'] . $url, true);
        } else {
            $data['action'] = $this->url->link('catalog/passenger/edit', 'token=' . $this->session->data['token'] . '&pass_id=' . $this->request->get['pass_id'] . $url, true);
        }

        $data['cancel'] = $this->url->link('catalog/passenger', 'token=' . $this->session->data['token'] . $url, true);

        if (isset($this->request->get['pass_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
            $passenger_info = $this->model_catalog_passenger->getPassenger($this->request->get['pass_id']);
        }

        $data['token'] = $this->session->data['token'];
        $data['ckeditor'] = $this->config->get('config_editor_default');


        if (isset($this->request->post['name'])) {
            $data['name'] = $this->request->post['name'];
        } elseif (!empty($passenger_info)) {
            $data['name'] = $passenger_info['name'];
        } else {
            $data['name'] = '';
        }

        if (isset($this->request->post['surname'])) {
            $data['surname'] = $this->request->post['surname'];
        } elseif (!empty($passenger_info)) {
            $data['surname'] = $passenger_info['surname'];
        } else {
            $data['surname'] = '';
        }

        if (isset($this->request->post['phone'])) {
            $data['phone'] = $this->request->post['phone'];
        } elseif (!empty($passenger_info)) {
            $data['phone'] = $passenger_info['phone'];
        } else {
            $data['phone'] = '';
        }
        if (isset($this->request->post['email'])) {
            $data['email'] = $this->request->post['email'];
        } elseif (!empty($passenger_info)) {
            $data['email'] = $passenger_info['email'];
        } else {
            $data['email'] = '';
        }

        if (isset($this->request->post['sort_order'])) {
            $data['sort_order'] = $this->request->post['sort_order'];
        } elseif (!empty($city_info)) {
            $data['sort_order'] = $city_info['sort_order'];
        } else {
            $data['sort_order'] = '';
        }

        $data['header'] = $this->load->controller('common/header');
        $data['column_left'] = $this->load->controller('common/column_left');
        $data['footer'] = $this->load->controller('common/footer');

        $this->response->setOutput($this->load->view('catalog/passenger_form', $data));
    }



}