<?php
    require_once 'db_koneksi.php';

    $sqljenis = "SELECT * FROM kartu";
    $rowjenis = $conn->prepare($sqljenis);
    $rowjenis->execute();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Form Input Data</title>
</head>
<body>
	<a href="index.php">
        <h2>HOME</h2>
    </a>
	<form method="post" action="index.php">
		<label for="nomor">Nomer:</label>
		<input type="text" id="nomor" name="nomor"><br><br>
		
		<label for="nama">Nama:</label>
		<input type="text" id="nama" name="nama"><br><br>

        <label for="kota">Kota:</label>
		<input type="text" id="kota" name="kota"><br><br>

        <label for="kontak">Kontak:</label>
		<input type="text" id="kontak" name="kontak"><br><br>
		
		<input type="submit" value="Simpan" name="submit">
	</form>
</body>
</html>