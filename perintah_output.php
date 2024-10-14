<?php 
/**
 * Perintah output menggunakan echo
 * perintah echo untuk menampilkan string atau variabel
 * selain array
 * Perintah Output di php
 * echo
 * print
 * print_r -> digunakan untuk data array
 * var_dump
 */

//1. Menampilkan string
echo "Menampilkan string menggunakan echo<br>";
// menampilkan variabel menggunakan echo
$pesan = "Halo, selamat datang <button>Klik Saya</button>";
echo $pesan;
// menampilkan gabungan string dan variabel
// pemisah string dan variabel : dengan tanda titik;
echo "<br> Pesan saya ".$pesan;
// menggabungan tanpa pemisah
echo "<br>Tanpa pemisah $pesan";

echo "<br><br>";
// perintah print
print("Output menggunakan print");
print("<br> Penggabungan variabel : $pesan");
?>