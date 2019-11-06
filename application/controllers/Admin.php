<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_Admin','M_Pengguna'));
    }

     function index()
    {
      $data['admin'] = $this->M_Admin->tampilkanData()->result();
      $data['pengguna'] = $this->M_Pengguna->tampilkanData()->result();
      $this->load->view('V_Admin',$data);

    }


    function tambahData()
    {
      $data['admin'] = $this->M_Admin->tampilkanData()->result();
      $data['pengguna'] = $this->M_Pengguna->tampilkanData()->result();
      $this->load->view('V_Input_Pengguna',$data);
    }

    function insertData()
    {
        $tangkapId     =$this->input->post('id');
        $tangkapIdp    =$this->input->post('id_pengguna');
      //di dalam petik satu pada post itu adalah name di input type


        $data=array(
            'id_admin'         => $tangkapId,
            'id_pengguna'   => $tangkapIdp,     //petik satu itu dalam field db
                );

        $this->M_Admin->insertTable('admin',$data);
        redirect('Admin');
    }

    public function EditData($id_pengguna){
      $where = array('id_pengguna'=>$id_pengguna);
      $record['pengguna']=$this->M_Pengguna->pilih_record('pengguna',$where)->result();
      $this->load->view('V_Edit_Admin',$record);
    }


    public function UpdateData(){
      $tangkapId      = $this->input->post('id');
      $tangkapNama    = $this->input->post('nama');
      $tangkapPass    =$this->input->post('pass');
      $tangkapEmail   =$this->input->post('email');
      $tangkapAlamat  =$this->input->post('alamat');
      $tangkapTelp    =$this->input->post('telp');
      $tangkapStatus  =$this->input->post('status');


      $data = array (
        'id_pengguna'       => $tangkapId,
        'nama_pengguna'     => $tangkapNama,
        'kata_sandi'        => $tangkapPass,
        'email_pengguna'    => $tangkapEmail,
        'alamat_pengguna'   => $tangkapAlamat,
        'telp_pengguna'     => $tangkapTelp,
        'status_pengguna'   => $tangkapStatus

      );
      $where=array('id_pengguna'=>$tangkapId);
      $this->M_Admin->ubah_record($where,'pengguna',$data);
      redirect('Admin');
    }



    function hapusData($id){
      $where=array('id_pengguna'=>$id);
      $this->M_Pengguna->hapusRecord($where,'pengguna');
      redirect('Admin');
    }


  }
