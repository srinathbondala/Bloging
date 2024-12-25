<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashbord extends CI_Controller {

    public function index($parm = 10, $value=20){
        $data=[
            'parm' => $parm,
        ];
        $this->load->view('template_views/header');
        $this->load->view('dashbord',$data);
        $this->load->view('template_views/footer');
    }
} 
?>