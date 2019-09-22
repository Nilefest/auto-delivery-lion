<?php
class headerController extends Controller {

	public function index() {
        
        $this->load->model('global_info');
        
        $this->data['header'] = $this->global_infoModel->colToKey($this->global_infoModel->getItems(array(), array('type' => 'header')), 'name');
        $this->data['messager'] = $this->global_infoModel->colToKey($this->global_infoModel->getItems(array(), array('type' => 'messager')), 'name');
        
        $this->data['description'] = $this->config->meta_description;
        $this->data['keywords'] = $this->config->meta_keywords;
        $this->data['title'] = $this->config->title_name;
        $this->data['tag'] = $this->config->title_tag;
        
        $this->data['description_og'] = $this->config->meta_description_og;
        $this->data['title_og'] = $this->config->meta_title_og;
        $this->data['name_og'] = $this->config->meta_name_og;
        
        $this->data['css'] = $this->config->custom_css;
        
        $this->data['main_page'] = $this->config->main_page;
        
		return $this->load->view('common/header', $this->data);
	}
}
?>