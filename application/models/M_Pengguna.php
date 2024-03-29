<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Pengguna extends CI_Model{

function tampilkanData(){
  $query = $this->db->get('pengguna');// dosen = nama table
  return $query;
}

function tampilkanDataAktif(){
  return $this->db->query("SELECT * FROM pengguna
  WHERE status_aktif='1'");
}

function tampilkanDataTidakAktif(){
  return $this->db->query("SELECT * FROM pengguna
  WHERE status_aktif='0'");
}

function pindahDataAktif($id_pengguna){
  return $this->db->query("UPDATE pengguna SET status_aktif='1' WHERE id_pengguna= '$id_pengguna'");
}



function tampilkanData2(){
  return $this->db->query("SELECT * FROM pengguna a
  WHERE a.status_pengguna='Tourguide'");
}

function hitungPengguna(){
  return $this->db->query("SELECT COUNT(*) as total_pengguna FROM pengguna WHERE status_aktif='1'");
}

function hitungOrder(){
  return $this->db->query("SELECT COUNT(*) as total_order FROM order_cust");
}

function hitungIncome(){
  return $this->db->query("SELECT SUM(harga_promo) as total_income FROM order_cust");
}

function hitungTour(){
  return $this->db->query("SELECT COUNT(*) as total_tour FROM tour");
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

function ubah_promo($param1,$param2,$param3){
  $this->db->where($param1);
  $this->db->update($param2,$param3);
}
}
?>
