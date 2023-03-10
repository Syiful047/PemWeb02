<?php

    // jika belum mengisi form maka tidak dapat pergi kehalaman hasil
    if (!isset($_POST["submit"])){
        header("location: index.php");
        exit;
    }


    // menyimpan inputan user kedalam variabel
    $nama_siswa = $_POST['nama_siswa'];
    $mata_kuliah = $_POST['mata_kuliah'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_uas = $_POST['nilai_uas'];
    $nilai_tugas = $_POST['nilai_tugas'];


    // nilai akhir
    $total_nilai = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;


    // mengambil sekaligus menjalankan skrip yang ada di libary fungsi
    require_once "fungsi.php";
    $nilai = $total_nilai;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<table  class="table text-center">
  <thead  class="table-dark">
    <tr>
      <th scope="col">NO</th>
      <th scope="col">NAMA</th>
      <th scope="col">MATKUL</th>
      <th scope="col">UTS</th>
      <th scope="col">UAS</th>
      <th scope="col">TUGAS</th>
      <th scope="col">NILAI AKHIR</th>
      <th scope="col">GREDE</th>
      <th scope="col">KETERANGAN</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>1</td>
      <td><?= $nama_siswa ?></td>
      <td><?= $mata_kuliah ?></td>
      <td><?= $nilai_uts ?></td>
      <td><?= $nilai_uas ?></td>
      <td><?= $nilai_tugas ?></td>
      <td><?= number_format($total_nilai) ?></td>
      <td><?= grade($nilai) ?></td>
      <td><?= kelulusan($nilai) ?></td>
    </tr>
  </tbody>
</table>
</body>
</html>