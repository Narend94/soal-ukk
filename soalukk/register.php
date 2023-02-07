<?php
    session_start();
        if( isset($_SESSION["nik"])){
            header("location:login.php");
        }
        ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <h1></h1>
    <div class="container text-center">
    <center><h2><label for="exampleFormControlInput1" class="mt-5 text-danger-emphasis form-label">REGISTER</label></h2></center>
  <div class="container text-center w-50 p-3">
  
    <div class="col shadow p-3 mb-5 bg-body-tertiary rounded">
      
    </div>
    <div class="col">
    <form class="row g-3" action="proses_register.php" method="post">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nik</label>
    <input type="text" class="form-control" name="nik" id="inputtext4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Nama</label>
    <input type="text" class="form-control" name="nama"  id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Username</label>
    <input type="text" class="form-control" name="username"  id="inputAddress" placeholder="Username">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="inputAddress2" placeholder="Password">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Telp</label>
    <input type="text" class="form-control" name="telp"  id="inputCity">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Pelayanan</label>
    <select id="inputState" class="form-select">
      <option selected>Petugas</option>
      <option>Masyarakat</option>
    </select>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-danger">Sign in</button>
  </div>
</form>
    </div>
    <div class="col">
      
    </div>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>