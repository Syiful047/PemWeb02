<?php
include_once '../../header.php';
require_once '../../../dbkoneksi.php';

$_idedit = $_GET['idedit'];
if(!empty($_idedit)){
    // edit
    $sql = "SELECT * FROM produk WHERE id=?";
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
                        <form method="POST" action="proses_produk.php" class="row">
                            <div class="col-lg-6 mb-3">
                                <label class="form-label">Nama Produk</label>
                                <input type="text" class="form-control" name='nama' value="<?= $row['nama']; ?>" required>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label class="form-label">Ukuran</label>
                                <input type="text" class="form-control" name='ukuran' value="<?= $row['ukuran']; ?>" required>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label class="form-label">Warna</label>
                                <input type="text" class="form-control" name='warna' value="<?= $row['warna']; ?>" required>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label class="form-label">Stok</label>
                                <input type="number" class="form-control" name='stok' value="<?= $row['stok']; ?>" required>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label class="form-label">Harga</label>
                                <input type="number" class="form-control" name='harga' value="<?= $row['harga']; ?>" required>
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
                                        $selected_merk = ($rowjenis['id'] == $row['merk_id']) ? 'selected' : '';
                                    ?>
                                        <option value="<?= $rowjenis['id'] ?>" <?= $selected_merk ?>><?= $rowjenis['nama'] ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-lg-6 mb-3">
                                <label class="form-label">Preview</label>
                                <input type="text" class="form-control" name='preview' value="<?= $row['preview']; ?>" required>
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