<!DOCTYPE html>
<?php
/*// Turn off all error reporting
error_reporting(1);*/

ob_start();
include("pagination.php");


if($_SERVER['REQUEST_URI'] == "/tafara/secondjquerytest.php?Page=")
	{
		header('Location: '.$_SERVER['PHP_SELF'].'?Page=1');
		ob_end_flush();
	}


	?>

<html>
<head>
	<meta charset="UTF-8"> 
	<meta id="metaViewport" name="viewport" content="width=device-width, initial-scale=1">
	<title>TFARA Slides</title>
	
	<link rel="icon" type="image/png" href="images/favicon2.png">

	<link id="animatecss" rel="stylesheet" type="text/css" href="CSS/animate.css">

	<link rel="stylesheet" type="text/css" href="CSS/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="css/slider-navi-normalize.css" /><!-- for navigation button -->
	<link rel="stylesheet" type="text/css" href="css/slider-navi-demo.css" /><!-- for navigation button -->
	<link rel="stylesheet" type="text/css" href="css/slider-navi-component.css" /><!-- for navigation button -->

	<link rel="stylesheet" type="text/css" href="CSS/simpletextrotator.css" />

	<link rel="stylesheet" type="text/css" href="CSS/tfara.css">

	
<!-- fonts -->
	<link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Exo+2:900' rel='stylesheet' type='text/css'> <!-- "TFARA" logo font -->
	<link href='http://fonts.googleapis.com/css?family=Coda:400,800' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Flamenco:300,400' rel='stylesheet' type='text/css'><!-- "Slides" logo font font-family: 'Flamenco', cursive;-->
	<link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'><!-- new "slides" logo font font-family: 'Lobster', cursive;-->
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400italic,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:200' rel='stylesheet' type='text/css'>
<!-- fonts end -->

	<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

	<script type="text/javascript" src="secondjquery.js"></script>
	<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
	<script type="text/javascript"> stLight.options({ publisher:'12345',});</script>
		
	

	
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap.js"></script>

	<script src="js/wow.min.js"></script>	
	<script>
	 new WOW().init();
	</script> 

	<script type="text/javascript" src="js/jquery.simple-text-rotator.js"></script>
		
	<script>
	  $(document).ready(function(){
			$(".logotext .rotate").textrotator({
        animation: "flipCube",
        speed: 6000
      });
	 $(".logosubtext .rotate").textrotator({
        animation: "fade",
        speed: 2000
      });
		});
		
	</script>

		

</head>


<body class="body">	

<div class="svg-wrap">
		<svg width="64" height="64" viewBox="0 0 64 64">
			<path id="arrow-left-4" d="M15.946 48l0.003-10.33 47.411 0.003v-11.37h-47.414l0.003-10.304-15.309 16z" />
		</svg>
		<svg width="64" height="64" viewBox="0 0 64 64">
			<path id="arrow-right-4" d="M48.058 48l-0.003-10.33-47.414 0.003v-11.37h47.418l-0.003-10.304 15.306 16z" />
		</svg>
	</div>

<div id="load_screen"><div id="loading"><div class="loader">Loading...</div><br>Loading Facts...</div></div>
<!-- Your normal document content lives here -->

<!-- landscape alert -->
<div id="outer" class="animated zoomInDown">
		<div id="inner">
			<p>you can turn on landscape mode in your device for the better view.</p>
			<p><img id="landscape_img" src="img/landscape_alert.jpg" ></p>
			<p><div id="alert_OK_button"><p>okay, thanks!</p></div></p>
		</div>
	</div>
<div id="overlay_bg"></div>
<script>/*this is for centering the content inside the landscape alert vertically*/
$(document).ready(function(){
	function landscape_alert_style2(){
		var margin_top = ($('#outer').innerHeight()-$('#inner').outerHeight())/2;
		$('#inner').css({'margin-top': margin_top+'px'})
	};
	landscape_alert_style2();
	$(window).resize(function(){
		landscape_alert_style2();
	});
});
</script>

<!-- end of landscape alert -->

<!-- facebook script starts here -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.3&appId=342646252500316";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- facebook script ends here -->

