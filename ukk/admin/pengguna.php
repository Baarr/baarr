<?php
include '../koneksi.php';
$query = "SELECT * FROM petugas";
$result = $conn->query($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengguna</title>
    <link rel="stylesheet" href="br.css">
</head>
<body>
    <div class="container">
        <h2>Daftar Pengguna</h2>
        <br>
        <br>
        <table border="2" cellpadding="20" class="table">
            
            <tr>
                <th>No.</th>
                <th>Nama Petugas</th>
                <th>Username</th>
                <th>Akses</th>
                <th>Aksi</th>
            </tr>

            <?php 
                include '../koneksi.php';
                $no = 1;
                $data = mysqli_query($conn,"SELECT * FROM petugas");
                while($d = mysqli_fetch_array($data)){
                ?>
            <tr>
                <td><?= $no++;?></td>
                <td><?= $d["nama_petugas"];?></td>
                <td><?= $d["username"];?></td>
                <td><?php 
                            if ($d['level'] == '1') {
                                echo "Administrator";
                            } else {
                                echo "Petugas";
                            }
                        ?>
                </td>
                <td>
                    <?php 
                        // tampilkan tombol hapus jika bukan admin
                        if ($d['level'] != '1') { ?>
                            <a href="hapus_pengguna.php?id_petugas=<?= $d['id_petugas'];?>"><button>Hapus</button></a>
                    <?php } ?>
                </td>
            </tr>
            <?php }?>
        </table>   
        <br />
    </div>
    <a href="tambah_petugas.php"><button class="tambah" style="margin-top: 20px;">Tambah</button></a>
    <a href="index.php"><button class="tambah" style="margin-top: 20px;">Kembali</button></a>
</body>
</html>
