<?php

    session_start();
    
    include 'config.php';

    if(!isset($_GET['id_user'])){
        header("location: index.php");
    }
    
    $id_user  = $_GET['id_user'];
    $sql        = "select * from user where id_user = $id_user";
    $query      = $db->query($sql);
    $data       = mysqli_fetch_array($query);
    
?>
<html>
    <head>
        <title>Edit User</title>
    </head>
    <body>
        <h2>Edit User</h2><br><br>
        <form method="POST" action="user_edit_proc.php">
            <input type="hidden" name="id_user" value="<?=$data['id_user']?>">
            Username<br>
            <input type="text" name="username" value="<?=$data['username']?>"><br><br>
            Nama<br>
            <input type="text" name="name" value="<?=$data['name']?>"><br><br>
            Email<br>
            <input type="text" name="email" value="<?=$data['email']?>"><br><br>
            Password<br>
            <input type="password" name="password" value="<?=$data['password']?>"><br><br>
            <button type="submit" value="submit">Submit</button>
        </form>
    </body>
</html>