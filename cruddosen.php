<?php include 'cuy.php'; ob_start();

if($_GET['state']=='editcheck'){
   echo "<script> 
   Swal.fire(
        'Operation Success',
        'Data berhasil diedit',
        'success') </script> ";
      
}elseif ($_GET['state']=='addcheck') {
    echo " <script> Swal.fire(
        'Operation Success',
        'Data berhasil tersimpan',
        'success') </script>  ";
} elseif ($_GET['state']=='delcheck'){
    echo " <script> Swal.fire(
        'Operation Success',
        'Data berhasil dihapus',
        'success') </script>  ";
}else{}

?>

<script>
  $(document).ready(function() {
    $('#deleteButton').click(function() {
      Swal.fire({
        title: 'Are you sure?',
        text: 'You will not be able to recover this record!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
      }).then((result) => {
        if (result.isConfirmed) {
          // User clicked the "Yes" button, so delete the record
          $.ajax({
            url: 'deletes.php',
            data: {id: 123},
            type: 'post',
            success: function(response) {
              // Handle the response from the server
              alert('Record deleted!');
            }
          });
        }
      });
    });
  });
</script>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen Area</title>
</head>

<body>
    <!-- <script>
        function press() {
            document.getElementById('p').click();
        }
    </script> -->
    <a class="btn-back" href="index.php"><i class="fa-solid fa-chevron-left"></i></a>
            <button id="p" class="button-90" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">+ Dosen</button>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                            <input type="text" name="nama" class="form-control"><span>
                                            <label for="customRange3" class="form-label">NIDN</label>
                                            <input type="text" name="nidn" class="form-control"><span>
                                            <label for="customRange3" class="form-label">PIN</label>
                                            <input type="text" name="pin" class="form-control"><span>


                                               


                                                <?php
                                                if (isset($_POST['gas'])) {
                                                    $picss = $_FILES['pp']['name'];
                                                    if ($picss != '') {
                                                  
                                                    
                                                    $storage = 'storage/';
                                                    move_uploaded_file($_FILES['pp']['tmp_name'], $storage . $picss);
                                                    $var2 = $_POST['nama'];
                                                    $var3 = $_POST['nidn'];
                                                    $var4 = $_POST['pin'];
                                                    mysqli_query($c, "INSERT INTO user (id, pics, nidn, name, pin) VALUES ('','$picss','$var3','$var2','$var4')");
                                                   
                                                header('Location:cruddosen.php?state=addcheck');
                                            }
                                            else{
                                                    $var2 = $_POST['nama'];
                                                    $var3 = $_POST['nidn'];
                                                    $var4 = $_POST['pin'];
                                                    mysqli_query($c, "INSERT INTO user (id, nidn, name, pin) VALUES ('','$var3','$var2','$var4')");
                                                   
                                                header('Location:cruddosen.php?state=addcheck');

                                                }
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



            <table class="table table-striped table-hover align-items-center table-responsive justify-content-center text-center">
                <thead>
                    <tr>
                        <th scope="col" class="col-1">No</th>
                        <th scope="col" class="col-1">Foto</th>
                        <th scope="col" class="col-2">Nama Lengkap</th>
                        <th scope="col" class="col-4">NIDN</th>
                        <th scope="col" class="col-2">Pin</th>
                        <th scope="col" class="col-6"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $z = 1;
                    foreach ($datadosen as $d) : ?>
                        <tr>
                            <th><?= $z++ ?></th>
                            <td>
                                <?php if ($d['pics'] == '') { ?>
                                    <img style="width: 70px; height: 80px;" src="storage/img04.jpg" alt="">

                                <?php } else { ?>
                                    <img style="width: 65px; height: 90px;" src="storage/<?= $d['pics'] ?>" alt="">

                                <?php } ?>
                            </td>
                            <td><?= $d['name'] ?></td>
                            <td><?= $d['nidn'] ?></td>
                            <td><?= $d['pin'] ?></td>
                            <td class="res">
                                <form method="post" action="" enctype="multipart/form-data">
                                    <a href="edit.php?z=<?= $d['id'] ?>&&state=dosen" class="btn-edit">Edit</a>
                                    <a href="deleter.php?z=<?= $d['id'] ?>&&state=dosen" class="btn-hapus">Delete</a>
                                    <!-- <button id="deleteButton" class="btn-hapus">Delete</button> -->


                                </form>
                            </td>
                        </tr>

                    <?php endforeach; ob_flush(); ?>

                </tbody>
            </table>


</body>

</html>