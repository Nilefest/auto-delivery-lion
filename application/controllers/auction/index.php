<?php
class indexController extends Controller {
	public function index($page = 1) {
        //$this->response->redirect('/develope');
        
        $this->data['noimg_auction'] = $this->config->noimg['auction'];
        
        $this->load->model('auto_type');
        $this->load->model('copart_auto');
        
        $this->data['auto_type'] = $this->auto_typeModel->getItems([], [], [], ['mark' => 'ASC']);
        
        $sql = "FROM `copart_auto` WHERE `sale_date` >= '" . date('U') . "'";
        if(isset($this->request->get['sub_search_auction'])){
            
            if($this->request->get['sub_search_auction'] != '1') $page = 1;
            
            $this->data['get_str'] = '?mark=' . $this->request->get['mark'] . '&model=' . $this->request->get['model'] . '&year-min=' . $this->request->get['year-min'] . '&year-max=' . $this->request->get['year-max'] . '&sub_search_auction=1';
            
            $sql .= " AND `lot_car_brand` LIKE '%" . $this->request->get['mark'] . "%' AND `lot_car_year` >= '" . $this->request->get['year-min'] . "' AND `lot_car_year` <= '" . $this->request->get['year-max'] . "'";
            if($this->request->get['model'] != 'all')
                $sql .= " AND `lot_car_model` LIKE '%" . $this->request->get['model'] . "%'";
        }
        $this->data['copart_auto'] = $this->copart_autoModel->query("SELECT * " . $sql . " ORDER BY `sale_date` LIMIT " . (($page - 1) * 24) . ", 24");
        
        foreach($this->data['copart_auto'] as $key_auto => $auto){
            $copart_auto_img = explode('"', $auto['links_images']);
            $this->data['copart_auto'][$key_auto]['links_images'] = [];
            foreach($copart_auto_img as $img) 
                if(strpos($img, 'http') > -1){
                    $this->data['copart_auto'][$key_auto]['links_images'] = $img;
                    break;
                }
        }
        
        $this->data['this_page'] = $page;
        $this->data['page_total'] = round(($this->copart_autoModel->query("SELECT COUNT(*) AS 'count' " . $sql)[0]['count'] + 12) / 24, 0);
        if($this->data['page_total'] == 0) $this->data['page_total'] = 1;
        
        $this->config->title_name = 'Аукцион на сайте Auto delivery Lion';
		$this->getChild(array('common/header', 'common/footer'));
		return $this->load->view('auction/index', $this->data);
	}
}
?>