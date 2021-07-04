<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?></title>

  <!-- Favicons -->
  <link href="<?= base_url('assets/') ?>favicon.png" rel="icon">

  <!-- Style Css -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/assets/css/bootstrap.css">
  <!-- <link rel="stylesheet" href="<?= base_url() ?>assets/assets/vendors/chartjs/Chart.min.css"> -->
  <!-- <link rel="stylesheet" href="<?= base_url() ?>assets/assets/vendors/perfect-scrollbar/perfect-scrollbar.css"> -->
  <link rel="stylesheet" href="<?= base_url() ?>assets/assets/css/app.css">
  <!-- <link rel="shortcut icon" href="<?= base_url() ?>assets/favicon.png" type="image/x-icon"> -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
  <!-- <link rel="stylesheet" href="<?= base_url() ?>assets/dataTable/voler/style.css" type="css"> -->
</head>

<body>
  <div id="app">
    <!-- Favicons -->
    <div id="sidebar" class='active'>
      <div class="sidebar-wrapper active">
        <div class="sidebar-header text-center">
          <a href="<?= base_url('dashboard'); ?>"><img src="<?= base_url() ?>assets/logo resud.png" alt="logo" style="width: 100px; height:100px; margin-right:25px;"></a>
          <!-- ini bagian untuk bagian untuk foto -->
        </div>
        <div class="sidebar-menu">
          <ul class="menu">
            <li class='sidebar-title'>Main Menu</li>
            <li class="sidebar-item <?= (current_url() == base_url('dashboard')) || (current_url() == base_url('dashboard/getStokDarah')) ? 'active' : '' ?>">
              <a href="<?= base_url('dashboard') ?>" class="sidebar-link">
                <i data-feather="home" width="20"></i>
                <span>Dashboard</span>
              </a>
            </li>


            <?php if ($user1['role_id'] == 1) { ?>
              <li class="sidebar-item <?= (current_url() == base_url('dashboard/tambah_data_pendonor')) || (current_url() == base_url('dashboard/tambahPendonor')) ? 'active' : '' ?>">
                <a href="<?= base_url('dashboard/tambah_data_pendonor') ?>" class='sidebar-link'>
                  <i data-feather="layers" width="20"></i>
                  <span>Data PenDonor</span>
                </a>
              </li>
            <?php } ?>

            <?php if ($user1['role_id'] == 2) { ?>
              <li class="sidebar-item <?= (current_url() == base_url('dashboard/getStokDarah')) ? 'active' : '' ?>">
                <a href="<?= base_url('dashboard/getStokDarah'); ?>" class='sidebar-link'>
                  <i data-feather="briefcase" width="20"></i>
                  <span>Stok Darah</span>
                </a>
              </li>
            <?php } ?>
            <?php if ($user1['role_id'] == 1) { ?>
              <li class="sidebar-item <?= (current_url() == base_url('admin')) ? 'active' : '' ?>">
                <a href="<?= base_url('admin'); ?>" class='sidebar-link'>
                  <i data-feather="user" width="20"></i>
                  <span>Data Admin</span>
                </a>
              </li>
              <li class="sidebar-item <?= (current_url() == base_url('petugas')) ? 'active' : '' ?>">
                <a href="<?= base_url('petugas'); ?>" class='sidebar-link'>
                  <i data-feather="user" width="20"></i>
                  <span>Data Petugas</span>
                </a>
              </li>

              <li class="sidebar-item <?= (current_url() == base_url('laporan')) ? 'active' : '' ?>">
                <a href="<?= base_url('laporan'); ?>" class='sidebar-link'>
                  <i data-feather="file-text" width="20"></i>
                  <span>Laporan</span>
                </a>
              </li>
            <?php } ?>
            <li class="sidebar-item">
              <a href="<?= base_url('register/logout'); ?>" class='sidebar-link logout'>
                <i data-feather="log-out" width="20"></i>
                <span>Log Out</span>
              </a>
            </li>
            </li>
          </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
      </div>