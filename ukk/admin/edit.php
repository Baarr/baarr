<?php
include '../koneksi.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $ProdukID = $_POST['ProdukID'];
    $NamaProduk = $_POST["NamaProduk"];
    $Harga = $_POST["Harga"];
    $Stok = $_POST["Stok"];

    $query = "UPDATE produk SET NamaProduk='$NamaProduk', Harga='$Harga', Stok='$Stok' WHERE ProdukID=$ProdukID";

    if ($conn->query($query) === TRUE) {
        header("Location: barang.php");
    } else {
        echo "Error: " . $query . "<br>" . $conn->error;
    }
} elseif (isset($_GET['ProdukID'])) {
    $ProdukID = $_GET['ProdukID'];
    $query = "SELECT * FROM produk WHERE ProdukID=$ProdukID";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Barang</title>
    <link rel="stylesheet" href="tmbh.css">
</head>

<body>
    <div id="content-wrapper" class="d-flex flex-column">
        <a href="barang.php"><button class="btn">Kembali</button></a><br>
        <h1>Edit Barang</h1>
        <div class="container">
        <?php
        include '../koneksi.php';
        $id = $_GET['produkid'];
        $result = mysqli_query($conn, "SELECT * FROM produk WHERE ProdukID=$id");
        while( $row = mysqli_fetch_assoc($result) ) : ?>
            <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="ProdukID" value="<?= $row['ProdukID']; ?>">

                <div class="form-group">
                    <label>Nama Barang:</label>
                    <input type="text" name="NamaProduk" value="<?= $row['NamaProduk']; ?>">
                </div>

                <div class="form-group">
                    <label>Harga:</label>
                    <input type="number" name="Harga" value="<?= $row['Harga']; ?>">
                </div>

                <div class="form-group">
                    <label>Stok:</label>
                    <input type="number" name="Stok" value="<?= $row['Stok']; ?>">
                </div>

                <button type="submit">Simpan</button>
            </form>
            <?php endwhile;?>
        </div>
    </div>
</body>

</html>