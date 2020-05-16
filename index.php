<?php
    session_start();

    if(isset($_SESSION['userid'])!="")
    {
    header("Location: welcome.php");
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="styles/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="styles/main.css" rel="stylesheet">
    <link href='styles/signin.css' rel='stylesheet'>
    
  </head>

  <body class="text-center">
    <form class="form-signin" action="login.js" type="POST">
      <h1 class="h3 mb-3 font-weight-normal">Sign in to continue</h1>
      <label for="inputEmail" class="sr-only">Email Address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email Address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        <p class="error-message"></p>
    </form>
    <script src="scripts/jquery-3.3.1.js"></script>
    <script src="scripts/login.js"></script>
      
  </body>
</html>




        