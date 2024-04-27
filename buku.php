<?php
    include_once("./connect.php");

    $query = mysqli_query($db, "SELECT * FROM buku");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Buku</title>


</head>
<body>
    <h1>Daftar buku</h1>

    <?php foreach ($query as $data) { ?>
        <?php echo $data["nama"] ?>
    <?php } ?>
</body>
</html>