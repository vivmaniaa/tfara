<?php
include_once 'functions.php';
if(!loggedIn()){
  header('location: index.php');
}
if(strpos($_SERVER['PHP_SELF'] , 'new_post.php')){
  header('location: index.php');
}
  
  $_SESSION['post_by'] = $c_username;
  
?>
<div id="main_container">
  <?php include_once 'page_head_and_aside.php'; ?>	
  <article id="main_article">
  <div id="load_screen">Loading page...</div>    
	<form id="new_post_form" method="post" action="published_insert.php" enctype="multipart/form-data" ><!--  -->
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
				<input id="form_title" type="text" name="title" />
				<input id="id_store" type="hidden" name="id" />
			</div>
		</div>
		
		<div id="form_div1" class="section_div" >
			<hr><h4>Div 1</h4>
			<h5>Div1 ► Outer Div</h5>
			<div class="sub_div_container">
				<span><br /><label for="div1_o_style">Style</label><br /><textarea id="div1_o_style" name="style_o_div1" type="text"></textarea></span>
				<span><label for="div1_o_attribute">Attribute</label><br /><textarea id="div1_o_attribute" name="attribute_o_div1" type="text" ></textarea></span>
				<span><br /><label for="div1_o_class" >Class</label><br /><textarea id="div1_o_class" name="class_o_div1" type="text" ></textarea></span>
				
			</div>
			<h5>Div1 ► Inner Div</h5>
			<div class="sub_div_container" >
				<span><br /><label for="div1_i_style" >Style</label><br /><textarea  id="div1_i_style" name="style_i_div1" type="text"></textarea></span>
				<span><label for="div1_i_attribute" >Attribute</label><br /><textarea id="div1_i_attribute" name="attribute_i_div1" type="text"></textarea></span>
				<span><br /><label for="div1_i_class" >Class</label><br /><textarea id="div1_i_class" name="class_i_div1" type="text"></textarea></span>
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

<?php 
	$diver='';
	$total_divs = 10;
	$middle_divs = $total_divs - 1;
	for ($j = 2; $j <= $middle_divs; $j++) {
		$diver .= '<div id="form_div'.$j.'" class="section_div" >
								<hr><h4>Div '.$j.'</h4>
								<h5>Div'.$j.' ► Outer Div</h5>
								<div class="sub_div_container">
									<span><br /><label for="div'.$j.'_o_style">Style</label><br /><textarea id="div'.$j.'_o_style" name="style_o_div'.$j.'" type="text"></textarea></span>
									<span><label for="div'.$j.'_o_attribute">Attribute</label><br /><textarea id="div'.$j.'_o_attribute" name="attribute_o_div'.$j.'" type="text"></textarea></span>
									<span><br /><label for="div'.$j.'_o_class" >Class</label><br /><textarea id="div'.$j.'_o_class" name="class_o_div'.$j.'" type="text"></textarea></span>
									
								</div>
								<h5>Div'.$j.' ► Inner Div</h5>
								<div class="sub_div_container">
									<span><br /><label for="div'.$j.'_i_style" >Style</label><br /><textarea  id="div'.$j.'_i_style" name="style_i_div'.$j.'" type="text"></textarea></span>
									<span><label for="div'.$j.'_i_attribute" >Attribute</label><br /><textarea id="div'.$j.'_i_attribute" name="attribute_i_div'.$j.'" type="text"></textarea></span>
									<span><br /><label for="div'.$j.'_i_class" >Class</label><br /><textarea id="div'.$j.'_i_class" name="class_i_div'.$j.'" type="text"></textarea></span>
									<labeL for="select_div'.$j.'">Text/Image</label>
									<select class="div_textimage" id="select_div'.$j.'" >
									  <option value="None">---Nothing---</option>
									  <option value="text">Text</option>
									  <option value="image">Image</option>
									</select>				
									<div class="text_or_image" id="html_div'.$j.'"></div>
									
									<div class="hide_show_buttons">
										<button class="btn btn-primary show_next_div" type="button" >Next</button>
										<button class="btn btn-azur hide_div" type="button" >Hide</button>
									</div>
								</div>
							</div>';
	} 
	$diver .= '<div id="form_div'.$total_divs.'" class="section_div">
							<hr><h4>Div '.$total_divs.'</h4>
							<h5>Div'.$total_divs.' ► Outer Div</h5>
							<div class="sub_div_container">
								<span><br /><label for="div'.$total_divs.'_o_style" >Style</label><br /><textarea id="div'.$total_divs.'_o_style" name="style_o_div'.$total_divs.'" type="text"></textarea></span>
								<span><label for="div'.$total_divs.'_o_attribute" >Attribute</label><br /><textarea id="div'.$total_divs.'_o_attribute" name="attribute_o_div'.$total_divs.'" type="text"></textarea></span>
								<span><br /><label for="div'.$total_divs.'_o_class" >Class</label><br /><textarea id="div'.$total_divs.'_o_class" name="class_o_div'.$total_divs.'" type="text"></textarea></span>
								
							</div>
							<h5>Div'.$total_divs.' ► Inner Div</h5>
							<div class="sub_div_container">
								<span><br /><label for="div'.$total_divs.'_i_style" >Style</label><br /><textarea id="div'.$total_divs.'_i_style" name="style_i_div'.$total_divs.'" type="text"></textarea></span>
								<span><label for="div'.$total_divs.'_i_attribute" >Attribute</label><br /><textarea id="div'.$total_divs.'_i_attribute" name="attribute_i_div'.$total_divs.'" type="text"></textarea></span>
								<span><br /><label for="div'.$total_divs.'_i_class" >Class</label><br /><textarea id="div'.$total_divs.'_i_class" name="class_i_div'.$total_divs.'" type="text"></textarea></span>
								<labeL for="select_div'.$total_divs.'">Text/Image</label>
								<select class="div_textimage" id="select_div'.$total_divs.'" >
								  <option value="None">---Nothing---</option>
								  <option value="text">Text</option>
								  <option value="image">Image</option>
								</select>
								<div class="text_or_image" id="html_div'.$total_divs.'"></div>
								<div class="hide_show_buttons">
									<button class="btn btn-azur hide_div" type="button" >Hide</button>
								</div>
							</div>
						</div>'
