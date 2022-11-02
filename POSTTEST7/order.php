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
              Order Form
            </div>
            <form action="receipt_order.php" class="form" method="post">
                <!-- <div class="inputfield">
                    <label>Product name</label>
                    <input type="text" class="input" placeholder="Racist Coffe" readonly>
                </div>  -->
                <div class="inputfield">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="input" placeholder="Your name..." required>
                </div>  
                <div class="inputfield">
                    <label for="address">Address</label>
                    <input type="text" name="address" class="input" placeholder="Your address..." required>
                </div>  
                <div class="inputfield">
                    <label for="email">Email Address</label>
                    <input type="text" name="email" class="input" placeholder="Your email address...">
                </div> 
                <div class="inputfield">
                    <label for="phoneNumber">Phone Number</label>
                    <input type="text" name="phoneNumber" class="input" placeholder="Your phone number...">
                </div> 
                <div class="inputfield">
                    <label for="note">Note</label>
                    <textarea class="textarea" name="note" placeholder="Your message..."></textarea>
                    </div>  
                <!-- <div class="inputfield">
                    <label for="total">Total</label>
                    <input type="text" class="input" placeholder="$69" readonly>
                </div>  -->
                <div class="inputfield">
                    <input type="submit" class="button-order" name="submit"  onclick='check()' value="Confirm">
                <!-- <button class="button-purchase" onclick='check()'>Confirm</button> -->
                </div>
            </form>
            </div>
        </div>
    </section>
    <section class='footer'>
        <h1>@Copyright 2022 - by Muhammad Muchlis Abimanyu</h1>
    </section>
    <script type='text/javascript' src='script.js'></script>
</body>