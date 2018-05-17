<?php
class M_data extends CI_Model{
	
	function ambil_data(){
		return $this->db->get('tb_gempa');
	}

	function get_sum($where){
		$sql = "SELECT *  FROM tb_daily_iklim WHERE TahunIklim = ? && T07 != 0 && T13 != 0 && T18 != 0 ORDER BY TahunIklim ASC";
		
		return $this->db->query($sql, $where);
	}

	//function get_t07_jan($table, $where){
	//	$this->db->select_sum('T07', 'Bln');
	//	$query = $this->db->get_where($table, $where);
	//	return $query;
	//}

	//function get_t07_feb($table, $where){
	//	$this->db->select_sum('T07', 'Bln');
	//	$query = $this->db->get_where($table, $where);
	//	return $query;
	//}

	//function get_t07_mar($table, $where){
	//	$this->db->select_sum('T07', 'Bln');
	//	$query = $this->db->get_where($table, $where);
	//	return $query;
	//}
}
