<?php 
/**
 * 1. Percabangan 1 kondisi
 * 2. Percabangan 2 kondisi
 * 3. percabangan lebih dari 2 kondisi
 */
?>
<html>
    <head>
        <title>Struktur Kendali IF</title>
    </head>
    <body>
        <?php
        // jam
        $x = 11;
        if ($x > 10) {
            print("Selamat Siang");
        }
        ?>

        <form method="GET">
            <p>
                <label>Nama Lengkap</label>
                <input type="text" name="nama_lengkap" required>
            </p>
            <p>
                <label>Jenis Kelamin</label>
                <select name="jenis_kelamin" required>
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
            </p>
            <button type="submit">Simpan</button>
        </form>
        <?php
        $nama_lengkap = isset($_GET['nama_lengkap']) ? $_GET['nama_lengkap'] : "";
        $jenis_kelamin = isset($_GET['jenis_kelamin']) ? $_GET['jenis_kelamin'] : "";

        if ($jenis_kelamin == "laki-laki") {
            echo "Halo mas ".$nama_lengkap;
        } else {
            echo "Halo mba ".$nama_lengkap;
        }
        ?>
    </body>
</html>