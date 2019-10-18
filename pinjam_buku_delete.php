<?php
    include 'config.php';

    $id_pinjam=$_GET['id_pinjam'];

    $sql="delete from pinjam_buku where id_pinjam=$id_pinjam";
    $query= $db->query($sql);
    header("location: index.php");

?>