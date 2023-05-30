<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Tabel Data Admin</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
          <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-lg">
                  Tambah Data
          </button>
          <br></br>
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Password</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
                <?php
                  $query = mysqli_query($koneksi, "SELECT * FROM admin");
                  $no = 0;
                  while($admin = mysqli_fetch_array($query)){
                    $no++;
                ?>
              <tr>
                <td width='5%'><?php echo $no?></td>
                <td><?php echo $admin['nama'] ?></td>
                <td><?php echo $admin['username'] ?></td>
                <td><?php echo $admin['password'] ?></td>
                <td>
                  <a onclick="hapus_data('<?php echo $admin['username'];?>')" class="btn btn-sm btn-danger">Hapus</a>
                  <a href="index.php?page=edit-data-admin&& username=<?php echo $admin['username'];?>" class="btn btn-sm btn-success">Edit</a>
                </td>
              </tr>
              <?php } ?>

              </tbody>
              <tfoot>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Username</th>
                <th>Password</th>
                <th>Action</th>
              </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
</section>
<!-- /.content -->

<div class="modal fade" id="modal-lg">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Tambah Data Admin</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="get" action="add/tambah_data_admin.php">
        <div class="modal-body">
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="username" name="username" required>
            </div>
            <div class="col">
              <input type="password" class="form-control" placeholder="password" name="password" required>
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="nama" name="nama" required>
            </div>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
      </div>
    </form>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>

<script>
  function hapus_data(username){
    // alert('ok');
    Swal.fire({
      title: 'Apakah Anda Yakin?',
      // showDenyButton: true,
      showCancelButton: true,
      confirmButtonText: 'Hapus',
      confirmButtonColor: '#CDSCSC',
      cancelButtonText: 'Tidak'
    }).then((result) => {
      /* Read more about isConfirmed, isDenied below */
      if (result.isConfirmed) {
        // Swal.fire('Saved!', '', 'success')
        window.location=("delete/hapus_data_admin.php?username="+username);
      } 
    })
  }
</script>
