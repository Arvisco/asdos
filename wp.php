<!-- <div class="row"> -->
<div class="col-2">
    <?php include 'misc.php'; ?></div>
<div class="col-5 offset-sm-2">
    <div class="ms-5 p-3 col-10 bg-light rounded-5">
        <h1>Tabel Nilai W</h1>
        <table class=" table table-borderless rounded-5 table-hover text-center">
            <thead>

                <tr>

                    <th scope="col">W1</th>
                    <th scope="col">W2</th>
                    <th scope="col">W3</th>
                    <th scope="col">W4</th>
                    <th scope="col">W5</th>


                </tr>
            </thead>
            <tbody>
                <?php
                $wecapek = mysqli_query($c, "SELECT * FROM wp_w");
                foreach ($wecapek as $w) :

                ?>
                    <tr>

                        <td><?= $w['w1'] ?></td>
                        <td><?= $w['w2'] ?></td>
                        <td><?= $w['w3'] ?></td>
                        <td><?= $w['w4'] ?></td>
                        <td><?= $w['w5'] ?></td>




                    </tr><?php endforeach; ?>
            </tbody>

        </table>
    </div>
</div>

<div class="col-8 offset-sm-2">
    <div class="ms-5 p-3 col-10 bg-light rounded-5">
        <h1>Tabel Vektor S & V</h1>
        <form action='' method='post'><button type="submit" name="gatau">Proses Hasil Akhir</button></form>
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
                foreach ($asdos as $a) :
                ?>
                    <tr>
                        <td><?= $z++ ?></td>
                        <td><?= $a['nama'] ?></td>
                        <?php
                        $wecapek = mysqli_query($c, "SELECT * FROM wp_w");
                        foreach ($wecapek as $w) :
                        ?>
                            <td><?= pow($a['c1'], $w['w1']) * pow($a['c2'], $w['w2']) * pow($a['c3'], $w['w3']) * pow($a['c4'], $w['w4']) * pow($a['c5'], $w['w5']) ?></td>


                            <?php
                            $cuki = pow($a['c1'], $w['w1']) * pow($a['c2'], $w['w2']) * pow($a['c3'], $w['w3']) * pow($a['c4'], $w['w4']) * pow($a['c5'], $w['w5']);
                            $pusing = array($cuki);
                            global $pusing, $cuki;
                            ?>


                        <!-- <?php endforeach; ?> -->



                    </tr>
                <!-- <?php endforeach; ?> -->



        </table>
    </div>
</div>
<!-- </div> -->

</body>

</html>