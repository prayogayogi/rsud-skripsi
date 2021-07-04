<div class="main-content container-fluid">
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Laporan Pendonor
      </h1>
    </section>
    <section class="content">
      <form method="POST" action="<?= base_url('laporan/getTahun') ?>" target="blank" class="d-flex">
        <div class="input-group-appen col-3 col-md-1 mr-2">
          <select class="custom-select form-control btn btn-sm btn-outline-primary" name="tahun">
            <option value="<?= date('Y') ?>">-- Tahun --</option>
            <?php foreach ($getTahun as $row) : ?>
              <option value="<?= $row['tahun'] ?>"><?= $row['tahun'] ?></option>
            <?php endforeach; ?>

          </select>
        </div>
        <button type="submit" class="btn btn-primary"><i class="fa fa-print mr-2"></i>Cetak Laporan</button>
      </form>

      <div class="row">
        <div class="col-12 mt-4 col-lg-6">
          <div class="card">
            <div class="card-header">
              <h4>Data Pendonor Tahun <?= date('Y'); ?></h4>
            </div>
            <div class="card-body">
              <div class="buttons">
                <div class="section-title mt-0">Jumlah Golongan Darah</div>
                <button type="button" class="btn btn-sm btn-primary">
                  Jumlah <span class="badge bg-transparent"><?= $jumlah; ?></span>
                </button>
                <div class="section-title mt-0">Jumlah Golongan Darah Berdasarkan Golongan Darah</div>
                <button type="button" class="btn btn-sm btn-primary">
                  GOL (A) <span class="badge bg-transparent"><?= $golA; ?></span>
                </button>
                <button type="button" class="btn btn-sm btn-warning">
                  GOL (B) <span class="badge bg-transparent"><?= $golB; ?></span>
                </button>
                <button type="button" class="btn btn-sm btn-dark">
                  GOL (AB) <span class="badge bg-transparent"><?= $golAb; ?></span>
                </button>
                <button type="button" class="btn btn-sm btn-danger">
                  GOL (O) <span class="badge bg-transparent"><?= $golO; ?></span>
                </button>

                <div class="section-title mt-0">Jumlah Golongan Darah Berdasarkan Jenis Kelamin</div>
                <button type="button" class="btn btn-sm btn-primary">
                  Laki-Laki<span class="badge bg-transparent"><?= $laki; ?></span>
                </button>
                <button type="button" class="btn btn-sm btn-danger">
                  Perempuan <span class="badge bg-transparent"><?= $perempuan; ?></span>
                </button>

              </div>
            </div>
          </div>
        </div>


        <div class="col-12 mt-4 col-lg-6">
          <div class="card">
            <div class="card-header">
              <h4>Data Pendonor Tahun<?= date('Y') ?></h4>
            </div>
            <div class="card-body">
              <div class="buttons">
                <div class="section-title mt-0">Jumlah Uji Saring Infeksi Menular Lewat Tranfusi Darah</div>
                <button type="button" class="btn btn-primary">
                  HIV<span class="badge bg-transparent"><?= $hiv; ?></span>
                </button>
                <button type="button" class="btn btn-warning">
                  HCV <span class="badge bg-transparent"><?= $hcv; ?></span>
                </button>
                <button type="button" class="btn btn-dark">
                  HBSAG <span class="badge bg-transparent"><?= $hbsag; ?></span>
                </button>
                <button type="button" class="btn btn-danger">
                  SYPILIS <span class="badge bg-transparent"><?= $sypilis; ?></span>
                </button>
              </div>
            </div>
          </div>
        </div>
    </section>