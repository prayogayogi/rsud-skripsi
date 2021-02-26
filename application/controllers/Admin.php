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

  // View Data Admin
  public function index()
  {
    $data['user1'] = $this->m_master->dataAdmin()->row_array();
    $data['data'] = $this->db->get_where('user', ['role_id' => 1])->result_array();
    $data['title'] = 'Data Admin';
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/header', $data);
    $this->load->view('data/admin', $data);
    $this->load->view('template/footer', $data);
  }

  // Fungsi Tambah Admin
  public function tambahAdmin()
  {
    $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
    $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[4]|matches[password2]');
    $this->form_validation->set_rules('password2', 'Password', 'required|trim|min_length[4]|matches[password1]');
    $gambar = $_FILES['gambar'];
    if ($gambar) {
      $config['allowed_types']  = 'gif|jpg|png';
      $config['max_size']       = '2048';
      $config['upload_path']    = './assets/gambar/admin/';
      $this->load->library('upload', $config);

      if ($this->upload->do_upload('gambar')) {
        $foto = $this->upload->data('file_name', TRUE);
      } else {
        $foto = "default.jpg";
      }
    }

    if ($this->form_validation->run() == false) {
      $data['user1'] = $this->m_master->dataAdmin()->row_array();
      $data['data'] = $this->db->get_where('user', ['role_id' => 1])->result_array();
      $data['title'] = 'Data Admin';
      $this->load->view('template/sidebar', $data);
      $this->load->view('template/header', $data);
      $this->load->view('data/admin', $data);
      $this->load->view('template/footer', $data);
    } else {
      $data = [
        'nama' => $this->input->post('nama', true),
        'email' => $this->input->post('email', true),
        'gambar' => $foto,
        'password' => password_hash($this->input->post('password2', true), PASSWORD_DEFAULT),
        'role_id' => 1,
        'aktif' => 1,
        'tgl_daftar' => time()
      ];
      $this->m_master->inputAdmin($data);
      $this->session->set_flashdata('pesan', 'Ditambah');
      redirect('admin');
    }
  }

  // Proses Edit Admin 
  public function editAdmin()
  {
    $email = [
      'email' => $this->input->post('email', true)
    ];
    $data = $this->db->get_where('user', $email)->row_array();
    $gambar = $_FILES['gambar'];
    if ($gambar) {
      $config['allowed_types']  = 'gif|jpg|png';
      $config['max_size']       = '2048';
      $config['upload_path']    = './assets/gambar/admin/';
      $this->load->library('upload', $config);

      if ($this->upload->do_upload('gambar')) {
        if ($data['gambar'] != 'default.jpg') {
          unlink(FCPATH . '/assets/gambar/admin/' . $data['gambar']);
        }
        $foto = $this->upload->data('file_name', TRUE);
        $this->db->set('gambar', $foto);
      } else {
        echo "error";
      }
    }
    $where = [
      'id' => $this->input->post('id', true)
    ];
    $nama = $this->input->post('nama', true);
    $this->db->set('nama', $nama);
    $this->db->where($where);
    $this->db->update('user');
    $this->session->set_flashdata('pesan', 'Diubah');
    redirect('admin');
  }

  // Prose hapus Data Admin
  public function hapus($id)
  {
    $data = [
      'id' => $id
    ];
    $this->db->delete('user', $data);
    $this->session->set_flashdata('pesan', 'Dihapus');
    redirect('admin');
  }

  // ubah password 
  public function ubahPasswordAdmin()
  {
    $where = [
      'id' => $this->input->post('id')
    ];
    $passwordLama = $this->input->post('passwordLama', true);
    $passwordBaru = $this->input->post('passwordBaru', true);
    $database = $this->db->get_where('user', $where)->row_array();

    if (password_verify($passwordLama, $database['password'])) {
      if ($passwordLama != $passwordBaru) {
        $data = [
          'password' => password_hash($this->input->post('passwordBaru', true), PASSWORD_DEFAULT)
        ];
        $this->m_master->ubahPasswordAdmin($where, $data);
        $this->session->set_flashdata('password', 'Diubah');
        redirect('dashboard');
      } else {
        $this->session->set_flashdata('passwordNot', 'Sama Dengan Password Lama');
        redirect('dashboard');
      }
    } else {
      $this->session->set_flashdata('passwordNot', 'Salah...!');
      redirect('dashboard');
    }
  }
}
