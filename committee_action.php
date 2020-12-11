<?php
    session_start();
    include('connection.php');    
    $username = strip_tags($_POST['username']);
    $institutename = strip_tags($_POST['institutename']);
    $emailid = strip_tags($_POST['emailid']);
    $password = strip_tags($_POST['password']);

    $q = "select * from committee where username = '$username' ";
    $result = mysqli_query($con , $q);
    $num = mysqli_num_rows($result);
    if($num == 1)
    {  
        $_SESSION['msgtype'] = "error";
        $_SESSION['msg'] = "Please try other username";
        header('location:committee.php');
    }
    else  
    {
      $sql = "insert into committee (username, institutename, emailid, password) values ('".$username."','". $institutename."','".$emailid."','".$password."')";
      if (mysqli_query($con, $sql)) 
      {
        $_SESSION['msgtype'] = "success";
        $_SESSION['msg'] = "Registered Successfully.Please Login to continue.";
        header('location:login.php');
      }
      else
      {
        $_SESSION['msgtype'] = "error";
        $_SESSION['msg'] = "Registration failed";
        header('location:committee.php');
      }
    }
?>