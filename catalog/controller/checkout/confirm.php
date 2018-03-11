<?php
class ControllerCheckoutConfirm extends Controller {
	public function index() {
        $countPassengers = $this->cart->countProducts();
		if(($this->request->server['REQUEST_METHOD'] == 'POST' && $countPassengers > 0)){

		    $isAgent = $this->customer->getGroupShortName() === 'agent';



            $json = array();
            $this->load->language('checkout/checkout');

        if($this->customer->isLogged() && $isAgent ) {

            $this->session->data['guest']['firstname'] = $this->customer->getFirstName();
            $this->session->data['guest']['lastname']  = $this->customer->getLastName();
            $this->session->data['guest']['email']     = $this->customer->getEmail();
            $this->session->data['guest']['phone']     = $this->customer->getTelephone();

            $this->request->post['firstname'] = $this->customer->getFirstName();
            $this->request->post['lastname']  = $this->customer->getLastName();
            $this->request->post['telephone'] = $this->customer->getTelephone();
            $this->request->post['email']     = $this->customer->getEmail();

        }

        else{
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
                $this->session->data['guest']['email'] = '';
                $this->request->post['email'] = '';
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
            if((utf8_strlen(trim($this->request->post['lastname'])) < 1) || (utf8_strlen(trim($this->request->post['lastname'])) > 32)) {
                $json['error']['lastname'] = $this->language->get('error_lastname');
            }
            if (!preg_match("/^[0-9]{12,14}$/", str_replace(' ', '', $this->request->post['telephone']) )) {
                $json['error']['telephone'] = $this->language->get('error_telephone');
            }


            // if ((utf8_strlen($this->request->post['email']) > 96) || !preg_match($this->config->get('config_mail_regexp'), $this->request->post['email'])) {

            // 	$json['error']['email'] = $this->language->get('error_email');

            // }

        }
		$passengers = null;
		if($countPassengers > 0
            && isset($this->request->post['passenger_lastname'])
            && isset($this->request->post['passenger_firstname'])
            && isset($this->request->post['passenger_telephone']))
		{

           $passengers =  $this->validatePassengers( $isAgent ? $countPassengers : $countPassengers -1,
               $this->getPassengersFromRequest($this->request->post));
           if($passengers['error'] === true ) {
               unset($passengers['error']);
               $json['error']['passengers'] = $passengers;
           }
        }

		if (!$json){
		$this->load->model('checkout/order');
		$this->load->model('catalog/passenger');
		$order_data = $this->session->data['order_data'];

		if(!isset($this->request->post['comment'])){
			$order_data['comment'] = '';
		}
		else {
			$order_data['comment'] = strip_tags($this->request->post['comment']);
		}
		$currentCustomer = $this->createCustomerFromRequest($this->request->post);

		$order_data['firstname'] = $currentCustomer['first_name'];
		$order_data['lastname']  = $currentCustomer['last_name'];
		$order_data['email']     = $currentCustomer['passenger_email'];
		$order_data['telephone'] = $currentCustomer['phone'];

		$orderId = $this->model_checkout_order->addOrder($order_data);
		$this->session->data['order_id'] = $orderId;

		if(!$isAgent) {
            $passengers[] = $currentCustomer;
        }

		 $uniquePassengers = $this->getUniquePassengers($passengers);
		 $passengersAddedIds = $this->model_catalog_passenger->addPassengers($uniquePassengers);
		 $this->model_checkout_order->addPassengerToOrder($passengersAddedIds, $orderId);

		if(isset($this->session->data['order_id']) && $this->session->data['order_id'] > 0 ){
            $json['redirect'] = 'index.php?route=extension/payment/'.$order_data['payment_code']."/confirm";
        }
		}
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
		}
	  else {
			$this->response->redirect($this->url->link('error/not_found', '', true));
		}
	 }
	 private function createCustomerFromRequest($request) {
	    return [
	        'first_name'      => $request['firstname'],
	        'last_name'       => $request['lastname'],
	        'phone'           => str_replace(' ', '', $this->request->post['telephone']),
            'passenger_email' => filter_var($this->request->post['email'], FILTER_VALIDATE_EMAIL )
                ? $this->request->post['email']
                : 'no_mail@panbus.com.ua'

        ];
     }

    /**
     * @param array $request
     * @return array
     */
	 private function getPassengersFromRequest(array $request) {
         return [
	        'passenger_lastname'  => $request['passenger_lastname'],
            'passenger_firstname' => $request['passenger_firstname'],
            'passenger_telephone' => $request['passenger_telephone'],
            'passenger_email'     => $request['passenger_email'],
            ];
     }

    /**
     * @param $countPassangers
     * @param $requestPassengers
     * @return array
     */
	 private function validatePassengers($countPassangers, $requestPassengers ){
         $this->load->language('checkout/checkout');
         $error = false;
         $passengers = [];
         for($count = 0; $count < $countPassangers; $count++){
             $currentPassenger= [];
             if ((mb_strlen($requestPassengers['passenger_lastname'][$count]) < 1)
                 || (mb_strlen($requestPassengers['passenger_lastname'][$count])) > 32){
                 $currentPassenger['last_name']['error'] = $this->language->get('error_lastname');
                 $error = true;
             }
             else{
                 $currentPassenger['last_name'] = $requestPassengers['passenger_lastname'][$count];
         }
             if ((mb_strlen($requestPassengers['passenger_firstname'][$count]) < 1)
                 || (mb_strlen($requestPassengers['passenger_firstname'][$count])) > 32){
                 $currentPassenger['first_name']['error'] = $this->language->get('error_firstname');
                 $error = true;
             }
             else{
                 $currentPassenger['first_name'] = $requestPassengers['passenger_firstname'][$count];
             }
             if (!preg_match("/^[0-9]{12,14}$/", str_replace(' ', '', $requestPassengers['passenger_telephone'][$count]))){
                 $currentPassenger['phone']['error'] = $this->language->get('error_telephone');
                 $error = true;
             }
             else{
                 $currentPassenger['phone'] = str_replace(' ', '', $requestPassengers['passenger_telephone'][$count]);
             }
             $currentPassenger['passenger_email'] = isset($requestPassengers['passenger_email'])
                 ? $requestPassengers['passenger_email'][$count]
                 :"";
             $passengers[] = $currentPassenger;
         }
         $passengers['error'] = $error;
         return $passengers;

     }

    /**
     * @param array $passengers
     * @return mixed
     */
     private function getUniquePassengers(array $passengers){
         $this->load->model('catalog/passenger');
         $existPassenger = array_reduce($this->model_catalog_passenger->getAllPhone(), function($acc, $item ){
	         $acc[$item['phone']] = $item['pass_id'];
	         return $acc;
         }, []);
	     return array_reduce($passengers, function($acc, $passenger) use ($existPassenger){
	         if(isset($existPassenger[$passenger['phone']])){
	             $acc[] = $existPassenger[$passenger['phone']];
             }
             else{
                 $acc[] = $passenger;
             }
	         return $acc;
         },[]);
     }
  }
