<?php
include_once '../../header.php';
require_once '../../../dbkoneksi.php';

$_id = $_GET['id'];
$sql = "SELECT a.*,b.nama as merk FROM produk a
    INNER JOIN merk b ON a.merk_id=b.id WHERE a.id=?";
$st = $dbh->prepare($sql);
$st->execute([$_id]);
$row = $st->fetch();
?>

<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Detail Produk</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Detail Produk
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row mt-3">
            <div class="col-12">
                <div class="row">
                    <p class="mb-0">ID <?= $row['id'] ?></p>
                    <h2 class="mb-3"><?= $row['nama'] ?></h2>
                    <div class="col-lg-4">
                        <img src="<?= $row['preview'] ?>" alt="" class="img-fluid rounded" height="100">
                    </div>
                    <div class="col-lg-8">
                        <table class="table table-striped">
                            <tr>
                                <td>Ukuran</td>
                                <td><?= $row['ukuran'] ?></td>
                            </tr>
                            <tr>
                                <td>Warna</td>
                                <td><?= $row['warna'] ?></td>
                            </tr>
                            <tr>
                                <td>Stok</td>
                                <td><?= $row['stok'] ?></td>
                            </tr>
                            <tr>
                                <td>Harga</td>
                                <td><?= "Rp " . number_format($row['harga']) ?></td>
                            </tr>
                            <tr>
                                <td>Merk</td>
                                <td><?= $row['merk'] ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once '../../footer.php'; ?>