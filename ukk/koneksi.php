<?php

$conn = mysqli_connect("localhost", "root", "", "kasirr");

if($conn->connect_error){
    die("Connection Failed." .$conn->connect_error);
}
?>