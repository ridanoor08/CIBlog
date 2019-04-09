<?php
/**
 * Created by PhpStorm.
 * User: rida.n
 * Date: 4/4/2019
 * Time: 1:50 PM
 */

class Comment_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function create_comment($post_id){
        $data = array(
            'fld_name' => $this->input->post('name'),
            'fld_email' => $this->input->post('email'),
            'fld_comment' => $this->input->post('comment'),
            'fld_post_id' => $post_id
        );

        $query = $this->db->insert('tbl_comments', $data);
        return $query;
    }

    public function get_comments($post_id){
        $query = $this->db->get_where('tbl_comments', array('fld_post_id'=>$post_id));
        return $query->result_array();
    }
}