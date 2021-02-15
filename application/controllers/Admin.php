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
        'nama' => $this->input->post('nama'),
        'email' => $this->input->post('email'),
        'gambar' => $foto,
        'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
        'role_id' => 1,
        'aktif' => 1,
        'tgl_daftar' => time()
      ];
      $this->m_master->inputAdmin($data);
      redirect('admin');
    }
  }

  // Proses Edit Admin 
  public function editAdmin()
  {
    $data = $this->db->get('user')->row_array();
    $gambar = $_FILES['gambar'];
    if ($gambar) {
      $config['allowed_types']  = 'gif|jpg|png';
      $config['max_size']       = '2048';
      $config['upload_path']    = './assets/gambar/admin/';
      $this->load->library('upload', $config);

      if ($this->upload->do_upload('gambar')) {
        $foto = $this->upload->data('file_name', TRUE);
      } else {
        echo "error";
      }
    }
    $where = [
      'id' => $this->input->post('id')
    ];

    if ($foto == []) {
      $fotoo = 'default.jpg';
    } else {
      $fotoo = $foto;
    }
    $data = [
      'nama' => $this->input->post('nama'),
      'email' => $this->input->post('email'),
      'gambar' => $fotoo
    ];
    $this->m_master->editDataAdmin($data, $where);
    redirect('admin');
  }

  // Prose hapus Data Admin
  public function hapus($id)
  {
    $data = [
      'id' => $id
    ];
    $this->db->delete('user', $data);
    redirect('admin');
  }

  // ubah password 
  public function ubahPasswordAdmin()
  {
    $where = [
      'id' => $this->input->post('id')
    ];
    $passwordLama = $this->input->post('passwordLama');
    $passwordBaru = $this->input->post('passwordBaru');
    $database = $this->db->get_where('user', $where)->row_array();
    if (password_verify($passwordLama, $database['password'])) {
      if ($passwordLama != $passwordBaru) {
        $data = [
          'password' => password_hash($this->input->post('passwordBaru'), PASSWORD_DEFAULT)
        ];
        $this->m_master->ubahPasswordAdmin($where, $data);
        $this->session->set_flashdata('pesan', '
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
        <strong>Selamat</strong> Password Kamu Berhasil Di Ubah
        <button type="button" class="close " data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        redirect('dashboard');
      } else {
        $this->session->set_flashdata('pesan', '
        <div class="alert alert-info alert-dismissible fade show" role="alert">
        <strong>Password</strong> Sama Dengan Password Lama
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>');
        redirect('dashboard');
      }
    } else {
      $this->session->set_flashdata('pesan', '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Password</strong> Kamu Salah
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>');
      redirect('dashboard');
    }
  }
}
