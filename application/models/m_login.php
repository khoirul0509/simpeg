<?php 

class M_login extends CI_Model{	
	function cek_login($username,$password){		
		// return $this->db->get_where($table,$where);
		
		$this->db->select('*');
		$this->db->from('m_admin');
		$this->db->where('username', $username);
		$this->db->where('password', md5($password));
		// $this->db->where('level', $Value);
		$this->db->limit(1);

		$query	=	$this->db->get();

		if ($query->num_rows() == 1) {
			$result	= $query->result();
			return $result;
		} else {
			return FALSE;
		}
	}	
}