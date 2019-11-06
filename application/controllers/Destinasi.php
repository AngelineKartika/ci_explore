<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Destinasi extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_Destinasi','M_Kota'));
    }

     function index()
    {
      $data['destinasi'] = $this->M_Destinasi->tampilkanData()->result();
      $data['kota'] = $this->M_Kota->tampilkanData()->result();
      $this->load->view('V_Destinasi',$data);

    }


    function tambahData()
    {
      $data['destinasi'] = $this->M_Destinasi->tampilkanData()->result();
      $data['kota'] = $this->M_Kota->tampilkanData()->result();
      $this->load->view('V_Input_Destinasi',$data);
    }

    function insertData()
    {
        $tangkapId     =$this->input->post('id');
        $tangkapIdk    =$this->input->post('id_kota'); //di dalam petik satu pada post itu adalah name di input type
        $tangkapNama    =$this->input->post('nama');


        $data=array(
            'id_destinasi'       => $tangkapId,
            'id_kota'            => $tangkapIdk,     //petik satu itu dalam field db
            'nama_destinasi'      => $tangkapNama
        );

        $this->M_Destinasi->insertTable('destinasi',$data);
        redirect('Destinasi');
    }

    public function EditData($id_destinasi){
      $where = array('id_destinasi'=>$id_destinasi);
      $data['destinasi']=$this->M_Destinasi->pilih_record('destinasi',$where)->result();
      $data['kota'] = $this->M_Kota->tampilkanData()->result();
      $this->load->view('V_Edit_Destinasi',$data);
    }


    public function UpdateData(){
      $tangkapId      = $this->input->post('id');
      $tangkapIdk     = $this->input->post('id_kota1');
      $tangkapNama    = $this->input->post('nama');

      $data = array (
          'id_destinasi'       => $tangkapId,
          'id_kota'            => $tangkapIdk,
          'nama_destinasi'     => $tangkapNama

      );
      $where=array('id_destinasi'=>$tangkapId);
      $this->M_Destinasi->ubah_record($where,'destinasi',$data);
      redirect('Destinasi');
    }

    function hapusData($id){
      $where=array('id_destinasi'=>$id);
      $this->M_Destinasi->hapusRecord($where,'destinasi');
      redirect('Destinasi');
    }


  }
