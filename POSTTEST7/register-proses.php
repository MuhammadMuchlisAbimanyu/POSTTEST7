<?php
require 'koneksi.php';

if(isset($_POST['daftar'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $nama = $_POST['nama'];
    $role = 'user';
    

    if($password === $cpassword) {
        $password = $password;
        $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

        if(mysqli_fetch_assoc($result)) {
            echo"
            <script>
                alert('Username Telah Digunakan');
                document.location.href = 'register.html';
            </script>";
        } else {
            $sql = "INSERT INTO user VALUES ('', '$username', '$password', '$nama', '$role')";
            $result = mysqli_query($conn, $sql);

            if(mysqli_affected_rows($conn) > 0) {
                echo"
                <script>
                    alert('Registrasi Berhasil');
                    document.location.href = 'login.html';
                </script>";
            } else {
                echo"
                <script>
                    alert('Registrasi Gagal');
                    document.location.href = 'register.html';
                </script>";
            }
        }
    } else {
        echo"
        <script>
            alert('Password Tidak Sama !');
            document.location.href = 'register.html';
        </script>";
    }
}
?>