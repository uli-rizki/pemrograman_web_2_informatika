<?php

session_start();

// Menyimpan nama pengguna
$_SESSION['username'] = 'John Doe';

echo "Selamat Datang, ".$_SESSION['username'];

unset($_SESSION['username']);
?>