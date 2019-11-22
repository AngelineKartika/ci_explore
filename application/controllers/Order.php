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
        $tangkapIdo   =$this->input->post('id');
        $tangkapId   =$this->input->post('id_tour');
        $tangkapPgn= $this->session->userdata("id_pengguna");
        $tangkapTg   =$this->input->post('id_tg');


        $data=array(
            'id_order'          => $tangkapIdo,
            'id_tour'           => $tangkapId,
            'id_cust'           => $tangkapPgn,
            'id_tg'             => $tangkapTg
                );

        $this->M_Order->insertTable('order_cust',$data);
        $message = "Booking successful!";
        echo "<script type='text/javascript'>alert('$message');</script>";
        redirect('Home');
      }
      else{
        redirect('Login');}
    }


    }
    ?>
