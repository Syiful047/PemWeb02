<?php 
    require_once '../../../dbkoneksi.php';

   $_nama = $_POST['nama'];
   $_alamat = $_POST['alamat_toko_fisik'];

   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_nama; // ? 2
   $ar_data[]=$_alamat;

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO merk (id,nama,alamat_toko_fisik) VALUES ('',?,?)";
   }
   else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE merk SET nama=?,alamat_toko_fisik=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:index.php');
?>