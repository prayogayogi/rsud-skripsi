<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?></title>
  <link rel="stylesheet" href="<?= base_url() ?>assets/assets/css/bootstrap.css">

  <link rel="shortcut icon" href="<?= base_url() ?>assets/favicon.png" type="image/x-icon">
  <link rel="stylesheet" href="<?= base_url() ?>assets/assets/css/app.css">
</head>

<body>

  <div class="flash-data" data-flashdata="<?= $this->session->flashdata('pesan'); ?>"></div>
  <div id="auth">