<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Base_Controller {
    public $db;
    public $blog_lib;
    public $Blog_model;
    public $session;

    public function __construct() {
        parent::__construct();
        $this->load->library('Blog_lib');
    }

    public function index(){
        try{
            $blogs = $this->blog_lib->getAllPosts();
            $data=[
                'blogs' => $blogs,
            ];

            $this->load->view('template_views/header');
            $this->load->view('dashboard',$data);
            $this->load->view('template_views/footer');
        }
        catch(Exception $e){

            log_message('error', 'Database connection error: ' . $e->getMessage());
            echo "<script>console.log('Error: " . $e->getMessage() . "');</script>";
            show_error('An error occurred while connecting to the database. Please try again later.');

        }
    }
} 
?>