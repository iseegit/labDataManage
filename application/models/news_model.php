<?php

class News_model extends CI_Model{

	public function __construct(){
		$this->load->database();
	}

	public function get_news($cv_id = FALSE){
		if(FALSE === $cv_id){
			$query = $this->db->get('realtime_tbl');
			return $query->result_array();
		}

		$query = $this->db->get_where('realtime_tbl',array('cv_id'=>$cv_id));
		return $query->row_array();
	}
	
	public function get_allEqp($cv_id = FALSE){
		if(FALSE === $cv_id){
			$query = $this->db->get('info_tbl');
			return $query->result_array();
		}

		$query = $this->db->get_where('info_tbl',array('cv_id'=>$cv_id));
		return $query->row_array();
	}
	
	public function get_allEqp_online($cv_id = FALSE){

		$query = $this->db->get_where('realtime_tbl',array('isOnLine'=>1));
		
		return $query->result_array();
	}
	public function get_allAlarm_new(){
	
		//$query = $this->db->get_where('alarm_tbl',array('isRead'=>0));
		$query = $this->db->get('alarm_tbl');
		
		return $query->result_array();
	}
	
	public function get_allAlarm($cv_id = FALSE){
		if (FALSE === $cv_id){
			$query = $this->db->get('alarm_tbl');
		}else{
			$query = $this->db->get_where('alarm_tbl',array('cv_id'=>$cv_id));
		}
		
		return $query->result_array();
	}
	
	public function get_allMaintain($cv_id = FALSE){
		if (FALSE === $cv_id){
			$query = $this->db->get('maintain_tbl');
		}else{
			$query = $this->db->get_where('maintain_tbl',array('cv_id'=>$cv_id));
		}
		
		return $query->result_array();
	}
	
	public function get_allMaintain_new(){
	
		//$query = $this->db->get_where('maintain_tbl',array('isRead'=>0));
		$query = $this->db->get('maintain_tbl');
		
		return $query->result_array();
	}
	
	public function get_sets_withoption(){
	
		$query = $this->db->get('realtime_tbl');//,array('user_id'=>$option));
		return $query->result_array();
	}
	
	public function get_allcvid(){
	
		$this->db->select('cv_id');

		$query = $this->db->get('info_tbl');
		
		return $query->result_array();
	}
	
	public function isonline($cv_id){
	
		$this->db->select('isOnLine');

		$query = $this->db->get_where('realtime_tbl',array('cv_id'=>$cv_id));
		
		return $query->result_array();
	}
	
	public function get_historyinfo($cv_id){
	
		$query = $this->db->get_where('history_tbl',array('cv_id'=>$cv_id));
		
		return $query->result_array();
	}
	
	public function get_threshold($user_id = FALSE){
		if(FALSE === $user_id){
			return;
		}

		$query = $this->db->get_where('param_tbl',array('user_id'=>$user_id));
		return $query->row_array();
	}
	
	public function set_threshold($info,$user_id){
		/*if(FALSE === $user_id){
			return;
		}

		$query = $this->db->get_where('param_tbl',array('user_id'=>$user_id));
		return $query->row_array();*/
		$this->cv_speed_alarm 		=$info['cv_speed_alarm'];
		$this->cv_speed_stop		=$info['cv_speed_stop'];
		$this->cv_speed_display		=$info['cv_speed_display'];
		
		$this->cv_voltage_alarm		=$info['cv_voltage_alarm'];
		$this->cv_voltage_stop		=$info['cv_voltage_stop'];
		$this->cv_voltage_display	=$info['cv_voltage_display'];
		
		$this->cv_oilpress_alarm	=$info['cv_oilpress_alarm'];
		$this->cv_oilpress_stop		=$info['cv_oilpress_stop'];
		$this->cv_oilpress_display	=$info['cv_oilpress_display'];
		
		$this->cv_gaspress_alarm	=$info['cv_gaspress_alarm'];
		$this->cv_gaspress_stop		=$info['cv_gaspress_stop'];
		$this->cv_gaspress_display	=$info['cv_gaspress_display'];

		$this->cv_watertemp_alarm	=$info['cv_watertemp_alarm'];
		$this->cv_watertemp_stop	=$info['cv_watertemp_stop'];
		$this->cv_watertemp_display	=$info['cv_watertemp_display'];
		
		$this->cv_oiltemp_alarm		=$info['cv_oiltemp_alarm'];
		$this->cv_oiltemp_stop		=$info['cv_oiltemp_stop'];
		$this->cv_oiltemp_display	=$info['cv_oiltemp_display'];
		
		$this->cv_gastemp_alarm		=$info['cv_gastemp_alarm'];
		$this->cv_gastemp_stop		=$info['cv_gastemp_stop'];
		$this->cv_gastemp_display	=$info['cv_gastemp_display'];
		
		$this->cv_acur_alarm		=$info['cv_acur_alarm'];
		$this->cv_acur_stop			=$info['cv_acur_stop'];
		$this->cv_acur_display		=$info['cv_acur_display'];
		
		$this->cv_bcur_alarm		=$info['cv_bcur_alarm'];
		$this->cv_bcur_stop			=$info['cv_bcur_stop'];
		$this->cv_bcur_display		=$info['cv_bcur_display'];
		
		$this->cv_ccur_alarm		=$info['cv_ccur_alarm'];
		$this->cv_ccur_stop			=$info['cv_ccur_stop'];
		$this->cv_ccur_display		=$info['cv_ccur_display'];
		
        $this->db->update('param_tbl', $this, array('user_id' => $user_id));
    }
}
?>