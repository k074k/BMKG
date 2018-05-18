<?php
class M_data extends CI_Model{
	
	function ambil_data(){
		return $this->db->get('tb_gempa');
	}

	public function get_buletin(){
		return $this->db->get('tb_buletin');
  	}

  	function data($number,$offset){
		return $query = $this->db->get('tb_buletin',$number,$offset)->result();		
	}
 
	function jumlah_data(){
		return $this->db->get('tb_buletin')->num_rows();
	}
}
