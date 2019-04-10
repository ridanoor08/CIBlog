<?php
/**
 * Created by PhpStorm.
 * User: rida.n
 * Date: 4/2/2019
 * Time: 6:26 PM
 */

class Category_model extends CI_Model
{

    public function create_category(){

        $data = array(
            'fld_category_name' => $this->input->post('category_name'),
            'fld_user_id' => $this->session->userdata('user_id'),
        );

        $query = $this->db->insert('tbl_categories', $data);
        return $query;
    }

    public function get_categories(){
        $query = $this->db->get('tbl_categories');
        return $query->result_array();

    }

    public function get_category($category_id){

        $query = $this->db->get_where('tbl_categories', array('fld_category_id' => $category_id) );
        return $query->row();

    }

    public function delete_category($id){

        $this->db->where('fld_category_id', $id);
        $this->db->delete('tbl_categories');
        return true;
    }



}