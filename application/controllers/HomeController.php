<?php
/**
 * Created by PhpStorm.
 * User: rida.n
 * Date: 3/28/2019
 * Time: 12:32 PM
 */

class HomeController extends CI_Controller
{
    public function index(){
        $this->load->view('dashboardView');
    }
  
}