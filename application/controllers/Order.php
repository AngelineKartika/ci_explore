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
        //$this->load->view('V_Order',$data);
        $this->load->view('V_Confirm',$data);

    }

    function belum()
    {
        $data['order_cust']= $this->M_Order->tampilkanDataBelum()->result();
        $this->load->view('V_Order',$data);
    }

    function sudah()
    {
        $data['order_cust']= $this->M_Order->tampilkanDataSelesai()->result();
        $this->load->view('V_Order_Selesai',$data);

    }

    function belumCust()
    {
        $data['order_cust']= $this->M_Order->tampilkanDataBelumCust()->result();
        $this->load->view('V_Order_Cust',$data);
    }

    function sudahCust()
    {
        $data['order_cust']= $this->M_Order->tampilkanDataSelesaiCust()->result();
        $this->load->view('V_Order_Selesai_Cust',$data);

    }

    function confirmData(){

      if($this->session->userdata("logged_in")){
        $tangkapIdo    =$this->input->post('id');
        $tangkapId     =$this->input->post('id_tour');
        $tangkapPgn    = $this->session->userdata("id_pengguna");
        $tangkapTg     =$this->input->post('id_tg');
        $tangkapStatus =$this->input->post('status_order');
        $tangkapPromo  =$this->input->post('id_promo');
        $tangkapKuota  =$this->input->post('kuota');


        $data=array(
            'id_order'          => $tangkapIdo,
            'id_tour'           => $tangkapId,
            'id_cust'           => $tangkapPgn,
            'id_tg'             => $tangkapTg,
            'status_order'      => $tangkapStatus,
            'id_promo'          => $tangkapPromo,

                );
            if($tangkapKuota<=0){
              redirect('Confirm/full');
            }
            else{
            $this->M_Order->insertTable('order_pending',$data);
            redirect('Confirm');}
           }

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
            'jumlah_orang'      => $tangkapJumlah,
            'tanggal_order'     => date('Y-m-d H:i:s')
                );

          $data2=array(
              'id_order'          => $tangkapIdo,
              );

        $this->M_Order->insertTable2('order_cust',$data,$tangkapJumlah,$tangkapId);
        $this->M_Order->deleteOrderPending('order_pending',$data2);

        $message = "Booking successful!";
        echo "<script type='text/javascript'>alert('$message');</script>";
        redirect('#destination-section');
      }
      else{
        redirect('Login');}
    }

    function hapusData($id){
      $this->M_Order->kirimDataSelesai($id);
      $data['order_cust']= $this->M_Order->tampilkanDataSelesai()->result();
      $this->load->view('V_Order_Selesai',$data);
      
      
  }






    }
    ?>
