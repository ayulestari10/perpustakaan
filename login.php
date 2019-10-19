<?php
    require_once("config.php");
?>

<html>
    <head>
        <title>PERPUSTAKKAN</title>
    </head>
    <body>
        <h1> SELAMAT DATANG </h1>
        <form method="post" action="login_proc.php">
            Username :<br>
            <input type="text" name="username" placeholder="username" required><br><br>
            Password :<br>
            <input type="passoword" name="password" placeholder="password" required><br><br>
            <button type="submit" name="submit" value="submit">LOGIN </button><br><br><br>
            Anda belum memiliki akun ? <a href="register.php"> daftar disini</a>
        </form>
    </body>
</html>