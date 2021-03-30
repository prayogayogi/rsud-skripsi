<?php
defined('BASEPATH') or exit('No direct script access allowed');
class HomeLoginController extends CI_Controller
{
  public function index()
  {
    if ($this->session->userdata('email')) {
      redirect('dashboard');
    }
    $data['title'] = "Home Page";
    $this->load->view('homeLogin/homeLogin', $data);
  }
}
