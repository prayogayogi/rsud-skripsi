 <!doctype html>
 <html lang="en">

 <head>
   <!-- Required meta tags -->
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

   <title> <?= $title; ?> </title>

   <!-- Favicons -->
   <link href="<?= base_url('assets/') ?>favicon.png" rel="icon">
 </head>

 <body>
   <section class="print">
     <div class="container">
       <div class="row mt-4">
         <div class="col col-2">
           <img src="<?= base_url(); ?>assets/logo mukomuko.png " alt="mukomuko" style="width: 150px; height:150px;">
         </div>
         <div class="col col-8 mt-5 text-center">
           <h3 class="text-uppercase">pemerintah kabupaten mukomuko</h3>
           <h2 class="text-uppercase font-weight-bold">rumah sakit umum daerah mukomuko</h2>
           <p>Jl .Sutan Gendam Syar No. 166 Mukomuko Bengkulu,38365 Telp.(0737) 71143</p>
           <h4 class="font-weight-bold">MukoMuko 38365</h4>
         </div>
         <div class="col col-2">
           <img src="<?= base_url(); ?>assets/logo resud.png " alt="mukomuko" style="width: 150px; height:150px;">
         </div>
       </div>
       <div class="bor font-weight-bold">
         <hr>
       </div>
       <h5 class="text-center font-weight-bold mt-4">LAPORAN DONOR DARAH LENGKAP UTD RSUD MUKOMUKO</h5>
       <h5 class="text-center font-weight-bold mb-5"><?= $tahun ?></h5>
     </div>
   </section>

   <section class="tab">
     <div class="container">

       <table class="table table-bordered">
         <thead>
           <tr>
             <th scope="col">No</th>
             <th>Jenis Laporan</th>
             <th scope="col">Jumlah</th>
           </tr>
         </thead>
         <tbody>
           <tr>
             <th scope="row">1</th>
             <td> Jumlah Darah Masuk</td>
             <td><?= $jumlah; ?></td>
           </tr>
           <tr>
             <th scope="row">2</th>
             <td>Jumlah Darah Masuk Gol Darah A</td>
             <td><?= $golA; ?></td>
           </tr>
           <tr>
             <th scope="row">3</th>
             <td>Jumlah Darah Masuk Gol Darah B</td>
             <td><?= $golB; ?></td>
           </tr>
           <tr>
             <th scope="row">4</th>
             <td>Jumlah Darah Masuk Gol Darah AB</td>
             <td><?= $golAb; ?></td>
           </tr>
           <tr>
             <th scope="row">5</th>
             <td>Jumlah Darah Masuk Gol Darah O</td>
             <td><?= $golO; ?></td>
           </tr>
           <tr>
             <th scope="row">6</th>
             <td>Jumlah Darah Masuk Jenis Kelamin Laki-Laki</td>
             <td><?= $laki; ?></td>
           </tr>
           <tr>
             <th scope="row">7</th>
             <td>Jumlah Darah Masuk Jenis Kelamin Perempuan</td>
             <td><?= $perempuan; ?></td>
           </tr>
           <tr>
             <th scope="row">8</th>
             <td>Jumlah Reaktif Hiv</td>
             <td colspan="2"><?= $hiv; ?></td>
           </tr>
           <tr>
             <th scope="row">9</th>
             <td>Jumlah Reaktif Hcv</td>
             <td colspan="2"><?= $hcv; ?></td>
           </tr>
           <tr>
             <th scope="row">10</th>
             <td>Jumlah Reaktif Hbsag</td>
             <td colspan="2"><?= $hbsag; ?></td>
           </tr>
           <tr>
             <th scope="row">11</th>
             <td>Jumlah Reaktif Sypilis</td>
             <td colspan="2"><?= $sypilis; ?></td>
           </tr>
           <tr>
             <td colspan="2" class="font-weight-bold text-center">Jumlah Total</td>
             <td class="font-weight-bold"><?= $jumlah +  $golA +  $golB +  $golAb +  $golO + $laki + $perempuan + $hiv + $hcv + $hbsag + $sypilis; ?></td>
           </tr>
         </tbody>
       </table>
     </div>
   </section>


   <section class="ttd">
     <div class="container">
       <div class="row">
         <div class="col">
           <p class="d-flex justify-content-end font-weight-bold" style="margin-top: 80px;">Mukomuko,
             <?php echo date('d, F, Y'); ?>
           </p>
           <p class="d-flex justify-content-end font-weight-bold" style="margin-top: -15px;margin-right:45px;">Petugas UTD</p>
           <p class="d-flex justify-content-end font-weight-bold underline" style="margin-top: 60px;margin-right:35px;"><?= $petugas['nama']; ?></p>
         </div>
       </div>
     </div>

   </section>

   <!-- Untuk Print File -->
   <script>
     window.print();
   </script>

   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

 </body>

 </html>