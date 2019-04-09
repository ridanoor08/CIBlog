<?php
/**
 * Created by PhpStorm.
 * User: rida.n
 * Date: 4/7/2019
 * Time: 5:00 PM
 */

class User_model extends CI_Model
{

    public function register($enc_password){
        $data =array(
            'fld_name' => $this->input->post('name'),
            'fld_email' => $this->input->post('email'),
            'fld_password' => $enc_password,
            'fld_zipcode' => $this->input->post('zipcode')
        );

        return $this->db->insert('tbl_users', $data);
    }

    public function check_email_exists($email){
        $query = $this->db->get_where('tbl_users', array('fld_email' => $email));
        $result = $query->row_array();
        if(empty($result)){
            return true;
        }
        else{
            return false;
        }
    }

    public function login($email, $password){

        $this->db->where('fld_email', $email);
        $this->db->where('fld_password', $password);
        $query = $this->db->get('tbl_users');
        if($query->num_rows() == 1){
            return $query->row(0)->fld_user_id;
        }
        else{
            return false;
        }
    }
}