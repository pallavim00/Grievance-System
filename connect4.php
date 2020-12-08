<?php
   include('connection.php');
   include('security.php');
   $username = $_POST['username'];
   $password = $_POST['password'];
   if ($username && $password) 
   {
      $username = stripcslashes($username);  
      $password = stripcslashes($password);  
      $username = mysqli_real_escape_string($con, $username);  
      $password = mysqli_real_escape_string($con, $password);  
   
      $sql = "select * from committee where username = '$username' and password = '$password'";  
      $result = mysqli_query($con, $sql);  
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
      $numrows = mysqli_num_rows($result);
   }

   if($numrows == 1) {  
      header('location: introduction.html');
      //echo "<h1><center> Login successful </center></h1>";
   }  
   else {  
      $_SESSION['message'] = "Incorrect Username/Password.";
      header("location:login.html");
      echo "<script type='text/javascript'>alert('Incorrect Username/Password')</script>";
   }
?>
