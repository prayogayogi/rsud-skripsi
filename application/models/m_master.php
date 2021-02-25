<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_master extends CI_Model
{
  // tampil data
  public function tampil_data()
  {
    return $this->db->get('data_donor');
  }


  // input user
  public function input_user($data)
  {
    $this->db->insert('user', $data);
  }


  // data admin
  function dataAdmin()
  {
    return $this->db->get_where('user', ['email' => $this->session->userdata('email')]);
  }


  // hapus data
  public function hapusDataPendonor($id)
  {
    $this->db->delete('data_donor', $id);
  }


  // input admin
  public function inputAdmin($data)
  {
    $this->db->insert('user', $data);
  }

  // editDataAdmin
  public function editDataAdmin($data, $where)
  {
    $this->db->where($where);
    $this->db->update('user', $data);
  }

  // ubahPasswordAdmin
  public function ubahPasswordAdmin($where, $data)
  {
    $this->db->where($where);
    $this->db->update('user', $data);
  }


  // cari data
  public function cariData($yang_dicari, $cari_berdasarkan)
  {
    $this->db->from('data_donor');
    if ($cari_berdasarkan === 'gol_darah') {
      $this->db->where($cari_berdasarkan, $yang_dicari);
    } else if ($cari_berdasarkan === "") {
      $this->db->like('nama_pendonor', $yang_dicari);
      $this->db->or_like('alamat_pendonor', $yang_dicari);
      $this->db->or_like('agama', $yang_dicari);
      $this->db->or_like('pekerjaan', $yang_dicari);
      $this->db->or_like('jenis_kelamin', $yang_dicari);
    } else {
      $this->db->like($cari_berdasarkan, $yang_dicari);
    }
    return $this->db->get()->result_array();
  }


  public function hitungJumlahGolA()
  {
    $data = ['gol_darah' => "A"];
    $query = $this->db->get_where('data_donor', $data);
    if ($query->num_rows() > 0) {
      return $query->num_rows();
    } else {
      return 0;
    }
  }

  public function hitungJumlahGolB()
  {
    $data = ['gol_darah' => "B"];
    $query = $this->db->get_where('data_donor', $data);
    if ($query->num_rows() > 0) {
      return $query->num_rows();
    } else {
      return 0;
    }
  }

  public function hitungJumlahGolAB()
  {
    $data = ['gol_darah' => "AB"];
    $query = $this->db->get_where('data_donor', $data);
    if ($query->num_rows() > 0) {
      return $query->num_rows();
    } else {
      return 0;
    }
  }

  public function hitungJumlahGolO()
  {
    $data = ['gol_darah' => "O"];
    $query = $this->db->get_where('data_donor', $data);
    if ($query->num_rows() > 0) {
      return $query->num_rows();
    } else {
      return 0;
    }
  }
}
