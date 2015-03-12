<?php

class Ajax_infoset extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('news_model');
		$this->load->helper('url');
	}

	public function getThresholdInfo($user_id){
		$temp0 = explode("&",$user_id);
		$temp = explode("=",$temp0[1]);
		$user_id = $temp[1];
		
		$data['threshold'] = $this->news_model->get_threshold($user_id);
		
		if (empty($data['threshold']))
		{
			show_404();
		}

		//output the response
		foreach($data['threshold'] as $key=>$value){
			echo $key."=".$value.";";
		}
	}
	
	public function setThresholdInfo(){
		/*
		$temp0 = explode("&",$param);
		foreach($temp0 as $item){
		
			$temp = explode("=",$item);
			if($temp[1] == ""){
				$info[$temp[0]] = null;
			}else{
				$info[$temp[0]] = $temp[1];
			}
		}*/
		foreach($_POST as $key=>$value){
			if('' == $_POST[$key]){
				$_POST[$key] = null;
			}
		}
		$this->news_model->set_threshold($_POST,"HongWuHuan");
		echo "ok";
		/*if (empty($data['threshold']))
		{
			show_404();
		}

		//output the response
		foreach($data['threshold'] as $key=>$value){
			echo $key."=".$value.";";
		}*/
	}

}
?>