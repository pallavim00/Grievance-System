<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "grievance-system";

    $conn = mysqli_connect('localhost','root','','grievance-system');

    if($conn) {
        echo "";
    }
    else {
        die("connection failed because ".mysqli_connect_error());
    }
?>  