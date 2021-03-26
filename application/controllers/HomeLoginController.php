<?php
defined('BASEPATH') or exit('No direct script access allowed');
class HomeLoginController extends CI_Controller
{
  public function index()
  {
    $data['title'] = "Home Page";
    $this->load->view('homeLogin/homeLogin', $data);
  }
}
