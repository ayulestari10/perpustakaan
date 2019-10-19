<?php
    include 'config.php';
    session_start();

    $id_buku        = $_POST['id_buku'];
    $judul          = $_POST['judul'];
    $tahun_terbit   = $_POST['tahun_terbit'];
    $penerbit       = $_POST['penerbit'];
    $penulis        = $_POST['penulis'];

    $sql    = "update buku
    set id_buku = $id_buku, judul = $judul, tahun_terbit = $tahun_terbit, 
    penerbit = $penerbit, penulis = $penulis 
    where id_buku = $id_buku";

    $simpan = $db->query($sql);

    var_dump($simpan);
    //$_SESSION['msg_success'] = "<br><b>Data Telah Di Update</b><br>";
    //header("location: index.php");

     echo "data telah di update \n";
    //echo "<a href='index.php'>Klik disini</a> untuk kembali";
?>