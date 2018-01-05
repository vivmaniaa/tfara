<?php

include("db.php");
$sql1 = "SELECT COUNT(bid) FROM blog WHERE post_status =  'published'";
$query1 = mysql_query( $sql1);

$row1 = mysql_fetch_row($query1);
// Here we have the total row count
$rows1 = $row1[0];
// This is the number of results we want displayed per page
$page_rows = 10;
// This tells us the page number of our last page
$last = ceil($rows1/$page_rows);

/*$sql2 = "SELECT COUNT(bid) FROM blog WHERE bid< $_GET['']"*/



// This makes sure $last cannot be less than 1
if($last < 1){
	$last = 1;
}
// Establish the $pagenum variable
$pagenum = 1;
// Get pagenum from URL vars if it is present, else it is = 1
if(isset($_GET['Page'])){
	$pagenum = preg_replace('#[^0-9]#', '', $_GET['Page']);
}
// This makes sure the page number isn't below 1, or more than our $last page
if ($pagenum < 1) { 
    $pagenum = 1; 
} else if ($pagenum > $last) { 
    $pagenum = $last; 
}
if($last != 1){
	if ($pagenum > 1){
        $previous = $pagenum - 1;
    }
	
    if ($pagenum != $last){
        $next = $pagenum + 1;
    }
}
if($pagenum == $last){
	$next= 1;
}
if($pagenum==1){
	$previous=1;
}

if(isset($_GET['flag'])){
	
	$flag = $_GET['flag'];

	if ($flag == 'yes')
	{
		$URL = '/tafara/secondjquerytest.php?Page='.$next;
		

	}
	if ($flag == 'cool')
	{
		$URL = '/tafara/secondjquerytest.php?Pd=10&Page='.$previous;
		
	}
}
echo $URL;


?>