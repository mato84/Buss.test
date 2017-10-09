<?php
class ControllerCheckoutConfirm extends Controller {
	public function index() {
		if(($this->request->server['REQUEST_METHOD'] == 'POST')){
    $json = array();
    $this->load->language('checkout/checkout');
		if (isset($this->request->post['firstname'])) {
			$this->session->data['guest']['firstname'] = $this->request->post['firstname'];
		} else {
			$this->session->data['guest']['firstname'] = '';
			$this->request->post['firstname'] = '';
		}
		if (isset($this->request->post['lastname'])) {
			$this->session->data['guest']['lastname'] = $this->request->post['lastname'];
		} else {
			$this->session->data['guest']['lastname'] = '';
			$this->request->post['lastname'] = '';
		}

		if (isset($this->request->post['email'])) {
			$this->session->data['guest']['email'] = $this->request->post['email'];
		} else {
			$this->session->data['guest']['email'] = '';
			$this->request->post['email'] = ' ';
		}

		if (isset($this->request->post['telephone'])) {
			$this->session->data['guest']['telephone'] = $this->request->post['telephone'];
		} else {
			$this->session->data['guest']['telephone'] = '';
			$this->request->post['telephone'] = ' ';
		}

		if ((utf8_strlen(trim($this->request->post['firstname'])) < 1) || (utf8_strlen(trim($this->request->post['firstname'])) > 32)) {
			$json['error']['firstname'] = $this->language->get('error_firstname');
		}
		if ((utf8_strlen(trim($this->request->post['lastname'])) < 1) || (utf8_strlen(trim($this->request->post['lastname'])) > 32)) {
			$json['error']['lastname'] = $this->language->get('error_lastname');
		}

		// if ((utf8_strlen($this->request->post['email']) > 96) || !preg_match($this->config->get('config_mail_regexp'), $this->request->post['email'])) {
		// 	$json['error']['email'] = $this->language->get('error_email');
		// }

		if ((utf8_strlen($this->request->post['telephone']) < 3) || (utf8_strlen($this->request->post['telephone']) > 32)) {
			$json['error']['telephone'] = $this->language->get('error_telephone');
		}

		if (!$json){
		$this->load->model('checkout/order');

		$order_data = $this->session->data['order_data'];
    if(!isset($this->request->post['comment'])){
			$order_data['comment'] = '';
		}
		else {
			$order_data['comment'] = strip_tags($this->request->post['comment']);
		}
		$order_data['firstname'] = $this->request->post['firstname'];
		$order_data['lastname'] = $this->request->post['lastname'];
		$order_data['email'] = $this->request->post['email'];
		$order_data['telephone'] = $this->request->post['telephone'];
		$this->session->data['order_id'] = $this->model_checkout_order->addOrder($order_data);
		if(isset($this->session->data['order_id']) & $this->session->data['order_id'] > 0 )
      $json['redirect'] = 'index.php?route=extension/payment/'.$order_data['payment_code']."/confirm";
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
		}
	  else {
			$this->response->redirect($this->url->link('error/not_found', '', true));
		}
	 }
  }
