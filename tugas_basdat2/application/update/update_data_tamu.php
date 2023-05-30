<?php
    include('../../conf/config.php');
    $id = $_POST['id'];
    $nama =  $_POST['nama'];
    $alamat =  $_POST['alamat'];
    $no_hp =  $_POST['no_hp'];

    $query = mysqli_query($koneksi,"UPDATE tamu SET nama='$nama', alamat='$alamat', no_hp='$no_hp' WHERE id='$id'");
    header('Location: ../index.php?page=buku-tamu');
?>