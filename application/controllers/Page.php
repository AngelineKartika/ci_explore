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
         $this->load->model('M_Admin');
         $data['admin'] =  $this->M_Admin->tampilkanData()->result(); 
         $this->load->view('V_Admin',$data);//blm diganti
      }
      else if($this->session->userdata('status_pengguna')==='Tourguide'){
        $this->load->model('M_Tour');
        $data['tour'] =  $this->M_Tour->tampilkanData2()->result(); 
        $this->load->view('V_Tour',$data);//blm diganti
     }
     else if($this->session->userdata('status_pengguna')==='Customer'){
      $this->load->model('M_Customer');
      $data['customer'] =  $this->M_Customer->tampilkanData()->result(); 
      $this->load->view('V_Customer',$data);//blm diganti
    }
      else{
          echo "Access Denied";
      }
  }

}