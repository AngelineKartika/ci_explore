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

    function hapusData($id){
      $where=array('id_pesan'=>$id);
      $this->M_Pesan->hapusRecord($where,'pesan');
      redirect('Pesan');
    }


  }
