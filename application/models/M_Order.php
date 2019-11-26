<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Order extends CI_Model{

function tampilkanData(){
  return $this->db->query("SELECT a.id_order, a.id_cust, a.id_tour, a.status_order, a.id_tg, a.id_promo, b.id_pengguna, b.nama_pengguna, c.id_tour, c.id_kota, c.nama_tour,
    c.tanggal_tour,c.hari_tour, c.harga_tour, c.id_promo, c.id_tg, d.id_promo, d.diskon_promo FROM order_pending a
    join pengguna b ON a.id_tg = b.id_pengguna
    JOIN tour c ON a.id_tour=c.id_tour
    JOIN promo d ON a.id_promo=d.id_promo");

}
function insertTable2($table,$data,$tangkapJumlah)// a itu nama table, bole berubah posisi parameternya
{
    $this->db->trans_begin();
    $this->db->insert($table,$data);//parameter yg dibutuhkan tabel,$data
    $this->db->query("UPDATE tour SET kuota = kuota-'$tangkapJumlah'");

    if($this->db->trans_status()===FALSE)
    {
        $this->db->trans_rollback();
    }
    else
    {
        $this->db->trans_commit();
    }
}

function insertTable($a,$b){
$this->db->insert($a,$b);
if($this->db->trans_status()===FALSE)
{
    $this->db->trans_rollback();
}
else
{
    $this->db->trans_commit();
}
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
