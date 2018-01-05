<?php 
include_once 'connect.php';
session_start();
function loggedIn(){
	if( isset($_SESSION['user_id']) && !empty($_SESSION['user_id']))
	{
		return true;
	}
	else{
		return false;
	}
}; 

if(loggedIn()){
	$cuser_id = $_SESSION['user_id'];
	$sql = mysql_query("SELECT username, user_level FROM users WHERE user_id= '$cuser_id'");
	$run_user = mysql_fetch_array($sql);
	$c_username = $run_user['username'];
	$c_user_level = $run_user['user_level'];
	$sql2 = mysql_query("SELECT name FROM user_level WHERE id = '$c_user_level'");
	$user_level = mysql_fetch_array($sql2);
	$user_level_name = $user_level['name'];

}

?>