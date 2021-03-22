<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_laporan extends CI_Model
{
  public function tampil()
  {
    return $this->db->get('data_donor');
  }


  // Untuk Laporan Jumlah Hiv
  public function hiv()
  {
    $tahun = date('Y');
    $query = "SELECT * FROM data_donor WHERE YEAR(tanggal)='$tahun' AND hiv='+'";
    return $this->db->query($query)->num_rows();
  }

  // Untuk Laporan Jumlah Hcv
  public function hcv()
  {
    $tahun = date('Y');
    $query = "SELECT * FROM data_donor WHERE YEAR(tanggal)='$tahun' AND hcv='+'";
    return $this->db->query($query)->num_rows();
  }

  // Untuk Laporan Jumlah Hbsag
  public function hbsag()
  {
    $tahun = date('Y');
    $query = "SELECT * FROM data_donor WHERE YEAR(tanggal)='$tahun' AND hbsag='+'";
    return $this->db->query($query)->num_rows();
  }

  // Untuk Laporan Jumlah Sypilis
  public function sypilis()
  {
    $tahun = date('Y');
    $query = "SELECT * FROM data_donor WHERE YEAR(tanggal)='$tahun' AND sypilis='+'";
    return $this->db->query($query)->num_rows();
  }

  // Get tahun Di Data Base
  public function getTahun()
  {
    // $sql = "SELECT nama_pasien,gol_darah, COUNT(gol_darah) as jumlah
    // FROM data_donor
    // WHERE nama_pasien = 'stok utd'
    // GROUP BY gol_darah";

    // $da = "SELECT hiv, COUNT(hiv) as jumlah
    // FROM data_donor
    // WHERE hiv = '-'
    // GROUP BY hiv";

    $query = 'SELECT YEAR(tanggal) AS tahun FROM data_donor GROUP BY YEAR (tanggal) ORDER BY YEAR (tanggal) ASC';
    return $this->db->query($query)->result_array();
  }

  // Filter Data Berdasarkan Tahun Menampilakn semua data
  public function filterTahun($tahun)
  {
    $query = "SELECT * FROM data_donor WHERE YEAR (tanggal) = '$tahun' ORDER BY tanggal ASC";
    return $this->db->query($query)->result_array();
  }


  // Filter Data Berdasarkan Tahun Menampilakn jumlah
  public function filterTahunJumlah()
  {
    $tahun = date('Y');
    $query = "SELECT * FROM data_donor WHERE YEAR (tanggal) = '$tahun' ORDER BY tanggal ASC";
    return $this->db->query($query)->num_rows();
  }


  // Untuk laporan jumlah Laki-laki 
  public function lakiLakiget()
  {
    $tahun = date('Y');
    $query = "SELECT * FROM data_donor WHERE YEAR(tanggal)='$tahun' AND jenis_kelamin='Laki-Laki'";
    return $this->db->query($query)->num_rows();
  }

  // Untuk Laporan Jumlah Perempuan
  public function perempuanget()
  {
    $tahun = date('Y');
    $query = "SELECT * FROM data_donor WHERE YEAR(tanggal)='$tahun' AND jenis_kelamin='Perempuan'";
    return $this->db->query($query)->num_rows();
  }
}
