<?php
       $studentname = $_POST['studentname'];
       $username = $_POST['username'];
       $institutename = $_POST['institutename'];
       $departmentname = $_POST['departmentname']; 
       $emailid = $_POST['emailid'];
       $contactno = $_POST['contactno'];
       $password = $_POST['password'];

      //Database connection

     $conn = new mysqli('localhost','root','','grievance-system');
     if($conn->connect_error)  {
             die(' Connection Failed! : ' .$conn->connect_error);
     }
     else  {
            $stmt = $conn->prepare("insert into student(username, studentname, institutename, departmentname, emailid, contactno, password)values(?,?,?,?,?,?,?)");
            $stmt->bind_param("sssssis",$username, $studentname, $institutename, $departmentname, $emailid, $contactno, $password) ;
            $stmt->execute();
            echo "Registration done Successfully...";
            $stmt->close();
            $conn->close();
     }
?>