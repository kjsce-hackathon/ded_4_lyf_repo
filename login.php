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
	<title>Login</title>
    <meta http-equiv="pragma" content="no-cache" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
     
    
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>    

	<link rel="stylesheet" type="text/css" href="login1.css">
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
	<div class="login">

		<h1 style="width:140px;display:block;margin:0 auto">Login</h1>
		<form class="loginForm" action="" method="POST">
			<p class="prompt-style">Email<span style="color:red">*</span>:</p>
			<input type="text" name="email" class="" style="font-size:18px;"><br>		
			<p class="prompt-style">Password<span style="color:red">*</span>:</p>
			<input type="password" name="pwd" class="" style="font-size:18px;"><br>
			<button class="btn" id="loginbutton" type="submit" style="cursor:pointer">Login</button>
		</form>
		<p id="logInError" style="color:white"></p>
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