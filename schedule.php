<?php

session_start();

include 'dbh.php';

//$userId = isset($_GET['id']) ? mysqli_real_escape_string($conn,$_GET['id']) : mysqli_real_escape_string($conn,$_SESSION['id']);

date_default_timezone_set('Asia/Kolkata');//setting the timezone

if(isset($_SESSION['id'])){
	$userId=$_SESSION['id'];
	?>
	<html>
	<head>
		<title>Today's Schedule</title>
		<link rel="stylesheet" type="text/css" href="da.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script type="text/javascript" src="general.js"></script>
    	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
	</head>
	<body>
		<div class="backgrndimg">
			<div class="f">
				<div class="t2">
					<h1>Today's Schedule</h1>
					<p><?php echo date('d-m-Y'); ?></p>

					<?php
					$datetime= date('Y-m-d');
					$sql="SELECT * FROM ms_schedule_table WHERE datetime='$datetime'";
					$result=mysqli_query($conn,$sql);
					
					$isThereAnEntry=false;

					$bf=true;
					$lu=true;
					$sn=true;
					$dn=true;
					$med=true;

					while($row=mysqli_fetch_assoc($result))
					{
						if($row['eventType']==0)
						{
							$bf=false;//means its already present
						}
						if($row['eventType']==1)
						{
							$lu=false;
						}
						if($row['eventType']==2)
						{
							$sn=false;
						}
						if($row['eventType']==3)
						{
							$dn=false;
						}
						if($row['eventType']==4)
						{
							$med=false;
						}
						//$isThereAnEntry=true;
					}

					if($bf==true)
					{
						?>
						<form class="breakfastForm">
							<input type="hidden" name="datetime" value="<?php echo date('Y-m-d'); ?>">
							<button class="b" style="cursor:pointer" type="submit">Breakfast</button>
						</form>
						<p id="bf" style="display:none">Breakfast Taken!</p>
						<?php
						$isThereAnEntry=true;
					}
					if($lu==true)
					{
						?>
						<form class="lunchForm">
							<input type="hidden" name="datetime" value="<?php echo date('Y-m-d'); ?>">
							<button class="b1" style="cursor:pointer" type="submit">Lunch</button>
						</form>
						<p id="lu" style="display:none">Lunch Taken!</p>
						<?php
						$isThereAnEntry=true;
					}
					if($sn==true)
					{
						?>
						<form class="snacksForm">
							<input type="hidden" name="datetime" value="<?php echo date('Y-m-d'); ?>">
							<button class="b2" style="cursor:pointer" type="submit">Snacks</button>
						</form>
						<p id="sn" style="display:none">Snacks Taken!</p>
						<?php
						$isThereAnEntry=true;
					}
					if($dn==true)
					{
						?>
						<form class="dinnerForm">
							<input type="hidden" name="datetime" value="<?php echo date('Y-m-d'); ?>">
							<button class="b3" style="cursor:pointer" type="submit">Dinner</button>
						</form>
						<p id="dn" style="display:none">Dinner Taken!</p>
						<?php
						$isThereAnEntry=true;
					}
					if($med==true)
					{
						?>
						<form class="medicationForm">
							<input type="hidden" name="datetime" value="<?php echo date('Y-m-d'); ?>">
							<button class="b4" style="cursor:pointer" type="submit">Medication</button>
						</form>
						<p id="med" style="display:none">Medicines Taken!</p>
						<?php
						$isThereAnEntry=true;
					}	


					if($isThereAnEntry==false)
					{
						?>
						<p>All entries for today are done!</p>
						<?php
					}
					?>
				</div>
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