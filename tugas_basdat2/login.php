<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
   <link rel="stylesheet" href="application/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
   <style>
    body, html {
      height: 100%;
    }
    body {
      background-image: url("application/photo/photo.jpg");
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-color: transparent;
    }

    .card {
      background-color: rgba(255, 255, 255, 0.8);
      border: none;
      box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.5);
    }

    .card-header {
      background-color: #333333 !important;
      color: white;
      font-size: 24px;
      font-weight: bold;
      text-align: center;
      border-radius: 0px;
      background-color: #4d4d4d;
    }

    .bg-primary {
      background-color: #333333 !important;
    }

    .form-control {
      border: none;
      border-radius: 0px;
      background-color: transparent;
      box-shadow: none;
      border-bottom: 1px solid #333333;
      font-size: 18px;
      color: #333333;
    }

    .btn-primary {
      background-color: #333333;
      border: none;
      border-radius: 0px;
      box-shadow: none;
    }

    .btn-primary:hover {
      background-color: #4d4d4d;
    }
  </style>
</head>

<body class="hold-transition login-page">

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card mt-5">
        <div class="card-header bg-primary text-white">
          <h3 class="card-title text-center">Sweet Coffee</h3>
        </div>
        <div class="card-body">
          <form action="config/autentikasi.php" method="post">
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" id="username" name="username" placeholder="Username">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="application/plugins/sweetalert2/sweetalert2.min.js"></script>
</body>

<?php
  if(isset($_GET['error'])){
    $x = $_GET['error'];
  
    if($x==1){
      echo "<script>
      var Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      });
      Toast.fire({
        icon: 'error',
        title: 'Login Gagal'
      })
      </script>";
    }
    else if($x==2){
      echo "<script>
      var Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
      });
      Toast.fire({
        icon: 'warning',
        title: 'Silahkan Masukkan Username dan Password'
      })
      </script>";
    }
  }
?>

</html>
