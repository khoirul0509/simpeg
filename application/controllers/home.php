<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends Admin_Controller {
    function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
        $this->load->helper( 'url');
     }  


    public function index()
    {
   //  	if ($this->session->userdata('logged_in')) {
   //  		$session_data 	=	$this->session->userdata('logged_in');
   //  		$data['nama_admin'] = $session_data['nama_admin'];
   //  		$data['level'] = $session_data['level'];
   //  		$data['totalPegawai'] = $this->m_data->total_pegawai();
	  //   	$this->load->view('template/header',$data);
			// $this->load->view('template/sidebar',$data);
	  //       $this->load->view('dasbord',$data);
		 //    $this->load->view('template/footer',$data);

   //  	} else {
   //  		redirect('login','refresh');
   //  	}
   		$this->data['totalPegawai'] = $this->m_data->total_pegawai();
    	$this->render('dasbord',$this->data);
    }

    public function biodata(){

    }
    public function tampil(){
    	if ($this->session->userdata('logged_in')) {
    		$session_data 	=	$this->session->userdata('logged_in');
    		$data['nama_admin'] = $session_data['nama_admin'];
    		$data['level'] = $session_data['level'];
	    	$data['thl'] = $this->m_data->tampil_data()->result();
	    	$this->load->view('template/header', $data);
			$this->load->view('template/sidebar', $data);
	        $this->load->view('tampildata', $data);
	        $this->load->view('template/footer', $data);
        } else {
    		redirect('login','refresh');
    	}
    }
    function tambah(){
		
    	$this->load->view('template/header');
		$this->load->view('template/sidebar');
        $this->load->view('from_tambah');
        $this->load->view('template/footer');
	}

	
	function aksitambah()
	{
		$config['upload_path']          = 'upload/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 1024;
		$config['encrypt_name']			= TRUE;

		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('foto'))
		{
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('from_tambah', $error);
		}
		else
		{
			$data['id_pegawai']				= $this->input->post('id_pegawai');
			$data['nik']					= $this->input->post('nik');
			$data['nama']					= $this->input->post('nama');
			$data['tempat_lahir']			= $this->input->post('tempat_lahir');
			$data['tgl_lahir']				= $this->input->post('tgl_lahir');
			$data['jenis_kelamin']			= $this->input->post('jenis_kelamin');
			$data['status_kawin']			= $this->input->post('status_kawin');
			$data['agama']					= $this->input->post('agama');
			$data['gelar_depan']			= $this->input->post('gelar_depan');
			$data['gelar_belakang']			= $this->input->post('gelar_belakang');
			$data['jenjang_pendidikan']		= $this->input->post('jenjang_pendidikan');
			$data['pendidikan']				= $this->input->post('pendidikan');
			$data['tgl_mulai_kontrak_awal'] = $this->input->post('tgl_mulai_kontrak_awal');
			$data['tgl_akhir_kontrak_awal'] = $this->input->post('tgl_akhir_kontrak_awal');
			$data['no_kontrak_awal']		= $this->input->post('no_kontrak_awal');
			$data['tgl_kontrak_awal']		= $this->input->post('tgl_kontrak_awal');
			$data['kdunor']					= $this->input->post('kdunor');
			$data['pekerjaan']				= $this->input->post('pekerjaan');
			$data['alamat']					= $this->input->post('alamat');
			$data['npwp']					= $this->input->post('npwp');
			$data['no_bpjs_tenagakerja'] 	= $this->input->post('no_bpjs_tenagakerja');
			$data['no_bpjs_kesehatan']		= $this->input->post('no_bpjs_kesehatan');
			$data['status_kontrak']			= $this->input->post('status_kontrak');
			$data['add_at']					= $this->input->post('add_at');
			

			$data['foto']					= $this->upload->data('file_name');

			// echo var_dump($data); die();

			$this->m_data->input_data($data,'m_thl');

			redirect('home/tampil');
		}
	}

	

	function updateaksi()
	{
		//exit();
		$this->load->library('form_validation');

		$this->form_validation->set_rules('nik','NIK','required');
		$this->form_validation->set_rules('id_pegawai','id_pegawai','required');
		$this->form_validation->set_rules('jenis_kelamin','jenis_kelamin','required');
		$this->form_validation->set_rules('status_kawin','status_kawin','required');
		$this->form_validation->set_rules('jenjang_pendidikan','jenjang_pendidikan','required');
		$this->form_validation->set_rules('pendidikan','pendidikan','required');
		$this->form_validation->set_rules('kdunor','kdunor','required');
		$this->form_validation->set_rules('pekerjaan','pekerjaan','required');
		

		if($this->form_validation->run() != false){
			$data['id_pegawai']				 	= $this->input->post('id_pegawai');
				
				$data['nik']				 	= $this->input->post('nik');
				$data['nama']					= $this->input->post('nama');
				$data['tempat_lahir']			= $this->input->post('tempat_lahir');
				$data['tgl_lahir']				= $this->input->post('tgl_lahir');
				$data['jenis_kelamin']			= $this->input->post('jenis_kelamin');
				$data['status_kawin']			= $this->input->post('status_kawin');
				$data['agama']					= $this->input->post('agama');
				$data['gelar_depan']			= $this->input->post('gelar_depan');
				$data['gelar_belakang']			= $this->input->post('gelar_belakang');
				$data['jenjang_pendidikan']		= $this->input->post('jenjang_pendidikan');
				$data['pendidikan']				= $this->input->post('pendidikan');
				$data['tgl_mulai_kontrak_awal'] = $this->input->post('tgl_mulai_kontrak_awal');
				$data['tgl_akhir_kontrak_awal'] = $this->input->post('tgl_akhir_kontrak_awal');
				$data['no_kontrak_awal']		= $this->input->post('no_kontrak_awal');
				$data['tgl_kontrak_awal']		= $this->input->post('tgl_kontrak_awal');
				$data['kdunor']					= $this->input->post('kdunor');
				$data['pekerjaan']				= $this->input->post('pekerjaan');
				$data['alamat']					= $this->input->post('alamat');
				$data['npwp']					= $this->input->post('npwp');
				$data['no_bpjs_tenagakerja']	= $this->input->post('no_bpjs_tenagakerja');
				$data['no_bpjs_kesehatan']		= $this->input->post('no_bpjs_kesehatan');
				$data['status_kontrak']			= $this->input->post('status_kontrak');
				$data['edit_at']			    = $this->input->post('edit_at');


				if(isset($_FILES['foto'])){
					$config['upload_path']          = 'upload/';
					$config['allowed_types']        = 'gif|jpg|png';
					$config['max_size']             = 1024;
					$config['encrypt_name']			= TRUE;

					$this->load->library('upload', $config);
					if ( ! $this->upload->do_upload('foto'))
					{
							echo $this->upload->display_errors();
							//exit();
					}
					else
					{
						$data['foto']					= $this->upload->data('file_name');
						
					}
				}

				

				

				$where = array(
					'id_pegawai' => $data['id_pegawai']
					);

				//var_dump($data); die();

				if($this->m_data->update_data($where,$data,'m_thl')>0){
					//echo 'update sukese'; 
					
					//redirect('home/edit/'.$data['id_pegawai']);
					redirect('home/tampil');
					
				}				
	    		
	
		}else{
			//redirect('home/tampil');
			redirect('home/edit/'.$data['id_pegawai']);
		}



	}
	

	function edit($id_pegawai)
	{
		$where = array('id_pegawai' => $id_pegawai);
		$data['u'] = $this->m_data->edit_data($where,'m_thl');
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('from_edit',$data);
		$this->load->view('template/footer');
		}

	function update(){
	    $id_pegawai 			= $this->input->post('id_pegawai');
	    $nik		 			= $this->input->post('nik');
		$nama					= $this->input->post('nama');
		$tempat_lahir			= $this->input->post('tempat_lahir');
		$tgl_lahir 				= $this->input->post('tgl_lahir');
		$jenis_kelamin 			= $this->input->post('jenis_kelamin');
		$status_kawin 			= $this->input->post('status_kawin');
		$agama 					= $this->input->post('agama');
		$gelar_depan 			= $this->input->post('gelar_depan');
		$gelar_belakang 		= $this->input->post('gelar_belakang');
		$jenjang_pendidikan 	= $this->input->post('jenjang_pendidikan');
		$pendidikan 			= $this->input->post('pendidikan');
		$tgl_mulai_kontrak_awal = $this->input->post('tgl_mulai_kontrak_awal');
		$tgl_akhir_kontrak_awal = $this->input->post('tgl_akhir_kontrak_awal');
		$no_kontrak_awal 		= $this->input->post('no_kontrak_awal');
		$tgl_kontrak_awal 		= $this->input->post('tgl_kontrak_awal');
		$kdunor 				= $this->input->post('kdunor');
		$pekerjaan 				= $this->input->post('pekerjaan');
		$alamat 				= $this->input->post('alamat');
		$npwp 					= $this->input->post('npwp');
		$no_bpjs_tenagakerja 	= $this->input->post('no_bpjs_tenagakerja');
		$no_bpjs_kesehatan 		= $this->input->post('no_bpjs_kesehatan');
		$status_kontrak 		= $this->input->post('status_kontrak');
 
	$data = array(
		 	'nama' 					=> $nama,
		 	'nik'					=> $nik,
			'tempat_lahir'			=> $tempat_lahir,
			'tgl_lahir' 			=> $tgl_lahir,
			'jenis_kelamin' 		=> $jenis_kelamin,
			'status_kawin' 			=> $status_kawin,
			'agama' 				=> $agama,
			'gelar_depan' 			=> $gelar_depan,
			'gelar_belakang'		=> $gelar_belakang,
			'jenjang_pendidikan'	=> $jenjang_pendidikan,
			'pendidikan' 			=> $pendidikan,
			'tgl_mulai_kontrak_awal'=> $tgl_mulai_kontrak_awal,
			'tgl_akhir_kontrak_awal'=> $tgl_akhir_kontrak_awal,
			'no_kontrak_awal' 		=> $no_kontrak_awal,
			'tgl_kontrak_awal' 		=> $tgl_kontrak_awal,
			'kdunor' 				=> $kdunor,
			'pekerjaan' 			=> $pekerjaan,
			'alamat' 				=> $alamat,
			'npwp' 					=> $npwp,
			'no_bpjs_tenagakerja' 	=> $no_bpjs_tenagakerja,
			'no_bpjs_kesehatan' 	=> $no_bpjs_kesehatan,
			'status_kontrak' 		=> $status_kontrak
			
	);
 
	$where = array(
		'id_pegawai' => $id_pegawai
	);
 		//echo var_dump($data); die();

	$this->m_data->update_data($where,$data,'m_thl');
	redirect('home/tampil');
    }


    function hapus($id_pegawai){
		$where = array('id_pegawai' => $id_pegawai);
		$this->m_data->hapus_data($where,'m_thl');
		redirect('home/tampil');
	}
	// function detail($id_pegawai){
	// 	if ($this->session->userdata('logged_in')) {
    // 		$session_data 	=	$this->session->userdata('logged_in');
    // 		$data['nama_admin'] = $session_data['nama_admin'];
    // 		$data['level'] = $session_data['level'];
	// 		$where = array('id_pegawai' => $id_pegawai);
	// 		$data['u'] = $this->m_data->edit_data($where,'m_thl');
	// 		$this->load->view('template/header',$data);
	// 		$this->load->view('template/sidebar',$data);
	// 		$this->load->view('detail', $data);
	// 		$this->load->view('template/footer');

	// 		 } else {
    // 		redirect('login','refresh');
    // 	}

	// }

	function pendidikan($id)
	{
		if ($this->session->userdata('logged_in')) {
    		$session_data 	=	$this->session->userdata('logged_in');
    		$data['nama_admin'] = $session_data['nama_admin'];
    		$data['level'] = $session_data['level'];
    		$data['datajenjang'] = $this->m_data->pendidikan($id)->result();
    		// echo var_dump($data['datajenjang']); die();
			$this->load->view('template/header',$data);
			$this->load->view('template/sidebar',$data);
			$this->load->view('riwayatpendidikan',$data);
			$this->load->view('template/footer',$data);

			 } else {
    		redirect('login','refresh');
    	}
		
	}

	function updatependidikan()
	{
		if ($this->session->userdata('logged_in')) {
    		$session_data 	=	$this->session->userdata('logged_in');
    		$data['nama_admin'] = $session_data['nama_admin'];
    		$data['level'] = $session_data['level'];
    		
			$this->load->view('template/header',$data);
			$this->load->view('template/sidebar',$data);
			$this->load->view('editpendidikan', $data);
			$this->load->view('template/footer',$data);

			 } else {
    		redirect('login','refresh');
    	}
	}
}