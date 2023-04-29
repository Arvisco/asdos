<?php include 'cuy.php';
if ($_SESSION['who'] == '') {
  header('Location:skom.php');
} elseif ($_SESSION['who'] == 'dosen') {
  header('Location:penilaian.php');
} elseif ($_SESSION['who'] == 'mahasiswa') {
  header('Location:hasilnya');
} elseif ($_SESSION['who'] == 'gosi') {}

?>


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




<h1 class="font text-center mt-5 p-2">KOMPARASI METODE SAW, WP, DAN SMART SEBAGAI SISTEM PENUNJANG KEPUTUSAN DALAM MENENTUKAN ASISTEN DOSEN</h1>
<div class="container mt-5">
  <div class="row" data-aos="fade-up" data-aos-duration="3000">
    <a href="penilaian.php" class="button-90 font">Mulai Penilaian</a>
  </div>

  <div class="row" data-aos="fade-up" data-aos-duration="3000">
    <a href="hasilnya.php?met=scheffe" class="button-90  font">Hasil</a>
  </div>
  <div class="row" data-aos="fade-up" data-aos-duration="3000">
    <a href="crudasdos.php" class="button-90  font">Input Data Asdos</a>
  </div>
  <div class="row" data-aos="fade-up" data-aos-duration="3000">
    <a href="cruddosen.php" class="button-90  font">Input Data Dosen</a>
  </div>
</div>