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
    $data['link_import'] = $this->url->link('tool/import_export/import', 'token=' . $this->session->data['token'], true);
    $data['link_export'] = $this->url->link('tool/import_export/export', 'token=' . $this->session->data['token'], true);
    $data['entry_import_export'] = $this->language->get('entry_import_export');
    $data['heading_title'] = $this->language->get('heading_title');
    $data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
   $this->response->setOutput($this->load->view('tool/import_export', $data));
  }
  protected function upload(){

      $supportedFormats = [
          'application/vnd.ms-office',
          'application/octet-stream',
          'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
      ];
    $is_upload = array();
    $is_upload['is_uploaded'] = false;
    $is_upload['errors'] = $this->request->files['import']['error'];
    $finfo = new finfo(FILEINFO_MIME_TYPE);

    if (!in_array($finfo->file($this->request->files['import']['tmp_name']), $supportedFormats)) {
     $is_upload['errors'] = "not mime is excel format";
     return $is_upload;
   }
    if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->user->hasPermission('modify', 'tool/import_export')){
      if (is_uploaded_file($this->request->files['import']['tmp_name'])) {
        $filename = html_entity_decode($this->request->files['import']['name'], ENT_QUOTES, 'UTF-8');
        // $content = file_get_contents($this->request->files['import']['tmp_name']);
        $new_filename = 'is_upload_'.token(16) .".". substr( strrchr($filename, '.'), 1);;
        if($is_upload['is_uploaded'] = move_uploaded_file($this->request->files['import']['tmp_name'], DIR_UPLOAD . $new_filename)){
          $is_upload['path_to_upload_file'] = DIR_UPLOAD . $new_filename;
        }

      }
    }
    return $is_upload;
  }
  public function import(){
   $this->load->model('tool/import_export');
   $json = array();
   $test = $this->upload();
   if($test['is_uploaded']){
      $json['is_added'] = $this->model_tool_import_export->import($test['path_to_upload_file']);
      // $json['success'] = $test['path_to_upload_file'];
   }
   else{
     $json['errors'] = $test['errors'];
   }
   if($json['is_added']){
     $this->response->redirect($this->url->link('tool/import_export', 'token=' . $this->session->data['token'], true));
   }
   else{
     $this->response->addHeader('Content-Type: application/json');
     $this->response->setOutput(json_encode($json));
   }

  }
  public function export(){

  }
}
