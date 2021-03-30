<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_tambah extends CI_Model
{
  public function tambahDataPendonor($data)
  {
    $this->db->insert('data_donor', $data);
  }
}
