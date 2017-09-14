<?php
session_start();
// echo " <pre>";
//  print_r($_SESSION);
//  die("That's all folks!");

   $user_check = $_SESSION['login_user'];

   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
   }
?>
