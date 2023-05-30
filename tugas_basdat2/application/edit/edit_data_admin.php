<?php
    $username = $_GET['username'];
    $query = mysqli_query($koneksi,"SELECT * FROM admin WHERE username='$username'");
    $view = mysqli_fetch_array($query);
?>

<section class="content">
    <div class="container-fluid"></div>
        <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Edit Data Admin</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form method='post' action='update/update_data_admin.php'>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama</label>
                        <input type="text" class="form-control" name='nama' placeholder="Nama" value="<?php echo $view['nama'];?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class="form-group">
                        <label>Username</label>
                        <input type="text" class="form-control" name='username' placeholder="Username" value="<?php echo $view['username'];?>">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Password</label>
                        <input class="form-control" rows="3" name='password' placeholder="Password" value="<?php echo $view['password'];?>">
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