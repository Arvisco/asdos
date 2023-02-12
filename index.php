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

  <div class="container bg-white rounded-5 float-left" style="width: 500px;">
    <div class="form-check form-switch d-flex">
      <p class="mx-5 fs-3 font">Normal </p>
      <input id="cuki" style="width: 150px; height: 50px;" class="form-check-input" checked type="checkbox" role="switch">
      <p class="mx-2 fs-3 font">Scheffe </p>
      <p class="fs-6"><a href="<?= basename($_SERVER['PHP_SELF']); ?>">Reload</a> for the result </p>
    </div>
  </div>
  <h1 class="font text-center mt-5 p-2">KOMPARASI METODE SAW, WP, DAN SMART SEBAGAI SISTEM PENUNJANG KEPUTUSAN DALAM MENENTUKAN ASISTEN DOSEN</h1>
  <div class="container mt-5">
    <div class="row">
      <a href="saw.php?method=scheffe" class="button-90 font">Metode SAW</a>
    </div>
    <div class="row">
      <a href="wp.php?method=scheffe" class="button-90  font">Metode WP</a>
    </div>
    <div class="row">
      <a href="smart.php?method=scheffe" class="button-90  font">Metode SMART</a>
    </div>
    <div class="row">
      <a href="hasilnya.php?met=scheffe" class="button-90  font">Hasil</a>
    </div>
    <div class="row">
      <a href="crudasdos.php" class="button-90  font">Input Data Asdos</a>
    </div>
  </div>

<?php } else { ?>

  <div class="container bg-white rounded-5 float-left" style="width: 500px;">
    <div class="form-check form-switch d-flex">
      <p class="mx-5 fs-3 font">Normal </p>
      <input id="cuki" class="form-check-input" style="width: 150px; height: 50px;" name="normal" type="checkbox" role="switch">
      <p class="mx-2 fs-3 font">Scheffe </p>
      <p class="fs-6"><a href="<?= basename($_SERVER['PHP_SELF']); ?>?method=scheffe">Reload</a> for the result </p>
    </div>
  </div>
  <h1 class="font text-center mt-5 p-2">KOMPARASI METODE SAW, WP, DAN SMART SEBAGAI SISTEM PENUNJANG KEPUTUSAN DALAM MENENTUKAN ASISTEN DOSEN</h1>

  <div class="container mt-5">
    <div class="row">
      <a href="saw.php" class="button-90  font">Metode SAW</a>
    </div>
    <div class="row">
      <a href="wp.php" class="button-90  font">Metode WP</a>
    </div>
    <div class="row">
      <a href="smart.php" class="button-90  font">Metode SMART</a>
    </div>
    <div class="row">
      <a href="hasilnya.php" class="button-90  font">Hasil</a>
    </div>
    <div class="row">
      <a href="crudasdos.php" class="button-90  font">Input Data Asdos</a>
    </div>
  </div>
<?php } ?>