<?php
    include "../koneksi.php";
    $id_data = $_GET['id_data'];
    mysqli_query($conn, "delete from data where id_data='$id_data'");
    header("location:data.php");
?>