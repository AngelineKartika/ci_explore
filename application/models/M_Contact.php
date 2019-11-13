<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Contact extends CI_Model{

function tampilkanData(){
  $query = $this->db->get('pesan');// dosen = nama table
  return $query;
}

function insertTable($a,$b){
  $this->db->insert($a,$b);
}

}
?>