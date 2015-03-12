<?php
 
class Admin extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('news_model');
		$this->load->helper('url');
		$this->load->library('session');  
        $this->load->library('encrypt');
	}
	
	public function index(){
  
		//$url_encrypt = $this->uri->ruri_string();
        //$url_encrypt = substr($url_encrypt,strlen("/cim/index.php/admin/index/"));
		$url_encrypt = $_SERVER['REQUEST_URI'];
        $url_encrypt = substr($url_encrypt,strlen("/cim/index.php/admin/"));
  
        if (NULL != $url_encrypt){
        
            //$url_decrypt = $this->encrypt->decode($url_encrypt);
            $url_decrypt = $url_encrypt;
            $segment = explode("/",$url_decrypt);
            
            switch ($segment[0]){
                case "setslist":
                    $this->setslist();
                    return;
                    break;
                case "basicinfo":
                    $this->basicinfo($segment[1]);
                    return;
                    break;
                case "realtimeinfo":
                    $this->realtimeinfo($segment[1]);
                    return;
                    break;
                case "historyinfo":
                    $this->historyinfo($segment[1]);
                    return;
                    break;
                case "infoset":
                    $this->infoset();
                    return;
                    break;
                case "userset":
                    $this->userset();
                    return;
                    break;
                default:
                    break;
            }
        }
        
		$data['allEqp']= $this->news_model->get_allEqp();
		$data['onlineEqp']= $this->news_model->get_allEqp_online();
		$data['allAlarm']= $this->news_model->get_allAlarm_new();
		$data['allMaintain']= $this->news_model->get_allMaintain_new();
		
		$data['alleqpNum'] = count($data['allEqp']);
		$data['onlineeqpNum'] = count($data['onlineEqp']);
		$data['alarmNum'] = count($data['allAlarm']);
		$data['maintainNum'] = count($data['allMaintain']);
		
        
        $data['sysb_encrypt'] = 'setslist';//$this->encrypt->encode('setslist');
        $data['dtsb_encrypt'] = 'basicinfo/5001';//$this->encrypt->encode('basicinfo/5001');
        $data['ssxx_encrypt'] = 'realtimeinfo/5001';//$this->encrypt->encode('realtimeinfo/5001');
        $data['lsxx_encrypt'] = 'historyinfo/5001';//$this->encrypt->encode('historyinfo/5001');
        $data['cssz_encrypt'] = 'infoset';//$this->encrypt->encode('infoset');
        $data['zhsz_encrypt'] = 'userset';//$this->encrypt->encode('userset');

		$this->load->view('templates/header');
		$this->load->view('admin/index',$data);
		$this->load->view('templates/footer');
	}
	public function setslist(){
		$data['allEqp']= $this->news_model->get_allEqp();
		$data['allWarning']= $this->news_model->get_allAlarm();
		$data['allMaintain']= $this->news_model->get_allMaintain();

        $data['sysb_encrypt'] = 'setslist';//$this->encrypt->encode('setslist');
        $data['dtsb_encrypt'] = 'basicinfo/5001';//$this->encrypt->encode('basicinfo/5001');
        $data['ssxx_encrypt'] = 'realtimeinfo/5001';//$this->encrypt->encode('realtimeinfo/5001');
        $data['lsxx_encrypt'] = 'historyinfo/5001';//$this->encrypt->encode('historyinfo/5001');
        $data['cssz_encrypt'] = 'infoset';//$this->encrypt->encode('infoset');
        $data['zhsz_encrypt'] = 'userset';//$this->encrypt->encode('userset');
		//$data_all_eqp = $this->news_model->get_allEqp();
		for($i = 0; $i < count($data['allEqp']); $i++){
			//$data['allEqp'][$i]['href'] = $data_all_eqp[$i]['cv_id'];
			$data['allEqp'][$i]['href'] = $this->encrypt->encode('basicinfo/'.$data['allEqp'][$i]['cv_id']);
			$data['allEqp'][$i]['isOnLine'] = 1;
		}
        
		$this->load->view('templates/header',$data);
		$this->load->view('admin/setslist',$data);
		$this->load->view('templates/footer');
	}
	public function basicinfo($cv_id){
	
		$data['historyinfo'] = $this->news_model->get_historyinfo($cv_id);
		
		$data['news_item'] = $this->news_model->get_news($cv_id);
		$data['cv_info'] = $this->news_model->get_allEqp($cv_id);
		$data['maintain'] = $this->news_model->get_allMaintain($cv_id);
        $data['sysb_encrypt'] = 'setslist';//$this->encrypt->encode('setslist');
        $data['dtsb_encrypt'] = 'basicinfo/5001';//$this->encrypt->encode('basicinfo/5001');
        $data['ssxx_encrypt'] = 'realtimeinfo/5001';//$this->encrypt->encode('realtimeinfo/5001');
        $data['lsxx_encrypt'] = 'historyinfo/5001';//$this->encrypt->encode('historyinfo/5001');
        $data['cssz_encrypt'] = 'infoset';//$this->encrypt->encode('infoset');
        $data['zhsz_encrypt'] = 'userset';//$this->encrypt->encode('userset');
		$data_all_eqp = $this->news_model->get_allEqp();
		for($i = 0; $i < count($data_all_eqp); $i++){
			$data['allEqp'][$i]['num'] = $data_all_eqp[$i]['cv_id'];
			$data['allEqp'][$i]['href'] = $this->encrypt->encode('basicinfo/'.$data_all_eqp[$i]['cv_id']);
		}
		if (empty($data['news_item']))
		{
			show_404();
		}

		$data['cv_id'] = $data['news_item']['cv_id'];
			
		$temp = floor($data['news_item']['GPS_lat']/100);
		$data['news_item']['GPS_lat'] = $temp + ($data['news_item']['GPS_lat'] - $temp*100)/60;
		$data['news_item']['GPS_lat'] = round($data['news_item']['GPS_lat'] ,4);
		
		$temp = floor($data['news_item']['GPS_long']/100);
		$data['news_item']['GPS_long'] = $temp + ($data['news_item']['GPS_long'] - $temp*100)/60;
		$data['news_item']['GPS_long'] = round($data['news_item']['GPS_long'] ,4);

		$this->load->view('templates/header', $data);
		$this->load->view('admin/basicinfo', $data);
		$this->load->view('templates/footer');
	}
	public function realtimeinfo($cv_id){
        
		$data = $this->news_model->isonline($cv_id);
    
        $data['sysb_encrypt'] = 'setslist';//$this->encrypt->encode('setslist');
        $data['dtsb_encrypt'] = 'basicinfo/5001';//$this->encrypt->encode('basicinfo/5001');
        $data['ssxx_encrypt'] = 'realtimeinfo/5001';//$this->encrypt->encode('realtimeinfo/5001');
        $data['lsxx_encrypt'] = 'historyinfo/5001';//$this->encrypt->encode('historyinfo/5001');
        $data['cssz_encrypt'] = 'infoset';//$this->encrypt->encode('infoset');
        $data['zhsz_encrypt'] = 'userset';//$this->encrypt->encode('userset');
		
		if(0 ==  $data[0]['isOnLine']){
			$data['text'][0]['type'] = "设备当前不在线";
			$data['text'][0]['color'] = "rgb(158,0,0)";
			$data['text'][0]['detail'] = "当前设备不在线";
			$data['text'][0]['date'] = date('Y-m-d H:i:s');
			
			$data['cv_id'] = $cv_id;
			$data_online_eqp = $this->news_model->get_allEqp_online();
			for($i = 0; $i < count($data_online_eqp); $i++){
				$data['onlineEqp'][$i]['num'] = $data_online_eqp[$i]['cv_id'];
				$data['onlineEqp'][$i]['href'] = 'realtimeinfo/'.$data_online_eqp[$i]['cv_id'];//$this->encrypt->encode('realtimeinfo/'.$data_online_eqp[$i]['cv_id']);
			}
			
			$this->load->view('templates/header', $data);
			$this->load->view('admin/realtimeselect', $data);
			$this->load->view('templates/footer');
			return;
		}
		$data_warning = $this->news_model->get_allAlarm($cv_id);
		$data_maintain = $this->news_model->get_allMaintain($cv_id);
		$data_online_eqp = $this->news_model->get_allEqp_online();
		for($i = 0; $i < count($data_online_eqp); $i++){
			$data['onlineEqp'][$i]['num'] = $data_online_eqp[$i]['cv_id'];
			$data['onlineEqp'][$i]['href'] = 'realtimeinfo/'.$data_online_eqp[$i]['cv_id'];//$this->encrypt->encode('realtimeinfo/'.$data_online_eqp[$i]['cv_id']);
		}
				
		$num1 = count($data_warning);
		$num2 = count($data_maintain);
		
		for($i = 0; $i < $num1; $i++){
			$data['text'][$i]['type'] = "报警信息";
			$data['text'][$i]['color'] = "rgb(158,0,0)";
			$data['text'][$i]['detail'] = $data_warning[$i]['alarm_detail'];
			$data['text'][$i]['date'] = $data_warning[$i]['alarm_date'];
		}
		
		for($i = 0; $i < count($data_maintain); $i++){
			$data['text'][$num1 + $i]['type'] = "保养信息";
			$data['text'][$num1 + $i]['color'] = "rgb(255,102,0)";
			$data['text'][$num1 + $i]['detail'] = $data_maintain[$i]['maintain_detail'];
			$data['text'][$num1 + $i]['date'] = $data_maintain[$i]['maintain_date'];
		}
		
		if($num1 + $num2 > 0){
			foreach ($data['text'] as $key=>$value){
				$type[$key] = $value['type'];
				$detail[$key] = $value['detail'];
				$date[$key] = $value['date'];
			}
			 
			array_multisort($date,SORT_STRING,SORT_DESC,$type,SORT_STRING,SORT_DESC,$data['text']);
		}else{
			$data['text'][0]['type'] = "无信息";
			$data['text'][0]['color'] = "rgb(158,0,0)";
			$data['text'][0]['detail'] = "当前设备无相关信息，若产生报警及保养相关信息将会在此处显示";
			$data['text'][0]['date'] = date('Y-m-d H:i:s');
		}
		$data['realtimeinfo'] = $this->news_model->get_news($cv_id);

		if (empty($data['realtimeinfo']))
		{
			show_404();
		}

		$data['cv_id'] = $data['realtimeinfo']['cv_id'];

		$this->load->view('templates/header', $data);
		$this->load->view('admin/realtimeinfo', $data);
		$this->load->view('templates/footer');
	}
	public function historyinfo($cv_id){
        $data['sysb_encrypt'] = 'setslist';//$this->encrypt->encode('setslist');
        $data['dtsb_encrypt'] = 'basicinfo/5001';//$this->encrypt->encode('basicinfo/5001');
        $data['ssxx_encrypt'] = 'realtimeinfo/5001';//$this->encrypt->encode('realtimeinfo/5001');
        $data['lsxx_encrypt'] = 'historyinfo/5001';//$this->encrypt->encode('historyinfo/5001');
        $data['cssz_encrypt'] = 'infoset';//$this->encrypt->encode('infoset');
        $data['zhsz_encrypt'] = 'userset';//$this->encrypt->encode('userset');
		$data['historyinfo'] = $this->news_model->get_historyinfo($cv_id);
		
		$data['news_item'] = $this->news_model->get_news($cv_id);
		$data_all_eqp = $this->news_model->get_allEqp();
		for($i = 0; $i < count($data_all_eqp); $i++){
			$data['onlineEqp'][$i]['num'] = $data_all_eqp[$i]['cv_id'];
			$data['onlineEqp'][$i]['href'] = 'basicinfo/'.$data_all_eqp[$i]['cv_id'];//$this->encrypt->encode('basicinfo/'.$data_all_eqp[$i]['cv_id']);
		}

		if (empty($data['news_item']))
		{
			show_404();
		}

		$data['cv_id'] = $data['news_item']['cv_id'];

		$this->load->view('templates/header', $data);
		$this->load->view('admin/historyinfo', $data);
		$this->load->view('templates/footer');
	}
	public function infoset(){
        $data['sysb_encrypt'] = 'setslist';//$this->encrypt->encode('setslist');
        $data['dtsb_encrypt'] = 'basicinfo/5001';//$this->encrypt->encode('basicinfo/5001');
        $data['ssxx_encrypt'] = 'realtimeinfo/5001';//$this->encrypt->encode('realtimeinfo/5001');
        $data['lsxx_encrypt'] = 'historyinfo/5001';//$this->encrypt->encode('historyinfo/5001');
        $data['cssz_encrypt'] = 'infoset';//$this->encrypt->encode('infoset');
        $data['zhsz_encrypt'] = 'userset';//$this->encrypt->encode('userset');
		$this->load->view('templates/header');
		$this->load->view('admin/infoset',$data);
		$this->load->view('templates/footer');
	}
	public function userset(){
        $data['sysb_encrypt'] = 'setslist';//$this->encrypt->encode('setslist');
        $data['dtsb_encrypt'] = 'basicinfo/5001';//$this->encrypt->encode('basicinfo/5001');
        $data['ssxx_encrypt'] = 'realtimeinfo/5001';//$this->encrypt->encode('realtimeinfo/5001');
        $data['lsxx_encrypt'] = 'historyinfo/5001';//$this->encrypt->encode('historyinfo/5001');
        $data['cssz_encrypt'] = 'infoset';//$this->encrypt->encode('infoset');
        $data['zhsz_encrypt'] = 'userset';//$this->encrypt->encode('userset');
		$this->load->view('templates/header');
		$this->load->view('admin/userset',$data);
		$this->load->view('templates/footer');
	}
}
?>
