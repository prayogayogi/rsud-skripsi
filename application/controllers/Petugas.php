<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Petugas extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model('m_master');
  }

  public function index()
  {
    $data['user1'] = $this->m_master->dataAdmin()->row_array();
    $data['data'] = $this->db->get_where('user', ['role_id' => 2])->result_array();
    $data['title'] = 'Data Petugas';
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/header', $data);
    $this->load->view('data/petugas', $data);
    $this->load->view('template/footer', $data);
  }
  public function tambahPetugas()
  {
    $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
    $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[4]|matches[password2]');
    $this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[4]|matches[password1]');
    $gambar = $_FILES['gambar'];
    if ($gambar) {
      $config['allowed_types']  = 'gif|jpg|png';
      $config['max_size']       = '2048';
      $config['upload_path']    = './assets/gambar/petugas/';
      $this->load->library('upload', $config);

      if ($this->upload->do_upload('gambar')) {
        $foto = $this->upload->data('file_name', TRUE);
      } else {
        echo "error";
      }
    }

    if ($foto == []) {
      $fotoo = 'default.jpg';
    } else {
      $fotoo = $foto;
    }
    if ($this->form_validation->run() == false) {
      $data['user1'] = $this->m_master->dataAdmin()->row_array();
      $data['data'] = $this->db->get_where('user', ['role_id' => 2])->result_array();
      $data['title'] = 'Data Petugas';
      $this->load->view('template/sidebar', $data);
      $this->load->view('template/header', $data);
      $this->load->view('data/petugas', $data);
      $this->load->view('template/footer', $data);
    } else {
      $data = [
        'nama' => $this->input->post('nama'),
        'email' => $this->input->post('email'),
        'gambar' => $fotoo,
        'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
        'role_id' => 2,
        'aktif' => 1,
        'tgl_daftar' => time()
      ];
      $this->m_master->inputAdmin($data);
      redirect('petugas');
    }
  }

  public function hapus($id)
  {
    $data = [
      'id' => $id
    ];
    $this->db->delete('user', $data);
    redirect('petugas');
  }
}
