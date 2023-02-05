<?php include 'cuy.php'; 
if ($_GET['met']=='scheffe'){
?>


<div class="ms-5 p-3 col-10 bg-light rounded-5">
    <h1>Tabel SAW</h1>
    <table class=" table table-borderless rounded-5 table-hover text-center">
        <thead>

            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Hasilnya</th>
                <!-- <th scope="col">Ranking</th> -->
                <!-- <th scope="col">Tanggung Jawab</th> -->
                <!-- <th scope="col">Inisiatif</th> -->
                <!-- <th scope="col">Komunikatif</th> -->

            </tr>
        </thead>
        <tbody>
            <?php

            $z = 1;
            foreach ($datakandidat as $a) :
            ?>
                <tr>
                    <td><?= $z++ ?></td>
                    <td><?= $a['nama'] ?></td>
                    <!-- <td><?= $a['c1'] + $a['c2'] + $a['c3'] + $a['c4'] + $a['c5'] ?></td> -->
                    <td><?= ($a['c1'] * (-309)) + ($a['c2']*(-414)) + ($a['c3'] * (-96)) + ($a['c4'] * 285) + ($a['c5'] * 573) ?></td>



                </tr>
            <?php endforeach; ?>
    </table>
</div>

<div class="ms-5 p-3 col-10 bg-light rounded-5">
    <h1>Tabel WP</h1>
    <table class=" table table-borderless rounded-5 table-hover text-center">
        <thead>

            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Nilai S</th>
                <th scope="col">Nilai V</th>

                <!-- <th scope="col">Tanggung Jawab</th> -->
                <!-- <th scope="col">Inisiatif</th> -->
                <!-- <th scope="col">Komunikatif</th> -->

            </tr>
        </thead>
        <tbody>
            <?php

            $z = 1;
            foreach ($datakandidat as $a) :
            ?>
                <tr>
                    <td><?= $z++ ?></td>
                    <td><?= $a['nama'] ?></td>

                    <?php $wecapek = mysqli_query($c, "SELECT * FROM wp_w");
                    foreach ($wecapek as $w) :   ?>
                        <td><?= pow($a['c1'], $w['w1']) * pow($a['c2'], $w['w2']) * pow($a['c3'], $w['w3']) * pow($a['c4'], $w['w4']) * pow($a['c5'], $w['w5']) ?></td>
                    <?php endforeach; ?>

                    <?php
                    // foreach ($wecapek as $d):
                    // $totals =  pow($a['c1'], $w['w1']) * pow($a['c2'], $w['w2']) * pow($a['c3'], $w['w3']) * pow($a['c4'], $w['w4']) * pow($a['c5'], $w['w5']);

                    ?>




            <?php endforeach; ?>
    </table>
</div>


<div class="ms-5 p-3 col-10 bg-light rounded-5">
    <h1>Tabel SMART</h1>
    <table class=" table table-borderless rounded-5 table-hover text-center">
        <thead>

            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
         
                <th scope="col">Hasilnya</th>
                <th scope="col">RANK</th>


            </tr>
        </thead>
        <tbody>
            <?php

            $z1 = -7.9;
            $z2 = -11;
            $z3 = -2.5;
            $z4 = 7.3;
            $z5 = 15;

            $z = 1;
            foreach ($datakandidat as $a) :
                $x1 = 100 * (5 - $a['c1']) / 5;
                $x2 = 100 * (5 - $a['c2']) / 5;
                $x3 = 100 * (5 - $a['c3']) / 5;
                $x4 = 100 * (5 - $a['c4']) / 5;
                $x5 = 100 * (5 - $a['c5']) / 5;
                $twj = ($z1 * $x1) + ($z2 * $x2) + ($z3 * $x3) + ($z4 * $x4) + ($z5 * $x5);
            ?>
                <tr>

                    <td><?= $z++ ?></td>
                    <td><?= $a['nama'] ?></td>
                   
                    <td><?= $twj ?></td>





                </tr>
            <?php endforeach; ?>
    </table>
</div>

<?php }else{ ?>


    <div class="ms-5 p-3 col-10 bg-light rounded-5">
    <h1>Tabel SAW</h1>
    <table class=" table table-borderless rounded-5 table-hover text-center">
        <thead>

            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Hasilnya</th>
                <!-- <th scope="col">Ranking</th> -->
                <!-- <th scope="col">Tanggung Jawab</th> -->
                <!-- <th scope="col">Inisiatif</th> -->
                <!-- <th scope="col">Komunikatif</th> -->

            </tr>
        </thead>
        <tbody>
            <?php

            $z = 1;
            foreach ($datakandidat as $a) :
            ?>
                <tr>
                    <td><?= $z++ ?></td>
                    <td><?= $a['nama'] ?></td>
                    <!-- <td><?= $a['c1'] + $a['c2'] + $a['c3'] + $a['c4'] + $a['c5'] ?></td> -->
                    <td><?= ($a['c1'] * 5) + ($a['c2']) + ($a['c3'] * 4) + ($a['c4'] * 3) + ($a['c5'] * 2) ?></td>



                </tr>
            <?php endforeach; ?>
    </table>
</div>

<div class="ms-5 p-3 col-10 bg-light rounded-5">
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

            $z = 1;
            foreach ($datakandidat as $a) :
            ?>
                <tr>
                    <td><?= $z++ ?></td>
                    <td><?= $a['nama'] ?></td>

                    <?php $wecapek = mysqli_query($c, "SELECT * FROM wp_w");
                    foreach ($wecapek as $w) :   ?>
                        <td><?= pow($a['c1'], $w['w1']) * pow($a['c2'], $w['w2']) * pow($a['c3'], $w['w3']) * pow($a['c4'], $w['w4']) * pow($a['c5'], $w['w5']) ?></td>
                    <?php endforeach; ?>

                    <?php
                    // foreach ($wecapek as $d):
                    // $totals =  pow($a['c1'], $w['w1']) * pow($a['c2'], $w['w2']) * pow($a['c3'], $w['w3']) * pow($a['c4'], $w['w4']) * pow($a['c5'], $w['w5']);

                    ?>




            <?php endforeach; ?>
    </table>
</div>


<div class="ms-5 p-3 col-10 bg-light rounded-5">
    <h1>Tabel SMART</h1>
    <table class=" table table-borderless rounded-5 table-hover text-center">
        <thead>

            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
               
                <th scope="col">Total Wj</th>
                <th scope="col">RANK</th>


            </tr>
        </thead>
        <tbody>
            <?php

            $z1 = 0.33;
            $z2 = 0.06;
            $z3 = 0.26;
            $z4 = 0.2;
            $z5 = 0.13;

            $z = 1;
            foreach ($datakandidat as $a) :
                $x1 = 100 * (5 - $a['c1']) / 5;
                $x2 = 100 * (5 - $a['c2']) / 5;
                $x3 = 100 * (5 - $a['c3']) / 5;
                $x4 = 100 * (5 - $a['c4']) / 5;
                $x5 = 100 * (5 - $a['c5']) / 5;
                $twj = ($z1 * $x1) + ($z2 * $x2) + ($z3 * $x3) + ($z4 * $x4) + ($z5 * $x5);
                global $min, $man;
                $min = min($twj);
                $max = max($twj)
            ?>
                <tr>

                    <td><?= $z++ ?></td>
                    <td><?= $a['nama'] ?></td>
                  
                    <td><?= $twj ?></td>
                    <td><?= $min ?></td>





                </tr>
            <?php endforeach; ?>
    </table>
</div>



<?php
} ?>


</body>

</html>