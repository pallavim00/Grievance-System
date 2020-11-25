<?php
      session_start();
      
         include('connection.php');
       $studentname = strip_tags($_POST['studentname']);
       $username = strip_tags($_POST['username']);
       $id_college = (int)$_POST['institutename'];
       $departmentname = strip_tags($_POST['departmentname']); 
       $emailid = strip_tags($_POST['emailid']);
       $contactno = strip_tags($_POST['contactno']);
       $password = strip_tags($_POST['password']);
  
      //Database connection

      $q = "select * from student where username = '$username' ";
       $result = mysqli_query($con , $q);
       $num = mysqli_num_rows($result);
       if($num == 1){
          
         $_SESSION['msgtype'] = "error";
         $_SESSION['msg'] = "Please try other username";
          header('location:signup.php');
       }
       else  {
         $sql = "insert into student (username, studentname, id_college, departmentname, emailid, contactno, password) values ('".$username."','". $studentname."',". $id_college.",'". $departmentname."', '".$emailid."','". $contactno."', '".$password."')";

         // echo $sql;
         // die;
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
             header('location:signup.php');

         }
         
       }
?>