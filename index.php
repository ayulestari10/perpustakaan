<?php
    include 'config.php';

    session_start();
    if(!isset($_SESSION['username'])){
        header("location: login.php");
    }else{
        $username = $_SESSION['username'];
    }
?>
<html>
    <head>
        <title>Sistem Informasi Perpustakaan</title>
    </head>
    <body>
    
        SELAMAT DATANG <?php echo $username ?>, apakah anda ingin logout ? <a href="logout_proc.php">Klik disini</a>
        <br><br>

        <!-- Session Message -->        
        <?php 
            if(isset($_SESSION['msg_success'])){
                echo $_SESSION['msg_success'];
            } 
        ?>
        
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
                <a href="pinjam_buku_edit.php?id_pinjam=<?=$data['id_pinjam']?>">edit</a> || 
                <a href="pinjam_buku_delete.php?id_pinjam=<?=$data['id_pinjam']?>">Delete</a>
                </td>
            </tr>
            <?php }?>
        </table>

        <h2>Table Buku</h2>
        <a href="buku_add.php">Tambah Buku</a>
        <table border= '1'>
            <tr>
                <td>No</td>
                <td>Judul Buku</td>
                <td>Tahun Terbit</td>
                <td>Penerbit</td>
                <td>Penulis</td>
                <td>Action</td>
            </tr>
            <?php
            $sql    = "select * from buku order by id_buku";
            $query  = $db->query($sql);
            $nomor2=0;
            
            while($data = mysqli_fetch_array($query)){
                $nomor2++;
            ?>
            <tr>
                <td><?= $nomor2;?></td>
                <td><?= $data['judul'];?></td>
                <td><?= $data['tahun_terbit'];?></td>
                <td><?= $data['penerbit'];?></td>
                <td><?= $data['penulis'];?></td>
                <td>
                <a href="buku_edit.php?id_buku=<?=$data['id_buku']?>">edit</a> || 
                <a href="buku_delete.php?id_buku=<?=$data['id_buku']?>">Delete</a>
                </td>
            </tr>
            <?php }?>
        </table>
        <h2>Table User</h2>
        <a href="user_add.php">Tambah User</a>
        <table border="1">
        <tr>
            <td>No</td>
            <td>Username</td>
            <td>Name</td>
            <td>Email</td>
            <td>Action</td>
        </tr>
        <?php
            $sql="select * from user order by id_user";
            $query=$db->query($sql);
            $nomor3=0;
            while($data=mysqli_fetch_array($query)):
            $nomor3++;
        ?>
        <tr>
            <td><?=$nomor3?></td>
            <td><?=$data['username']?></td>
            <td><?=$data['name']?></td>
            <td><?=$data['email']?></td>
            <td>
            <a href="user_edit.php?id_user=<?=$data['id_user']?>">edit</a> || 
            <a href="user_delete.php?id_user=<?=$data['id_user']?>">Delete</a>
            </td>
        </tr>
        <?php
            endwhile;
        ?>
            
        </table>

    </body>

</html>

