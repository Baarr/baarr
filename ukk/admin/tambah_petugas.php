<?php
include '../koneksi.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Petugas</title>
    <link rel="stylesheet" href="ptgs.css">
</head>
<body>
    <div class="container">
        <form  method="post" action="procstp.php">
            <div class="form-group">
                <label>Nama Petugas:</label>
                <input type="text" name="nama_petugas">
            </div>

            <div class="form-group">
                <label>Username:</label>
                <input type="text" name="username">
            </div>
            
            <div class="form-group">
                <label>Password:</label>
                <input type="password" name="password">
            </div>

            <div class="form-group">
						<label>Akses Petugas:</label>
						<select name="level" class="form-control">
							<option> Pilih Role </option>
							<option value="1">Administrator</option>
							<option value="2">Petugas</option>
						</select>
			</div>
            <button type="submit">Simpan</button>
        </form>
        <a class="btn" href="pengguna.php"><button style="margin-top: 20px;">Kembali</button</a>
    </div>
</body>
</html>