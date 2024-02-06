<?php
include '../koneksi.php';
$query = "SELECT penjualan.TanggalPenjualan, pelanggan.NamaPelanggan, pelanggan.PelangganID, pelanggan.NomorTelepon, pelanggan.Alamat, detailpenjualan.JumlahProduk, detailpenjualan.Subtotal, produk.NamaProduk
        FROM penjualan
        INNER JOIN pelanggan ON penjualan.PelangganID = pelanggan.PelangganID
        INNER JOIN detailpenjualan ON penjualan.PenjualanID = detailpenjualan.PenjualanID
        INNER JOIN produk ON detailpenjualan.ProdukID = produk.ProdukID"; // Menambahkan JOIN dengan tabel produk
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembelian</title>
    <link rel="stylesheet" href="br.css">
</head>
<body>
    <div class="container">
        <h2>Daftar Pembelian</h2>
        <br>
        <table border="2" cellpadding="20" class="table">
            <tr>
                <th>No.</th>
                <th>Tanggal</th>
                <th>ID Pelanggan</th>
                <th>Nama Pelanggan</th>
                <th>No Telp</th>
                <th>Alamat</th>
                <th>Nama Produk</th>
                <th>Jumlah Produk</th>
                <th>Subtotal</th>
                <th>Aksi</th>
            </tr>
            <?php $i=1;?>
            <?php if ($result && $result->num_rows > 0): ?>
                <?php while($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $row["TanggalPenjualan"]; ?></td>
                        <td><?= $row["PelangganID"]; ?></td>
                        <td><?= $row["NamaPelanggan"]; ?></td>
                        <td><?= $row["NomorTelepon"]; ?></td>
                        <td><?= $row["Alamat"]; ?></td>
                        <td><?= $row["NamaProduk"]; ?></td> 
                        <td><?= $row["JumlahProduk"]; ?></td>
                        <td><?= $row["Subtotal"]; ?></td>
                        <td>
                        <form onsubmit="return confirm('Hapus Nih?');" action="hapus_pembeli.php?PelangganID=<?= $row['PelangganID'];?>" method="post"> 
                        <button class="hapus">Hapus</button>
                        </form>
                    </td>
                    </tr>
                <?php endwhile; ?>
    
            <?php endif; ?>
        </table>   
        <br />
    </div>
    <a href="tambahpb.php"><button class="tambah" style="margin-top: 20px;">Tambah</button></a>
    <a href="index.php"><button class="tambah" style="margin-top: 20px;">Kembali</button></a>
</body>
</html>
