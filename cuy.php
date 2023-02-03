<?php
$c = mysqli_connect('localhost', 'root', '', 'asdos');
$datakandidat = mysqli_query($c, "SELECT * FROM kandidat");
error_reporting(0);
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
</head>
<body>
  <style>
    body {
      background-color: #678983;
    }
    /* .containers{
      margin: 5px;
  padding-top: 10rem;
  padding-bottom: 10rem;
  display: grid;
  grid-template-columns: 70px 70px;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
  grid-template-rows: repeat(1, auto);
  grid-gap: 10px;
    } */
  </style>

  <?php 
//data taker  
  $xlimit = 1;
$xpages = isset($_GET['pages']) ? (int)$_GET['pages'] : 1;
$xfirstpage = ($xpages > 1) ? ($xpages * $xlimit) - $xlimit : 0;
$xprevious = $xpages - 1;
$xnext = $xpages + 1;
$datakandidat = mysqli_query($c, "SELECT * FROM kandidat");
$xprow = mysqli_num_rows($datakandidat);
$xtotalpages = ceil($xprow / $xlimit);
$products = mysqli_query($c, "SELECT * FROM kandidat LIMIT $xfirstpage, $xlimit");
$xnumber = $xfirstpage + 1;
  
  ?>