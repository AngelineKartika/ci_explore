<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('M_Login');
    }

     function index()
    {
        $this->load->view('Login');
    }

    function auth(){
        $email    = $this->input->post('email_pengguna',TRUE);
        $password = md5($this->input->post('kata_sandi',TRUE));
        $validate = $this->M_Login->validate($email,$password);
        if($validate->num_rows() > 0){
            $data  = $validate->row_array();
            $name  = $data['nama_pengguna'];
            $email = $data['email_pengguna'];
            $status = $data['status_pengguna'];
            $sesdata = array(
                'nama_pengguna'         => $name,
                'email_pengguna'        => $email,
                'status_pengguna'       => $status,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($sesdata);
            // access login for admin
            if($status === 'Admin'){
                redirect('page');
    
            // access login for tour guide
            }elseif($status === 'Tourguide'){
                redirect('page/tourguide');
    
            // access login for customer
            }else{
                redirect('page/customer');
            }
        }
        
        else{
            echo $this->session->set_flashdata('msg','Username or Password is Wrong');
            redirect('login');
        }
      }
    
      function logout(){
          $this->session->sess_destroy();
          redirect('login');
      }

}
?>
