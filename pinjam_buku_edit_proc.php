<?php
    include 'config.php';
    session_start();

    $id_pinjam          = $_POST['id_pinjam'];
    $id_user            = $_POST['id_user'];
    $id_buku            = $_POST['id_buku'];
    $tanggal_mulai      = $_POST['tanggal_mulai'];
    $tanggal_selesai    = $_POST['tanggal_selesai'];

    $sql    = "update pinjam_buku 
    set id_pinjam = $id_pinjam, id_user = $id_user, id_buku = $id_buku, 
    tanggal_mulai = $tanggal_mulai, tanggal_selesai = $tanggal_selesai
    where id_pinjam = $id_pinjam";

    $simpan = $db->query($sql);

    $_SESSION['msg_success'] = "<br><b>Data Telah Di Update</b><br>";
    header("location: index.php");

    // echo "data telah di update \n";
    //echo "<a href='index.php'>Klik disini</a> untuk kembali";
?>