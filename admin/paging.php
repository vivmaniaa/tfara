<?php

// The query below is just to get the total count of rows
if(isset($_GET['nav']) && !empty($_GET['nav'])){
	$nav = $_GET['nav'];
	if($nav == "allpost"){
		$sql1 = "SELECT COUNT(bid) FROM blog";
	}
	else if($nav == "published_post"){
		$sql1 = "SELECT COUNT(bid) FROM blog WHERE post_status='published'";
	}
	else if($nav == "draft_post"){
		$sql1 = "SELECT COUNT(bid) FROM blog WHERE post_status='draft'";
	}
	else{
		$sql1 = "SELECT COUNT(bid) FROM blog";
	}
}
else{
	$sql1 = "SELECT COUNT(bid) FROM blog";
}


$query1 = mysql_query( $sql1);

$row1 = mysql_fetch_row($query1);
// Here we have the total row count
$rows1 = $row1[0];
// This is the number of results we want displayed per page
if(isset($_GET['page_rows']) && !empty($_GET['page_rows']) /*&& is_int($_GET['page_rows'])*/){
$page_rows = preg_replace('#[^0-9]#', '', $_GET['page_rows']);
$pagenum = 0;
}
else{
	$page_rows = 10;
}
// This tells us the page number of our last page
$last = ceil($rows1/$page_rows);
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
// This sets the range of rows to query for the chosen $pagenum
$limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;
// This is your query again, it is for grabbing just one page worth of rows by applying $limit
if(isset($_GET['nav']) && !empty($_GET['nav'])){
	$nav = $_GET['nav'];
	if($nav == "allpost"){
		$sql = "SELECT * FROM blog ORDER BY bid desc $limit";
	}
	else if($nav == "published_post"){
		$sql = "SELECT * FROM blog WHERE post_status='published' ORDER BY bid desc $limit";
	}
	else if($nav == "draft_post"){
		$sql = "SELECT * FROM blog WHERE post_status='draft' ORDER BY bid desc $limit";
	}
	else{
		$sql = "SELECT * FROM blog ORDER BY bid desc $limit";	
	}
}
else{
	$sql = "SELECT * FROM blog ORDER BY bid desc $limit";	
}

$query = mysql_query($sql);
// This shows the user what page they are on, and the total number of pages
/*$textline1 = "Testimonials (<b>$rows</b>)";
$textline2 = "Page <b>$pagenum</b> of 	<b>$last</b>";*/
// Establish the $paginationCtrls variable
$paginationCtrls = '';
// If there is more than 1 page worth of results
if($last != 1){
	/* First we check if we are on page one. If we are then we don't need a link to 
	   the previous page or the first page so we do nothing. If we aren't then we
	   generate links to the first page, and to the previous page. */
	if ($pagenum > 1) {
        $previous = $pagenum - 1;
		$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?nav='.$nav.'&page_rows='.$page_rows.'&Page='.$previous.'">Previous</a> &nbsp; ';
		// Render clickable number links that should appear on the left of the target page number
		/*for($i = $pagenum-4; $i < $pagenum; $i++){
			if($i > 0){
		        $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?Page='.$i.'">'.$i.'</a> &nbsp; ';
			}
	    }*/
    }
	// Render the target page number, but without it being a link
	/*$paginationCtrls .= ''.$pagenum.' &nbsp; ';*/
	// Render clickable number links that should appear on the right of the target page number
	/*for($i = $pagenum+1; $i <= $last; $i++){
		$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?Page='.$i.'">'.$i.'</a> &nbsp; ';
		if($i >= $pagenum+4){
			break;
		}
	}*/
	// This does the same as above, only checking if we are on the last page, and then generating the "Next"
    if(isset($_GET['nav'])){
    	$nav= $_GET['nav'];
    }
    else{
    	$nav= 'allpost';
    }
    if ($pagenum != $last) {
        $next = $pagenum + 1;
        $paginationCtrls .= ' &nbsp; <a style="float: right;" href="'.$_SERVER['PHP_SELF'].'?nav='.$nav.'&page_rows='.$page_rows.'&Page='.$next.'">Next</a> ';
    }
}
$list = '';

$sqli = "SELECT COUNT(bid) FROM blog";
	$queryi = mysql_query( $sqli);
	$rowi = mysql_fetch_row($queryi);
	$totalfacts = $rowi[0];

