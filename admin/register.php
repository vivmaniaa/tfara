<?php 
/*include_once 'connect.php';*/
include_once 'functions.php';

function regBody(){?>

<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Register — TFARA</title>
        <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  	<?php include_once 'connect.php'; ?>
  	<?php include_once 'functions.php'; ?>
  	

    <div class="wrapper">
	<div class="container">
		<h1>Register Here</h1>
		
		<form class="form" method="post">
			<?php 
			
			if(isset($_POST['submit'])){
				$username= $_POST['username'];
				$password= md5($_POST['password']);
				$re_password = md5($_POST['re_password']);
				$f_name = $_POST['f_name'];
				$l_name = $_POST['l_name'];
				$email = $_POST['email'];
		
				if($re_password != $password){
					echo "*Password didn't match. please retry.<br><br>";
				}
				else{

					if(empty($username) or empty($password)){
						echo "*Please fill both the fields below.";
					}
					else{
						/*mysql_query("INSERT INTO users VALUES ('', '$username', '$password', '$f_name', '$l_name', '$email', '3', 'd')");*/
						mysql_query("INSERT INTO  users (user_id, username, password, f_name, 
							l_name, email , user_level) VALUES ('', '$username', '$password', 
							'$f_name', '$l_name', '$email', '3')");

						echo "You're  successfully registered!<br><br>";
					}
				}
			}


			?>
			<input type="text" name ="username" placeholder="Username">
			<input type="password" name="password" placeholder="Password">
			<input type="password" name="re_password" placeholder="Re-enter Password">
			<input type="text" name ="f_name" placeholder="First Name">
			<input type="text" name ="l_name" placeholder="Last Name">
			<input type="email" name ="email" placeholder="Email">
			
			<button type="submit" name="submit" nameid="login-button">Register</button>
			<br><br>
			<?php include 'title_bar.php'; ?>
		</form>
		
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="js/index.js"></script>

    
    
    
  </body>
</html>

<?php };

if(!loggedIN()){
	regBody();
}
else{
	header('location: index.php');
}

?>