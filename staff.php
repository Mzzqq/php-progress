<?php
include_once("./connect.php");

$query = mysqli_query($db, "SELECT * FROM staff");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Staff</title>
</head>
<body>
<h1>Daftar staff</h1>
<table border="1">
    <tr>
        <td>Nama</td>
        <td>Telepon</td>
        <td>Email</td>
    </tr>

    <?php foreach ($query as $staff) { ?>
        <tr>
            <td><?php echo $staff["nama"] ?></td>
            <td><?php echo $staff["telp"] ?></td>
            <td><?php echo $staff["email"] ?></td>
        </tr>
    <?php } ?>

</body>
</html>