<?php 
    require_once '../../../dbkoneksi.php';

   $_nama = $_POST['nama'];
   $_ukuran = $_POST['ukuran'];
   $_warna = $_POST['warna'];
   $_stok = $_POST['stok'];
   $_harga = $_POST['harga'];
   $_preview = $_POST['preview'];
   $_merk_id = $_POST['merk_id'];

   $_proses = $_POST['proses'];

   // array data
   $ar_data[]=$_nama; // ? 2
   $ar_data[]=$_ukuran; // ? 2
   $ar_data[]=$_warna; // ? 2
   $ar_data[]=$_stok;
   $ar_data[]=$_harga;
   $ar_data[]=$_preview;
   $ar_data[]=$_merk_id; // ? 7

   if($_proses == "Simpan"){
    // data baru
    $sql = "INSERT INTO produk (id,nama,ukuran,warna,stok,harga,preview,merk_id) VALUES ('',?,?,?,?,?,?,?)";
   }
   else if($_proses == "Update"){
    $ar_data[]=$_POST['idedit'];// ? 8
    $sql = "UPDATE produk SET nama=?,ukuran=?,warna=?,stok=?,harga=?,preview=?,merk_id=? WHERE id=?";
   }
   if(isset($sql)){
    $st = $dbh->prepare($sql);
    $st->execute($ar_data);
   }

   header('location:index.php');
?>