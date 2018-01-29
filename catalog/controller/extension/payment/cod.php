<?php
class ControllerExtensionPaymentCod extends Controller {
	public function index() {
		$data['button_confirm'] = $this->language->get('button_confirm');

		$data['text_loading'] = $this->language->get('text_loading');

		$data['continue'] = $this->url->link('checkout/success');

		return $this->load->view('extension/payment/cod', $data);
	}

	public function confirm() {

	    if(array_key_exists('order_id',$this->session->data) && $this->session->data['order_id'] > 0){
            $this->load->model('checkout/order');

            $this->model_checkout_order->addOrderHistory($this->session->data['order_id'], $this->config->get('cod_order_status_id'));

            return $this;
        }
        $this->response->redirect($this->url->link('catalog/controller/error/not_found', '', true));
	}
}
