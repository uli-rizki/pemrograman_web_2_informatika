<?php
/**
 * Deklarasi data array
 * Set value data array
 * Data array 1 dimensi
 * Data array 2 dimensi
 * Key dan value array 2 dimensi (Data mahasiswa)
 */

// Deklarasi array / pembuatan dara array
$nama_hari = ['Senin', 'Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu'];
// menampilkan data array
print_r($nama_hari);
// menampilkan data berdasarkan index 
// index merupakan urutan data dalam array
echo "<br />".$nama_hari[2];

$data_nama = [];
// menambahkan data berdasarkan index
$data_nama[0] = "Fani";
$data_nama[1] = "Farhan";

echo "<br>";
print_r($data_nama);

// array 1 dimensi
$nilai = [80, 90, 75, 80];
// array 2 dimensi
$data_nilai = [
	[80, 70, 80],
	[75, 70, 80],
	[60, 70, 80],
];
echo "<br>";
print_r($data_nilai);

// Data array menggunakan key dan value
$data_mahasiswa = [
	100 => "Deni",
	101 => "Akbar",
	102 => "Dela"
];
echo "<br>";
print_r($data_mahasiswa);
// memanggil data array menggunakan key
echo "<br>". $data_mahasiswa[100];