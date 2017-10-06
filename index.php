<?php

session_start();

include 'dbh.php';


if(!isset($_SESSION['id'])){
	//$userId=$_SESSION['id'];
	?>
	<html>
	<head>
		<title>Index</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script type="text/javascript" src="general.js"></script>
    	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
	</head>
	<body>
		<h1>Senior's Online Security</h1>

		<a href="signup.php">Sign up</a>
		<a href="login.php">Login</a>

	</body>
	</html>
	<?php
}
else
{
	if(isset($_SESSION['id']))
	{
		header('Location: userprofile.php?id='.$_SESSION['id']);
	}
	else
	{
		//header('Location: index.php');
	}
}