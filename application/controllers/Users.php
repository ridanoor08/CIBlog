<?php
/**
 * Created by PhpStorm.
 * User: rida.n
 * Date: 4/7/2019
 * Time: 4:42 PM
 */

class Users extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index()
    {
        $data['title'] = "Dashboard";

        $this->load->view('templates/header');
        $this->load->view('users/index', $data);
        $this->load->view('templates/footer');
    }
    public function register(){

        $data['title'] = "SIGN UP";

        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'E-mail', 'required|valid_email|callback_check_email_exists');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');
        $this->form_validation->set_rules('zipcode', 'Zip Code', 'required');

        if($this->form_validation->run() == false){
            $this->load->view('templates/header');
            $this->load->view('users/register',$data);
            $this->load->view('templates/footer');
        }
        else{
            //Encrypt Password
            $enc_password = md5($this->input->post('password'));
            $this->User_model->register($enc_password);
            //Set Message
            $this->session->set_flashdata('user_registered','You are registered successfully');

            redirect('users/register');
        }
    }

    //Check if email aleady exists
    public function check_email_exists($email){
        $this->form_validation->set_message('check_email_exists', ' User with same email already exists, Please choose a diffrerent email.');
        if($this->User_model->check_email_exists($email)){
            return true;
        }
        else{
            return false;
        }

    }

    public function checkLogin(){
        $data['title'] = "SIGN IN";

        $this->form_validation->set_rules('email', 'E-mail', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'required');

        if($this->form_validation->run() == false){
            $this->load->view('templates/header');
            $this->load->view('users/login',$data);
            $this->load->view('templates/footer');
        }
        else{
            $this->verifyUser();
        }
    }

    public function verifyUser(){
        $email = $this->input->post('email');
        $password = md5($this->input->post('password'));

        $data = array(
            'email'  => $email,
            'password'     => $password
        );
        $this->session->set_userdata($data);
        if($this->User_model->login($email, $password)){
            redirect('users/index');
        }
        else{

            $this->session->set_flashdata('login_failed', 'Incorrect Email or Password. Please try again.');
            redirect('users/checkLogin');
        }
    }

    public function logout(){
        $this->session->unset_userdata('$val');
        $this->session->sess_destroy();
        redirect('users/checkLogin');
    }
}