<?php
session_start();

if((!isset($_SESSION['username']) && $_SESSION['username'] == "") ||  count($_SESSION) < 1)
{
    header('location:login.php');
}

?>