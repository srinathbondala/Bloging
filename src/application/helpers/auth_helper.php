<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
    function is_logged_in(){
        $CI =& get_instance();
        if (!$CI->load->is_loaded('session')) {
            $CI->load->library('session');
        }
        return $CI->session->userdata('is_logged_in') === TRUE;
    }
    // function has_role($role) {
    //     $CI =& get_instance();
    //     return $CI->session->userdata('role') === $role;
    // }
    
    // function logout_user() {
    //     $CI =& get_instance();
    //     $CI->session->unset_userdata('is_logged_in');
    //     $CI->session->unset_userdata('role');
    //     redirect('auth/login');
    // }
?>