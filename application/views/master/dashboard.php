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
              <form action="<?= base_url('dashboard/cariData') ?>" method="post">
                <div class="input-group mb-3">
                  <div class="input-group-append">
                    <select class="custom-select form-control" name="cari_berdasarkan">
                      <option value="">C. Berdasarkan</option>
                      <option value="nama_pendonor">Nama</option>
                      <option value="gol_darah">Gol Darah</option>
                      <option value="alamat_pendonor">Alamat</option>
                    </select>
                  </div>
                  <div class="input-group-append">
                    <input type="text" name="yang_dicari" style="width: 250px" class="form-control ml-1" placeholder="Search Data" autofocus autocomplete="off">
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
                  <th>Gender</th>
                  <th>Alamat</th>
                  <th>No Hp</th>
                  <th>Kelayakan</th>
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

                    <td><?= $row['jenis_kelamin'] ?></td>
                    <td><?= $row['alamat_pendonor'] ?></td>

                    <?php if ($row['no_hp'] != 0) { ?>
                      <td><?= $row['no_hp'] ?></td>
                    <?php } else { ?>
                      <td><a class="text-info">Tidak Ada</a></td>
                    <?php } ?>
                    <?php
                    if (time() >= ($row['tgl_donor'] + 7776000)) { ?>

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
        <div class="card-header border-bottom d-flex justify-content-between align-items-center">
          <h4 class="card-title d-flex">
            <i class='bx bx-check font-medium-5 pl-25 pr-75'></i>Stok Darah
          </h4>

        </div>
        <div class="card-body px-0 py-1">
          <table class='table table-borderless'>
            <tr>
              <td class='col-3'>A</td>
              <td class='col-6'>
                <div class="progress progress-info">
                  <div class="progress-bar" role="progressbar" style="width: <?= $gol_A; ?>%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="<?= $gol_A; ?>"></div>
                </div>
              </td>
              <td class='col-3 text-center'><?= $gol_A; ?>%</td>
            </tr>
            <tr>
              <td class='col-3'>B</td>
              <td class='col-6'>
                <div class="progress progress-success">
                  <div class="progress-bar" role="progressbar" style="width: <?= $gol_B; ?>%" aria-valuenow="0" aria-valuemin="0" aria-valuemax=" <?= $gol_B; ?>"></div>
                </div>
              </td>
              <td class='col-3 text-center'><?= $gol_B; ?>%</td>
            </tr>
            <tr>
              <td class='col-3'>AB</td>
              <td class='col-6'>
                <div class="progress progress-danger">
                  <div class="progress-bar" role="progressbar" style="width: <?= $gol_AB; ?>%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="<?= $gol_AB; ?>"></div>
                </div>
              </td>
              <td class='col-3 text-center'><?= $gol_AB; ?>%</td>
            </tr>
            <tr>
              <td class='col-3'>O</td>
              <td class='col-6'>
                <div class="progress progress-primary">
                  <div class="progress-bar" role="progressbar" style="width: <?= $gol_O; ?>%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="<?= $gol_O; ?>"></div>
                </div>
              </td>
              <td class='col-3 text-center'><?= $gol_O; ?>%</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
</div>
</section>
</div>