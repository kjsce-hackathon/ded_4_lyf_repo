<?php

session_start();

include 'dbh.php';


if(!isset($_SESSION['id'])){
	//$userId=$_SESSION['id'];
	?>
	<html>
	<head>
		<title>Index</title>
		<link rel="stylesheet" type="text/css" href="index1.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script type="text/javascript" src="general.js"></script>
    	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
	</head>
	<body>
		<div class="bckgrnd">
			<div class="d">
				<h1 style="width:400px;display:block;margin:0 auto">Senior's Online Security</h1>
				<img class="image" src="SOS 4 Seniors1.png">
				<a class="signup" href="signup.php">Sign up</a>
				<a class="login" href="login.php">Login</a>
			</div>
		</div>
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