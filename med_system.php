<?php
session_start();
include 'dbh.php';

ini_set('max_execution_time', 300); //setting the maximum execution time for mail sending

if(isset($_POST['datetime']))
{
	$userId=mysqli_real_escape_string($conn,$_SESSION['id']);
	$datetime=mysqli_real_escape_string($conn,$_POST['datetime']);

	$sql1="INSERT INTO ms_schedule_table (userId,eventType,datetime) VALUES ('$userId',4,'$datetime')";	
	$result1=mysqli_query($conn,$sql1);

	$sql="SELECT e_email_1,e_email_2,name FROM memberstable WHERE id='$userId'";
	$result=mysqli_query($conn,$sql);

	while($row=mysqli_fetch_assoc($result))
	{
		$name=$row['name'];

		//email 1
		$to      = $row['e_email_1'];
		$subject = $name.' has taken their medications!';
		$message = '<html>
					<body>
						'.$name.' has just had their medications!
					</body>
					</html>';
										
		$headers = 'From: sharvai101@gmail.com' . "\r\n" .
		    'Reply-To: sharvai101@gmail.com' . "\r\n" .
		    'X-Mailer: PHP/' . phpversion()."\r\n";
		$headers.="Content-Type: text/html; charset=ISO-8859-1\r\n";

		mail($to, $subject, $message, $headers);

		//email 2
		$to      = $row['e_email_2'];
		$subject = $name.' has taken their medications!';
		$message = '<html>
					<body>
						'.$name.' has just had their medications!
					</body>
					</html>';
										
		$headers = 'From: sharvai101@gmail.com' . "\r\n" .
		    'Reply-To: sharvai101@gmail.com' . "\r\n" .
		    'X-Mailer: PHP/' . phpversion()."\r\n";
		$headers.="Content-Type: text/html; charset=ISO-8859-1\r\n";

		mail($to, $subject, $message, $headers);
	}

	echo 'success';
}