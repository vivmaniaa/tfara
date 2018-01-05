$(document).ready(function(){
$('body').click(function(evt){   
      $('.progress-bar').width(0+'%').html(0+'%').removeClass('progress-bar-success');
//------------- while bar is showing and you clicked to the body it look weird------------------------- 
});
    
    $(".progress").hide();

   
	 $("div.section_div").each(function(e) {
	if (e != 0)
		$(this).hide();
		
	});

    function allBlank(){
        $("#div1_o_style, #div2_o_style, #div3_o_style, #div4_o_style, #div5_o_style, #div6_o_style, #div7_o_style, #div8_o_style, #div9_o_style, #div10_o_style").html("");
        div_text1=div_text2=div_text3=div_text4=div_text5=div_text6=div_text7=div_text8=div_text9=div_text10='';
    };

    var div_text = "";var div_text1 = "";var div_text2 = "";var div_text3 = "";var div_text4 = "";var div_text5 = "";var div_text6 = "";var div_text7 = "";var div_text8 = "";var div_text9 = "";var div_text10 = "";    
    
    $(".div_textimage").change(function() {
        var val = $(this).val();
        var form_id = $(this).closest('form').attr("id").replace('edit_post_form', '');
        var data ='';

        if (val == "None") {
            var div_id = $(this).attr("id").replace('select_', 'text_');
            var div_no = $(this).attr("id").replace('select_', '');
            $(this).next(".text_or_image").html("");
            $("html, body").animate({ scrollTop: $("#html_"+div_no).closest('div.sub_div_container').prev().offset().top }, 1000);
        } else if (val == "text") {
            var div_id = $(this).attr("id").replace('select_', 'text_');
            var div_no = $(this).attr("id").replace('select_', '');
            $(this).siblings(".text_or_image").html("<span style='display: inline-block; width: 60%;'><label for='"+div_id+"'>Text</label><br /><textarea id='"+div_id+"' name='"+div_id+"' type='text' style='width:100%;' >"+div_text+"</textarea></span>");
            /*$("html, body").animate({ scrollTop: $("#html_"+div_no).closest('div.sub_div_container').prev().offset().top }, 1000);*/
                if(div_id == 'text_div1'){
                    $.getJSON('edit_img_text.php', {id : form_id, column : div_id}, function(data){
                        $('#text_div1').html(data.text);
                    });
                }

                if(div_id == 'text_div2'){
                    $.getJSON('edit_img_text.php', {id : form_id, column : div_id}, function(data){
                        $('#text_div2').html(data.text);
                    });
                }

                if(div_id == 'text_div3'){
                    $.getJSON('edit_img_text.php', {id : form_id, column : div_id}, function(data){
                        $('#text_div3').html(data.text);
                    });
                }

                if(div_id == 'text_div4'){
                    $.getJSON('edit_img_text.php', {id : form_id, column : div_id}, function(data){
                        $('#text_div4').html(data.text);
                    });
                }

                if(div_id == 'text_div5'){
                    $.getJSON('edit_img_text.php', {id : form_id, column : div_id}, function(data){
                        $('#text_div5').html(data.text);
                    });
                }

                if(div_id == 'text_div6'){
                    $.getJSON('edit_img_text.php', {id : form_id, column : div_id}, function(data){
                        $('#text_div6').html(data.text);
                    });
                }

                if(div_id == 'text_div7'){
                    $.getJSON('edit_img_text.php', {id : form_id, column : div_id}, function(data){
                        $('#text_div7').html(data.text);
                    });
                }

                if(div_id == 'text_div8'){
                    $.getJSON('edit_img_text.php', {id : form_id, column : div_id}, function(data){
                        $('#text_div8').html(data.text);
                    });
                }

                if(div_id == 'text_div9'){
                    $.getJSON('edit_img_text.php', {id : form_id, column : div_id}, function(data){
                        $('#text_div9').html(data.text);
                    });
                }

                if(div_id == 'text_div10'){
                    $.getJSON('edit_img_text.php', {id : form_id, column : div_id}, function(data){
                        $('#text_div10').html(data.text);
                    });
                }

                    
        } else if (val == "image") {
            var div_id = $(this).attr("id").replace('select_', 'image_');
            var div_no = $(this).attr("id").replace('select_', '');
            $(this).siblings("div.text_or_image").html("<br /><span style='display: inline-block; width: 80%;'><div class='fileUpload btn btn-primary' style='width:90%'><span>Upload the image below.</span><input id='uploadBtn_"+div_no
                +"' type='file' class='upload ajaxup' name='image"+div_no
                +"' /></div></span><span style='display: inline-block; width: 32%;'><label for='name_"+div_id
                +"' >Image Name</label><br /><textarea id='name_"+div_id
                +"' name='name_"+div_id
                +"' type='text' style='width:100%;' ></textarea></span>&nbsp<span style='display: inline-block; width: 32%;'><br /><label for='alt_"+div_id
                +"' >Alt</label><br /><textarea id='alt_"+div_id+"' name='alt_"+div_id
                +"' type='text' style='width:100%;' ></textarea></span>&nbsp<span style='display: inline-block; width: 32%;'><br /><label for='attribute_"+div_id
                +"' >Attribute</label><br /><textarea id='attribute_"+div_id
                +"' name='attribute_"+div_id
                +"' type='text' style='width:100%;' ></textarea></span>&nbsp<span style='display: inline-block; width: 32%;'><br /><label for='style_"+div_id
                +"' >Style</label><br /><textarea id='style_"+div_id
                +"' name='style_"+div_id
                +"' type='text' style='width:100%;' ></textarea></span>&nbsp<span style='display: inline-block; width: 32%;'><br /><label for='class_"+div_id
                +"' >Class</label><br /><textarea id='class_"+div_id
                +"' name='class_"+div_id
                +"' type='text' style='width:100%;' ></textarea></span>");
                /*$("html, body").animate({ scrollTop: $("#html_"+div_no).closest('div.sub_div_container').prev().offset().top }, 1000);*/
                
                
            /*if(window.location.href.indexOf("nav=edit") > -1){*/
                if(div_id == 'image_div1'){
                    var column1= "name_"+div_id; var column2= "alt_"+div_id; var column3= "attribute_"+div_id; var column4= "style_"+div_id; var column5= "class_"+div_id; 
                    var fields= column1+", "+column2+", "+column3+", "+column4+", "+column5;                    
                    $.getJSON('edit_img_text.php', {id : form_id, column : fields, flag : "edit"}, function(data){
                            $("#name_"+div_id).html(data.name);$("#alt_"+div_id).html(data.alt);$("#attribute_"+div_id).html(data.attribute);$("#style_"+div_id).html(data.style);$("#class_"+div_id).html(data.class);                    
                        });
                }
                
                if(div_id == 'image_div2'){
                    var column1= "name_"+div_id; var column2= "alt_"+div_id; var column3= "attribute_"+div_id; var column4= "style_"+div_id; var column5= "class_"+div_id; 
                    var fields= column1+", "+column2+", "+column3+", "+column4+", "+column5;                    
                    $.getJSON('edit_img_text.php', {id : form_id, column : fields, flag : "edit"}, function(data){
                            $("#name_"+div_id).html(data.name);$("#alt_"+div_id).html(data.alt);$("#attribute_"+div_id).html(data.attribute);$("#style_"+div_id).html(data.style);$("#class_"+div_id).html(data.class);                    
                        });
                }

                if(div_id == 'image_div3'){
                    var column1= "name_"+div_id; var column2= "alt_"+div_id; var column3= "attribute_"+div_id; var column4= "style_"+div_id; var column5= "class_"+div_id; 
                    var fields= column1+", "+column2+", "+column3+", "+column4+", "+column5;                    
                    $.getJSON('edit_img_text.php', {id : form_id, column : fields, flag : "edit"}, function(data){
                            $("#name_"+div_id).html(data.name);$("#alt_"+div_id).html(data.alt);$("#attribute_"+div_id).html(data.attribute);$("#style_"+div_id).html(data.style);$("#class_"+div_id).html(data.class);                    
                        });
                }

                if(div_id == 'image_div4'){
                    var column1= "name_"+div_id; var column2= "alt_"+div_id; var column3= "attribute_"+div_id; var column4= "style_"+div_id; var column5= "class_"+div_id; 
                    var fields= column1+", "+column2+", "+column3+", "+column4+", "+column5;                    
                    $.getJSON('edit_img_text.php', {id : form_id, column : fields, flag : "edit"}, function(data){
                            $("#name_"+div_id).html(data.name);$("#alt_"+div_id).html(data.alt);$("#attribute_"+div_id).html(data.attribute);$("#style_"+div_id).html(data.style);$("#class_"+div_id).html(data.class);                    
                        });
                }

                if(div_id == 'image_div5'){
                    var column1= "name_"+div_id; var column2= "alt_"+div_id; var column3= "attribute_"+div_id; var column4= "style_"+div_id; var column5= "class_"+div_id; 
                    var fields= column1+", "+column2+", "+column3+", "+column4+", "+column5;                    
                    $.getJSON('edit_img_text.php', {id : form_id, column : fields, flag : "edit"}, function(data){
                            $("#name_"+div_id).html(data.name);$("#alt_"+div_id).html(data.alt);$("#attribute_"+div_id).html(data.attribute);$("#style_"+div_id).html(data.style);$("#class_"+div_id).html(data.class);                    
                        });
                }

                if(div_id == 'image_div6'){
                    var column1= "name_"+div_id; var column2= "alt_"+div_id; var column3= "attribute_"+div_id; var column4= "style_"+div_id; var column5= "class_"+div_id; 
                    var fields= column1+", "+column2+", "+column3+", "+column4+", "+column5;                    
                    $.getJSON('edit_img_text.php', {id : form_id, column : fields, flag : "edit"}, function(data){
                            $("#name_"+div_id).html(data.name);$("#alt_"+div_id).html(data.alt);$("#attribute_"+div_id).html(data.attribute);$("#style_"+div_id).html(data.style);$("#class_"+div_id).html(data.class);                    
                        });
                }

                if(div_id == 'image_div7'){
                    var column1= "name_"+div_id; var column2= "alt_"+div_id; var column3= "attribute_"+div_id; var column4= "style_"+div_id; var column5= "class_"+div_id; 
                    var fields= column1+", "+column2+", "+column3+", "+column4+", "+column5;                    
                    $.getJSON('edit_img_text.php', {id : form_id, column : fields, flag : "edit"}, function(data){
                            $("#name_"+div_id).html(data.name);$("#alt_"+div_id).html(data.alt);$("#attribute_"+div_id).html(data.attribute);$("#style_"+div_id).html(data.style);$("#class_"+div_id).html(data.class);                    
                        });
                }

                if(div_id == 'image_div8'){
                    var column1= "name_"+div_id; var column2= "alt_"+div_id; var column3= "attribute_"+div_id; var column4= "style_"+div_id; var column5= "class_"+div_id; 
                    var fields= column1+", "+column2+", "+column3+", "+column4+", "+column5;                    
                    $.getJSON('edit_img_text.php', {id : form_id, column : fields, flag : "edit"}, function(data){
                            $("#name_"+div_id).html(data.name);$("#alt_"+div_id).html(data.alt);$("#attribute_"+div_id).html(data.attribute);$("#style_"+div_id).html(data.style);$("#class_"+div_id).html(data.class);                    
                        });
                }

                if(div_id == 'image_div9'){
                    var column1= "name_"+div_id; var column2= "alt_"+div_id; var column3= "attribute_"+div_id; var column4= "style_"+div_id; var column5= "class_"+div_id; 
                    var fields= column1+", "+column2+", "+column3+", "+column4+", "+column5;                    
                    $.getJSON('edit_img_text.php', {id : form_id, column : fields, flag : "edit"}, function(data){
                            $("#name_"+div_id).html(data.name);$("#alt_"+div_id).html(data.alt);$("#attribute_"+div_id).html(data.attribute);$("#style_"+div_id).html(data.style);$("#class_"+div_id).html(data.class);                    
                        });
                }

                if(div_id == 'image_div10'){
                    var column1= "name_"+div_id; var column2= "alt_"+div_id; var column3= "attribute_"+div_id; var column4= "style_"+div_id; var column5= "class_"+div_id; 
                    var fields= column1+", "+column2+", "+column3+", "+column4+", "+column5;                    
                    $.getJSON('edit_img_text.php', {id : form_id, column : fields, flag : "edit"}, function(data){
                            $("#name_"+div_id).html(data.name);$("#alt_"+div_id).html(data.alt);$("#attribute_"+div_id).html(data.attribute);$("#style_"+div_id).html(data.style);$("#class_"+div_id).html(data.class);                    
                        });
                }
        }   
    });

	$('button.hide_div').click(function(){
		$(this).closest('.section_div').fadeOut();
        $(this).closest('.section_div').prev().find( "button.hide_div , button.show_next_div" ).delay(400).fadeIn(0);
	});
   

    $('button.show_next_div').click(function(){
    	$(this).closest('.section_div').next().fadeIn(1000);
    	$(this).hide();
    	$(this).siblings('button.hide_div').hide();
        $('#publish-button, #save-button, #preview-button').hide().fadeIn(950);
    	
    	$("html, body").animate({ scrollTop: $(document).height()-$(window).height() });
    	
    });

    $("#template_select").change(function() {
        var value = $(this).val();
        if (value == "Leo") {
            $("#div1_o_style").html("background-color: red; width: 50%; height: 100%; position: absolute; top:0%; right: 0%;");
            $("#div2_o_style").html("background-color: red; width: 50%; height: 100%; position: absolute; top:0%; right: 0%;");
            div_text1 = div_text2 = 'om shanti';
        }      
        if(value == "None"){
            $("#div1_o_style, #div2_o_style").html("");
            div_text1 = div_text2 = "";
        }
    });

    $('h5').click(function(){

    });
    
    
    $('a.edit-post').click(function(){
        var edit_post_id = $(this).closest('div.post_admin').attr("id").replace('post-', '');
        window.location.href = "index.php?postID="+edit_post_id+"&nav=edit";
    });
        
    $( "#load_screen" ).remove();



// post delete function start from here
$('a.delete-post').click(function(){
        swal({   
            title: "Are you sure?",   
            text: "You will not be able to recover this post!",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Yes, delete it!",   
            cancelButtonText: "Cancel!",   
            closeOnConfirm: true,   
            closeOnCancel: true }, 
            function(isConfirm){   
                if (isConfirm) { 
                    var delete_post_id = $('a.delete-post').closest('div.post_admin').attr("id").replace('post-', '');
                    var url = "post_delete.php";
                    var data = {bid : delete_post_id};
                    $.post(url, data, function(data){
                        swal("Deleted!", "Your post has been deleted and the page is reloading...", "success");   
                        $('a.delete-post').closest('div.post_admin').fadeOut();
                        window.location.reload();

                    });    
                    
                } else {     
                    swal("Cancelled", "Your post is safe :)", "error");   
                } 
            });
    });
// post delte function ended

// prevent default action on pressing enter button
$(window).keydown(function(event){
    if(event.keyCode == 13) {
      event.preventDefault();
      return false;
    }
  });
// end of code for preventing default action of enter button.

});