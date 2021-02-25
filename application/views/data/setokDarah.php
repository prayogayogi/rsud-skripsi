<div class="main-content container-fluid">
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Data Pendonor
      </h1>
    </section>
    <section class="content">
      <div class="table-responsive">
        <table class="table">
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Gol Darah</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>No Hp</th>
            <th>Agama</th>
            <th>Tgl Donor</th>
            <th>Kelayakan</th>
          </tr>

          <?php
          $no = 1;
          foreach ($pendonor as $data) : ?>
            <tr>
              <td><?= $no++ ?></td>
              <td><?= $data['nama_pendonor'] ?></td>
              <td><?= $data['gol_darah'] ?></td>
              <td><?= $data['alamat_pendonor'] ?></td>
              <td><?= $data['jenis_kelamin'] ?></td>
              <td><?= $data['no_hp'] ?></td>
              <td><?= $data['agama'] ?></td>
              <td><?= date('d-m-Y', $data['tgl_donor']); ?></td>
              <?php
              if (time() >= ($data['tgl_donor'] + 7776000)) {
                $bisa = "bisa";
              } else {
                $bisa = "tidak bisa";
              }
              ?>
              <td> <span class="badge bg-info"><?= $bisa; ?></span></td>
            </tr>
          <?php endforeach; ?>
        </table>
      </div>
    </section>