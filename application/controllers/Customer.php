<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_Customer','M_Pengguna','M_Promo'));
    }

     function index()
    {
      $data['customer'] = $this->M_Customer->tampilkanData()->result();
      $data['pengguna'] = $this->M_Customer->tampilkanData()->result();
      $data['promo'] = $this->M_Promo->tampilkanData()->result();
      $this->load->view('V_Customer',$data);

    }


    function tambahData()
    {
      $data['customer'] = $this->M_Customer->tampilkanData()->result();
      $data['pengguna'] = $this->M_Pengguna->tampilkanData()->result();
      $this->load->view('V_Input_Customer',$data);
    }

    function insertData()
    {
        $tangkapId     =$this->input->post('id');
        $tangkapIdp    =$this->input->post('id_pengguna'); //di dalam petik satu pada post itu adalah name di input type


        $data=array(
            'id_tg'         => $tangkapId,
            'id_pengguna'   => $tangkapIdp,     //petik satu itu dalam field db
                );

        $this->M_Customer->insertTable('customer',$data);
        redirect('Customer');
    }

    public function EditData($id_pengguna){
      $where = array('id_pengguna'=>$id_pengguna);
      $record['pengguna']=$this->M_Pengguna->pilih_record('pengguna',$where)->result();
      $this->load->view('V_Edit_Customer',$record);
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
      $this->M_Customer->ubah_record($where,'pengguna',$data);
      redirect('Customer');
    }
    function hapusData($id){
      $where=array('id_pengguna'=>$id);
      $this->M_Pengguna->hapusRecord($where,'pengguna');
      redirect('Customer');
    }


  }
