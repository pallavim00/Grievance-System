<?php
    include('connection.php');
    include_once 'connection.php';
    if(isset($_POST['submit_btn']))
    {
        $level = $_POST['level'];
        $query_title = $_POST['query_title'];
        $description = $_POST['description'];
    
        
        $sql = $con->prepare("insert into query_post(level, query_title, description)values(?,?,?)");
        $sql->bind_param("sss",$level, $query_title, $description);
        $sql->execute();        
        if(!mysqli_query($con,$sql))
        {
            echo 'not inserted';
        }
        else
        {
            echo "<script type='text/javascript'>alert('Query has been Posted Successfully.')</script>";
        }
        header("location:post.html");
    }   
?>