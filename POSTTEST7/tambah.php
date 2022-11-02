<?php
date_default_timezone_set('asia/kuala_lumpur');

require('koneksi.php');

if (isset($_POST["tambah"])) {
    $name_cst = htmlspecialchars($_POST["name_cst"]);
    $phone_number_cst = htmlspecialchars($_POST["phone_number_cst"]);
    $address_cst = htmlspecialchars($_POST["address_cst"]);
    $email_cst = htmlspecialchars($_POST["email_cst"]);
    $waktu_input = date("l, d-m-y  H:i:s");

    $gambar = $_FILES['gambar']['name'];
    $x = explode('.', $gambar);
    $extensi = strtolower(end($x));
    $gambar_baru = "$name_cst.$extensi";
    $tmp = $_FILES['gambar']['tmp_name'];

    if (move_uploaded_file($tmp, 'img/'.$gambar_baru)) {
        $sql = "INSERT INTO customer VALUES ('','$gambar_baru', '$phone_number_cst', '$address_cst', '$email_cst', '$waktu_input')";

        $result = mysqli_query($conn, $sql);

        if ( $result ) {
            echo"
                <script>
                    alert('Data berhasil ditambah');
                    document.location.href = 'admin.php';
                </script>
            ";
        }else{
            echo"
                <script>
                    alert('Data gagal ditambah');
                    document.location.href = 'tambah.php';
                </script>
            ";
        }
    }
}

?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'>
    <title>OVERPRICED COFFEE</title>
    <link rel='icon' href='image/title-icon.png'>
    <link rel='stylesheet' href='style.css'>
    <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link href='https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap' rel='stylesheet'>
</head>
<body>
    <section class='sub-header'>
        <nav>
            <img onmouseover='onImage()' onmouseout='outImage()' src='image\logo-white.png' alt='onImage' id='logo'>
            <div class='nav-links'>
                <ul>
                    <!-- <li><a href='index.html'>HOME</a></li>
                    <li><a href='about.html'>ABOUT</a></li>
                    <li><a href='menu.html'>MENU</a></li>
                    <li><a href='contact.html'>CONTACT</a></li> -->
                    <li><img src='image/moon.png' id='icon'></li>
                    <li>
                        <div class="row-nav">
                            <!-- <div class="nav-col">
                                <a href='' onclick='check()' class="sign-up">SIGN UP</a>
                            </div> -->
                            <div class="nav-col">
                                <a href='index.html' class="login">LOGOUT</a>
                            </div>
                        </div>
                        <!-- <a href='' onclick='check()' class="sign-up">SIGN UP</a>
                        <a href='' onclick='check()' class="login">LOGIN</a> -->
                    </li>
                </ul>
            </div>
        </nav>
        <h1 class='title-brown-bg'>ADMIN (Input Data)</h1>
    </section>
    <section class='admin'>
        <div class="view-admin-tambah">
            <form class="form-admin" action="" method="post" enctype="multipart/form-data">
            <label for="name_cst">Employee Name : </label>
            <input class="form-admin-element" type="text" name="name_cst" required><br><br>
            <label for="phone_number_cst">Employee Phone Address : </label>
            <input class="form-admin-element" type="number" name="phone_number_cst" required><br><br>
            <label for="address_cst">Employee Address : </label>
            <input class="form-admin-element" type="text" name="address_cst" required><br><br>
            <label for="email_cst">Employee Email Address : </label>
            <input class="form-admin-element" type="text" name="email_cst" required><br><br>
            <label for="gambar">Employee Foto : </label>
            <input class="form-admin-element" type="file" name="gambar" required><br><br>
            <button type="submit" class='button-admin' name="tambah">Tambah</button>
            </form>
        </div>
    </section>
    <script type='text/javascript' src='script.js'></script>
</body>