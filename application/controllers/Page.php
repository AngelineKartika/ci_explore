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
          $this->load->view('V_Admin');//blm diganti
      }else{
          echo "Access Denied";
      }

  }

  function tourguide(){
  
    if($this->session->userdata('status_pengguna')==='Tourguide'){
      $this->load->view('dashboard_view');//blm diganti
    }else{
        echo "Access Denied";
    }
  }

  function customer(){
   
    if($this->session->userdata('status_pengguna')==='Customer'){
      $this->load->view('dashboard_view');//blm diganti
    }else{
        echo "Access Denied";
    }
  }

}