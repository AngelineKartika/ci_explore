<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Pesan');
    }

     function index()
    {
        $data['pesan']= $this->M_Pesan->tampilkanData()->result();
        $this->load->view('V_Pesan',$data);

    }

    function sudah()
    {
        $data['pesan']= $this->M_Pesan->tampilkanDataTerbalas()->result();
        $this->load->view('V_Pesan_Terbalas',$data);

    }

    function hapusData($id){
        $this->M_Pesan->kirimDataTerbalas($id);
        $data['pesan']= $this->M_Pesan->tampilkanDataTerbalas()->result();
        $this->load->view('V_Pesan_Terbalas',$data);
        
        
    }

    function contactBerhasil(){
      $data['pesan']= $this->M_Pesan->tampilkanData()->result();
        $this->load->view('contactUsTerkirim',$data);
    }


  }
  ?>
