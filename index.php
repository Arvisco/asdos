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

  <div class="container bg-white rounded-5 float-left" style="width:600px;">
    <div class="form-check form-switch d-flex">
      <p class="mx-5 fs-3 font">Normal </p>
      <input id="cuki" style="width: 150px; height: 50px;" class="form-check-input" checked type="checkbox" role="switch">
      <p class="mx-2 fs-3 font">Scheffe </p>
      <p class="fs-6"><a href="<?= basename($_SERVER['PHP_SELF']); ?>">Reload</a> for the result </p>
      <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn-reset" title="Reset data table aplikasi">!</button>
    </div>
  </div>
  <h1 class="font text-center mt-5 p-2">KOMPARASI METODE SAW, WP, DAN SMART SEBAGAI SISTEM PENUNJANG KEPUTUSAN DALAM MENENTUKAN ASISTEN DOSEN</h1>
  <div class="container mt-5">
    <div class="row" data-aos="fade-up" data-aos-duration="3000">
      <a href="saw.php?met=scheffe" class="button-90 font">Metode SAW</a>
    </div>
    <div class="row" data-aos="fade-up" data-aos-duration="3000">
      <a href="wp.php?met=scheffe" class="button-90  font">Metode WP</a>
    </div>
    <div class="row" data-aos="fade-up" data-aos-duration="3000">
      <a href="smart.php?met=scheffe" class="button-90  font">Metode SMART</a>
    </div>
    <div class="row" data-aos="fade-up" data-aos-duration="3000">
      <a href="hasilnya.php?met=scheffe" class="button-90  font">Hasil</a>
    </div>
    <div class="row" data-aos="fade-up" data-aos-duration="3000">
      <a href="crudasdos.php" class="button-90  font">Input Data Asdos</a>
    </div>
  </div>


  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Danger Area</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <!-- <div class="input-group"> -->
            <div class="form-check form-switch">
              <input class="form-check-input" name="sawnormal" type="radio" value="hasilsawnormal" title="ini akan menghapus data di tabel hasil saw metode normal">
              <label for="sawnormal">Table Hasil SAW Normal</label>
            </div>

            <div class="form-check form-switch">
              <input class="form-check-input" name="wpnormal" type="radio" value="hasilwpnormal" title="ini akan menghapus data di tabel hasil wp metode normal">
              <label for="wpnormal">Table Hasil WP Normal</label>
            </div>

            <div class="form-check form-switch">
              <input class="form-check-input" name="smartnormal" type="radio" value="hasilsmartnormal" title="ini akan menghapus data di tabel hasil smart metode normal">
              <label for="smartnormal">Table Hasil SMART Normal</label>
            </div>

            <div class="form-check form-switch">
              <input class="form-check-input" name="sawscheffe" type="radio" value="hasilsawscheffe" title="ini akan menghapus data di tabel hasil saw metode scheffe">
              <label for="sawscheffe">Table Hasil SAW scheffe</label>
            </div>

            <div class="form-check form-switch">
              <input class="form-check-input" name="wpscheffe" type="radio" value="hasilwpscheffe" title="ini akan menghapus data di tabel hasil wp metode scheffe">
              <label for="wpscheffe">Table Hasil WP scheffe</label>
            </div>

            <div class="form-check form-switch">
              <input class="form-check-input" name="smartscheffe" type="radio" value="hasilsmartscheffe" title="ini akan menghapus data di tabel hasil smart metode scheffe">
              <label for="smartscheffe">Table Hasil SMART scheffe</label>
            </div>

            <div class="form-check form-switch">
              <input class="form-check-input" name="asdos" type="radio" value="hasilsmartscheffe" title="ini akan menghapus data kandidat">
              <label for="asdos">Table Kandidat Asdos</label>
            </div>

          <!-- </div> -->
        </div>
        <div class="modal-footer">
          <p>Ketika menekan proceed, semua data dalam tabel yang dipilih akan di hapus permanen</p>
          <button type="button" class="btn btn-primary">Proceed</button>
        </div>
      </div>
    </div>
  </div>




<?php } else { ?>

  <div class="container bg-white rounded-5 float-left" style="width: 500px;">
    <div class="form-check form-switch d-flex">
      <p class="mx-5 fs-3 font">Normal </p>
      <input id="cuki" class="form-check-input" style="width: 150px; height: 50px;" name="normal" type="checkbox" role="switch">
      <p class="mx-2 fs-3 font">Scheffe </p>
      <p class="fs-6"><a href="<?= basename($_SERVER['PHP_SELF']); ?>?method=scheffe">Reload</a> for the result </p>
      <button class="btn-reset" title="Reset data table aplikasi">!</button>
    </div>
  </div>
  <h1 class="font text-center mt-5 p-2">KOMPARASI METODE SAW, WP, DAN SMART SEBAGAI SISTEM PENUNJANG KEPUTUSAN DALAM MENENTUKAN ASISTEN DOSEN</h1>

  <div class="container mt-5">
    <div class="row" data-aos="fade-up" data-aos-duration="300">
      <a href="saw.php" class="button-90  font">Metode SAW</a>
    </div>
    <div class="row" data-aos="fade-up" data-aos-duration="600">
      <a href="wp.php" class="button-90  font">Metode WP</a>
    </div>
    <div class="row" data-aos="fade-up" data-aos-duration="900">
      <a href="smart.php" class="button-90  font">Metode SMART</a>
    </div>
    <div class="row" data-aos="fade-up" data-aos-duration="1000">
      <a href="hasilnya.php" class="button-90  font">Hasil</a>
    </div>
    <div class="row" data-aos="fade-up" data-aos-duration="1400">
      <a href="crudasdos.php" class="button-90  font">Input Data Asdos</a>
    </div>
  </div>
<?php } ?>