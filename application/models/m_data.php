<?php
class M_data extends CI_Model{
	
	public function ambil_data(){
		return $this->db->get('tb_gempa');
	}

	public function get_data($table){
		return $this->db->get($table);
  	}

  	public function get_buletin_list($number, $offset){
  		$this->db->order_by(1, "desc");
		$query = $this->db->get('tb_buletin', $number, $offset);		
		return $query;
	}

	public function search($keyword){
		$this->db->like('judul', $keyword);
		$result = $this->db->get('tb_buletin')->result();
		return $result;
	}
}
