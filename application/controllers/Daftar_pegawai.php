<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar_pegawai extends Admin_Controller {
    function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
        $this->load->helper( 'url');
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


    public function index(){

   		$this->data['thl'] = $this->m_data->tampil_data()->result();
        //    echo var_dump($this->data);
    	$this->render('tampildata',$this->data);
    }

    function detail($modul="utama",$id_pegawai=""){
        if($id_pegawai==""){
            redirect("Daftar_pegawai");
        }else{
            $this->data['id_pegawai']=$id_pegawai;
            switch ($modul) {
                case "utama":
                    $this->data['du'] = $this->m_data->detail_data($id_pegawai);//->result();
                    // echo var_dump($this->data); die();
                    // echo var_dump($this->data);
                    $this->render('detail', $this->data);
                    break;
                case "pendidikan":
                    $this->data['datajenjang'] = $this->m_data->detail_data($id_pegawai);
                    // echo var_dump($this->data); die();
                    $this->render('riwayatpendidikan', $this->data);
                  break;
                case "kontrak":
                    $this->data['datakontrak'] = $this->m_data->detail_data_kontrak($id_pegawai);
                        // echo var_dump($this->data); die();
                    $this->render('riwayatkontrak', $this->data);
                break;
                
                default:
                    $this->data['du'] = $this->m_data->detail_data($id_pegawai);
                    $this->render('detail', $this->data);
              }

            
        }
        
    }

    function simpan_data_utama(){
        $this->load->library('form_validation');

		$this->form_validation->set_rules('id_pegawai','ID Pegawai','required');
		$this->form_validation->set_rules('nik','NIK','required');
		$this->form_validation->set_rules('nama','Nama Pegawai','required');
		$this->form_validation->set_rules('jenis_kelamin','Jenis kelamin','required');
		$this->form_validation->set_rules('status_kawin','status_kawin','required');
		$this->form_validation->set_rules('jenjang_pendidikan','jenjang_pendidikan','required');
		$this->form_validation->set_rules('pendidikan','pendidikan','required');
		$this->form_validation->set_rules('kdunor','kdunor','required');
		$this->form_validation->set_rules('pekerjaan','pekerjaan','required');

        $id_pegawai=$this->input->post('id_pegawai');
        
        if($this->form_validation->run() == false){
            $this->session->set_flashdata('msg', 'update data gagal, silahkan lengkapi data');
            redirect("daftar_pegawai/detail/utama/$id_pegawai");
        }else{
            if($_FILES['foto']){
                $config['upload_path']          = 'upload/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1024;
                $config['encrypt_name']         = TRUE;

                $this->load->library('upload', $config);
                if ( ! $this->upload->do_upload('foto'))
                {
                        $error = array('error' => $this->upload->display_errors());
                        //$this->load->view('from_tambah', $error);
                }
            }
            /* else
            { */
                
            $data['nik']                    = $this->input->post('nik');
            $data['nama']                   = $this->input->post('nama');
            $data['tempat_lahir']           = $this->input->post('tempat_lahir');
            $data['tgl_lahir']              = $this->input->post('tgl_lahir');
            $data['jenis_kelamin']          = $this->input->post('jenis_kelamin');
            $data['status_kawin']           = $this->input->post('status_kawin');
            $data['agama']                  = $this->input->post('agama');
            $data['gelar_depan']            = $this->input->post('gelar_depan');
            $data['gelar_belakang']         = $this->input->post('gelar_belakang');
            $data['jenjang_pendidikan']     = $this->input->post('jenjang_pendidikan');
            $data['pendidikan']             = $this->input->post('pendidikan');
            $data['tgl_mulai_kontrak_awal'] = $this->input->post('tgl_mulai_kontrak_awal');
            $data['tgl_akhir_kontrak_awal'] = $this->input->post('tgl_akhir_kontrak_awal');
            $data['no_kontrak_awal']        = $this->input->post('no_kontrak_awal');
            $data['tgl_kontrak_awal']       = $this->input->post('tgl_kontrak_awal');
            $data['kdunor']                 = $this->input->post('kdunor');
            $data['pekerjaan']              = $this->input->post('pekerjaan');
            $data['alamat']                 = $this->input->post('alamat');
            $data['npwp']                   = $this->input->post('npwp');
            $data['no_bpjs_tenagakerja']    = $this->input->post('no_bpjs_tenagakerja');
            $data['no_bpjs_kesehatan']      = $this->input->post('no_bpjs_kesehatan');
            $data['status_kontrak']         = $this->input->post('status_kontrak');
            $data['add_at']                 = $this->input->post('add_at');
            

            //$data['foto']                   = $this->upload->data('file_name');



            // echo var_dump($data); die();

            $aff=$this->m_data->update_data_utama($id_pegawai,$data);

            if($aff>0){
                $this->session->set_flashdata('msg', 'data berhasil di update');
                
            }else{
                $this->session->set_flashdata('msg', 'update data gagal, silahkan lengkapi data');
            }

            redirect("daftar_pegawai/detail/utama/$id_pegawai");
            
        }
    }


    function tambah(){

        $this->render('from_tambah',$this->data);
    }

    function aksitambah(){
        $this->load->library('form_validation');

		$this->form_validation->set_rules('nik','NIK','required');
		$this->form_validation->set_rules('nama','Nama Pegawai','required');
		$this->form_validation->set_rules('jenis_kelamin','Jenis kelamin','required');
		$this->form_validation->set_rules('status_kawin','status_kawin','required');
		$this->form_validation->set_rules('jenjang_pendidikan','jenjang_pendidikan','required');
		$this->form_validation->set_rules('pendidikan','pendidikan','required');
		$this->form_validation->set_rules('kdunor','kdunor','required');
		$this->form_validation->set_rules('pekerjaan','pekerjaan','required');

        if($this->form_validation->run() == false){
            $this->session->set_flashdata('msg', 'lengkapi data');
            redirect('daftar_pegawai/tambah');
        }else{
        
            $config['upload_path']          = 'upload/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 1024;
            $config['encrypt_name']         = TRUE;

            $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('foto'))
            {
                    $error = array('error' => $this->upload->display_errors());
                    $this->load->view('from_tambah', $error);
            }
            else
            {
                $data['id_pegawai']             = $this->input->post('id_pegawai');
                $data['nik']                    = $this->input->post('nik');
                $data['nama']                   = $this->input->post('nama');
                $data['tempat_lahir']           = $this->input->post('tempat_lahir');
                $data['tgl_lahir']              = $this->input->post('tgl_lahir');
                $data['jenis_kelamin']          = $this->input->post('jenis_kelamin');
                $data['status_kawin']           = $this->input->post('status_kawin');
                $data['agama']                  = $this->input->post('agama');
                $data['gelar_depan']            = $this->input->post('gelar_depan');
                $data['gelar_belakang']         = $this->input->post('gelar_belakang');
                $data['jenjang_pendidikan']     = $this->input->post('jenjang_pendidikan');
                $data['pendidikan']             = $this->input->post('pendidikan');
                $data['tgl_mulai_kontrak_awal'] = $this->input->post('tgl_mulai_kontrak_awal');
                $data['tgl_akhir_kontrak_awal'] = $this->input->post('tgl_akhir_kontrak_awal');
                $data['no_kontrak_awal']        = $this->input->post('no_kontrak_awal');
                $data['tgl_kontrak_awal']       = $this->input->post('tgl_kontrak_awal');
                $data['kdunor']                 = $this->input->post('kdunor');
                $data['pekerjaan']              = $this->input->post('pekerjaan');
                $data['alamat']                 = $this->input->post('alamat');
                $data['npwp']                   = $this->input->post('npwp');
                $data['no_bpjs_tenagakerja']    = $this->input->post('no_bpjs_tenagakerja');
                $data['no_bpjs_kesehatan']      = $this->input->post('no_bpjs_kesehatan');
                $data['status_kontrak']         = $this->input->post('status_kontrak');
                $data['add_at']                 = $this->input->post('add_at');
                

                $data['foto']                   = $this->upload->data('file_name');



                // echo var_dump($data); die();

                $this->m_data->input_data($data,'m_thl');

                redirect('home/tampil');
            }
        }
    }

    function tambah_riwayat_pendidikan($id_pegawai){
        $this->data['datajenjang'] = $this->m_data->edit_data($id_pegawai)->result();
        $this->data['id_pegawai'] = $id_pegawai;
        
        $this->render('tambahpendidikan',$this->data);
    }

    function proses_tambah_riwayat_pendidikan(){
        $this->load->library('form_validation');

        $this->form_validation->set_rules('jenjang_pendidikan','jenjang_pendidikan','required');
        $this->form_validation->set_rules('pendidikan','pendidikan','required');
        $this->form_validation->set_rules('nama_sekolah','nama_sekolah','required');
        $this->form_validation->set_rules('tahun_lulus','tahun_lulusn','required');
        $this->form_validation->set_rules('id_pegawai','ID Pegawai','required');
        $id_pegawai=$this->input->post('id_pegawai');
        
        if($this->form_validation->run() == false){
            $this->session->set_flashdata('msg', 'lengkapi data');
            redirect("daftar_pegawai/tambah_riwayat_pendidikan/$id_pegawai");

            
        //<input type="hidden" name="add_at" class="form-control col-md-6"  value="<?php date_default_timezone_set('Asia/Jakarta'); echo date('Y-m-d H:i:s'); 

        }else {
            $data['nama_jenjang']                    = $this->input->post('jenjang_pendidikan');
            $data['nama_pendidikan']                 = $this->input->post('pendidikan');
            $data['nama_sekolah']                    = $this->input->post('nama_sekolah');
            $data['tahun_lulus']                     = $this->input->post('tahun_lulus');
            $data['pegawai_id']                      = $this->input->post('id_pegawai');

            $d=$this->m_data->input_data($data,'m_jenjang');
            if(count($d)>0){                
                redirect("daftar_pegawai/detail/pendidikan/$id_pegawai");
            }else{
                $this->session->set_flashdata('msg', 'gagal menyimpan data');
                redirect("daftar_pegawai/tambah_riwayat_pendidikan/$id_pegawai");
            }
            
        
            
        }
    }
        
    function proses_edit_riwayat_pendidikan(){
        $this->load->library('form_validation');

        $this->form_validation->set_rules('jenjang_pendidikan','jenjang_pendidikan','required');
        $this->form_validation->set_rules('pendidikan','pendidikan','required');
        $this->form_validation->set_rules('nama_sekolah','nama_sekolah','required');
        $this->form_validation->set_rules('tahun_lulus','tahun_lulus','required');
        $this->form_validation->set_rules('id_pegawai','ID Pegawai','required');
        $this->form_validation->set_rules('id_riwayat','ID Riwayat Pendidikan','required');
        $id_riwayat                        = $this->input->post('id_riwayat');
        $id_pegawai                        = $this->input->post('id_pegawai');
        if($this->form_validation->run() == false){
            $this->session->set_flashdata('msg', 'lengkapi data');
            // redirect('daftar_pegawai/update_pendidikan');
            redirect("daftar_pegawai/update_pendidikan/$id_riwayat");

            
        //<input type="hidden" name="add_at" class="form-control col-md-6"  value="<?php date_default_timezone_set('Asia/Jakarta'); echo date('Y-m-d H:i:s'); 

        }else {
            $data['nama_jenjang']              = $this->input->post('jenjang_pendidikan');
            $data['nama_pendidikan']           = $this->input->post('pendidikan');
            $data['nama_sekolah']              = $this->input->post('nama_sekolah');
            $data['tahun_lulus']               = $this->input->post('tahun_lulus');
            

            $aff=$this->m_data->update_pendidikan($id_riwayat,$data);
            if($aff>0){
                redirect("daftar_pegawai/detail/pendidikan/$id_pegawai");
            }else{
                redirect("daftar_pegawai/update_pendidikan/$id_riwayat");
            }
            
        
            
        }
    }

    // function update_pendidikan(){
    //     $this->data['updatependidikan'] = $this->m_data->edit_data()->result();
    //     //echo var_dump($this->data); die();
    //     $this->render('editpendidikan',$this->data);
    // }

    function update_pendidikan($id_jenjang){
        $this->data['updatependidikan'] = $this->m_data->edit_pendidikan($id_jenjang);
        /* echo json_encode($this->data['updatependidikan']);
        exit(); */
        $this->render('editpendidikan',$this->data);
    }


    function detail_kontrak($modul="utama",$id_pegawai=""){      //bekum jalan
        if($id_pegawai==""){
            redirect("Daftar_pegawai");
        }else{
            $this->data['id_pegawai']=$id_pegawai;
            switch ($modul) {
                case "utama":
                    $this->data['dk'] = $this->m_data->detail_data_kontrak()->result();
                    //  echo var_dump($this->data); die();
                    
                    $this->render('riwayatkontrak', $this->data);
                    // 
                    break;
                case "kontrak":
                    $this->data['datakontrak'] = $this->m_data->detail_data_kontrak()->result();
                        // echo var_dump($this->data); die();
                    $this->render('riwayatkontrak', $this->data);
                break;
                
                default:
                    $this->data['dk'] = $this->m_data->detail_data_kontrak()->result();
                    $this->render('riwayatkontrak', $this->data);
            }

            
        }
        
    }

    // function tambah_riwayat_pendidikan($id_pegawai){
    //     $this->data['datajenjang'] = $this->m_data->edit_data($id_pegawai)->result();
    //     //echo var_dump($this->data); die();
    //     $this->render('tambahpendidikan',$this->data);
    // }

    function tambah_riwayat_kontrak($id_pegawai){
        $this->data['dk'] = $this->m_data->edit_data($id_pegawai)->result();
        $this->data['id_pegawai'] = $id_pegawai;
        $this->render('tambahriwayatkontrak',$this->data);
    }

    function update_kontrak($id_riwayat_kontrak){
        $this->data['upkontrak'] = $this->m_data->get_kontrak($id_riwayat_kontrak);
        //echo json_encode($this->data['upkontrak']); die();
        $this->render('editriwayatkontrak',$this->data);
    }

    function update_r_kontrak(){

    }

    function proses_tambah_riwayat_kontrak(){
        $this->load->library('form_validation');

        $this->form_validation->set_rules('no_kontrak_awal','no_kontrak_awal','required');
        $this->form_validation->set_rules('tgl_mulai_kontrak_awal','tgl_mulai_kontrak_awal','required');
        $this->form_validation->set_rules('tgl_akhir_kontrak_awal','tgl_akhir_kontrak_awal','required');
        $this->form_validation->set_rules('tgl_kontrak_awal','tgl_kontrak_awal','required');
        $this->form_validation->set_rules('id_pegawai','ID Pegawai','required');
        
        if($this->form_validation->run() == false){
            $this->session->set_flashdata('msg', 'lengkapi data');
            redirect('daftar_pegawai/tambah_riwayat_kontrak');

            
        //<input type="hidden" name="add_at" class="form-control col-md-6"  value="<?php date_default_timezone_set('Asia/Jakarta'); echo date('Y-m-d H:i:s'); 

        }else{
            $data['no_kontrak_awal']             = $this->input->post('no_kontrak_awal');
            $data['tgl_mulai_kontrak_awal']      = $this->input->post('tgl_mulai_kontrak_awal');
            $data['tgl_akhir_kontrak_awal']      = $this->input->post('tgl_akhir_kontrak_awal');
            $data['tgl_kontrak_awal']            = $this->input->post('tgl_kontrak_awal');
            $data['pegawai_id']                  = $this->input->post('id_pegawai');
            $data['is_kontrak_awal']                  = $this->input->post('is_kontrak_awal');

            $this->m_data->input_data($data,'m_jenjang');
            $this->render('riwayat_pendidikan', $this->data);
        }
            
    }

    function proses_edit_riwayat_kontrak(){
        $this->load->library('form_validation');
        $this->form_validation->set_rules('id_r_kontrak','id_r_kontrak','required');
        $this->form_validation->set_rules('id_pegawai','id_pegawai','required');
        $this->form_validation->set_rules('nomor_kontrak','nomor_kontrak','required');
        $this->form_validation->set_rules('tmt_sk_kontrak','tmt_sk_kontrak','required');
        $this->form_validation->set_rules('tmt_sk_kontrak_akhir','tmt_sk_kontrak_akhir','required');
        $this->form_validation->set_rules('tgl_sk_kontrak','tgl_sk_kontrak','required');

        
        
        if($this->form_validation->run() == false){
            $this->session->set_flashdata('msg', 'lengkapi data');
            
        }else {
        
            $id_riwayat_kontrak = $this->input->post('id_r_kontrak');
            $id_pegawai = $this->input->post('id_pegawai');
            $data['no_kontrak'] = $this->input->post('nomor_kontrak');
            $data['tgl_mulai_kontrak'] = simpanTanggal($this->input->post('tmt_sk_kontrak'));
            $data['tgl_akhir_kontrak'] = simpanTanggal($this->input->post('tmt_sk_kontrak_akhir'));
            $data['tgl_kontrak'] = simpanTanggal($this->input->post('tgl_sk_kontrak'));
            $data['is_kontrak_awal'] = $this->input->post('is_kontrak_awal');

            if($_FILES['berkas']){
                $hasil_upload=$this->upload_berkas($_FILES['berkas'],"2");
            }

            if($hasil_upload['status']){
                $data['nama_file']=$hasil_upload['nama_file'];
            }

            $aff=$this->m_data->update_kontrak($id_riwayat_kontrak,$data);
            if($aff>0){
                redirect("daftar_pegawai/detail_kontrak/kontrak/$id_pegawai");
            }else{
                redirect("daftar_pegawai/update_kontrak/$id_riwayat_kontrak");
            }
        }
    }

    function upload_berkas($berkas,$jenis_berkas){
        //jenis_berkas, 1='file ijazah', 2=sk kontrak
        $this->load->library('upload');
		//$nmfile = $noreg."_sert_ke_".$serti_ke; 
		if($jenis_berkas=='1'){
            $lokasi = FCPATH.'assets/files/doc_ijazah/';
        }else if($jenis_berkas=='2'){
            $lokasi = FCPATH.'assets/files/doc_kontrak/';
        }
		
		$config['encrypt_name'] = TRUE;
		$config['upload_path'] = $lokasi; //path folder
		$config['allowed_types'] = 'pdf'; //type yang dapat diakses bisa anda sesuaikan
		$config['max_size'] = '500'; //maksimum besar file 2M
		//$config['max_width']  = '2642'; //lebar maksimum 1288 px
		//$config['max_height']  = '3600'; //tinggi maksimu 768 px
		//$config['file_name'] = $nmfile; //nama yang terupload nantinya

		$this->upload->initialize($config);
		
		if($berkas['name'])
		{
			if ($this->upload->do_upload('berkas'))
			{
				$fl = $this->upload->data();
				$update_data = array("status"=>true,'nama_file' =>$fl['file_name']);
				
			}else{
				$update_data = array("status"=>false);
                echo "gagal";
                exit();
			}
		}

        return $update_data;
    }
    
}