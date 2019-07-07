<?php 
session_start();
require_once("config.php");

if(isset($_POST['login'])){

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM users WHERE username=:username OR email=:email";
    $stmt = $conn->prepare($sql);
    
    // bind parameter ke query
    $params = array(
        ":username" => $username,
        ":email" => $username
    );
    $stmt->execute($params);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    header("Location: timeline.php");
    // jika user terdaftar
    if($user){
        
        // verifikasi password
        if(password_verify($password, $user["password"])){
            // buat Session
            session_start();
            $_SESSION["user"] = $user;
            // login sukses, alihkan ke halaman timeline
            header("Location: timeline.php");
        }
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bergabunglah Bersama Kami!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css">
    <script src="main.js"></script>
</head>
<?php
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
?>
<body>
    <div class="logo">
        <a href="home.html">
        <img alt="TokoHapedia" src="img/realme.png" height="90" width="158">
        </a>
    </div>
    <div class="formlogin">
        <div class="silahkan">
            Silahkan masuk ke dalam akun kamu 
        </div>
        <div class="registerlink">
            Belum Punya akun? Daftar <a href="register.php">di sini</a>
        </div>
        <div class="login">
            <div class="login2">
                <form action="login.php" method="post">
                    <input class="username" type="text" name="username" placeholder="Username/E-mail">
                    <input class="password" type="password" name="password" placeholder="Password">
                <div class="check">
                    <div class="remember">
                        <input type="checkbox" value="1" checked="checked" name="remember_me" id="remember_me" class="">
                        Ingat saya
                    </div>
                    <div class="lupa">
                        <a href="#">Lupa Password?</a>
                    </div>
                </div>
                <div class="tombollogin">
                    <input type="submit" class="tombol" name="login" value="Login">
                    </form>
                </div>        
            </div>
        </div>
    </div>
</body>
</html>