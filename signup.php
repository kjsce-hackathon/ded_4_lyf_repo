<?php 

	session_start();
	//$session_value=(isset($_SESSION['id']))?$_SESSION['id']:'';//gets the session id if it is set
	//$current_page=$_SERVER['REQUEST_URI'];//gets the current page url
	//echo $current_page;
    //<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/jquery-ui.min.js"></script>

?>
<html>
<head>
    <link rel="stylesheet" href="font/flaticon.css"></link>
	<title>Sign Up</title>
    <meta http-equiv="pragma" content="no-cache" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" type="text/css" href="style.css">
    
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>    


    <!--<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>-->
    <script type="text/javascript">
		//var sessionId="<?php echo $session_value;?>";
		//var currentPage="<?php echo $current_page;?>";
	</script>
	<script type="text/javascript" src="general.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
</head>

<body>	
<?php
if(!isset($_SESSION['id']))
{
?>
<div class="background-image">

	<div class="signup">

		<h1>New User? Sign Up.</h1>
		<form class="signupForm" action="" method="POST">
			<p class="prompt-style">Full Name<span style="color:red">*</span>:</p>
			<input type="text" name="name" class="" style="font-size:18px;"><br>
			<p class="prompt-style">Email<span style="color:red">*</span>:</p>
			<input type="text" name="email" class="" style="font-size:18px;"><br>		
			<p class="prompt-style">Password<span style="color:red">*</span>:</p>
			<input type="password" name="pwd" class="" style="font-size:18px;"><br>
			<p class="prompt-style">Phone Number<span style="color:red">*</span>:</p>
			<input type="text" name="phone" class="" style="font-size:18px;"><br>
			<p class="prompt-style">Emergency Phone Number 1<span style="color:red">*</span>:</p>
			<input type="text" name="e_phone_1" class="" style="font-size:18px;"><br>
			<p class="prompt-style">Emergency Phone Number 2<span style="color:red">*</span>:</p>
			<input type="text" name="e_phone_2" class="" style="font-size:18px;"><br>
			<p class="prompt-style">Emergency Email 1<span style="color:red">*</span>:</p>
			<input type="text" name="e_email_1" class="" style="font-size:18px;"><br>
			<p class="prompt-style">Emergency Email 2<span style="color:red">*</span>:</p>
			<input type="text" name="e_email_2" class="" style="font-size:18px;"><br>	
			<?php 
			/*if(isset($_GET['lastpage'])){
				$lastpage=$_GET['lastpage'];
				//echo $lastpage;
				echo '<input type="hidden" name="lastpage" value="'.htmlentities($lastpage).'"></input>';//passing the lastpage
			}*/
			?>
			<button class="btn" id="signupbutton" type="submit">Sign up</button>
		</form>
		<p id="signInError" style="color:white"></p>
	</div>
</div>
<?php
}
else{	
	//echo "eii";
	//echo '<script language="javascript">alert("userprofile la challa")</script>';
	header("LOCATION: userprofile.php?id=".htmlentities($_SESSION['id']));		
}
?>
</body>
</html>