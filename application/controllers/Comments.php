<?php
/**
 * Created by PhpStorm.
 * User: rida.n
 * Date: 4/4/2019
 * Time: 3:06 PM
 */

class Comments extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Post_model');
        $this->load->model('Comment_model');
    }

    public function create($post_id){
        $slug = $this->input->post('slug');
        $data['post'] = $this->Post_model->get_posts($slug);
        $data['comments'] = $this->Comment_model->get_comments($post_id);

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'E-Mail', 'required|valid_email');
        $this->form_validation->set_rules('comment', 'comment', 'required');

        if($this->form_validation->run() === FALSE){
            $this->load->view('templates/header');
            $this->load->view('posts/view', $data);
            $this->load->view('templates/footer');
        }
        else{
            $this->Comment_model->create_comment($post_id);
            redirect('posts/'.$slug);
        }
    }

}