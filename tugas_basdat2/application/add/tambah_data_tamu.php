<?php
    include('../../config/configurasi.php');
    session_start();
    $id_kasir = $_POST['id_kasir']
    $namak =  $_POST['nama_kasir'];
    $no_hp =  $_POST['no_hp'];
    $gaji =  $_POST['Gaji'];

    $query = mysqli_query($koneksi,"INSERT INTO kasir (id_kasir,nama_kasir,no_hp,gaji) VALUES('','$nama','$alamat','$hp')");
    

?>