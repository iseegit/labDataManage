<?php
 
class Index extends CI_Controller{
 
	public function __construct(){
		parent::__construct();
		$this->load->model('news_model');
		$this->load->helper (array(
			'form',  
			'url'   
        ));  
        $this->load->library('session');  
        $this->load->library('encrypt');
	}

	public function index(){
	
		$this->load->view('web/index');
	}
	public function login(){
	
		$this->load->view('web/login');
	}
	public function logout(){
	
		$this->session->sess_destroy();
		$this->load->view('web/login');
	}
	public function aboutus(){
	
		$this->load->view('web/aboutus');
	}
	public function services(){
	
		$this->load->view('web/services');
	}
	public function portfolio(){
	
		$this->load->view('web/portfolio');
	}
	public function contact(){
	
		$this->load->view('web/contact');
	}
	
	public function formsubmit() {
        $this->load->library ( 'form_validation' );  
          
        $this->form_validation->set_rules ( 'username', 'Username', 'required|min_length[4]|max_length[12]' );  
        $this->form_validation->set_rules ( 'password', 'Password', 'required' );  
        if ($this->form_validation->run () == FALSE) {
			$this->load->view('web/login');
        } else {
            if (isset ( $_POST['submit'] ) && ! empty( $_POST['submit'] )) {
                $data = array (  
                        'admin_name' => $_POST['username'],  
                        'admin_passwd' => md5($_POST['password'])
                );  
                $newdata = array(  
                        'username'  =>  $data['admin_name'] ,  
                        'userip'     => $_SERVER['REMOTE_ADDR'],  
                        'luptime'   =>time()  
                );  
                if ($_POST['submit'] == '登陆') {
                    $query = $this->db->get_where( 'admin_tbl', array(
                            'admin_name' => $data['admin_name']   
                    ), 1, 0 );  
              
                    foreach ( $query->result () as $row ) {  
                        $pass = $row->admin_passwd;  
                    }  
                    if ($pass == $data['admin_passwd']) {
					
						$data['allEqp']= $this->news_model->get_allEqp();
						$data['onlineEqp']= $this->news_model->get_allEqp_online();
						$data['allAlarm']= $this->news_model->get_allAlarm_new();
						$data['allMaintain']= $this->news_model->get_allMaintain_new();
						
						$data['alleqpNum'] = count($data['allEqp']);
						$data['onlineeqpNum'] = count($data['onlineEqp']);
						$data['alarmNum'] = count($data['allAlarm']);
						$data['maintainNum'] = count($data['allMaintain']);
						
                        $data['sysb_encrypt'] = $this->encrypt->encode('setslist');
                        $data['dtsb_encrypt'] = $this->encrypt->encode('basicinfo/5001');
                        $data['ssxx_encrypt'] = $this->encrypt->encode('realtimeinfo/5001');
                        $data['lsxx_encrypt'] = $this->encrypt->encode('historyinfo/5001');
                        $data['cssz_encrypt'] = $this->encrypt->encode('infoset');
                        $data['zhsz_encrypt'] = $this->encrypt->encode('userset');
                        
                        $this->session->set_userdata($newdata);  
                        $this->load->view('templates/header');
						$this->load->view('admin/index',$data);
						$this->load->view('templates/footer');
                    }else{
						$this->load->view('web/login');
					}
                }/* else if ($_POST ['submit'] == 'register') {
                      
                    $this->session->set_userdata($newdata);  
                    $this->db->insert ( 'uc_user', $data );  
                    $this->load->view ( 'usercenter', $data );  
                } */else {
                    $this->session->sess_destroy();  
                    $this->load->view('templates/header');
					$this->load->view('web/login');
                }  
            }  
        }  
    }
}
?>
