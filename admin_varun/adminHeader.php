<?php
error_reporting(1);
session_start();
if($_SESSION['INFO'] ["userName"])
{
$userName=$_SESSION['INFO'] ["userName"];
$name=$_SESSION['INFO'] ["name"];
$regCode=$_SESSION['INFO'] ["code"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bootstrap Example</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="admin.css">
<style>
	
</style>
</head>
<body>
<div class="row" style="background-color:#252525; color:#fff;">
	<div class="container">
		<div class="col-lg-9">
			<div class="logo">
				<h1>TFARA</h1>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="notification">
				<p><?php echo $userName;  ?> | Setting | <a href="logout.php">Logout</a></p>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="emptyrow">

	</div>
</div>
<?php 
	} 
	else{
			header("Location:login.php");
		}
?>