<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tour extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_Tour','M_Kota','M_Promo','M_Pengguna'));
    }

     function index()
    {
      $data['tour'] = $this->M_Tour->tampilkanData()->result();
      $data['kota'] = $this->M_Kota->tampilkanData()->result();
      $data['promo'] = $this->M_Promo->tampilkanData()->result();
      $data['pengguna'] = $this->M_Pengguna->tampilkanData()->result();
      $this->load->view('V_Tour',$data);
    }


    function tambahData()
    {
      $data['tour'] = $this->M_Tour->tampilkanData()->result();
      $data['kota'] = $this->M_Kota->tampilkanData()->result();
      $data['promo'] = $this->M_Promo->tampilkanData()->result();
      $data['pengguna'] = $this->M_Pengguna->tampilkanData2()->result();
      $this->load->view('V_Input_Tour',$data);
    }

    function insertData()
    {
        $tangkapId     =$this->input->post('id');
        $tangkapIdk    =$this->input->post('id_kota'); //di dalam petik satu pada post itu adalah name di input type
        $tangkapNama    =$this->input->post('nama');
        $tangkapTgl   =$this->input->post('tanggal');
        $tangkapHari    =$this->input->post('hari');
        $tangkapHarga    =$this->input->post('harga');
        $tangkapKuota    =$this->input->post('kuota');
        $tangkapIdp    =$this->input->post('id_promo');
        $tangkapTg    =$this->input->post('id_tg');



        $data=array(
            'id_tour'        => $tangkapId,
            'id_kota'        => $tangkapIdk,     //petik satu itu dalam field db
            'nama_tour'      => $tangkapNama,
            'tanggal_tour'   => $tangkapTgl,
            'hari_tour'      => $tangkapHari,
            'harga_tour'     => $tangkapHarga,
            'kuota'          => $tangkapKuota,
            'id_promo'       => $tangkapIdp,
            'id_tg'        => $tangkapTg
        );

        $this->M_Tour->insertTable('tour',$data);
        redirect('Tour');
    }

    public function EditData($id_tour){
      $where = array('id_tour'=>$id_tour);
      $data['tour'] = $this->M_Tour->pilih_record('tour',$where)->result();
      $data['kota'] = $this->M_Kota->tampilkanData()->result();
      $data['promo'] = $this->M_Promo->tampilkanData()->result();
      $this->load->view('V_Edit_Tour',$data);
    }


    public function UpdateData(){
      $tangkapId     =$this->input->post('id');
      $tangkapIdk    =$this->input->post('id_kota'); //di dalam petik satu pada post itu adalah name di input type
      $tangkapNama    =$this->input->post('nama');
      $tangkapTgl   =$this->input->post('tanggal');
      $tangkapHari    =$this->input->post('hari');
      $tangkapHarga    =$this->input->post('harga');
      $tangkapKuota    =$this->input->post('kuota');
      $tangkapIdp    =$this->input->post('id_promo');
      $tangkapTg    =$this->input->post('id_tg');


      $data=array(
          'id_tour'        => $tangkapId,
          'id_kota'        => $tangkapIdk,     //petik satu itu dalam field db
          'nama_tour'      => $tangkapNama,
          'tanggal_tour'   => $tangkapTgl,
          'hari_tour'      => $tangkapHari,
          'harga_tour'     => $tangkapHarga,
          'kuota'          => $tangkapKuota,
          'id_promo'       => $tangkapIdp,
          'id_tg'        => $tangkapTg
      );
      $where=array('id_tour'=>$tangkapId);
      $this->M_Tour->ubah_record($where,'tour',$data);
      redirect('tour');
    }

    function hapusData($id){
      $where=array('id_tour'=>$id);
      $this->M_Tour->hapusRecord($where,'tour');
      redirect('Tour');
    }


  }
