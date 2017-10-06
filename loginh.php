<?php

session_start();

include 'dbh.php';

//ini_set('max_execution_time', 300); //setting the maximum execution time for mail sending

$response="";

if($_POST['email']!="" && $_POST['pwd']!=""){

	$email=mysqli_real_escape_string($conn,$_POST['email']);
	$pwd=mysqli_real_escape_string($conn,$_POST['pwd']);
	
	$sql="SELECT id,email,pwd FROM memberstable WHERE email='$email' AND pwd='$pwd'";
	$result=mysqli_query($conn,$sql);

	if($row=mysqli_fetch_assoc($result)){
		$response=$row['id'];
		$_SESSION['id']=$row['id'];
	}
	else
	{
		$response="wrong input";
	}
}
else{
	$response="not all filled";
}
echo $response;