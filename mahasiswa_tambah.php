<html>
    <head>
        <title>Tambah Mahasiswa</title>
    </head>
    <body>
        <form method="POST" action="mahasiswa_simpan.php">
            <p>
                <label>NIM</label>
                <input type="text" name="nim" required>
            </p>
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
    </body>
</html>