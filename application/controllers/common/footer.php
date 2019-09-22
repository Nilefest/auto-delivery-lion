<?php
class footerController extends Controller {
	public function index() {
        
        $this->load->model('global_info');
        
        $this->data['footer'] = $this->global_infoModel->colToKey($this->global_infoModel->getItems(array(), array('type' => 'footer')), 'name');
        $this->data['messager'] = $this->global_infoModel->colToKey($this->global_infoModel->getItems(array(), array('type' => 'messager')), 'name');
        
        $this->data['js'] = $this->config->custom_js;
        
		return $this->load->view('common/footer', $this->data);
	}
}
?>