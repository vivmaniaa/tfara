<?php 
include_once "connect.php";
include_once "functions.php";

session_destroy();

header('location: index.php');

?>