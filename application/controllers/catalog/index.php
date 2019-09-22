<?php
class indexController extends Controller {
	public function index($page = 1) {
        
        $this->load->model('auto_catalog');
        
        $top = $this->auto_catalogModel->query("SELECT * FROM `auto_catalog` WHERE `car_is_top` = '1' ORDER BY date_sapply");
        $fst = $this->auto_catalogModel->query("SELECT * FROM `auto_catalog` WHERE car_mark != '' AND date_sapply != '' AND date_sale = '' AND `car_is_top` != '1' ORDER BY date_sapply");
        $scd = $this->auto_catalogModel->query("SELECT * FROM `auto_catalog` WHERE car_mark != '' AND date_sapply = '' AND date_sale = '' AND `car_is_top` != '1' ORDER BY date_sapply");
        $trd = $this->auto_catalogModel->query("SELECT * FROM `auto_catalog` WHERE car_mark != '' AND date_sale != '' AND `car_is_top` != '1' ORDER BY date_sapply");
        
        $this->data['auto_catalog'] = array_merge($top, $fst, $scd, $trd);
        $this->data['auto_catalog'] = array_slice($this->data['auto_catalog'], ($page - 1) * 12, 12);
        
        foreach($this->data['auto_catalog'] as $key => $auto){
            $dir = APPLICATION_DIR . 'public/img/catalog/' . $auto['car_vin'];
            if(file_exists($dir)){
                $imgs_old = scandir($dir . '/old');
                if(isset($imgs_old[2])){
                    $this->data['auto_catalog'][$key]['img'] = "/application/public/img/catalog/" . $auto['car_vin'] . "/old/" . $imgs_old[2];
                }
                else{
                    $this->data['auto_catalog'][$key]['img'] = '/application/public/img/' . $this->config->noimg['catalog'];
                }
            }
            else{
                $this->data['auto_catalog'][$key]['img'] = '/application/public/img/' . $this->config->noimg['catalog'];
            }
        }
        
        $this->data['this_page'] = $page;
        $this->data['page_total'] = round(($this->auto_catalogModel->getCount() + 6) / 12, 0);
        if($this->data['page_total'] == 0) $this->data['page_total'] = 1;
        
        //$this->pre($this->data['page_total']);
        
        $this->config->title_name = 'Каталог автомобилей Auto delivery Lion';
		$this->getChild(array('common/header', 'common/footer'));
		return $this->load->view('catalog/index', $this->data);
	}
}
?>