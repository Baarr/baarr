<?php
include '../koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_petugas = $_POST['nama_petugas'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $level = $_POST['level'];

    $sql = "INSERT INTO petugas (nama_petugas, username, password, level) VALUES ('$nama_petugas', '$username', '$password', '$level')";
    $result = mysqli_query($conn,$sql);
   
    if($result){
        header("Location: pengguna.php");
        exit();
    }else{
        echo "Error." .$sql.  "<br>"  . mysqli_error($conn);
    }

 
}
$conn->close();
?>