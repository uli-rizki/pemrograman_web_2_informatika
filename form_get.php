<html>
    <head>
        <title>Form GET</title>
    </head>
    <body>
        <form method="GET" action="">
            <p>
                <label>Nama</label>
                <input type="text" name="nama">
            </p>
            <p>
                <label>Alamat</label>
                <input type="text" name="alamat">
            </p>
            <button type="submit">Simpan</button>
        </form>
    </body>
</html>
<?php 

// tipe data isset boolean
if( isset($_GET['nama']) ) {
    $nama = $_GET['nama'];
    echo "Nama : ".$nama."<br>";
}
if( isset($_GET['alamat'])) {
    $alamat = $_GET['alamat'];
    echo "Alamat : ".$alamat;
}

?>