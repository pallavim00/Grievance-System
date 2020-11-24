<?php 
session_start();
include('connection.php');


if(isset($_POST['formAction']) && $_POST['formAction'] == "submit_vote")
{
    $student_name = $_SESSION['username'];
    $id_query = (int)$_POST['id_query'];

    
    $sql = "select * from query_upvotes where student_username  = '".$student_name."' and id_query  = ".$id_query;  
      
    $result = mysqli_query($con, $sql);  
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $numrows = mysqli_num_rows($result);

    if($numrows > 0)
    {
        $_SESSION['msgtype'] = "error";
        $_SESSION['msg'] = "Query has already been liked by you";
        header("location:outlook.php");
        die;
    }

    $sql2 = "INSERT INTO query_upvotes (id_query, student_username)values(".$id_query.", '".$student_name."')";
    if (mysqli_query($con, $sql2)) 
    {
        $_SESSION['msgtype'] = "success";
        $_SESSION['msg'] = "Your query has been upvoted";
    } 
    else 
    {
        $_SESSION['msgtype'] = "error";
        $_SESSION['msg'] = "Some error occured while voting query";
        // echo "Error: " . $sql . "<br>" . mysqli_error($con);
        // die;
    }
    header("location:outlook.php");
    die;
}   

die;
?>