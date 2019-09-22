<?php
class indexController extends Controller {
	public function index() {
        
        if(!$user = $this->user->isLogin()) $this->response->redirect('/admin/login?code=login');
        if($user['lvl'] != '0' && $user['lvl'] != '1') $this->response->redirect('/admin/login?code=private');
        
        $this->load->model('global_info');
        $this->load->model('users');
        
        if(isset($this->request->post['sub_save_pass'])){
            if($user['password'] == $this->request->post['old_pass'] && $this->request->post['password_1'] == $this->request->post['password_2']){
                $this->usersModel->updateItems(['password' => $this->request->post['password_1']], ['id' => $user['id']]);
            }
            $this->response->redirect('/admin');
        }
        
        $this->data['global_header'] = $this->global_infoModel->colToKey($this->global_infoModel->getItems(array(), array('type' => 'header')), 'name');
        $this->data['global_messager'] = $this->global_infoModel->colToKey($this->global_infoModel->getItems(array(), array('type' => 'messager')), 'name');
        $this->data['global_footer'] = $this->global_infoModel->colToKey($this->global_infoModel->getItems(array(), array('type' => 'footer')), 'name');
        
        $this->config->title_name = 'Кабинет администратора. Auto delivery Lion';
		$this->getChild(['common/header', 'common/footer']);
		return $this->load->view('admin/index', $this->data);
	}
    
	public function edit() {
        
        if(!$user = $this->user->isLogin()) $this->response->redirect('/admin/login?code=login');
        if($user['lvl'] != '0' && $user['lvl'] != '1') $this->response->redirect('/admin/login?code=private');
        
        $this->load->model('global_info');
        $this->load->model('users');
        
        if(isset($this->request->post['sub_save_pass'])){
            if($user['password'] == $this->request->post['old_pass'] && $this->request->post['password_1'] == $this->request->post['password_2']){
                $this->usersModel->updateItems(['password' => $this->request->post['password_1']], ['id' => $user['id']]);
            }
            $this->response->redirect('/admin');
        }
        if(isset($this->request->post['sub_save_global'])){
            //$this->pre($this->request->post);
            
            $this->global_infoModel->updateItems(['value' => $this->request->post['header_addr']], ['type' => 'header', 'name' => 'addr']);
            $this->global_infoModel->updateItems(['value' => $this->request->post['header_phone_1']], ['type' => 'header', 'name' => 'phone_1']);
            $this->global_infoModel->updateItems(['value' => $this->request->post['header_phone_2']], ['type' => 'header', 'name' => 'phone_2']);
            $this->global_infoModel->updateItems(['value' => $this->request->post['header_phone_3']], ['type' => 'header', 'name' => 'phone_3']);
            
            $this->global_infoModel->updateItems(['value' => $this->request->post['messager_telegram']], ['type' => 'messager', 'name' => 'telegram']);
            $this->global_infoModel->updateItems(['value' => $this->request->post['messager_viber']], ['type' => 'messager', 'name' => 'viber']);
            $this->global_infoModel->updateItems(['value' => $this->request->post['messager_facebook']], ['type' => 'messager', 'name' => 'facebook']);
            $this->global_infoModel->updateItems(['value' => $this->request->post['messager_whatsapp']], ['type' => 'messager', 'name' => 'whatsapp']);
            $this->global_infoModel->updateItems(['value' => $this->request->post['messager_phone_0']], ['type' => 'messager', 'name' => 'phone_0']);
            
            $this->global_infoModel->updateItems(['value' => $this->request->post['footer_addr']], ['type' => 'footer', 'name' => 'addr']);
            $this->global_infoModel->updateItems(['value' => $this->request->post['footer_phone_1']], ['type' => 'footer', 'name' => 'phone_1']);
            $this->global_infoModel->updateItems(['value' => $this->request->post['footer_phone_2']], ['type' => 'footer', 'name' => 'phone_2']);
            $this->global_infoModel->updateItems(['value' => $this->request->post['footer_phone_3']], ['type' => 'footer', 'name' => 'phone_3']);
            $this->global_infoModel->updateItems(['value' => $this->request->post['footer_about']], ['type' => 'footer', 'name' => 'about']);
            $this->global_infoModel->updateItems(['value' => $this->request->post['footer_mail']], ['type' => 'footer', 'name' => 'mail']);
            $this->global_infoModel->updateItems(['value' => $this->request->post['footer_schedule']], ['type' => 'footer', 'name' => 'schedule']);/**/
        }
        
        $this->data['global_header'] = $this->global_infoModel->colToKey($this->global_infoModel->getItems(array(), array('type' => 'header')), 'name');
        $this->data['global_messager'] = $this->global_infoModel->colToKey($this->global_infoModel->getItems(array(), array('type' => 'messager')), 'name');
        $this->data['global_footer'] = $this->global_infoModel->colToKey($this->global_infoModel->getItems(array(), array('type' => 'footer')), 'name');
        
        $this->data['global_edit'] = 1;
        
        $this->config->title_name = 'Кабинет администратора. Auto delivery Lion';
		$this->getChild(['common/header', 'common/footer']);
		return $this->load->view('admin/index', $this->data);
	}
    
	public function login() {
        if(isset($this->request->post['sub_login'])){
            $this->user->login($this->request->post['login'], $this->request->post['password']);
        }
        $user = $this->user->isLogin();
        $this->pre($user);
        if(!empty($user)) $this->response->redirect('/admin');
        
        $this->config->title_name = 'Войти в кабинет. Auto delivery Lion';
		$this->getChild(['common/header', 'common/footer']);
		return $this->load->view('admin/login', $this->data);
	}
}
?>
