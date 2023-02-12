<?php
include 'cuy.php';
$Z = $_GET['z'];
    mysqli_query($c, "DELETE FROM kandidat WHERE id LIKE '$Z' ");
    $a='ds';
    if($a != ''){
        mysqli_query($c, "DELETE FROM kandidatwp WHERE id LIKE '$Z' ");
        $x="asda";
        if($x != ''){
            mysqli_query($c, "DELETE FROM kandidatsmart WHERE id LIKE '$Z' ");
        }
    }
    

header('Location:crudasdos.php');
?>