<?php
include '../koneksi.php';
$query = "SELECT ProdukID,NamaProduk,Harga FROM produk";
$result = $conn->query($query);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Pembelian</title>
    <link rel="stylesheet" href="tmbh.css">
</head>
<body>
    <div id="content-wrapper" class="d-flex flex-column">
        <a href="pembelian.php"><button class="btn">Kembali</button></a>
        <h1></h1>
        <div class="container">
            <form action="procespb.php" method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label>Tanggal:</label>
                    <input type="date" name="TanggalPenjualan" required>
                </div>

                <div class="form-grup">
                    <label>ID Pelanggan:</label>
                    <input type="text" name="PelangganID" value="<?php echo date("dmHis") ?>" required>
                </div>

                <div class="form-group">
                    <label>Nama Pelanggan:</label>
                    <input type="text" name="NamaPelanggan" required>
                </div>

                <div class="form-group">
                    <label>No. Telp:</label>
                    <input type="text" name="NomorTelepon" required>
                </div>

                <div class="form-group">
                    <label>Alamat:</label>
                    <input type="text" name="Alamat" required>
                </div>

                <div class="form-group">
                    <label>Produk:</label>
                    <select class="select" name="ProdukID">
                        <?php
                
                if ($result->num_rows > 0) {
                    ?>
                        <option selected>Pilih Barang</option>
                        <?php
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <option value="<?php echo $row['ProdukID']; ?>" data-harga="<?php echo $row['Harga']; ?>"><?php echo $row['NamaProduk']; ?></option>
                        <?php
                        }
                    } else {
                        
                        ?>
                        <option selected>Tidak Ada Barang</option>
                        <?php } ?>
                    </select>
                </div>
                
                <div class="form-group">
                    <label>Jumlah:</label>
                    <input type="number" name="JumlahProduk"  oninput="updateTotal()" required>
                </div>

                <div class="form-group">
                    <label>Subtotal:</label>
                    <input type="number" name="Subtotal" readonly>
                </div>

                <button type="submit">Simpan</button>
            </form>
    </div>
    </div>
        <script>
        function updateTotal() {
        var jumlah = document.getElementsByName('JumlahProduk')[0].value; 
        var select = document.getElementsByName('ProdukID')[0];
        var hargaBarang = select.options[select.selectedIndex].getAttribute('data-harga');
        var total = jumlah * hargaBarang;
        document.getElementsByName('Subtotal')[0].value = total; 
    }
    </script>

</body>
</html>