<?php
/**
 * Created by PhpStorm.
 * User: rida.n
 * Date: 4/4/2019
 * Time: 10:37 AM
 */

class Categories extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->model('Post_model');
        $this->load->model('Category_model');
    }

    public function index(){
        $data['title'] = 'CATEGORIES LIST';

        $data['categories'] = $this->Category_model->get_categories();

        $this->load->view('templates/header');
        $this->load->view('categories/index', $data);
        $this->load->view('templates/footer');
    }

    public function create(){
        //Check Login
        if(!$this->session->userdata('logged_in')){
            redirect('users/checkLogin');
        }
        $data['title'] = 'CREATE CATEGORY';

        $this->form_validation->set_rules('category_name', 'Category Name','required');

        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header');
            $this->load->view('categories/create',$data);
            $this->load->view('templates/footer');
        }
        else{
            $this->Category_model->create_category();
            //Set Message
            $this->session->set_flashdata('category_created','Your category successfully');
            redirect('categories/');
        }
    }

    public function posts($category_id){
        $data['title'] = $this->Category_model->get_category($category_id)->fld_category_name;

        $data['posts'] = $this->Post_model->get_posts_by_category($category_id);


        $this->load->view('templates/header');
        $this->load->view('posts/index', $data);
        $this->load->view('templates/footer');

    }

}