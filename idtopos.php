<?php 
	include("db.php");
   
   function func1($data){
		$sql = "SELECT COUNT(bid) FROM blog  WHERE bid >= $data";
	$query = mysql_query( $sql);
	$row = mysql_fetch_row($query);
	return $row[0];
    }

    if (isset($_POST['callFunc1'])) {
        echo func1($_POST['callFunc1']);
    }
?>