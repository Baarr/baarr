<?php
include '../koneksi.php';

if(isset($_GET["ProdukID"])) {
    $ProdukID = $_GET["ProdukID"];

    // menghapus data 
    $sql = "DELETE FROM produk WHERE ProdukID = $ProdukID ";

    if ($conn->query($sql) === TRUE){
        header("Location: barang.php");
    }else {
        echo "Error:" .$sql. "<br>" . $conn->error;
    }
}

?>