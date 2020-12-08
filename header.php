<?php 
include('security.php'); 
?>
<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css2.css">
		<link href='https://fonts.googleapis.com/css?family=Zhi Mang Xing' rel='stylesheet'>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>
	<body  class="main">
	<form method="POST" action="connect5.php">
	<br>
	<h1 id="head"> <i class="far fa-comment-dots"></i><b><u>Grievance System</u></b></h1>
	<br>
<div class="menuBar">
		<ul>
			<li class="active"> <i class="fa fa-info" aria-hidden="true"></i><a href="introduction.php" target="_self">Introduction</a></li>
			<li ><i class="fa fa-newspaper-o" aria-hidden="true"></i><a href="" target="_self">SoluBook</a> </li>
			<li ><i class="fa fa-check-square-o" aria-hidden="true"></i><a href="outlook.php" target="_self">Outlook</a></li>
			<li ><i class="fa fa-plus-square" aria-hidden="true"></i><a href="post.php" target="_self">Post</a></li>
			<li ><i class="fa fa-user" aria-hidden="true"></i><a href="">Username</a>		
				<div class="subMenu1">
				<ul>
					<li> <i class="fa fa-address-card-o" aria-hidden="true"></i> <a href=""> Profile</a> </li>
					<li> <i class="fa fa-history" aria-hidden="true"></i> <a href=""> History</a> </li>
                    <li> <i class="fa fa-sign-out"></i><a href="signout.php" target="_self" onclick="return confirm('Are you sure you want to logout?')">Logout</a></li>
				</ul>
				</div></li>

			<li ><i class="fa fa-cog" aria-hidden="true"></i><a href="">Settings</a>
			<div class="subMenu1">
					<ul>
					<li> <i class="fa fa-bell-o" aria-hidden="true"></i> <a href="">Notifications</a> </li>
					<li> <i class="fa fa-user-secret" aria-hidden="true"></i> <a href="">Privacy</a> </li>
					<li> <i class="fa fa-lock" aria-hidden="true"></i> <a href="">Security</a> </li>
					<li> <i class="fa fa-question-circle" aria-hidden="true"></i> <a href="">Help</a> </li>
					</ul>
			</div></li>
			
        </ul>
</div>