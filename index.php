<?php include 'cuy.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- sweetalert -->
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <!-- bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <!-- AOS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <!-- core excel -->
  <?php include 'vendor/autoload.php' ?>
  <title>Asdos Dipa</title>
</head>

<body>
  <style>
    

    #cuki:checked~#reload {
      display: block;

    }

    #reload {
      display: none;
    }
  </style>
  <script>
    AOS.init();
  </script>

  <?php
  if ($_GET['method'] == 'scheffe') {
  ?>

    <div class="col bg-light rounded-5 mt-5">
      <div class='row'>
        <div class="form-check form-switch d-flex ">
          <p class="mx-5">Normal </p>
          <input id="cuki" class="form-check-input" checked type="checkbox" role="switch">



          <p class="mx-2">Scheffe </p>
          <p><a href="<?= basename($_SERVER['PHP_SELF']); ?>">Reload</a> for the result </p>
        </div>
      </div>
      <div class="row">
        <a href="saw.php?method=scheffe" class="btn">Metode SAW</a>
      </div>
      <div class="row">
        <a href="wp.php?method=scheffe" class="btn">Metode WP</a>
      </div>
      <div class="row">
        <a href="smart.php?method=scheffe" class="btn">Metode SMART</a>
      </div>
      <div class="row">
        <a href="index.php" class="btn">Hasil</a>
      </div>
    </div>
  <?php } else { ?>

    <div class="col bg-light rounded-5 mt-5">
      <div class='row'>
        <div class="form-check form-switch d-flex ">
          <p class="mx-5">Normal </p>
          <input id="cuki" class="form-check-input" name="normal" type="checkbox" role="switch">

          <p class="mx-2">Scheffe </p>
          <p><a href="<?= basename($_SERVER['PHP_SELF']); ?>?method=scheffe">Reload</a> for the result </p>
        </div>
      </div>
      <div class="row">
        <a href="saw.php" class="btn">Metode SAW</a>
      </div>
      <div class="row">
        <a href="wp.php" class="btn">Metode WP</a>
      </div>
      <div class="row">
        <a href="smart.php" class="btn">Metode SMART</a>
      </div>
      <div class="row">
        <a href="index.php" class="btn">Hasil</a>
      </div>
    </div>
  <?php } ?>