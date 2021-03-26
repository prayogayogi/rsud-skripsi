<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $title ?></title>
  <!-- Favicons -->
  <link href="<?= base_url('assets/') ?>favicon.png" rel="icon">
  <link rel="stylesheet" href="<?= base_url() ?>assets/assets/css/bootstrap.css">

  <link rel="stylesheet" href="<?= base_url() ?>assets/assets/css/app.css">
</head>

<body>

  <div class="flash-datalog" data-flashdata="<?= $this->session->flashdata('pesanlog'); ?>"></div>
  <div id="auth">