<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class publikasi extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('m_data');
        $this->load->library(array('pagination'));
        $this->load->helper(array('url', 'download', 'file', 'form'));
        $this->load->library('form_validation');

    }

    public function index() {
        // $data['buletin'] = $this->m_data->get_buletin()->result();

        // Konfigurasi Pagination
        $config['base_url'] = base_url('publikasi/index');
        $config['total_rows'] = $this->db->count_all('tb_buletin');
        $config['per_page'] = 5;
        $config['uri_segment'] = 3;
        $choice = $config['total_rows'] / $config['per_page'];
        $config['num_links'] = floor($choice);

        // Membuat Style Pagination
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data['data'] = $this->m_data->get_buletin_list($config['per_page'], $data['page']);

        $data['pagination'] = $this->pagination->create_links();


        $this->load->view('v_header');
        $this->load->view('Publikasi/v_publikasi', $data);
        $this->load->view('v_footer');
    }

    public function search(){
        $keyword = $this->input->get('search', TRUE);
        $data['buletin'] = $this->m_data->search($keyword);
        $this->load->view('v_header');
        $this->load->view('Publikasi/v_publikasi', $data);
        $this->load->view('v_footer');
    }
    /*
    public function download(){
        $file = $this->uri->segment(4);
        force_download($file, NULL);
    }
    */

    public function artikel() {
        // $data['buletin'] = $this->m_data->get_buletin()->result();

        // Konfigurasi Pagination
        $config['base_url'] = base_url('publikasi/artikel');
        $config['total_rows'] = $this->db->count_all('tb_buletin');
        $config['per_page'] = 5;
        $config['uri_segment'] = 3;
        $choice = $config['total_rows'] / $config['per_page'];
        $config['num_links'] = floor($choice);

        // Membuat Style Pagination
        $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';

        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        $data['data'] = $this->m_data->get_buletin_list($config['per_page'], $data['page']);

        $data['pagination'] = $this->pagination->create_links();


        $this->load->view('v_header');
        $this->load->view('Publikasi/v_artikel', $data);
        $this->load->view('v_footer');
    }

    /*
    public function detailArtikel() {
        $id = $this->input->post('artikel');
        $data = array(
            "data" => $id
        );

        $this->load->view('v_header');
        $this->load->view('Publikasi/v_detailArtikel', $data);
        $this->load->view('v_footer');
    }
    */

    public function layananOnline() {
        $data['tb_gempa'] = $this->m_data->ambil_data()->result();

        $this->load->view('v_header');
        $this->load->view('Publikasi/v_katalog', $data);
        $this->load->view('v_footer');
    }

    public function pemesanan() {
        $this->load->view('v_header');
        $this->load->view('Publikasi/v_pemesanan');
        $this->load->view('v_footer');
    }

}
