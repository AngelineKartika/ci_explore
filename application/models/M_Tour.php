<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Tour extends CI_Model{

function tampilkanData(){
  return $this->db->query("SELECT a.id_tour, a.id_kota, a.nama_tour,a.tanggal_tour,a.hari_tour,
    a.harga_tour,a.kuota, a.id_promo,b.id_kota, b.nama_kota,c.id_promo,
    c.nama_promo,d.id_pengguna,d.nama_pengguna
    FROM tour a
    join kota b ON a.id_kota = b.id_kota
    JOIN promo c ON a.id_promo=c.id_promo
  JOIN pengguna d ON a.id_tg=d.id_pengguna
  WHERE d.status_pengguna='Tourguide'");
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

function get_data_by_ajax($where){
  $query=$this->db->get_where('tour',$where);
  if($query->num_rows()>0){
    foreach ($query->result() as $data) {
      $output=array(
        'tanggal'=>$data->tanggal_tour,
        'hari'=>$data->hari_tour);
      }
    }
    return $output;
  }


  function getDataByAjax($where){
    $query=$this->db->get_where('tour',$where);
    if($query->num_rows()>0){
      foreach ($query->result() as $data) {
        $output=array(
          'tanggal'=>$data->tanggal_tour,
          'hari'=>$data->hari_tour);
        }
      }
      return $output;
    }



}
?>
