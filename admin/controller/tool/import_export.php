<?php
class ControllerToolImportExport extends Controller{
  public function index(){
    $this->load->language('tool/import_export');
    $this->document->setTitle($this->language->get('heading_title'));
    $data = array();
    $data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('tool/import_export', 'token=' . $this->session->data['token'], true)
		);
    $data['link_import'] = $this->url->link('tool/import_import/import', 'token=' . $this->session->data['token'], true);
    $data['link_export'] = $this->url->link('tool/import_import/export', 'token=' . $this->session->data['token'], true);
    $data['entry_import_export'] = $this->language->get('entry_import_export');
    $data['heading_title'] = $this->language->get('heading_title');
    $data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
   $this->response->setOutput($this->load->view('tool/import_export', $data));
  }
  public function import(){

  }
  public function export(){

  }
}
