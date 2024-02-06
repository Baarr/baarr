<?php 
// koneksi database
include '../koneksi.php';


$PelangganID = $_POST['PelangganID'];
$NamaPelanggan = $_POST['NamaPelanggan'];
$NomorTelepon = $_POST['NomorTelepon'];
$Alamat = $_POST['Alamat'];
$TanggalPenjualan = $_POST['TanggalPenjualan'];
$Subtotal = $_POST['Subtotal'];
$JumlahProduk = $_POST['JumlahProduk'];
$ProdukID = $_POST['ProdukID'];
$idpenjualan = date("dmHis");


// input ke database
mysqli_query($conn,"INSERT INTO pelanggan values('$PelangganID','$NamaPelanggan','$Alamat','$NomorTelepon')");
mysqli_query($conn,"INSERT INTO penjualan values('$idpenjualan','$TanggalPenjualan','$Subtotal','$PelangganID')");
mysqli_query($conn,"INSERT INTO detailpenjualan values('','$idpenjualan','$ProdukID','$JumlahProduk','$Subtotal')");
mysqli_query($conn,"UPDATE produk set stok = stok - $JumlahProduk WHERE ProdukID = '$ProdukID'");


header("location:pembelian.php");

?>