<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kota extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Kota');
    }

     function index()
    {
        $data['kota']= $this->M_Kota->tampilkanData()->result();
        $this->load->view('V_Kota',$data);

    }


    function tambahData()
    {
        $this->load->view('V_Input_Kota');
    }

    function insertData()
    {
        $tangkapId     =$this->input->post('id'); //di dalam petik satu pada post itu adalah name di input type
        $tangkapNama    =$this->input->post('nama');


        $data=array(
            'id_kota'       => $tangkapId,//petik satu itu dalam field db
            'nama_kota'      => $tangkapNama,
                );

        $this->M_Kota->insertTable('kota',$data);
        redirect('Kota');
    }

    public function EditData($id_kota){
      $where = array('id_kota'=>$id_kota);
      $record['kota']=$this->M_Kota->pilih_record('kota',$where)->result();
      $this->load->view('V_Edit_Kota',$record);
    }


    public function UpdateData(){
      $tangkapId      = $this->input->post('id');
      $tangkapNama    = $this->input->post('nama');

      $data = array (
          'id_kota'       => $tangkapId,
          'nama_kota'     => $tangkapNama

      );
      $where=array('id_kota'=>$tangkapId);
      $this->M_Kota->ubah_record($where,'kota',$data);
      redirect('Kota');
    }

    function hapusData($id){
      $where=array('id_kota'=>$id);
      $this->M_Kota->hapusRecord($where,'kota');
      redirect('Kota');
    }


  }
