<?php 
/**
 * Programn menentukan kelulusan
 * deklarasi variabel nilai
 * jika nilai lebih dari 70 maka tampilan lulus
 * Jika kurang dari 70 maka tampilkan gagal
 */

$nilai = 65;

switch (true) {
    case ($nilai > 70):
        echo "Lulus";
        break;
    case ($nilai < 70 && $nilai > 60):
        echo "Gagal";
        break;
    default :
        echo "Gagal";
}

echo "<br/>Menggunakan IF ELSE<br/>";
if($nilai > 70) {
    echo "Lulus";
} else if($nilai < 70 && $nilai > 60) {
    echo "Remedial";
} else {
    echo "Gagal";
}

/**
 * Pengecekan login
 * Deklarasi username dan password
 * Jika username == admin dan password == admin
 * maka tampilkan halaman dashboard
 * jika salah tampilkan username atau password salah
 * set username = admin dan password = 123
 */
echo "<br><br><br>";

 $username = "admin";
 $password = "123";

 if($username == "admin" && $password == "admin") {
    echo "Halaman Dashboard";
 } else {
    echo "Username atau password salah";
 }

/**
 * Buatlah variabel harga_barang, diskon, nominal_diskon dan total_bayar
 * set value harga_barang = 1000000, diskon=0.3
 * jika harga_barang lebih dari 50000 maka dapat diskon
 * jika kurang dari 50000 tampilkan total bayar
 */
echo "<br><br><br>";
$harga_barang = 100000;
$diskon = 0.3;
$nominal_diskon = 0;
$total_bayar = 0;

if($harga_barang > 50000) {
    $nominal_diskon = $harga_barang * $diskon;
    $total_bayar = $harga_barang - $nominal_diskon;
} else {
    $total_bayar = $harga_barang;
}

echo "Harga Barang =  ".$harga_barang."<br>";
echo "Diskon =  ".$nominal_diskon."<br>";
echo "Total Bayar =  ".$total_bayar."<br>";

?>