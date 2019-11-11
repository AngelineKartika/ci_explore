<?php
class M_Login extends CI_Model{
 
  function check_user($table,$where)
  {
    return $this->db->get_where($table,$where);
  }
 
}