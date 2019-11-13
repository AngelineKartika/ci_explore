<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Pesan extends CI_Model{

function tampilkanData(){
  $query = $this->db->get('pesan');
  return $query;
}


function hapusRecord($where,$table){
  $this->db->where($where);
  $this->db->delete($table);
}




}
?>
