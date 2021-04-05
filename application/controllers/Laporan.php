<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_laporan');
    $this->load->model('M_master');

    if (empty($this->session->userdata('email'))) {
      redirect('register');
    }
  }

  public function index()
  {
    $tahun = date('Y');
    $data['hiv'] = $this->M_laporan->hiv($tahun);
    $data['hcv'] = $this->M_laporan->hcv($tahun);
    $data['hbsag'] = $this->M_laporan->hbsag($tahun);
    $data['sypilis'] = $this->M_laporan->sypilis($tahun);
    $data['user1'] = $this->M_master->dataAdmin()->row_array();
    $data['user'] = $this->M_laporan->tampil()->result_array();
    $data['title'] = 'Laporan';
    $data['getTahun'] = $this->M_laporan->getTahun($tahun);

    $data['laki'] = $this->M_laporan->lakiLakiget($tahun);
    $data['perempuan'] = $this->M_laporan->perempuanget($tahun);
    $data['jumlah'] = $this->M_laporan->filterTahunJumlah($tahun);

    $data['golA'] = $this->M_laporan->golA($tahun);
    $data['golB'] = $this->M_laporan->golB($tahun);
    $data['golAb'] = $this->M_laporan->golAb($tahun);
    $data['golO'] = $this->M_laporan->golO($tahun);

    $this->load->view('template/sidebar', $data);
    $this->load->view('template/header', $data);
    $this->load->view('laporan/laporan', $data);
    $this->load->view('template/footer', $data);
  }

  public function getTahun()
  {
    $data['petugas'] = $this->M_master->dataAdmin()->row_array();
    $data['title'] = "Cetak Laporan";
    $data['tahun'] = $this->input->post('tahun');

    $data['hiv'] = $this->M_laporan->hiv($data['tahun']);
    $data['hcv'] = $this->M_laporan->hcv($data['tahun']);
    $data['hbsag'] = $this->M_laporan->hbsag($data['tahun']);
    $data['sypilis'] = $this->M_laporan->sypilis($data['tahun']);
    $data['laki'] = $this->M_laporan->lakiLakiget($data['tahun']);
    $data['perempuan'] = $this->M_laporan->perempuanget($data['tahun']);
    $data['jumlah'] = $this->M_laporan->filterTahunJumlah($data['tahun']);

    // UNTUK JUMLAH GOL PER GOLONGAN
    $data['golA'] = $this->M_laporan->golA($data['tahun']);
    $data['golB'] = $this->M_laporan->golB($data['tahun']);
    $data['golAb'] = $this->M_laporan->golAb($data['tahun']);
    $data['golO'] = $this->M_laporan->golO($data['tahun']);
    // Ini Mnegambil Data Semua data darah
    // $data['th'] = $this->M_laporan->filterTahun($data['tahun']);



    $this->load->view('cetak/adminCetak', $data);
  }
}
