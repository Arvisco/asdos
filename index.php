<?php include 'cuy.php'; ?>


  <title>Asdos Dipa</title>
</head>


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
        <a href="hasilnya.php?met=scheffe" class="btn">Hasil</a>
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
        <a href="hasilnya.php" class="btn">Hasil</a>
      </div>
      <div class="row">
        <a href="crudasdos.php" class="btn">Input Data Asdos</a>
      </div>
    </div>
  <?php } ?>