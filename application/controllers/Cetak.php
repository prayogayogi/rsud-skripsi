<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Cetak extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_master');

    if (empty($this->session->userdata('email'))) {
      redirect('register');
    }
  }


  public function admin()
  {
    $data['title'] = 'Print';
    $data['data'] = $this->M_master->tampil()->result_array();
    $this->load->view('cetak/adminCetak', $data);
  }
}
