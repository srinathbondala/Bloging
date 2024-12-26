<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
    public function index($parm = 10, $value=20){
        try{
            $data=[
                'parm' => $parm,
            ];
            $this->load->view('template_views/header');
            $this->load->view('dashbord',$data);
            $this->load->view('template_views/footer');
        }catch(Exception $e){
            log_message('error', 'Database connection error: ' . $e->getMessage());
            echo "<script>console.log('Error: " . $e->getMessage() . "');</script>";
            show_error('An error occurred while connecting to the database. Please try again later.');
        }
    }
} 
?>