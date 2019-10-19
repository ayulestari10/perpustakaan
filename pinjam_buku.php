<?php
    include 'config.php';
    
    $sql1   = "select * from user";
    $sql2   = "select * from buku";

    $query1 = $db->query($sql1);
    $query2 = $db->query($sql2);
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
                <?php while($data1= mysqli_fetch_array($query1)): ?>
                    <option value="<?=$data1['id_user']?>"><?=$data1['name']?></option>
                <?php endwhile; ?>
            </select><br><br>

            Judul Buku<br>
            <select name="id_buku">
                <?php while($data2= mysqli_fetch_array($query2)): ?>
                    <option value="<?=$data2['id_buku']?>"><?=$data2['judul']?></option>
                <?php endwhile; ?>
            </select><br><br>

            Tanggal Peminjaman<br>
            <input type="text" name="tanggal_mulai"><br><br>

            Tanggal Pengembalian<br>
            <input type="text" name="tanggal_selesai"><br><br>

            <button type="submit" value="submit">Submit</button>
        </form>
    </body>
</html>