<!--<img src="http://oi57.tinypic.com/1rb71j.jpg"/>-->
 <header>
		<div class="header">
			<div id="logo" class="ad-logo">
				<h2 class="logotext">
		 			<span id="tfara_logo">TFARA</span><span class="rotate" id="slides_logo">Slides, Slides</span>
				</h2>
			</div>
			<div id="head-ad" class="ad-logo"><!-- Place ad here --></div>
		</div>
	</header>

	
<?php 
		 echo "<div class='divs'>$list</div>"; 
		 
?>
<div class='vickey'>hello world!</div>
<div class='mango'>hello earth</div>
<div class='mango'>hello universe if you can hear me!</div>
<div class='mango'>hello world!</div>
<div class='mango'>hello world!</div>
<div class='mango'>hello world!</div>
<div class='mango'>hello world!</div>
<div class='mango'>hello world!</div>
<div class='mango'>hello world!</div>
<div class='mango'>hello world!</div>
<div class='mango'>hello world!</div>
<div class='mango'>hello world!</div>
<div class='mango'>hello world!</div>
<div class='mango'>hello world!</div>
<div class='mango'>hello world!</div>
<div class='mango'>hello world!</div>



<?php
//echo $chick; // this x is comming from position.php.
//$chick = '<a id="demo1"></a>';

if(isset($_GET['Pd']))
{
	//below line is for setting bitcounter for navigation button to hide
	
	// below code is for showing the right div with respect to its pd value

 	$div_position = preg_replace('([^0-9])', '', $_GET['Pd']);
 	$pagenumber = preg_replace('#[^0-9]#', '', $_GET['Page']);

 	$totalrec= $rows1;
	/*actually below variable stores the total number of records 
	according to the user manipulation in the url. it can true but also false*/
	$recgenerate = (($pagenumber-1)*$page_rows)+$div_position; 
	$lastdiv= fmod($totalrec, $page_rows);
	/*echo "<script>alert($lastdiv);</script>";*/
	if($recgenerate>$totalrec){
		header('Location: '.$_SERVER['PHP_SELF'].'?Pd='.$lastdiv.'&Page='.$last);
		ob_end_flush();
	}

	if ($div_position == 0 or $div_position > $page_rows and !($recgenerate>$totalrec)){
		$div_position = $page_rows;
		header('Location: '.$_SERVER['PHP_SELF'].'?Pd='.$div_position.'&Page='.$pagenumber);
		ob_end_flush();
	}
	
	if ($div_position < 0 and !($recgenerate>$totalrec)){
		$div_position = 1;
		header('Location: '.$_SERVER['PHP_SELF'].'?Pd='.$div_position.'&Page='.$pagenumber);
		ob_end_flush();
	}
	echo '<div id="bitcounter" class="'.$div_position.'"></div>';
       
       
	/*echo "<script>
			$(document).ready(function() {
				$('.divs div.fact:visible').hide();
				$('.divs div.fact:nth-child($div_position)').show();
			});
		</script>";*/

		echo "<script>
			$(document).ready(function() {
			hidder($div_position-1);
			});</script>";

	/*for ($i=1; $i <$div_position ; $i++) { 
		
		echo '<script>
			$(document).ready(function() {
			nextSetter();
			});</script>';
	}*/
}
else{
echo "<script>
			$(document).ready(function() {
			hidder(0);
			});</script>";

	echo '<div id="bitcounter" class="1"></div>';
}

?>

<?php
if(isset($_GET['flag']))
{
$flag = $_GET['flag'];

if ($flag == 'yes')
{
	$URL = $_SERVER['PHP_SELF'].'?Page='.$next;
header('Location: '.$URL);
ob_end_flush();

}
if ($flag == 'cool')
{
	$URL = $_SERVER['PHP_SELF'].'?Pd=0&Page='.$previous;
header('Location: '.$URL);
ob_end_flush();

}
}

?>

<?php
if(isset($_GET['Page'])){
	$a_page= $_GET['Page'];
	echo '<div id="pagenum" class="'.$a_page.'"></div>';

}
else{
echo '<div id="pagenum" class="1"></div>';
}
?>

</body>
</html>