<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendidikan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_data');
		//Do your magic here
	}

	public function index($id_pegawai)
	{
		$where = array('id_pegawai' => $id_pegawai);
		$data['u'] = $this->m_data->tambahdata($where,'m_thl');
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('tambahpendidikan',$data);
		$this->load->view('template/footer');
	}

	function tambah(){
	$where = array('id_pegawai' => $id_pegawai);
		$data['u'] = $this->m_data->tambahdata($where,'m_thl');
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('tambahpendidikan',$data);
		$this->load->view('template/footer');	
	}

}

/* End of file pendidikan.php */
/* Location: ./application/controllers/pendidikan.php */