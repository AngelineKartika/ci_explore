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

      else{
          echo "Access Denied";
      }
  }

  function tourguide(){
  
      if($this->session->userdata('status_pengguna')==='Tourguide'){
         $this->load->model('M_Tourguide');
         $data['tourguide'] =  $this->M_Tourguide->tampilkanData()->result(); 
         $this->load->view('V_Tourguide',$data);//blm diganti
      }
      
      else{
        echo "Access Denied";
      }
  }

  function customer(){
   
    if($this->session->userdata('status_pengguna')==='Customer'){
      $this->load->model('M_Customer');
      $data['customer'] =  $this->M_Customer->tampilkanData()->result(); 
      $this->load->view('V_Customer',$data);//blm diganti
    }
    
    else{
        echo "Access Denied";
    }
  }

}