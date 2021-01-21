<div class="main-content container-fluid">
  <div class="page-title">
    <div class="row">
      <div class="col-12 col-md-6">
        <h3>Data Admin</h3>
        <p class="text-subtitle text-muted">Data Admin Ini Merupkan, Data Admin Yang Bisa mengAkses Sistem Ini.</p>
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
          <a href="http://" class="btn btn-primary mr-2" data-toggle="modal" data-target="#exampleModalDataAdmin"><i class="fas fa-plus"></i> Data Admin</a>
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
                <?php foreach ($data as $admin) : ?>
                  <tr>
                    <td class="text-bold-500"><?= $admin['nama'] ?></td>
                    <td><?= $admin['email']; ?></td>
                    <td class="text-bold-500"> <img src="<?= base_url('assets/gambar/admin/') . $admin['gambar']; ?>" width="50px" alt=""></td>
                    <?php $aktif = $admin['role_id'];
                    if ($aktif == 1) {
                      $ada = 'Admin';
                    } elseif ($aktif == 2) {
                      $ada = 'Petugas';
                    } else {
                      $ada = 'Penyusup';
                    }
                    ?>
                    <?php if ($aktif == 1) { ?>
                      <td>
                        <span class="badge bg-success"><?= $ada; ?></span>
                      </td>
                    <?php } ?>
                    <?php if ($aktif == 2) { ?>
                      <td>
                        <span class="badge bg-danger"><?= $ada; ?></span>
                      </td>
                    <?php } ?>
                    <td><?= date('d-m-Y', $admin['tgl_daftar']); ?></td>
                    <td>
                      <a href="<?= base_url('admin/hapus/') . $admin['id']; ?>" class="btn btn-danger btn-sm" name="hapus" onclick="return confirm ('Anda Yakin Inggin Hapus..?')"><i class="fas fa-trash-alt"></i></a>
                      <br><br>
                      <a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalEditAdmin<?= $admin['id']; ?>" name="edit"><i class="fas fa-edit"></i></a>
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
  <!-- Striped rows end -->
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModalDataAdmin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form input data Admin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?= form_open_multipart('admin/tambahAdmin') ?>
        <div class="form-group">
          <label for="nama">Nama</label>
          <input type="text" name="nama" id="nama" placeholder="Masukan Nama" class="form-control" value="<?= set_value('nama'); ?>">
          <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="email">email</label>
          <input type="text" name="email" id="email" placeholder="Masukan Email" class="form-control" value="<?= set_value('email'); ?>">
          <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="password">password</label>
          <input type="text" name="password" id="password" placeholder="Masukan password" class="form-control">
          <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="gambar">gambar</label>
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


<!-- Modal edit data -->
<?php foreach ($data as $admin) : ?>
  <div class="modal fade" id="exampleModalEditAdmin<?= $admin['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Form Update Data Admin</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?= form_open_multipart('admin/editAdmin') ?>
          <input type="hidden" name="id" value="<?= $admin['id']; ?>">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" value="<?= $admin['nama']; ?>" name="nama" id="nama" placeholder="Masukan Nama" class="form-control" value="<?= set_value('nama'); ?>">
            <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
          </div>
          <div class="form-group">
            <label for="email">email</label>
            <input type="text" value="<?= $admin['email']; ?>" name="email" id="email" placeholder="Masukan Email" class="form-control" value="<?= set_value('email'); ?>">
            <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
          </div>
          <div class="form-group">
            <label for="password">password Lama</label>
            <input type="password" name="passwordLama" id="password" placeholder="Masukan password" class="form-control">
            <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
          </div>
          <div class="form-group">
            <label for="password">password Baru</label>
            <input type="password" name="passwordBaru" id="password" placeholder="Masukan password" class="form-control">
            <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
          </div>
          <div class="form-group">
            <label for="gambar">gambar</label>
            <input type="file" name="gambar" id="gambar" placeholder="Masukan gambar" class="form-control">
            <img class="img-thumbnail mt-3 mb-3" src="<?= base_url('assets/gambar/admin/') . $admin['gambar']; ?>" width="50px" alt="gambarEditData">
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