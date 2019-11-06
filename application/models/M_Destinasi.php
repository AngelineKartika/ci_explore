<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Destinasi extends CI_Model{

function tampilkanData(){
  return $this->db->query('SELECT a.id_destinasi, a.nama_destinasi, a.id_kota, b.id_kota, b.nama_kota FROM destinasi a join kota b ON a.id_kota = b.id_kota');
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
