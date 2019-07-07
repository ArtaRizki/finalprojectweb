<?php
    require_once("auth.php");
    include("config.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">
    --><link rel="stylesheet" type="text/css" media="screen" href="css/main.css">
    <script src="main.js"></script>
</head>
<body>
    <div class="formedit">
        <div class="editprofil">
            Edit Profil Anda 
        </div>
        <div class="registerlink">
            Klik di kotak isian untuk mengedit form
        </div>
        <div class="login">
            <div class="login2">
            <?php
                $sql = 'SELECT * FROM users';
                $q = $conn->query($sql);
                $q->setFetchMode(PDO::FETCH_ASSOC);
                while($row = $q->fetch()) {
            ?>
                <br><br>
                <form action="update.php" method="post">
                    
                    <p style="text-align: left"><?php echo"User ke-"; echo $row['id']; ?></p>
                    <p>Nama</p><input class="username" type="text" name="name" placeholder="<?php echo $row["name"] ?>">
                    <p>Username</p><input class="username" type="text" name="username" placeholder="<?php echo $row["username"] ?>">
                    <p>Email</p><input class="username" type="text" name="email" placeholder="<?php echo $row["email"] ?>">
                    <p>Password</p><input class="password" type="password" name="password" placeholder="Masukkan Password Baru Anda">
                    <div class="tombolupdate">
                        <input type="submit" class="update" name="update" value="Perbarui">
                        <input type="submit" href="hapus.php?id=<?php echo $row['id'];?>" class="update" name="id" value="Hapus">
                        <a href="timeline.php" class="back">Kembali</a>
                    </div>
                </form>
                <?php } ?>   
            </div>
        </div>
    </div>
</body>
</html>