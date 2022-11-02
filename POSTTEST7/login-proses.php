<?php 
    session_start();
    
    require ('koneksi.php');
    
    if(isset($_POST['masuk'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $sql = "SELECT * FROM user WHERE username='$username' and password='$password'";
        $result = mysqli_query($conn, $sql);
        
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_assoc($result);
            if($row['role']=="admin"){
                $_SESSION['username'] = $username;
                $_SESSION['role'] = "admin";
                header("Location: admin.php");
            
            }else if($row['role']=="user"){
                $_SESSION['role'] = "user";
                header("Location: user.html");
            }else{
                echo '<script type="text/JavaScript">
                alert("Username atau Password yang anda masukkan salah, silahkan coba lagi...");
                window.Location.href="login.html";
                </script>' ;
                require('login.html');
            }
        }else{
            echo '<script type="text/JavaScript">
            alert("Username atau Password yang anda masukkan salah, silahkan coba lagi...");
            window.Location.href="login.html";
            </script>' ;
            require('login.html');
        }
    }
?>
<!-- //         if($row['role']=="admin"){
//             $_SESSION['username'] = $username;
//             $_SESSION['role'] = "admin";
//             header("Location: admin.html");
     
//         }else if($row['role']=="user"){
//             $_SESSION['username'] = $username;
//             $_SESSION['role'] = "user";
//             header("Location: user.html");
//         }else{
     
//             echo '<script type="text/JavaScript">
            alert("Username atau Password yang anda masukkan salah, silahkan coba lagi...");
            window.Location.href="login.html";
            </script>' ;
            
            
//         }
//     }else{
//         echo '<script type="text/JavaScript">
        alert("Username atau Password yang anda masukkan salah, silahkan coba lagi...");
        window.Location.href="login.html";
        </script>';
//     }
// }

 
// if($result > 0){
 

 
// 	if($row['role']=="admin"){
// 		$_SESSION['username'] = $username;
// 		$_SESSION['role'] = "admin";
// 		header("Location: admin.html");
 
// 	}else if($row['role']=="user"){
// 		$_SESSION['username'] = $username;
// 		$_SESSION['role'] = "user";
// 		header("Location: user.html");
 
// 	}else{
 
//         echo '<script type="text/JavaScript">
        alert("Username atau Password yang anda masukkan salah, silahkan coba lagi...");
        window.Location.href="login.html";
        </script>';
// 	}	
// }else{
//     echo '<script type="text/JavaScript">
    alert("Username atau Password yang anda masukkan salah, silahkan coba lagi...");
    window.Location.href="login.html";
    </script>';
// }

    require('koneksi.php');

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username=='admin' && $password=='admin'){
        header("Location: admin.html");
    }elseif($username=='user' && $password=='user'){
        header("Location: user.html");
    }else{
        echo '<script type="text/JavaScript">
        alert("Username atau Password yang anda masukkan salah, silahkan coba lagi...");
        window.Location.href="login.html";
        </script>';
        // require('login.html');
    }
?> -->