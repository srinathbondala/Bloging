<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('template_views/header');
		$this->load->view('welcome_message');
		$this->load->view('template_views/footer');
	}

	public function about(){
        $this->load->view('template_views/header');
        $this->load->view('about');
		$this->load->view('template_views/footer');
    }
}
