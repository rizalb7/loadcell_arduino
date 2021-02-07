<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>LOGIN</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/floating-labels/">

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/floating-labels.css" rel="stylesheet">
  </head>

  <body>
    <form class="form-signin"  method="POST" action="do_login.php">
      <div class="text-center mb-4">
        <h1 class="h3 mb-3 font-weight-normal">LOGIN</h1>
      </div>
      <div class="form-group">
        <label for="username">Email address</label>
        <input type="email" name="username" class="form-control" placeholder="Email address" required autofocus>
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password"  name="password" class="form-control" placeholder="Password" required>
      </div>

      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    <!-- <a href='daftar.php' class='btn btn-success'>Tambah</a> -->
      <p class="mt-5 mb-3 text-muted text-center">&copy; 2021 - Load Cell</p>
    </form>

  </body>
</html>
