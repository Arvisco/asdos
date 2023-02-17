

<?php

use PhpOffice\PhpSpreadsheet\Calculation\MathTrig\Sum;

include 'cuy.php';
if ($_GET['met'] == 'scheffe') {
?>
<button onclick="sortTable()">Sort</button>
    <a class="btn-back" href="index.php"><i class="fa-solid fa-chevron-left"></i></a>
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
$selesaima=$bismillah['skom'];

                $z = 1;
                foreach ($wpscheffe as $a) :
                ?>
                    <tr>
                        <td><?= $z++ ?></td>
                        <td><?= $a['nama'] ?></td>

                        
                            <td><?= $a['hasil']/$selesaima ?></td>
                       

                    




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
              

                    <tr>

                        <td><?= $z++ ?></td>
                        <td><?= $a['nama'] ?></td>

                        <td><?= $a['hasil']?></td>





                    </tr>
                
        </table>
    </div>

<?php } else { ?>
    <a class="btn-back pull-right" href="index.php"><i class="fa-solid fa-chevron-left"></i></a>

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

                        <td><?=$a['hasil'] ?></td>
                        
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
                $selesaima=$bismillah['skom'];

                $z = 1;
                $results = array();
                foreach ($wpnormal as $a) :
                ?>
                    <tr>
                        <td><?= $z++ ?></td>
                        <td><?= $a['nama'] ?></td>

                       
                            <td>
                                <?= $a['hasil']/$selesaima ?>
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

                foreach ($smartnormal as $a) :
                    $x1 = 100 * (5 - $a['c1']) / 5;
                    $x2 = 100 * (5 - $a['c2']) / 5;
                    $x3 = 100 * (5 - $a['c3']) / 5;
                    $x4 = 100 * (5 - $a['c4']) / 5;
                    $x5 = 100 * (5 - $a['c5']) / 5;
                    $twj = ($z1 * $x1) + ($z2 * $x2) + ($z3 * $x3) + ($z4 * $x4) + ($z5 * $x5);
                    array_push($results, $twj);
                    global $min, $man;

                    // $max = max($twj)
                ?>
                    <tr>

                        <td><?= $z++ ?></td>
                        <td><?= $a['nama'] ?></td>

                        <td><?= $a['hasil']?></td>






                    </tr>

                <?php endforeach; ?>
                
        </table>
    </div>



<?php
} ?>


</body>

</html>