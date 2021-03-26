<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_laporan');
    $this->load->model('m_master');

    if (empty($this->session->userdata('email'))) {
      redirect('register');
    }
  }

  public function index()
  {
    $tahun = date('Y');
    $data['hiv'] = $this->m_laporan->hiv($tahun);
    $data['hcv'] = $this->m_laporan->hcv($tahun);
    $data['hbsag'] = $this->m_laporan->hbsag($tahun);
    $data['sypilis'] = $this->m_laporan->sypilis($tahun);
    $data['user1'] = $this->m_master->dataAdmin()->row_array();
    $data['user'] = $this->m_laporan->tampil()->result_array();
    $data['title'] = 'Laporan';
    $data['getTahun'] = $this->m_laporan->getTahun($tahun);

    $data['laki'] = $this->m_laporan->lakiLakiget($tahun);
    $data['perempuan'] = $this->m_laporan->perempuanget($tahun);
    $data['jumlah'] = $this->m_laporan->filterTahunJumlah($tahun);

    $this->load->view('template/sidebar', $data);
    $this->load->view('template/header', $data);
    $this->load->view('laporan/laporan', $data);
    $this->load->view('template/footer', $data);
  }

  public function getTahun()
  {
    $data['title'] = "Laporan";
    $data['tahun'] = $this->input->post('tahun');

    $data['hiv'] = $this->m_laporan->hiv($data['tahun']);
    $data['hcv'] = $this->m_laporan->hcv($data['tahun']);
    $data['hbsag'] = $this->m_laporan->hbsag($data['tahun']);
    $data['sypilis'] = $this->m_laporan->sypilis($data['tahun']);
    $data['laki'] = $this->m_laporan->lakiLakiget($data['tahun']);
    $data['perempuan'] = $this->m_laporan->perempuanget($data['tahun']);
    $data['jumlah'] = $this->m_laporan->filterTahunJumlah($data['tahun']);

    // Ini Mnegambil Data Semua data darah
    // $data['th'] = $this->m_laporan->filterTahun($data['tahun']);


    $this->load->view('cetak/adminCetak', $data);
  }
}
