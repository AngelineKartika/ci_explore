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

            $id  =$data['id_pengguna'];
            $nama=$data['nama_pengguna'];
            $email = $data['email_pengguna'];
            $password = $data['kata_sandi'];
            $alamat   = $data['alamat_pengguna'];
            $telepon   = $data['telp_pengguna'];
            $jeniskelamin = $data['jenis_kelamin'];
            $status = $data['status_pengguna'];

            $sesdata = array(
                'id_pengguna'           => $id,
                'nama_pengguna'         => $nama,
                'email_pengguna'        => $email,
                'kata_sandi'            => $password,
                'alamat_pengguna'       => $alamat,
                'telp_pengguna'         => $telepon,
                'jenis_kelamin'         => $jeniskelamin,
                'status_pengguna'       => $status,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($sesdata);
            // access login for admin

            if($status === 'Admin'){
                redirect('page');

            // access login for tour guide
            }else if($status === 'Tourguide'){
                redirect('page');

            // access login for customer
            }else if($status === 'Customer'){
                redirect('page');


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
          redirect('home');
      }

}
?>
