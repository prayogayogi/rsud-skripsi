<div class="main-content container-fluid">
  <div class="page-title">
    <h3><?= $title ?></h3>
    <p class="text-subtitle text-muted">System Donor Darah RSUD Mukomuko</p>
  </div>
  <div class="card-body px-0 pb-0">
    <div class="table-responsive">
      <table class='table mb-0'>
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Pendonor</th>
            <th>Gol Darah</th>
            <th>Agama</th>
            <th>Alamat</th>
            <th>No Hp</th>
            <th>Bisa Donor</th>
            <!-- pengkondisian untuk petugas tidak bisa lihat -->
            <?php if ($user1['role_id'] == 1) { ?>
              <th>Ambil Darah</th>
            <?php } ?>
            <!-- akhir pengkonsisian -->
          </tr>
        </thead>
        <tbody>
          <?php
          $no = 1;
          foreach ($getStokDarah as $stok) : ?>
            <tr>
              <td><?= $no++; ?></td>
              <td><?= $stok['nama_pendonor'] ?></td>
              <!-- gol A -->
              <?php if ($stok['gol_darah'] == "A") { ?>
                <td><span class="badge bg-success">
                    <?= $stok['gol_darah']; ?>
                  </span></td>
              <?php } ?>

              <!-- gol B -->
              <?php if ($stok['gol_darah'] == "B") { ?>
                <td><span class="badge bg-primary">
                    <?= $stok['gol_darah']; ?>
                  </span></td>
              <?php } ?>

              <!-- gol AB -->
              <?php if ($stok['gol_darah'] == "AB") { ?>
                <td><span class="badge bg-danger">
                    <?= $stok['gol_darah']; ?>
                  </span></td>
              <?php } ?>

              <!-- gol O -->
              <?php if ($stok['gol_darah'] == "O") { ?>
                <td><span class="badge bg-warning">
                    <?= $stok['gol_darah']; ?>
                  </span></td>
              <?php } ?>

              <td><?= $stok['agama']; ?></td>
              <td><?= $stok['alamat_pendonor']; ?></td>
              <!-- untuk No Hp -->
              <?php if ($stok['no_hp'] != 0) { ?>
                <td><?= $stok['no_hp'] ?></td>
              <?php } else { ?>
                <td><a class="text-info">Tidak Ada</a></td>
              <?php } ?>
              <!-- Akhir Untuk No Hp -->

              <!-- Status Bisa Donor Atau Tidak -->
              <?php
              if (time() >= ($stok['tgl_donor'] + 7776000) && $stok['hiv'] === ('-') && $stok['hcv'] === ('-') && $stok['hbsag'] === ('-') && $stok['sypilis'] === ('-')) { ?>

                <!-- bisa donor -->
                <td> <span class="badge badge-pill badge-info bg-info">Bisa</span></td>
              <?php } else { ?>

                <!-- tidak bisa donor -->
                <td> <span class="badge badge-pill badge-info bg-danger"> Tidak bisa</span></td>
              <?php } ?>
              <!-- Akhir Status Bisa Donor Atau Tidak -->

              <?php if ($user1['role_id'] == 1) { ?>
                <td class="text-center">
                  <a href="<?= base_url('dashboard/ambilDarah/') . $stok['id'] ?>" onclick="return confirm('Yakin Inggin Mengambil Darah Yang Ini.?')"><span class="btn btn-success"><i class="fas fa-check-circle"></i></span></a>
                </td>
              <?php } ?>

            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>