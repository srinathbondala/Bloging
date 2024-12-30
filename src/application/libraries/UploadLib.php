<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UploadLib {
    protected $CI;

    public function __construct() {
        $this->CI =& get_instance();
        $this->CI->load->library('upload');
    }
    public function saveImage($input_name, $upload_path = APPPATH.'uploads/') {
        $config['upload_path']   = $upload_path;
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size']      = 2048;
        $config['encrypt_name']  = TRUE;
        if (!is_dir($upload_path)) {
            mkdir($upload_path, 0777, TRUE);
        }

        $this->CI->upload->initialize($config);

        if (!$this->CI->upload->do_upload($input_name)) {
            return [
                'status' => false,
                'message' => $this->CI->upload->display_errors()
            ];
        }
        $upload_data = $this->CI->upload->data();
        $image_link = $upload_path . $upload_data['file_name'];

        return [
            'status' => true,
            'link' => $image_link
        ];
    }
}
