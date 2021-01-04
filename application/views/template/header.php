<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?></title>

  <link rel="stylesheet" href="<?= base_url() ?>assets/assets/css/bootstrap.css">

  <link rel="stylesheet" href="<?= base_url() ?>assets/assets/vendors/chartjs/Chart.min.css">

  <link rel="stylesheet" href="<?= base_url() ?>assets/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/assets/css/app.css">
  <link rel="shortcut icon" href="<?= base_url() ?>assets/assets/images/favicon.svg" type="image/x-icon">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
</head>
<div id="main">
  <nav class="navbar navbar-header navbar-expand navbar-light">
    <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
    <button class="btn navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav d-flex align-items-center navbar-light ml-auto">
        <li class="dropdown">
          <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <div class="avatar mr-0">
              <p class="mr-4 mt-1">Hallo <?= $user1['nama']; ?></p>
              <img src="<?php echo base_url('assets') ?>/assets/images/avatar/profile.jpg" alt="" srcset="">
            </div>
        <li class="dropdown mr-2">
          <div class="d-lg-inline-block">
            <i data-feather="settings"></i>
          </div>
          <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item mb-3" href="<?= base_url('auth/profile') ?> " data-toggle="modal" data-target="#exampleModal1">
              <i data-feather="user"></i>Profile</a>
            <a class="dropdown-item" href="<?= base_url('register/logout') ?>" onclick="return confirm ('Kamu Yakin Inggin Keluar..?')"><i data-feather="log-out"></i> Logout</a>
          </div>
        </li>
        </li>
      </ul>
    </div>
  </nav>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal1" tabindex="-4" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content mt-4">
        <div class="modal-header bg-primary text-white">
          <h5 class="modal-title" id="exampleModalLabel">Profile Kamu</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body d-flex justify-content-center">
          <div class="card" style="width: 25rem;">
            <ul class="list-group list-group-flush">
              <li class="list-group-item mt-4">NAMA : <small class="h5"><?= $user1['nama']; ?></small>
              </li>
              <li class="list-group-item mt-4">EMAIL : <small class="h5"><?= $user1['email']; ?></small></li>
              <li class="list-group-item mt-4">Tgl Masuk : <small class="h5"><?= date('d-M-Y', ($user1['tgl_daftar'])); ?></small></li>
              <li class="list-group-item mt-4">JABATAN : <small class="h5">

                  <?php
                  $jabatan = $user1['role_id'];
                  if ($jabatan == 2) {
                    echo "Petugas";
                  } elseif ($jabatan == 1) {
                    echo "Admin";
                  }
                  ?>

                </small></li>
            </ul>
          </div>
        </div>
        <div class="modal-footer">
          <button type=" button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- akhir modal -->