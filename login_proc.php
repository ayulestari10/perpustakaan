<?php
 
    include 'config.php';
   
    $username   = $_POST['username'];
    $password   = $_POST['password'];

    $sql        = "select * from user where username='$username'and password ='$password'";
    $query      = $db->query($sql);
    $cek        = $query->num_rows;
    
    /*echo '<pre>';
    var_dump($cek);
    echo '</pre>';*/

    if($cek > 0){
        session_start();
        $_SESSION['username'] = $username;
        header("location: index.php");
    }else{
        echo "Username atau password anda salah  ";
        echo "<a href='login.php'> Back </a>";
    }
?>