<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Tourguide extends CI_Model{

function tampilkanData(){
  return $this->db->query("SELECT a.id_pengguna, a.nama_pengguna, a.kata_sandi,
    a.email_pengguna, a.alamat_pengguna, a.telp_pengguna, a.status_pengguna FROM pengguna a
    WHERE a.status_pengguna='Tourguide'");
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
