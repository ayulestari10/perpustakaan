<?php
    include 'config.php';

    $id_buku 	= $_GET['id_buku'];
    $sql 		= "delete from buku where id_buku=$id_buku";
    $query 		= $db->query($sql);
    
    header("location: index.php");

?>