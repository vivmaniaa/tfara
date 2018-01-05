

<?php 
include_once "connect.php";
include_once "functions.php";
if(loggedIn()){

	header('location: index.php');
 }
else{ ?>
	
  	<?php include 'connect.php'; ?>
  	<?php include_once 'functions.php'; ?>
  	

    <div class="wrapper">
	<div class="container">
		<h1>Log in</h1>
		
		<form class="form" method="post">
			<?php 
			
			if(isset($_POST['submit'])){
				$username= $_POST['username'];
				$password= md5($_POST['password']);
				if(empty($username) or empty($password)){
					echo '<h4>Please fill both the fields below.</h4>';
				}
				else{
					$check_login = mysql_query("SELECT user_id, type FROM users WHERE username='$username'and password='$password'");

					if(mysql_num_rows($check_login) == 1){
						$run = mysql_fetch_array($check_login);
						$user_id = $run['user_id'];
						$type = $run['type'];
						
						if($type == 'd'){
							echo "Your account is deactivated! Please contact site admin to activate your account.";
						}
						else{
								$_SESSION['user_id'] = $user_id;
								header('location: index.php'); 
						}
					}
					else{
						echo "username or password is incorrect";
					}
				}
			}

			?>
			<input type="text" name ="username"  placeholder="Username" onfocus="this.placeholder = 'Enter your username.'" onblur="this.placeholder = '*Username can\'t be blank.'"/>
			<input type="password" name="password" placeholder="Password" onfocus="this.placeholder = 'Enter your password.	'" onblur="this.placeholder = '*Password can\'t be blank.'">
			<button type="submit" name="submit" nameid="login-button">Log In</button>
			<br><br><?php include 'title_bar.php'; ?>
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
<?php }
if($_SERVER['PHP_SELF']== '/tafara/admin/login.php'){
	header('location: index.php');
}
?>