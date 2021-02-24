<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_master');
    $this->load->model('m_tambah');
    $this->load->library('pagination');
  }

  // Tampilan Dashboard Utama
  public function index()
  {
    $data['gol_A'] = $this->m_master->hitungJumlahGolA();
    $data['gol_B'] = $this->m_master->hitungJumlahGolB();
    $data['gol_AB'] = $this->m_master->hitungJumlahGolAB();
    $data['gol_O'] = $this->m_master->hitungJumlahGolO();
    $data['user1'] = $this->m_master->dataAdmin()->row_array();
    $data['user'] = $this->m_master->tampil_data()->result_array();
    $data['title'] = 'Dashboard';
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/header', $data);
    $this->load->view('master/dashboard', $data);
    $this->load->view('template/footer', $data);
  }


  // Tambah Data Pendonor
  public function tambah_data_pendonor()
  {
    $data['user1'] = $this->m_master->dataAdmin()->row_array();
    $data['pendonor'] = $this->m_master->tampil_data()->result_array();
    $data['title'] = 'Tambah Data Pendonor';
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/header', $data);
    $this->load->view('master/tambah_donor', $data);
    $this->load->view('template/footer', $data);
  }


  // view tambah data penonor 
  public function tambahPendonor()
  {
    $data['pendonor'] = $this->m_master->tampil_data()->result_array();
    $data['user1'] = $this->m_master->dataAdmin()->row_array();
    $data['title'] = 'Tambah Data Pendonor';
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/header', $data);
    $this->load->view('master/form_view_tambah_pendonor', $data);
    $this->load->view('template/footer', $data);
  }

  // aksi tambah data pendonor
  public function aksi_tambahdataRsud()
  {
    $this->load->library('form_validation');
    $this->form_validation->set_rules('nama_pendonor', 'Nama Pendonor', 'required|trim');
    $this->form_validation->set_rules('nama_pasien', 'Nama pasien', 'required|trim');
    $this->form_validation->set_rules('ruang_pasien', 'Ruang Pasien', 'required|trim');
    $this->form_validation->set_rules('gol_darah', 'Golongan Darah', 'required|trim');
    $this->form_validation->set_rules('alamat', 'Alamat', 'required|trim');
    $this->form_validation->set_rules('agama', 'agama', 'required|trim');
    $this->form_validation->set_rules('no_tali', 'No tali', 'required|trim');
    $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required|trim');
    $this->form_validation->set_rules('jenis_kelamin', 'Jenis kelamin', 'required|trim');
    $this->form_validation->set_rules('bb_tensi', 'Bb tensi', 'required|trim');
    $this->form_validation->set_rules('hb', 'Hb', 'required|trim');
    $this->form_validation->set_rules('no_hp', 'No hp', 'numeric|min_length[12]', ['min_length' => 'Minimal 12 angka']);

    if ($this->form_validation->run() == false) {
      $data['pendonor'] = $this->m_master->tampil_data()->result_array();
      $data['user1'] = $this->m_master->dataAdmin()->row_array();
      $data['title'] = 'Tambah Data Pendonor';
      $this->load->view('template/sidebar', $data);
      $this->load->view('template/header', $data);
      $this->load->view('master/form_view_tambah_pendonor', $data);
      $this->load->view('template/footer', $data);
    } else {
      $data = [
        'nama_pendonor' => $this->input->post('nama_pendonor'),
        'nama_pasien' => $this->input->post('nama_pasien'),
        'ruang_pasien' => $this->input->post('ruang_pasien'),
        'gol_darah' => $this->input->post('gol_darah'),
        'alamat_pendonor' => $this->input->post('alamat'),
        'agama' => $this->input->post('agama'),
        'no_tali' => $this->input->post('no_tali'),
        'pekerjaan' => $this->input->post('pekerjaan'),
        'jenis_kelamin' => $this->input->post('jenis_kelamin'),
        'bb_tensi' => $this->input->post('bb_tensi'),
        'hb' => $this->input->post('hb'),
        'hiv' => ('-'),
        'hcv' => ('-'),
        'hbsag' => ('-'),
        'sypilis' => ('-'),
        'tgl_donor' => strtotime($this->input->post('tgl_donor')),
        'no_hp' => $this->input->post('no_hp'),
        'petugas' => $this->input->post('petugas')
      ];
      $this->m_tambah->tambahDataPendonor($data);
      redirect('dashboard/tambah_data_pendonor');
    }
  }

  // function Hapus Data Pendonor
  public function hapusDataPendonor($id)
  {
    $id_hapus = [
      'id' => $id
    ];
    $this->m_master->hapusDataPendonor($id_hapus);
    redirect('dashboard/tambah_data_pendonor');
  }

  // Ubah Data Pendonor
  public function ubahDataPendonor()
  {
    $this->m_edit->ubahDataPendonor();
    redirect('dashboard/tambah_data_pendonor');
  }

  // Cari Data Penonor
  public function cariData()
  {
    $data['gol_A'] = $this->m_master->hitungJumlahGolA();
    $data['gol_B'] = $this->m_master->hitungJumlahGolB();
    $data['gol_AB'] = $this->m_master->hitungJumlahGolAB();
    $data['gol_O'] = $this->m_master->hitungJumlahGolO();
    $data['user1'] = $this->m_master->dataAdmin()->row_array();
    $data['user'] = $this->m_master->tampil_data()->result_array();
    $data['title'] = 'Dashboard';
    if ($this->input->post('kyword')) {
      $data['user'] = $this->m_master->cariData();
    }
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/header', $data);
    $this->load->view('master/dashboard', $data);
    $this->load->view('template/footer', $data);
  }
}
