<?php include 'cuy.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prodi Area</title>
</head>

<body>
    <script>
        function press() {
            document.getElementById('p').click();
        }
    </script>
    <a class="btn-back" href="index.php"> < </a>
            <button id="p" class="button-90" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">+ Asdos</button>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                            <input type="text" name="nama" class="form-control"><span>


                                                <label for="customRange3" class="form-label">Profil &nbsp;</label>
                                                <textarea name="keterangan" class="form-control" cols="30" rows="10"></textarea>

                                                <label for="customRange3" class="form-label">IPK</label>
                                                <select name="ipk" class="form-control">
                                                    <option value="5">A</option>
                                                    <option value="4">B</option>
                                                    <option value="3">C</option>
                                                    <option value="2">D</option>
                                                    <option value="1">E</option>
                                                </select>



                                                <?php
                                                if (isset($_POST['gas'])) {
                                                    $picss = $_FILES['pp']['name'];
                                                    $storage = 'storage/';
                                                    move_uploaded_file($_FILES['pp']['tmp_name'], $storage . $picss);
                                                    $var2 = $_POST['nama'];
                                                    $var3 = $_POST['ipk'];
                                                    $var4 = $_POST['keterangan'];
                                                    mysqli_query($c, "INSERT INTO kandidat (id, pics, nama, keterangan, c2) VALUES ('','$picss','$var2','$var4','$var3')");
                                                    mysqli_query($c, "INSERT INTO kandidatwp (id, pics, nama, keterangan, c2) VALUES ('','$picss','$var2','$var4','$var3')");
                                                    mysqli_query($c, "INSERT INTO kandidatsmart (id, pics, nama, keterangan, c2) VALUES ('','$picss','$var2','$var4','$var3')");
                                                }
                                                ?>




                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" name="gas" class="btn btn-primary">Input</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <table class="table table-striped table-hover align-items-center justify-content-center text-center">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Nama Lengkap</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $z = 1;
                    foreach ($datakandidat as $d) { ?>
                        <tr>
                            <th><?= $z++ ?></th>
                            <td>
                                <?php if ($d['pics'] == '') { ?>
                                    <img style="width: 80px; height: 80px;" src="storage/img04.jpg" alt="">

                                <?php } else { ?>
                                    <img style="width: 80px; height: 80px;" src="storage/<?= $d['pics'] ?>" alt="">

                                <?php } ?>
                            </td>
                            <td><?= $d['nama'] ?></td>
                            <td><?= $d['keterangan'] ?></td>
                            <td>
                                <form method="post" action="">
                                    <a href="deleter.php?z=<?= $d['id'] ?>" class="btn-hapus">Delete</a>
                                    <a href="edit.php?z=<?=$d['id'] ?>" class="btn-edit">Edit</a>

                                </form>
                            </td>
                        </tr>

                    <?php } ?>

                </tbody>
            </table>


</body>

</html>