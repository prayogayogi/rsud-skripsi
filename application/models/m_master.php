<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_master extends CI_Model
{
  // tampil data
  public function tampil_data()
  {
    return $this->db->get('data');
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


  // input data pendonor
  public function inputDataPendonor()
  {
    $data = [
      'nama' => $this->input->post('nama'),
      'gol_darah' => $this->input->post('gol_darah'),
      'alamat' => $this->input->post('alamat'),
      'pekerjaan' => $this->input->post('pekerjaan'),
      'gender' => $this->input->post('gender'),
      'tempat_tgl_lahir' => $this->input->post('tempat_tgl_lahir'),
      'tgl_lahir' => $this->input->post('tgl_lahir'),
      'no_hp' => $this->input->post('no_hp'),
      'berat_badan' => $this->input->post('berat_badan'),
      'tgl_donor' => time()
    ];
    $this->db->insert('data', $data);
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
}
