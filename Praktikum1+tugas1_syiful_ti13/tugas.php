<?php

    $mhs1 = ['id'=>1 , 'nim'=>0110 , 'uts'=>80 , 'uas'=>90 , 'tugas'=>95];
    $mhs2 = ['id'=>2 , 'nim'=>01102 ,'uts'=>85 , 'uas'=>95 , 'tugas'=>100];
    $mhs3 = ['id'=>3 , 'nim'=>01103 , 'uts'=>87 , 'uas'=>98 , 'tugas'=>100];
    $mhs4 = ['id'=>4 , 'nim'=>01104 , 'uts'=>89 , 'uas'=>99 , 'tugas'=>100];

    $ar_nilai = [$mhs1, $mhs2, $mhs3, $mhs4];

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>

  <h1>Data Mahasiswa</h1>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">NIM</th>
      <th scope="col">UTS</th>
      <th scope="col">UAS</th>
      <th scope="col">TUGAS</th>
      <th scope="col">NILAI AKHIR</th>
    </tr>
  </thead>
  <tbody>
    <?php

        $nomer = 1;
        foreach($ar_nilai as $mhs){
            $nilai_akhir = ($mhs['uts']+$mhs['uas']+$mhs['tugas']) /3;
           


    ?>

        <tr>
            <td> <?= $nomer ?> </td>
            <td> <?= $mhs['nim'] ?> </td>
            <td> <?= $mhs['uts'] ?> </td>
            <td> <?= $mhs['uas'] ?> </td>
            <td> <?= $mhs['tugas'] ?> </td>
            <td> <?= number_format($nilai_akhir,2 ,',',',') ?> </td>
        </tr>

    <?php
        $nomer++;
        }
    ?>
  </tbody>
</table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>