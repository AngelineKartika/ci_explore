<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model(array('M_Login', 'M_Admin','M_Tourguide'));
    }

     function index()
    {
        $this->load->view('Login');
    }

    function auth(){
        $email    = $this->input->post('email_pengguna',TRUE);//form
        $password = md5($this->input->post('kata_sandi',TRUE));

        $where=array(
            'email_pengguna' =>$email,
            'kata_sandi'     =>$password
        );
        
        $baris = $this->M_Login->check_user('pengguna',$where)->num_rows();
        
        if($baris > 0){
            $data = $this->M_Login->check_user('pengguna',$where)->row_array();
       
            $email = $data['email_pengguna'];
            $password = $data['kata_sandi'];
            $status = $data['status_pengguna'];
            $sesdata = array(
                
                'email_pengguna'        => $email,
                'kata_sandi'            => $password,
                'status_pengguna'       => $status,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($sesdata);
            // access login for admin
        
            if($status === 'Admin'){
                redirect('page');
    
            // access login for tour guide
            }else if($status === 'Tourguide'){
                redirect('page/tourguide');
    
            // access login for customer
            }else {
                redirect($status);
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
