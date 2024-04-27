<?php
include_once("./connect.php");

$id = $_GET["id"];

$query_get_data = mysqli_query("SELECT * FROM buku where id=$id");

if (isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $isbn = $_POST["isbn"];
    $unit = $_POST["unit"];

    $query = mysqli_query($db, "INSERT INTO buku VALUES (NULL, '$nama', '$isbn', $unit)");
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FORM EDIT BUKU</title>
</head>
<body>
<h1>Form tambah edit buku</h1>
<form action="" method="POST">
    <label for="nama">Nama</label>
    <input type="text" id="nama" name="nama">
    <br>
    <br>
    <label for="isbn">ISBN</label>
    <input type="text" id="isbn" name="isbn">
    <br>
    <br>
    <label for="unit">Unit</label>
    <input type="number" id="unit" name="unit">

    <br>
    <br>
    <button type="submit" name="submit">SUBMIT</button>
</form>
</body>
</html>