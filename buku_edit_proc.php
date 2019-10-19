<?php
    include 'config.php';
    session_start();

    $id_buku        = $_POST['id_buku'];
    $judul          = $_POST['judul'];
    $tahun_terbit   = $_POST['tahun_terbit'];
    $penerbit       = $_POST['penerbit'];
    $penulis        = $_POST['penulis'];

    // pakai concatenate string dgn variabel
    // karena id_buku, tahun_terbit itu interger maka tiggal kasih penghubung dengan .
    // tapi judul, penerbit, penulis itu string jadi kasih tanda kutip satu / tanda kutip dua, disesuaikan

    // misal $a = 'aa' (string), $b = 1 (integer)
    // kita awali dengan " maka harus diakhiri ", berlaku juga untuk '
    // gabungkan kata dengan $a
    // misal untuk menggabungkan integer dgn string
    // echo "ini integer, " . $b ---> diawali " dan (diakhiri " diakhir tipe string) digabungkan dengan . saja

    // misal string digabungkan dgn nilai string 
    // echo "ini string '" . $a . "' saja" ---> di awali " dan diakhiri ", lihat ada petik satu diantara petik dua, menandakan jika nilai $a itu string
    // bisa juga di buat seperti ini
    // echo 'ini string "'. $a . '" saja' --> di balik antara petik satu dan petik dua, asalkan bergantian, jangan ada petik dua sekaligus atau petik satu sekaligus
    // "" atau '' ---> ini akan error


    $sql    = "update buku
    set id_buku = ". $id_buku . ", judul = '". $judul ."', tahun_terbit = ". $tahun_terbit .", 
    penerbit = '". $penerbit ."', penulis = '". $penulis ."'
    where id_buku = ". $id_buku;

    $simpan = $db->query($sql);

    // var_dump($sql);
    //$_SESSION['msg_success'] = "<br><b>Data Telah Di Update</b><br>";
    //header("location: index.php");

     echo "data telah di update \n";
    //echo "<a href='index.php'>Klik disini</a> untuk kembali";
?>