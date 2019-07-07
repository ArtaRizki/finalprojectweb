<?php 
    include 'config.php';
    $id = $_POST['id'];
    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    echo $_POST['name'];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    echo $_POST['password'];
    $sql = "UPDATE users SET name='$name', username='$username', email='$email', password='$password' WHERE id='$id'";
    $stmt = $conn->prepare($sql);
    // execute the query
    $stmt->execute();
    $sql = 'SELECT * FROM users';
    $q = $conn->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
    while($row = $q->fetch()) {
        echo "\n";
        echo $row["name"];
        echo $row["email"];
        echo $row["username"];
    }
    //echo $stmt->rowCount() . " records UPDATED successfully";
    //$q = $conn->query($sql);
    header("location:profile.php");

?>