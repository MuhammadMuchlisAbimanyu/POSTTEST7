<?php 
    $conn = mysqli_connect("localhost", "root", "", "overpriced_coffe");


    if (!$conn) {
        die("Gagal terhubung ke database" . mysqli_connect_error());
    }
?>