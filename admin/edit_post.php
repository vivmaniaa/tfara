<?php
include_once 'functions.php';
include 'connect.php';
if(!loggedIn()){
  header('location: index.php');
}
if(strpos($_SERVER['PHP_SELF'] , 'edit_post.php')){
  header('location: index.php');
}

if(!isset($_GET['postID']) or $_GET['postID']==''){
	header('location: index.php');
}
$postid = $_GET['postID']; 

// below code is to check if postid is exits in the databas or not
$result = mysql_query("SELECT COUNT(*) FROM blog WHERE bid=$postid");
if (!$result) {
    die(mysql_error());
}
if (mysql_result($result, 0, 0) == 0) {
    header('location: index.php');
}
// end of code
$sql= "SELECT * FROM blog WHERE bid=$postid";
$query = mysql_query($sql);
$row=mysql_fetch_array($query);	
$id = $row['bid'];
$post_status= $row['post_status'];
$date = $row['date'];
$title = $row['title'];
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
?>

<div id="main_container">
  <?php include_once 'page_head_and_aside.php'; ?>	
  <article id="main_article">   
  <div id="load_screen"><p>Loading page...</p></div>  
	<form id="edit_post_form<?php echo $id; ?>" method="post"  action="post-process.php" enctype="multipart/form-data">
		<div class="sub_div_container" >
			<div style="display: inline-block;">
				<label for="template_select">Template</label>
				<select id="template_select">
				  <option value="None">---None---</option>
				  <option value="Aries">Aries</option>
				  <option value="Taurus">Taurus</option>
				  <option value="Cancer">Cancer</option>
				  <option value="Leo">Leo</option>
				  <option value="Virgo">Virgo</option>
				  <option value="Libra">Libra</option>
				  <option value="Scorpio">Scorpio</option>
				  <option value="Sagittarius">Sagittarius</option>
				  <option value="Capricorn">Capricorn</option>
				  <option value="Aquarius">Aquarius</option>
				  <option value="Pisces">Pisces</option>
				</select>
			</div>
			<div id="title_div">
				<label for="form_title">Title</label>
				<input id="form_title" type="text" name="title"  value="<?php echo $title; ?>"/>
			</div>
		</div>
		
		<div id="form_div1" class="section_div" >
			<hr><h4>Div 1</h4>
			<h5>Div1 ► Outer Div</h5>
			<div class="sub_div_container">
				<span><br /><label for="div1_o_style">Style</label><br /><textarea id="div1_o_style" name="style_o_div1" type="text"><?php echo $style_o_div1; ?></textarea></span>
				<span><label for="div1_o_attribute">Attribute</label><br /><textarea id="div1_o_attribute" name="attribute_o_div1" type="text" ><?php echo $attribute_o_div1; ?></textarea></span>
				<span><br /><label for="div1_o_class" >Class</label><br /><textarea id="div1_o_class" name="class_o_div1" type="text" ><?php echo $class_o_div1; ?></textarea></span>
				
			</div>
			<h5>Div1 ► Inner Div</h5>
			<div class="sub_div_container" >
				<span><br /><label for="div1_i_style" >Style</label><br /><textarea  id="div1_i_style" name="style_i_div1" type="text"><?php echo $style_i_div1; ?></textarea></span>
				<span><label for="div1_i_attribute" >Attribute</label><br /><textarea id="div1_i_attribute" name="attribute_i_div1" type="text"><?php echo $attribute_i_div1; ?></textarea></span>
				<span><br /><label for="div1_i_class" >Class</label><br /><textarea id="div1_i_class" name="class_i_div1" type="text"><?php echo $class_i_div1; ?></textarea></span>
				<labeL for="select_div1">Text/Image</label>
				<select class="div_textimage" id="select_div1" >
				  <option value="None">---Nothing---</option>
				  <option value="text">Text</option>
				  <option value="image">Image</option>
				</select>				
				<div class="text_or_image" id="html_div1"></div>
				
				<div><button id="first_show_button" class="btn btn-primary show_next_div" type="button" >Next</button></div>
			</div>
		</div>
		
		<div id="form_div2" class="section_div"> 
			<hr>
			<h4>Div 2</h4>
			<h5>Div2 ► Outer Div</h5>
			<div class="sub_div_container" >
				<span><br /><label for="div2_o_style" >Style</label><br /><textarea id="div2_o_style" name="style_o_div2" type="text"><?php echo $style_o_div2; ?></textarea></span>
				<span><label for="div2_o_attribute" >Attribute</label><br /><textarea id="div2_o_attribute" name="attribute_o_div2" type="text"><?php echo $attribute_o_div2; ?></textarea></span>
				<span><br /><label for="div2_o_class" >Class</label><br /><textarea id="div2_o_class" name="class_o_div2" type="text"><?php echo $class_o_div2; ?></textarea></span>
				 
			</div>
			<h5>Div2 ► Inner Div</h5>
			<div class="sub_div_container" >
				<span><br /><label for="div2_i_style" >Style</label><br /><textarea id="div2_i_style" name="style_i_div2" type="text"><?php echo $style_i_div2; ?></textarea></span>
				<span><label for="div2_i_attribute" >Attribute</label><br /><textarea id="div2_i_attribute" name="attribute_i_div2" type="text"><?php echo $attribute_i_div2; ?></textarea></span>
				<span><br /><label for="div2_i_class" >Class</label><br /><textarea id="div2_i_class" name="class_i_div2" type="text"><?php echo $class_i_div2; ?></textarea></span>
				<labeL for="select_div2" >Text/Image</label>
				<select class="div_textimage" id="select_div2" >
				  <option value="None">---Nothing---</option>
				  <option value="text">Text</option>
				  <option value="image">Image</option>
				</select>
				<div class="text_or_image" id="html_div2"></div>
				<div class="hide_show_buttons"> 
					<button class="btn btn-primary show_next_div" type="button" style="float:right;">Next</button>
					<button class="btn btn-azur hide_div" type="button" style="float:right;">Hide</button>
				</div>
			</div>
		</div>

		<div id="form_div3" class="section_div"> 
			<hr><h4>Div 3</h4>
			<h5>Div3 ► Outer Div</h5>
			<div class="sub_div_container" >
				<span><br /><label for="div3_o_style" >Style</label><br /><textarea id="div3_o_style" name="style_o_div3" type="text"><?php echo $style_o_div3; ?></textarea></span>
				<span><label for="div3_o_attribute" >Attribute</label><br /><textarea id="div3_o_attribute" name="attribute_o_div3" type="text"><?php echo $attribute_o_div3; ?></textarea></span>
				<span><br /><label for="div3_o_class" >Class</label><br /><textarea id="div3_o_class" name="class_o_div3" type="text"><?php echo $class_o_div3; ?></textarea></span>
				 
			</div>
			<h5>Div3 ► Inner Div</h5>
			<div class="sub_div_container" >
				<span><br /><label for="div3_i_style" >Style</label><br /><textarea id="div3_i_style" name="style_i_div3" type="text"><?php echo $style_i_div3; ?></textarea></span>
				<span><label for="div3_i_attribute" >Attribute</label><br /><textarea id="div3_i_attribute" name="attribute_i_div3" type="text"><?php echo $attribute_i_div3; ?></textarea></span>
				<span><br /><label for="div3_i_class" >Class</label><br /><textarea id="div3_i_class" name="class_i_div3" type="text"><?php echo $class_i_div3; ?></textarea></span>
				<labeL for="select_div3">Text/Image</label>
				<select class="div_textimage" id="select_div3" >
				  <option value="None">---Nothing---</option>
				  <option value="text">Text</option>
				  <option value="image">Image</option>
				</select>
				<div class="text_or_image" id="html_div3"></div>
				<div class="hide_show_buttons"> 
					<button class="btn btn-primary show_next_div" type="button" style="float:right;">Next</button>
					<button class="btn btn-azur hide_div" type="button" style="float:right;">Hide</button>
				</div>
			</div>
		</div>
 
		<div id="form_div4" class="section_div"> 
			<hr><h4>Div 4</h4>
			<h5>Div4 ► Outer Div</h5>
			<div class="sub_div_container" >
				<span><br /><label for="div4_o_style" >Style</label><br /><textarea id="div4_o_style" name="style_o_div4" type="text"><?php echo $style_o_div4; ?></textarea></span>
				<span><label for="div4_o_attribute" >Attribute</label><br /><textarea id="div4_o_attribute" name="attribute_o_div4" type="text"><?php echo $attribute_o_div4; ?></textarea></span>
				<span><br /><label for="div4_o_class" >Class</label><br /><textarea id="div4_o_class" name="class_o_div4" type="text"><?php echo $class_o_div4; ?></textarea></span>
				 
			</div>
			<h5>Div3 ► Inner Div</h5>
			<div class="sub_div_container" >
				<span><br /><label for="div4_i_style" >Style</label><br /><textarea id="div4_i_style" name="style_i_div4" type="text"><?php echo $style_i_div4; ?></textarea></span>
				<span><label for="div4_i_attribute" >Attribute</label><br /><textarea id="div4_i_attribute" name="attribute_i_div4" type="text"><?php echo $attribute_i_div4; ?></textarea></span>
				<span><br /><label for="div4_i_class" >Class</label><br /><textarea id="div4_i_class" name="class_i_div4" type="text"><?php echo $class_i_div4; ?></textarea></span>
				<labeL for="select_div4">Text/Image</label>
				<select class="div_textimage" id="select_div4" >
				  <option value="None">---Nothing---</option>
				  <option value="text">Text</option>
				  <option value="image">Image</option>
				</select>
				<div class="text_or_image" id="html_div4"></div>
				<div class="hide_show_buttons"> 
					<button class="btn btn-primary show_next_div" type="button" style="float:right;">Next</button>
					<button class="btn btn-azur hide_div" type="button" style="float:right;">Hide</button>
				</div>
			</div>
		</div>

		<div id="form_div5" class="section_div"> 
			<hr><h4>Div 5</h4>
			<h5>Div5 ► Outer Div</h5>
			<div class="sub_div_container" >
				<span><br /><label for="div5_o_style" >Style</label><br /><textarea id="div5_o_style" name="style_o_div5" type="text"><?php echo $style_o_div5; ?></textarea></span>
				<span><label for="div5_o_attribute" >Attribute</label><br /><textarea id="div5_o_attribute" name="attribute_o_div5" type="text"><?php echo $attribute_o_div5; ?></textarea></span>
				<span><br /><label for="div5_o_class" >Class</label><br /><textarea id="div5_o_class" name="class_o_div5" type="text"><?php echo $class_o_div5; ?></textarea></span>
				 
			</div>
			<h5>Div5 ► Inner Div</h5>
			<div class="sub_div_container" >
				<span><br /><label for="div5_i_style" >Style</label><br /><textarea id="div5_i_style" name="style_i_div5" type="text"><?php echo $style_i_div5; ?></textarea></span>
				<span><label for="div5_i_attribute" >Attribute</label><br /><textarea id="div5_i_attribute" name="attribute_i_div5" type="text"><?php echo $attribute_i_div5; ?></textarea></span>
				<span><br /><label for="div5_i_class" >Class</label><br /><textarea id="div5_i_class" name="class_i_div5" type="text"><?php echo $class_i_div5; ?></textarea></span>
				<labeL for="select_div5">Text/Image</label>
				<select class="div_textimage" id="select_div5" >
				  <option value="None">---Nothing---</option>
				  <option value="text">Text</option>
				  <option value="image">Image</option>
				</select>
				<div class="text_or_image" id="html_div5"></div>
				<div class="hide_show_buttons"> 
					<button class="btn btn-primary show_next_div" type="button" style="float:right;">Next</button>
					<button class="btn btn-azur hide_div" type="button" style="float:right;">Hide</button>
				</div>
			</div>
		</div>

		<div id="form_div6" class="section_div"> 
			<hr><h4>Div 6</h4>
			<h5>Div6 ► Outer Div</h5>
			<div class="sub_div_container" >
				<span><br /><label for="div6_o_style" >Style</label><br /><textarea id="div6_o_style" name="style_o_div6" type="text"><?php echo $style_o_div6; ?></textarea></span>
				<span><label for="div6_o_attribute" >Attribute</label><br /><textarea id="div6_o_attribute" name="attribute_o_div6" type="text"><?php echo $attribute_o_div6; ?></textarea></span>
				<span><br /><label for="div6_o_class" >Class</label><br /><textarea id="div6_o_class" name="class_o_div6" type="text"><?php echo $class_o_div6; ?></textarea></span>
				 
			</div>
			<h5>Div6 ► Inner Div</h5>
			<div class="sub_div_container" >
				<span><br /><label for="div6_i_style" >Style</label><br /><textarea id="div6_i_style" name="style_i_div6" type="text"><?php echo $style_i_div6; ?></textarea></span>
				<span><label for="div6_i_attribute" >Attribute</label><br /><textarea id="div6_i_attribute" name="attribute_i_div6" type="text"><?php echo $attribute_i_div6; ?></textarea></span>
				<span><br /><label for="div6_i_class" >Class</label><br /><textarea id="div6_i_class" name="class_i_div6" type="text"><?php echo $class_i_div6; ?></textarea></span>
				<labeL for="select_div6">Text/Image</label>
				<select class="div_textimage" id="select_div6" >
				  <option value="None">---Nothing---</option>
				  <option value="text">Text</option>
				  <option value="image">Image</option>
				</select>
				<div class="text_or_image" id="html_div6"></div>
				<div class="hide_show_buttons"> 
					<button class="btn btn-primary show_next_div" type="button" style="float:right;">Next</button>
					<button class="btn btn-azur hide_div" type="button" style="float:right;">Hide</button>
				</div>
			</div>
		</div>

		<div id="form_div7" class="section_div"> 
			<hr><h4>Div 7</h4>
			<h5>Div7 ► Outer Div</h5>
			<div class="sub_div_container" >
				<span><br /><label for="div7_o_style" >Style</label><br /><textarea id="div7_o_style" name="style_o_div7" type="text"><?php echo $style_o_div7; ?></textarea></span>
				<span><label for="div7_o_attribute" >Attribute</label><br /><textarea id="div7_o_attribute" name="attribute_o_div7" type="text"><?php echo $attribute_o_div7; ?></textarea></span>
				<span><br /><label for="div7_o_class" >Class</label><br /><textarea id="div7_o_class" name="class_o_div7" type="text"><?php echo $class_o_div7; ?></textarea></span>
				 
			</div>
			<h5>Div7 ► Inner Div</h5>
			<div class="sub_div_container" >
				<span><br /><label for="div7_i_style" >Style</label><br /><textarea id="div7_i_style" name="style_i_div7" type="text"><?php echo $style_i_div7; ?></textarea></span>
				<span><label for="div7_i_attribute" >Attribute</label><br /><textarea id="div7_i_attribute" name="attribute_i_div7" type="text"><?php echo $attribute_i_div7; ?></textarea></span>
				<span><br /><label for="div7_i_class" >Class</label><br /><textarea id="div7_i_class" name="class_i_div7" type="text"><?php echo $class_i_div7; ?></textarea></span>
				<labeL for="select_div7">Text/Image</label>
				<select class="div_textimage" id="select_div7" >
				  <option value="None">---Nothing---</option>
				  <option value="text">Text</option>
				  <option value="image">Image</option>
				</select>
				<div class="text_or_image" id="html_div7"></div>
				<div class="hide_show_buttons"> 
					<button class="btn btn-primary show_next_div" type="button" style="float:right;">Next</button>
					<button class="btn btn-azur hide_div" type="button" style="float:right;">Hide</button>
				</div>
			</div>
		</div>
 
		<div id="form_div8" class="section_div" >
			<hr><h4>Div 8</h4>
			<h5>Div8 ► Outer Div</h5>
			<div class="sub_div_container" >
				<span><br /><label for="div8_o_style" >Style</label><br /><textarea id="div8_o_style" name="style_o_div8" type="text"><?php echo $style_o_div8; ?></textarea></span>
				<span><label for="div8_o_attribute" >Attribute</label><br /><textarea id="div8_o_attribute" name="attribute_o_div8" type="text"><?php echo $attribute_o_div8; ?></textarea></span>
				<span><br /><label for="div8_o_class" >Class</label><br /><textarea id="div8_o_class" name="class_o_div8" type="text"><?php echo $class_o_div8; ?></textarea></span>
				 
			</div>
			<h5>Div8 ► Inner Div</h5>
			<div class="sub_div_container" >
				<span><br /><label for="div8_i_style" >Style</label><br /><textarea id="div8_i_style" name="style_i_div8" type="text"><?php echo $style_i_div8; ?></textarea></span>
				<span><label for="div8_i_attribute" >Attribute</label><br /><textarea id="div8_i_attribute" name="attribute_i_div8" type="text"><?php echo $attribute_i_div8; ?></textarea></span>
				<span><br /><label for="div8_i_class" >Class</label><br /><textarea id="div8_i_class" name="class_i_div8" type="text"><?php echo $class_i_div8; ?></textarea></span>
				<labeL for="select_div8">Text/Image</label>
				<select class="div_textimage" id="select_div8" >
				  <option value="None">---Nothing---</option>
				  <option value="text">Text</option>
				  <option value="image">Image</option>
				</select>
				<div class="text_or_image" id="html_div8"></div>
				<div class="hide_show_buttons"> 
					<button class="btn btn-primary show_next_div" type="button" style="float:right;">Next</button>
					<button class="btn btn-azur hide_div" type="button" style="float:right;">Hide</button>
				</div>
			</div>
		</div>
 
		<div id="form_div9" class="section_div"> 
			<hr><h4>Div 9</h4>
			<h5>Div9 ► Outer Div</h5>
			<div class="sub_div_container" >
				<span><br /><label for="div9_o_style" >Style</label><br /><textarea id="div9_o_style" name="style_o_div9" type="text"><?php echo $style_o_div9; ?></textarea></span>
				<span><label for="div9_o_attribute" >Attribute</label><br /><textarea id="div9_o_attribute" name="attribute_o_div9" type="text"><?php echo $attribute_o_div9; ?></textarea></span>
				<span><br /><label for="div9_o_class" >Class</label><br /><textarea id="div9_o_class" name="class_o_div9" type="text"><?php echo $class_o_div9; ?></textarea></span>
				 
			</div>
			<h5>Div9 ► Inner Div</h5>
			<div class="sub_div_container" >
				<span><br /><label for="div9_i_style" >Style</label><br /><textarea id="div9_i_style" name="style_i_div9" type="text"><?php echo $style_i_div9; ?></textarea></span>
				<span><label for="div9_i_attribute" >Attribute</label><br /><textarea id="div9_i_attribute" name="attribute_i_div9" type="text"><?php echo $attribute_i_div9; ?></textarea></span>
				<span><br /><label for="div9_i_class" >Class</label><br /><textarea id="div9_i_class" name="class_i_div9" type="text"><?php echo $class_i_div9; ?></textarea></span>
				<labeL for="select_div9">Text/Image</label>
				<select class="div_textimage" id="select_div9" >
				  <option value="None">---Nothing---</option>
				  <option value="text">Text</option>
				  <option value="image">Image</option>
				</select>
				<div class="text_or_image" id="html_div9"></div>
				<div class="hide_show_buttons"> 
					<button class="btn btn-primary show_next_div" type="button" style="float:right;">Next</button>
					<button class="btn btn-azur hide_div" type="button" style="float:right;">Hide</button>
				</div>
			</div>
		</div>  
		<div id="form_div10" class="section_div">
			<hr><h4>Div 10</h4>
			<h5>Div10 ► Outer Div</h5>
			<div class="sub_div_container" >
				<span><br /><label for="div10_o_style" >Style</label><br /><textarea id="div10_o_style" name="style_o_div10" type="text"><?php echo $style_o_div10; ?></textarea></span>
				<span><label for="div10_o_attribute" >Attribute</label><br /><textarea id="div10_o_attribute" name="attribute_o_div10" type="text"><?php echo $attribute_o_div10; ?></textarea></span>
				<span><br /><label for="div10_o_class" >Class</label><br /><textarea id="div10_o_class" name="class_o_div10" type="text"><?php echo $class_o_div10; ?></textarea></span>

			</div>
			<h5>Div10 ► Inner Div</h5>
			<div class="sub_div_container" >
				<span><br /><label for="div10_i_style" >Style</label><br /><textarea id="div10_i_style" name="style_i_div10" type="text"><?php echo $style_i_div10; ?></textarea></span>
				<span><label for="div10_i_attribute" >Attribute</label><br /><textarea id="div10_i_attribute" name="attribute_i_div10" type="text"><?php echo $attribute_i_div10; ?></textarea></span>
				<span><br /><label for="div10_i_class" >Class</label><br /><textarea id="div10_i_class" name="class_i_div10" type="text"><?php echo $class_i_div10; ?></textarea></span>
				<labeL for="select_div10">Text/Image</label>
				<select class="div_textimage" id="select_div10" >
				  <option value="None">---Nothing---</option>
				  <option value="text">Text</option>
				  <option value="image">Image</option>
				</select>
				<div class="text_or_image" id="html_div10"></div>
				<div class="hide_show_buttons">
					<button class="btn btn-azur hide_div" type="button" >Hide</button>
				</div>
			</div>
		</div>	
		<?php
			if($post_status== "draft"){
				$pub_val= 'Publish';
				$save_text= 'Save';
			}
			else{
				$pub_val= 'Update';
				$save_text= 'Draft';
			}
		?>			
		<input type="submit" id="edit_publish-button" class="btn btn-danger" value=<?php echo $pub_val; ?> name="submit" style="float:right; width:100px;" ><!-- Post</button> -->
		<button type="button" id="edit_save-button" name="save" class="btn btn-success below_buttons" ><?php echo $save_text; ?></button>
		<button type="button" id="preview-button" name="preview" class="btn btn-info below_buttons"  >Preview</button>
		<div class="progress progress-striped active" >
            <div class="progress-bar" style="width: 0%;"></div>
        </div>
	</form>
  </article>

  <?php include_once 'page_footer.php'; ?>
</div>


