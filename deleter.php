<?php
$c = mysqli_connect('localhost','root','','future');
$Z = $_GET['z'];
mysqli_query($c, "DELETE FROM asdos WHERE id LIKE '$Z' ");
header('Location:index.php');
?>