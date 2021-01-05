<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Petugas extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_master');
  }


  public function admin()
  {
    $data['title'] = 'Print';
    // $data['data'] = $this->m_master->tampil_data()->result_array();
    $this->load->view('print/adminPrint', $data);
  }
}
