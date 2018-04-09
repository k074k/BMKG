<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publikasi extends CI_Controller {
    
    public function index() {
        $this->load->view('v_header');
        $this->load->view('v_publikasi');
        $this->load->view('v_footer');
    }
    
    public function artikel() {
        $this->load->view('v_header');
        $this->load->view('v_artikel');
        $this->load->view('v_footer');
    }
    
    public function detailArtikel() {
        $this->load->view('v_header');
        $this->load->view('v_detailArtikel');
        $this->load->view('v_footer');
    }
    
}