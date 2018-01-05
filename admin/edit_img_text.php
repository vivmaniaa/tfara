<?php
include_once "connect.php";

if(!isset($_GET['flag'])){
	$bid = $_GET['id'];
	$column = $_GET['column'];

	$query = mysql_query("SELECT $column FROM blog WHERE bid=$bid");
	$row=mysql_fetch_array($query);
	$list = array('text' => $row["$column"]);


	echo json_encode($list);
}
else{
	$bid = $_GET['id'];
	$column = $_GET['column'];

	$query = mysql_query("SELECT $column FROM blog WHERE bid=$bid");
	$row=mysql_fetch_array($query);
	/*$list = array('name' => $row[0], 'alt' => $row[1], 'attribute' => $row[2], 'style' => $row[3], 'class' => $row[4],);*/
	$list['name'] = $row[0];
	$list['alt'] = $row[1];
	$list['attribute'] = $row[2];
	$list['style'] = $row[3];
	$list['class'] = $row[4];


	echo json_encode($list);
}

?>