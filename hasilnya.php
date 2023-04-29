<?php

use PhpOffice\PhpSpreadsheet\Calculation\MathTrig\Sum;

include 'cuy.php';
if ($_GET['met'] == 'scheffe') {
?>
  <div class="container bg-white rounded-5 float-left" style="width:600px;">
    <div class="form-check form-switch d-flex">
      <p class="mx-5 fs-3 font">Normal </p>
      <input id="cuki" style="width: 150px; height: 50px;" class="form-check-input" checked type="checkbox" role="switch">
      <p class="mx-2 fs-3 font">Scheffe </p>
      <p class="fs-6"><a href="<?= basename($_SERVER['PHP_SELF']); ?>">Reload</a> for the result </p>
      <?php
      if ($_SESSION['who'] == 'dosen') {} 
      elseif ($_SESSION['who'] == 'gosi') { ?>
        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn-reset" title="Reset data table aplikasi"><i class="fa-solid fa-trash-can"></i></button>
      <?php } ?>
    </div>
  </div>
  <?php
  if ($_SESSION['who'] == 'dosen') { ?>
    <a href="logout.php" title="Log out akun dosen" class="btn-hapus">Logout</a>
  <?php
  } elseif ($_SESSION['who'] == 'mahasiswa') { ?>
    <a class="btn-back pull-right" href="logout.php"><i class="fa-solid fa-chevron-left"></i></a>

  <?php } elseif ($_SESSION['who'] == 'gosi') { ?>
    <a class="btn-back pull-right" href="index.php"><i class="fa-solid fa-chevron-left"></i></a>
  <?php }

  ?>

  <div style="margin-left: 8%;" class=" p-3 col-10 bg-light rounded-5 divtable">
    <h1>Tabel SAW</h1>
    <table id="myTable" class=" table table-borderless rounded-5 table-hover text-center">
      <thead>

        <tr>
          <th onclick="sortTable()" scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Hasil</th>

          <!-- <th scope="col">Ranking</th> -->
          <!-- <th scope="col">Tanggung Jawab</th> -->
          <!-- <th scope="col">Inisiatif</th> -->
          <!-- <th scope="col">Komunikatif</th> -->

        </tr>
      </thead>
      <tbody>
        <?php

        $z = 1;
        foreach ($sawscheffe as $a) :
        ?>
          <tr>
            <td><?= $z++ ?></td>
            <td><?= $a['nama'] ?></td>

            <td><?= $a['hasil'] ?></td>



          </tr>
        <?php endforeach; ?>
    </table>
  </div>

  <div style="margin-left: 8%;" class=" p-3 divtable col-10 bg-light rounded-5">
    <h1>Tabel WP</h1>
    <table class=" table table-borderless rounded-5 table-hover text-center">
      <thead>

        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>

          <th scope="col">Hasil</th>


          <!-- <th scope="col">Tanggung Jawab</th> -->
          <!-- <th scope="col">Inisiatif</th> -->
          <!-- <th scope="col">Komunikatif</th> -->

        </tr>
      </thead>
      <tbody>
        <?php
        $sum = mysqli_query($c, "SELECT SUM(hasil) AS skom FROM hasilwpscheffe");
        $bismillah = mysqli_fetch_assoc($sum);
        $selesaima = $bismillah['skom'];

        $z = 1;
        foreach ($wpscheffe as $a) :
        ?>
          <tr>
            <td><?= $z++ ?></td>
            <td><?= $a['nama'] ?></td>


            <td><?= $a['hasil'] / $selesaima ?></td>







          <?php endforeach; ?>
    </table>
  </div>


  <div style="margin-left: 8%;" class=" p-3 divtable  col-10 bg-light rounded-5">
    <h1>Tabel SMART</h1>
    <table class="table table-borderless rounded-5 table-hover text-center">
      <thead>

        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>

          <th scope="col">Hasil</th>



        </tr>
      </thead>
      <tbody>
        <?php foreach ($smartscheffe as $a) {

        ?>

          <tr>

            <td><?= $z++ ?></td>
            <td><?= $a['nama'] ?></td>

            <td><?= $a['hasil'] ?></td>





          </tr>
        <?php } ?>
    </table>
  </div>

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Danger Area</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action='' method='post'>
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
            <button type="submit" name="deletes" class="btn btn-primary">Proceed</button>
          </div>
          <?php
          if (isset($_POST['deletes'])) {
            if (isset($_POST['sawnormal'])) {
              mysqli_query($c, "TRUNCATE TABLE hasilsawnormal");
            }
            if (isset($_POST['wpnormal'])) {
              mysqli_query($c, "TRUNCATE TABLE hasilwpnormal");
            }
            if (isset($_POST['smartnormal'])) {
              mysqli_query($c, "TRUNCATE TABLE hasilsmartnormal");
            }
            if (isset($_POST['sawscheffe'])) {
              mysqli_query($c, "TRUNCATE TABLE hasilsawscheffe");
            }
            if (isset($_POST['wpscheffe'])) {
              mysqli_query($c, "TRUNCATE TABLE hasilwpscheffe");
            }
            if (isset($_POST['smartscheffe'])) {
              mysqli_query($c, "TRUNCATE TABLE hasilsmartscheffe");
            }
            if (isset($_POST['asdos'])) {
              mysqli_query($c, "TRUNCATE TABLE kandidat; TRUNCATE TABLE kandidatwp; TRUNCATE TABLE kandidatsmart;");
            }
          }
          ?>
        </form>
      </div>
    </div>
  </div>

<?php } else { ?>
  <div class="container bg-white rounded-5 float-left" style="width: 600px;">
    <div class="form-check form-switch d-flex">
      <p class="mx-5 fs-3 font">Normal </p>
      <input id="cuki" class="form-check-input" style="width: 150px; height: 50px;" name="normal" type="checkbox" role="switch">
      <p class="mx-2 fs-3 font">Scheffe </p>
      <p class="fs-6"><a href="<?= basename($_SERVER['PHP_SELF']); ?>?met=scheffe">Reload</a> for the result </p>
      <?php
      if ($_SESSION['who'] == 'dosen') {} 
      elseif ($_SESSION['who'] == 'gosi') { ?>
        <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn-reset" title="Reset data table aplikasi"><i class="fa-solid fa-trash-can"></i></button>
      <?php } ?>
    </div>
  </div>
  <?php
  if ($_SESSION['who'] == 'dosen') { ?>
    <a href="logout.php" title="Log out akun dosen" class="btn-hapus">Logout</a>
  <?php
  } elseif ($_SESSION['who'] == 'mahasiswa') { ?>
    <a class="btn-back pull-right" href="logout.php"><i class="fa-solid fa-chevron-left"></i></a>

  <?php } elseif ($_SESSION['who'] == 'gosi') { ?>
    <a class="btn-back pull-right" href="index.php"><i class="fa-solid fa-chevron-left"></i></a>
  <?php }

  ?>

  <div style="margin-left: 8%;" class=" p-3 divtable col-10 bg-light rounded-5 divtable">
    <h1>Tabel SAW</h1>
    <table class=" table  table-borderless rounded-5 table-hover text-center">
      <thead>

        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Hasil</th>


          <!-- <th scope="col">Ranking</th> -->
          <!-- <th scope="col">Tanggung Jawab</th> -->
          <!-- <th scope="col">Inisiatif</th> -->
          <!-- <th scope="col">Komunikatif</th> -->

        </tr>
      </thead>
      <tbody>
        <?php

        $z = 1;
        $results = array();
        foreach ($sawnormal as $a) :
        ?>
          <tr>
            <td><?= $z++ ?></td>
            <td><?= $a['nama'] ?></td>

            <td><?= $a['hasil'] ?></td>

          </tr>
        <?php endforeach; ?>



      </tbody>
    </table>
  </div>

  <div style="margin-left: 8%;" class=" p-3 divtable col-10 bg-light rounded-5">
    <h1>Tabel WP</h1>
    <table class=" table table-borderless rounded-5 table-hover text-center">
      <thead>

        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>

          <th scope="col">Hasil</th>



          <!-- <th scope="col">Tanggung Jawab</th> -->
          <!-- <th scope="col">Inisiatif</th> -->
          <!-- <th scope="col">Komunikatif</th> -->

        </tr>
      </thead>
      <tbody>
        <?php
        $sum = mysqli_query($c, "SELECT SUM(hasil) AS skom FROM hasilwpnormal");
        $bismillah = mysqli_fetch_assoc($sum);
        $selesaima = $bismillah['skom'];

        $z = 1;
        $results = array();
        foreach ($wpnormal as $a) :
        ?>
          <tr>
            <td><?= $z++ ?></td>
            <td><?= $a['nama'] ?></td>


            <td>
              <?= $a['hasil'] / $selesaima ?>
            </td>







          </tr>
        <?php endforeach;
        ?>
    </table>
  </div>


  <div style="margin-left: 8%;" class="p-3 col-10 divtable bg-light rounded-5">
    <h1>Tabel SMART</h1>
    <table class="table  table-borderless rounded-5 table-hover text-center">
      <thead>

        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>

          <th scope="col">Hasil</th>





        </tr>
      </thead>
      <tbody>
        <?php
        $z = 1;
        foreach ($smartnormal as $a) :


          // $max = max($twj)
        ?>
          <tr>

            <td><?= $z++ ?></td>
            <td><?= $a['nama'] ?></td>

            <td><?= $a['hasil'] ?></td>






          </tr>

        <?php endforeach; ?>

    </table>
  </div>

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Danger Area</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action='' method='post'>
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
            <button type="submit" name="deletes" class="btn btn-primary">Proceed</button>
          </div>
          <?php
          if (isset($_POST['deletes'])) {
            if (isset($_POST['sawnormal'])) {
              mysqli_query($c, "TRUNCATE TABLE hasilsawnormal");
            }
            if (isset($_POST['wpnormal'])) {
              mysqli_query($c, "TRUNCATE TABLE hasilwpnormal");
            }
            if (isset($_POST['smartnormal'])) {
              mysqli_query($c, "TRUNCATE TABLE hasilsmartnormal");
            }
            if (isset($_POST['sawscheffe'])) {
              mysqli_query($c, "TRUNCATE TABLE hasilsawscheffe");
            }
            if (isset($_POST['wpscheffe'])) {
              mysqli_query($c, "TRUNCATE TABLE hasilwpscheffe");
            }
            if (isset($_POST['smartscheffe'])) {
              mysqli_query($c, "TRUNCATE TABLE hasilsmartscheffe");
            }
            if (isset($_POST['asdos'])) {
              mysqli_query($c, "TRUNCATE TABLE kandidat; TRUNCATE TABLE kandidatwp; TRUNCATE TABLE kandidatsmart;");
            }
          }
          ?>
        </form>
      </div>
    </div>
  </div>


<?php
} ?>


</body>

</html>