<html>
    <head>
        <title>Pendaftaran</title>
    </head>
    <body>
        <form method="POST" action="simpan_pendaftaran.php">
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
            <p>
                <label>Email</label>
                <input type="email" name="email" required>
            </p>
            <button type="submit">Simpan</button>
        </form>
    </body>
</html>