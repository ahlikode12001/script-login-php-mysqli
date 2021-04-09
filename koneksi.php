  <?php

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "belajar";

    $conn = mysqli_connect($hostname, $username, $password, $dbname);
    if(!$conn){
        echo 'Koneksi Kedatabase gagal!'.mysqli_connect_error();
    }
    ?>