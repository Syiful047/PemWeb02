<?php
include_once '../../header.php';
require_once '../../../dbkoneksi.php';

$_id = $_GET['id'];
$sql = "SELECT a.*,b.nama as produk FROM pesanan a
    INNER JOIN produk b ON a.produk_id=b.id WHERE a.id=?";
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
                    <div class="col-lg-12">
                        <table class="table table-striped">
                            <tr>
                                <td>ID</td>
                                <td><?= $row['id'] ?></td>
                            </tr>
                            <tr>
                                <td>Tanggal</td>
                                <td><?= $row['tanggal'] ?></td>
                            </tr>
                            <tr>
                                <td>Produk</td>
                                <td><?= $row['produk'] ?></td>
                            </tr>
                            <tr>
                                <td>Qty</td>
                                <td><?= $row['quantity'] ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include_once '../../footer.php'; ?>