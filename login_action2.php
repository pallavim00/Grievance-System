<?php

session_start();
include('connection.php');
include('security.php');
if(isset($_POST['submit']))
{
   $username = $_POST['username'];
   $password = $_POST['password'];
   if ($username && $password) 
   {
      $username = stripcslashes($username);  
      $password = stripcslashes($password);  
      $username = mysqli_real_escape_string($con, $username);  
      $password = mysqli_real_escape_string($con, $password);  
   
      $sql = "select * from committee where username = '".$username."' and password = '".$password."'";  
      
      $result = mysqli_query($con, $sql);  
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
      $numrows = mysqli_num_rows($result);
   }

   if($numrows == 1) {  
      $_SESSION['username'] = $username;
      $_SESSION['id_college'] = $row['id_college'];
      header('location: introduction2.php');
   }  
   else {  
      echo "<script type='text/javascript'>alert('Incorrect Username/Password')</script>";
      include("login.php");
   }
}
   
?>
