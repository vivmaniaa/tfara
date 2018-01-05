<?php
// Script and tutorial written by Adam Khoury @ developphp.com
// Line by line explanation : youtube.com/watch?v=T2QFNu_mivw
include("db.php");
include("functions.php");

if(isset($_GET['bid'])){
	
	$idno= $_GET['bid'];
	// this first query just to get the position of the 'bid'
	$sql3 = "SELECT COUNT(bid) FROM blog WHERE bid >= $idno AND post_status =  'published'";
	$query3 = mysql_query( $sql3);
	$row3 = mysql_fetch_row($query3);
	// Here we have the total row count
	$bidPosition = $row3[0];
	// This is the number of results per page
	$lmt = 10;
	$divPosition = fmod($bidPosition, $lmt);
	/* 
	if $divPostition = 1 — First div of the page.
	if $divPostition = 2 — second div of the page.
	if $divPostition = 3 — thirds div of the page.
	.
	.
	.
	.
	.
	so on...
	but if $divPostition = 0 — 4th/10th/last div of the page.*/
	$pagen = ceil($bidPosition/$lmt);

	divAdd($pagen, $divPosition); // call function

}

// The query below is just to get the total count of rows
$sql1 = "SELECT COUNT(bid) FROM blog WHERE post_status =  'published'";
$query1 = mysql_query( $sql1);

$row1 = mysql_fetch_row($query1);
// Here we have the total row count
$rows1 = $row1[0];
// This is the number of results we want displayed per page
$page_rows = 10;
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
     header('Location: '.$_SERVER['PHP_SELF'].'?Page='.$pagenum);
			ob_end_flush();
} else if ($pagenum > $last) { 
    $pagenum = $last; 
    header('Location: '.$_SERVER['PHP_SELF'].'?Page='.$last);
			ob_end_flush();
}
// This sets the range of rows to query for the chosen $pagenum
$limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;
// This is your query again, it is for grabbing just one page worth of rows by applying $limit
$sql = "SELECT * FROM blog WHERE post_status='published' ORDER BY bid desc $limit";
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
		$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?Page='.$previous.'">Previous</a> &nbsp; &nbsp; ';
		// Render clickable number links that should appear on the left of the target page number
		/*for($i = $pagenum-4; $i < $pagenum; $i++){
			if($i > 0){
		        $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?Page='.$i.'">'.$i.'</a> &nbsp; ';
			}
	    }*/
    }
	// Render the target page number, but without it being a link
	//$paginationCtrls .= ''.$pagenum.' &nbsp; ';
	// Render clickable number links that should appear on the right of the target page number
	/*for($i = $pagenum+1; $i <= $last; $i++){
		$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?Page='.$i.'">'.$i.'</a> &nbsp; ';
		if($i >= $pagenum+4){
			break;
		}
	}*/
	// This does the same as above, only checking if we are on the last page, and then generating the "Next"
    if ($pagenum != $last) {
        $next = $pagenum + 1;
        $paginationCtrls .= ' &nbsp; &nbsp; <a style="float: right;" href="'.$_SERVER['PHP_SELF'].'?Page='.$next.'">Next</a> ';
    }
}
$list = '';


$sqli = "SELECT COUNT(bid) FROM blog WHERE post_status =  'published'";
	$queryi = mysql_query( $sqli);
	$rowi = mysql_fetch_row($queryi);
	$totalfacts = $rowi[0];

