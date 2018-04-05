<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function index()    {
		$this->load->view('v_header');
        $this->load->view('v_sejarah');
        $this->load->view('v_footer');
	}
    
    public function visidanmisi()   {
        $this->load->view('v_header');
        $this->load->view('v_visimisi');
        $this->load->view('v_footer');
    }
    
    public function struktur()  {
        $this->load->view('v_header');
        $this->load->view('v_struktur');
        $this->load->view('v_footer');
    }
}
