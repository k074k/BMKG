<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Meteorologi extends CI_Controller {
    
    public function suhu()  {
        $this->load->view('v_header');
        $this->load->view('v_suhu');
        $this->load->view('v_footer');
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