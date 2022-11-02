<?php
date_default_timezone_set('asia/kuala_lumpur');

require 'koneksi.php';
$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM customer WHERE id=$id");

$customer = [];

while ($row = mysqli_fetch_assoc($result)) {
    $customer[] = $row;
}

$opc = $customer[0];

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
        $sql = "UPDATE customer SET
                name_cst = '$name_cst',
                phone_number_cst = '$phone_number_cst',
                address_cst = '$address_cst',
                email_cst = '$email_cst',
                name_cst = '$gambar_baru',
                waktu_input = '$waktu_input'
                WHERE id = $id";

        $result = mysqli_query($conn, $sql);

        if ( $result ) {
            echo"
                <script>
                    alert('Data berhasil diubah');
                    document.location.href = 'admin.php';
                </script>
            ";
        }else{
            echo"
                <script>
                    alert('Data gagal diubah');
                    document.location.href = 'edit.php';
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
        <h1 class='title-brown-bg'>ADMIN (Edit Data)</h1>
    </section>
    <section class='admin'>
        <div class="view-admin-tambah">
            <form class="form-admin" action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <label for="name">Employee Name : </label>
            <input class="form-admin-element" type="text" name="name_cst" value="<?php echo $opc["name_cst"]; ?>"><br><br>
            <label for="phone_number_cst">Employee Phone Number : </label>
            <input class="form-admin-element" type="number" name="phone_number_cst" value="<?php echo $opc["phone_number_cst"]; ?>" ><br><br>
            <label for="address_cst">Employee Address : </label>
            <input class="form-admin-element" type="text" name="address_cst" value="<?php echo $opc["address_cst"]; ?>"><br><br>
            <label for="email_cst">Employee Email : </label>
            <input class="form-admin-element" type="text" name="email_cst" value="<?php echo $opc["email_cst"]; ?>"><br><br>
            <label for="gambar">Employee Foto : </label>
            <input class="form-admin-element" type="file" name="gambar" value="<?php echo $opc["name_cst"];?>"><br><br>
            <button type="submit" class='button-admin' name="tambah">Edit</button>
            </form>
        </div>
    </section>
    <script type='text/javascript' src='script.js'></script>
</body>