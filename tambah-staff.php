<?php
include_once("./connect.php");

if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $telp = $_POST["telp"];
    $email = $_POST["email"];

    $query = mysqli_query($db, "INSERT INTO buku VALUES (NULL, '$nama', '$telp', '$email')");
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FORM TAMBAH STAFF</title>
</head>
<body>
<h1>Form tambah data staff</h1>
<form action="" method="POST">
    <label for="nama">Nama</label>
    <input type="text" id="nama" name="nama">
    <br>
    <br>
    <label for="telp">Telepon</label>
    <input type="number" id="telp" name="telp">
    <br>
    <br>
    <label for="email">Email</label>
    <input type="email" id="email" name="email">

    <br>
    <br>
    <button type="submit" name="submit">SUBMIT</button>
</form>
</body>
</html>