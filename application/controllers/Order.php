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
        $this->load->view('V_Confirm',$data);

    }

    function confirmData(){
      if($this->session->userdata("logged_in")){
        $tangkapIdo    =$this->input->post('id');
        $tangkapId     =$this->input->post('id_tour');
        $tangkapPgn    = $this->session->userdata("id_pengguna");
        $tangkapTg     =$this->input->post('id_tg');
        $tangkapStatus =$this->input->post('status_order');
        $tangkapPromo =$this->input->post('id_promo');



        $data=array(
            'id_order'          => $tangkapIdo,
            'id_tour'           => $tangkapId,
            'id_cust'           => $tangkapPgn,
            'id_tg'             => $tangkapTg,
            'status_order'      => $tangkapStatus,
            'id_promo'          => $tangkapPromo,

                );

      $this->M_Order->insertTable('order_pending',$data);
      redirect('Confirm');}
      else{
        redirect('Login');}
    }


    function insertData()
    {
      if($this->session->userdata("logged_in")){
        $tangkapIdo    =$this->input->post('ido');
        $tangkapId     =$this->input->post('idt');
        $tangkapPgn    = $this->session->userdata("id_pengguna");
        $tangkapTg     =$this->input->post('idtg');
        $tangkapStatus =$this->input->post('status_order');
        $tangkapPromo =$this->input->post('harga_promo');
        $tangkapJumlah =$this->input->post('jumlah_orang');

        $data=array(
            'id_order'          => $tangkapIdo,
            'id_tour'           => $tangkapId,
            'id_cust'           => $tangkapPgn,
            'id_tg'             => $tangkapTg,
            'status_order'      => $tangkapStatus,
            'harga_promo'       => $tangkapPromo,
            'jumlah_orang'      => $tangkapJumlah
                );

          $data2=array(
              'id_order'          => $tangkapIdo,
              );

        $this->M_Order->insertTable2('order_cust',$data,$tangkapJumlah);
        $this->M_Order->deleteOrderPending('order_pending',$data2);

        $message = "Booking successful!";
        echo "<script type='text/javascript'>alert('$message');</script>";
        redirect('#destination-section');
      }
      else{
        redirect('Login');}
    }






    }
    ?>
