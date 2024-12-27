<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public $db;
	public $session;
	public $form_validation;
	public function __construct() {
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('url');
	}
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

	public function login(){
		$this->load->view('template_views/header');
		$this->load->view('login');
		$this->load->view('template_views/footer');
	}

	public function signup(){
		$this->load->view('template_views/header');
		$this->load->view('signup');
		$this->load->view('template_views/footer');
	}
}
