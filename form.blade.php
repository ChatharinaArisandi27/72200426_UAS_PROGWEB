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
<form action="/mahasiswa/simpan" method="POST">
@csrf 
  <div class="row border">
  <div class="col-lg-3 border text-info py-5" >
        <div class="nav flex-column nav-pills" role="tablist" ariaorientation="vertical">
            <a class="nav-link bg-light text-dark rounded-0 p-2 border  " href="/">Home</a>
            <a class="nav-link bg-info text-dark rounded-0 p-2 border active" href="/mahasiswa">Mahasiswa</a>
            <a class="nav-link bg-light text-dark rounded-0 p-2 border " href="/dosen">Dosen</a>
            <a class="nav-link bg-light text-dark rounded-0 p-2 border" href="/skripsi">Skripsi</a>
        </div>
  </div>
  <div class="col-lg-9 border text-info py-5" >
      <div class="form-group w-25">
          <label>NIM</label>
          <input type="number" name="nim" class="form-control" placeholder="Masukan Nim">
      </div>
      <div class="form-group w-25">
          <label>Nama</label>
          <input type="text" name="nama" class="form-control" placeholder="Masukan Nama">
      </div>
      <div class="form-group w-25">
          <label>Jurusan</label>
          <input type="text" name="jurusan" class="form-control" placeholder="Masukan Jurusan">
      </div>
      <div class="form-group w-25">
          <label>Alamat</label>
          <input type="text" name="alamat" class="form-control" placeholder="Masukan alamat">
      </div>
      <!-- <label>Gender</label>
      <div class="form-check w-25">
          <input type="radio" name="gender" class="form-check-input" value="Pria" >
          <label>Pria</label>
      </div>
      <div class="form-check w-25">
          <input type="radio" name="gender" class="form-check-input" value="Wanita" >
          <label>Wanita</label>
      </div>
      <div class="form-group w-25">
          <label>Jurusan</label>
          <select name="jurusan" class="form-control">
              <option value="0">-- Pilihan --</option>
              <option value="Sistem Informasi"> Sistem Informasi</option>
              <option value="Informatika">Informatika</option>
      </div>
      <label>Bidang Minat</label>
      <div class="form-check w-25">
          <input type="checkbox" name="bidang[]" class="form-check-input" value="Oracle" >
          <label>Oracle</label>
      </div>
      <div class="form-check w-25">
          <input type="checkbox" name="bidang[]" class="form-check-input" value="MYSQL" >
          <label>MYSQL</label>
      </div>
      <div class="form-check w-25">
          <input type="checkbox" name="bidang[]" class="form-check-input" value="Java" >
          <label>Java</label>
      </div> -->
      <br>
      <div class="form-group" >
          <input type="submit" class="btn btn-outline-primary mt-4" value="SIMPAN" >
          <!-- <a name="" class="btn btn-primary" href="/mahasiswa/simpan" role="button">SIMPAN</a> -->
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