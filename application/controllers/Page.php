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
          $this->load->view('Admin');
      }else{
          echo "Access Denied";
      }

  }

  function tourguide(){
  
    if($this->session->userdata('status_pengguna')==='Tourguide'){
      $this->load->view('dashboard_view');
    }else{
        echo "Access Denied";
    }
  }

  function customer(){
   
    if($this->session->userdata('status_pengguna')==='Customer'){
      $this->load->view('dashboard_view');
    }else{
        echo "Access Denied";
    }
  }

}