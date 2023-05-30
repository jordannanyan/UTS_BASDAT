<?php
    include('../../conf/config.php');
    $nama =  $_GET['nama'];
    $username =  $_GET['username'];
    $password =  $_GET['password'];

    $query = mysqli_query($koneksi,"INSERT INTO admin (username,password,nama) VALUES('$username','$password','$nama')");
    header('Location: ../index.php?page=data-admin');
?>