<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//hello
class Login extends CI_Controller{

     function index()
    {
        $this->load->view('Login');
    }

}
?>
