<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()    {
		$this->load->view('v_header');
        $this->load->view('v_dashboard');
        $this->load->view('v_footer');
	}
    
    public function klimatologi()   {
        $this->load->view('v_header');
        $this->load->view('v_klimatologi');
        $this->load->view('v_footer');
    }
    
    public function meteorologi()   {
        $this->load->view('v_header');
        $this->load->view('v_meteorologi');
        $this->load->view('v_footer');
    }
    
    public function publikasi() {
        $this->load->view('v_header');
        $this->load->view('v_publikasi');
        $this->load->view('v_footer');
    }
}