<?php

session_start();

include 'dbh.php';

//ini_set('max_execution_time', 300); //setting the maximum execution time for mail sending

$response="";
$obtainID=0;//user id initialization
//if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['pwd'])){
if($_POST['name']!="" && $_POST['email']!="" && $_POST['pwd']!="" && $_POST['phone'] && $_POST['e_phone_1'] && $_POST['e_phone_2'] && $_POST['e_email_1'] && $_POST['e_email_2']){
	$name=mysqli_real_escape_string($conn,$_POST['name']);
	$email=mysqli_real_escape_string($conn,$_POST['email']);
	$pwd=mysqli_real_escape_string($conn,$_POST['pwd']);
	$phone=mysqli_real_escape_string($conn,$_POST['phone']);
	$e_phone_1=mysqli_real_escape_string($conn,$_POST['e_phone_1']);
	$e_phone_2=mysqli_real_escape_string($conn,$_POST['e_phone_2']);
	$e_email_1=mysqli_real_escape_string($conn,$_POST['e_email_1']);
	$e_email_2=mysqli_real_escape_string($conn,$_POST['e_email_2']);

	//seeing if the same username is already present
	//$sql1="SELECT username FROM memberstable WHERE username='$username'";
	//$result1=mysqli_query($conn,$sql1);
	
	$stmt= $conn->prepare("SELECT email FROM memberstable WHERE email=?");
	$stmt-> bind_param("s",$EMAIL);
	$EMAIL=$email;
	$stmt->execute();
	$result1=$stmt->get_result();

	if($row=mysqli_fetch_assoc($result1)){
		//same username already present of another user
		
		//echo '<script language="javascript">alert("signin error")</script>';
		//header("LOCATION: signup.php");
		$response="signup email error";
	}
	else{
		
		
		//inserting data into memberstable
		/*$sql="INSERT INTO memberstable (name, email, pwd, phone, e_phone_1, e_phone_2, e_email_1, e_email_2) VALUES (?,?,?,?,?,?,?,?)";
		$stmt= $conn->prepare($sql);
		$stmt-> bind_param("ssssssss",$NAME,$EMAIL,$PWD,$PHONE,$EP1,$EP2,$EE1,$EE2);
		$NAME=$name;
		$EMAIL=$email;
		$PWD=$pwd;
		$PHONE=$phone;
		$EP1=$e_phone_1;
		$EP2=$e_phone_2;
		$EE1=$e_email_1;
		$EE2=$e_email_2;
		$stmt->execute();
		$result=$stmt->get_result();
		echo $email;*/
		/*echo $name.'<br>'.$email.'<br>'.$pwd.'<br>'.$phone.'<br>'.$e_phone_1.'<br>'.$e_phone_2.'<br>'.$e_email_1.'<br>'.$e_email_2;
		echo '<br><br>';*/
		$sql="INSERT INTO memberstable (name, email, pwd, user_phone, e_phone_1, e_phone_2, e_email_1, e_email_2) VALUES ('$name','$email','$pwd','$phone','$e_phone_1','$e_phone_2','$e_email_1','$e_email_2')";
		$result=mysqli_query($conn,$sql);
		//$result=mysqli_query($conn,$sql);
		//declaring session variable
		/*$_SESSION['profilePictureLocation']=$profilePictureLocation;
		$_SESSION['memesUploaded']=0;
		$_SESSION['numberofSubscribers']=0;
		$_SESSION['numberOfQuestionsAsked']=0;*/
		//getting the id from the last query
		$obtainID=mysqli_insert_id($conn);
		//initialsing session variable 'id'
		$_SESSION['id']=$obtainID;
			

			//redirecting to the appropriate page if signup successful
			/*if($redirect==true){

				//mailing the welcome email
				$emailId=$email;

				$to      = $emailId;
				$subject = 'Welcome to MEAGL!';
				$message = '
<html>
<body>
<img src="http://www.meagl.com/logo/m_2.png" style="width:100%; height:auto;"><br>
<pre style="font-size:17px">

Hi '.$username.'!

Welcome to Meagl.com – the social platform dedicated completely to memes! You can now have fun viewing your friends’ memes along with memes from other amazing creators by subscribing to them!

You can even form groups with your friends and share memes that are relevant only to you.

Your recommended feed shows memes that are personalized for your interests! This means you shall be shown the best memes from all over the world along with your friends’!

What’s more is that we also have a meme developers’ forum where you can post an idea and our wonderful community will help you to create a hilarious meme out of it!

You can contact us for any queries or send any feedback or suggestions you might have at: support@meagl.com

Hope you have fun Meagl-ing! ;P 
</pre> 
							
</body>
</html>';
										
				$headers = 'From: SOS4SEIORS <sharvai101@gmail.com>' . "\r\n" .
				    'Reply-To: sharvai101@gmail.com' . "\r\n" .
				    'X-Mailer: PHP/' . phpversion()."\r\n";
				$headers.="Content-Type: text/html; charset=ISO-8859-1\r\n";

				mail($to, $subject, $message, $headers);

				if(isset($lastpage)){
					$response=htmlentities($lastpage);
				}
				else{
					//$response='userprofile.php?id='.$obtainID;
					$response="editPersonalInfo.php";
				}
			}
		}*/
		
		$response="success";
	}
}
else{
	$response="not all filled";
}
echo $response;