$(document).ready(function(){
		/*---------------------------edit post page -------------------------------*/

	/*ajax call on publish button clicked in the new post page */
    $('form#new_post_form').submit(function(evt){
        evt.preventDefault();
        $('form#new_post_form input#publish-button').prop( "disabled", true ).val('Publishing...').css({'color' : '#727272', 'width' : '120px'});

        if($('form#new_post_form input#publish-button').hasClass("update")){
                var url = 'publishedbutton/published_update.php';
                var id = $('#id_store').attr('class');
                viv(url, {last_id : id}, function(data){
                    window.location.href = "index.php?nav=allpost";
                    $('form#new_post_form input#publish-button').prop( "disabled", false ).val('Publish').css({'color' : '', 'width' : '100px'}); 
                });
        }
        else{
                var url = 'publishedbutton/published_insert.php';
                viv(url, function(data){
                    window.location.href = "index.php?nav=allpost";
                    $('input#id_store').addClass(data);
                    $('form#new_post_form button#save-button').addClass('update');
                    $('form#new_post_form input#publish-button').addClass('update');
                    $('form#new_post_form input#publish-button').prop( "disabled", false ).val('Publish').css({'color' : '', 'width' : '100px'});
                });
        
        }
    })    

    /*call ended*/

//ajax call on save button clicked in the new post page 
     $('form#new_post_form button#save-button').click(function(){
            $('form#new_post_form button#save-button').prop( "disabled", true ).text('Saving...').css({'color' : '#727272'});
        
            if($('form#new_post_form button#save-button').hasClass("update")){
                var url = 'savebutton/save_update.php';
                var id = $('#id_store').attr('class');
                viv(url, {last_id : id}, function(data){
                    $('form#new_post_form button#save-button').text('Save').prop( "disabled", false ).css({'color' : ''});
                });
            }
            else{
                var url = 'savebutton/save_insert.php';
                viv(url, function(data){
                    $('form#new_post_form button#save-button').text('Save').prop( "disabled", false ).css({'color' : ''});
                    $('input#id_store').addClass(data);
                    $('form#new_post_form button#save-button').addClass('update');
                    $('form#new_post_form input#publish-button').addClass('update');
                });
            }
    });    
/*call ended*/

		/*---------------------------edit post page -------------------------------*/

//ajax call on save button clicked in the edit post page 

$('button#edit_save-button').click(function(){
	$('button#edit_save-button').prop( "disabled", true ).text('Saving...').css({'color' : '#727272'});
	var url = 'savebutton/save_update.php';
    var id = $('form').attr('id').replace('edit_post_form','');
    viv(url, {last_id : id}, function(data){
        $('button#edit_save-button').text('Save').prop( "disabled", false ).css({'color' : ''});
        if($('#edit_publish-button').val()=='Update'){
            $('#edit_publish-button').val('Publish');
        }
    });
});

/*call ended*/

//ajax call on publish button clicked in the edit post page 

$('input#edit_publish-button').click(function(){
	$('input#edit_publish-button').prop( "disabled", true ).val('Publishing...').css({'color' : '#727272', 'width' : '120px'});
	var url = 'publishedbutton/published_update.php';
	var id = $('form').attr('id').replace('edit_post_form','');
	viv(url, {last_id : id}, function(data){
	    window.location.href = "index.php?nav=allpost";
	    $('input#edit_publish-button').prop( "disabled", false ).val('Publish').css({'color' : '', 'width' : '100px'}); 
	});
});

/*call ended*/

// below is the coding for preview button action. This includes hiding previous tab and opening new tab simulteniously    
    var preview = "preview/";
    var childWindow = "";

    $('#preview-button').click(function(){
        $('button#preview-button').prop( "disabled", true ).text('Wait...');        
        var url = 'preview/preview_db_entry.php';
        
        viv(url, function(data){
            $('button#preview-button').prop( "disabled", false ).text('Preview');
            if($('button#preview-button').hasClass("update")){
                childWindow.close();
                childWindow = window.open(preview);
            }
            else{
                $('button#preview-button').addClass("update");
                childWindow = window.open(preview);
            }
        });

    });
// preview button action code ends here.

});