<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verify extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_login');
	}

	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]|max_length[12]');
		$this->form_validation->set_rules('password', 'password', 'trim|required|min_length[4]|max_length[12]|callback_check_database');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('v_login');
		} else {
			redirect('home','refresh');
		}
	}

	function check_database($password)
	{
		$username 	= $this->input->post('username');
		$result		= $this->m_login->cek_login($username, $password);

		if ($result) {
			$sess_array	= 	array();

			foreach ($result as $list) {
				$sess_array	= array(
					'username'		=>	$list->username,
					'password'		=>	$list->password,
					'nama_admin'	=>	$list->nama_admin,
					'level'			=>	$list->level
				);

				$this->session->set_userdata('logged_in', $sess_array);
				
			}

			return TRUE;
		} else {

			$this->form_validation->set_message('Cek Database', '<b><font color="#ff7f7f">Username atau Password Salah </b>');
			return FALSE;
		}
	}

}

/* End of file verify.php */
/* Location: ./application/controllers/verify.php */