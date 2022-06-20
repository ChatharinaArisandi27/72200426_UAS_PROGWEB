<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>{{ config("app.name",'Home')}}</title>
  </head>
  <body> 
<div class="container-fluid mt-4 rounded">
<form action="/user/updateuser" method="POST">
  <div class="row border">
  <div class="col-lg-3 border text-dark  py-5" >
        <div class="nav flex-column nav-pills" role="tablist" ariaorientation="vertical">
            <a class="nav-link bg-light text-dark rounded-0 p-2 border  " href="/home">Home</a>
            <a class="nav-link bg-light text-dark rounded-0 p-2 border " href="/mahasiswa">Mahasiswa</a>
            <!-- <a class="nav-link bg-info text-dark rounded-0 p-2 border active" href="/dosen">Dosen</a> -->
            <a class="nav-link bg-info text-dark rounded-0 p-2 border" href="/user">Pengaturan</a>
        </div>
  </div>
  <div class="col-lg-9 border text-info py-5" >
      <div class="form-group w-25">
          <label><b>Username</b></label>
          <input type="text" name="username" class="form-control" value="{{ $user -> username}}" autofocus required>
      </div>
      <div class="form-group w-25">
          <label><b>Nama User</b></label>
          <input type="text" name="nama" class="form-control" value="{{ $user -> nama}}" required>
      </div>
      <div class="form-group w-25">
          <label><b>Password</b></label>
          <input type="text" name="password" class="form-control" value="{{ $user -> password}}" required>
      </div>
      <div class="form-group" >
          <input type="submit" class="btn btn-outline-primary mt-4" value="SIMPAN" >
      </div>
      
</div>

        

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>