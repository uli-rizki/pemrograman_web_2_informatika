<?php 
// panggil file koneksi
require('koneksi.php');

$nim = $_POST['nim'];
$nama_lengkap = $_POST['nama_lengkap'];
$jenis_kelamin = $_POST['jenis_kelamin'];

// Query simpan ke database
$qry = "INSERT INTO mahasiswa (nim, nama_lengkap, jenis_kelamin)
        VALUES ('$nim', '$nama_lengkap', '$jenis_kelamin')";

// jalankan query menggunakan koneksi
$hasil = $koneksi->query($qry);
if($hasil) {
    echo "Data berhasil ditambahakan";
} else {
    echo "Gagal menambahkan data";
}

$koneksi->close();

?>