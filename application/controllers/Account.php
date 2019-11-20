<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller{
 
    function __construct()
    {
          parent::__construct();
          $this->load->model('M_Account');
    }

     function index()
    {
        //$id_pengguna= $this->session->userdata("id_pengguna");
        $data['pengguna']= $this->M_Account->tampilkanData()->result();
        $this->load->view('V_Account',$data);

    }

    

    public function EditData($id_pengguna){
      //$id_pengguna= $this->session->userdata("id_pengguna");
      $where = array('id_pengguna'=>$id_pengguna);
      $record['pengguna']=$this->M_Account->pilih_record('pengguna',$where)->result();
      $this->load->view('V_Edit_Account',$record);
    }


    public function UpdateData(){
      $tangkapId      = $this->input->post('id');
      $tangkapNama    = $this->input->post('nama');
      //$tangkapPass    =$this->input->post('pass');
      $tangkapEmail   =$this->input->post('email');
      $tangkapAlamat  =$this->input->post('alamat');
      $tangkapTelp    =$this->input->post('telp');
      $tangkapJK      =$this->input->post('jk');
      $tangkapStatus  =$this->input->post('status');


      $data = array (
        'id_pengguna'       => $tangkapId,
        'nama_pengguna'     => $tangkapNama,
        //'kata_sandi'        => $tangkapPass,
        'email_pengguna'    => $tangkapEmail,
        'alamat_pengguna'   => $tangkapAlamat,
        'telp_pengguna'     => $tangkapTelp,
        'jenis_kelamin'     => $tangkapJK,
        'status_pengguna'   => $tangkapStatus

      );
      $where=array('id_pengguna'=>$tangkapId);
      $this->M_Pengguna->ubah_record($where,'pengguna',$data);
      redirect('Pengguna');
    }


  }
