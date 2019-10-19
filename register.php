<?php
    require_once("config.php");
?>

<html>
    <head>
        <title>PERPUSTAKKAN</title>
    </head>
    <body>
        <h1> DAFTAR </h1>
        <form method="post" action="register_proc.php">
            Username :<br>
            <input type="text" name="username" placeholder="username" required><br><br>
            Name :<br>
            <input type="text" name="name" placeholder="name" required><br><br>
            Email :<br>
            <input type="text" name="email" placeholder="email" required><br><br>
            Password :<br>
            <input type="passoword" name="password" placeholder="password" required><br><br>
            <button type="submit" name="submit" value="submit">DAFTAR </button><br><br><br>
        </form>
    </body>
</html>