while($row=mysql_fetch_array($query))

	{
	$id = $row['bid'];
	$date = $row['date'];
	$title = $row['title'];
	$post_status = $row['post_status'];
	$post_by = $row['post_by'];
	$style_o_div1 = $row['style_o_div1'];	$style_o_div2 = $row['style_o_div2'];	$style_o_div3 = $row['style_o_div3'];	$style_o_div4 = $row['style_o_div4'];	$style_o_div5 = $row['style_o_div5'];	$style_o_div6 = $row['style_o_div6'];	$style_o_div7 = $row['style_o_div7'];	$style_o_div8 = $row['style_o_div8'];	$style_o_div9 = $row['style_o_div9'];	$style_o_div10 = $row['style_o_div10'];
	$attribute_o_div1 = $row['attribute_o_div1'];	$attribute_o_div2 = $row['attribute_o_div2'];	$attribute_o_div3 = $row['attribute_o_div3'];	$attribute_o_div4 = $row['attribute_o_div4'];	$attribute_o_div5 = $row['attribute_o_div5'];	$attribute_o_div6 = $row['attribute_o_div6'];	$attribute_o_div7 = $row['attribute_o_div7'];	$attribute_o_div8 = $row['attribute_o_div8'];	$attribute_o_div9 = $row['attribute_o_div9'];	$attribute_o_div10 = $row['attribute_o_div10'];
	$class_o_div1 = $row['class_o_div1'];	$class_o_div2 = $row['class_o_div2'];	$class_o_div3 = $row['class_o_div3'];	$class_o_div4 = $row['class_o_div4'];	$class_o_div5 = $row['class_o_div5'];	$class_o_div6 = $row['class_o_div6'];	$class_o_div7 = $row['class_o_div7'];	$class_o_div8 = $row['class_o_div8'];	$class_o_div9 = $row['class_o_div9'];	$class_o_div10 = $row['class_o_div10'];
	$style_i_div1 = $row['style_i_div1'];	$style_i_div2 = $row['style_i_div2'];	$style_i_div3 = $row['style_i_div3'];	$style_i_div4 = $row['style_i_div4'];	$style_i_div5 = $row['style_i_div5'];	$style_i_div6 = $row['style_i_div6'];	$style_i_div7 = $row['style_i_div7'];	$style_i_div8 = $row['style_i_div8'];	$style_i_div9 = $row['style_i_div9'];	$style_i_div10 = $row['style_i_div10'];
	$attribute_i_div1 = $row['attribute_i_div1'];	$attribute_i_div2 = $row['attribute_i_div2'];	$attribute_i_div3 = $row['attribute_i_div3'];	$attribute_i_div4 = $row['attribute_i_div4'];	$attribute_i_div5 = $row['attribute_i_div5'];	$attribute_i_div6 = $row['attribute_i_div6'];	$attribute_i_div7 = $row['attribute_i_div7'];	$attribute_i_div8 = $row['attribute_i_div8'];	$attribute_i_div9 = $row['attribute_i_div9'];	$attribute_i_div10 = $row['attribute_i_div10'];
	$class_i_div1 = $row['class_i_div1'];	$class_i_div2 = $row['class_i_div2'];	$class_i_div3 = $row['class_i_div3'];	$class_i_div4 = $row['class_i_div4'];	$class_i_div5 = $row['class_i_div5'];	$class_i_div6 = $row['class_i_div6'];	$class_i_div7 = $row['class_i_div7'];	$class_i_div8 = $row['class_i_div8'];	$class_i_div9 = $row['class_i_div9'];	$class_i_div10 = $row['class_i_div10'];
	$text_div1 = $row['text_div1'];	$text_div2 = $row['text_div2'];	$text_div3 = $row['text_div3'];	$text_div4 = $row['text_div4'];	$text_div5 = $row['text_div5'];	$text_div6 = $row['text_div6'];	$text_div7 = $row['text_div7'];	$text_div8 = $row['text_div8'];	$text_div9 = $row['text_div9'];	$text_div10 = $row['text_div10'];
	$name_image_div1 = $row['name_image_div1'];	$name_image_div2 = $row['name_image_div2'];	$name_image_div3 = $row['name_image_div3'];	$name_image_div4 = $row['name_image_div4'];	$name_image_div5 = $row['name_image_div5'];	$name_image_div6 = $row['name_image_div6'];	$name_image_div7 = $row['name_image_div7'];	$name_image_div8 = $row['name_image_div8'];	$name_image_div9 = $row['name_image_div9'];	$name_image_div10 = $row['name_image_div10'];
	$alt_image_div1 = $row['alt_image_div1'];	$alt_image_div2 = $row['alt_image_div2'];	$alt_image_div3 = $row['alt_image_div3'];	$alt_image_div4 = $row['alt_image_div4'];	$alt_image_div5 = $row['alt_image_div5'];	$alt_image_div6 = $row['alt_image_div6'];	$alt_image_div7 = $row['alt_image_div7'];	$alt_image_div8 = $row['alt_image_div8'];	$alt_image_div9 = $row['alt_image_div9'];	$alt_image_div10 = $row['alt_image_div10'];
	$attribute_image_div1 = $row['attribute_image_div1'];	$attribute_image_div2 = $row['attribute_image_div2'];	$attribute_image_div3 = $row['attribute_image_div3'];	$attribute_image_div4 = $row['attribute_image_div4'];	$attribute_image_div5 = $row['attribute_image_div5'];	$attribute_image_div6 = $row['attribute_image_div6'];	$attribute_image_div7 = $row['attribute_image_div7'];	$attribute_image_div8 = $row['attribute_image_div8'];	$attribute_image_div9 = $row['attribute_image_div9'];	$attribute_image_div10 = $row['attribute_image_div10'];
	$style_image_div1 = $row['style_image_div1'];	$style_image_div2 = $row['style_image_div2'];	$style_image_div3 = $row['style_image_div3'];	$style_image_div4 = $row['style_image_div4'];	$style_image_div5 = $row['style_image_div5'];	$style_image_div6 = $row['style_image_div6'];	$style_image_div7 = $row['style_image_div7'];	$style_image_div8 = $row['style_image_div8'];	$style_image_div9 = $row['style_image_div9'];	$style_image_div10 = $row['style_image_div10'];
	$class_image_div1 = $row['class_image_div1'];	$class_image_div2 = $row['class_image_div2'];	$class_image_div3 = $row['class_image_div3'];	$class_image_div4 = $row['class_image_div4'];	$class_image_div5 = $row['class_image_div5'];	$class_image_div6 = $row['class_image_div6'];	$class_image_div7 = $row['class_image_div7'];	$class_image_div8 = $row['class_image_div8'];	$class_image_div9 = $row['class_image_div9'];	$class_image_div10 = $row['class_image_div10'];
	
		

	
//-------------------------------------------------------
	
	$datediff_q = "SELECT DATEDIFF( current_timestamp , '$date' )";
	$querydate = mysql_query( $datediff_q);
	$rowdate = mysql_fetch_row($querydate);
	$datediff = $rowdate[0];

	$active_date = '<span title="'.date('g:i a', strtotime($date)).'"><img class="small-icon" src="../images/bikini60s_calendar.svg"/> '.date('j/n/y', strtotime($date)).'</span>';

	if($datediff == 0){
		$active_date = '<span title="'.date('j/n/y', strtotime($date)).'"><img class="small-icon" src="../images/bikini60s_speed.svg"/> '.date('g:i a', strtotime($date)).'</span>';
	}
	/*if($datediff == 1){
		$active_date = 'Yesterday ('.date('g:i a', strtotime($date)).')';
	}*/
//----------------------------------------------------------
	if($title != ''){ //this is for showing the heading in the admin panel all post
		if(strlen($title) <= 30){
			$head = $title;
		}
		else{
			$head = substr($title, 0, 30).'...';
		}
	}
	else if($text_div1 != '' or $text_div2 != '' or $text_div3 != '' or $text_div4 != '' or $text_div5 != '' or $text_div6 != '' or $text_div7 != '' or $text_div8 != '' or $text_div9 != '' or $text_div10 != '')
	{
		$text_div = $text_div1." ".$text_div2." ".$text_div3." ".$text_div4." ".$text_div5." ".$text_div6." ".$text_div7." ".$text_div8." ".$text_div9." ".$text_div10;
		$text_div = trim(strip_tags($text_div));
		if(strlen($text_div) <= 30){
			$head = $text_div;
		}
		else{
			$head = substr($text_div, 0, 30).'...';
		}
	}
	else{
		$head = "unnamed";
	}

	if($post_by == ''){
		$post_by = 'Unknown';
	}

	$sqli = "SELECT COUNT(bid) FROM blog   WHERE bid >= $id";
	$queryi = mysql_query( $sqli);
	$rowi = mysql_fetch_row($queryi);
	$factdesc = $rowi[0];
	//$factnumber = $totalfacts - $factdesc +1;
	$factnumber = $factdesc; // hide this if you unhide the above line
	if($post_status == 'published'){$poststat = '';}else{$poststat = $post_status;}

	$list .= '<div id="post-'.$id.'" class="post_admin">
      <header>
        <div class="admin_post_title"><a href="#">'.$head.'</a> </div>
        <div class="admin_post_draft">'.ucwords($poststat).'</div>
      </header>
      <footer>
        <div class="admin_post_action"><a class="edit-post">Edit</a> | <a href="../secondjquerytest.php" target="_blank">View</a> | <a class="delete-post" >Delete</a></div>
        <div class="admin_post_date">'.$active_date.'</div>
        <div class="admin_post_by"><img class="small-icon" src="../images/bikini60s_user.svg"/> '.$post_by.' | </div>
      </footer>
    </div>


';
			
	}	

// Close your database connection
mysql_close();
?>