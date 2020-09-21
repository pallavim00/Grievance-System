<?php
    include('connection.php');
    $host = "localhost";
    $user = "root";
    $password = '';
    $db_name = "grievance-system";
    $con = mysqli_connect($host, $user, $password, $db_name);
    if(!$con)
    {
        echo 'not connected';
    }
        $level = $_POST['level'];
        $query_title = $_POST['query_title'];
        $description = $_POST['description'];
        echo '$query_title';
       
       $sql = "INSERT INTO query_post('level', 'query_title', 'description') values ('$level', '$query_title', '$description')";
       if(!mysqli_query($con,$sql))
       {
           echo 'not inserted';
       }
       else
       {
        echo "<script type='text/javascript'>alert('Query has been Posted Successfully.')</script>";
       }
       header("location:query.html");
?>