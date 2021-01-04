<body>
  <div id="app">
    <div id="sidebar" class='active'>
      <div class="sidebar-wrapper active">
        <div class="sidebar-header text-center">
          <a href="<?= base_url('dashboard'); ?>"><img src="<?= base_url() ?>assets/mukomuko.png" alt="logo" style="width: 100px; height:100px; margin-right:25px;"></a>
          <!-- ini bagian untuk bagian untuk foto -->
        </div>
        <div class="sidebar-menu">
          <ul class="menu">
            <li class='sidebar-title'>Main Menu</li>
            <li class="sidebar-item">
              <a href="<?= base_url('dashboard') ?>" class='sidebar-link'>
                <i data-feather="layout" width="20"></i>
                <span>Dashboard</span>
              </a>
            </li>


            <?php if ($user1['role_id'] == 1) { ?>
              <li class="sidebar-item">
                <a href="<?= base_url('dashboard/tambah_data_pendonor') ?>" class='sidebar-link'>
                  <i data-feather="grid" width="20"></i>
                  <span>Data PenDonor</span>
                </a>
              </li>
            <?php } ?>

            <?php if ($user1['role_id'] == 2) { ?>
              <li class="sidebar-item  ">
                <a href="<?= base_url('akses_admin'); ?>" class='sidebar-link'>
                  <i data-feather="layout" width="20"></i>
                  <span>Data Stok Darah</span>
                </a>
              </li>
            <?php } ?>
            <?php if ($user1['role_id'] == 1) { ?>
              <li class="sidebar-item  ">
                <a href="<?= base_url('admin'); ?>" class='sidebar-link'>
                  <i data-feather="file-plus" width="20"></i>
                  <span>Data Admin</span>
                </a>
              </li>
              <li class="sidebar-item  ">
                <a href="<?= base_url('petugas'); ?>" class='sidebar-link'>
                  <i data-feather="grid" width="20"></i>
                  <span>Data Petugas</span>
                </a>
              </li>
            <?php } ?>
            <li class="sidebar-item  ">
              <a href="#" class='sidebar-link'>
                <i data-feather="grid" width="20"></i>
                <span>Laporan</span>
              </a>
            </li>
            <li class="sidebar-item  ">
              <a href="<?= base_url('register/logout'); ?>" onclick=" return confirm('Anda Yakin Inggin Keluar..?')" class='sidebar-link'>
                <i data-feather="log-out" width="20"></i>
                <span>Log Out</span>
              </a>
            </li>
            </li>
          </ul>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
      </div>
    </div>