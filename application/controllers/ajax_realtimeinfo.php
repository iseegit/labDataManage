<?php

class Ajax_realtimeinfo extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('news_model');
		$this->load->helper('url');
	}

	public function index(){
		$this->load->view('web/index');
	}
	
	public function getonlinesets(){

		//$data = $this->news_model->get_sets_withoption();
		$data = $this->news_model->get_allcvid();
		sort($data);
		foreach($data as $item){
			echo $item['cv_id'].";";
		}
	}
	
	public function isonline(){

		//$data = $this->news_model->get_sets_withoption();
		$data = $this->news_model->isonline($_POST['cv_id']);
		//foreach($data as $item){
			echo $data[0]['isOnLine'];
		//}
	}

	public function readinfo($cv_id = FALSE){
	
		if(FALSE === $cv_id){
			$cv_id = $_POST['cv_id'];
		}
		$data['news_item'] = $this->news_model->get_news($cv_id);
		if (empty($data['news_item']))
		{
			show_404();
		}

		/*if(count($temp0) >= 3){
			$temp = explode("=",$temp0[2]);
			$data['threshold'] = $this->news_model->get_threshold("HongWuHuan");
				foreach($data['threshold'] as $key=>$value){
				echo $key."=".$value.";";
			}
		}*/

		//output the response
		foreach($data['news_item'] as $key=>$value){
			echo $key."=".$value.";";
		}
		
	}
}
?>