<?php

    session_start();
    
    include 'config.php';

    if(!isset($_GET['id_buku'])){
        header("location: index.php");
    }
    
    $id_buku  = $_GET['id_buku'];
    $sql        = "select * from buku where id_buku=$id_buku";
    $query      = $db->query($sql);
    $data       = mysqli_fetch_array($query);
?>
<html>
    <head>
        <title>Edit Buku</title>
    </head>
    <body>
        <h2>Edit Buku</h2><br><br>
        <form method="POST" action="buku_edit_proc.php">
            <input type="hidden" name="id_buku" value="<?=$data['id_buku']?>">
            Judul<br>
            <input type="text" name="judul" value="<?=$data['judul']?>"><br><br>
            Tahun Terbit<br>
            <input type="text" name="tahun_terbit" value="<?=$data['tahun_terbit']?>"><br><br>
            Penerbit<br>
            <input type="text" name="penerbit" value="<?=$data['penerbit']?>"><br><br>
            Penulis<br>
            <input type="text" name="penulis" value="<?=$data['penulis']?>"><br><br>
            <button type="submit" value="submit">Submit</button>
        </form>
    </body>
</html>