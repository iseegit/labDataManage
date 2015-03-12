<?php

class Ajax_setslist extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('news_model');
		$this->load->helper('url');
	}

	public function setslist(){
		$data= $this->news_model->get_news();

		if (empty($data))
		{
			show_404();
		}

		foreach($data as $item){
			echo "cv_id=".$item['cv_id'].";";
			echo "cur_loc=北京;";
			echo "cur_state=".$item['isOnLine'].";";
			echo "acc_time=".$item['acc_time'].";";
			echo "load_time=".$item['load_time'].";";
			echo "#";
		}
	}
	
	public function delEqp(){
		
		$this->db->delete('cv_info_tbl',array('cv_id'=>$_POST['cv_id']));
	}
	
	public function editEqp(){
		
		$data = array(
		   'cv_function' => $_POST['cv_function'],
		   'cv_factory' => $_POST['cv_factory']
		);

		$this->db->where('cv_id', $_POST['cv_id']);
		$this->db->update('cv_info_tbl', $data); 
	}
	
	public function addEqp(){
		
		$data = array(
		   'cv_id' => $_POST['cv_id'],
		   'cv_function' => $_POST['cv_function'],
		   'cv_factory' => $_POST['cv_factory'],
		   'isOnLine' => 0,
		   'record_date' => date('Y-m-d H:i:s')
		);

		$this->db->insert('cv_info_tbl', $data); 
	}
	
	public function allEqp(){
		$data= $this->news_model->get_allEqp();

		if (empty($data))
		{
			show_404();
		}

		foreach($data as $item){
			echo "cv_id=".$item['cv_id'].";";
			echo "cv_function=".$item['cv_function'].";";
			echo "record_date=".$item['record_date'].";";
			echo "#";
		}
	}

}
?>