<?php
include_once '../../header.php';
require_once '../../../dbkoneksi.php';

$sql = "SELECT * FROM pesanan";
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
                        <form method="POST" action="proses_pesanan.php" class="row">
                            <div class="col-lg-6 mb-3">
                                <label class="form-label">Tanggal</label>
                                <input type="date" class="form-control" name='tanggal' required>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label class="form-label">Produk</label>
                                <?php
                                $sqlpro = "SELECT * FROM produk";
                                $rspro = $dbh->query($sqlpro);
                                ?>
                                <select class="form-select" name='produk_id'>
                                    <option selected>-- Pilih Produk --</option>
                                        <?php
                                            foreach ($rspro as $rowpro) {
                                        ?>
                                    <option value="<?= $rowpro['id'] ?>"><?= $rowpro['nama'] ?></option>
                                    
                                    
                                        <?php
                                            }
                                        ?>
                                </select>
                                
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label class="form-label">Qty</label>
                                <input type="number" class="form-control" name='quantity' required>
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