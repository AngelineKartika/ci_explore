<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Order extends CI_Model{

function tampilkanData(){
  return $this->db->query("SELECT a.id_order, a.id_cust, a.id_tour, a.status_order, a.id_tg,b.id_pengguna,b.nama_pengguna, c.id_tour, c.id_kota, c.nama_tour,
    c.tanggal_tour,c.hari_tour, c.harga_tour, c.id_promo, c.id_tg FROM order_pending a
    join pengguna b ON a.id_tg = b.id_pengguna
    JOIN tour c ON a.id_tour=c.id_tour");

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

function deleteOrderPending($table,$where){
  $this->db->where($where);
  $this->db->delete($table);
}

function ubah_promo($param1,$param2,$param3){
  $this->db->where($param1);
  $this->db->update($param2,$param3);
}
}
?>
