<?php
include '../koneksi.php';
$query = "SELECT * FROM produk";
$result = $conn->query($query);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barang</title>
    <link rel="stylesheet" href="br.css">
</head>
<body>
    <div class="container">
        <h2>Daftar Barang</h2>
        <br>
        <br>
        <table border="2" cellpadding="20" class="table">
            
            <tr>
                <th>No.</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
</tr>

    <?php $i=1;?>
    <?php while( $row = mysqli_fetch_assoc($result) ) : ?>
            <tr>
                <td><?= $i++;?></td>
                <td><?= $row ["NamaProduk"];?></td>
                <td><?= $row ["Harga"];?></td>
                <td><?= $row ["Stok"];?></td>
                <td>
                    <a href="edit.php?produkid=<?= $row['ProdukID'];?>">
                    <button class="edit">Edit</button></a>
                    <form onsubmit="return confirm('Hapus Nih?');" action="hapus.php?ProdukID=<?= $row['ProdukID'];?>" method="post"> 
                    <button class="hapus" style="margin-top: 10px;">Hapus</button>
                    </form>
                </td>
            </tr>
            
        <?php endwhile;?>
        </table>   
        <br />
    </div>
    <a href="tambah.php"><button class="tambah" style="margin-top: 20px;">Tambah</button></a>
    <a href="index.php"><button class="tambah" style="margin-top: 20px;">Kembali</button></a>
</body>
</html>