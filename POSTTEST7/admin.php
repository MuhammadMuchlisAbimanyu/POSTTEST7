<?php
require('koneksi.php');

if(isset($_POST['cari'])){
    $keyword =  $_POST['keyword'];
    $result = mysqli_query($conn, "SELECT * FROM customer WHERE name_cst LIKE '%$keyword%'");
}else{
    $result = mysqli_query($conn, "SELECT * FROM customer");
}

$customer = [];

while ($row = mysqli_fetch_assoc($result)) {
    $customer[] = $row;
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
        <h1 class='title-brown-bg'>ADMIN</h1>
    </section>
    <section class='admin'>
        <div class="view-admin">
            <a href="tambah.php" class='button-admin'>Input Data</a><br><br>
            <form action="" method='post'>
                <table>
                    <tr>
                        <td><a href="admin.php" class='button-admin'>Kembali</a></td>
                        <td><input class="register-form-element" type="text" name="keyword" placeholder="Cari Data..." required></td>
                        <td><button class='button-admin' type='submit' name='cari'>Cari Data</button></td>
                    </tr>                
                </table>    
            </form>
            <table class="view-table" border=1px>
                <tr>
                    <th>NO</th>
                    <th>Foto Karyawan</th>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Input Time</th>
                    <th>Action</th>
                </tr>
                <?php $i = 1; foreach ($customer as $opc):?>
                <tr>
                    <td><?php echo $i ;?></td>
                    <td><?php echo "<img src='img/$opc[name_cst]' width='50' height='50'>";?></td>
                    <td><?php echo $opc["name_cst"]; ?></td>
                    <td><?php echo $opc["phone_number_cst"] ;?></td>
                    <td><?php echo $opc["address_cst"] ;?></td>
                    <td><?php echo $opc["email_cst"] ;?></td>
                    <td><?php echo $opc["waktu_input"] ;?></td>
                    <td><a href="edit.php?id=<?php echo $opc["id"]; ?>">Edit</a> 
                    | <a href="hapus.php?id=<?php echo $opc["id"]; ?>" onclick = "return confirm('And yakin ingin mengahpus data ini ?')">Hapus</a></td>
                </tr>
                <?php $i++; endforeach;?>
            </table>
        </div>
    </section>
    <script type='text/javascript' src='script.js'></script>
</body>