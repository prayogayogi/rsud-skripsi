<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="container">
  <div class="row">
    <div class="col col-6">
      <div class="modal-body">
        <form action="<?= base_url('auth/aksi_tambahdata') ?>" method="post">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama" placeholder="Masukan Nama" class="form-control">
          </div>
          <div class="form-group">
            <label for="gol_darah">gol_darah</label>
            <input type="text" name="gol_darah" id="gol_darah" placeholder="Masukan gol_darah" class="form-control">
          </div>
          <div class="form-group">
            <label for="no_hp">no_hp</label>
            <input type="text" name="no_hp" id="no_hp" placeholder="Masukan no_hp" class="form-control">
          </div>
          <div class="form-group">
            <label for="alamat">alamat</label>
            <input type="text" name="alamat" id="alamat" placeholder="Masukan alamat" class="form-control">
          </div>
          <div class="form-group">
            <label for="tgl_donor">tgl_donor</label>
            <input type="date" name="tgl_donor" id="tgl_donor" placeholder="Masukan tgl_donor" class="form-control">
          </div>
          <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save Data</button>
        </form>
      </div>
    </div>
  </div>
</div>