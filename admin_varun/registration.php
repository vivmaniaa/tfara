	<?php
	error_reporting(1);
	
	include 'ipaddress.php';

	$userName=$_POST['userName'];
	$password=$_POST['password'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];

	include'config.php';

	if(isset($_POST['sub']))
		{
			if($userName=="" || $password=="" || $name=="" || $email=="" || $contact=="")
				{
					$msg="empty field found";
				}
			else
			{

				$query="insert into registration(date, ipAddress, userName, password, name, email, contact) values(now(),'$ipaddress','$userName','$password','$name','$email','$contact')";
				// echo $query;
				$inserted=mysql_query($query);

				if($inserted)
					{
						$msg="successfully posted!";		
					}
				else
					{
						echo  mysql_error();
					}

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
							<div class="row">
								<?php echo $msg; ?>
							</div>
							<div class="row marginZero">
								<div class="col-md-4 col-sm-4 col-xs-3 hr">
								</div>
								<div class="col-md-4 col-sm-4 col-xs-6 text-center">
								<h5>Sign-Up</h5> 
								</div>
								<div class="col-md-4 col-sm-4 col-xs-3 hr">
								</div>							
							</div>
							<br/>		
				
							<form class="form" action="" method="POST">
								<div class="form-group">
								    <input type="text" class="form-control" id="userName" name="userName" placeholder="User Name">
								</div>
								<div class="form-group">
								    <input type="password" class="form-control" id="password" name="password" placeholder="password">
								</div>
								<div class="form-group">
								    <input type="text" class="form-control" id="name" name="name" placeholder="Name">
								</div>
								
								<div class="form-group">
								    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
								</div>
								<div class="form-group">
								    <input type="tel" class="form-control" id="contact" name="contact" placeholder="Contact">
								</div>
								<div class="form-group">
									<div style="float:left; padding:10px;">
									<a href="login.php">Login?</a>
									</div>
									<div style="float:right;">
									<input type="submit" class="btn btn-info btn-md" name="sub"  value="Create an account">
								</div>
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