
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../favicon.ico">
    <script src="../me_js/me.js"></script>
    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <form class="form-signin" >
        <h2 class="form-signin-heading">Please sign in</h2>
        <input type="text" id="inputUser"  class="form-control" placeholder="User Name" required autofocus>
        <label for="inputPass" class="sr-only">Password</label>
        <input type="password" id="inputPass" class="form-control" placeholder="Password" required>
        <p  id="alerg" class="succes" style="color:red; font-size:18px;"></p>
        <button name="submit" onclick="checking()" type="button" class="btn btn-lg btn-primary btn-block">Sign in</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  </body>
</html>
