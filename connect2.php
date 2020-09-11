<?php
       $username = $_POST['username'];
       $institutename = $_POST['institutename'];
       $emailid = $_POST['emailid'];
       $password = $_POST['password'];

      //Database connection

     $conn = new mysqli('localhost','root','','grievance-system');
     if($conn->connect_error)  {
             die(' Connection Failed! : ' .$conn->connect_error);
     }
     else  {
            $stmt = $conn->prepare("insert into committee(username, institutename, emailid, password)values(?,?,?,?)");
            $stmt->bind_param("ssss",$username, $institutename, $emailid, $password) ;
            $stmt->execute();
            echo "Registration done Successfully...";
            $stmt->close();
            $conn->close();
     }
?>