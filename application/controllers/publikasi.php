<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class publikasi extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('m_data');
        $this->load->library('pagination');
        $this->load->helper(array('url', 'download'));
        
    }

    public function index() {
        $data['buletin'] = $this->m_data->get_buletin()->result();
        
        $jumlah_data = $this->m_data->jumlah_data();
        $config['base_url'] = base_url().'publikasi/index/';
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 5;
        $from = $this->uri->segment(4);
        $this->pagination->initialize($config);
        $data['page'] = $this->m_data->data($config['per_page'], $from);

        $this->load->view('v_header');
        $this->load->view('v_publikasi');
        $this->load->view('v_footer');
    }

    public function download(){
        $file = $this->uri->segment(4);
        force_download($file, NULL);
    }

    public function artikel() {
        $data['buletin'] = $this->m_data->get_buletin()->result();
        $this->load->view('v_header');
        $this->load->view('v_artikel');
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
