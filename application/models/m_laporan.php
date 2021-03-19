<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_laporan extends CI_Model
{
  public function tampil()
  {
    return $this->db->get('data_donor');
  }

  public function lakiLaki()
  {
    $data = ['jenis_kelamin' => "Laki-Laki"];
    $query = $this->db->get_where('data_donor', $data);
    if ($query->num_rows() > 0) {
      return $query->num_rows();
    } else {
      return 0;
    }
  }

  public function perempuan()
  {
    $data = ['jenis_kelamin' => "Perempuan"];
    $query = $this->db->get_where('data_donor', $data);
    if ($query->num_rows() > 0) {
      return $query->num_rows();
    } else {
      return 0;
    }
  }

  public function hiv()
  {
    $data = ['hiv' => "+"];
    $query = $this->db->get_where('data_donor', $data);
    if ($query->num_rows() > 0) {
      return $query->num_rows();
    } else {
      return 0;
    }
  }

  public function hcv()
  {
    $data = ['hcv' => "+"];
    $query = $this->db->get_where('data_donor', $data);
    if ($query->num_rows() > 0) {
      return $query->num_rows();
    } else {
      return 0;
    }
  }

  public function hbsag()
  {
    $data = ['hbsag' => "+"];
    $query = $this->db->get_where('data_donor', $data);
    if ($query->num_rows() > 0) {
      return $query->num_rows();
    } else {
      return 0;
    }
  }

  public function sypilis()
  {
    $data = ['sypilis' => "+"];
    $query = $this->db->get_where('data_donor', $data);
    if ($query->num_rows() > 0) {
      return $query->num_rows();
    } else {
      return 0;
    }
  }

  // Get tahun
  public function getTahun()
  {
    $query = 'SELECT YEAR(tanggal) AS tahun FROM data_donor GROUP BY YEAR (tanggal) ORDER BY YEAR (tanggal) ASC';
    return $this->db->query($query)->result_array();
  }

  public function filterTahun($tahun)
  {
    $query = "SELECT * FROM data_donor WHERE YEAR (tanggal) = '$tahun' ORDER BY tanggal ASC";
    return $this->db->query($query)->result_array();
  }
}
