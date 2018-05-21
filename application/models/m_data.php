<?php
class M_data extends CI_Model{
	
	function ambil_data(){
		return $this->db->get('tb_gempa');
	}

	public function get_buletin(){
		return $this->db->get('tb_buletin');
  	}

  	function get_buletin_list($number, $offset){
		$query = $this->db->get('tb_buletin', $number, $offset);		
		return $query;
	}
}
