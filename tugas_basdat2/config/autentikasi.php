<?php
include ('configurasi.php');
$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($koneksi,"SELECT * FROM login WHERE username = '$username' AND password='$password'");
if(mysqli_num_rows($query)==1){
    header('Location:../application/index.php'); 
    $user = mysqli_fetch_array($query);
    $_SESSION['nama'] = $user['nama'];
    $_SESSION['level'] = 'Admin';
}
else{
    header('<Location:../index.php?error=1'); 
}
?>