<?php
    include 'config.php';
    session_start();
    if(!isset($_SESSION['username'])){
        header("location: login.php");
    }else{
        $username=$_SESSION['username'];
    }
?>
<html>
    <head>
        <title>Sistem Informasi Perpustakaan</title>
    </head>
    <body>
    SELAMAT DATANG <?php echo $username ?>, apakah anda ingin logout ? <a href="logout_proc.php">Klik disini</a>
    <br><br>
    <h2>Table Pinjam Buku</h2>
    <a href="pinjam_buku.php">Pinjam Buku</a>
        <table border= '1'>
            <tr>
                <td>No</td>
                <td>Nama Peminjam</td>
                <td>Judul Buku</td>
                <td>Tahun Terbit</td>
                <td>Tanggal Mulai</td>
                <td>Tanggal Selesai</td>
                <td>Action</td>
            </tr>
            <?php
                $sql    = "SELECT pinjam_buku.*, buku.*, user.* 
                            FROM pinjam_buku 
                            INNER JOIN buku ON pinjam_buku.id_buku=buku.id_buku 
                            INNER JOIN user ON pinjam_buku.id_user=user.id_user
                            order by id_pinjam";
                $query  = $db->query($sql);
                $nomor  = 0;
                while($data = mysqli_fetch_array($query)){
                    $nomor++;
            ?>
            <tr>
                <td><?= $nomor;?></td>
                <td><?= $data['name'];?></td>
                <td><?= $data['judul'];?></td>
                <td><?= $data['tahun_terbit'];?></td>
                <td><?= $data['tanggal_mulai'];?></td>
                <td><?= $data['tanggal_selesai'];?></td>
                <td>
                <a href="pinjam_buku_edit.php?id_pinjam=<?=$data['id_pinjam']?>

                ">edit</a> || 
                <?='<a href="pinjam_buku_delete.php?id_pinjam='. $data['id_pinjam'].'">Delete</a>'?>
                </td>
            </tr>
            <?php }?>
        </table>

        <h2>Table Buku</h2>
        <table border= '1'>
            <tr>
                <td>ID Buku</td>
                <td>Judul Buku</td>
                <td>Tahun Terbit</td>
                <td>Penerbit</td>
                <td>Penulis</td>
                <td>Action</td>
            </tr>
            <?php
            $sql    = "select * from buku order by id_buku desc";
            $query  = $db->query($sql);
            
            while($data = mysqli_fetch_array($query)){
            ?>
            <tr>
                <td><?= $data['id_buku'];?></td>
                <td><?= $data['judul'];?></td>
                <td><?= $data['tahun_terbit'];?></td>
                <td><?= $data['penerbit'];?></td>
                <td><?= $data['penulis'];?></td>
                <td>
                <a href="#">edit</a> || <a href="">delete</a>
                </td>
            </tr>
            <?php }?>
        </table>
    </body>

</html>

