<?php
defined('BASEPATH') OR exit('No direct script access allowed');
error_reporting(0);

class Meteorologi extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('m_data');
        //$this->load->library('report');
    }

    public function index()   {
        $this->load->view('v_header');
        $this->load->view('Meteorlogi/v_meteorologi');
        $this->load->view('v_footer');
    }

    public function suhu()  {

        $this->load->view('v_header');
        $this->load->view('Meteorlogi/v_suhu', $data);
        $this->load->view('v_footer');
    }

    public function tekanan()  {
        $this->load->view('v_header');
        $this->load->view('Meteorlogi/v_tekanan');
        $this->load->view('v_footer');
    }

    public function kelembaban()  {
        $this->load->view('v_header');
        $this->load->view('Meteorlogi/v_kelembaban');
        $this->load->view('v_footer');
    }

    public function hujan()  {
        $this->load->view('v_header');
        $this->load->view('Meteorlogi/v_hujan');
        $this->load->view('v_footer');
    }

    public function penguapan()  {
        $this->load->view('v_header');
        $this->load->view('Meteorlogi/v_penguapan');
        $this->load->view('v_footer');
    }

    public function penyinaran()  {
        $this->load->view('v_header');
        $this->load->view('Meteorlogi/v_penyinaran');
        $this->load->view('v_footer');
    }


}
