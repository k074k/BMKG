<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_data');
	}
	public function index(){
		$data['tb_gempa']=$this->m_data->ambil_data()->result();
		$this->load->view('v_header');
		$this->load->view('v_dashboard',$data);
		$this->load->view('v_footer');
	}
	public function meteorologi(){
		$this->load->view('v_header');
		$this->load->view('v_meteorologi');
		$this->load->view('v_footer');
	}
}
