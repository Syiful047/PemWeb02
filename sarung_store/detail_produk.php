<?php
require_once 'dbkoneksi.php';

$_id = $_GET['id'];
$sql = "SELECT a.*,b.nama as merk FROM produk a
    INNER JOIN merk b ON a.merk_id=b.id WHERE a.id=?";
$st = $dbh->prepare($sql);
$st->execute([$_id]);
$row = $st->fetch();

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Sixteen Clothing HTML Template</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header style="position: static !important; margin-bottom:50px">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand d-flex" href="index.php">
                    <!-- Logo icon -->
                    <b class="logo-icon ps-2">
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <img src="assets/images/logo-icon.png" alt="homepage" class="light-logo" width="25" />
                    </b>
                    <!--End Logo icon -->
                    <!-- Logo text -->
                    <span class="ms-2">
                        <!-- dark Logo text -->
                        <h4 class="my-auto text-light ml-3">Sarung Store</h4>
                    </span>
                    <!-- Logo icon -->
                    <!-- <b class="logo-icon"> -->
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                    <!-- Dark Logo icon -->
                    <!-- <img src="assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

                    <!-- </b> -->
                    <!--End Logo icon -->
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.html">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Dashboard</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="<?= $row['preview'] ?>" alt="..." /></div>
            <div class="col-md-6">
                <div class="small mb-1">id: <?= $row['id'] ?></div>
                <h1 class="display-5 fw-bolder"><?= $row['nama'] ?></h1>
                <div class="fs-5 mb-5">
                    <span><?= "Rp " . number_format($row['harga']) ?></span>
                </div>
                <p class="lead">Merk : <?= $row['merk'] ?></p>
                <form method="POST" action="dashboard/pages/pesanan/proses_pesanan.php">
                    <div class="d-flex mt-5">
                        <input type="hidden" name="tanggal" value="<?= date("Y-m-d") ?>">
                        <input type="hidden" name="produk_id" value="<?= $row['id'] ?>">
                        <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" name='quantity' />
                        <button class="btn btn-success flex-shrink-0 ml-2" type="submit" name="proses" value="Simpan">
                            <i class="bi-cart-fill me-1"></i>
                            Pesan Sekarang
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-content">
                        <p>Copyright &copy; 2020 Sixteen Clothing Co., Ltd.

                            - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language="text/Javascript">
        cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
        function clearField(t) { //declaring the array outside of the
            if (!cleared[t.id]) { // function makes it static and global
                cleared[t.id] = 1; // you could use true and false, but that's more typing
                t.value = ''; // with more chance of typos
                t.style.color = '#fff';
            }
        }
    </script>


</body>

</html>