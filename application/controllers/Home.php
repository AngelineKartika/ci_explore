<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_Tour','M_Kota','M_Promo','M_Contact'));
    }
       function index()
      {
          $data['tour'] = $this->M_Tour->tampilkanData()->result();
          $data['kota'] = $this->M_Kota->tampilkanData()->result();
          $data['promo'] = $this->M_Promo->tampilkanData()->result();
          $this->load->view('Home',$data);
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
      function getDosenByAjax(){
        $kota=$this->input->post('kota'); //dollar disni
        $where=array('kota'=>$kota); //sama kyk dollar disini
        $data=$this->M_Tour->get_dosen_by_ajax($where);
        echo json_encode($data);
      }

  }
?>
