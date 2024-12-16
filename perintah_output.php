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

// Tampilkan menggunakan echo untuk teks
$nama_lengkap = "Fara Andrea";
$umur = 20;

if(isset($_GET['harga_barang'])) {
    $harga_barang = $_GET['harga_barang'];
} else {
    $harga_barang = 0;
}
$diskon = 5000;
$total = $harga_barang-$diskon;
?>

<html>
    <head>
        <title>Perintah Output</title>
    </head>
    <body>
        <h1>Halo Nama Saya :  <?php echo $nama_lengkap ?></h1>
        <h2>Umur Saya : <?php echo $umur ?> Tahun</h1>
        <br/>
        <br/>
        <form method="GET">
            <h3>Harga Barang : 
                <input type="text" name="harga_barang" value="<?php echo $harga_barang ?>" > 
            </h3>
            <button type="submit">Hitung</button>
        </form>
        <h3>Diskon : <?php echo $diskon ?>  </h3>
        <h3>Total Bayar :  <?php echo $total ?> </h3>
    </body>
</html>