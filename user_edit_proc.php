<?php
    include 'config.php';
    session_start();

    $id_user    = $_POST['id_user'];
    $username   = $_POST['username'];
    $name       = $_POST['name'];
    $email      = $_POST['email'];
    $password   = $_POST['password'];

    $sql    = "update user 
    set id_user = $id_user, username = $username, name = $name, 
    email = $email, password = $password
    where id_user = $id_user";
    $simpan = $db->query($sql);

    $_SESSION['msg_success'] = "<br><b>Data Telah Di Update</b><br>";
    header("location: index.php");

    // echo "data telah di update \n";
    //echo "<a href='index.php'>Klik disini</a> untuk kembali";
?>