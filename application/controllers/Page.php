<?php
class Page extends CI_Controller{

  function __construct(){
    parent::__construct();
    if($this->session->userdata('logged_in') !== TRUE){
      redirect('login');
    }
  }

  function index(){
    
      if($this->session->userdata('status_pengguna')==='Admin'){
         $this->load->model('M_Pengguna');
         $data['pengguna'] =  $this->M_Pengguna->hitungPengguna()->result();
         $data['order'] =  $this->M_Pengguna->hitungOrder()->result();
         $data['income']= $this->M_Pengguna->hitungIncome()->result();
         $data['tour']= $this->M_Pengguna->hitungTour()->result();
         $this->load->view('dashboard',$data);//blm diganti
      }
      else if($this->session->userdata('status_pengguna')==='Tourguide'){
        $this->load->model('M_Tour');
        $data['tour'] =  $this->M_Tour->tampilkanData2()->result(); 
        $this->load->view('V_Tour',$data);//blm diganti
     }
     else if($this->session->userdata('status_pengguna')==='Customer'){
      $this->load->model('M_Order');
      $data['order_cust']= $this->M_Order->tampilkanDataBelumCust()->result();
        $this->load->view('V_Order_Cust',$data);
    }
      else{
          echo "Access Denied";
      }
  }

}