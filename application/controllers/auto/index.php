<?php
class indexController extends Controller {
	public function index($id = false) {
        
        if(!$id) $this->response->redirect('/catalog');
        
        $user = $this->user->isLogin();
        if($user['lvl'] == '0' || $user['lvl'] == '1') $this->data['admin'] = 1;
        
        
        $this->load->model('auto_catalog');
        $this->load->model('global_info');
        
        $this->data['auto'] = $this->auto_catalogModel->getItems([], ['id' => $id])[0];
        $this->data['phones'] = $this->global_infoModel->colToKey($this->global_infoModel->getItems(array(), array('type' => 'global', 'name' => 'phone')), 'description');

        $this->data['auto']['link_img'] = scandir(APPLICATION_DIR . 'public/img/catalog/' . $this->data['auto']['car_vin'] . '/old');
        unset($this->data['auto']['link_img'][0]);
        unset($this->data['auto']['link_img'][1]);
        
        if(count($this->data['auto']['link_img']) < 1) $this->data['auto']['link_img'][0] = '/application/public/img/' . $this->config->noimg['catalog'];
        else{
            foreach($this->data['auto']['link_img'] as $key => $img_link){
                $this->data['auto']['link_img'][$key] = '/application/public/img/catalog/' . $this->data['auto']['car_vin'] . '/old/' . $img_link;
            }
        }
        $this->data['auto']['link_img'] = array_values($this->data['auto']['link_img']);
        
        $this->data['auto']['link_img_lion'] = array();
        if(empty($this->data['auto']['link_img_lion'])) $this->data['auto']['link_img_lion'][0] = '/application/public/img/' . $this->config->noimg['repair'];
        
        if(file_exists(APPLICATION_DIR . 'public/img/auto_lion/' . $this->data['auto']['car_vin'])){
            $imgs_lion = scandir(APPLICATION_DIR . 'public/img/auto_lion/' . $this->data['auto']['car_vin']);
            unset($imgs_lion[0]);
            unset($imgs_lion[1]);
            $this->data['auto']['link_img_lion'] = array_merge([], $imgs_lion);
        }
        
        $this->config->title_name = $this->data['auto']['car_mark'] . ' ' . $this->data['auto']['car_model'] .  ' в Auto delivery Lion';
		$this->getChild(array('common/header', 'common/footer'));
		return $this->load->view('auto/index', $this->data);
	}
    
