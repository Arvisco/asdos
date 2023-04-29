<?php
ob_start();
session_start();
global $c;

$c = mysqli_connect('localhost', 'root', 'root', 'asdos');
$datakandidat = mysqli_query($c, "SELECT * FROM kandidat");
$datadosen = mysqli_query($c, "SELECT * FROM user");
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="shortcut icon" type="image/png" href="storage/icon.png">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.7.1/sweetalert2.min.js" integrity="sha512-vCI1Ba/Ob39YYPiWruLs4uHSA3QzxgHBcJNfFMRMJr832nT/2FBrwmMGQMwlD6Z/rAIIwZFX8vJJWDj7odXMaw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.7.1/sweetalert2.css" integrity="sha512-JzSVRb7c802/njMbV97pjo1wuJAE/6v9CvthGTDxiaZij/TFpPQmQPTcdXyUVucsvLtJBT6YwRb5LhVxX3pQHQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.7.1/sweetalert2.all.min.js" integrity="sha512-KfbhdnXs2iEeelTjRJ+QWO9veR3rm6BocSoNoZ4bpPIZCsE1ysIRHwV80yazSHKmX99DM0nzjoCZjsjNDE628w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@600&family=Poppins:wght@500&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

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
<script>
  AOS.init();
</script>
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
      font-size: 15px;
      /* white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis; */
    }

    .ket:hover {
      overflow: visible;
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
      margin-bottom: 10px;
      margin-top: 10px;
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
      margin-top: 100%;
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
      border-radius: 89% 11% 13% 87% / 47% 47% 53% 53%;
      /* border-radius: 93% 7% 8% 92% / 53% 51% 49% 47% ; */
      z-index: 2;

      background-color: #453C67;
      background-image: radial-gradient(93% 87% at 87% 89%, rgba(0, 0, 0, 0.23) 0%, transparent 86.18%), radial-gradient(66% 87% at 26% 20%, rgba(255, 255, 255, 0.41) 0%, rgba(255, 255, 255, 0) 69.79%, rgba(255, 255, 255, 0) 100%);
      box-shadow: 2px 19px 31px rgba(0, 0, 0, 0.2);
      font-weight: 700;
      font-size: 16px;
      text-align: center;
      text-decoration: none;
      border: 0;
      margin-left: 1%;
      margin-right: 1%;
      user-select: none;
      -webkit-user-select: none;
      touch-action: manipulation;
      cursor: pointer;
      font-family: 'Be Vietnam Pro', sans-serif;
      margin-bottom: 10px;
    }

    .btn-reset {
      color: #fff;
      padding: 15px 25px;
      border-radius: 26% 25% 39% 41% / 18% 16% 63% 66%;
      /* border-radius: 93% 7% 8% 92% / 53% 51% 49% 47% ; */
      z-index: 2;
      background-color: red;
      background-image: radial-gradient(93% 87% at 87% 89%, rgba(0, 0, 0, 0.23) 0%, transparent 86.18%), radial-gradient(66% 87% at 26% 20%, rgba(255, 255, 255, 0.41) 0%, rgba(255, 255, 255, 0) 69.79%, rgba(255, 255, 255, 0) 100%);
      box-shadow: 2px 19px 31px rgba(0, 0, 0, 0.2);
      font-weight: 700;
      font-size: 16px;
      text-align: center;
      text-decoration: none;
      border: 0;
      margin-left: 1%;
      margin-right: 1%;
      user-select: none;
      -webkit-user-select: none;
      touch-action: manipulation;
      cursor: pointer;
      font-family: 'Be Vietnam Pro', sans-serif;
      margin-bottom: 12px;
      margin-top: 5px;
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


    @media (max-width: 700px) {
      .res {
        display: grid;
        /* grid-template-columns: 1fr 1fr 1fr; */
        grid-template-rows: 50% 50%;
        /* grid-template-columns: repeat(1, auto); */
        grid-template-rows: repeat(1, auto);
        grid-gap: 50%;
      }
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
  $products = mysqli_query($c, "SELECT * FROM kandidat ORDER BY nim ASC LIMIT $xfirstpage, $xlimit ");
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

  // //data taker smart
  // $slimit = 1;
  // $spages = isset($_GET['pages']) ? (int)$_GET['pages'] : 1;
  // $sfirstpage = ($spages > 1) ? ($spages * $slimit) - $slimit : 0;
  // $sprevious = $spages - 1;
  // $snext = $spages + 1;
  // $datasmart = mysqli_query($c, "SELECT * FROM kandidatsmart");
  // // $total_rows = mysqli_fetch_array($datasmart)[0];
  // $sprow = mysqli_num_rows($datasmart);
  // $stotalpages = ceil($sprow / $slimit);
  // if ($_GET['met'] == 'scheffe') {
  //   $smartdata = mysqli_query($c, "SELECT * FROM kandidatsmart WHERE z LIKE '0' ORDER BY pics DESC LIMIT $sfirstpage, $slimit ");
  // } else {
  //   $smartdata = mysqli_query($c, "SELECT * FROM kandidatsmart WHERE x LIKE '0' ORDER BY pics ASC LIMIT $sfirstpage, $slimit ");
  // }
  // $snumber = $sfirstpage + 1;




  // data hasil taker
  $sawnormal = mysqli_query($c, "SELECT * FROM hasilsawnormal ORDER BY hasil DESC");
  $wpnormal = mysqli_query($c, "SELECT * FROM hasilwpnormal ORDER BY hasil DESC");
  $smartnormal = mysqli_query($c, "SELECT * FROM hasilsmartnormal ORDER BY hasil ASC");
  $sawscheffe = mysqli_query($c, "SELECT * FROM hasilsawscheffe ORDER BY hasil DESC");
  $wpscheffe = mysqli_query($c, "SELECT * FROM hasilwpscheffe ORDER BY hasil DESC");
  $smartscheffe = mysqli_query($c, "SELECT * FROM hasilsmartscheffe ORDER BY hasil DESC");

  //   $limit = 1;
  //   $page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
  //   $start_row = ($page - 1) * $rows_per_page;
  //   $sqlx = mysqli_query($c, "SELECT * FROM kandidatsmart LIMIT $start_row, $rows_per_page");
  // $sql = mysqli_query($c,"SELECT COUNT(*) FROM kandidatsmart");
  // $row = mysqli_fetch_array($sql);
  // $total_rows = $row[0];
  // $total_pages = ceil($total_rows / $rows_per_page);



  ?>