while($row=mysql_fetch_array($query))

	{
	$id = $row['bid'];
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


	/*$id = $row['bid'];
	$imga = $row['image'];
	$head = $row['heading'];
	$shead = $row['subheading'];
	$hstyle = $row['hStyle'];
	$pstyle = $row['pStyle'];
	$divimage = $row['divimage'];
	$imagestyle = $row['imagestyle'];
	$imgalt = $row['imgalt'];
	$imageatr = $row['imageatr'];
	$hattr = $row['hattr'];
	$pattr = $row['pattr'];*/


	$sqli = "SELECT COUNT(bid) FROM blog   WHERE bid >= $id AND post_status =  'published'";
	$queryi = mysql_query( $sqli);
	$rowi = mysql_fetch_row($queryi);
	$factdesc = $rowi[0];
	//$factnumber = $totalfacts - $factdesc +1;
	$factnumber = $factdesc; // hide this if you unhide the above line

/*---indiv_content setter start---*/
	if($name_image_div1 != "")
		{
			$indiv1_content = '<img '.$attribute_image_div1.'  src="images/'.$name_image_div1.'" alt="'.$alt_image_div1.'"   style="'.$style_image_div1.'" class="'.$class_image_div1.'" ';
		}
	else
		{
			$indiv1_content = $text_div1;
		}
	
	if($name_image_div2 != "")
		{
			$indiv2_content = '<img  '.$attribute_image_div2.' src="images/'.$name_image_div2.'" alt="'.$alt_image_div2.'"   style="'.$style_image_div2.'" class="'.$class_image_div2.'" ';
		}
	else
		{
			$indiv2_content = $text_div2;
		}
	
	if($name_image_div3 != "")
		{
			$indiv3_content = '<img   '.$attribute_image_div3.'  src="images/'.$name_image_div3.'" alt="'.$alt_image_div3.'" style="'.$style_image_div3.'" class="'.$class_image_div3.'" ';
		}
	else
		{
			$indiv3_content = $text_div3;
		}
	
	if($name_image_div4 != "")
		{
			$indiv4_content = '<img  '.$attribute_image_div4.' src="images/'.$name_image_div4.'" alt="'.$alt_image_div4.'"   style="'.$style_image_div4.'" class="'.$class_image_div4.'" ';
		}
	else
		{
			$indiv4_content = $text_div4;
		}
	
	if($name_image_div5 != "")	
		{
			$indiv5_content = '<img  '.$attribute_image_div5.' src="images/'.$name_image_div5.'" alt="'.$alt_image_div5.'"   style="'.$style_image_div5.'" class="'.$class_image_div5.'" ';
		}
	else
		{
			$indiv5_content = $text_div5;
		}
	
	if($name_image_div6 != "")
		{
			$indiv6_content = '<img  '.$attribute_image_div6.' src="images/'.$name_image_div6.'" alt="'.$alt_image_div6.'"   style="'.$style_image_div6.'" class="'.$class_image_div6.'" ';
		}
	else
		{
			$indiv6_content = $text_div6;
		}
	
	if($name_image_div7 != "")
		{
			$indiv7_content = '<img  '.$attribute_image_div7.' src="images/'.$name_image_div7.'" alt="'.$alt_image_div7.'"   style="'.$style_image_div7.'" class="'.$class_image_div7.'" ';
		}
	else
		{
			$indiv7_content = $text_div7;
		}
	
	if($name_image_div8 != "")
		{
			$indiv8_content = '<img  '.$attribute_image_div8.' src="images/'.$name_image_div8.'" alt="'.$alt_image_div8.'"   style="'.$style_image_div8.'" class="'.$class_image_div8.'" ';
		}
	else
		{
			$indiv8_content = $text_div8;
		}
	
	if($name_image_div9 != "")
		{
			$indiv9_content = '<img  '.$attribute_image_div9.' src="images/'.$name_image_div9.'" alt="'.$alt_image_div9.'"   style="'.$style_image_div9.'" class="'.$class_image_div9.'" ';
		}
	else
		{
			$indiv9_content = $text_div9;
		}
	
	if($name_image_div10 != "")	
		{
			$indiv10_content = '<img  '.$attribute_image_div10.' src="images/'.$name_image_div10.'" alt="'.$alt_image_div10.'"   style="'.$style_image_div10.'" class="'.$class_image_div10.'" ';
		}
	else
		{
			$indiv10_content = $text_div10;
		}
/*---indiv_content setter end---*/

	$imga= ""; //images/v6.jpg
	$head = "om shanti";

	$list .= '<div id="div'. $id.'" class="fact wow animated fadeIn dark" style=" position:	relative;  background-image: url(\''.$imga.'\');   background-size: 100% 100%; background-position: center center; font-size: 100%">			                    	    
		<div class="fact_no" style="position: absolute; color:#ffbb00; font-size: 0.7em; z-index: 1001;">FACT #'.$factnumber.'</div>
		
		<header>
	<div id="'.$id.'outdiv1" '.$attribute_o_div1.' class="'.$class_o_div1.'" style="'.$style_o_div1.'">
		<div id="'.$id.'indiv1" '.$attribute_i_div1.' class="'.$class_i_div1.'" style="'.$style_i_div1.'">
			'.$indiv1_content.'
		</div>
	</div>
	
	<div id="'.$id.'outdiv2" '.$attribute_o_div2.' class="'.$class_o_div2.'" style="'.$style_o_div2.'">
		<div id="'.$id.'indiv2" '.$attribute_i_div2.' class="'.$class_i_div2.'" style="'.$style_i_div2.'">
			'.$indiv2_content.'
		</div>
	</div>

	<div id="'.$id.'outdiv3" '.$attribute_o_div3.' class="'.$class_o_div3.'" style="'.$style_o_div3.'">
		<div id="'.$id.'indiv3" '.$attribute_i_div3.' class="'.$class_i_div3.'" style="'.$style_i_div3.'">
			'.$indiv3_content.'
		</div>
	</div>

	<div id="'.$id.'outdiv4" '.$attribute_o_div4.' class="'.$class_o_div4.'" style="'.$style_o_div4.'">
		<div id="'.$id.'indiv4" '.$attribute_i_div4.' class="'.$class_i_div4.'" style="'.$style_i_div4.'">
			'.$indiv4_content.'
		</div>
	</div>

	<div id="'.$id.'outdiv5" '.$attribute_o_div5.' class="'.$class_o_div5.'" style="'.$style_o_div5.'">
		<div id="'.$id.'indiv5" '.$attribute_i_div5.' class="'.$class_i_div5.'" style="'.$style_i_div5.'">
			'.$indiv5_content.'
		</div>
	</div>
	
	<div id="'.$id.'outdiv6" '.$attribute_o_div6.' class="'.$class_o_div6.'" style="'.$style_o_div6.'">
		<div id="'.$id.'indiv6" '.$attribute_i_div6.' class="'.$class_i_div6.'" style="'.$style_i_div6.'">
			'.$indiv6_content.'
		</div>
	</div>

	<div id="'.$id.'outdiv7" '.$attribute_o_div7.' class="'.$class_o_div7.'" style="'.$style_o_div7.'">
		<div id="'.$id.'indiv7" '.$attribute_i_div7.' class="'.$class_i_div7.'" style="'.$style_i_div7.'">
			'.$indiv7_content.'
		</div>
	</div>

	<div id="'.$id.'outdiv8" '.$attribute_o_div8.' class="'.$class_o_div8.'" style="'.$style_o_div8.'">
		<div id="'.$id.'indiv8" '.$attribute_i_div8.' class="'.$class_i_div8.'" style="'.$style_i_div8.'">
			'.$indiv8_content.'
		</div>
	</div>

	<div id="'.$id.'outdiv9" '.$attribute_o_div9.' class="'.$class_o_div9.'" style="'.$style_o_div9.'">
		<div id="'.$id.'indiv9" '.$attribute_i_div9.' class="'.$class_i_div9.'" style="'.$style_i_div9.'">
			'.$indiv9_content.'
		</div>
	</div>

	<div id="'.$id.'outdiv10" '.$attribute_o_div10.' class="'.$class_o_div10.'" style="'.$style_o_div10.'">
		<div id="'.$id.'indiv10" '.$attribute_i_div10.' class="'.$class_i_div10.'" style="'.$style_i_div10.'">
			'.$indiv10_content.'
		</div>
	</div>
</header>
		
		
		<div class="md-col-12 col-xs-12 col-sm-12 bgColorFooter">

			<div class="col-md-6 col-xs-6 col-sm-6 text-left ">
				<div class="factSource">
					<div class="wow animated bounce" data-wow-delay="10s" data-wow-offset="10" data-wow-iteration="3"><span class="st_facebook_hcount" st_url="http://www.testslider.co.nf/post.php?postid='.$id.'" st_title="'.$head.'"></span>
					</div>
				</div>
			</div>

			<div class="col-md-6 col-xs-6 col-sm-6 text-right">
				<div class="fb-like" data-href="http://www.testslider.co.nf/post.php?postid='.$id.'" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true">
				</div>
			</div>
		</div>

		<nav class="nav-roundslide style">
			<a class="prev buttonprev" href="">
				<span class="icon-wrap"><svg class="icon"  viewBox="0 0 64 64"><use xlink:href="#arrow-left-4"></svg></span>
				<h3>Previous Fact</h3>
			</a>
			<a class="next buttonnext" href="">
				<span class="icon-wrap"><svg class="icon"  viewBox="0 0 64 64"><use xlink:href="#arrow-right-4"></svg></span>
				<h3>Next Fact</h3>
			</a>
		</nav>
		
</div>';

	
			
	}	

// Close your database connection
mysql_close();

//#566475
?>