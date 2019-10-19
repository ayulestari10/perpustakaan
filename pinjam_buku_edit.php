<?php

    session_start();
    
    include 'config.php';

    if(!isset($_GET['id_pinjam'])){
        header("location: index.php");
    }
    
    $id_pinjam  = $_GET['id_pinjam'];
    $sql        = "select * from pinjam_buku where id_pinjam = ". $id_pinjam;
    $query      = $db->query($sql);
    $data       = mysqli_fetch_assoc($query);

    $sql1       = "select * from user";
    $sql2       = "select * from buku";

    $query1     = $db->query($sql1);
    $query2     = $db->query($sql2);
    
?>
<html>
    <head>
        <title> Pinjam Buku</title>
    </head>
    <body>
        <h2>Pinjam Buku</h2><br><br>

        <form method="POST" action="pinjam_buku_edit_proc.php">
            
            <input type="hidden" name="id_pinjam" value="<?=$data['id_pinjam']?>">
                Nama<br>
            
            <select name="id_user">
                <?php while($simpan1= mysqli_fetch_assoc($query1)): ?>
                    <?php
                        if($simpan1['id_user'] == $data['id_user']){
                            $pilih1 = "selected";
                        }
                        else{
                            $pilih1 = "";
                        }
                    ?>
                    <option value="<?=$simpan1['id_user']?>"<?= $pilih1 ?>><?=$simpan1['name']?></option>
                <?php endwhile; ?>
            </select><br><br>
            
            Judul Buku<br>
            <select name="id_buku">
                <?php while($simpan2= mysqli_fetch_assoc($query2)): ?>
                    <?php
                        if($simpan2['id_buku'] == $data['id_buku']){
                            $pilih2 = "selected";
                        }
                        else{
                            $pilih2 = "";
                        }
                    ?>
                    <option value="<?=$simpan2['id_buku']?>"<?= $pilih2 ?>><?=$simpan2['judul']?></option>
            <?php endwhile; ?>
            </select><br><br>

            Tanggal Peminjaman<br>
            <input type="text" name="tanggal_mulai" value="<?=$data['tanggal_mulai']?>"><br><br>
            
            Tanggal Pengembalian<br>
            <input type="text" name="tanggal_selesai" value="<?=$data['tanggal_selesai']?>"><br><br>
            
            <button type="submit" value="submit">Submit</button>
        </form>
    </body>
</html>