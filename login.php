<?php
   error_reporting(E_ALL);

   include_once("config.php");
   session_start();


   if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);

      $sql =("SELECT username, password FROM login WHERE username='$myusername' and password='$mypassword'");
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

      $count = mysqli_num_rows($result);
      $active = $row['active'];
      // If result matched $myusername and $mypassword, table row must be 1 row

      if ($count == 1) {
        $_SESSION['login_user'] = $myusername;

// echo " <pre>";
// print_r($_SESSION);
// die();

        if (isset($_SESSION['login_user'])) {
             header("location: welcome.php"); // If user has successfully logged in they will be directed to the welcome page
        } else {
             $error = "Your Login Name or Password is invalid"; // Sorry you can't go pass go because incorrect credentials
        }
   }
 }
?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Scheduler | Login/Sign up</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/global.css" rel="stylesheet" >
    <!-- Custom styles for this template -->
    <link href="assets/css/cover.css" rel="stylesheet">
  </head>
  <body>
<!--
    ===========================================================================
    The start of the login screen and functions  required to make it work.
    ===========================================================================

-->
<div class="site-wrapper">

  <div class="site-wrapper-inner">

    <div class="cover-container">

      <div class="masthead clearfix">
        <div class="inner">
          <h3 class="masthead-brand">MyTime</h3>
          <nav>
            <ul class="nav masthead-nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#">Features</a></li>
              <li><a href="#">Contact</a></li>
            </ul>
          </nav>
        </div>
      </div>

      <div class="container">

            <form action = "" method = "post" class="form-signin">
              <h2 class="form-signin-heading">Please sign in</h2>
              <label for="inputEmail" class="sr-only">Username</label>
              <input type="text" id="inputEmail" class="form-control" placeholder="user id" name="username"required autofocus>
              <label for="inputPassword" class="sr-only">Password</label>
              <input type="password" id="inputPassword" class="form-control" placeholder="Password"  name="password"required>
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me"> Remember me
                </label>
              </div>
              <input name="submit" type="submit" value="Login"> <input name="reset" type="reset" value="reset">
            </form>

          </div> <!-- /container -->


      <div class="mastfoot">
        <div class="inner">
          <p>Scheduler App <a href="http://branchoutstudios.com">Branch Out Studios</a>, by <a href="https://ebranchonline.com">@pixel</a>.</p>
        </div>
      </div>

    </div>

  </div>

</div>  <!--
      ===========================================================================
      This is the end of the login screen and functions  required to make it work.
      ===========================================================================

  -->

  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
  <script src="assets/js/bootstrap.min.js"></script>


   </body>
</html>
