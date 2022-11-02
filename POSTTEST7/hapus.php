<?php 
require 'koneksi.php';

$id = $_GET['id'];

$result = mysqli_query($conn, "DELETE FROM customer WHERE id = $id");

if ( $result ) {
    echo"
        <script>
            alert('Data berhasil dihapus');
            document.location.href = 'admin.php';
        </script>
    ";
}else{  
    echo"
        <script>
            alert('Data gagal dihapus');
            document.location.href = 'hapus.php';
        </script>
    ";
}


