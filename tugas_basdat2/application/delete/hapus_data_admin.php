<?php
    include('../../conf/config.php');
    $username =  $_GET['username'];

    $query = mysqli_query($koneksi,"DELETE FROM admin WHERE username='$username'");
    header('Location: ../index.php?page=data-admin');
    
?>