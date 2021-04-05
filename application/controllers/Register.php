<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Register extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model('M_master');
  }

  // login
  public function index()
  {
    if ($this->session->userdata('email')) {
      redirect('dashboard');
    }
    $data['title'] = 'Login';
    $this->load->view('regisTemplate/header', $data);
    $this->load->view('master/login');
    $this->load->view('regisTemplate/footer');
  }

  public function aksi_login()
  {
    $this->form_validation->set_rules('email', 'Username', 'required|trim|valid_email', ['required' => 'Username harus Di Isi.!']);
    $this->form_validation->set_rules('password1', 'Username', 'required|trim', ['required' => 'Password Harus di Isi.!']);

    if ($this->form_validation->run()) {
      $email = $this->input->post('email', true);
      $password1 = $this->input->post('password1', true);
      $user = $this->db->get_where('user', ['email' => $email])->row_array();

      if ($user['aktif'] == 1) {
        if (password_verify($password1, $user['password'])) {
          $data = [
            'email' => $user['email'],
            'role_id' => $user['role_id']
          ];
          $this->session->set_userdata($data);
          $this->session->set_flashdata('pesanlogin', $user['nama']);
          redirect('dashboard');
        } else {
          $this->session->set_flashdata('pesanlog', 'Password Anda Salah.!');
          redirect('register');
        }
      } else {
        $this->session->set_flashdata('pesanlog', 'Username Anda Salah.!');
        redirect('register');
      }
    } else {
      $data['title'] = 'Login';
      $this->load->view('regisTemplate/header', $data);
      $this->load->view('master/login');
      $this->load->view('regisTemplate/footer');
    }
  }


  // log out
  public function logout()
  {
    $this->session->sess_destroy('userdata');
    $this->session->unset_userdata('$data');
    redirect('homeLoginController');
  }


  // registration ini untuk registrasi user baru, dan ini tidak di pakai.
  public function registration()
  {
    $data['title'] = 'Registration';
    $this->load->view('regisTemplate/header', $data);
    $this->load->view('master/registration');
    $this->load->view('regisTemplate/footer');
  }

  public function aksi_registration()
  {
    $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
    $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
    $this->form_validation->set_rules('password1', 'Password', 'required|trim|matches[password2]');
    $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

    if ($this->form_validation->run()) {
      $nama = htmlspecialchars($this->input->post('nama', true));
      $email = htmlspecialchars($this->input->post('email', true));
      $password = htmlspecialchars(password_hash($this->input->post('password1', true), PASSWORD_DEFAULT));

      $data = [
        'nama' => $nama,
        'email' => $email,
        'gambar' => 'default.jpg',
        'password' => $password,
        'role_id' => 2,
        'aktif' => 1,
        'tgl_daftar' => time()
      ];
      $this->M_master->input_user($data);
      $this->session->set_flashdata('pesanlog', 'Berhasil Ditambah');
      redirect('register');
    } else {
      $data['title'] = 'Registration';
      $this->load->view('regisTemplate/header', $data);
      $this->load->view('master/registration');
      $this->load->view('regisTemplate/footer');
    }
  }
}
