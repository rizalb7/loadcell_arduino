<?php 
include('lib.php');
if(isset($_POST['username']) && isset($_POST['password'])){
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $nama=$_POST['nama'];
    $query="INSERT INTO user(username,password,nama,level_id) 
    values('$username','$password','$nama','2')";
    if(mysqli_query(koneksi(),$query)){
        echo "<script>
        alert('Berhasil Menambahkan User');
        window.location.href='index.php?r=login';
    </script>";
    }
}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>DAFTAR</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/floating-labels/">

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/floating-labels.css" rel="stylesheet">
  </head>

  <body>
    <form class="form-signin"  method="POST" action="">
      <div class="text-center mb-4">
        <img class="mb-4" src="assets/img/logo.png" alt="" width="144" height="144">
        <h1 class="h3 mb-3 font-weight-normal">DAFTAR</h1>
      </div>
      <div class="form-label-group">
        <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required autofocus>
        <label for="inputName">Nama Lengkap</label>
      </div>
      <div class="form-label-group">
        <input type="email" name="username" class="form-control" placeholder="Email address" required >
        <label for="inputEmail">Email address</label>
      </div>
      <div class="form-label-group">
        <input type="password"  name="password" class="form-control" placeholder="Password" required>
        <label for="inputPassword">Password</label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
      <p class="mt-5 mb-3 text-muted text-center">&copy; 2020 - Rizal Baihaqi</p>
    </form>

  </body>
</html>
