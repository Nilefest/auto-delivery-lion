<?php
class indexController extends Controller {
	public function index() {
        
        $this->load->model('global_info');
        $this->data['phones'] = $this->global_infoModel->colToKey($this->global_infoModel->getItems([], ['name' => 'phone']), 'description');
        
        $this->config->title_name = 'Услуги сервиса Auto delivery Lion';
		$this->getChild(['common/header', 'common/footer']);
		return $this->load->view('services/index', $this->data);
	}
}
?>