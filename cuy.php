<?php
ob_start();
global $c;
$c = mysqli_connect('localhost', 'root', '', 'asdos');
$datakandidat = mysqli_query($c, "SELECT * FROM kandidat");
// error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@600&family=Poppins:wght@500&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Shippori+Antique&display=swap" rel="stylesheet">
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
      background-color: #f3f3aa;
    }

    .font {
      font-family: 'Be Vietnam Pro', sans-serif;
      color: #1e3d59;
    }

    .element {
      background-color: #b64436;
    }

    .nama {
      font-family: 'Arial', sans-serif;
      font-size: 30px;
      font-weight: 600;
    }

    .ket {
      font-family: 'Arial', sans-serif;
      font-size: 20px;
    }


    .button-90 {
      color: #fff;

      padding: 15px 25px;
      border-radius: 100px;
      background-color: #b64436;
      background-image: radial-gradient(93% 87% at 87% 89%, rgba(0, 0, 0, 0.23) 0%, transparent 86.18%), radial-gradient(66% 87% at 26% 20%, rgba(255, 255, 255, 0.41) 0%, rgba(255, 255, 255, 0) 69.79%, rgba(255, 255, 255, 0) 100%);
      box-shadow: 2px 19px 31px rgba(0, 0, 0, 0.2);
      font-weight: bold;
      font-size: 26px;
      text-align: center;
      border: 0;
      user-select: none;
      -webkit-user-select: none;
      text-decoration: none;
      touch-action: manipulation;
      cursor: pointer;
      font-family: 'Be Vietnam Pro', sans-serif;
      margin-bottom: 20px;
    }

    .btn-edit {
      color: #fff;
      padding: 15px 25px;
      border-radius: 100px;
      background-color: #0F6292;
      background-image: radial-gradient(93% 87% at 87% 89%, rgba(0, 0, 0, 0.23) 0%, transparent 86.18%), radial-gradient(66% 87% at 26% 20%, rgba(255, 255, 255, 0.41) 0%, rgba(255, 255, 255, 0) 69.79%, rgba(255, 255, 255, 0) 100%);
      box-shadow: 2px 19px 31px rgba(0, 0, 0, 0.2);
      font-weight: 700;
      font-size: 16px;
      text-align: center;
      border: 0;
      text-decoration: none;
      user-select: none;
      -webkit-user-select: none;
      touch-action: manipulation;
      cursor: pointer;
      font-family: 'Be Vietnam Pro', sans-serif;
      margin-bottom: 10px;
    }

    .btn-hapus {
      color: #fff;
      padding: 15px 25px;
      border-radius: 100px;
      background-color: #C21010;
      background-image: radial-gradient(93% 87% at 87% 89%, rgba(0, 0, 0, 0.23) 0%, transparent 86.18%), radial-gradient(66% 87% at 26% 20%, rgba(255, 255, 255, 0.41) 0%, rgba(255, 255, 255, 0) 69.79%, rgba(255, 255, 255, 0) 100%);
      box-shadow: 2px 19px 31px rgba(0, 0, 0, 0.2);
      font-weight: 700;
      font-size: 16px;
      text-align: center;
      text-decoration: none;
      border: 0;
      user-select: none;
      -webkit-user-select: none;
      touch-action: manipulation;
      cursor: pointer;
      font-family: 'Be Vietnam Pro', sans-serif;
      margin-bottom: 10px;
    }

    .btn-back {
      color: #fff;
      padding: 15px 25px;
      /* border-radius: 100px; */
      /* border-radius: 93% 7% 8% 92% / 53% 51% 49% 47% ; */
      clip-path: polygon(6% 44%, 20% 30%, 46% 19%, 68% 15%, 82% 18%, 89% 26%, 84% 36%, 70% 40%, 55% 45%, 48% 57%, 58% 64%, 70% 68%, 86% 71%, 89% 81%, 85% 90%, 73% 94%, 60% 91%, 43% 88%, 24% 82%, 5% 69%, 1% 56%);
      background-color: #453C67;
      background-image: radial-gradient(93% 87% at 87% 89%, rgba(0, 0, 0, 0.23) 0%, transparent 86.18%), radial-gradient(66% 87% at 26% 20%, rgba(255, 255, 255, 0.41) 0%, rgba(255, 255, 255, 0) 69.79%, rgba(255, 255, 255, 0) 100%);
      box-shadow: 2px 19px 31px rgba(0, 0, 0, 0.2);
      font-weight: 700;
      font-size: 16px;
      text-align: center;
      text-decoration: none;
      border: 0;
      user-select: none;
      -webkit-user-select: none;
      touch-action: manipulation;
      cursor: pointer;
      font-family: 'Be Vietnam Pro', sans-serif;
      margin-bottom: 10px;
    }

    .divtable {
      color: black;

      /* padding: 15px 25px; */
      border-radius: 100px;
      background-color: #b64436;
      background-image: radial-gradient(93% 87% at 87% 89%, rgba(0, 0, 0, 0.23) 0%, transparent 86.18%), radial-gradient(66% 87% at 26% 20%, rgba(255, 255, 255, 0.41) 0%, rgba(255, 255, 255, 0) 69.79%, rgba(255, 255, 255, 0) 100%);
      box-shadow: 2px 19px 31px rgba(0, 0, 0, 0.2);
      font-weight: bold;
      font-size: 26px;
      text-align: center;
      border: 0;
      user-select: none;
      -webkit-user-select: none;
      text-decoration: none;
      touch-action: manipulation;
      cursor: pointer;
      font-family: 'Be Vietnam Pro', sans-serif;
      margin-bottom: 20px;
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
  //data taker saw
  $xlimit = 1;
  $xpages = isset($_GET['pages']) ? (int)$_GET['pages'] : 1;
  $xfirstpage = ($xpages > 1) ? ($xpages * $xlimit) - $xlimit : 0;
  $xprevious = $xpages - 1;
  $xnext = $xpages + 1;
  $datakandidat = mysqli_query($c, "SELECT * FROM kandidat");

  $xprow = mysqli_num_rows($datakandidat);
  $xtotalpages = ceil($xprow / $xlimit);
  $products = mysqli_query($c, "SELECT * FROM kandidat ORDER BY id ASC LIMIT $xfirstpage, $xlimit ");
  $xnumber = $xfirstpage + 1;


  //data taker wp
  $wlimit = 1;
  $wpages = isset($_GET['pages']) ? (int)$_GET['pages'] : 1;
  $wfirstpage = ($wpages > 1) ? ($wpages * $wlimit) - $wlimit : 0;
  $wprevious = $wpages - 1;
  $wnext = $wpages + 1;
  $datawp = mysqli_query($c, "SELECT * FROM kandidat");
  $wprow = mysqli_num_rows($datawp);
  $wtotalpages = ceil($wprow / $wlimit);
  $wpdata = mysqli_query($c, "SELECT * FROM kandidat ORDER BY id DESC LIMIT $wfirstpage, $wlimit ");
  $wnumber = $wfirstpage + 1;

  //data taker smart
  $slimit = 1;
  $spages = isset($_GET['pages']) ? (int)$_GET['pages'] : 1;
  $sfirstpage = ($spages > 1) ? ($spages * $slimit) - $slimit : 0;
  $sprevious = $spages - 1;
  $snext = $spages + 1;
  $datasmart = mysqli_query($c, "SELECT * FROM kandidatsmart");
  // $total_rows = mysqli_fetch_array($datasmart)[0];
  $sprow = mysqli_num_rows($datasmart);
  $stotalpages = ceil($sprow / $slimit);
  $smartdata = mysqli_query($c, "SELECT * FROM kandidatsmart ORDER BY keterangan LIMIT $sfirstpage, $slimit ");
  $snumber = $sfirstpage + 1;


  //   $limit = 1;
  //   $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
  //   $start_row = ($page - 1) * $rows_per_page;
  //   $sqlx = mysqli_query($c, "SELECT * FROM kandidatsmart LIMIT $start_row, $rows_per_page");
  // $sql = mysqli_query($c,"SELECT COUNT(*) FROM kandidatsmart");
  // $row = mysqli_fetch_array($sql);
  // $total_rows = $row[0];
  // $total_pages = ceil($total_rows / $rows_per_page);



  ?>