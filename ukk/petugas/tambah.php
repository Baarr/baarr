<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Barang</title>
    <link rel="stylesheet" href="tmbh.css">
</head>
<body>
    <div>
        <a href="barang.php"><button class="btn">Kembali</button></a>
        <h1></h1>
        <div class="container">
            <form action="upload.php" method="post" enctype="multipart/form-data">
                <div class="form-grup">
                    <label>Nama Barang:</label>
                    <input type="text" name="NamaProduk" required>
                </div>

                <div class="form-group">
                    <label>Harga:</label>
                    <input type="number" name="Harga" required>
                </div>

                <div class="form-group">
                    <label>Stok:</label>
                    <input type="number" name="Stok" required>
                </div>
                <button type="submit">Simpan</button>
            </form>
    	</div>
        </div>
</body>
</html>