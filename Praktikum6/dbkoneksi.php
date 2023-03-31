<?php
    // $host = "localhost";
    // $dbnama = "dbpos";
    // $usernama = "root";
    // $password = "";

    // try{
    //     $conn = new PDO("mysql:host=$host;dbnama=$dbnama", $usernama, $password);
    //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // } catch(PDOException $e) {
    //     echo "koneksi Gagal:", $e->getMessage;
    // }


    $host = 'localhost';
    $dbname = 'dbpos';
    $username = 'root';
    $password = '';

    try{
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "Koneksi Gagal: " . $e->getMessage();
    }

?>