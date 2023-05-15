<?php
include_once '../../header.php';
require_once '../../../dbkoneksi.php';

$sql = "SELECT * FROM merk";
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
                <h4 class="page-title">Merk</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Merk
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
                        <div class="d-flex mb-4 gap-3">
                            <h5 class="card-title my-auto">Merk Datatable</h5>
                            <a class="btn btn-success text-light" href="form_merk.php" role="button">Tambah Data Baru</a>
                        </div>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered text-center">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Merk</th>
                                        <th>Alamat Toko Fisik</th>
                                        <th>Proses</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $nomor = 1;
                                    foreach ($rows as $row) {
                                    ?>
                                        <tr>
                                            <td><?= $nomor++ ?></td>
                                            <td><?= $row['nama'] ?></td>
                                            <td><?= $row['alamat_toko_fisik'] ?></td>                                          
                                            <td>
                                                <a class="btn btn-primary" href="detail_merk.php?id=<?= $row['id'] ?>">Detail</a>
                                                <a class="btn btn-warning" href="edit_merk.php?idedit=<?= $row['id'] ?>">Edit</a>
                                                <a class="btn btn-danger" href="delete_merk.php?iddel=<?= $row['id'] ?>" onclick="if(!confirm('Anda Yakin Hapus Data Merk <?= $row['id'] ?>?')) {return false}">Hapus</a>
                                            </td>
                                        </tr>

                                    <?php
                                    }
                                    ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Alamat Toko Fisik</th>
                                        <th>Proses</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once '../../footer.php' ?>