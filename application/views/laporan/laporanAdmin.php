<div class="main-content container-fluid">
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Data Pendonor
      </h1>
    </section>
    <section class="content">
      <a href="<?= base_url('cetak/admin'); ?>" target="blank" class="btn btn-primary"><i class="fa fa-print mr-2"></i>Cetak Data</a>
      <!-- <div class="navbar-from float-right ">
        <?= form_open('dashboard/cari') ?>
        <input type=" text" placeholder="Cari" class="form" name="cari">
        <button type="submit" class="btn btn-sm btn-primary ">Cari data</button>
        <?= form_close() ?>
      </div> -->
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
    </section>