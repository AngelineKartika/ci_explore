<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Pesan extends CI_Model{

function tampilkanData(){
  return $this->db->query("SELECT * FROM pesan
  WHERE status_pesan ='0'");
}

function tampilkanDataTerbalas(){

  return $this->db->query("SELECT * FROM pesan
     WHERE status_pesan ='1'");
}

function kirimDataTerbalas($id){

  return $this->db->query("UPDATE pesan SET status_pesan='1' WHERE id_pesan= '$id'");
}


function hapusRecord($where,$table){
  $this->db->where($where);
  $this->db->delete($table);
}




}
?>
