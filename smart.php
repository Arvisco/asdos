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
</script>
<?php require_once 'cuy.php';
$met = $_GET['met']; ?>
<h1 class="font text-center">Metode Simple Multi-Attribute Rating Technique (SMART)</h1>
<div class="position-relative">
  <?php 
 
  foreach ($smartdata as $a) {
  ?>
    <div style="margin-top: 50px;" class="container d-flex h-90 align-items-center justify-content-center p-5 bg-light rounded-5">
      <!-- <div class="card mb-3 p-3" style="max-width: 600px;"> -->
      <div class="row g-0">
        <div class="col-md-5">
          <img style="width: 200px; height: 230px;" src="storage/<?= $a['pics'] ?>" class="img-fluid rounded-start" alt="...">
          <h5 class="nama"><?= $a['nama'] ?></h5>
          <p class="ket"><?php $chunks = chunk_split($a['keterangan'], 100, "<br>");
                          echo rtrim($chunks, "<br>"); ?></p>
          <p class="ket">Ipk : <?= $a['c2'] ?></p>

        </div>
        <div class="col-md-7">
          <div class="card-body">
            <form action='' method='post'>
              <label for="customRange3" class="form-label">Kemahiran</label>
              <input type="range" class="form-range" min="1" max="5" step="1" onchange="kemahiran(this.value);" id="customRange3"><span>
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


              <button type="submit" name="gas" class="button-90">Input</button>
            </form>
            <?php
            if (isset($_POST['gas'])) {
              $kem = $_POST['kem'];
              $ins = $_POST['ins'];
              $tj = $_POST['tj'];
              $kom = $_POST['kom'];
              $wle = $a['keterangan'];


              if ($met != 'scheffe') {
                # code...

                $z1 = 0.33;
                $z2 = 0.06;
                $z3 = 0.26;
                $z4 = 0.2;
                $z5 = 0.13;
                $x1 = 100 * (5 - $kem) / 5;
                $x2 = 100 * (5 - $a['c2']) / 5;
                $x3 = 100 * (5 - $tj) / 5;
                $x4 = 100 * (5 - $ins) / 5;
                $x5 = 100 * (5 - $kom) / 5;
                $twj = ($z1 * $x1) + ($z2 * $x2) + ($z3 * $x3) + ($z4 * $x4) + ($z5 * $x5);
                mysqli_query($c, "INSERT INTO hasilsmartnormal VALUES ('','$a[nama]','$twj')");
              } else {
                $z1 = -333;
                $z2 = -420;
                $z3 = -27;
                $z4 = 285;
                $z5 = 573;
                $x1 = 100 * (5 - $kem) / 5;
                $x2 = 100 * (5 - $a['c2']) / 5;
                $x3 = 100 * (5 - $tj) / 5;
                $x4 = 100 * (5 - $ins) / 5;
                $x5 = 100 * (5 - $kom) / 5;
                $twj = ($z1 * $x1) + ($z2 * $x2) + ($z3 * $x3) + ($z4 * $x4) + ($z5 * $x5);
                mysqli_query($c, "INSERT INTO hasilsmartscheffe VALUES ('','$a[nama]','$twj')");
             
              }

              // mysqli_query($c, "UPDATE kandidatsmart SET c1 = '$kem', c3 = '$tj', c4 = '$ins', c5='$kom' WHERE keterangan LIKE '$wle' ");
              if ($xpages < $xtotalpages) {
                header('Location:smart.php?pages=' . $xnext . '&&met=' . $met);
              } else {
                header('Location:tunggu.php?f=smart');
              }

              if ($_GET['met']=='scheffe'){
                mysqli_query($c, "UPDATE kandidatsmart SET z = '1' WHERE id LIKE $a[id]");
              }
              else {
                  mysqli_query($c, "UPDATE kandidatsmart SET x = '1' WHERE id LIKE $a[id]");
                }



            }
            
            ob_flush();
            ?>






          </div>
        </div>
      </div>
    </div>
</div>

<?php }  ?>

</div>





<!-- </div> -->

</body>

</html>