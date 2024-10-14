<?php
// port default DB : 3306
// port default untuk web : 80
// SSH : 22
$server = "localhost";
$username = "uli"; // default : root
$password = "@Homedata123";
$nama_db = "pemrograman_web_2";

$koneksi = new mysqli($server, $username, $password, $nama_db);

if ($koneksi->connect_errno) {
    die("Koneksi Error".$koneksi->connect_error);
}

echo "Koneksi Database berhasil";
?>