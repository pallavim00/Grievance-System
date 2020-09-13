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
       $q = "select * from student where username = '$username' ";
       $result = mysqli_query($conn , $q);
       $num = mysqli_num_rows($result);
       if($num == 1){
        echo " pls try other username";
       }
       else  {
           $stmt = $conn->prepare("insert into student(username, studentname, institutename, departmentname, emailid, contactno, password)values(?,?,?,?,?,?,?)");
           $stmt->bind_param("sssssis",$username, $studentname, $institutename, $departmentname, $emailid, $contactno, $password) ;
           $stmt->execute();
           echo "Registration done Successfully...";
           $stmt->close();
           $conn->close();
       }
    }
?>