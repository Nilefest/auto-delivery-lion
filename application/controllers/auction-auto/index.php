<?php
class indexController extends Controller {
	public function index($lot_id = false) {
        //$this->response->redirect('/develope');
        if(!$lot_id) $this->response->redirect('/auction');
        
        $this->load->model('copart_auto');
        $this->load->model('global_info');
        
        if(isset($this->request->post['ans_sub'])) {
            $text = "На сайте http://adlion.info пользователь оставил вопрос:";
            $text .= "\n Страница лота: http://adlion.info/auction-auto/" . $this->request->post['ans_auto_id'];
            $text .= "\n Имя: " . $this->request->post['ans_name'];
            $text .= "\n Телефон: " . $this->request->post['ans_phone'];
            $text .= "\n Сообщение: \n" . $this->request->post['ans_message'];
            //$url = "https://nlf.name/adlion_bot/adlion_bot.php?bot_suport=" . date('Ymd') . "-nlf&bot_suport_chat_id=365862135&bot_support_code=" . $bot_code . "&bot_support_mess=" . urlencode($text);
            $this->sendTgBot($text);
            $this->sendTgBot($text, '426872612');
            //$this->pre($resp);
        }
        if(isset($this->request->post['rate_sub'])) {
            $text = "На сайте http://adlion.info пользователь хочет предложить свою ставку:";
            $text .= "\n Страница лота: http://adlion.info/auction-auto/" . $this->request->post['rate_auto_id'];
            $text .= "\n Имя: " . $this->request->post['rate_name'];
            $text .= "\n Телефон: " . $this->request->post['rate_phone'];
            $text .= "\n Новая ставка: " . $this->request->post['rate_usd'] . "$";
            //$url = "https://nlf.name/adlion_bot/adlion_bot.php?bot_suport=" . date('Ymd') . "-nlf&bot_suport_chat_id=365862135&bot_support_code=" . $bot_code . "&bot_support_mess=" . urlencode($text);
            $this->sendTgBot($text);
            $this->sendTgBot($text, '426872612');
            //$this->pre($resp);
        }
        if(isset($this->request->post['sale_vin_sub'])) {
            $text = "На сайте http://adlion.info пользователь заказал подробный VIN отчёт:";
            $text .= "\n Страница лота: http://adlion.info/auction-auto/" . $this->request->post['sale_auto_id'];
            $text .= "\n Имя: " . $this->request->post['sale_vin_name'];
            $text .= "\n Телефон: " . $this->request->post['sale_vin_phone'];
            $text .= "\n VIN авто: " . $this->request->post['sale_vin_vin'];
            //$url = "https://nlf.name/adlion_bot/adlion_bot.php?bot_suport=" . date('Ymd') . "-nlf&bot_suport_chat_id=365862135&bot_support_code=" . $bot_code . "&bot_support_mess=" . urlencode($text);
            $this->sendTgBot($text);
            $this->sendTgBot($text, '426872612');
            //$this->pre($resp);
        }
        
        $this->data['copart_auto'] = $this->copart_autoModel->getItems([], ['lot_id' => $lot_id])[0];
        $this->data['phones'] = $this->global_infoModel->colToKey($this->global_infoModel->getItems(array(), array('type' => 'global', 'name' => 'phone')), 'description');
        
        $images = explode('"', $this->data['copart_auto']['links_images']);
        $rem = 0;
        foreach($images as $key => $img){
            if($img == 'THUMBS') $rem = 1;
            if($rem) unset($images[$key]);
            if(strripos($img, 'http') === false) unset($images[$key]);
        }
        usort($images);
        $this->data['copart_auto']['links_images'] = $images;
        
        if(empty($this->data['copart_auto']['links_images'])) $this->data['copart_auto']['links_images'][0] = '/application/public/img/' . $this->config->noimg['auction'];
        
        // link_to_copart
        
        $this->config->title_name = $this->data['copart_auto']['lot_car_brand'] . ' ' . $this->data['copart_auto']['lot_car_model'] .  ' c аукциона Copart';
        $this->config->meta_title_og = $this->data['copart_auto']['lot_car_brand'] . ' ' . $this->data['copart_auto']['lot_car_model'] .  ' c аукциона Copart на официальном сайте ADLion';
		$this->getChild(array('common/header', 'common/footer'));
		return $this->load->view('auction_auto/index', $this->data);
	}
    
    private function sendTgBot($text, $chat_id = '365862135'){
        $this->load->model('tg_bot_codes');
        
        $bot_code = date('Ymd') . rand(1000, 9999);
        $this->tg_bot_codesModel->query("INSERT INTO `tg_bot_codes` (`code`) VALUES (MD5('" . $bot_code . "'))");
        
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => 'https://nlf.name/adlion_bot/adlion_bot.php',
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => [
                bot_suport_chat_id => $chat_id,
                bot_suport => date('Ymd') . "-nlf",
                bot_support_code => $bot_code,
                bot_support_mess => $text
                
            ]
        ]);
        $resp = curl_exec($curl);
        curl_close($curl);
    }
}
?>