<?php 
        
           $servername = "localhost";
           $username = "username";
           $password = "password";
           $dbname = "grievance-system";

        //creating connection
        $conn = new mysqli('localhost','root','','grievance-system');

        //checking connection
        if($conn->connect_error)  {
            die(' Connection Failed! : ' .$conn->connect_error);
        }
        else  {
            mysqli_select_db($conn, 'sessionpractical');
            $username = $_POST['username'];
            $password = $_POST['password'];
            $q = "select count(username) from student where username = '$username' && password = '$password'";
            if($q == 0 ) {
               echo "wrong username/password";
            }
            else {
               header('location: introduction.html');
            }
        }   
?>