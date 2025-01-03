<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class Blog_Lib {

        protected $CI;

        public function __construct() {
            $this->CI =& get_instance();
            $this->CI->load->model('Blog_model');
            // $this->load->database();
        }

        public function getAllPosts(){
            return $this->CI->Blog_model->get_all_posts();
        }

        public function addPost($title, $content, $author_id,$image_link){
            return $this->CI->Blog_model->create_post($title, $content, $author_id,$image_link);
        }

        protected function uploadImage(){
            
        }
    }
?>