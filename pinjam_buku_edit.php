<?php
    include 'config.php';
    if(!isset($_GET['id_pinjam'])){
        header("location: index.php");
    }
    
    $id_pinjam= $_GET['id_pinjam'];

    $sql="select * from pinjam_buku where id_pinjam = $id_pinjam";
    $query=$db->query($sql);
    $data=mysqli_fetch_assoc($query);

    $sql1="select * from user inner join pinjam_buku on user.id_user = pinjam_buku.id_user";
    $sql2="select * from buku inner join pinjam_buku on buku.id_buku = pinjam_buku.id_buku";

    $query1=$db->query($sql1);
    $query2=$db->query($sql2);

    $data1=mysqli_fetch_assoc($query1);
    $data2=mysqli_fetch_assoc($query2);

    $simpan1=mysqli_fetch_array($query1);
    
?>
<html>
    <head>
        <title> Pinjam Buku</title>
    </head>
    <body>
        <h2>Pinjam Buku</h2><br><br>
        <form method="POST" action="pinjam_buku_proc.php">
            Nama Peminjam:<br>
            <select name="id_user">
            <?php for($i = 0; $i < count($simpan1); $i++): ?>
            <?php  
                if($simpan1[$i]['id_user'] == $data1['id_user']){
                $pilih = "selected";
                }
                else{
                $pilih = "";
                }
            ?>
            <option value="<?= $simpan1[$i]['id_user'] ?>" <?= $pilih ?> > <?= $simpan1[$i]['name']  ?> </option>
            <?php endfor; ?>
            </select><br><br>
            Judul Buku<br>
            <select name="id_buku">
                <?php while($simpan2= mysqli_fetch_array($query2)): ?>
                    <option value="<?=$simpan2['id_buku']?>"><?=$data2['judul']?></option>
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