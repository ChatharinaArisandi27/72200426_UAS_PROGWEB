

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.98.0">
    <title>PEMROGRAMAN BERBASIS WEB</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/">

    

    

<link href="https://getbootstrap.com/docs/5.2/dist/css/bootstrap.min.css" rel="stylesheet" 
integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    
 
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/5.2/examples/sign-in/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin w-100 m-auto">
  <form action="/user/ceklogin" method="POST">
      @csrf
    <img class="mb-4" src="https://www.doolinns.com/wp-content/uploads/2019/06/login-logo-png-6.png" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Form Login</h1>

    <div class="form-floating has-feedback">
      <input type="text" name="username" class="form-control" id="floatingInput" placeholder="Masukkan Username" required>
      <label for="floatingInput">Username</label>
      <span class="glyphicon glyphicon-user form-control-feedback"></span>
    </div>
    <div class="form-floating has-feedback">
      <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
      <label for="floatingPassword">Password</label>
      <span class="glyphicon glyphicon-user form-control-feedback"></span>
    </div>


    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <!-- <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p> -->
  </form>
</main>


    
  </body>
</html>
