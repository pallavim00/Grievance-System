<?php
    include('connection.php');
    // include_once 'connection.php';
     
    if(isset($_POST['submit_btn']) && $_POST['submit_btn'] == "post_form")
    {
        $level = $_POST['level'];
        $query_title = strip_tags($_POST['query_title']);
        $description = strip_tags($_POST['description']);
        $current_college = (int)$_SESSION['id_college'];

        $sql = "INSERT INTO query_post (level, query_title, description, id_college)values('".$level."', '".$query_title."', '".$description."',".$current_college.")";
        if (mysqli_query($con, $sql)) 
        {
            $_SESSION['msgtype'] = "success";
            $_SESSION['msg'] = "Query posted successfully";
            // echo "New record created successfully";
        } 
        else 
        {
            $_SESSION['msgtype'] = "error";
            $_SESSION['msg'] = "Some error occured while posting query";
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
            die;
        }
        header("location:post.php");
    }   
?>