<?php
    include 'config.php';

    $id_user= $_POST['id_user'];
    $id_buku= $_POST['id_buku'];
    $tanggal_mulai= $_POST['tanggal_mulai'];
    $tanggal_selesai= $_POST['tanggal_selesai'];

    $sql="insert into pinjam_buku values (NULL, $id_user, $id_buku, $tanggal_mulai, $tanggal_selesai)";
    $simpan= $db->query($sql);

    if($simpan){
        echo "data telah di tambahkan \n";
        echo "<a href='index.php'>Klik disini</a> untuk kembali";
    }else{
        echo "Proses Gagal";
    }
?>