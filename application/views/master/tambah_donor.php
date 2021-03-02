<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="main-content container-fluid">
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Data Pendonor
      </h1>
    </section>
    <section class="content">
      <a href="<?= base_url('dashboard/tambahPendonor') ?>" class="btn btn-sm btn-primary"><i class="fa fa-plus mr-1"></i>Tambah Data</a>
      <div class="table-responsive">
        <table class="table">
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Gol Darah</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>No Hp</th>
            <th>tgl donor</th>
            <th>Action</th>
            <th>Kelayakan</th>
          </tr>

          <?php
          foreach ($pendonor as $data) : ?>
            <tr>
              <td><?= ++$start ?></td>
              <td><?= $data['nama_pendonor'] ?></td>
              <td><?= $data['gol_darah'] ?></td>
              <td><?= $data['jenis_kelamin'] ?></td>
              <td>
                <?php if ($data['alamat_pendonor'] != '') { ?>
                  <?= $data['alamat_pendonor'] ?>
                <?php } else { ?>
                  <a class="text-info">Tidak Ada</a>
                <?php } ?>
              </td>
              <td>
                <?php if ($data['no_hp'] != ('')) { ?>
                  <?= $data['no_hp']; ?>
                <?php } else { ?>
                  <a class="text-info">Tidak Ada</a>
                <?php } ?>

              </td>
              <td><?= date('d-m-Y', $data['tgl_donor']) ?></td>
              <td>
                <a href="" data-toggle="modal" data-target="#exampleModalEditDataPendonor<?= $data['id']; ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                <!-- <br>
                <a href="<?= base_url('dashboard/hapusDataPendonor/') . $data['id']; ?>" onclick=" return confirm('Anda Yakin Inggin Hapus..?')" class="btn btn-sm btn-danger mt-1"><i class="fas fa-trash-alt"></i></a>
                <br>
                <a href="" data-toggle="modal" data-target="#exampleModaldetail" class="btn btn-sm btn-success mt-1"><i class="fas fa-search-plus"></i></a> -->


                <!-- <div class="btn-group dropleft">
                  <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-list-alt"></i>
                  </button>
                  <div class="dropdown-menu">
                    <a href="" data-toggle="modal" data-target="#exampleModalEditDataPendonor<?= $data['id']; ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                    <br>
                    <a href="<?= base_url('dashboard/hapusDataPendonor/') . $data['id']; ?>" onclick=" return confirm('Anda Yakin Inggin Hapus..?')" class="btn btn-sm btn-danger mt-1"><i class="fas fa-trash-alt"></i></a>
                    <br>
                    <a href="" data-toggle="modal" data-target="#exampleModaldetail" class="btn btn-sm btn-success mt-1"><i class="fas fa-search-plus"></i></a>
                  </div>
                </div> -->
              </td>
              <?php
              if (time() >= ($data['tgl_donor'] + 7776000) && $data['hiv'] === ('-') && $data['hcv'] === ('-') && $data['hbsag'] === ('-') && $data['sypilis'] === ('-')) { ?>

                <!-- bisa donor -->
                <td> <span class="badge badge-pill badge-info bg-info">Bisa</span></td>
              <?php } else { ?>

                <!-- tidak bisa donor -->
                <td> <span class="badge badge-pill badge-info bg-danger"> Tidak bisa</span></td>
              <?php } ?>
            </tr>
          <?php endforeach; ?>
        </table>
        <?= $this->pagination->create_links(); ?>
      </div>
    </section>

    <!-- Modal Edit Data Pendonor-->
    <?php foreach ($pendonor as $data) : ?>
      <div class="modal fade" id="exampleModalEditDataPendonor<?= $data['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Form Edit Data Pendonor</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form action="<?= base_url('dashboard/editDataPendonor') ?>" method="post">
                <div class="form-group">
                  <input type="hidden" name="id" value="<?= $data['id'] ?>">
                  <label for="nama">Nama</label>
                  <input type="text" name="nama" id="nama" value="<?= $data['nama_pendonor'] ?>" class="form-control">
                </div>
                <div class="form-group">
                  <label for="gender">Jenis Gol Darah</label>
                  <div class="input-group ">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="inputGroupSelect01" name="gol_darah">Pilih</label>
                    </div>
                    <select class="custom-select form-control" id="inputGroupSelect01" name="gol_darah">
                      <option value="">Gol Darah</option>
                      <option value="A">Gol A</option>
                      <option value="B">Gol B</option>
                      <option value="AB">Gol AB</option>
                      <option value="O">Gol O</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="alamat">alamat</label>
                  <input type="text" name="alamat" id="alamat" value="<?= $data['alamat_pendonor']; ?>" class="form-control">
                </div>
                <div class="form-group">
                  <label for="hiv">Hiv</label>
                  <input type="text" name="hiv" id="hiv" value="<?= $data['hiv'] ?>" class="form-control">
                </div>
                <div class="form-group">
                  <label for="hcv">Hcv</label>
                  <input type="text" name="hcv" id="hcv" value="<?= $data['hcv'] ?>" class="form-control">
                </div>
                <div class="form-group">
                  <label for="hbsag">HbSag</label>
                  <input type="text" name="hbsag" id="hbsag" value="<?= $data['hbsag'] ?>" class="form-control">
                </div>
                <div class="form-group">
                  <label for="sypilis">Sypilis</label>
                  <input type="text" name="sypilis" id="sypilis" value="<?= $data['sypilis'] ?>" class="form-control">
                </div>
                <div class="form-group">
                  <label for="no hp">No Hp</label>
                  <input type="number" name="no_hp" id="no hp" value="<?= $data['no_hp'] ?>" class=" form-control">
                </div>
                <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save Data</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>


    <!-- Modal Detail Pendonor-->
    <div class="modal fade" id="exampleModaldetail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Form Detail Data Pendonor</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <section class="detailPendonor">
              <div class="row">
                <div class="col">

                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal Tambah Data Pendonor-->
    <!-- <div class="modal fade" id="exampleModaltambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Form input data pendonor Rsud</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="<?= base_url('dashboard/aksi_tambahdata') ?>" method="post">
              <div class="form-group">
                <label for="nama">Nama Pendonor</label>
                <input type="text" name="nama_pendonor" id="nama" placeholder="Masukan Nama" class="form-control">
              </div>
              <div class="form-group">
                <label for="nama">Nama Pasien</label>
                <input type="text" name="nama_pasien" id="nama" placeholder="Masukan Nama" class="form-control">
              </div>
              <div class="form-group">
                <label for="nama">Ruang Pasien</label>
                <input type="text" name="ruang_pasien" id="nama" placeholder="Masukan Nama" class="form-control">
              </div>
              <div class="form-group">
                <label for="gender">Gol Darah</label>
                <div class="input-group ">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="inputGroupSelect01" name="gol_darah">Pilih</label>
                  </div>
                  <select class="custom-select form-control" id="inputGroupSelect01" name="gol_darah">
                    <option selected>Pilih Gol Darah</option>
                    <option value="A">Gol A</option>
                    <option value="B">Gol B</option>
                    <option value="AB">Gol AB</option>
                    <option value="O">Gol O</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" name="alamat" id="alamat" placeholder="Masukan alamat" class="form-control">
              </div>
              <div class="form-group">
                <label for="alamat">Agama</label>
                <input type="text" name="agama" id="alamat" placeholder="Masukan alamat" class="form-control">
              </div>
              <div class="form-group">
                <label for="alamat">No Tali</label>
                <input type="text" name="agama" id="alamat" placeholder="Masukan alamat" class="form-control">
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
                  <select class="custom-select form-control" id="inputGroupSelect01" name="gender">
                    <option selected>Pilih Jenis Kelamin</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label for="tempat lahir">Bb Tensi</label>
                <input type="text" name="bb_tensi" id="tempat lahir" placeholder="Masukan tempat lahir" class="form-control">
              </div>
              <div class="form-group">
                <label for="Tgl Lahir">Hb </label>
                <input type="text" name="hb" id="Tgl Lahir" placeholder="Masukan Tgl Lahir" class="form-control">
              </div>
              <div class="form-group">
                <label for="Tgl Lahir">Hiv</label>
                <input type="text" name="hiv" id="Tgl Lahir" placeholder="Masukan Tgl Lahir" class="form-control">
              </div>
              <div class="form-group">
                <label for="Tgl Lahir">Hcv</label>
                <input type="text" name="hcv" id="Tgl Lahir" placeholder="Masukan Tgl Lahir" class="form-control">
              </div>
              <div class="form-group">
                <label for="Tgl Lahir">HbSag</label>
                <input type="text" name="hbsag" id="Tgl Lahir" placeholder="Masukan Tgl Lahir" class="form-control">
              </div>
              <div class="form-group">
                <label for="Tgl Lahir">Sypilis</label>
                <input type="text" name="sypilis" id="Tgl Lahir" placeholder="Masukan Tgl Lahir" class="form-control">
              </div>
              <div class="form-group">
                <label for="no hp">Tgl Donor</label>
                <input type="number" name="tgl_donor" id="no hp" placeholder="Masukan no hp" class="form-control">
              </div>
              <div class="form-group">
                <label for="Berat Badan">Petugas</label>
                <input type="text" name="petugas" id="Berat Badan" placeholder="Masukan Berat Badan" class="form-control">
              </div>
              <div class="form-group">
                <label for="Berat Badan">No Hanphone</label>
                <input type="number" name="no_hp" id="Berat Badan" placeholder="Masukan Berat Badan" class="form-control">
              </div>
              <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save Data</button>
            </form>
          </div>
        </div>
      </div>
    </div> -->