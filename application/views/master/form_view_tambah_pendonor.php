<div class="main-content container-fluid">
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Tambah Data Pendonor
      </h1>
    </section>
    <div class="row">
      <section class="kontent">
        <form action="<?= base_url('dashboard/aksi_tambahdataRsud') ?>" method="post">
          <div class="row mt-2">
            <div class="col-6">
              <div class="form-group">
                <label for="nama_pendonor">Nama Pendonor</label>
                <input type="text" name="nama_pendonor" id="nama_pendonor" placeholder="Masukan Nama Pendonor" class="form-control">
              </div>
              <div class="form-group">
                <label for="nama_pasien">Nama Pasien</label>
                <input type="text" name="nama_pasien" id="nama_pasien" placeholder="Masukan Nama Pasien" class="form-control">
              </div>
              <div class="form-group">
                <label for="ruang_pasien">Ruang Pasien</label>
                <input type="text" name="ruang_pasien" id="ruang_pasien" placeholder="Masukan Ruang Pasien" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputGroupSelect01">Gol Darah</label>
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
                <input type="text" name="alamat" id="alamat" placeholder="Masukan Alamat" class="form-control">
              </div>
              <div class="form-group">
                <label for="agama">Agama</label>
                <input type="text" name="agama" id="agama" placeholder="Masukan Agama" class="form-control">
              </div>
              <div class="form-group">
                <label for="no_tali">No Tali</label>
                <input type="text" name="no_tali" id="no_tali" placeholder="Masukan No Tali" class="form-control">
              </div>
              <div class="form-group">
                <label for="Pekerjaan">Pekerjaan</label>
                <input type="text" name="pekerjaan" id="Pekerjaan" placeholder="Masukan Pekerjaan" class="form-control">
              </div>

              <div class="form-group">
                <label for="gender">Jenis Kelamin</label>
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="gender" name="jenis_kelamin">Pilih</label>
                  </div>
                  <select class="custom-select form-control" id="gender" name="jenis_kelamin">
                    <option selected>Pilih Jenis Kelamin</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="col-6">
              <div class="form-group">
                <label for="bb_tensi">Bb Tensi</label>
                <input type="text" name="bb_tensi" id="bb_tensi" placeholder="Tensi Pendonor" class="form-control">
              </div>
              <div class="form-group">
                <label for="hb">Hb </label>
                <input type="text" name="hb" id="hb" placeholder="Hb Pendonor" class="form-control">
              </div>
              <div class="form-group">
                <label for="hiv">Hiv</label>
                <input type="text" name="hiv" id="hiv" placeholder="Penyakit Hiv" class="form-control">
              </div>
              <div class="form-group">
                <label for="hcv">Hcv</label>
                <input type="text" name="hcv" id="hcv" placeholder="Penyakit Hcv" class="form-control">
              </div>
              <div class="form-group">
                <label for="hbsag">HbSag</label>
                <input type="text" name="hbsag" id="hbsag" placeholder="Penyakit HbSag" class="form-control">
              </div>
              <div class="form-group">
                <label for="sypilis">Sypilis</label>
                <input type="text" name="sypilis" id="sypilis" placeholder="Penyakit Sypilis" class="form-control">
              </div>
              <div class="form-group">
                <label for="no_hp">No Hanphone</label>
                <input type="number" name="no_hp" id="no_hp" placeholder="Masukan No Hanphone" class="form-control">
              </div>
              <div class="form-group">
                <label for="petugas">Petugas</label>
                <input type="text" name="petugas" id="petugas" placeholder="Petugas" class="form-control">
              </div>
              <button type="reset" class="btn btn-secondary" data-dismiss="modal">Resset</button>
              <button type="submit" class="btn btn-primary">Save Data</button>
            </div>
          </div>
        </form>
      </section>
    </div>
  </div>
</div>