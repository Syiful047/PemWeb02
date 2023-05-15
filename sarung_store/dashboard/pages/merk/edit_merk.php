<?php
include_once '../../header.php';
require_once '../../../dbkoneksi.php';

$_idedit = $_GET['idedit'];
if(!empty($_idedit)){
    // edit
    $sql = "SELECT * FROM merk WHERE id=?";
    $st = $dbh->prepare($sql);
    $st->execute([$_idedit]);
    $row = $st->fetch();
}else{
    // new data
    $row = [];
}
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
                <h4 class="page-title">Form Edit Data</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Form Edit Data
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
                        <h2 class="mb-4">Form Edit Data</h2>
                        <form method="POST" action="proses_merk.php" class="row">
                            <div class="col-lg-6 mb-3">
                                <label class="form-label">Nama Merk</label>
                                <input type="text" class="form-control" name='nama' value="<?= $row['nama']; ?>" required>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label class="form-label">Alamat</label>
                                <input type="text" class="form-control" name='alamat_toko_fisik' value="<?= $row['alamat_toko_fisik']; ?>" required>
                            </div>
                            <div class="col-12 mt-4">
                                <input type="hidden" name="idedit" value="<?= $_idedit; ?>">
                                <button type="submit" class="btn btn-primary" name="proses" value="Update">Ubah Data
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once '../../footer.php' ?>