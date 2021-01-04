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
                <h3 class='card-title'>Setok Darah A</h3>
                <div class="card-right d-flex align-items-center">
                  <p>50 </p>
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
                <h3 class='card-title'>Gol O</h3>
                <div class="card-right d-flex align-items-center">
                  <p>532 </p>
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
                  <!-- <p><?= $data[1]['gol_darah'] ?></p> -->
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
                <h3 class='card-title'>Gol B</h3>
                <div class="card-right d-flex align-items-center">
                  <p>10</p>
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
    <div class="row mb-4">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header d-flex justify-content-between align-items-center">

            <div class="col col-5 mt-3 ">
              <form action="<?= base_url('dashboard/cariData') ?>" method="post">
                <div class="input-group mb-3">
                  <input type="text" name="kyword" class="form-control" placeholder="Search Data">
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-primary ml-2">Search</button>
                  </div>
                </div>
              </form>
            </div>
            <!-- <h4 class="card-title">Data Pendonor</h4> -->

            <div class="d-flex ">
              <i data-feather="download"></i>
            </div>
          </div>
          <div class="card-body px-0 pb-0">
            <div class="table-responsive">
              <table class='table mb-0' id="table1">
                <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Gol Darah</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>No Hp</th>
                    <th>Kelayakan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($user as $row) : ?>
                    <tr>
                      <td><?= $row['nama']; ?></td>
                      <td><span class="badge bg-success"><?= $row['gol_darah']; ?></span></td>
                      <td><?= $row['gender'] ?></td>
                      <td><?= $row['alamat'] ?></td>
                      <td><?= $row['no_hp'] ?></td>
                      <?php
                      if (time() >= ($row['tgl_donor'] + 7776000)) {
                        $bisa = "bisa";
                      } else {
                        $bisa = "tidak bisa";
                      }
                      ?>
                      <td> <span class="badge badge-pill badge-info bg-info"><?= $bisa; ?></span></td>
                    </tr>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card ">
          <div class="card-header text-center">
            <h3>Jumlah Donor</h3>
          </div>
          <div class="card-body">
            <div id="radialBars"></div>
            <div class="text-center mb-5">
              <h1 class='text-green'>
                <?php echo $this->db->count_all_results('data'); ?>
              </h1>
            </div>
          </div>
        </div>
        <div class="card widget-todo">
          <div class="card-header border-bottom d-flex justify-content-between align-items-center">
            <h4 class="card-title d-flex">
              <i class='bx bx-check font-medium-5 pl-25 pr-75'></i>Progress
            </h4>

          </div>
          <div class="card-body px-0 py-1">
            <table class='table table-borderless'>
              <tr>
                <td class='col-3'> Darah A</td>
                <td class='col-6'>
                  <div class="progress progress-info">
                    <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td class='col-3 text-center'>60%</td>
              </tr>
              <tr>
                <td class='col-3'> Darah B</td>
                <td class='col-6'>
                  <div class="progress progress-success">
                    <div class="progress-bar" role="progressbar" style="width: 35%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td class='col-3 text-center'>30%</td>
              </tr>
              <tr>
                <td class='col-3'> Darah AB</td>
                <td class='col-6'>
                  <div class="progress progress-danger">
                    <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td class='col-3 text-center'>50%</td>
              </tr>
              <tr>
                <td class='col-3'> Darah O</td>
                <td class='col-6'>
                  <div class="progress progress-primary">
                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </td>
                <td class='col-3 text-center'>80%</td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>