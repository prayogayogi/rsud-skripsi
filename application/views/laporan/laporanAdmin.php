<div class="main-content container-fluid">
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Data Pendonor
      </h1>
    </section>
    <section class="content">
      <a href="<?= base_url('cetak/admin'); ?>" class="btn btn-primary"><i class="fa fa-print mr-2"></i>Cetak Data</a>
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
            <th>Berat Badan</th>
            <th>Tgl Donor</th>
            <!-- <th>Action</th> -->
            <th>Kelayakan</th>
          </tr>

          <?php
          $no = 1;
          foreach ($user as $data) : ?>
            <tr>
              <td><?= $no++ ?></td>
              <td><?= $data['nama'] ?></td>
              <td><?= $data['gol_darah'] ?></td>
              <td><?= $data['gender'] ?></td>
              <td><?= $data['alamat'] ?></td>
              <td><?= $data['no_hp'] ?></td>
              <td><?= $data['berat_badan'] ?></td>
              <td><?= date('d-m-Y', $data['tgl_donor']); ?></td>
              <!-- <td> <a href="<?= base_url('auth/ubah/') . $data['id']; ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                <br><br>
                <a href="<?= base_url('dashboard/hapus/') . $data['id']; ?>" onclick=" return confirm('Anda Yakin Inggin Hapus..?')" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></a>
              </td> -->
              <?php
              if (time() >= ($data['tgl_donor'] + 7776000)) {
                $bisa = "bisa";
              } else {
                $bisa = "tidak bisa";
              }
              ?>
              <td> <span class="badge badge-pill badge-info bg-info"><?= $bisa; ?></span></td>
            </tr>
          <?php endforeach; ?>
        </table>
      </div>
    </section>


    <!-- Modal -->
    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Form input data pendonor</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="<?= base_url('dashboard/aksi_tambahdata') ?>" method="post">
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" placeholder="Masukan Nama" class="form-control">
              </div>
              <div class="form-group">
                <label for="gender">Jenis Gol Darah</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01" name="gol_darah">Pilih</label>
                  </div>
                  <select class="custom-select" id="inputGroupSelect01" name="gol_darah">
                    <option selected>Pilih Gol Darah</option>
                    <option value="A">Gol A</option>
                    <option value="B">Gol B</option>
                    <option value="AB">Gol AB</option>
                    <option value="O">Gol O</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="alamat">alamat</label>
                <input type="text" name="alamat" id="alamat" placeholder="Masukan alamat" class="form-control">
              </div>
              <div class="form-group">
                <label for="Pekerjaan">Pekerjaan</label>
                <input type="text" name="pekerjaan" id="Pekerjaan" placeholder="Masukan Pekerjaan" class="form-control">
              </div>

              <div class="form-group">
                <label for="gender">Jenis Kelamin</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01" name="gender">Pilih</label>
                  </div>
                  <select class="custom-select" id="inputGroupSelect01" name="gender">
                    <option selected>Pilih Jenis Kelamin</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label for="tempat lahir">Tempat lahir</label>
                <input type="text" name="tempat_tgl_lahir" id="tempat lahir" placeholder="Masukan tempat lahir" class="form-control">
              </div>
              <div class="form-group">
                <label for="Tgl Lahir">Tgl Lahir</label>
                <input type="date" name="tgl_lahir" id="Tgl Lahir" placeholder="Masukan Tgl Lahir" class="form-control">
              </div>
              <div class="form-group">
                <label for="no hp">No Hp</label>
                <input type="number" name="no_hp" id="no hp" placeholder="Masukan no hp" class="form-control">
              </div>
              <div class="form-group">
                <label for="Berat Badan">Berat Badan</label>
                <input type="number" name="berat_badan" id="Berat Badan" placeholder="Masukan Berat Badan" class="form-control">
              </div>
              <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save Data</button>
            </form>
          </div>
        </div>
      </div>
    </div> -->