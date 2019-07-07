<?php
session_start();
require_once("config.php");

if(isset($_POST['register'])){

    // filter data yang diinputkan
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    // enkripsi password
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);


    // menyiapkan query
    $sql = "INSERT INTO users (name, username, email, password) 
            VALUES (:name, :username, :email, :password)";
    $stmt = $conn->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":name" => $name,
        ":username" => $username,
        ":password" => $password,
        ":email" => $email
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved) header("Location: login.php");
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
<body>
    <div class="logo">
        <a href="home.html">
        <img alt="TokoHapedia" src="img/realme.png" height="90" width="158">
        </a>
    </div>
    <div class="formlogin">
        <div class="silahkan">
            Daftar akun barumu 
        </div>
        <div class="registerlink">
            Sudah Punya akun? login <a href="#">di sini</a>
        </div>
        <div class="login">
            <div class="login2">
                <form action="register.php" method="post">
                    <input class="username" type="text" name="name" placeholder="Nama Lengkap">
                    <input class="username" type="text" name="username" placeholder="Username Anda di Tokohapedia">
                    <input class="username" type="text" name="email" placeholder="Email atau No HP">
                    <input class="password" type="password" name="password" placeholder="Password">
                <div class="kelamin">
                    <input type="radio" class="cowok">Laki-laki
                    <input type="radio" class="cewek">Perempuan
                </div>
                <div class="setuju">
                    <input type="checkbox" value="1" checked="checked" name="agree" id="agree">
                    Saya telah membaca dan menyetujui Aturan Penggunaan dan Kebijakan Privasi TokoHapedia
                </div>
                <div class="tombollogin">
                    <input type="submit" class="tombol" name="register" value="Daftarkan Sekarang Juga">
                    </form>
                </div>        
            </div>
        </div>
    </div>
</body>
</html>