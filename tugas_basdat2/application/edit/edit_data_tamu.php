<?php
    $id = $_GET['id'];
    $query = mysqli_query($koneksi,"SELECT * FROM tamu WHERE id='$id'");
    $view = mysqli_fetch_array($query);
?>

<section class="content">
    <div class="container-fluid"></div>
        <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit Data Tamu</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method='post' action='update/update_data_tamu.php'>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name='nama' placeholder="Nama" value="<?php echo $view['nama'];?>">
                        <input type="text" class="form-control" name='id' placeholder="id" value="<?php echo $view['id'];?>" hidden>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Alamat</label>
                        <input type="text" class="form-control" name='alamat' placeholder="Alamat" value="<?php echo $view['alamat'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>No HP</label>
                        <input class="form-control" rows="3" name='no_hp' placeholder="08xxxx" value="<?php echo $view['no_hp'];?>">
                      </div>
                    </div>
                  </div>

                  <!-- input states -->
                  <button type="submit"class="btn btn-sm btn-info">Simpan</button>
                </form>
              </div>
              <!-- /.card-body -->
            </div>
    </div>       
</section>