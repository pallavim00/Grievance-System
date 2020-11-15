<?php
  include('security.php');
  session_start();

  if(isset($_POST['logout_btn']))
  {
    session_destroy();
    unset($_SESSION['username']);
    header("location:login.html");
  }

  if(isset($_POST['submit_btn']))
  {
    include('query_post.php');
  }
  
?>