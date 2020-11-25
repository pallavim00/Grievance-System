<?php

session_start();

if((isset($_SESSION['username']) && $_SESSION['username'] != ""))
{
    header('location:introduction.php');
}

?>

<!doctype html>
<html>

<head>
    <title>Student Grievance System</title>
    <link rel="stylesheet" type="text/css" href="css1.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
    <div class="div3">
		<h1><b><i>Welcome To The Student Grievance System!</i></b></h1>
		<br>
		<P>If already have an account.</P>
		<p><a href="login.php" target="_self"><button class="button">Login</button></a></p>
		<br>
		<p>To Create an Account...</p>
		<p>
			<a href="signup.php" target="_self"><button class="button"><i>Student</i></button></a>  <a href="Committee.html" target="_self"><button class="button"><i>Committee</i></button></a>
		</p>
		<br>
	</div>
</body>

</html>