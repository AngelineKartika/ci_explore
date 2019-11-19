<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller{

    function __construct()
    {
          parent::__construct();
          $this->load->model(array('M_Promo','M_Pengguna'));
    }

     function index()
    {
        $data['pengguna']= $this->M_Pengguna->tampilkanData()->result();
        $this->load->view('V_Pengguna',$data);

    }


    function tambahData()
    {
        $this->load->view('V_Input_Pengguna');
    }

    function insertData()
    {
        $tangkapId      =$this->input->post('id'); //di dalam petik satu pada post itu adalah name di input type
        $tangkapNama    =$this->input->post('nama');
        $tangkapPass    =$this->input->post('pass');
        $tangkapEmail   =$this->input->post('email');
        $tangkapAlamat  =$this->input->post('alamat');
        $tangkapTelp    =$this->input->post('telp');
        $tangkapJK      =$this->input->post('jk');
        $tangkapStatus  =$this->input->post('status');


        $data=array(
            'id_pengguna'       => $tangkapId,//petik satu itu dalam field db
            'nama_pengguna'     => $tangkapNama,
            'kata_sandi'        => md5($tangkapPass),
            'email_pengguna'    => $tangkapEmail,
            'alamat_pengguna'   => $tangkapAlamat,
            'telp_pengguna'     => $tangkapTelp,
            'jenis_kelamin'     => $tangkapJK,
            'status_pengguna'   => $tangkapStatus
                );

        $this->M_Pengguna->insertTable('pengguna',$data);
        redirect('Pengguna');
    }

    public function EditData($id_pengguna){
      $where = array('id_pengguna'=>$id_pengguna);
      $record['pengguna']=$this->M_Pengguna->pilih_record('pengguna',$where)->result();
      $this->load->view('V_Edit_Pengguna',$record);
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

    function hapusData($id){
      $where=array('id_pengguna'=>$id);
      $this->M_Pengguna->hapusRecord($where,'pengguna');
      redirect('Pengguna');
    }

    public function tambahPromo(){
      $data['promo'] = $this->M_Promo->tampilkanData()->result();
      $data['pengguna'] = $this->M_Pengguna->tampilkanData()->result();
      $this->load->view('V_Cust_Promo',$data);
    }

    public function editPromo($id_pengguna){
      $where = array('id_pengguna'=>$id_pengguna);
      $data['pengguna']=$this->M_Pengguna->pilih_record('pengguna',$where)->result();
      $data['promo'] = $this->M_Promo->tampilkanData()->result();
      $this->load->view('V_Cust_Promo',$data);
    }


    public function updatePromo(){
      $tangkapId      = $this->input->post('id');
      $tangkapIdp     = $this->input->post('id_promo');
      $data = array (
          'id_pengguna'           => $tangkapId,
          'id_promo'              => $tangkapIdp

      );
      $where=array('id_pengguna'=>$tangkapId);
      $this->M_Pengguna->ubah_promo($where,'pengguna',$data);
      redirect('Customer');
    }


  }
