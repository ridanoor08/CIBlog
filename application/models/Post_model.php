<?php
/**
 * Created by PhpStorm.
 * User: rida.n
 * Date: 4/1/2019
 * Time: 11:16 AM
 */

class Post_model extends CI_Model
{


    public function get_posts($slug = FALSE, $limit = FALSE, $offset = FALSE ){
        if($limit){
            $this->db->limit($limit, $offset);
        }
        if($slug === FALSE){
            $this->db->order_by('tbl_posts.fld_post_id', 'DESC');
            $this->db->join('tbl_categories', 'tbl_categories.fld_category_id = tbl_posts.fld_cat_id');
            $query = $this->db->get('tbl_posts');
            return $query->result_array();
        }
        $query = $this->db->get_where('tbl_posts', array('fld_slug' => $slug));
        return $query->row_array();
    }

    public function create_post($post_image){
        $slug = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($this->input->post('title'))));
        $count = 0;

        while(true)
        {
            $this->db->select('fld_slug');
            $this->db->from('tbl_posts');
            $this->db->like("fld_slug","$slug");
            $query=$this->db->get();
            if ($query->num_rows() == 0) break;
            $slug = $slug . '-' . (++$count);  // Recreate new temp name
        }

        $data = array(
            'fld_title' => $this->input->post('title'),
            'fld_slug' => $slug,
            'fld_body' => trim($this->input->post('body')),
            'fld_cat_id' => $this->input->post('category_id'),
            'fld_user_id' => $this->session->userdata('user_id'),
            'fld_post_image' => $post_image
        );

        $query = $this->db->insert('tbl_posts', $data);
        return $query;
    }

    public function find($id){

        $query = $this->db->get_where('tbl_posts', array('fld_post_id' => $id));
        return $query->row();
    }

    public function delete_post($id){

        $this->db->where('fld_post_id', $id);
        $this->db->delete('tbl_posts');
        return true;
    }

    public function update_post(){
        $slug = preg_replace('/[^a-z0-9]+/i', '-', trim(strtolower($this->input->post('title'))));

        $data = array(
            'fld_title' => $this->input->post('title'),
            'fld_slug' => $slug,
            'fld_body' => trim($this->input->post('body')),
            'fld_cat_id' => $this->input->post('category_id')
        );

        $this->db->where('fld_post_id', $this->input->post('id'));
        $this->db->update('tbl_posts', $data);
    }

    public function get_posts_by_category($category_id){
        $this->db->order_by('tbl_posts.fld_post_id', 'DESC');
        $this->db->join('tbl_categories', 'tbl_categories.fld_category_id = tbl_posts.fld_cat_id');
        $this->db->where('fld_cat_id', $category_id);
        $query = $this->db->get('tbl_posts' );
        //$query = $this->db->get_where('tbl_posts', array('fld_category_id' => $category_id));
        return $query->result_array();
    }
}