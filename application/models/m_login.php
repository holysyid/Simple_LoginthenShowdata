<?php

class M_login extends CI_Model{
	function lihatdb($where,$table){
		return $this->db->get_where($table,$where);
	}
	
}
