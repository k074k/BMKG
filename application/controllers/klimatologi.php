<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Klimatologi extends CI_Controller {

    public function index()   {
        $this->load->view('v_header');
        $this->load->view('Klimatologi/v_klimatologi');
        $this->load->view('v_footer');
    }
}
