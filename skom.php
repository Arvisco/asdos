<?php include 'cuy.php'; ?>
<script>
    $(document).ready(function() {
        $('#myButton').trigger('click');
    });
</script>

<button id="myButton" type="button" style="display: none;" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
</button>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Authenticating User...</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center rounded-5 rounded">
                <h1>Siapa Kamu?</h1>
                <div class="container mt-5">
                    <div class="row" data-aos="fade-up" data-aos-duration="3000">
                        <button data-bs-toggle="modal" data-bs-target="#logindosen" class="button-90 font">Dosen</button>
                    </div>

                    <div class="row" data-aos="fade-up" data-aos-duration="3000">
                        <a href="configure.php" class="button-90 font">Mahasiswa</a>
                    </div>
                    <div class="row" data-aos="fade-up" data-aos-duration="3000">
                    <button data-bs-toggle="modal" data-bs-target="#su" class="button-90 font">Super Admin</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php ?>

<div class="modal fade" id="logindosen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Authenticating Progress</h1>

            </div>
            <div class="modal-body text-center">
                <h1>Login Dosen</h1>
                <div class="col">
                    <form method='post'>
                        <input class="form-control mb-2" type="text" name="nidn" placeholder="NIDN">
                        <input class="form-control mb-2" type="text" name="pin" placeholder="Pin">
                        <button type="submit" name="cuki" class="button-90">Login</button>
                        <?php
                        if (isset($_POST['cuki'])) {
                            $var1 = $_POST['nidn'];
                            $var2 = $_POST['pin'];
                            $revisi = mysqli_query($c, "SELECT * FROM user WHERE nidn LIKE '$var1' AND pin LIKE '$var2' ");
                            $valid = mysqli_num_rows($revisi);
                            if ($valid > 0) {
                                $stress = mysqli_fetch_assoc($revisi);
                                $_SESSION['who'] = 'dosen';
                                header('Location:penilaian.php');
                            } else {
                                echo "<script>Swal.fire('Account not found')</script>";
                               
                            }
                        }

                        ?>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="modal fade" id="su" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Authenticating Progress</h1>

            </div>
            <div class="modal-body text-center">
                <h1>Restricted Area</h1>
                <div class="col">
                    <form method='post'>
                        <input class="form-control mb-2" type="password" name="pword" placeholder="Password">
                        
                        <button type="submit" name="cuki" class="button-90">Login</button>
                        <?php
                        if (isset($_POST['cuki'])) {
                            $desperate = $_POST['pword'];
                            if ($desperate == 'undipa071994') {
                                $_SESSION['who'] = 'gosi';
                                header('Location:index.php');
                                # code...
                            }
                        }

                        ?>

                    </form>
                </div>
            </div>

        </div>
    </div>
</div>





</body>

</html>