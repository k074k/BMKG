<?php
class M_data extends CI_Model{
	
	function ambil_data(){
		return $this->db->get('tb_gempa');
	}

	function get_data($table, $where){
		return $this->db->get_where($table, $where);
	}
	
}
