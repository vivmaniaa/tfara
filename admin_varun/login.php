<?php
session_start(); 

$msg="";

if (isset($_POST['sub'])) 
	{
	
	$userName=$_POST['userName'];
	$password=$_POST['password'];
	
	if($userName==" " || $password==" ") 
		{
		$msg = "empty text box";
		}
	else
		{
		include'config.php';
		
		$query = mysql_query("select * from registration where password='$password' AND userName='$userName'");

		$rows = mysql_num_rows($query);
				
				if($rows == 1) 
					{
						$_SESSION['INFO']=mysql_fetch_array($query);
						header("location:dashboard.php"); 
					} 
				else 
					{
						$msg = "Username or Password is invalid";
					}
				 //echo $_SESSION['INFO']["contact"];
				 //echo $_SESSION['INFO']["full_name"]; 
		}
	}
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
</head>
<body>
	<div class="row" style="background-color:#252525; color:#fff;">
		<div class="container">
			<div class="col-lg-9">
				<div class="logo">
					<h1>TFARA</h1>
				</div>
			</div>
			<!-- <div class="col-lg-3">
				<div class="notification">
					<p>Welcome | Setting | Logout</p>
				</div>
			</div> -->
		</div>
	</div>
	<div class="row">
		<div class="emptyrow">

		</div>
	</div>
	<div class="row">
		<div class="container">
			<div class="col-md-3">

			</div>
			<div class="col-md-6">
				<div class="row bgred">
						<div class="col-md-2 col-sm-2 col-xs-12">							
						</div>
						<div class="col-md-8 col-sm-10 col-xs-12 loginpadding">
							
							<div class="row marginZero">
								<div class="col-md-4 col-sm-4 col-xs-3 hr">
								</div>
								<div class="col-md-4 col-sm-4 col-xs-6 text-center">
								<h5>Login</h5> 
								</div>
								<div class="col-md-4 col-sm-4 col-xs-3 hr">
								</div>							
							</div>
							
							<div class="col-md-12">

								<?php echo $msg; ?>
							</div>
							<br>
							<br/>

				
							<form class="form" action="" method="POST">
								<div class="form-group">
								    <input type="text" name="userName" class="form-control" id="text" placeholder="User Name">
								</div>
								<div class="form-group">
								    <span style="float:right;margin-bottom:5px;"><a href="#">Forgot?</a></span>
								    <input type="password" name="password" class="form-control" id="pwd" placeholder="Password">
								</div>
								<div class="form-group">
									<div style="float:left">
										<div style="float:left; padding:10px;">
											<a href="registration.php">create an account?</a>
										</div>
									</div>
									<div style="float:right;">
										<input type="submit" class="btn btn-info btn-md" name="sub" value="Login">
									</div>
														
									<br>
									
								</div>
							</form>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12">						
						</div>
					</div>
			</div>
			<div class="col-md-3">

			</div>
		</div>
		
	</div>
	<div class="row">
		<div class="col-md-12 text-center">
			<div class="lfooter">
				<p>tafara@gmail.com</p>
			</div>
		</div>
	</div>
</body>
</html>