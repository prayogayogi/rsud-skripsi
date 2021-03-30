<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Akses_admin extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_master');

    if (empty($this->session->userdata('email'))) {
      redirect('register');
    }
  }
  public function index()
  {
    $data['user1'] = $this->M_master->dataAdmin()->row_array();
    $data['pendonor'] = $this->db->get('data_donor')->result_array();
    $data['title'] = 'Data Stok Darah';
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/header', $data);
    $this->load->view('data/setokDarah', $data);
    $this->load->view('template/footer', $data);
  }
}
