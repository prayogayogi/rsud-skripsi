<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_laporan extends CI_Model
{
  public function tampil()
  {
    return $this->db->get('data_donor');
  }

  // Untuk laporan jumlah Laki-laki 
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

  // Untuk Laporan Jumlah Perempuan
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

  // Untuk Laporan Jumlah Hiv
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

  // Untuk Laporan Jumlah Hcv
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

  // Untuk Laporan Jumlah Hbsag
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

  // Untuk Laporan Jumlah Sypilis
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

  // Get tahun Di Data Base
  public function getTahun()
  {
    $query = 'SELECT YEAR(tanggal) AS tahun FROM data_donor GROUP BY YEAR (tanggal) ORDER BY YEAR (tanggal) ASC';
    return $this->db->query($query)->result_array();
  }

  // Filter Data Berdasarkan Tahun
  public function filterTahun($tahun)
  {
    $query = "SELECT * FROM data_donor WHERE YEAR (tanggal) = '$tahun' ORDER BY tanggal ASC";
    return $this->db->query($query)->result_array();
  }

  public function filterTahunJumlah()
  {
    $tahun = date('Y');
    $query = "SELECT * FROM data_donor WHERE YEAR (tanggal) = '$tahun' ORDER BY tanggal ASC";
    return $this->db->query($query)->num_rows();
  }
}
