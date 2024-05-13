<?php
    session_start();
    if (!isset($_SESSION['email'])) {
        header('location: login.php');
        exit();
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Praktikum Pertemuan 9</title>
</head>
<body>
    <h1>Aplikasi Perpustakaan</h1>
    <a href="./buku.php">Lihat daftar buku</a>
    <br>
    <a href="./staff.php">Lihat daftar staff</a>
</body>
</html>
<?php session_destroy(); ?>
