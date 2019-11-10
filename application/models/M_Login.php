<?php
class M_Login extends CI_Model{
 
  function validate($email,$password){
    $this->db->where('email_pengguna',$email);
    $this->db->where('kata_sandi',$password);
    $result = $this->db->get('pengguna',1);
    return $result;
  }
 
}