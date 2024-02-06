<?php
include '../koneksi.php';

if(isset($_GET["id_petugas"])) {
    $id_petugas = $_GET["id_petugas"];

    // menghapus data 
    $sql = "DELETE FROM petugas WHERE id_petugas = $id_petugas ";

    if ($conn->query($sql) === TRUE){
        header("Location: pengguna.php");
    }else {
        echo "Error:" .$sql. "<br>" . $conn->error;
    }
}

?>