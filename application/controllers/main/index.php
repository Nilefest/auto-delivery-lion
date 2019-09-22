<?php
class indexController extends Controller {
	public function index() {
        
        $this->load->model('global_info');
        $this->load->model('auto_catalog');
        $this->load->model('auto_type');
        
        $this->data['phones'] = $this->global_infoModel->colToKey($this->global_infoModel->getItems([], ['type' => 'global', 'name' => 'phone']), 'description');
        
        $auto_expected = [];
        $this->data['auto_expected'] = $this->auto_catalogModel->colToKey($this->auto_catalogModel->query("SELECT * FROM `auto_catalog` WHERE `date_sapply` > '" . date('Y-m-d') . "' ORDER BY `date_sapply` LIMIT 3"), 'id');
        if(count($this->data['auto_expected']) < 3)
            $auto_expected = $this->auto_catalogModel->colToKey($this->auto_catalogModel->query("SELECT * FROM `auto_catalog` WHERE `date_sapply` = '' LIMIT 3"), 'id');
        
        $this->data['auto_expected'] = array_merge($this->data['auto_expected'], $auto_expected);
        if(count($this->data['auto_expected']) < 3)
            $this->data['auto_expected'] = $this->auto_catalogModel->colToKey($this->auto_catalogModel->query("SELECT * FROM `auto_catalog` ORDER BY `date_sapply` LIMIT 3"), 'id');
        
        foreach($this->data['auto_expected'] as $key => $auto){
            $dir = APPLICATION_DIR . 'public/img/catalog/' . $auto['car_vin'];
            if(file_exists($dir)){
                $imgs_old = scandir($dir . '/old');
                if(isset($imgs_old[2])){
                    $this->data['auto_expected'][$key]['img'] = "/application/public/img/catalog/" . $auto['car_vin'] . "/old/" . $imgs_old[2];
                }
                else{
                    $this->data['auto_expected'][$key]['img'] = '/application/public/img/' . $this->config->noimg['catalog'];
                }
            }
            else{
                $this->data['auto_expected'][$key]['img'] = '/application/public/img/' . $this->config->noimg['catalog'];
            }
        }
        
        $this->data['auto_type'] = $this->auto_typeModel->getItems([], [], [], ['mark' => 'ASC']);
        
        $this->data['auto_restored'] = $this->global_infoModel->colToKey($this->global_infoModel->getItems([], ['type' => 'main', 'name' => 'auto_restored']), 'description');
        foreach($this->data['auto_restored'] as $key => $auto){
            $this->data['auto_restored'][$key] = $this->auto_catalogModel->getItems([],['car_vin' => $auto['value']])[0];
            $this->data['auto_restored'][$key]['link_img'] = explode(',', $this->data['auto_restored'][$key]['link_img'])[0];
        }
        
        $this->data['auto_lion'] = $this->global_infoModel->colToKey($this->global_infoModel->getItems([], ['type' => 'main', 'name' => 'auto_lion']), 'description');
        foreach($this->data['auto_lion'] as $key => $auto){
            $this->data['auto_lion'][$key] = $this->auto_catalogModel->getItems([],['car_vin' => $auto['value']])[0];
            $this->data['auto_lion'][$key]['link_img'] = explode(',', $this->data['auto_lion'][$key]['link_img'])[0];
        }
        
        $this->data['messager'] = $this->global_infoModel->colToKey($this->global_infoModel->getItems(array(), array('type' => 'messager')), 'name');
        
        $this->config->main_page = 1;
        $this->data['main_page'] = 1;
		$this->getChild(['common/header', 'common/footer']);
		return $this->load->view('main/index', $this->data);
	}
    
	public function develope() {
        
        $this->load->model('global_info');
        $this->data['phones'] = $this->global_infoModel->colToKey($this->global_infoModel->getItems([], ['name' => 'phone']), 'description');
        
        $this->config->title_name = 'Ведётся разработка. Auto delivery Lion';
		$this->getChild(['common/header', 'common/footer']);
		return $this->load->view('main/develope', $this->data);
	}
    
    public function test(){
        $this->load->model('global_info');
        $this->data['phones'] = $this->global_infoModel->colToKey($this->global_infoModel->getItems([], ['name' => 'phone']), 'description');
        
        $this->config->title_name = 'Ведётся разработка. Auto delivery Lion';
		$this->getChild(['common/header', 'common/footer']);
		return $this->load->view('main/develope', $this->data);
    }
    
