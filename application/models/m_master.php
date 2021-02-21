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
  public function hapus($id)
  {
    $this->db->delete('data', $id);
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
  public function cariData()
  {
    $kyword = $this->input->post('kyword', true);
    $this->db->like('nama', $kyword);
    $this->db->or_like('gol_darah', $kyword);
    $this->db->or_like('alamat', $kyword);
    $this->db->or_like('gender', $kyword);
    $this->db->or_like('no_hp', $kyword);
    return $this->db->get('data')->result_array();
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
