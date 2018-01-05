<?php 
include_once 'connect.php';
include_once 'functions.php';
include_once "paging.php";
?>
<!DOCTYPE html>
<html >
	<head>
    <meta charset="UTF-8">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- jQuery library -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<?php
	if(loggedIn()){
?>
		<title>Admin Panel — TFARA</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/adminstyle.css">
    <link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
    <script type="text/javascript" src="js/ajax_baba_plugin.js"></script>
    <script type="text/javascript" src="js/admin.js"></script>
    <script type="text/javascript" src="js/aside.js"></script>
    <script type="text/javascript" src="js/footer_button.js"></script>
    <script src="dist/sweetalert.min.js"></script> 

<?php
	}
	else{
?>
 		<title>Login — TFARA</title>
    <link rel="stylesheet" href="css/style.css">
<?php
	}
?>

  </head>
  <body>

<?php
	if(loggedIn()){
		if(isset($_GET['nav']) && !empty($_GET['nav'])){
			if($_GET['nav']=='new'){
				include_once 'new_post.php';
			}
			elseif($_GET['nav']=='allpost'){
				include_once 'all_post.php';
			}
			elseif($_GET['nav']=='published_post'){
				include_once 'published_post.php';
			}
			elseif($_GET['nav']=='draft_post'){
				include_once 'draft_post.php';
			}
			elseif($_GET['nav']=='setting'){
				include_once 'setting_page.php';
			}
			elseif($_GET['nav']=='edit'){
				include_once 'edit_post.php';
			}	
			else{
				header('location: index.php');
			}
		}
		else{
			include_once 'face.php';
		}
		
		
	}
	else{
	  include_once 'login.php';
	}
?>
	</body>
</html>