    public function catalog_xls() {
        
        exit();
        
        $path_file = APPLICATION_DIR . 'public/files/catalog/auto.xlsx';
        $path_new_file = APPLICATION_DIR . 'public/files/catalog/auto_' . date('Y-m-d') .'.xlsx';
        
        if(!file_exists($path_file)) exit('File nofound');
        
        $this->load->model('auto_catalog');
        
        $this->load->library('excel');
        $excel = new excelLibrary();
        $catalog = $excel->readFileToArray($path_file);
        unset($catalog[0]);
        unset($catalog[1]);
        
        foreach($catalog as $key => $auto){
            if($auto[1] != ''){
                $this->auto_catalogModel->addItem(['car_mark' => $auto[1],
                                                    'car_year_issue' => $auto[2],
                                                    'car_color' => $auto[3],
                                                    'car_vin' => $auto[4],
                                                    'car_fuel' => $auto[5],
                                                    'car_mileage' => $auto[6],
                                                    'car_engine' => $auto[7],
                                                    'car_kpp' => $auto[8],
                                                    'car_drive_unit' => $auto[9],
                                                    'car_body' => $auto[10],
                                                    'cost_port' => $auto[11],
                                                    'cost_key' => $auto[12],
                                                    'date_sapply' => $auto[13],
                                                    'date_recovery' => $auto[14],
                                                    'date_sale' => $auto[15],
                                                    'link_lot' => $auto[16],
                                                    'link_img' => $auto[17],
                                                    'info_mileage_confirmed' => $auto[18],
                                                    'info_key' => $auto[19],
                                                    'info_location' => $auto[20],
                                                    'info_special' => $auto[21],
                                                    'info_damage' => $auto[22],
                                                    'info_desc_recovery' => $auto[23]]);
            }
            else
                unset($catalog[$key]);
        }

        copy($path_file, $path_new_file);
        unlink($path_file);
        exit('Export complete: ' . count($catalog));
    }
    
    public function calc_import() {
        //http://www.mdoffice.com.ua/pls/MDOffice/aMDOAvto.html?a_type_lico=0&a_type=3&a_old=0&a_year=2019&CountryCode=840&capacity=100&a_curr=840&Cost=1000

        // https://www.autocentre.ua/ua/avtopravo/zakonodatelstvo/rastamozhka-v-ukraine-po-novomu-umenshitsya-li-lgotnyj-aktsiz-blagodarya-zakonoproektu-8487-603827.html
        
        //if(!$script) exit();
        $type_engin = ['Электро', 'Бензин', 'Дизель'];

        $privat_json = json_decode(file_get_contents("https://api.privatbank.ua/p24api/pubinfo?json&exchange&coursid=5"), true);

        $eur = 29.5;
        $usd = 26.5;
        $usd = $privat_json[0]['sale'];
        $eur = $privat_json[1]['sale'];

        $type = ($this->request->get['type'] == '' ? 1 : $this->request->get['type']);
        $year = ($this->request->get['year'] == '' ? date() : $this->request->get['year']);
        $engin = ($this->request->get['engin'] == '' ? 0 : $this->request->get['engin']);
        $cost = ($this->request->get['cost'] == '' ? 0 : $this->request->get['cost']);

        $cost = $cost * $usd;

        if($type == 0){
            $k_import = 0;

            $k_akciz_year = 1;
            $k_akciz_engin = 1;
            $k_akciz_base = $eur * $engin * 1;

        }elseif($type == 1){
            $k_import = $cost * 0.1;

            $k_akciz_year = (date('Y') < $year + 3 ? 1 : date('Y') - $year - 1);
            $k_akciz_year = ($k_akciz_year > 15 ? 15 : $k_akciz_year);
            $k_akciz_engin = $engin / 1000;
            $k_akciz_base = $eur * ($engin <= 3000 ? 50 : 100);

        }else{
            $k_import = $cost * 0.1;

            $k_akciz_year = (date('Y') < $year + 3 ? 1 : date('Y') - $year - 1);
            $k_akciz_year = ($k_akciz_year > 15 ? 15 : $k_akciz_year);
            $k_akciz_engin = $engin / 1000;
            $k_akciz_base = $eur * ($engin <= 3000 ? 75 : 150);
        }
        $k_akciz = $k_akciz_year * $k_akciz_engin * $k_akciz_base;

        $k_nds = ($cost + $k_import + $k_akciz) * 0.2;

        $summ = $k_import + $k_akciz + $k_nds;

        return round($summ / $usd, 0);
    }
    
    public function search_auto(){
        
        $text = $this->request->post['text'];
        
        $text = strtoupper($text);
        
        $this->load->model('copart_auto');
        $this->load->model('auto_catalog');
        
        $sql_catalog_vin = "SELECT 'catalog_vin' AS type, `id` AS id, `car_vin` AS vin FROM `auto_catalog` WHERE `car_vin` LIKE '" . $text . "%' LIMIT 0,1";
        $sql_copart_vin = "SELECT 'auction_vin' AS type, `lot_id` AS id, `lot_vin` AS vin FROM `copart_auto` WHERE `lot_vin` LIKE '" . $text . "%' LIMIT 0,1";
        $sql_copart_id = "SELECT 'auction_id' AS type, `lot_id` AS id, `lot_vin` AS vin FROM `copart_auto` WHERE `lot_id` LIKE '" . $text . "%' LIMIT 0,1";
        
        $catalog_vin = [];
        $copart_vin = [];
        $copart_id = [];
        
        if (preg_match('/[A-Za-z].*/', $text) or strlen($text) > 15){
            $catalog_vin =  $this->auto_catalogModel->query($sql_catalog_vin)[0];
            $copart_vin =  $this->copart_autoModel->query($sql_copart_vin)[0];
        }
        else{
            $copart_id =  $this->copart_autoModel->query($sql_copart_id)[0];            
        }
        
        if(!empty($catalog_vin))
            return json_encode($catalog_vin);
        if(!empty($copart_vin))
            return json_encode($copart_vin);
        if(!empty($copart_id))
            return json_encode($copart_id);
        return json_encode(['type' => 'no']);
    }
}
?>