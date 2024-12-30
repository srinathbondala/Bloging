<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

    public $db;
    public $blog_lib;
    public $Blog_model;
    public $session;
    public $uploadlib;
    public $upload;

    public function __construct() {
        parent::__construct();
        $this->load->library('Blog_lib');
    }


    public function add(){
        try{
            if($this->input->server('REQUEST_METHOD') === 'POST'){
                $this->handleAdd();
                // echo "hello";
            }
        }catch(Exception $e){
            log_message('error', 'error: ' . $e->getMessage());
        }
    }
    private function handleAdd() {
        $this->load->library('UploadLib');

        $title = $this->input->post('title', TRUE);
        $content = $this->input->post('description', TRUE);
        $auther_id = $this->input->post('author_id', TRUE);
        $upload_result = $this->uploadlib->saveImage('image');
        if (!$upload_result['status']) {
            $data['error'] = $upload_result['message'];
            // $this->load->view('blog_form', $data);
            print_r($data);
            return;
        }
        $image_link = $upload_result['link'];
        $blogs = $this->blog_lib->addPost($title, $content, $auther_id, $image_link);
    
        if ($blogs) {
            $data['success'] = 'Blog post created successfully!';
        } else {
            $data['error'] = 'Failed to create blog post.';
            if (file_exists($image_link)) {
                unlink($image_link);
            }
        }
        echo "Sucess!!!!";
    }

    private function deleteUploads(){
        $directory = './application/uploads/';

        $files = array_diff(scandir($directory), array('.', '..'));

        foreach ($files as $file) {
            $file_path = $directory . $file;
            if (is_file($file_path)) {
                unlink($file_path);
            }
        }
    }
} 
?>