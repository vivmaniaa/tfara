<?php
include 'connect.php';
include 'functions.php';

$id = $_GET['id'];
$type = $_GET['type'];
if($type == 'a'){
	mysql_query("UPDATE users SET type='d' WHERE user_id ='$id'");
	header('location: admin.php?order=user_set');
} else if($type == 'd'){
	mysql_query("UPDATE users SET type='a' WHERE user_id ='$id'");
	header('location: admin.php?order=user_set');
}
else{
	header('location: admin.php?order=user_set');
}



?>