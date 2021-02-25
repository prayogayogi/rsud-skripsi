<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="container">
  <div class="row">
    <div class="col-md-5 col-sm-12 mx-auto">
      <div class="card pt-4">
        <div class="card-body">
          <div class="text-center mb-5">
            <h3>Sign Up</h3>
            <p>Please fill the form to register.</p>
            <?= $this->session->flashdata('pesan'); ?>
          </div>
          <form action="<?= base_url('register/aksi_registration') ?>" method="POST">
            <div class="col-md-12 col-12">
              <div class="form-group position-relative has-icon-left">
                <label for="username">NAMA</label>
                <div class="position-relative">
                  <input type="text" class="form-control" id="nama" name="nama" value="<?= set_value('email') ?>" autocomplete="off">
                  <div class="form-control-icon">
                    <i data-feather="user"></i>
                  </div>
                </div>
                <?= form_error('nama', '<small class="text-danger ml-2">', '</small>') ?>
              </div>
            </div>
            <div class="col-md-12 col-12">
              <div class="form-group position-relative has-icon-left">
                <label for="username">EMAIL</label>
                <div class="position-relative">
                  <input type="text" class="form-control" id="email" name="email" value="<?= set_value('email') ?>" autocomplete="off">
                  <div class="form-control-icon">
                    <i data-feather="user"></i>
                  </div>
                </div>
                <?= form_error('email', '<small class="text-danger ml-2">', '</small>') ?>
              </div>
            </div>
            <div class="col-md-12 col-12">
              <div class="form-group position-relative has-icon-left">
                <div class="clearfix">
                  <label for="password">PASSWORD</label>
                </div>
                <div class="position-relative">
                  <input type="password" class="form-control" id="password1" name="password1">
                  <div class="form-control-icon">
                    <i data-feather="lock"></i>
                  </div>
                </div>
                <?= form_error('password1', '<small class="text-danger ml-2">', '</small>') ?>
              </div>
            </div>
            <div class="col-md-12 col-12">
              <div class="form-group position-relative has-icon-left">
                <div class="clearfix">
                  <label for="password"> confirmation Password</label>
                </div>
                <div class="position-relative">
                  <input type="password" class="form-control" id="password2" name="password2">
                  <div class="form-control-icon">
                    <i data-feather="lock"></i>
                  </div>
                </div>
                <?= form_error('password2', '<small class="text-danger ml-2">', '</small>') ?>
              </div>
            </div>
            <a href="<?php echo base_url('register') ?>">Have an account? Login</a>
            <div class="clearfix">
              <button class="btn btn-primary float-right" type="submit" name="submit">Submit</button>
            </div>
          </form>
          <div class="divider">
            <div class="divider-text">RSUD MUKOMUKO</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>