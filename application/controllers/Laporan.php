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
    $data['lakiLaki'] = $this->m_laporan->lakiLaki();
    $data['perempuan'] = $this->m_laporan->perempuan();
    $data['hiv'] = $this->m_laporan->hiv();
    $data['hcv'] = $this->m_laporan->hcv();
    $data['hbsag'] = $this->m_laporan->hbsag();
    $data['sypilis'] = $this->m_laporan->sypilis();
    $data['user1'] = $this->m_master->dataAdmin()->row_array();
    $data['user'] = $this->m_laporan->tampil()->result_array();
    $data['title'] = 'Laporan';
    $data['getTahun'] = $this->m_laporan->getTahun();

    $data['jumlah'] = $this->m_laporan->filterTahunJumlah();
    var_dump($data['jumlah']);
    // var_dump($data['getTahun']);
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/header', $data);
    $this->load->view('laporan/laporan', $data);
    $this->load->view('template/footer', $data);
  }

  public function getTahun()
  {
    $data['title'] = "Laporan";
    $dat = $this->input->post('tahun');

    $data['tahun'] = $this->m_laporan->filterTahun($dat);
    $data['tadhun'] = $this->m_laporan->filterTahunJumlah($dat);
    $this->load->view('cetak/adminCetak', $data);
  }
}
