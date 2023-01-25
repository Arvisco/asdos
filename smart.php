<!-- <div class="row"> -->
    <?php
    error_reporting(0);
    $m = $_GET['method'];

    if($m==''){
    ?>
    <div class="col-2">
    <?php
    
    // use PhpOffice\PhpSpreadsheet\Calculation\Statistical\Averages;
    
 include 'misc.php'; ?></div>
<div class="col-5 offset-sm-2">
    <div class="ms-5 p-3 col-10 bg-light rounded-5">
        <h1>Tabel Normalisasi</h1>
        <table class=" table table-borderless rounded-5 table-hover text-center">
            <thead>

                <tr>


                    <th scope="col">Bobot</th>
                    <th scope="col">Normalisasi</th>

                </tr>
            </thead>
            <tbody>
                <?php

                foreach ($bk as $a) :
                    
                ?>
                    <tr>

                        <td><?= $a['c'] ?></td>
                        <td><?= $a['c'] / 15 ?></td>





                    </tr>

                <?php endforeach; ?>

        </table>
    </div>
</div>






<div class="col-8 offset-sm-2">
    <div class="ms-5 p-3 col-10 bg-light rounded-5">
        <h4>Tabel Nilai Utility Dari Tiap Kriteria</h4>
        <table class=" table table-borderless rounded-5 table-hover text-center">
            <thead>

                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">C1</th>
                    <th scope="col">Ui</th>
                    <th scope="col">Wj</th>
                    <th scope="col">C2</th>
                    <th scope="col">Ui</th>
                    <th scope="col">Wj</th>
                    <th scope="col">C3</th>
                    <th scope="col">Ui</th>
                    <th scope="col">Wj</th>
                    <th scope="col">C4</th>
                    <th scope="col">Ui</th>
                    <th scope="col">Wj</th>
                    <th scope="col">C5</th>
                    <th scope="col">Ui</th>
                    <th scope="col">Wj</th>
                    <th scope="col">Total Wj</th>
                    <th scope="col">RANK</th>


                </tr>
            </thead>
            <tbody>
                <?php

                $z1=0.33; $z2=0.06; $z3=0.26; $z4=0.2; $z5=0.13;

                $z = 1;
                foreach ($asdos as $a) :
                    $x1 = 100 * (5 - $a['c1']) / 5;
                    $x2 = 100 * (5 - $a['c2']) / 5;
                    $x3 = 100 * (5 - $a['c3']) / 5;
                    $x4 = 100 * (5 - $a['c4']) / 5;
                    $x5 = 100 * (5 - $a['c5']) / 5;
                    $twj = ($z1*$x1)+($z2*$x2)+($z3 *$x3)+ ($z4* $x4)+( $z5*$x5);
                ?>
                    <tr>

                        <td><?= $z++ ?></td>
                        <td><?= $a['nama'] ?></td>
                        <td><?= $a['c1'] ?></td>
                        <td><?= $x1 ?></td>
                        <td><?= $x1*$z1 ?></td>
                        <td><?= $a['c2'] ?></td>
                        <td><?= $x2 ?></td>
                        <td><?= $x2*$z2 ?></td>
                        <td><?= $a['c3'] ?></td>
                        <td><?= $x3 ?></td>
                        <td><?= $x3*$z3 ?></td>
                        <td><?= $a['c4'] ?></td>
                        <td><?= $x4 ?></td>
                        <td><?= $x4*$z4 ?></td>
                        <td><?= $a['c5'] ?></td>
                        <td><?= $x5 ?></td>
                        <td><?= $x5*$z5 ?></td>
                        <td><?= $twj ?></td>
                      




                    </tr>
                <?php endforeach; ?>
        </table>
    </div>
</div>

<?php }elseif($m = 'scheffe'){ ?>


    <div class="col-2">
    <?php
    
    // use PhpOffice\PhpSpreadsheet\Calculation\Statistical\Averages;
    
 include 'misc.php'; ?></div>
<div class="col-5 offset-sm-2">
    <div class="ms-5 p-3 col-10 bg-light rounded-5">
        <h1>Tabel Normalisasi</h1>
        <table class=" table table-borderless rounded-5 table-hover text-center">
            <thead>

                <tr>


                    <th scope="col">Bobot</th>
                    <th scope="col">Normalisasi</th>

                </tr>
            </thead>
            <tbody>
                <?php

                foreach ($bk as $a) :
                    
                ?>
                    <tr>

                        <td><?= $a['c'] ?></td>
                        <td><?= $a['c'] / 0 ?></td>





                    </tr>

                <?php endforeach; ?>

        </table>
    </div>
</div>






<div class="col-8 offset-sm-2">
    <div class="ms-5 p-3 col-10 bg-light rounded-5">
        <h4>Tabel Nilai Utility Dari Tiap Kriteria</h4>
        <table class=" table table-borderless rounded-5 table-hover text-center">
            <thead>

                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">C1</th>
                    <th scope="col">Ui</th>
                    <th scope="col">Wj</th>
                    <th scope="col">C2</th>
                    <th scope="col">Ui</th>
                    <th scope="col">Wj</th>
                    <th scope="col">C3</th>
                    <th scope="col">Ui</th>
                    <th scope="col">Wj</th>
                    <th scope="col">C4</th>
                    <th scope="col">Ui</th>
                    <th scope="col">Wj</th>
                    <th scope="col">C5</th>
                    <th scope="col">Ui</th>
                    <th scope="col">Wj</th>
                    <th scope="col">Total Wj</th>
                    <th scope="col">RANK</th>


                </tr>
            </thead>
            <tbody>
                <?php

                $z1=0.33; $z2=0.06; $z3=0.26; $z4=0.2; $z5=0.13;

                $z = 1;
                foreach ($asdos as $a) :
                    $x1 = 100 * (5 - $a['c1']) / 5;
                    $x2 = 100 * (5 - $a['c2']) / 5;
                    $x3 = 100 * (5 - $a['c3']) / 5;
                    $x4 = 100 * (5 - $a['c4']) / 5;
                    $x5 = 100 * (5 - $a['c5']) / 5;
                    $twj = ($z1*$x1)+($z2*$x2)+($z3 *$x3)+ ($z4* $x4)+( $z5*$x5);
                ?>
                    <tr>

                        <td><?= $z++ ?></td>
                        <td><?= $a['nama'] ?></td>
                        <td><?= $a['c1'] ?></td>
                        <td><?= $x1 ?></td>
                        <td><?= $x1*$z1 ?></td>
                        <td><?= $a['c2'] ?></td>
                        <td><?= $x2 ?></td>
                        <td><?= $x2*$z2 ?></td>
                        <td><?= $a['c3'] ?></td>
                        <td><?= $x3 ?></td>
                        <td><?= $x3*$z3 ?></td>
                        <td><?= $a['c4'] ?></td>
                        <td><?= $x4 ?></td>
                        <td><?= $x4*$z4 ?></td>
                        <td><?= $a['c5'] ?></td>
                        <td><?= $x5 ?></td>
                        <td><?= $x5*$z5 ?></td>
                        <td><?= $twj ?></td>
                      




                    </tr>
                <?php endforeach; ?>
        </table>
    </div>
</div>



    <?php } ?>


<!-- </div> -->

</body>

</html>