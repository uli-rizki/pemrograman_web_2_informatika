<?php 
session_start();

if(isset($_POST['username'])) {
    $username = $_POST['username'];

    $_SESSION['username'] = $username;
}

if(isset($_POST['logout'])) {
    unset($_SESSION['username']);
}

?>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <?php if( isset($_SESSION['username']) ){ ?>
        <!-- sesudah login -->
         <h1>Selamat Datang, <?php echo $_SESSION['username']; ?></h1>
         <form method="POST" action="">
            <input type="hidden" name="logout" value="1">
            <button type="submit">Logout</button>
        </form>
        <?php
        } else {
         ?>
         <!-- sebelum login -->
        <h1>Form login</h1>
        <form method="POST" action="">
            <input type="text" name="username" required>

            <button type="submit">Login</button>
        </form>
        <?php }  ?>
    </body>
</html>