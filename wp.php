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
<?php include 'cuy.php'; ?>

<div class="container">
  <?php while($a=mysqli_fetch_assoc($wpdata)){ ?>
    <div class="mx-5 col-6 bg-light rounded-5">
      <div class="card mb-3 p-3" style="max-width: 600px;">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="img04.jpg" class="img-fluid rounded-start" alt="...">
            <h5 class="card-title"><?= $a['nama'] ?></h5>
            <p class="card-text"><?= $a['keterangan'] ?></p>
            <p>Ipk : <?= $a['c2'] ?></p>

          </div>
          <div class="col-md-6">
            <div class="card-body">
              <form action='' method='post'>
              <label for="customRange3" class="form-label">Kemahiran</label>
              <input type="range" class="form-range" min="1" max="5" step="1" onchange="kemahiran(this.value);" id="customRange3"><span>
                <input type="text" name="kem" id="huh"></span>

              <label for="customRange3" class="form-label">Tanggung Jawab</label>
              <input type="range" class="form-range" min="1" max="5" step="1" onchange="xtj(this.value);" id="tj"><span>
                <input type="text" name="tj" id="tjx"></span>

              <label for="customRange3" class="form-label">Inisiatif &nbsp;</label>
              <input type="range" class="form-range" min="1" max="5" step="1" onchange="xins(this.value);" id="customRange3"><span>
                <input type="text" name="ins" id="insx"></span>

              <label for="customRange3" class="form-label">Komunikatif</label>
              <input type="range" class="form-range" min="1" max="5" step="1" onchange="xkom(this.value);" id="customRange3"><span>
                <input type="text" name="kom" id="komx"></span>
                
                
                <button type="submit" name="gas" class="btn btn-primary">Input</button>
                </form>
<?php 
if(isset($_POST['gas'])){
  $kem = $_POST['kem'];
  $ins = $_POST['ins'];
  $tj = $_POST['tj'];
  $kom = $_POST['kom'];
  $wle = $a['keterangan'];
  mysqli_query($c, "UPDATE kandidatwp SET c1 = '$kem', c3 = '$tj', c4 = '$ins', c5='$kom' WHERE keterangan LIKE '$wle' ");
}
?>






            </div>
          </div>
        </div>
      </div>
    </div>

  <?php }   ?>

</div>
<nav>
  <ul class="pagination justify-content-center">
   
    <?php
    for ($x = 1; $x <= $xtotalpages; $x++) {
    ?>
      <li class="page-item"><a class="page-link btn-success" href="?pages=<?php echo $x ?>"><?php echo $x; ?></a></li>
    <?php
    }
    ?>
    <li class="page-item">
      <a class="page-link" <?php if ($xpages < $xtotalpages) {
                              echo "href='?pages=$xnext'";
                            } ?>>Next</a>
    </li>
  </ul>
</nav>




<!-- </div> -->

</body>

</html>