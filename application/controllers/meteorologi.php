<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Meteorologi extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('m_data');
    }
    
    public function index()   {
        $this->load->view('v_header');
        $this->load->view('v_meteorologi');
        $this->load->view('v_footer');
    }
    
    public function suhu()  {
        $tahun = 1994;
        $where = array(
            "TahunIklim" => $tahun 
        );
        $where = array_filter($where);
        $data = array(
            "detail" => $this->m_data->get_data("tb_daily_iklim", $where)->result()
        );
       // $this->load->view('v_header');
        //$this->load->view('v_print_iklim2',$data);
        $this->load->view('test', $data);
       // $this->load->view('v_footer');
    }
    
    public function tekanan()  {
        $this->load->view('v_header');
        $this->load->view('v_tekanan');
        $this->load->view('v_footer');
    }
    
    public function kelembaban()  {
        $this->load->view('v_header');
        $this->load->view('v_kelembaban');
        $this->load->view('v_footer');
    }
    
    public function hujan()  {
        $this->load->view('v_header');
        $this->load->view('v_hujan');
        $this->load->view('v_footer');
    }
    
    public function penguapan()  {
        $this->load->view('v_header');
        $this->load->view('v_penguapan');
        $this->load->view('v_footer');
    }
    
    public function penyinaran()  {
        $this->load->view('v_header');
        $this->load->view('v_penyinaran');
        $this->load->view('v_footer');
    }
    
    
}