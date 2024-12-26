<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model {

    public function create_post($title, $content, $author_id) {
        $data = array(
            'title' => $title,
            'content' => $content,
            'author_id' => $author_id,
            'created_at' => date('Y-m-d H:i:s')
        );

        if ($this->db->insert('blog_posts', $data)) {
            return $this->db->insert_id();
        }
        return false;
    }

    public function get_all_posts() {
        $query = $this->db->get('blog_posts');
        return $query->result_array();
    }

    public function get_post_by_id($post_id) {
        $query = $this->db->get_where('blog_posts', array('id' => $post_id));
        return $query->row_array();
    }

    public function update_post($post_id, $title, $content) {
        $data = array(
            'title' => $title,
            'content' => $content,
            'updated_at' => date('Y-m-d H:i:s')
        );

        $this->db->where('id', $post_id);
        return $this->db->update('blog_posts', $data);
    }

    public function delete_post($post_id) {
        return $this->db->delete('blog_posts', array('id' => $post_id));
    }

    public function get_posts_by_author($author_id) {
        $query = $this->db->get_where('blog_posts', array('author_id' => $author_id));
        return $query->result_array();
    }

    public function get_post_count() {
        return $this->db->count_all('blog_posts');
    }

    public function search_posts($keyword, $limit = null, $offset = null) {
        $this->db->like('title', $keyword);
        $this->db->or_like('content', $keyword);

        if ($limit) {
            $this->db->limit($limit, $offset);
        }

        $query = $this->db->get('blog_posts');
        return $query->result_array();
    }
}
?>
