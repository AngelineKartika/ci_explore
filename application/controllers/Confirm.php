<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Confirm extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_Order'));
    }
       function index()
      {
          $data['order_pending'] = $this->M_Order->tampilkanData()->result();
          $this->load->view('V_Confirm',$data);
      }

      function full(){
        $this->load->view('V_Full');
      }


  }
?>
