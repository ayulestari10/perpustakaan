<?php
    session_start();
    include 'config.php';
    include 'msg_session_destroy.php';
?>
<html>
    <head>
        <title> Tambah User</title>
    </head>
    <body>
        <h2>Tambah User</h2><br><br>
        <form method="POST" action="user_add_proc.php">
            Username<br>
            <input type="text" name="username" required><br><br>

            Nama<br>
            <input type="text" name="name" required><br><br>

            Email<br>
            <input type="text" name="email" required><br><br>

            Password<br>
            <input type="passowrd" name="password" required><br><br>
            
            <button type="submit" value="submit">Submit</button>
        </form>
    </body>
</html>