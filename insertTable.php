<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "web_db";

    $connect = mysqli_connect ($hostname, $username, $password, $database);

    if ($connect) {
        echo "Koneksi ke MySQL berhasil <br>";
    } else {
        echo "Koneksi ke MySQL gagal". mysqli_connect_error();
    }

    $query = "INSERT INTO user (id, username, pasword) 
                        VALUES (NULL, 'admin', MD5('123'))";

    if (mysqli_query($connect, $query)) {
        echo "Data baru berhasil dibuat";
    } else {
        echo "Data baru gagal dibuat <br>". mysqli_error($connect);
    }
    mysqli_close($connect);
?>