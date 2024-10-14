<html>
    <head>
        <title>Struktur Kendali IF … ELSEIF …</title>
    </head>
    <body>
    <?php
        date_default_timezone_set('Asia/Jakarta');
        $waktu = getdate(); // array

        echo "Sekarang Jam : ".$waktu['hours']."<br>";

        if ($waktu['hours'] <= 10) {
            print("Selamat Pagi");
        }
        else if ($waktu['hours'] <= 15) {
            print("Selamat Siang");
        }
        else if ($waktu['hours'] <= 18) {
            print("Selamat Sore");
        } else
        {
            print("Selamat Malam");
        }
    ?>
    </body>
</html>