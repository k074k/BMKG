<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Geofisika extends CI_Controller {

    public function index()   {
        $this->load->view('v_header');
        $this->load->view('v_geofisika');
        $this->load->view('v_footer');
    }
    public function petir()  {
        $this->load->view('v_header');
        $this->load->view('v_petir');
        $this->load->view('v_footer');
    }
}
