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
  <link rel="shortcut icon" href="<?= base_url() ?>assets/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/dataTable/voler/style.css" type="css">
</head>
<div id="main">
  <nav class="navbar navbar-header navbar-expand navbar-light">
    <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
    <button class="btn navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Tangkapan Flash Data -->
    <div class="flash-ambil" data-flashdata="<?= $this->session->flashdata('ambilDarah'); ?>"></div>
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>"></div>
    <div class="flash-dataa" data-flashdata="<?= $this->session->flashdata('data'); ?>"></div>
    <div class="flash-dataPetugas" data-flashdata="<?= $this->session->flashdata('pesanPetugas'); ?>"></div>
    <div class="flash-data_password" data-flashdata="<?= $this->session->flashdata('password'); ?>"></div>
    <div class="flash-data_passwordNot" data-flashdata="<?= $this->session->flashdata('passwordNot'); ?>"></div>
    <div class="flash-datalogin" data-flashdata="<?= $this->session->flashdata('pesanlogin'); ?>"></div>
    <!-- Akhir Tangkapan Flash Data -->

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav d-flex align-items-center navbar-light ml-auto">
        <li class="dropdown">
          <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <div class="avatar mr-0">
              <p class="mr-4 mt-1"><?= $user1['nama']; ?></p>
              <?php if ($user1['role_id'] == 1) { ?>
                <img src="<?= base_url('assets/gambar/admin/') . $user1['gambar']; ?>" width="50px" alt="gambar">
              <?php } else { ?>
                <img src="<?= base_url('assets/gambar/petugas/') . $user1['gambar']; ?>" width="50px" alt="gambar">
              <?php } ?>
            </div>
        <li class="dropdown mb-2">
          <div class=" d-lg-inline-block">
            <i data-feather="settings"></i>
          </div>
          <div class="dropdown-menu dropdown-menu-right">
            <a class=" dropdown-item mb-1" href="<?= base_url('auth/profile') ?>" style="margin-top: -20px;" data-toggle="modal" data-target="#exampleModal1">
              <i data-feather="user"></i>Profile</a>
            <?php if ($user1['role_id'] == 1) { ?>
              <a class="dropdown-item mb-1" href="#" data-toggle="modal" data-target="#exampleModal2">
                <i data-feather="user"></i>Ubah Password</a>
            <?php } ?>
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
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Profile Kamu</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body d-flex justify-content-center">
          <div class="card" style="width: 25rem;">
            <ul class="list-group list-group-flush">
              <li class="list-group-item mt-4">NAMA <small class="h5 ml-5">: <?= $user1['nama']; ?></small>
              </li>
              <li class="list-group-item mt-4">EMAIL <small class="h5 ml-5">: <?= $user1['email']; ?></small></li>
              <li class="list-group-item mt-4">TGL MASUK <small class="h5 ml-2">: <?= date('d-M-Y', ($user1['tgl_daftar'])); ?></small></li>
              <li class="list-group-item mt-4">JABATAN <small class="h5 ml-4">:

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
          <button type=" button" class="btn btn-primary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- akhir profile -->

  <!-- modal ubah password -->
  <div class="modal fade" id="exampleModal2" tabindex="-4" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content mt-4">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ubah Password</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <?= form_open_multipart('admin/ubahPasswordAdmin'); ?>
        <div class="modal-body d-flex justify-content-center">
          <div class="card" style="width: 25rem;">
            <input type="hidden" name="id" value="<?= $user1['id']; ?>">
            <div class="modal-body">
              <div class="form-group">
                <label for="nama" class="ml-1">Password Lama</label>
                <input type="password" name="passwordLama" id="nama" placeholder="Password" class="form-control" value="<?= set_value('passwordLama'); ?>">
                <?= form_error('passwordLama', '<small class="text-danger ml-1">', '</small>'); ?>
              </div>
              <div class="form-group">
                <label for="nama" class="ml-1">Password Baru</label>
                <input type="password" name="passwordBaru" id="nama" placeholder="Password Baru" class="form-control" value="<?= set_value('passwordBaru'); ?>">
                <?= form_error('passwordBaru', '<small class="text-danger ml-1">', '</small>'); ?>
              </div>
            </div>
          </div>
          <div class="mt-5">
            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
          </div>
        </div>
        <?= form_close(); ?>
      </div>
    </div>
  </div>
  <!-- akhir modal -->