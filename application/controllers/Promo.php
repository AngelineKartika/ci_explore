Promo<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Promo extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('M_Promo');
    }

     function index()
    {
        $data['promo']= $this->M_Promo->tampilkanData()->result();
        $this->load->view('V_Promo',$data);

    }


    function tambahData()
    {
        $this->load->view('V_Input_Promo');
    }

    function insertData()
    {
        $tangkapId     =$this->input->post('id'); //di dalam petik satu pada post itu adalah name di input type
        $tangkapNama   =$this->input->post('nama');
        $tangkapDiskon =$this->input->post('diskon');


        $data=array(
            'id_promo'       => $tangkapId,//petik satu itu dalam field db
            'nama_promo'     => $tangkapNama,
            'diskon_promo'   => $tangkapDiskon
                );

        $this->M_Promo->insertTable('promo',$data);
        redirect('Promo');
    }

    public function EditData($id_promo){
      $where = array('id_promo'=>$id_promo);
      $record['promo']=$this->M_Promo->pilih_record('promo',$where)->result();
      $this->load->view('V_Edit_Promo',$record);
    }


    public function UpdateData(){
      $tangkapId      = $this->input->post('id');
      $tangkapNama    = $this->input->post('nama');
      $tangkapDiskon =$this->input->post('diskon');

      $data = array (
          'id_promo'       => $tangkapId,
          'nama_promo'     => $tangkapNama,
          'diskon_promo'   => $tangkapDiskon 

      );
      $where=array('id_promo'=>$tangkapId);
      $this->M_Promo->ubah_record($where,'promo',$data);
      redirect('Promo');
    }

    function hapusData($id){
      $where=array('id_promo'=>$id);
      $this->M_Promo->hapusRecord($where,'promo');
      redirect('Promo');
    }


  }
