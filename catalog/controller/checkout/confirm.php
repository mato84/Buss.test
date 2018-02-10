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

		if (array_key_exists('email', $this->request->post) && $this->request->post['email']) {
			$this->session->data['guest']['email'] = $this->request->post['email'];
		} else {
			$this->session->data['guest']['email'] = 'no_mail@panbus.com.ua';
			$this->request->post['email'] = 'no_mail@panbus.com.ua';
		}

		if (isset($this->request->post['telephone'])) {
			$this->session->data['guest']['telephone'] = $this->request->post['telephone'];
		} else {
			$this->session->data['guest']['telephone'] = '';
			$this->request->post['telephone'] = ' ';
		}

		$countPassangers = $this->cart->countProducts();
		if($countPassangers > 1
            && isset($this->request->post['passenger_lastname'])
            && isset($this->request->post['passenger_firstname'])
            && isset($this->request->post['passenger_telephone']))
		{
           $passengers =  $this->validatePassengers($countPassangers-1);
           if($passengers['error'] === true){
               unset($passengers['error']);
               $json['error']['passengers'] = $passengers;
           }
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


		if (!preg_match("/^[0-9]{12,15}$/", $this->request->post['telephone'])) {
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
		if(isset($this->session->data['order_id']) && $this->session->data['order_id'] > 0 )
      $json['redirect'] = 'index.php?route=extension/payment/'.$order_data['payment_code']."/confirm";
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
		}
	  else {
			$this->response->redirect($this->url->link('error/not_found', '', true));
		}
	 }
	 private function validatePassengers($countPassangers){
         $this->load->language('checkout/checkout');
         $error = false;
         $passengers = [];
         for($count = 0; $count < $countPassangers; $count++){
             $currentPassenger= [];
             if ((mb_strlen($this->request->post['passenger_lastname'][$count]) < 1)
                 || (mb_strlen($this->request->post['passenger_lastname'][$count])) > 32){
                 $currentPassenger['last_name']['error'] = $this->language->get('error_lastname');
                 $error = true;
             }
             else{
                 $currentPassenger['last_name'] = $this->request->post['passenger_lastname'][$count];

         }

             if ((mb_strlen($this->request->post['passenger_firstname'][$count]) < 1)
                 || (mb_strlen($this->request->post['passenger_firstname'][$count])) > 32){
                 $currentPassenger['first_name']['error'] = $this->language->get('error_firstname');
                 $error = true;

             }
             else{
                 $currentPassenger['first_name'] = $this->request->post['passenger_firstname'][$count];

             }

             if (!preg_match("/^[0-9]{12,15}$/", $this->request->post['passenger_telephone'][$count])){
                 $currentPassenger['phone']['error'] = $this->language->get('error_telephone');
                 $error = true;

             }
             else{
                 $currentPassenger['phone'] = $this->request->post['passenger_telephone'][$count];

             }

             $passengers[] = $currentPassenger;
         }

         $passengers['error'] = $error;
         return $passengers;

     }
  }
