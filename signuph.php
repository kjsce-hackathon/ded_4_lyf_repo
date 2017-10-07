<?php

session_start();

include 'dbh.php';

//ini_set('max_execution_time', 300); //setting the maximum execution time for mail sending

$response="";
$obtainID=0;//user id initialization
if($_POST['name']!="" && $_POST['email']!="" && $_POST['pwd']!="" && $_POST['phone'] && $_POST['e_phone_1'] && $_POST['e_phone_2'] && $_POST['e_email_1'] && $_POST['e_email_2']){
	$name=mysqli_real_escape_string($conn,$_POST['name']);
	$email=mysqli_real_escape_string($conn,$_POST['email']);
	$pwd=mysqli_real_escape_string($conn,$_POST['pwd']);
	$phone=mysqli_real_escape_string($conn,$_POST['phone']);
	$e_phone_1=mysqli_real_escape_string($conn,$_POST['e_phone_1']);
	$e_phone_2=mysqli_real_escape_string($conn,$_POST['e_phone_2']);
	$e_email_1=mysqli_real_escape_string($conn,$_POST['e_email_1']);
	$e_email_2=mysqli_real_escape_string($conn,$_POST['e_email_2']);

	
	$stmt= $conn->prepare("SELECT email FROM memberstable WHERE email=?");
	$stmt-> bind_param("s",$EMAIL);
	$EMAIL=$email;
	$stmt->execute();
	$result1=$stmt->get_result();

	if($row=mysqli_fetch_assoc($result1)){
		$response="signup email error";
	}
	else{
		
		$sql="INSERT INTO memberstable (name, email, pwd, user_phone, e_phone_1, e_phone_2, e_email_1, e_email_2) VALUES ('$name','$email','$pwd','$phone','$e_phone_1','$e_phone_2','$e_email_1','$e_email_2')";
		$result=mysqli_query($conn,$sql);
		
		$obtainID=mysqli_insert_id($conn);

		$_SESSION['id']=$obtainID;
					
		$response=$obtainID;
	}
}
else{
	$response="not all filled";
}
echo $response;