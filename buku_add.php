<?php
    session_start();
    include 'config.php';
    include 'msg_session_destroy.php';
?>
<html>
    <head>
        <title> Tambah Buku</title>
    </head>
    <body>
        <h2>Tambah Buku</h2><br><br>
        <form method="POST" action="buku_add_proc.php">
            Judul<br>
            <input type="text" name="judul" required><br><br>

            Tahun Terbit<br>
            <input type="text" name="tahun_terbit" required><br><br>

            Penerbit<br>
            <input type="text" name="penerbit" required><br><br>

            Penulis<br>
            <input type="text" name="penulis" required><br><br>
            
            <button type="submit" value="submit">Submit</button>
        </form>
    </body>
</html>