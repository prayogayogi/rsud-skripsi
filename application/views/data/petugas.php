<div class="main-content container-fluid">
  <div class="page-title">
    <div class="row">
      <div class="col-12 col-md-6">
        <h3>Data Petugas</h3>
        <p class="text-subtitle text-muted">Data Petugas Ini Merupkan, Data Petugas Yang Bisa Mengakses Sistem.</p>
      </div>
      <?php

      if (isset($_POST['submit'])) {
        if (form_error('nama') && (form_error('email')) && (form_error('password')) && (form_error('gambar'))) {
          $error;
        }
        $error = "Oops..! Data Ada Yang Salah.";
      }
      ?>
    </div>
  </div>
  <!-- Striped rows start -->
  <div class="row" id="table-striped">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <a href="http://" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalDataPetugas"><i class="fas fa-plus"></i> Data Petugas</a>
          <?php
          if (isset($_POST['submit'])) {
            echo $error;
          }
          ?>
        </div>
        <div class="card-content">
          <!-- table striped -->
          <div class="table-responsive">
            <table class="table table-striped mb-0">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>Email</th>
                  <th>Gambar</th>
                  <th>Setatus</th>
                  <th>Tgl Kerja</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($data as $petugas) : ?>
                  <tr>
                    <td class="text-bold-500"><?= $petugas['nama'] ?></td>
                    <td><?= $petugas['email']; ?></td>
                    <td class="text-bold-500"><img src="<?= base_url('assets/gambar/petugas/') . $petugas['gambar']; ?>" width="50px" alt=""></td>
                    <?php
                    $aktif = $petugas['role_id'];
                    if ($aktif == 1) {
                      $ada = 'Admin';
                    } elseif ($aktif == 2) {
                      $ada = 'Petugas';
                    } else {
                      $ada = 'No Akfir';
                    }
                    ?>
                    <?php if ($aktif == 1) { ?>
                      <td>
                        <span class="badge bg-success"><?= $ada; ?></span>
                      </td>
                    <?php } ?>
                    <?php if ($aktif == 2) { ?>
                      <td>
                        <span class="badge" style="background-color: #cd6133;"><?= $ada; ?></span>
                      </td>
                    <?php } ?>
                    <td><?= date('d-m-Y', $petugas['tgl_daftar']); ?></td>
                    <td>
                      <a href="<?= base_url('petugas/hapus/') . $petugas['id']; ?>" class="btn btn-danger btn-sm" name="hapus" onclick="return confirm ('Kamu Yakin Inggin Menghapus..?')"><i class="fas fa-trash-alt"></i></a>
                      <br><br>
                      <a href="#" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalEditPetugas<?= $petugas['id'] ?>" name="edit"><i class="fas fa-edit"></i></a>
                    </td>
                  <tr>
                  <?php endforeach; ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Striped rows end -->

<!-- MODAL -->

<!-- Modal input data petugas-->
<div class="modal fade" id="exampleModalDataPetugas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form input data Petugas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open_multipart('petugas/tambahPetugas'); ?>
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" name="nama" id="nama" placeholder="Masukan Nama" class="form-control" value="<?= set_value('nama'); ?>" autocomplete="off">
          <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" name="email" id="email" placeholder="Masukan Email" class="form-control" value="<?= set_value('email'); ?>" autocomplete="off">
          <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password1" id="password" placeholder="Masukan password" class="form-control">
          <small id="password" class="form-text text-muted ml-1 mt-1">Passwor Minimal 4 Karakter.!</small>
          <?= form_error('password1', '<small class="text-danger">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="password">Konfirmasi Password</label>
          <input type="password" name="password2" id="password" placeholder="Masukan password" class="form-control">
          <?= form_error('password2', '<small class="text-danger">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="gambar">Gambar</label>
          <input type="file" name="gambar" id="gambar" placeholder="Masukan gambar" class="form-control">
          <?= form_error('gambar', '<small class="text-danger">', '</small>'); ?>
        </div>
        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="submit" class="btn btn-primary">Save Data</button>
        <?= form_close(); ?>
      </div>
    </div>
  </div>
</div>
<!-- akhir moodal input data petugas -->


<!-- modal update data petugas -->
<?php foreach ($data as $petugas) : ?>
  <div class="modal fade" id="exampleModalEditPetugas<?= $petugas['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form Update Data Petugas</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?= form_open_multipart('petugas/editDataPetugas'); ?>
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" value="<?= $petugas['nama'] ?>" class="form-control" value="<?= set_value('nama'); ?>" autocomplete="off">
            <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
          </div>
          <div class="form-group">
            <label for="email">email</label>
            <input type="text" name="email" id="email" value="<?= $petugas['email'] ?>" class="form-control" value="<?= set_value('email'); ?>" readonly>
            <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
          </div>
          <div class="form-group">
            <label for="gambar">gambar</label>
            <input type="file" name="gambar" id="gambar" placeholder="Masukan gambar" class="form-control">
            <img class="img-thumbnail mt-3 mb-3" src="<?= base_url('assets/gambar/petugas/') . $petugas['gambar']; ?>" width="50px" alt="gambarEditData">
            <?= form_error('gambar', '<small class="text-danger">', '</small>'); ?>
          </div>
          <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" name="submit" class="btn btn-primary">Update Data</button>
          <?= form_close(); ?>
        </div>
      </div>
    </div>
  </div>
<?php endforeach; ?>
<!-- akhir modal update petugas -->