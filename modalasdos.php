<?php 
$c = mysqli_connect('localhost','root','','future');
$asdos = mysqli_query($c, "SELECT * FROM asdos");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- sweetalert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- core excel -->
    <?php include 'vendor/autoload.php' ?>
    <title>Asdos Dipa</title>
</head>
<body>
  <style>body{background-color: #678983;}</style>
<script>
  AOS.init();
</script>
<body onload="press()">

    <script>
        function press() {
            document.getElementById('p').click();
        }
    </script>
    <button id="p" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Inserting Data...</button>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Masukkan Data Mahasiswa</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                 
                                        <form action='' method="post">
                                            <input type="text" name="nama" class="form-control" placeholder="Nama Mahasiswa">
                                            <input type="text" name="c1" class="form-control" placeholder="Nilai Kemahiran">
                                           <select name="c2" class="form-control">
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                            <option value="C">C</option>
                                            <option value="D">D</option>
                                            <option value="E">E</option>
                                           </select>
                                            <input type="text" name="c3" class="form-control" placeholder="Nilai Tanggung Jawab">
                                            <input type="text" name="c4" class="form-control" placeholder="Nilai Komunikatif">
                                            <input type="text" name="c5" class="form-control" placeholder="Nilai Inisiatif">
                                            <button type="submit" name="insert" class="btn btn-sm btn-success">Insert Data</button>
                                            <?php
                                            if(isset($_POST['insert'])){
                                                $nama=$_POST['nama']; $c1=$_POST['c1']; $c2=$_POST['c2']; $c3=$_POST['c3']; $c4=$_POST['c4'];$c5=$_POST['c5'];
                                               
                                                //proses c2
                                                if($c2=='A'){
                                                    $ipk = 5;
                                                }
                                                elseif($c2=='B'){
                                                    $ipk = 4;
                                                }
                                                elseif($c2=='C'){
                                                    $ipk = 3;
                                                }
                                                elseif($c2=='D'){
                                                    $ipk = 2;
                                                }
                                                else{
                                                    $ipk = 1;
                                                }

                                                //proses c1
                                                if(($c1>85)&&($c1<101)){
                                                    $kem = 5;
                                                }
                                                elseif(($c1>75)&&($c1<86)){
                                                    $kem = 4;
                                                }
                                                elseif(($c1>65)&&($c1<76)){
                                                    $kem = 3;
                                                }
                                                elseif(($c1>50)&&($c1<66)){
                                                    $kem = 2;
                                                }
                                                else{
                                                    $kem = 1;
                                                }

                                                //proses c1
                                                if(($c3>85)&&($c3<101)){
                                                    $tj = 5;
                                                }
                                                elseif(($c3>75)&&($c3<86)){
                                                    $tj = 4;
                                                }
                                                elseif(($c3>65)&&($c3<76)){
                                                    $tj = 3;
                                                }
                                                elseif(($c3>50)&&($c3<66)){
                                                    $tj = 2;
                                                }
                                                else{
                                                    $tj = 1;
                                                }

                                                //proses c4
                                                if(($c4>85)&&($c4<101)){
                                                    $kom = 5;
                                                }
                                                elseif(($c4>75)&&($c4<86)){
                                                    $kom = 4;
                                                }
                                                elseif(($c4>65)&&($c4<76)){
                                                    $kom = 3;
                                                }
                                                elseif(($c4>50)&&($c4<66)){
                                                    $kom = 2;
                                                }
                                                else{
                                                    $kom = 1;
                                                }

                                                //proses c5
                                                if(($c5>85)&&($c5<101)){
                                                    $ins = 5;
                                                }
                                                elseif(($c5>75)&&($c5<86)){
                                                    $ins = 4;
                                                }
                                                elseif(($c5>65)&&($c5<76)){
                                                    $ins = 3;
                                                }
                                                elseif(($c5>50)&&($c5<66)){
                                                    $ins = 2;
                                                }
                                                else{
                                                    $ins = 1;
                                                }



                                                
                                                mysqli_query($c, "INSERT INTO asdos VALUES ('','$nama','$kem','$ipk','$tj','$kom','$ins')");
                                            }
                                            ?>
                                        </form>
                                  


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</body>