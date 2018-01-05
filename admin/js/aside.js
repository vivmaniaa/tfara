$(document).ready(function(){
    $('.post_aside').click(function(){
        $('.post_aside_cat').css({'display': 'inherit'});
    });
    $('#nav_published_post a, #nav_post a').css({'color': ''});
    if((window.location.href.indexOf("nav=allpost") > -1) || (window.location.href.indexOf("nav=draft_post") > -1) || (window.location.href.indexOf("nav=published_post") > -1)){
        $('.post_aside_cat').css({'display': 'inherit'});
        if(window.location.href.indexOf("nav=allpost") > -1){
            $('.post_aside_cat').css({'color': ''});
            $('#nav_allpost, #nav_post').css({'color': '#f26300'});
            /*$('.post_aside_cat').css({'color': ''});
            $('#nav_allpost a, #nav_post').css({'color': '#f26300'});*/
        }
        if(window.location.href.indexOf("nav=published_post") > -1){
            $('.post_aside_cat').css({'color': ''});
            $('#nav_published_post, #nav_post').css({'color': '#f26300'});
        }
        if(window.location.href.indexOf("nav=draft_post") > -1){
            $('.post_aside_cat').css({'color': ''});
            $('#nav_draft_post, #nav_post').css({'color': '#f26300'});
        }
        
    }
    if(window.location.href.indexOf("nav=setting") > -1){
        $('#nav_setting_page').css({'color': '#f26300'});
    }

});