<?php
$nama_siswa = $_POST['nama_siswa'];
$mata_kuliah = $_POST['mata_kuliah'];
$nilai_uts = $_POST['nilai_uts'];
$nilai_uas = $_POST['nilai_uas'];
$nilai_tugas = $_POST['nilai_tugas'];
$total_nilai = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;

if ($total_nilai >= 0 && $total_nilai <= 49) {
    $grade='E'; $keterangan='Nangis';
} else if ($total_nilai >= 50 && $total_nilai <= 59) {
    $grade='D'; $keterangan='mau sedih';
} else if ($total_nilai >= 60 && $total_nilai <= 69) {
    $grade='C'; $keterangan='usah lagi';
} else if ($total_nilai >= 70 && $total_nilai <= 79) {
    $grade='B'; $keterangan='Lumayan';
} else if ($total_nilai >= 80 && $total_nilai <= 100) {
    $grade='A'; $keterangan='Mantap kali';
} else{
    $grade='no' ; $keterangan='Asal';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NILAI MAHASISWA</title>
    <link rel="shortcut icon" type="image/icon" href="..//..//logoku.jpg"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col">
            <table class="table table-bordered text-uppercase">
            <tr class="table-success">
                <th>nama</th>
                <th>mata kuliah</th>
                <th>nilai tugas</th>
                <th>nilai uts</th>
                <th>nilai uas</th>
                <th>total nilai</th>
                <th>grade</th>
                <th>keteranagan</th>
            </tr>
            <tr>
                <td><?= $nama_siswa; ?></td>
                <td><?= $mata_kuliah; ?></td>
                <td><?= $nilai_uts; ?></td>
                <td><?= $nilai_uas; ?></td>
                <td><?= $nilai_tugas; ?></td>
                <td><?= $total_nilai; ?></td>
                <td><?= $grade;?></td>
                <td><?= $keterangan; ?></td>
            </tr>
        </table>
            </div>
        </div>
    </div>
</body>
</html>

