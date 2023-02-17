<script>
  function xtj(val) {
    document.getElementById('tjx').value = val;
  }

  function kemahiran(val) {
    document.getElementById('huh').value = val;
  }

  function xins(val) {
    document.getElementById('insx').value = val;
  }

  function xkom(val) {
    document.getElementById('komx').value = val;
  }

  function next() {
    document.getElementById('neks').click;
  }
</script>
<?php include 'cuy.php';
$met = $_GET['met'] ?>
<h1 class="font text-center">Metode Simple Additive Weighting (SAW)</h1>
<div class="position-relative">
  <?php while ($a = mysqli_fetch_assoc($products)) { ?>
    <div style="margin-top: 50px;" class="container d-flex h-90 align-items-center justify-content-center p-5 bg-light rounded-5">
      <!-- <div class="card mb-3" style="max-width: 600px;"> -->
      <div class="row g-0">
        <div class="col-md-5">
          <img style="width: 200px; height: 230px;" src="storage/<?= $a['pics'] ?>" class="img-fluid rounded-start" style="width: 150px; height: auto;" alt="...">
          <h5 class="nama"><?= $a['nama'] ?></h5>
          <p class="ket"><?php $chunks = chunk_split($a['keterangan'], 100, "<br>");
                          echo rtrim($chunks, "<br>"); ?></p>
          <p class="ket">Ipk : <?= $a['c2'] ?></p>

        </div>
        <div class="col-md-7">
          <div class="card-body">
            <form action='' method='post'>
              <label for="customRange3" class="form-label">Kemahiran</label>
              <input type="range" class="form-range " min="1" max="5" step="1" onchange="kemahiran(this.value);" id="customRange3"><span>
                <input type="hidden" name="kem" id="huh"></span>

              <label for="customRange3" class="form-label">Tanggung Jawab</label>
              <input type="range" class="form-range" min="1" max="5" step="1" onchange="xtj(this.value);" id="tj"><span>
                <input type="hidden" name="tj" id="tjx"></span>

              <label for="customRange3" class="form-label">Inisiatif &nbsp;</label>
              <input type="range" class="form-range" min="1" max="5" step="1" onchange="xins(this.value);" id="customRange3"><span>
                <input type="hidden" name="ins" id="insx"></span>

              <label for="customRange3" class="form-label">Komunikatif</label>
              <input type="range" class="form-range" min="1" max="5" step="1" onchange="xkom(this.value);" id="customRange3"><span>
                <input type="hidden" name="kom" id="komx"></span>


              <button onclick="next()" type="submit" name="gas" class="button-90">Input</button>
            </form>
            <?php
            if (isset($_POST['gas'])) {
              $kem = $_POST['kem'];
              $ins = $_POST['ins'];
              $tj = $_POST['tj'];
              $kom = $_POST['kom'];
              $wle = $a['keterangan'];
              if ($met != 'scheffe') {
                $hasil = ($kem * 5) + ($a['c2']) + ($tj * 4) + ($ins * 3) + ($kom * 2);
                mysqli_query($c, "INSERT INTO hasilsawnormal VALUES ('','$a[nama]','$hasil')");
              } else {
                $hasil = ($kem * (-333)) + ($a['c2'] * (-420)) + ($tj * (-27)) + ($ins * 285) + ($kom * 573);
                mysqli_query($c, "INSERT INTO hasilsawscheffe VALUES ('','$a[nama]','$hasil')");
              }



              // mysqli_query($c, "UPDATE kandidat SET c1 = '$kem', c3 = '$tj', c4 = '$ins', c5='$kom' WHERE keterangan LIKE '$wle' ");
              if ($xpages < $xtotalpages) {
                header('Location:saw.php?pages=' . $xnext . '&&met=' . $met);
              } else {
                header('Location:tunggu.php?f=saw');
              }
            }
            ?>






          </div>
        </div>
      </div>
      <!-- </div> -->
    </div>

  <?php }   ?>

</div>





<!-- </div> -->

</body>

</html>