<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Contact');
    }
       function index()
      {
          $this->load->view('Home');
          $this->load->model('M_Contact');
      }

      function insertTable(){

            $tangkapNama    =$this->input->post('nama');
            $tangkapEmail   =$this->input->post('email');
            $tangkapTopik   =$this->input->post('topik');
            $tangkapPesan   =$this->input->post('pesan');


            $data=array(//petik satu itu dalam field db
                'nama_pengguna'    => $tangkapNama,
                'email_pengguna'   => $tangkapEmail,
                'topik_pesan'      => $tangkapTopik,
                'waktu_pesan'      => date('Y-m-d'),
                'pesan'            => $tangkapPesan

            );

             $this->M_Contact->insertTable('pesan',$data);

             //email

             $from_email = $this->input->post('email');
             $to_email = "angelinekartikaa@gmail.com";
             //Load email library
             $this->load->library('email');
             $this->email->from($from_email, 'Identification');
             $this->email->to($to_email);
             $this->email->subject('Send Email Codeigniter');
             $this->email->message('The email send using codeigniter library');
             //Send mail
             if($this->email->send())
                 $this->session->set_flashdata("email_sent","Congratulation Email Send Successfully.");
             else
                 $this->session->set_flashdata("email_sent","You have encountered an error");
                 $this->load->view('contact_email_form');

            //email

            redirect('#contact-section');

      }

  }
?>
