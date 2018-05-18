<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class publikasi extends CI_Controller {

    public function index() {
        $this->load->view('v_header');
        $this->load->view('Publikasi/v_publikasi');
        $this->load->view('v_footer');
    }

    public function artikel() {
        $this->load->view('v_header');
        $this->load->view('Publikasi/v_artikel');
        $this->load->view('v_footer');
    }

    public function detailArtikel() {
        $this->load->view('v_header');
        $this->load->view('Publikasi/v_detailArtikel');
        $this->load->view('v_footer');
    }
    public function layananOnline() {
        $this->load->view('v_header');
        $this->load->view('Publikasi/v_katalog');
        $this->load->view('v_footer');
    }

    public function pemesanan() {
        $this->load->view('v_header');
        $this->load->view('Publikasi/v_pemesanan');
        $this->load->view('v_footer');
    }

}
