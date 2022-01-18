<?php 
 
class Login extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
 
	}
 
	function index(){
		if ($this->session->userdata('logged_in')) {
					redirect('home','refresh');
				} else {
					$this->load->helper('form');
					$this->load->view('v_login');
				}		
	}

	// function aksi_login(){
	// 	$username = $this->input->post('username');
	// 	$password = $this->input->post('password');
	// 	$where = array(
	// 		'username' => $username,
	// 		'password' => md5($password)
	// 		);
	// 	// echo var_dump($where); die();
		
	// 	$cek = $this->m_login->cek_login("m_admin",$where)->num_rows();
	// 	if($cek > 0){
 
	// 		$data_session = array(
	// 			'nama_admin' => 'nama_admin',
	// 			'level' => 'level',
	// 			'status' => "login"
	// 			);
 
	// 		$this->session->set_userdata($data_session);
 
	// 		redirect(base_url("home"));
 
	// 	}else{
	// 		echo "Username dan password salah !";
	// 	}
	// }
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}