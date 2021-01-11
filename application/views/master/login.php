<div class="container">
  <div class="row">
    <div class="col-md-5 col-sm-12 mx-auto">
      <div class="card pt-4">
        <div class="card-body">
          <div class="text-center mb-5">
            <h3>Sign In</h3>
            <img src="<?= base_url() ?>assets/logo resud.png" alt="logo" style="width: 80px; height:80px; margin-right:25px;" class="mb-3">
            <p>Please Sign To Rsud MukoMuko.</p>
            <small class="mt-3"><?= $this->session->flashdata('pesan'); ?></small>
          </div>
          <form action="<?php echo base_url('register/aksi_login') ?>" method="POST">
            <div class="form-group position-relative has-icon-left">
              <label for="username">EMAIL</label>
              <div class="position-relative">
                <input type="text" class="form-control" id="email" name="email" value="<?= set_value('email') ?>">
                <div class="form-control-icon">
                  <i data-feather="user"></i>
                </div>
              </div>
              <?= form_error('email', '<small class="text-danger ml-2">', '</small>') ?>
            </div>
            <div class="form-group position-relative has-icon-left">
              <div class="clearfix">
                <label for="password">Password</label>
              </div>
              <div class="position-relative">
                <input type="password" class="form-control" id="password1" name="password1">
                <div class="form-control-icon">
                  <i data-feather="lock"></i>
                </div>
              </div>
              <?= form_error('password1', '<small class="text-danger ml-2">', '</small>') ?>
            </div>

            <div class='form-check clearfix my-4'>
              <div class="float-right">
                <a href="<?php echo base_url('register/registration') ?>">Don't have an account?</a>
              </div>
            </div>
            <div class="clearfix">
              <button class="btn btn-primary float-right" type="submit" name="submit">Submit</button>
            </div>
            <div class="divider">
              <div class="divider-text">RSUD MUKOMUKO</div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>