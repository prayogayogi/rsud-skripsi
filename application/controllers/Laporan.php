<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_master');
  }

  public function laporanAdmin()
  {

    $data['user1'] = $this->m_master->dataAdmin()->row_array();
    $data['user'] = $this->m_master->tampil()->result_array();
    $data['title'] = 'Laporan';
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/header', $data);
    $this->load->view('laporan/laporanAdmin', $data);
    $this->load->view('template/footer', $data);
  }
}
