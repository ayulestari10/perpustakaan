<?php
    include 'config.php';

    $username   = $_POST['username'];
    $name       = $_POST['name'];
    $email      = $_POST['email'];
    $password   = $_POST['password'];

    $sql        = "select * from user where username = '$username'";
    $query      = $db->query($sql);
    $cek        = $query->num_rows;

    if($cek > 0){
        echo "username sudah terdaftar";
        echo "<a href='register.php'>Back</a>";
    }
    else{
        $data   = "insert into user values (NULL, '$username','$name' , '$email', '$password')";
        $simpan = $db->query($data);
        if($simpan){
            echo "Akun telah terdaftar \n";
            echo "<a href='index.php'>Klik disini</a> untuk login";
        }else{
            echo "Proses Gagal";
        }
    }
?>