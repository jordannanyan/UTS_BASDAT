<!DOCTYPE html>
<html lang="en">

<?php
include_once "../config/configurasi.php"; // Database connection file

// Retrieve data from daftar_transaksi table
$query = "SELECT * FROM daftar_transaksi";
$result= mysqli_query($koneksi,$query);

// HTML head section
include_once "head.php";
?>

<?php
// Dashboard navbar
include_once "navbar.php";
?>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-3">
      <?php include_once "sidebar.php";
      ?>
    </div>
    <div class="col-md-9">
      <div class="content-wrapper">
        <!-- Content header -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </section>

        <!-- Content body -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>ID Transaksi</th>
                        <th>ID Kasir</th>
                        <th>ID Menu</th>
                        <th>Jumlah Pesanan</th>
                        <th>Jumlah Pembayaran</th>
                        <th>Tanggal</th>
                        <th>Pelanggan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      // Loop through the result set and display data in the table
                      while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['id_daftar_transaksi'] . "</td>";
                        echo "<td>" . $row['id_kasir'] . "</td>";
                        echo "<td>" . $row['id_menu'] . "</td>";
                        echo "<td>" . $row['jumlah_pesanan'] . "</td>";
                        echo "<td>" . $row['jumlah_pembayaran'] . "</td>";
                        echo "<td>" . $row['tgl'] . "</td>";
                        echo "<td>" . $row['pelanggan'] . "</td>";
                        echo "</tr>";
                      }
                      ?>
                      <console class="log"></console>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
<?php include_once "footer.php"; ?>

<!-- JavaScript files -->
<?php include_once "scripts.php"; ?>