?>
<?php echo $diver;?>

		<!-- 		<div id="form_div2" class="section_div"> - enter -			<hr><h4>Div 2</h4>< - enter -			<h5>Div2 ► Outer Div</h5>< - enter -			<div style="background-color: #ccc; padding: 0 10px" >< - enter -				<span><br /><label for="div2_o_style" >Style</label><br /><textarea id="div2_o_style" name="style_o_div2" type="text"></textarea></span>< - enter -				<span><label for="div2_o_attribute" >Attribute</label><br /><textarea id="div2_o_attribute" name="attribute_o_div2" type="text"></textarea></span>< - enter -				<span><br /><label for="div2_o_class" >Class</label><br /><textarea id="div2_o_class" name="class_o_div2" type="text"></textarea></span>< - enter -				<! - enter -			</div>< - enter -			<h5>Div2 ► Inner Div</h5>< - enter -			<div style="background-color: #ccc; padding: 0 10px" >< - enter -				<span><br /><label for="div2_i_style" >Style</label><br /><textarea id="div2_i_style" name="style_i_div2" type="text"></textarea></span>< - enter -				<span><label for="div2_i_attribute" >Attribute</label><br /><textarea id="div2_i_attribute" name="attribute_i_div2" type="text"></textarea></span>< - enter -				<span><br /><label for="div2_i_class" >Class</label><br /><textarea id="div2_i_class" name="class_i_div2" type="text"></textarea></span>< - enter -				<labeL for="select_div2" >Text/Image</label>< - enter -				<select class="div_textimage" id="select_div2" >< - enter -				  <option value="None">---Nothing---</option>< - enter -				  <option value="text">Text</option>< - enter -				  <option value="image">Image</option>< - enter -				</select>< - enter -				<div class="text_or_image" id="html_div2"></div>< - enter -				<div class="hide_show_buttons"> - enter -					<button class="show_next_div" type="button" style="float:right; padding: 5px; border-radius:8px; background: -webkit-linear-gradient(#bbb, #eee);">Next</button>< - enter -					<button class="hide_div" type="button" style="float:right; padding: 5px; border-radius:8px;  background: -webkit-linear-gradient(#bbb, #eee);">Hide</button>< - enter -				</div>< - enter -			</div>< - enter -		</div>< - enter -< - enter -		<div id="form_div3" class="section_div"> - enter -			<hr><h4>Div 3</h4>< - enter -			<h5>Div3 ► Outer Div</h5>< - enter -			<div style="background-color: #ccc; padding: 0 10px" >< - enter -				<span><br /><label for="div3_o_style" >Style</label><br /><textarea id="div3_o_style" name="style_o_div3" type="text"></textarea></span>< - enter -				<span><label for="div3_o_attribute" >Attribute</label><br /><textarea id="div3_o_attribute" name="attribute_o_div3" type="text"></textarea></span>< - enter -				<span><br /><label for="div3_o_class" >Class</label><br /><textarea id="div3_o_class" name="class_o_div3" type="text"></textarea></span>< - enter -				<! - enter -			</div>< - enter -			<h5>Div3 ► Inner Div</h5>< - enter -			<div style="background-color: #ccc; padding: 0 10px" >< - enter -				<span><br /><label for="div3_i_style" >Style</label><br /><textarea id="div3_i_style" name="style_i_div3" type="text"></textarea></span>< - enter -				<span><label for="div3_i_attribute" >Attribute</label><br /><textarea id="div3_i_attribute" name="attribute_i_div3" type="text"></textarea></span>< - enter -				<span><br /><label for="div3_i_class" >Class</label><br /><textarea id="div3_i_class" name="class_i_div3" type="text"></textarea></span>< - enter -				<labeL for="select_div3">Text/Image</label>< - enter -				<select class="div_textimage" id="select_div3" >< - enter -				  <option value="None">---Nothing---</option>< - enter -				  <option value="text">Text</option>< - enter -				  <option value="image">Image</option>< - enter -				</select>< - enter -				<div class="text_or_image" id="html_div3"></div>< - enter -				<div class="hide_show_buttons"> - enter -					<button class="show_next_div" type="button" style="float:right; padding: 5px; border-radius:8px; background: -webkit-linear-gradient(#bbb, #eee);">Next</button>< - enter -					<button class="hide_div" type="button" style="float:right; padding: 5px; border-radius:8px;  background: -webkit-linear-gradient(#bbb, #eee);">Hide</button>< - enter -				</div>< - enter -			</div>< - enter -		</div>< - enter -< - enter -		<div id="form_div4" class="section_div"> - enter -			<hr><h4>Div 4</h4>< - enter -			<h5>Div4 ► Outer Div</h5>< - enter -			<div style="background-color: #ccc; padding: 0 10px" >< - enter -				<span><br /><label for="div4_o_style" >Style</label><br /><textarea id="div4_o_style" name="style_o_div4" type="text"></textarea></span>< - enter -				<span><label for="div4_o_attribute" >Attribute</label><br /><textarea id="div4_o_attribute" name="attribute_o_div4" type="text"></textarea></span>< - enter -				<span><br /><label for="div4_o_class" >Class</label><br /><textarea id="div4_o_class" name="class_o_div4" type="text"></textarea></span>< - enter -				<! - enter -			</div>< - enter -			<h5>Div3 ► Inner Div</h5>< - enter -			<div style="background-color: #ccc; padding: 0 10px" >< - enter -				<span><br /><label for="div4_i_style" >Style</label><br /><textarea id="div4_i_style" name="style_i_div4" type="text"></textarea></span>< - enter -				<span><label for="div4_i_attribute" >Attribute</label><br /><textarea id="div4_i_attribute" name="attribute_i_div4" type="text"></textarea></span>< - enter -				<span><br /><label for="div4_i_class" >Class</label><br /><textarea id="div4_i_class" name="class_i_div4" type="text"></textarea></span>< - enter -				<labeL for="select_div4">Text/Image</label>< - enter -				<select class="div_textimage" id="select_div4" >< - enter -				  <option value="None">---Nothing---</option>< - enter -				  <option value="text">Text</option>< - enter -				  <option value="image">Image</option>< - enter -				</select>< - enter -				<div class="text_or_image" id="html_div4"></div>< - enter -				<div class="hide_show_buttons"> - enter -					<button class="show_next_div" type="button" style="float:right; padding: 5px; border-radius:8px; background: -webkit-linear-gradient(#bbb, #eee);">Next</button>< - enter -					<button class="hide_div" type="button" style="float:right; padding: 5px; border-radius:8px;  background: -webkit-linear-gradient(#bbb, #eee);">Hide</button>< - enter -				</div>< - enter -			</div>< - enter -		</div>< - enter -< - enter -		<div id="form_div5" class="section_div"> - enter -			<hr><h4>Div 5</h4>< - enter -			<h5>Div5 ► Outer Div</h5>< - enter -			<div style="background-color: #ccc; padding: 0 10px" >< - enter -				<span><br /><label for="div5_o_style" >Style</label><br /><textarea id="div5_o_style" name="style_o_div5" type="text"></textarea></span>< - enter -				<span><label for="div5_o_attribute" >Attribute</label><br /><textarea id="div5_o_attribute" name="attribute_o_div5" type="text"></textarea></span>< - enter -				<span><br /><label for="div5_o_class" >Class</label><br /><textarea id="div5_o_class" name="class_o_div5" type="text"></textarea></span>< - enter -				<! - enter -			</div>< - enter -			<h5>Div5 ► Inner Div</h5>< - enter -			<div style="background-color: #ccc; padding: 0 10px" >< - enter -				<span><br /><label for="div5_i_style" >Style</label><br /><textarea id="div5_i_style" name="style_i_div5" type="text"></textarea></span>< - enter -				<span><label for="div5_i_attribute" >Attribute</label><br /><textarea id="div5_i_attribute" name="attribute_i_div5" type="text"></textarea></span>< - enter -				<span><br /><label for="div5_i_class" >Class</label><br /><textarea id="div5_i_class" name="class_i_div5" type="text"></textarea></span>< - enter -				<labeL for="select_div5">Text/Image</label>< - enter -				<select class="div_textimage" id="select_div5" >< - enter -				  <option value="None">---Nothing---</option>< - enter -				  <option value="text">Text</option>< - enter -				  <option value="image">Image</option>< - enter -				</select>< - enter -				<div class="text_or_image" id="html_div5"></div>< - enter -				<div class="hide_show_buttons"> - enter -					<button class="show_next_div" type="button" style="float:right; padding: 5px; border-radius:8px; background: -webkit-linear-gradient(#bbb, #eee);">Next</button>< - enter -					<button class="hide_div" type="button" style="float:right; padding: 5px; border-radius:8px;  background: -webkit-linear-gradient(#bbb, #eee);">Hide</button>< - enter -				</div>< - enter -			</div>< - enter -		</div>< - enter -< - enter -		<div id="form_div6" class="section_div"> - enter -			<hr><h4>Div 6</h4>< - enter -			<h5>Div6 ► Outer Div</h5>< - enter -			<div style="background-color: #ccc; padding: 0 10px" >< - enter -				<span><br /><label for="div6_o_style" >Style</label><br /><textarea id="div6_o_style" name="style_o_div6" type="text"></textarea></span>< - enter -				<span><label for="div6_o_attribute" >Attribute</label><br /><textarea id="div6_o_attribute" name="attribute_o_div6" type="text"></textarea></span>< - enter -				<span><br /><label for="div6_o_class" >Class</label><br /><textarea id="div6_o_class" name="class_o_div6" type="text"></textarea></span>< - enter -				<! - enter -			</div>< - enter -			<h5>Div6 ► Inner Div</h5>< - enter -			<div style="background-color: #ccc; padding: 0 10px" >< - enter -				<span><br /><label for="div6_i_style" >Style</label><br /><textarea id="div6_i_style" name="style_i_div6" type="text"></textarea></span>< - enter -				<span><label for="div6_i_attribute" >Attribute</label><br /><textarea id="div6_i_attribute" name="attribute_i_div6" type="text"></textarea></span>< - enter -				<span><br /><label for="div6_i_class" >Class</label><br /><textarea id="div6_i_class" name="class_i_div6" type="text"></textarea></span>< - enter -				<labeL for="select_div6">Text/Image</label>< - enter -				<select class="div_textimage" id="select_div6" >< - enter -				  <option value="None">---Nothing---</option>< - enter -				  <option value="text">Text</option>< - enter -				  <option value="image">Image</option>< - enter -				</select>< - enter -				<div class="text_or_image" id="html_div6"></div>< - enter -				<div class="hide_show_buttons"> - enter -					<button class="show_next_div" type="button" style="float:right; padding: 5px; border-radius:8px; background: -webkit-linear-gradient(#bbb, #eee);">Next</button>< - enter -					<button class="hide_div" type="button" style="float:right; padding: 5px; border-radius:8px;  background: -webkit-linear-gradient(#bbb, #eee);">Hide</button>< - enter -				</div>< - enter -			</div>< - enter -		</div>< - enter -< - enter -		<div id="form_div7" class="section_div"> - enter -			<hr><h4>Div 7</h4>< - enter -			<h5>Div7 ► Outer Div</h5>< - enter -			<div style="background-color: #ccc; padding: 0 10px" >< - enter -				<span><br /><label for="div7_o_style" >Style</label><br /><textarea id="div7_o_style" name="style_o_div7" type="text"></textarea></span>< - enter -				<span><label for="div7_o_attribute" >Attribute</label><br /><textarea id="div7_o_attribute" name="attribute_o_div7" type="text"></textarea></span>< - enter -				<span><br /><label for="div7_o_class" >Class</label><br /><textarea id="div7_o_class" name="class_o_div7" type="text"></textarea></span>< - enter -				<! - enter -			</div>< - enter -			<h5>Div7 ► Inner Div</h5>< - enter -			<div style="background-color: #ccc; padding: 0 10px" >< - enter -				<span><br /><label for="div7_i_style" >Style</label><br /><textarea id="div7_i_style" name="style_i_div7" type="text"></textarea></span>< - enter -				<span><label for="div7_i_attribute" >Attribute</label><br /><textarea id="div7_i_attribute" name="attribute_i_div7" type="text"></textarea></span>< - enter -				<span><br /><label for="div7_i_class" >Class</label><br /><textarea id="div7_i_class" name="class_i_div7" type="text"></textarea></span>< - enter -				<labeL for="select_div7">Text/Image</label>< - enter -				<select class="div_textimage" id="select_div7" >< - enter -				  <option value="None">---Nothing---</option>< - enter -				  <option value="text">Text</option>< - enter -				  <option value="image">Image</option>< - enter -				</select>< - enter -				<div class="text_or_image" id="html_div7"></div>< - enter -				<div class="hide_show_buttons"> - enter -					<button class="show_next_div" type="button" style="float:right; padding: 5px; border-radius:8px; background: -webkit-linear-gradient(#bbb, #eee);">Next</button>< - enter -					<button class="hide_div" type="button" style="float:right; padding: 5px; border-radius:8px;  background: -webkit-linear-gradient(#bbb, #eee);">Hide</button>< - enter -				</div>< - enter -			</div>< - enter -		</div>< - enter -< - enter -		<div id="form_div8" class="section_div" >< - enter -			<hr><h4>Div 8</h4>< - enter -			<h5>Div8 ► Outer Div</h5>< - enter -			<div style="background-color: #ccc; padding: 0 10px" >< - enter -				<span><br /><label for="div8_o_style" >Style</label><br /><textarea id="div8_o_style" name="style_o_div8" type="text"></textarea></span>< - enter -				<span><label for="div8_o_attribute" >Attribute</label><br /><textarea id="div8_o_attribute" name="attribute_o_div8" type="text"></textarea></span>< - enter -				<span><br /><label for="div8_o_class" >Class</label><br /><textarea id="div8_o_class" name="class_o_div8" type="text"></textarea></span>< - enter -				<! - enter -			</div>< - enter -			<h5>Div8 ► Inner Div</h5>< - enter -			<div style="background-color: #ccc; padding: 0 10px" >< - enter -				<span><br /><label for="div8_i_style" >Style</label><br /><textarea id="div8_i_style" name="style_i_div8" type="text"></textarea></span>< - enter -				<span><label for="div8_i_attribute" >Attribute</label><br /><textarea id="div8_i_attribute" name="attribute_i_div8" type="text"></textarea></span>< - enter -				<span><br /><label for="div8_i_class" >Class</label><br /><textarea id="div8_i_class" name="class_i_div8" type="text"></textarea></span>< - enter -				<labeL for="select_div8">Text/Image</label>< - enter -				<select class="div_textimage" id="select_div8" >< - enter -				  <option value="None">---Nothing---</option>< - enter -				  <option value="text">Text</option>< - enter -				  <option value="image">Image</option>< - enter -				</select>< - enter -				<div class="text_or_image" id="html_div8"></div>< - enter -				<div class="hide_show_buttons"> - enter -					<button class="show_next_div" type="button" style="float:right; padding: 5px; border-radius:8px; background: -webkit-linear-gradient(#bbb, #eee);">Next</button>< - enter -					<button class="hide_div" type="button" style="float:right; padding: 5px; border-radius:8px;  background: -webkit-linear-gradient(#bbb, #eee);">Hide</button>< - enter -				</div>< - enter -			</div>< - enter -		</div>< - enter -< - enter -		<div id="form_div9" class="section_div"> - enter -			<hr><h4>Div 9</h4>< - enter -			<h5>Div9 ► Outer Div</h5>< - enter -			<div style="background-color: #ccc; padding: 0 10px" >< - enter -				<span><br /><label for="div9_o_style" >Style</label><br /><textarea id="div9_o_style" name="style_o_div9" type="text"></textarea></span>< - enter -				<span><label for="div9_o_attribute" >Attribute</label><br /><textarea id="div9_o_attribute" name="attribute_o_div9" type="text"></textarea></span>< - enter -				<span><br /><label for="div9_o_class" >Class</label><br /><textarea id="div9_o_class" name="class_o_div9" type="text"></textarea></span>< - enter -				<! - enter -			</div>< - enter -			<h5>Div9 ► Inner Div</h5>< - enter -			<div style="background-color: #ccc; padding: 0 10px" >< - enter -				<span><br /><label for="div9_i_style" >Style</label><br /><textarea id="div9_i_style" name="style_i_div9" type="text"></textarea></span>< - enter -				<span><label for="div9_i_attribute" >Attribute</label><br /><textarea id="div9_i_attribute" name="attribute_i_div9" type="text"></textarea></span>< - enter -				<span><br /><label for="div9_i_class" >Class</label><br /><textarea id="div9_i_class" name="class_i_div9" type="text"></textarea></span>< - enter -				<labeL for="select_div9">Text/Image</label>< - enter -				<select class="div_textimage" id="select_div9" >< - enter -				  <option value="None">---Nothing---</option>< - enter -				  <option value="text">Text</option>< - enter -				  <option value="image">Image</option>< - enter -				</select>< - enter -				<div class="text_or_image" id="html_div9"></div>< - enter -				<div class="hide_show_buttons"> - enter -					<button class="show_next_div" type="button" style="float:right; padding: 5px; border-radius:8px; background: -webkit-linear-gradient(#bbb, #eee);">Next</button>< - enter -					<button class="hide_div" type="button" style="float:right; padding: 5px; border-radius:8px;  background: -webkit-linear-gradient(#bbb, #eee);">Hide</button>< - enter -				</div>< - enter -			</div>< - enter -		</div>  <div id="form_div'.$total_divs.'" class="section_div">---enter---			<hr><h4>Div 10</h4>---enter---			<h5>Div10 ► Outer Div</h5>---enter---			<div style="background-color: #ccc; padding: 0 10px" >---enter---				<span><br /><label for="div10_o_style" >Style</label><br /><textarea id="div10_o_style" name="style_o_div10" type="text"></textarea></span>---enter---				<span><label for="div10_o_attribute" >Attribute</label><br /><textarea id="div10_o_attribute" name="attribute_o_div10" type="text"></textarea></span>---enter---				<span><br /><label for="div10_o_class" >Class</label><br /><textarea id="div10_o_class" name="class_o_div10" type="text"></textarea></span>---enter---				---enter---			</div>---enter---			<h5>Div10 ► Inner Div</h5>---enter---			<div style="background-color: #ccc; padding: 0 10px" >---enter---				<span><br /><label for="div10_i_style" >Style</label><br /><textarea id="div10_i_style" name="style_i_div10" type="text"></textarea></span>---enter---				<span><label for="div10_i_attribute" >Attribute</label><br /><textarea id="div10_i_attribute" name="attribute_i_div10" type="text"></textarea></span>---enter---				<span><br /><label for="div10_i_class" >Class</label><br /><textarea id="div10_i_class" name="class_i_div10" type="text"></textarea></span>---enter---				<labeL for="select_div10">Text/Image</label>---enter---				<select class="div_textimage" id="select_div10" >---enter---				  <option value="None">---Nothing---</option>---enter---				  <option value="text">Text</option>---enter---				  <option value="image">Image</option>---enter---				</select>---enter---				<div class="text_or_image" id="html_div10"></div>---enter---				<div class="hide_show_buttons">---enter---					<button class="hide_div" type="button" style="float:right; padding: 5px; border-radius:8px;  background: -webkit-linear-gradient(#bbb, #eee);">Hide</button>---enter---				</div>---enter---			</div>---enter---		</div> -->
		<input class="btn btn-danger" type="submit" id="publish-button" value="Publish" name="submit" style="float:right; width:100px;" ><!-- Post</button> -->
		<button type="button" id="save-button" name="save" class="btn btn-success below_buttons" >Save</button>
		<button type="button" id="preview-button" name="preview" class="btn btn-info below_buttons">Preview</button>
		<div class="progress progress-striped active">
            <div class="progress-bar" style="width: 0%;"></div>
        </div>
	</form>
  </article>

  <?php include_once 'page_footer.php'; ?>
</div>


