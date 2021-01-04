<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Akses_admin extends CI_Controller
{
  public function index()
  {
    $data['user1'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    $data['pendonor'] = $this->db->get('data')->result_array();
    $data['title'] = 'Data Stok Darah';
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/header', $data);
    $this->load->view('data/setokDarah', $data);
    $this->load->view('template/footer', $data);
  }
}
