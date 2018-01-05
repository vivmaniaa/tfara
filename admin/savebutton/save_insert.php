<?php 
include_once '../connect.php';
include_once '../functions.php';
/*if(strpos($_SERVER['PHP_SELF'] , 'post-process.php')){
  header('location: index.php');
}*/

		function file_newname($path, $filename){
				if($explode = explode('.', $filename)){
					$name = $explode[0];
					$ext = '.'.$explode[1];
				}
				else{
					$name = $filename;
				}
				$newpath = $path.$filename;
				$newname = $filename;
				$counter = 1;
				while(file_exists($newpath)){
					$newname = $name.'('.$counter.')'.$ext;
					$newpath = $path.$newname;
					$counter++;
				}	
				return $newname;
		}
		
		if(isset($_FILES['imagediv1']['name']) && !empty($_FILES['imagediv1']['name'])){
				$img_name1= $_FILES['imagediv1']['name'];
				if(isset($_POST['name_image_div1']) && !empty($_POST['name_image_div1'])){$img_name1 = $_POST['name_image_div1'];}
				$tmp_img_name1 = $_FILES['imagediv1']['tmp_name'];
				$location = '../../images/';
				$img_name1 = file_newname($location, $img_name1);
				move_uploaded_file($tmp_img_name1, $location.$img_name1);
				$name_image_div1 = $img_name1;
		}
		else{
			if(isset($_POST['name_image_div1'])){$name_image_div1= $_POST['name_image_div1'];}else{$name_image_div1= '';} 
		}

		if(isset($_FILES['imagediv2']['name']) && !empty($_FILES['imagediv2']['name'])){
				$img_name2= $_FILES['imagediv2']['name'];
				if(isset($_POST['name_image_div2']) && !empty($_POST['name_image_div2'])){$img_name2 = $_POST['name_image_div2'];}
				$tmp_img_name2 = $_FILES['imagediv2']['tmp_name'];
				$location = '../../images/';
				$img_name2 = file_newname($location, $img_name2);
				move_uploaded_file($tmp_img_name2, $location.$img_name2);
				$name_image_div2 = $img_name2;
		}
		else{
			if(isset($_POST['name_image_div2'])){$name_image_div2= $_POST['name_image_div2'];}else{$name_image_div2= '';} 
		}

		if(isset($_FILES['imagediv3']['name']) && !empty($_FILES['imagediv3']['name'])){
				$img_name3= $_FILES['imagediv3']['name'];
				if(isset($_POST['name_image_div3']) && !empty($_POST['name_image_div3'])){$img_name3 = $_POST['name_image_div3'];}
				$tmp_img_name3 = $_FILES['imagediv3']['tmp_name'];
				$location = '../../images/';
				$img_name3 = file_newname($location, $img_name3);
				move_uploaded_file($tmp_img_name3, $location.$img_name3);
				$name_image_div3 = $img_name3;
		}
		else{
			if(isset($_POST['name_image_div3'])){$name_image_div3= $_POST['name_image_div3'];}else{$name_image_div3= '';} 
		}

		if(isset($_FILES['imagediv4']['name']) && !empty($_FILES['imagediv4']['name'])){
				$img_name4= $_FILES['imagediv4']['name'];
				if(isset($_POST['name_image_div4']) && !empty($_POST['name_image_div4'])){$img_name4 = $_POST['name_image_div4'];}
				$tmp_img_name4 = $_FILES['imagediv4']['tmp_name'];
				$location = '../../images/';
				$img_name4 = file_newname($location, $img_name4);
				move_uploaded_file($tmp_img_name4, $location.$img_name4);
				$name_image_div4 = $img_name4;
		}
		else{
			if(isset($_POST['name_image_div4'])){$name_image_div4= $_POST['name_image_div4'];}else{$name_image_div4= '';} 
		}

		if(isset($_FILES['imagediv5']['name']) && !empty($_FILES['imagediv5']['name'])){
				$img_name5= $_FILES['imagediv5']['name'];
				if(isset($_POST['name_image_div5']) && !empty($_POST['name_image_div5'])){$img_name5 = $_POST['name_image_div5'];}
				$tmp_img_name5 = $_FILES['imagediv5']['tmp_name'];
				$location = '../../images/';
				$img_name5 = file_newname($location, $img_name5);
				move_uploaded_file($tmp_img_name5, $location.$img_name5);
				$name_image_div5 = $img_name5;
		}
		else{
			if(isset($_POST['name_image_div5'])){$name_image_div5= $_POST['name_image_div5'];}else{$name_image_div5= '';} 
		}
	
		if(isset($_FILES['imagediv6']['name']) && !empty($_FILES['imagediv6']['name'])){
				$img_name6= $_FILES['imagediv6']['name'];
				if(isset($_POST['name_image_div6']) && !empty($_POST['name_image_div6'])){$img_name6 = $_POST['name_image_div6'];}
				$tmp_img_name6 = $_FILES['imagediv6']['tmp_name'];
				$location = '../../images/';
				$img_name6 = file_newname($location, $img_name6);
				move_uploaded_file($tmp_img_name6, $location.$img_name6);
				$name_image_div6 = $img_name6;
		}
		else{
			if(isset($_POST['name_image_div6'])){$name_image_div6= $_POST['name_image_div6'];}else{$name_image_div6= '';} 
		}

		if(isset($_FILES['imagediv7']['name']) && !empty($_FILES['imagediv7']['name'])){
				$img_name7= $_FILES['imagediv7']['name'];
				if(isset($_POST['name_image_div7']) && !empty($_POST['name_image_div7'])){$img_name7 = $_POST['name_image_div7'];}
				$tmp_img_name7 = $_FILES['imagediv7']['tmp_name'];
				$location = '../../images/';
				$img_name7 = file_newname($location, $img_name7);
				move_uploaded_file($tmp_img_name7, $location.$img_name7);
				$name_image_div7 = $img_name7;
		}
		else{
			if(isset($_POST['name_image_div7'])){$name_image_div7= $_POST['name_image_div7'];}else{$name_image_div7= '';} 
		}

		if(isset($_FILES['imagediv8']['name']) && !empty($_FILES['imagediv8']['name'])){
				$img_name8= $_FILES['imagediv8']['name'];
				if(isset($_POST['name_image_div8']) && !empty($_POST['name_image_div8'])){$img_name8 = $_POST['name_image_div8'];}
				$tmp_img_name8 = $_FILES['imagediv8']['tmp_name'];
				$location = '../../images/';
				$img_name8 = file_newname($location, $img_name8);
				move_uploaded_file($tmp_img_name8, $location.$img_name8);
				$name_image_div8 = $img_name8;
		}
		else{
			if(isset($_POST['name_image_div8'])){$name_image_div8= $_POST['name_image_div8'];}else{$name_image_div8= '';} 
		}

		if(isset($_FILES['imagediv9']['name']) && !empty($_FILES['imagediv9']['name'])){
				$img_name9= $_FILES['imagediv9']['name'];
				if(isset($_POST['name_image_div9']) && !empty($_POST['name_image_div9'])){$img_name9 = $_POST['name_image_div9'];}
				$tmp_img_name9 = $_FILES['imagediv9']['tmp_name'];
				$location = '../../images/';
				$img_name9 = file_newname($location, $img_name9);
				move_uploaded_file($tmp_img_name9, $location.$img_name9);
				$name_image_div9 = $img_name9;
		}
		else{
			if(isset($_POST['name_image_div9'])){$name_image_div9= $_POST['name_image_div9'];}else{$name_image_div9= '';} 
		}

		if(isset($_FILES['imagediv10']['name']) && !empty($_FILES['imagediv10']['name'])){
				$img_name10= $_FILES['imagediv10']['name'];
				if(isset($_POST['name_image_div10']) && !empty($_POST['name_image_div10'])){$img_name10 = $_POST['name_image_div10'];}
				$tmp_img_name10 = $_FILES['imagediv10']['tmp_name'];
				$location = '../../images/';
				$img_name10 = file_newname($location, $img_name10);
				move_uploaded_file($tmp_img_name10, $location.$img_name10);
				$name_image_div10 = $img_name10;
		}
		else{
			if(isset($_POST['name_image_div10'])){$name_image_div10= $_POST['name_image_div10'];}else{$name_image_div10= '';} 
		}
	$title= $_POST['title'];
	$post_by =  $_SESSION['post_by'];
	$style_o_div1= $_POST['style_o_div1']; $style_o_div2= $_POST['style_o_div2']; $style_o_div3= $_POST['style_o_div3']; $style_o_div4= $_POST['style_o_div4']; $style_o_div5= $_POST['style_o_div5']; $style_o_div6= $_POST['style_o_div6']; $style_o_div7= $_POST['style_o_div7']; $style_o_div8= $_POST['style_o_div8']; $style_o_div9= $_POST['style_o_div9']; $style_o_div10= $_POST['style_o_div10']; 
	$attribute_o_div1 = $_POST['attribute_o_div1']; $attribute_o_div2 = $_POST['attribute_o_div2']; $attribute_o_div3 = $_POST['attribute_o_div3']; $attribute_o_div4 = $_POST['attribute_o_div4']; $attribute_o_div5 = $_POST['attribute_o_div5']; $attribute_o_div6 = $_POST['attribute_o_div6']; $attribute_o_div7 = $_POST['attribute_o_div7']; $attribute_o_div8 = $_POST['attribute_o_div8']; $attribute_o_div9 = $_POST['attribute_o_div9']; $attribute_o_div10 = $_POST['attribute_o_div10'];
	$class_o_div1 = $_POST['class_o_div1']; $class_o_div2 = $_POST['class_o_div2']; $class_o_div3 = $_POST['class_o_div3']; $class_o_div4 = $_POST['class_o_div4']; $class_o_div5 = $_POST['class_o_div5']; $class_o_div6 = $_POST['class_o_div6']; $class_o_div7 = $_POST['class_o_div7']; $class_o_div8 = $_POST['class_o_div8']; $class_o_div9 = $_POST['class_o_div9']; $class_o_div10 = $_POST['class_o_div10'];
	$style_i_div1 = $_POST['style_i_div1']; $style_i_div2 = $_POST['style_i_div2']; $style_i_div3 = $_POST['style_i_div3']; $style_i_div4 = $_POST['style_i_div4']; $style_i_div5 = $_POST['style_i_div5']; $style_i_div6 = $_POST['style_i_div6']; $style_i_div7 = $_POST['style_i_div7']; $style_i_div8 = $_POST['style_i_div8']; $style_i_div9 = $_POST['style_i_div9']; $style_i_div10 = $_POST['style_i_div10']; 
	$attribute_i_div1 = $_POST['attribute_i_div1']; $attribute_i_div2 = $_POST['attribute_i_div2']; $attribute_i_div3 = $_POST['attribute_i_div3']; $attribute_i_div4 = $_POST['attribute_i_div4']; $attribute_i_div5 = $_POST['attribute_i_div5']; $attribute_i_div6 = $_POST['attribute_i_div6']; $attribute_i_div7 = $_POST['attribute_i_div7']; $attribute_i_div8 = $_POST['attribute_i_div8']; $attribute_i_div9 = $_POST['attribute_i_div9']; $attribute_i_div10 = $_POST['attribute_i_div10']; 
	$class_i_div1 = $_POST['class_i_div1']; $class_i_div2 = $_POST['class_i_div2']; $class_i_div3 = $_POST['class_i_div3']; $class_i_div4 = $_POST['class_i_div4']; $class_i_div5 = $_POST['class_i_div5']; $class_i_div6 = $_POST['class_i_div6']; $class_i_div7 = $_POST['class_i_div7']; $class_i_div8 = $_POST['class_i_div8']; $class_i_div9 = $_POST['class_i_div9']; $class_i_div10 = $_POST['class_i_div10']; 

	if(isset($_POST['text_div1'])){	$text_div1= $_POST['text_div1'];}else{$text_div1= '';} if(isset($_POST['text_div2'])){	$text_div2= $_POST['text_div2'];}else{$text_div2= '';} if(isset($_POST['text_div3'])){	$text_div3= $_POST['text_div3'];}else{$text_div3= '';} if(isset($_POST['text_div4'])){	$text_div4= $_POST['text_div4'];}else{$text_div4= '';} if(isset($_POST['text_div5'])){	$text_div5= $_POST['text_div5'];}else{$text_div5= '';} if(isset($_POST['text_div6'])){	$text_div6= $_POST['text_div6'];}else{$text_div6= '';} if(isset($_POST['text_div7'])){	$text_div7= $_POST['text_div7'];}else{$text_div7= '';} if(isset($_POST['text_div8'])){	$text_div8= $_POST['text_div8'];}else{$text_div8= '';} if(isset($_POST['text_div9'])){	$text_div9= $_POST['text_div9'];}else{$text_div9= '';} if(isset($_POST['text_div10'])){	$text_div10= $_POST['text_div10'];}else{$text_div10= '';} 
	if(isset($_POST['alt_image_div1'])){$alt_image_div1= $_POST['alt_image_div1'];}else{$alt_image_div1= '';} if(isset($_POST['alt_image_div2'])){$alt_image_div2= $_POST['alt_image_div2'];}else{$alt_image_div2= '';} if(isset($_POST['alt_image_div3'])){$alt_image_div3= $_POST['alt_image_div3'];}else{$alt_image_div3= '';}	if(isset($_POST['alt_image_div4'])){$alt_image_div4= $_POST['alt_image_div4'];}else{$alt_image_div4= '';}	if(isset($_POST['alt_image_div5'])){$alt_image_div5= $_POST['alt_image_div5'];}else{$alt_image_div5= '';}	if(isset($_POST['alt_image_div6'])){$alt_image_div6= $_POST['alt_image_div6'];}else{$alt_image_div6= '';}	if(isset($_POST['alt_image_div7'])){$alt_image_div7= $_POST['alt_image_div7'];}else{$alt_image_div7= '';}	if(isset($_POST['alt_image_div8'])){$alt_image_div8= $_POST['alt_image_div8'];}else{$alt_image_div8= '';} if(isset($_POST['alt_image_div9'])){$alt_image_div9= $_POST['alt_image_div9'];}else{$alt_image_div9= '';}	if(isset($_POST['alt_image_div10'])){$alt_image_div10= $_POST['alt_image_div10'];}else{$alt_image_div10= '';}
	if(isset($_POST['attribute_image_div1'])){$attribute_image_div1= $_POST['attribute_image_div1'];}else{$attribute_image_div1= '';}	if(isset($_POST['attribute_image_div2'])){$attribute_image_div2= $_POST['attribute_image_div2'];}else{$attribute_image_div2= '';}	if(isset($_POST['attribute_image_div3'])){$attribute_image_div3= $_POST['attribute_image_div3'];}else{$attribute_image_div3= '';}	if(isset($_POST['attribute_image_div4'])){$attribute_image_div4= $_POST['attribute_image_div4'];}else{$attribute_image_div4= '';}	if(isset($_POST['attribute_image_div5'])){$attribute_image_div5= $_POST['attribute_image_div5'];}else{$attribute_image_div5= '';}	if(isset($_POST['attribute_image_div6'])){$attribute_image_div6= $_POST['attribute_image_div6'];}else{$attribute_image_div6= '';}	if(isset($_POST['attribute_image_div7'])){$attribute_image_div7= $_POST['attribute_image_div7'];}else{$attribute_image_div7= '';}	if(isset($_POST['attribute_image_div8'])){$attribute_image_div8= $_POST['attribute_image_div8'];}else{$attribute_image_div8= '';}	if(isset($_POST['attribute_image_div9'])){$attribute_image_div9= $_POST['attribute_image_div9'];}else{$attribute_image_div9= '';}	if(isset($_POST['attribute_image_div10'])){$attribute_image_div10= $_POST['attribute_image_div10'];}else{$attribute_image_div10= '';}
	if(isset($_POST['style_image_div1'])){$style_image_div1= $_POST['style_image_div1'];}else{$style_image_div1= '';}	if(isset($_POST['style_image_div2'])){$style_image_div2= $_POST['style_image_div2'];}else{$style_image_div2= '';}	if(isset($_POST['style_image_div3'])){$style_image_div3= $_POST['style_image_div3'];}else{$style_image_div3= '';}	if(isset($_POST['style_image_div4'])){$style_image_div4= $_POST['style_image_div4'];}else{$style_image_div4= '';}	if(isset($_POST['style_image_div5'])){$style_image_div5= $_POST['style_image_div5'];}else{$style_image_div5= '';}	if(isset($_POST['style_image_div6'])){$style_image_div6= $_POST['style_image_div6'];}else{$style_image_div6= '';}	if(isset($_POST['style_image_div7'])){$style_image_div7= $_POST['style_image_div7'];}else{$style_image_div7= '';}	if(isset($_POST['style_image_div8'])){$style_image_div8= $_POST['style_image_div8'];}else{$style_image_div8= '';}	if(isset($_POST['style_image_div9'])){$style_image_div9= $_POST['style_image_div9'];}else{$style_image_div9= '';}	if(isset($_POST['style_image_div10'])){$style_image_div10= $_POST['style_image_div10'];}else{$style_image_div10= '';}	
	if(isset($_POST['class_image_div1'])){$class_image_div1= $_POST['class_image_div1'];}else{$class_image_div1= '';}	if(isset($_POST['class_image_div2'])){$class_image_div2= $_POST['class_image_div2'];}else{$class_image_div2= '';}	if(isset($_POST['class_image_div3'])){$class_image_div3= $_POST['class_image_div3'];}else{$class_image_div3= '';}	if(isset($_POST['class_image_div4'])){$class_image_div4= $_POST['class_image_div4'];}else{$class_image_div4= '';}	if(isset($_POST['class_image_div5'])){$class_image_div5= $_POST['class_image_div5'];}else{$class_image_div5= '';}	if(isset($_POST['class_image_div6'])){$class_image_div6= $_POST['class_image_div6'];}else{$class_image_div6= '';}	if(isset($_POST['class_image_div7'])){$class_image_div7= $_POST['class_image_div7'];}else{$class_image_div7= '';}	if(isset($_POST['class_image_div8'])){$class_image_div8= $_POST['class_image_div8'];}else{$class_image_div8= '';}	if(isset($_POST['class_image_div9'])){$class_image_div9= $_POST['class_image_div9'];}else{$class_image_div9= '';}	if(isset($_POST['class_image_div10'])){$class_image_div10= $_POST['class_image_div10'];}else{$class_image_div10= '';}	


	mysql_query("INSERT INTO  blog (post_status, post_by, title, style_o_div1, style_o_div2, style_o_div3, style_o_div4, style_o_div5, style_o_div6, style_o_div7, style_o_div8, style_o_div9, style_o_div10, attribute_o_div1, attribute_o_div2, attribute_o_div3, attribute_o_div4, attribute_o_div5, attribute_o_div6, attribute_o_div7, attribute_o_div8, attribute_o_div9, attribute_o_div10, class_o_div1, class_o_div2, class_o_div3, class_o_div4, class_o_div5, class_o_div6, class_o_div7, class_o_div8, class_o_div9, class_o_div10, style_i_div1, style_i_div2, style_i_div3, style_i_div4, style_i_div5, style_i_div6, style_i_div7, style_i_div8, style_i_div9, style_i_div10, attribute_i_div1, attribute_i_div2, attribute_i_div3, attribute_i_div4, attribute_i_div5, attribute_i_div6, attribute_i_div7, attribute_i_div8, attribute_i_div9, attribute_i_div10, class_i_div1, class_i_div2, class_i_div3, class_i_div4, class_i_div5, class_i_div6, class_i_div7, class_i_div8, class_i_div9, class_i_div10, text_div1, text_div2, text_div3, text_div4, text_div5, text_div6, text_div7, text_div8, text_div9, text_div10, name_image_div1, name_image_div2, name_image_div3, name_image_div4, name_image_div5, name_image_div6, name_image_div7, name_image_div8, name_image_div9, name_image_div10, alt_image_div1, alt_image_div2, alt_image_div3, alt_image_div4, alt_image_div5, alt_image_div6, alt_image_div7, alt_image_div8, alt_image_div9, alt_image_div10, attribute_image_div1, attribute_image_div2, attribute_image_div3, attribute_image_div4, attribute_image_div5, attribute_image_div6, attribute_image_div7, attribute_image_div8, attribute_image_div9, attribute_image_div10, style_image_div1, style_image_div2, style_image_div3, style_image_div4, style_image_div5, style_image_div6, style_image_div7, style_image_div8, style_image_div9, style_image_div10, class_image_div1, class_image_div2, class_image_div3, class_image_div4, class_image_div5, class_image_div6, class_image_div7, class_image_div8, class_image_div9, class_image_div10) 
		VALUES ('draft', '$post_by', '$title', '$style_o_div1', '$style_o_div2', '$style_o_div3', '$style_o_div4', '$style_o_div5', '$style_o_div6', '$style_o_div7', '$style_o_div8', '$style_o_div9', '$style_o_div10', '$attribute_o_div1', '$attribute_o_div2', '$attribute_o_div3', '$attribute_o_div4', '$attribute_o_div5', '$attribute_o_div6', '$attribute_o_div7', '$attribute_o_div8', '$attribute_o_div9', '$attribute_o_div10', '$class_o_div1', '$class_o_div2', '$class_o_div3', '$class_o_div4', '$class_o_div5', '$class_o_div6', '$class_o_div7', '$class_o_div8', '$class_o_div9', '$class_o_div10', '$style_i_div1', '$style_i_div2', '$style_i_div3', '$style_i_div4', '$style_i_div5', '$style_i_div6', '$style_i_div7', '$style_i_div8', '$style_i_div9', '$style_i_div10', '$attribute_i_div1', '$attribute_i_div2', '$attribute_i_div3', '$attribute_i_div4', '$attribute_i_div5', '$attribute_i_div6', '$attribute_i_div7', '$attribute_i_div8', '$attribute_i_div9', '$attribute_i_div10', '$class_i_div1', '$class_i_div2', '$class_i_div3', '$class_i_div4', '$class_i_div5', '$class_i_div6', '$class_i_div7', '$class_i_div8', '$class_i_div9', '$class_i_div10', '$text_div1', '$text_div2', '$text_div3', '$text_div4', '$text_div5', '$text_div6', '$text_div7', '$text_div8', '$text_div9', '$text_div10', '$name_image_div1', '$name_image_div2', '$name_image_div3', '$name_image_div4', '$name_image_div5', '$name_image_div6', '$name_image_div7', '$name_image_div8', '$name_image_div9', '$name_image_div10', '$alt_image_div1', '$alt_image_div2', '$alt_image_div3', '$alt_image_div4', '$alt_image_div5', '$alt_image_div6', '$alt_image_div7', '$alt_image_div8', '$alt_image_div9', '$alt_image_div10', '$attribute_image_div1', '$attribute_image_div2', '$attribute_image_div3', '$attribute_image_div4', '$attribute_image_div5', '$attribute_image_div6', '$attribute_image_div7', '$attribute_image_div8', '$attribute_image_div9', '$attribute_image_div10', '$style_image_div1', '$style_image_div2', '$style_image_div3', '$style_image_div4', '$style_image_div5', '$style_image_div6', '$style_image_div7', '$style_image_div8', '$style_image_div9', '$style_image_div10', '$class_image_div1', '$class_image_div2', '$class_image_div3', '$class_image_div4', '$class_image_div5', '$class_image_div6', '$class_image_div7', '$class_image_div8', '$class_image_div9', '$class_image_div10')");
	
	
	echo mysql_insert_id();

?>