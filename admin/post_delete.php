<?php
include_once "connect.php";
$bid = $_POST['bid'];
mysql_query("DELETE FROM blog WHERE bid='$bid';");

?>