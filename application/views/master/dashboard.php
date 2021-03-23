<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="main-content container-fluid">
  <div class="page-title">
    <h3><?= $title ?></h3>
    <p class="text-subtitle text-muted">System Donor Darah RSUD Mukomuko</p>
  </div>
  <section class="section">
    <div class="row mb-2">
      <div class="col-12 col-md-3">
        <div class="card card-statistic">
          <div class="card-body p-0">
            <div class="d-flex flex-column">
              <div class='px-3 py-3 d-flex justify-content-between'>
                <h3 class='card-title'>GOL A</h3>
                <div class="card-right d-flex align-items-center">
                  <p><?= $gol_A; ?></p>
                </div>
              </div>
              <div class="chart-wrapper">
                <canvas id="canvas1" style="height:100px !important"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-3">
        <div class="card card-statistic">
          <div class="card-body p-0">
            <div class="d-flex flex-column">
              <div class='px-3 py-3 d-flex justify-content-between'>
                <h3 class='card-title'>Gol B</h3>
                <div class="card-right d-flex align-items-center">
                  <p><?= $gol_B; ?> </p>
                </div>
              </div>
              <div class="chart-wrapper">
                <canvas id="canvas2" style="height:100px !important"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-3">
        <div class="card card-statistic">
          <div class="card-body p-0">
            <div class="d-flex flex-column">
              <div class='px-3 py-3 d-flex justify-content-between'>
                <h3 class='card-title'>Gol AB</h3>
                <div class="card-right d-flex align-items-center">
                  <p><?= $gol_AB; ?></p>
                </div>
              </div>
              <div class="chart-wrapper">
                <canvas id="canvas3" style="height:100px !important"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-3">
        <div class="card card-statistic">
          <div class="card-body p-0">
            <div class="d-flex flex-column">
              <div class='px-3 py-3 d-flex justify-content-between'>
                <h3 class='card-title'>Gol O</h3>
                <div class="card-right d-flex align-items-center">
                  <p><?= $gol_O; ?></p>
                </div>
              </div>
              <div class="chart-wrapper">
                <canvas id="canvas4" style="height:100px !important"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row mb-2">
      <div class="col-md-9">
        <div class="card">
          <div class="card-header d-flex justify-content-between align-items-center">
            <div class="col-7">
              <form action="<?= base_url('dashboard') ?>" method="POST">
                <div class="input-group mb-3">
                  <!-- <div class="input-group-append">
                    <select class="custom-select form-control btn btn-sm btn-outline-primary" name="cariBerdasarkan">
                      <option value="gol_darah">Cari Berdasarkan</option>
                      <option value="nama_pendonor">Nama</option>
                      <option value="gol_darah">Gol Darah</option>
                      <option value="alamat_pendonor">Alamat</option>
                    </select>
                  </div> -->
                  <div class="input-group-append">
                    <input type="text" name="kyword" style="width: 250px" class="form-control ml-1" placeholder="Search Data" autofocus autocomplete="off">
                  </div>
                  <div class="input-group-append">
                    <button class="btn btn-primary ml-2" type="submit" id="button-addon2">Search</button>
                  </div>
              </form>
            </div>
          </div>

          <!-- <h4 class="card-title">Data Pendonor</h4> -->

          <div class="d-flex ">
            <i data-feather="download"></i>
          </div>
        </div>
        <div class="card-body px-0 pb-0">
          <div class="table-responsive">
            <table class='table mb-0'>
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>Gol Darah</th>
                  <th>Agama</th>
                  <th>Alamat</th>
                  <th>No Hp</th>
                  <th>Keterangan</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($user as $row) :
                ?>
                  <tr>
                    <td><?= $row['nama_pendonor']; ?></td>

                    <!-- gol A -->
                    <?php if ($row['gol_darah'] == "A") { ?>
                      <td><span class="badge bg-success">
                          <?= $row['gol_darah']; ?>
                        </span></td>
                    <?php } ?>

                    <!-- gol B -->
                    <?php if ($row['gol_darah'] == "B") { ?>
                      <td><span class="badge bg-primary">
                          <?= $row['gol_darah']; ?>
                        </span></td>
                    <?php } ?>

                    <!-- gol AB -->
                    <?php if ($row['gol_darah'] == "AB") { ?>
                      <td><span class="badge bg-danger">
                          <?= $row['gol_darah']; ?>
                        </span></td>
                    <?php } ?>

                    <!-- gol O -->
                    <?php if ($row['gol_darah'] == "O") { ?>
                      <td><span class="badge bg-warning">
                          <?= $row['gol_darah']; ?>
                        </span></td>
                    <?php } ?>

                    <td><?= $row['agama'] ?></td>
                    <td>
                      <?php if ($row['alamat_pendonor'] != '') { ?>
                        <?= $row['alamat_pendonor'] ?>
                      <?php } else { ?>
                        <a class="text-info">Tidak Ada</a>
                      <?php } ?>
                    </td>

                    <?php if ($row['no_hp'] != 0) { ?>
                      <td><?= $row['no_hp'] ?></td>
                    <?php } else { ?>
                      <td><a class="text-info">Tidak Ada</a></td>
                    <?php } ?>

                    <?php
                    if (time() >= ($row['tgl_donor'] + 7776000) && $row['hiv'] === ('-') && $row['hcv'] === ('-') && $row['hbsag'] === ('-') && $row['sypilis'] === ('-')) { ?>

                      <!-- bisa donor -->
                      <td> <span class="badge badge-pill badge-info bg-info">Bisa</span></td>
                    <?php } else { ?>

                      <!-- tidak bisa donor -->
                      <td> <span class="badge badge-pill badge-info bg-danger"> Tidak bisa</span></td>
                    <?php } ?>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
          </div>
          <?= $this->pagination->create_links(); ?>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card ">
        <div class="card-header text-center">
          <h3>Jumlah Donor</h3>
        </div>
        <div class="card-body">
          <div id="radialBars"></div>
          <div class="text-center mb-5">
            <h1 class='text-green'>
              <?= $this->db->count_all_results('data_donor'); ?>
            </h1>
          </div>
        </div>
      </div>
      <div class="card widget-todo">
        <div class="card">
          <div class="card-header text-center">
            <h3>Stok Darah</h3>
          </div>
          <div class="card-body">
            <div id="StokDarah"></div>
            <div class="text-center">
              <h1 class='text-green'>
                <?= $stokDarah; ?>
              </h1>

              <?php if ($user1['role_id'] == 1) { ?>
                <a href="<?= site_url('dashboard/getStokDarah') ?>" class="btn btn-sm btn-primary mt-2 mb-2">Lihat</a>
              <?php } ?>

            </div>
          </div>
        </div>
        <div class="card-body px-0 py-1">
          <table class='table table-borderless'>
            <?php foreach ($get as $stok) : ?>
              <tr>
                <td class='col-3'><?= $stok['gol_darah'] ?></td>
                <td class='col-6'>

                  <?php if ($stok['gol_darah'] === 'A') { ?>
                    <div class="progress progress-succes">
                      <div class="progress-bar" role="progressbar" style="width: <?= $stok['jumlah'] ?>" aria-valuenow="0" aria-valuemin="0" aria-valuemax="<?= $stok['jumlah'] ?>"></div>
                    </div>
                  <?php }  ?>

                  <?php if ($stok['gol_darah'] === 'B') { ?>
                    <div class="progress progress-primary">
                      <div class="progress-bar" role="progressbar" style="width: <?= $stok['jumlah'] ?>" aria-valuenow="0" aria-valuemin="0" aria-valuemax="<?= $stok['jumlah'] ?>"></div>
                    </div>
                  <?php }  ?>

                  <?php if ($stok['gol_darah'] === 'AB') { ?>
                    <div class="progress progress-danger">
                      <div class="progress-bar" role="progressbar" style="width: <?= $stok['jumlah'] ?>" aria-valuenow="0" aria-valuemin="0" aria-valuemax="<?= $stok['jumlah'] ?>"></div>
                    </div>
                  <?php }  ?>

                  <?php if ($stok['gol_darah'] === 'O') { ?>
                    <div class="progress progress-warning">
                      <div class="progress-bar" role="progressbar" style="width: <?= $stok['jumlah'] ?>" aria-valuenow="0" aria-valuemin="0" aria-valuemax="<?= $stok['jumlah'] ?>"></div>
                    </div>
                  <?php }  ?>

                </td>
                <td class='col-3 text-center'><?= $stok['jumlah'] ?></td>
              </tr>
            <?php endforeach; ?>
          </table>
        </div>
      </div>
    </div>
</div>
</section>
</div>