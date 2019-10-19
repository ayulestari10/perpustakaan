<?php
    include 'config.php';

    $judul          = $_POST['judul'];
    $tahun_terbit   = $_POST['tahun_terbit'];
    $penerbit       = $_POST['penerbit'];
    $penulis        = $_POST['penulis'];

    $sql        = "select * from buku where judul = '$judul'";
    $query      = $db->query($sql);
    $cek        = $query->num_rows;

    if($cek > 0){
        echo "Buku sudah terdaftar";
        echo "<a href='index.php'>Back</a>";
    }
    else{
        $data   = "insert into buku values (NULL, '$judul','$tahun_terbit' , '$penerbit', '$penulis')";
        $simpan = $db->query($data);
        if($simpan){
            echo "Buku Telah di tambahkan \n";
            echo "<a href='index.php'>Klik disini</a> untuk login";
        }else{
            echo "Proses Gagal";
        }
    }
?>