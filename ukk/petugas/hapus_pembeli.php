<?php
include '../koneksi.php';

if(isset($_GET["PelangganID"])){
    $PelangganID = $_GET["PelangganID"];

    $sql_delete_penjualan = "DELETE FROM penjualan WHERE PelangganID = $PelangganID ";

    if($conn->query($sql_delete_penjualan) === TRUE){
        $sql_delete_pelanggan = "DELETE FROM pelanggan WHERE PelangganID = $PelangganID ";

        if($conn->query($sql_delete_pelanggan) === TRUE){
            header("Location: pembelian.php");
        } else {
            echo "Error." . $sql_delete_pelanggan . "<br>" . $conn->error;
        }
    } else {
        echo "Error." . $sql_delete_penjualan . "<br>" . $conn->error;
    }
}

?>