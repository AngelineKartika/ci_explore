<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Promo extends CI_Model{

function tampilkanData(){
  $query = $this->db->get('promo');// dosen = nama table
  return $query;
}

function insertTable($a,$b){
  $this->db->insert($a,$b);
}

function pilih_record($table,$where){
  return $this->db->get_where($table,$where);
}

function ubah_record($param1,$param2,$param3){
  $this->db->where($param1);
  $this->db->update($param2,$param3);
}

function hapusRecord($where,$table){
  $this->db->where($where);
  $this->db->delete($table);
}




}
?>
