<?php
error_reporting(0); 
$server = "localhost";
$username = "root";
$password = "";
$database = "db_rskartini";
// Koneksi dan memilih database di server
$koneksi = mysqli_connect($server,$username,$password) or die("Koneksi gagal");
mysqli_select_db($koneksi,$database) or die("Database tidak bisa dibuka");

// Menggunakan prepared statement untuk menghindari SQL injection
$stmt = mysqli_prepare($koneksi, "SELECT * FROM profil WHERE id_profil = ?");
mysqli_stmt_bind_param($stmt, 's', $id_profil);

// Query untuk kontak kami
$id_profil = '1';
mysqli_stmt_execute($stmt);
$kontak_kami = mysqli_stmt_get_result($stmt);
$k_k = mysqli_fetch_array($kontak_kami);

// Query untuk kadis
$id_profil = '2';
mysqli_stmt_execute($stmt);
$kadis = mysqli_stmt_get_result($stmt);
$tt = mysqli_fetch_array($kadis);

mysqli_stmt_close($stmt);
?>

