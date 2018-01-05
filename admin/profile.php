<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Profile — TFARA</title>
        <link rel="stylesheet" href="css/style.css">
  </head>
  <body bgcolor= "#000	">
  	<?php include 'connect.php' ?>
  	<?php include 'functions.php' ?>
	<?php include 'title_bar.php' ?>
			<br><br>
			<p>Welcome <?php echo $c_username.'['.$user_level_name.'] !'?></p>
    
    <?php 
    if($c_user_level ==1 || $c_user_level == 2){
    ?>
    <br><br><a href="admin.php" style="text-decoration: none; color: white;">Admin Panel</a>
    <?php	
    }
    ?>

    
    
    
  </body>
</html>
