<?php

include("config.php");

if( !isset($_POST['id']) ){

    // ambil id dari query string
    $id = $_POST['id'];
    echo $id;
    // buat query hapus
    $sql = 'DELETE FROM users WHERE id=$id';
    $conn->exec($sql);
    $q = $conn->query($sql);
    echo "Record deleted successfully";
    // apakah query hapus berhasil?
    /*if( $q ){
        header('Location: profile.php');
    } else {
        die("gagal menghapus...");
    }*/

} else {
    die("akses dilarang...");
}

?>