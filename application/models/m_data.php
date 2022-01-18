<?php 

class M_data extends CI_Model{

	function tampil_data(){
		return $this->db->get('m_thl');
	}
 
	function input_data($data,$table){
		$this->db->insert($table,$data);
		return $this->db->affected_rows();
	}

	function update_data_utama($id_pegawai,$data){
		$this->db->where('id_pegawai', $id_pegawai);
		$this->db->update('m_thl', $data);
		return $this->db->affected_rows();
	}

	// function edit_data($where,$table){		
	// 	$this->db->where($where);
	// 	$r=$this->db->get($table);

	// 	return $r->row();
	
    // }

	function detail_data($id){
		/* $id = $this->input->post('id_pegawai');
		$this->db->select('*');
		$this->db->from('m_jenjang');
		$this->db->join('m_thl', 'm_thl.id_pegawai = m_jenjang.pegawai_id', 'left');
		return $this->db->get_where('m_thl.id_pegawai',$id); */
		$sql="select * from m_thl
			left join m_jenjang on m_jenjang.pegawai_id=m_thl.id_pegawai
			  where m_thl.id_pegawai='$id'";
		return $this->db->query($sql)->result();
    }

    function detail_data_kontrak($id){
		//$id = $this->input->post('id_riwayat');
		/* $this->db->select('*');
		$this->db->from('m_riwayat_kontrak');
		$this->db->join('m_thl', 'm_thl.id_pegawai = m_riwayat_kontrak.id_pegawai', 'left'); */
		$sql="select * from m_thl left join m_riwayat_kontrak on m_thl.id_pegawai = m_riwayat_kontrak.id_pegawai
				where m_thl.id_pegawai='$id'";
		return $this->db->query($sql)->result();
    }

	function edit_data($id){
		//$id = $this->input->post('id_pegawai');
		$this->db->select('*');
		$this->db->from('m_jenjang');
		$this->db->join('m_thl', 'm_thl.id_pegawai = m_jenjang.pegawai_id', 'left');
		$this->db->where('m_jenjang.pegawai_id',$id);
		//var_dump($this->db->last_query());
		return $this->db->get();
    }	

	function edit_pendidikan($id){
		$this->db->select('*');
		$this->db->from('m_jenjang');
		$this->db->join('m_thl', 'm_thl.id_pegawai = m_jenjang.pegawai_id', 'left');
		$this->db->where('m_jenjang.id_jenjang',$id);
		$query = $this->db->get();
		return $query->result_array();
    }	

    /* function tambahpendidikan()
	{
		$this->db->where($where);
		$r=$this->db->get($table);

		return $r->row();
	} */

    function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);

		return $this->db->affected_rows();
	}

	function hapus_data($where,$table){
	$this->db->where($where);
	$this->db->delete($table);
	}	

	function total_pegawai()
	{
		$this->db->select('count(id_pegawai) as total');
		$query = $this->db->get('m_thl');
		return $query;
	}

	function pendidikan($id)
	{
		$this->db->select('*');
		$this->db->from('m_thl');
		$this->db->join('m_jenjang', 'm_jenjang.pegawai_id = m_thl.id_pegawai', 'left');
		$this->db->where('id_pegawai', $id);

		$query	= $this->db->get();
		return $query;
	}

	/* function update_pendidikan ($id)
	{
		$this->db->where($where);
		$this->db->update($table,$data);

		return $this->db->affected_rows();
	} */

	function tambahkontrak($id){
		$id = $this->input->post('id_pegawai');
		$this->db->select('*');
		$this->db->from('m_riwayat_kontrak');
		$this->db->join('m_thl', 'm_thl.id_pegawai = m_riwayat_kontrak.id_pegawai', 'left');
		return $this->db->get_where($id);
    }

	/* function tambah_riwayat_kontrak()
	{
		$this->db->where($where);
		$r=$this->db->get($table);

		return $r->row();
	} */

	// function edit_kontrak ($id)
	// {
	// 	$this->db->where($where);
	// 	$this->db->update($table,$data);

	// 	return $this->db->affected_rows();
	// }
	// 
	// 
	

	function get_kontrak($id){
		$sql="select m_thl.*
			 ,m_riwayat_kontrak.id_riwayat
			 ,m_riwayat_kontrak.tgl_mulai_kontrak
			 ,m_riwayat_kontrak.tgl_akhir_kontrak
			 ,m_riwayat_kontrak.no_kontrak
			 ,m_riwayat_kontrak.tgl_kontrak
			 ,m_riwayat_kontrak.is_kontrak_awal
			  from m_riwayat_kontrak
			  left join m_thl on m_riwayat_kontrak.id_pegawai=m_thl.id_pegawai
			  where m_riwayat_kontrak.id_riwayat='$id'";
		return $this->db->query($sql)->row();
    }
	
	function update_kontrak($id_kontrak,$data){
		$this->db->where('id_riwayat',$id_kontrak);
		$this->db->update('m_riwayat_kontrak',$data);

		return $this->db->affected_rows();
	}

	function update_pendidikan($id_riwayat,$data){
		$this->db->where('id_jenjang',$id_riwayat);
		$this->db->update('m_jenjang',$data);

		return $this->db->affected_rows();
	}

}

