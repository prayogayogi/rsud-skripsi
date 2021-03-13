<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_laporan extends CI_Model
{
  public function tampil()
  {
    return $this->db->get('data_donor');
  }
}
