<?php

include 'cuy.php';
$z = $_GET['z'];
$updatean = mysqli_query($c, "SELECT * FROM kandidat WHERE id LIKE '$z' ");
$updates = mysqli_query($c, "SELECT * FROM user WHERE id LIKE '$z' ");
$bosen = mysqli_fetch_assoc($updates);
$p=$bosen['id'];
$x = mysqli_fetch_assoc($updatean);
$z = mysqli_fetch_assoc($updates);
if ($_GET['state'] != 'dosen'){ 
?>

    <script>
        window.onload = function() {
            document.getElementById("edit").click();
        };
    </script>

    <a id="edit" type="button" data-bs-toggle="modal" data-bs-target="#exampleModaledit">Updating Data...</a>
    <div class="spinner-border text-dark"></div>
    <div class="modal fade" id="exampleModaledit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Biodata Asdos</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action='' method='post' enctype="multipart/form-data">
                        <div class="col-md-12">
                            <div class="card-body">
                                <label for="customRange3" class="form-label">Foto</label>
                                <input type="file" name="pp" class="form-control"><span>


                                    <label for="customRange3" class="form-label">Nama</label>
                                    <input type="text" value="<?= $x['nama']; ?>" name="nama" class="form-control"><span>


                                        <label for="customRange3" class="form-label">Profil &nbsp;</label>
                                        <textarea name="keterangan" class="form-control" cols="30" rows="10"><?= $x['keterangan']; ?></textarea>

                                        <label for="customRange3" class="form-label">IPK</label>
                                        <select name="ipk" class="form-control">
                                            <option value="5">3.50-4.00</option>
                                            <option value="4">3.10-3.50</option>
                                            <option value="3">2.31-3.00</option>
                                            <option value="2">2.00-2.30</option>
                                            <option value="1">0-1.00</option>
                                        </select>



                                        <?php
                                        if (isset($_POST['gass'])) {
                                            $picss = $_FILES['pp']['name'];
                                            if ($picss != '') {
                                                $storage = 'storage/';
                                                move_uploaded_file($_FILES['pp']['tmp_name'], $storage . $picss);
                                                $var2 = $_POST['nama'];
                                                $var3 = $_POST['ipk'];
                                                $var4 = $_POST['keterangan'];
                                                mysqli_query($c, "UPDATE kandidat SET  pics = '$picss', nama='$var2', keterangan='$var4', c2='$var3' WHERE id LIKE '$z'");
                                                mysqli_query($c, "UPDATE kandidatwp SET  pics = '$picss', nama='$var2', keterangan='$var4', c2='$var3' WHERE id LIKE '$z'");
                                                mysqli_query($c, "UPDATE kandidatsmart SET  pics = '$picss', nama='$var2', keterangan='$var4', c2='$var3' WHERE id LIKE '$z'");
                                            } else {
                                                $var2 = $_POST['nama'];
                                                $var3 = $_POST['ipk'];
                                                $var4 = $_POST['keterangan'];
                                                mysqli_query($c, "UPDATE kandidat SET  nama='$var2', keterangan='$var4', c2='$var3' WHERE id LIKE '$z'");
                                                mysqli_query($c, "UPDATE kandidatwp SET  nama='$var2', keterangan='$var4', c2='$var3' WHERE id LIKE '$z'");
                                                mysqli_query($c, "UPDATE kandidatsmart SET  nama='$var2', keterangan='$var4', c2='$var3' WHERE id LIKE '$z'");
                                            }
                                            header('Location:crudasdos.php?state=editcheck');
                                        }
                                        // if (isset($_POST['gass'])) {
                                        //     header('Location:crudasdos.php');
                                        //     ob_flush();
                                        // }


                                        ?>




                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="gass" class="btn btn-primary">Input</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- kapunkap -->
<?php } else{  ?>


    <script>
        window.onload = function() {
            document.getElementById("edit").click();
        };
    </script>

    <a id="edit" type="button" data-bs-toggle="modal" data-bs-target="#exampleModaledit">Updating Data...</a>
    <div class="spinner-border text-dark"></div>
    <div class="modal fade" id="exampleModaledit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Biodata Dosen</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action='' method='post' enctype="multipart/form-data">
                        <div class="col-md-12">
                            <div class="card-body">
                                <label for="customRange3" class="form-label">Foto</label>
                                <input type="file" name="pp" class="form-control"><span>


                                    <label for="customRange3" class="form-label">Nama</label>
                                    <input type="text" placeholder="<?= $z['name']; ?>" name="nama" class="form-control"><span>
                                        <label for="customRange3" class="form-label">NIDN</label>
                                        <input type="text" name="nidn" placeholder="<?= $z['nidn'] ?>" class="form-control"><span>
                                            <label for="customRange3" class="form-label">PIN</label>
                                            <input type="text" name="pin" class="form-control" placeholder="<?= $z['pin'] ?>"><span>





                                                <?php
                                                if (isset($_POST['gass'])) {
                                                    $picss = $_FILES['pp']['name'];
                                                    if ($picss != '') {
                                                        $storage = 'storage/';
                                                        move_uploaded_file($_FILES['pp']['tmp_name'], $storage . $picss);
                                                        $var2 = $_POST['nama'];
                                                        $var3 = $_POST['nidn'];
                                                        $var4 = $_POST['pin'];
                                                        mysqli_query($c, "UPDATE user SET  pics = '$picss', name ='$var2', pin='$var4', nidn='$var3' WHERE id LIKE '$p'");
                                                    } else {
                                                        $var2 = $_POST['nama'];
                                                        $var3 = $_POST['nidn'];
                                                        $var4 = $_POST['pin'];
                                                        mysqli_query($c, "UPDATE user SET name ='$var2', pin='$var4', nidn='$var3' WHERE id LIKE '$p' ");
                                                    }
                                                    header('Location:cruddosen.php?state=editcheck');
                                                }
                                           
                                                ?>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="gass" class="btn btn-primary">Input</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php } ob_flush(); ?>