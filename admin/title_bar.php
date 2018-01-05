<div>
<?php
if(loggedIn()){
	?>
	<?php if($_SERVER['PHP_SELF']!='/tafara/admin/profile.php'){?><a href="profile.php" style="text-decoration: none; color: white; ">Profile</a> | <?php } ?>
	<a href="logout.php" style="text-decoration: none; color: white; ">Log Out</a>
<?php 
}
else{
?>
<?php if($_SERVER['PHP_SELF']!='/tafara/admin/login.php'){?>	<a href="login.php" style="text-decoration: none; color: white; ">Login</a>  | <?php } ?>
<?php if($_SERVER['PHP_SELF']!='/tafara/admin/register.php'){?>	<a href="register.php" style="text-decoration: none; color: white; ">Creat an account.</a> <?php } ?>
<?php
}
?>
</div>
