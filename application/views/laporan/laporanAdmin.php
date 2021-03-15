<div class="main-content container-fluid">
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Laporan Pendonor
      </h1>
    </section>
    <section class="content">
      <a href="<?= base_url('cetak/admin'); ?>" target="blank" class="btn btn-primary"><i class="fa fa-print mr-2"></i>Cetak Data</a>
      <div class="row">
        <div class="col-12 mt-4 col-lg-6">
          <div class="card">
            <div class="card-header">
              <h4>Data pendonor</h4>
            </div>
            <div class="card-body">
              <div class="buttons">
                <div class="section-title mt-0">Jumlah Golongan darah berdasarkan jenis kelamin</div>
                <button type="button" class="btn btn-primary">
                  Laki-Laki<span class="badge bg-transparent">4</span>
                </button>
                <button type="button" class="btn btn-danger">
                  Perempuan <span class="badge bg-transparent">4</span>
                </button>
                <div class="section-title">Jumlah Rs Yang Dilayani</div>
                <button type="button" class="btn btn-dark">
                  RSIA AL BARA<span class="badge bg-transparent">4</span>
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- <div class="col-12 mt-4 col-lg-2">
          <div class="card ">
            <div class="card-header text-center">
              <h3>Jumlah </h3>
            </div>
            <div class="card-body">
              <div id="radialBars"></div>
              <div class="text-center mb-5">
                <h1 class='text-green'>
                </h1>
              </div>
            </div>
          </div>
        </div> -->

        <div class="col-12 mt-4 col-lg-6">
          <div class="card">
            <div class="card-header">
              <h4>Data pendonor</h4>
            </div>
            <div class="card-body">
              <div class="buttons">
                <div class="section-title mt-0">Jumlah uji saring infeksi menular lewat tranfusi darah</div>
                <button type="button" class="btn btn-primary">
                  HIV<span class="badge bg-transparent">4</span>
                </button>
                <button type="button" class="btn btn-warning">
                  HCV <span class="badge bg-transparent">4</span>
                </button>
                <button type="button" class="btn btn-dark">
                  HBSAG <span class="badge bg-transparent">4</span>
                </button>
                <button type="button" class="btn btn-danger">
                  SYPILIS <span class="badge bg-transparent">4</span>
                </button>
              </div>
            </div>
          </div>
        </div>
    </section>


    <!-- untuk table -->
    <div class="col col-6 d-none">
      <div class="table-responsive">
        <table class="table">
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Gol Darah</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>No Hp</th>
            <th>Agama</th>
            <th>Tgl Donor</th>
            <th>Kelayakan</th>
          </tr>

          <?php
          $no = 1;
          foreach ($user as $data) : ?>
            <tr>
              <td><?= $no++ ?></td>
              <td><?= $data['nama_pendonor'] ?></td>
              <td><?= $data['gol_darah'] ?></td>
              <td><?= $data['jenis_kelamin'] ?></td>
              <td><?= $data['alamat_pendonor'] ?></td>
              <?php if ($data['no_hp'] != 0) { ?>
                <td><?= $data['no_hp'] ?></td>
              <?php } else { ?>
                <td><a class="text-info">Tidak Ada</a></td>
              <?php } ?>
              <td><?= $data['agama'] ?></td>
              <td><?= date('d-m-Y', $data['tgl_donor']); ?></td>
              <?php
              if (time() >= ($data['tgl_donor'] + 7776000)) { ?>

                <!-- bisa donor -->
                <td> <span class="badge badge-pill badge-info bg-info">Bisa</span></td>
              <?php } else { ?>
                <!-- tidak bisa donor -->
                <td> <span class="badge badge-pill badge-info bg-danger"> Tidak bisa</span></td>
              <?php } ?>
            </tr>
          <?php endforeach; ?>
        </table>
      </div>
    </div>