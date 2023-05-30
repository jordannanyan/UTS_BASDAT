<?php
    include('../../conf/config.php');
    $username = $_POST['username'];
    $nama =  $_POST['nama'];
    $password =  $_POST['password'];

    $query = mysqli_query($koneksi,"UPDATE admin SET username='$username', password='$password', nama='$nama'  WHERE username='$username'");
    header('Location: ../index.php?page=data-admin');
?>