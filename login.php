<?php
session_start();
if (isset($_SESSION['email'])) {
    header('location: login.php');
}
?>

<html>
<head>

</head>
<body>
    <h1>Login Admin</h1>
    <form action="./login_process.php" method="post">
        <div>
            <label for="email">Email: </label>
            <input type="email" name="email" id="email">
        </div>
        <br>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>

        <br>
        <button type="submit" name="submit">LOGIN</button>
    </form>
</body>
</html>