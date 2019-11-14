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
            redirect('#contact-section');

      }

  }
?>
