<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model('m_master');
  }

  public function index()
  {
    $data['user1'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['data'] = $this->db->get_where('user', ['role_id' => 1])->result_array();
    $data['title'] = 'Data Admin';
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/header', $data);
    $this->load->view('data/admin', $data);
    $this->load->view('template/footer', $data);
  }
  public function tambahAdmin()
  {
    $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
    $this->form_validation->set_rules('gambar', 'Gambar', 'required|trim');
    $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[4]');


    if ($this->form_validation->run() == false) {
      $data['user1'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      $data['data'] = $this->db->get_where('user', ['role_id' => 1])->result_array();
      $data['title'] = 'Data Admin';
      $this->load->view('template/sidebar', $data);
      $this->load->view('template/header', $data);
      $this->load->view('data/admin', $data);
      $this->load->view('template/footer', $data);
    } else {
      $data = [
        'nama' => $this->input->post('nama'),
        'email' => $this->input->post('email'),
        'gambar' => $this->input->post('gambar'),
        'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
        'role_id' => 1,
        'aktif' => 1,
        'tgl_daftar' => time()
      ];
      $this->m_master->inputAdmin($data);
      redirect('admin');
    }
  }


  // hapus
  public function hapus($id)
  {
    $data = [
      'id' => $id
    ];
    $this->db->delete('user', $data);
    redirect('admin');
  }
}
