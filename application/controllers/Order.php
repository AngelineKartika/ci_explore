<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller{

    function __construct()
    {
          parent::__construct();
          $this->load->model('M_Order');
    }

     function index()
    {
        $data['order_cust']= $this->M_Order->tampilkanData()->result();
        $this->load->view('V_Order',$data);

    }

    function insertData()
    {
      if($this->session->userdata("logged_in")){
        $tangkapId      =$this->input->post('kota'); //di dalam petik satu pada post itu adalah name di input type
        $tangkapNama    =$this->input->post('tanggal_tour');
        $tangkapPass    =$this->input->post('hari_tour');
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
        alert('Thank you!');
      }
      else{
        redirect('Login');}
    }


    }
