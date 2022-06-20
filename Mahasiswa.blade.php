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
  <body> <br>
  <!-- HEADER -->
  <div class="container-fluid">
        <div class="row ">
            <div class="col-lg-12  py-4 bg-info" >
            <div class="dropdown float-right">
              <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
              <i class="bi bi-person-circle"></i>User
            </button>
         <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton2">
            <a class="dropdown-item active" href="#">Chatharina Arisandi </a></li>
            <a class="dropdown-item" href="/user">Data Pengguna</a></li>
            <a class="dropdown-item" href="/logout">Close</a></li>
        </div>
        </div>
    </div>
</div>
        <!-- BODY  -->
        <div class="row border">
            <div class="col-lg-3 border text-info py-5" >
                <div class="nav flex-column nav-pills" role="tablist" ariaorientation="vertical">
                    <a class="nav-link bg-light text-dark rounded-0 p-2 border  " href="/home">Home</a>
                    <a class="nav-link bg-info text-dark rounded-0 p-2 border active" href="/mahasiswa">Mahasiswa</a>
                    <!-- <a class="nav-link bg-light text-dark rounded-0 p-2 border " href="/dosen">Dosen</a> -->
                    <a class="nav-link bg-light text-dark rounded-0 p-2 border" href="/user">Pengaturan</a>
                </div>
              </div>
            <div class="col-lg-9 border text-info py-5 " >
              <!-- <div class="card mt-4"> -->
                <div class="card-header">
                 <a name="" class="btn btn-primary" href="/mahasiswa/form" role="button"><i class="bi bi-file-earmark-plus"></i> ADD MAHASISWA</a>
                  <!-- <button class="btn btn-primary" class="float-right" type="submit"  action="/form"><i class="bi bi-file-earmark-plus"> ADD MAHASISWA </i></button> -->
                    <form class="form-inline my-2 my-lg-0 float-right" method="GET" action="/mahasiswa/cari">
                        <input class="form-control mr-sm-2 " name="cari" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-primary my-sm-0" class="text-center" type="submit" >Search</button>
                    </form>
                </div>
                <div class="card-body">
                  @if(session('alert'))
                <div class="alert alert-warning" alert-dismissible fade show role="alert">
                <strong>{{ session('alert') }}</strong> 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>
                @endif
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nim</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Alamat</th>
                            <th scope="col"> Aksi </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mahasiswa as $no => $mhs)
                        <tr>
                            <th scope="row">{{ $mahasiswa->firstItem() + $no }} </th>
                            <td> {{$mhs->nim}}</td>
                            <td> {{$mhs->nama}}</td>
                            <td> {{$mhs->jurusan}}</td>
                            <td> {{$mhs->alamat}}</td>
                            <td>
                              <a href="/mahasiswa/editmahasiswa/{{ $mhs -> id }}" class="btb btn-outline-success"><i class="bi bi-pencil-square"></i></a>
                              <a href="/mahasiswa/deletemahasiswa/{{ $mhs -> id }}" class="btb btn-outline-danger" onclick="return confirm('Yakin akan menghapus data ini ?')"><i class="bi bi-trash3"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
               </table>
               <span class="float-right">{{ $mahasiswa->Links()}}</span>
            </div>
        </div>
        <!-- FOOTER  -->
        <div class="row ">
            <div class="col-lg-12 border bg-info text-center text-white py-2" >
                <h1> FOOTER </h1>
              </div>
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
  </body>
</html>