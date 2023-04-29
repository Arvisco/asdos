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
session_start();
if ($_SESSION['who'] != 'dosen') {
    header('Location:skom.php');
}

$met = $_GET['met'] ?>
<div class="position-relative">
    <?php while ($a = mysqli_fetch_assoc($products)) { ?>
        <div style="margin-top: 50px;" class="container d-flex h-90 align-items-center justify-content-center p-5 bg-light rounded-5">
            <!-- <div class="card mb-3" style="max-width: 600px;"> -->
            <div class="row g-0">
                <div class="col-md-5">
                    <?php if ($a['pics'] == '') { ?>
                        <img style="width: 200px; height: 230px;" src="storage/img04.jpg" class="img-fluid rounded-start" style="width: 150px; height: auto;" alt="...">

                    <?php } else { ?>
                        <img style="width: 200px; height: 230px;" src="storage/<?= $a['pics'] ?>" class="img-fluid rounded-start" style="width: 150px; height: auto;" alt="...">
                    <?php } ?><h5 class="nama"><?= $a['nama'] ?></h5>
                    <p class="ket"><?php $chunks = chunk_split($a['keterangan'], 106, "<br>");
                                    echo rtrim($chunks, "<br>"); ?></p>
                    <p class="ket">Ipk : <?= $a['c2'] ?></p>

                </div>
                <div class="col-md-7">
                    <div class="card-body">
                        <form action='' method='post'>
                            <label for="customRange3" class="form-label">Kemahiran</label><span>

                                <input type="range" class="form-range col-3" min="1" max="5" step="1" onchange="kemahiran(this.value);" id="customRange3">

                                <input type="hidden" name="kem" id="huh">
                            </span>

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
                            $var1 = 'bismillah';
                            $var2 = 'plis';
                            $var3 = 'lulus';
                            $var4 = 'maret';

                            $n1 = $kem / 5;
                            $n2 = $a['c2'] / 5;
                            $n3 = $tj / 5;
                            $n4 = $ins / 5;
                            $n5 = $kom / 5;



                            $hasils = (($kem * $n1) + ($a['c2'] * $n2) + ($tj * $n3) + ($ins * $n4) + ($kom * $n5));
                            // $hasil = $n1+$n2+$n3+$n4+$n5;
                            mysqli_query($c, "INSERT INTO hasilsawnormal VALUES ('','$a[nama]','$hasils')");

                            $wecapek = mysqli_query($c, "SELECT * FROM wp_w WHERE metode LIKE 'normal'");
                            foreach ($wecapek as $w) :
                                $rank = pow($kem, $w['w1']) * pow($a['c2'], $w['w2']) * pow($tj, $w['w3']) * pow($ins, $w['w4']) * pow($kom, $w['w5']);
                                mysqli_query($c, "INSERT INTO hasilwpnormal VALUES ('','$a[nama]','$rank')");
                            endforeach;

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

                            $hasil = ($kem * (-333)) + ($a['c2'] * (-420)) + ($tj * (-27)) + ($ins * 285) + ($kom * 573);
                            // $hasil = ($kem * $n1) + ($a['c2'] * $n2) + ($tj * $n3) + ($ins * $n4) + ($kom * $n5);
                            mysqli_query($c, "INSERT INTO hasilsawscheffe VALUES ('','$a[nama]','$hasil')");

                            $wecapek = mysqli_query($c, "SELECT * FROM wp_w WHERE metode LIKE 'scheffe'");
                            foreach ($wecapek as $w) :
                                $rank = pow($kem, $w['w1']) * pow($a['c2'], $w['w2']) * pow($tj, $w['w3']) * pow($ins, $w['w4']) * pow($kom, $w['w5']);
                                mysqli_query($c, "INSERT INTO hasilwpscheffe VALUES ('','$a[nama]','$rank')");
                            endforeach;

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





                            // mysqli_query($c, "UPDATE kandidat SET c1 = '$kem', c3 = '$tj', c4 = '$ins', c5='$kom' WHERE keterangan LIKE '$wle' ");
                            if ($xpages < $xtotalpages) {
                                header('Location:penilaian.php?pages=' . $xnext);
                            } else {
                                header('Location:tunggu.php');
                            }
                        }
                        ?>






                    </div>
                </div>
                <p class="text-center fw-bold fst-italic text-black-50">WARNING : SEMAKIN KE KIRI = SEMAKIN KURANG | SEMAKIN KE KANAN = SEMAKIN BAGUS</p>
            </div>
            <!-- </div> -->
        </div>

    <?php }   ?>

</div>





<!-- </div> -->

</body>

</html>