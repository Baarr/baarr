<?php
include '../koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $namaproduk = $_POST["NamaProduk"];
    $harga = $_POST["Harga"];
    $stok = $_POST["Stok"];

    $sql = "INSERT INTO produk (Namaproduk,Harga,Stok) VALUES ('$namaproduk','$harga','$stok')";
    
    if(mysqli_query($conn,$sql)){
        header("Location: barang.php");
    }else{
        echo "Error." .$sql.  "<br>"  . mysqli_error($conn);
    }
}

$conn->close();
?>