    public function edit($id = false){
        
        if(!$user = $this->user->isLogin()) $this->response->redirect('/admin/login?code=login');
        if($user['lvl'] != '0' && $user['lvl'] != '1') $this->response->redirect('/admin/login?code=private');/**/
        
        $this->load->model('auto_catalog');
        $this->load->model('global_info');
        
        
        if(isset($this->request->post['rem_auto']))
        {
            $this->auto_catalogModel->deleteItems(['id' => $this->request->post['catalog_id']]);
            $this->response->redirect('/catalog');
        }
        elseif(isset($this->request->post['add_auto']))
        {
            $this->auto_catalogModel->addItem(['car_mark' => $this->request->post['car_mark'],
                                               'car_is_top' => (isset($this->request->post['car_is_top']) ? '1' : '0'),
                                               'car_model' => $this->request->post['car_model'],
                                               'date_sapply' => $this->request->post['date_sapply'],
                                               'date_sale' => $this->request->post['date_sale'],
                                               'date_recovery' => $this->request->post['date_recovery'],
                                               'cost_port' => $this->request->post['cost_port'],
                                               'cost_key' => $this->request->post['cost_key'],
                                               'car_fuel' => $this->request->post['car_fuel'],
                                               'car_mileage' => $this->request->post['car_mileage'],
                                               'car_engine' => $this->request->post['car_engine'],
                                               'car_year_issue' => $this->request->post['car_year_issue'],
                                               'car_kpp' => $this->request->post['car_kpp'],
                                               'car_drive_unit' => $this->request->post['car_drive_unit'],
                                               'car_color' => $this->request->post['car_color'],
                                               'car_body' => $this->request->post['car_body'],
                                               'car_vin' => $this->request->post['car_vin'],
                                               'info_damage' => $this->request->post['info_damage'],
                                               'info_special' => $this->request->post['info_special'],
                                               'info_mileage_confirmed' => $this->request->post['info_mileage_confirmed'],
                                               'info_key' => $this->request->post['info_key'],
                                               'link_lot' => $this->request->post['link_lot'],
                                               'info_other' => $this->request->post['info_other'],
                                               'info_desc_recovery' => $this->request->post['info_desc_recovery']]);
            $max_id = $this->auto_catalogModel->getMax();
            $this->response->redirect('/auto/' . $max_id);
        }
        elseif(isset($this->request->post['save_auto']))
        {
            $this->auto_catalogModel->updateItems(['car_mark' => $this->request->post['car_mark'],
                                                   'car_is_top' => (isset($this->request->post['car_is_top']) ? '1' : '0'),
                                                   'car_model' => $this->request->post['car_model'],
                                                   'date_sapply' => $this->request->post['date_sapply'],
                                                   'date_sale' => $this->request->post['date_sale'],
                                                   'date_recovery' => $this->request->post['date_recovery'],
                                                   'cost_port' => $this->request->post['cost_port'],
                                                   'cost_key' => $this->request->post['cost_key'],
                                                   'car_fuel' => $this->request->post['car_fuel'],
                                                   'car_mileage' => $this->request->post['car_mileage'],
                                                   'car_engine' => $this->request->post['car_engine'],
                                                   'car_year_issue' => $this->request->post['car_year_issue'],
                                                   'car_kpp' => $this->request->post['car_kpp'],
                                                   'car_drive_unit' => $this->request->post['car_drive_unit'],
                                                   'car_color' => $this->request->post['car_color'],
                                                   'car_body' => $this->request->post['car_body'],
                                                   'car_vin' => $this->request->post['car_vin'],
                                                   'info_damage' => $this->request->post['info_damage'],
                                                   'info_special' => $this->request->post['info_special'],
                                                   'info_mileage_confirmed' => $this->request->post['info_mileage_confirmed'],
                                                   'info_key' => $this->request->post['info_key'],
                                                   'link_lot' => $this->request->post['link_lot'],
                                                   'info_other' => $this->request->post['info_other'],
                                                   'info_desc_recovery' => $this->request->post['info_desc_recovery']], ['id' => $this->request->post['catalog_id']]);
            
        }
        elseif(isset($this->request->post['del'])){
            unlink(APPLICATION_DIR . str_replace('/application/', '', $this->request->post['del']));
            
            if($this->request->post['vin'] != ''){
                $dir = APPLICATION_DIR . 'public/img/catalog/' . $this->request->post['vin'];
                
                $my_images = scandir($dir . '/' . $this->request->post['type']);
                unset($my_images[0]);
                unset($my_images[1]);
                foreach($my_images as $key => $img_this){
                    $my_images[$key] = '/application/public/img/catalog/' . $this->request->post['vin'] . '/' . $this->request->post['type'] . '/' . $img_this;
                }
                $my_images = array_reverse($my_images);
                $my_images = json_encode($my_images);
                echo $my_images;
            }
            else{
                echo 'novin';
            }
            exit();
        }
        elseif(!empty($this->request->files)){
            
            if($this->request->post['vin'] != ''){
                $dir = APPLICATION_DIR . 'public/img/catalog/' . $this->request->post['vin'];
                if(!file_exists($dir)){
                    mkdir($dir);
                    mkdir($dir . '/old');
                    mkdir($dir . '/new');
                }
                
                $n_file = 1;
                
                foreach($this->request->files['images']['tmp_name'] as $tmp_name){
                    $uploadfile = $dir . '/' . $this->request->post['type'] . '/' . time() . '.png';
                    move_uploaded_file($tmp_name, $uploadfile);
                }
                $my_images = scandir($dir . '/' . $this->request->post['type']);
                unset($my_images[0]);
                unset($my_images[1]);
                foreach($my_images as $key => $img_this){
                    $my_images[$key] = '/application/public/img/catalog/' . $this->request->post['vin'] . '/' . $this->request->post['type'] . '/' . $img_this;
                }
                $my_images = array_reverse($my_images);
                $my_images = json_encode($my_images);
                echo $my_images;
            }
            else{
                echo 'novin';
            }
            exit();
        }
        
        /*
        // Зкачать картинки с аукциона по БД
        $catalog =  $this->auto_catalogModel->getItems();
        foreach($catalog as $auto){
            $dir = APPLICATION_DIR . 'public/img/catalog/' . $auto['car_vin'];
            if(!file_exists($dir)){
                mkdir($dir);
                mkdir($dir . '/old');
                mkdir($dir . '/new');
            }
            $auto['link_img'] = explode(',', $auto['link_img']);
            $n_img = 0;
            if((count(scandir($dir . '/old')) - 2) != count($auto['link_img'])){
                foreach (glob($dir) as $file) {
                    unlink($file);
                }
                foreach($auto['link_img'] as $url){
                    if($n_img == count($auto['link_img']) - 2){
                        break;
                    }
                    $path = $dir . '/old/' . ($n_img++) . '.png';
                    file_put_contents($path, file_get_contents($url));
                }
            }
        }/**/
        
        $this->data['auto'] = $this->auto_catalogModel->getItems([], ['id' => $id])[0];
        $this->data['phones'] = $this->global_infoModel->colToKey($this->global_infoModel->getItems(array(), array('type' => 'global', 'name' => 'phone')), 'description');
        
        $this->data['auto']['link_img'] = explode(',', $this->data['auto']['link_img']);
        
        // Get OLD Photos
        $this->data['auto']['link_img'] = scandir(APPLICATION_DIR . 'public/img/catalog/' . $this->data['auto']['car_vin'] . '/old');
        unset($this->data['auto']['link_img'][0]);
        unset($this->data['auto']['link_img'][1]);
        
        if(count($this->data['auto']['link_img']) < 1) $this->data['auto']['link_img'][0] = '/application/public/img/' . $this->config->noimg['catalog'];
        else{
            foreach($this->data['auto']['link_img'] as $key => $img_link){
                $this->data['auto']['link_img'][$key] = '/application/public/img/catalog/' . $this->data['auto']['car_vin'] . '/old/' . $img_link;
            }
        }
        $this->data['auto']['link_img'] = array_values($this->data['auto']['link_img']);
        
        // Get NEW Photos
        $this->data['auto']['link_img_lion'] = scandir(APPLICATION_DIR . 'public/img/catalog/' . $this->data['auto']['car_vin'] . '/new');
        unset($this->data['auto']['link_img_lion'][0]);
        unset($this->data['auto']['link_img_lion'][1]);
        
        if(count($this->data['auto']['link_img_lion']) < 1) $this->data['auto']['link_img_lion'][0] = '/application/public/img/' . $this->config->noimg['repair'];
        else{
            foreach($this->data['auto']['link_img_lion'] as $key => $img_link){
                $this->data['auto']['link_img_lion'][$key] = '/application/public/img/catalog/' . $this->data['auto']['car_vin'] . '/new/' . $img_link;
            }
        }
        $this->data['auto']['link_img_lion'] = array_values($this->data['auto']['link_img_lion']);

        
        $this->config->title_name = $this->data['auto']['car_mark'] . ' ' . $this->data['auto']['car_model'] .  ' в Auto delivery Lion';
		$this->getChild(array('common/header', 'common/footer'));
		return $this->load->view('auto/edit', $this->data);
    }
}
?>