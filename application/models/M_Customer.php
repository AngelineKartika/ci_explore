<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Customer extends CI_Model{

function tampilkanData(){
  return $this->db->query("SELECT a.id_pengguna, a.nama_pengguna, a.kata_sandi,
  a.email_pengguna, a.alamat_pengguna, a.telp_pengguna, a.status_pengguna FROM pengguna a
  WHERE a.status_pengguna='Customer' and a.status_aktif='1'");
}

function tampilkanData2(){//data customernya si tourguide
  $id_pengguna= $this->session->userdata("id_pengguna");

  return $this->db->query("SELECT a.id_cust, a.id_tg,
  b.nama_pengguna, b.email_pengguna, b.alamat_pengguna, b.telp_pengguna, b.status_pengguna, c.id_tg FROM order_cust a 
  JOIN pengguna b on a.id_cust = b.id_pengguna
  JOIN tour c on a.id_tg = c.id_tg
  WHERE a.id_tg='$id_pengguna' GROUP BY id_cust");

  /*return $this->db->query("SELECT a.id_pengguna, a.nama_pengguna, a.kata_sandi,
  a.email_pengguna, a.alamat_pengguna, a.telp_pengguna, a.status_pengguna, b.id_tg FROM pengguna a JOIN order_cust b on a.id_pengguna = b.id_cust
  WHERE b.id_tg='$id_pengguna'");*/
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
