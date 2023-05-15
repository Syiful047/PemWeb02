<?php
include_once '../../header.php';
require_once '../../../dbkoneksi.php';

$sql = "SELECT * FROM produk";
$rows = $dbh->query($sql);
?>
<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Form Data Baru</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Form Data Baru
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h2 class="mb-4">Form Data Baru</h2>
                        <form method="POST" action="proses_produk.php" class="row">
                            <div class="col-lg-6 mb-3">
                                <label class="form-label">Nama Produk</label>
                                <input type="text" class="form-control" name='nama' required>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label class="form-label">Ukuran</label>
                                <input type="text" class="form-control" name='ukuran' required>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label class="form-label">Warna</label>
                                <input type="text" class="form-control" name='warna' required>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label class="form-label">Stok</label>
                                <input type="number" class="form-control" name='stok' required>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label class="form-label">Harga</label>
                                <input type="number" class="form-control" name='harga' required>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label class="form-label">Merk</label>
                                <?php
                                $sqljenis = "SELECT * FROM merk";
                                $rsjenis = $dbh->query($sqljenis);
                                ?>
                                <select class="form-select" name='merk_id'>
                                    <option selected>-- Pilih Merk --</option>
                                        <?php
                                            foreach ($rsjenis as $rowjenis) {
                                        ?>
                                    <option value="<?= $rowjenis['id'] ?>"><?= $rowjenis['nama'] ?></option>
                                        <?php
                                            }
                                        ?>
                                </select>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label class="form-label">Preview</label>
                                <input type="text" class="form-control" name='preview' required>
                            </div>
                            <div class="col-12 mt-4">
                                <button type="submit" class="btn btn-primary" name="proses" value="Simpan">Tambahkan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once '../../footer.php' ?>