<?php
    include 'config.php';

    $id_user 	= $_GET['id_user'];
    $sql 		= "delete from user where id_user=$id_user";
    $query 		= $db->query($sql);
    
    header("location: index.php");

?>