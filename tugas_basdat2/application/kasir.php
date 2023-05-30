<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Buku Tamu</h3>
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
                <th>Alamat</th>
                <th>HP</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
                <?php
                  $query = mysqli_query($koneksi, "SELECT * FROM tamu");
                  $no = 0;
                  while($tamu = mysqli_fetch_array($query)){
                    $no++;
                ?>
              <tr>
                <td width='5%'><?php echo $no?></td>
                <td><?php echo $tamu['nama'] ?></td>
                <td><?php echo $tamu['alamat'] ?></td>
                <td><?php echo $tamu['no_hp'] ?></td>
                <td>
                  <a onclick="hapus_data(<?php echo $tamu['id'];?>)" class="btn btn-sm btn-danger">Hapus</a>
                  <a href="index.php?page=edit-data-tamu&& id=<?php echo $tamu['id'];?>" class="btn btn-sm btn-success">Edit</a>
                </td>
              </tr>
              <?php } ?>

              </tbody>
              <tfoot>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>HP</th>
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
        <h4 class="modal-title">Tambah Data Tamu</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="add/tambah_data_tamu.php">
        <div class="modal-body">
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Nama" name="nama" required>
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Alamat" name="alamat" required>
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="08xxxx" name="no_hp" required>
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
  function hapus_data(data_id){
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
        window.location=("delete/hapus_data_tamu.php?id="+data_id);
      } 
    })
  }
</script>
