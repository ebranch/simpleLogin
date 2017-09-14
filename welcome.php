<?php
   include('session.php');
?>
<!DOCTYPE html>
</html>

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

          <h1>Welcome <?php echo $login_session; ?></h1>
          <h2><a href = "logout.php">Sign Out</a></h2>
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
