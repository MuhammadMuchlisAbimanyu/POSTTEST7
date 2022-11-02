<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
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
                    <li><a href='index.html'>HOME</a></li>
                    <li><a href='about.html'>ABOUT</a></li>
                    <li><a href='menu.html'>MENU</a></li>
                    <li><a href='contact.html'>CONTACT</a></li>
                    <li><img src='image/moon.png' id='icon'></li>
                </ul>
            </div>
        </nav>
        <h1 class='title-brown-bg'>ORDER</h1>
    </section>
    <section class='order'>
        <div class="wrapper">
            <div class="title">
              Order Receipt
            </div>
            <?php
            $name = $_POST['name'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $phoneNumber = $_POST['phoneNumber'];
            $note = $_POST['note'];
            ?>
            <div>
                <table class="table">
                    <tr>
                        <td>Name</td>
                        <td>:</td>
                        <td>
                            <?php
                            echo $name . "<br>";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>:</td>
                        <td>
                            <?php
                            echo $address . "<br>";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Email Address</td>
                        <td>:</td>
                        <td>
                            <?php
                            echo $email . "<br>";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Phone Number</td>
                        <td>:</td>
                        <td>
                            <?php
                            echo $phoneNumber . "<br>";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Note</td>
                        <td>:</td>
                        <td>
                            <?php
                                if($note == NULL){
                                    echo "- <br>";
                                }else{
                                    echo $note . "<br>";
                                }
                            ?>
                        </td>
                    </tr>
                </table>
                </div>
            <div class="button-order">
                <a href="index.html" class="button-receipt">Close</a>
            </div>
            </div>

        </div>
    </section>
    <section class='footer'>
        <h1>@Copyright 2022 - by Muhammad Muchlis Abimanyu</h1>
    </section>
    <script type='text/javascript' src='script.js'></script>
</body>