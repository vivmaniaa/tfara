/*var loading_font = $(window).width()*0.05;
$('div#loading').css({'font-size': loading_font});*/




$(document).ready(function(){
	

	// javascript for loading page message alert------------------------------
	var load_screen = document.getElementById("load_screen");
	document.body.removeChild(load_screen);
// javascript for loading page message alert ends here---------------------


	function correctDivsHeight(){
			if($('div.divs').height()!= $(window).height()-$('div.header').height()){
				var correctHeight = $(window).height()-$('div.header').height();
				$('div.divs').css({'height': correctHeight+'px'})
			}
			else{
				return false;
			}
	}
	/*correctDivsHeight() function will correct the height of the div.divs when CSS will not work*/

	function navFont(){
		var winw=$(window).width();
		var font =  winw * (0.0146484375);
		$('.style').css({'font-size': font+'px'});
	}; /*navigation dynamic font*/
	
// landscape alert functions*********************************************
	function Landscape_alert_style(){ 
	var outer_font_size = $('.dark').css('font-size');
	$('#outer').css({	'font-size': outer_font_size });
	var left = ($(window).width()-$('#outer').outerWidth())/2;
	$('#outer').css({'left': left });
	};

	function showLandscape_alert(){
				$("#outer").show();
				$("#overlay_bg").fadeIn(1600);
	};

	function hideLandscape_alert(){
		$("#outer").fadeOut();
		$("#overlay_bg").fadeOut();
	};

	function showLandscape_alertCondition(){
		Landscape_alert_style(); 
		var winWidth = window.innerWidth;
		var winHeight = window.innerHeight;
		var winWidth2 = $(window).width();
		if(winWidth<winHeight && $('div#outer').is(':hidden') && winWidth==winWidth2){
			showLandscape_alert();
		}
		else if(winWidth>=winHeight && $('div#outer').is(':visible')){
			hideLandscape_alert();
		}
		else{
			return false;
		}
	};
//landscape alert functions ends************************************************


	function responsive_font(){
		var new_width= $('.dark').width();
		var new_height=$('.dark').height();
		var old_width = width;
		var old_height = height;
		var diff_in_width = new_width - old_width;
		var diff_in_height = new_height - old_height;

		if(new_width != width)
			{
				
				if(diff_in_width>0){
					var old_font_size = $('.dark').css('font-size').replace('px','');
					var font_increment = diff_in_width/30;
					var new_font_size= parseFloat(old_font_size) + parseFloat(font_increment);
					new_font_size= new_font_size.toFixed(2); /* tofixed(2) will hold only two digits after decimal in the new_font_size, and the rest of the digits will be erased. the also the second digit after decimal will be rounded off*/
					$('.dark').css({'font-size': new_font_size+'px'});
				}

				if(diff_in_width<0)
					{
						var old_font_size = $('.dark').css('font-size').replace('px','');
						var font_decrement = Math.abs(diff_in_width/30);
						var new_font_size= parseFloat(old_font_size) - parseFloat(font_decrement);
						new_font_size= new_font_size.toFixed(2);/* tofixed(2) will hold only two digits after decimal in the new_font_size, and the rest of the digits will be erased. the also the second digit after decimal will be rounded off*/
						
						if(new_font_size < 0)
							{
								new_font_size = 0;
							}
						$('.dark').css({'font-size': new_font_size+'px'});
					}

					width = $('.dark').width();
					}

				else
					{
					var old_font_size = $('.dark').css('font-size');
					$('.dark').css({'font-size': old_font_size});
					}

		if(new_height != height)
				{
					if(diff_in_height>0)
						{
						var old_font_size = $('.dark').css('font-size').replace('px','');
						var font_increment = diff_in_height*(10/249);
						var new_font_size= parseFloat(old_font_size) + parseFloat(font_increment);
						new_font_size= new_font_size.toFixed(2);/* tofixed(2) will hold only two digits after decimal in the new_font_size, and the rest of the digits will be erased. the also the second digit after decimal will be rounded off*/
						$('.dark').css({'font-size': new_font_size+'px'});
						}

					if(diff_in_height<0)
						{
							var old_font_size = $('.dark').css('font-size').replace('px','');
							var font_decrement = Math.abs(diff_in_height*(10/249));
							var new_font_size= parseFloat(old_font_size) - parseFloat(font_decrement);
							new_font_size= new_font_size.toFixed(2);/* tofixed(2) will hold only two digits after decimal in the new_font_size, and the rest of the digits will be erased. the also the second digit after decimal will be rounded off*/

							if(new_font_size< 0)
								{
									new_font_size = 0;
								}
							$('.dark').css({'font-size': new_font_size+'px'});
						}

						height = $('.dark').height();
						
					}               
			
		else
			{
				var old_font_size = $('.dark').css('font-size');
				$('.dark').css({'font-size': old_font_size});
			}
	};
	
	function winMediaQuery(){
		if(window.innerWidth!=$(window).width()){
				var winw = window.innerWidth;
				var scrollbar = winw - $(window).width();
				if(winw<=(245+scrollbar)){
					$('#head-ad').css({'display': 'none'});
					$('#logo').css({'margin-top': '0px'});
					$('.header').css({'max-height': '60px'});
					$('div.divs').css({
										'height': '-moz-calc(100% - 60px)',
					    				'height': '-webkit-calc(100% - 60px)',
									    'height': '-o-calc(100% - 60px)',
									    'height': 'calc(100% - 60px)'
									  })
				}
				if(winw>=(246+scrollbar) && winw<=(479+scrollbar)){
					$('#head-ad').css({'display': 'initial'});
					$('.header').css({'max-height': '130px'});
					$('#logo').css({'margin-top': '0px', 'margin-bottom': '0px'});
					$('div.divs').css({
										'height': '-moz-calc(100% - 130px)',
					    				'height': '-webkit-calc(100% - 130px)',
									    'height': '-o-calc(100% - 130px)',
									    'height': 'calc(100% - 130px)'
									  })

				}
				if(winw>=(480+scrollbar) && winw<=(565+scrollbar)){
					$('#head-ad').css({'display': 'initial'});
					$('.header').css({'max-height': '70px'});
					$('#logo').css({'margin-top': '5px'});
					$('div.divs').css({
														'height': '-moz-calc(100% - 70px)',
									    				'height': '-webkit-calc(100% - 70px)',
													    'height': '-o-calc(100% - 70px)',
													    'height': 'calc(100% - 70px)'
													  })
				}
				if(winw>=(246+scrollbar) && winw<=(565+scrollbar)){
					$('#head-ad').css({
															'display': 'initial',
															'margin-bottom': '5px',
															'margin-top': '5px',
															'width': '234px',
															'height': '60px',
															'background': 'url(\'http://www.ksbiz.com/default_234x60_blue.gif\')'
														});

				}
				if(winw>=(566+scrollbar) && winw<=(713+scrollbar)){
					$('#logo').css({'margin-top': '0px'});
					$('#head-ad').css({
															'display': 'initial',
															'width': '320px',
															'height': '50px',
															'background': 'url(\'http://quickbanners.adwingate.com/preview/711f6315-ca83-4bf5-9188-3d5c66f5e2bb-0.png\')'
														});
					$('.header').css({'max-height': '60px'});
					$('div.divs').css({
															'height': '-moz-calc(100% - 60px)',
										    				'height': '-webkit-calc(100% - 60px)',
														    'height': '-o-calc(100% - 60px)',
														    'height': 'calc(100% - 60px)'
														  })	
				}
				if(winw>=(714+scrollbar) && winw<=(973+scrollbar)){
					$('#head-ad').css({
															'display': 'initial',
															'width': '468px',
															'height': '60px',
															'background': 'url(\'http://www.nhlbi.nih.gov/health/educational/wecan/images/20110510-WeCan_webAd-468x60-B.jpg\')'
														});
					$('.header').css({'max-height': '70px'});
					$('#logo').css({'margin-top': '5px'});
					$('div.divs').css({
														'height': '-moz-calc(100% - 70px)',
									    				'height': '-webkit-calc(100% - 70px)',
													    'height': '-o-calc(100% - 70px)',
													    'height': 'calc(100% - 70px)'
													  })
				}
				if(winw>=(974+scrollbar) && winw<=(1215+scrollbar)){
					$('#head-ad').css({
															'display': 'initial',
															'width': '728px',
															'height': '90px',
															'background': 'url(\'http://www.shakeout.org/2008/downloads/ShakeOut_BannerAds_GetReady_728x90_v3.gif\')'
														});
					$('.header').css({'max-height': '100px'});
					$('#logo').css({'margin-top': '20px'});
					$('div.divs').css({
														'height': '-moz-calc(100% - 100px)',
									    				'height': '-webkit-calc(100% - 100px)',
													    'height': '-o-calc(100% - 100px)',
													    'height': 'calc(100% - 100px)'
													  })
				}
				if(winw>=(1216+scrollbar)){
					$('#head-ad').css({
															'display': 'initial',
															'width': '970px',
															'height': '90px',
															'background': 'url(\'http://cdn.assets.craveonline.com/__usa/tnt_falling_skies_season_1_dvd/overlay/_buildout/r02b01/970x90/tnt_falling_skies_season1_dvd_overlay_970x90_pre.jpg\')'
														});
					$('.header').css({'max-height': '100px'});
					$('#logo').css({'margin-top': '20px'});
					$('div.divs').css({
														'height': '-moz-calc(100% - 100px)',
									    				'height': '-webkit-calc(100% - 100px)',
													    'height': '-o-calc(100% - 100px)',
													    'height': 'calc(100% - 100px)'
													  })
				}
		}
		else{
				return false;
		}
	};			
		
		
		var height= 0;/*var height= 166;*/
		var width=0;/*var width=100;*/
		$('.dark').css({'font-size': '0px'});/*$('.dark').css({'font-size': '10px'});*/
		correctDivsHeight();
		responsive_font();
		// below is the landscape alert calling 
		showLandscape_alertCondition();
		$("#overlay_bg, #alert_OK_button").click(function(){
			hideLandscape_alert();
		});
		// landscape alert calling ends
		
		winMediaQuery();
		navFont();
		

		$(window).resize(function(){
			correctDivsHeight();
			responsive_font();
			showLandscape_alertCondition();
			winMediaQuery();
			navFont();
			
		 });
		/*$(window).trigger('resize');//you can use this when you need to run window resize function manually*/
		
/*http://www.javascriptkit.com/howto/newtech3.shtml
var fontsize= $(".dark").css('font-size').replace('px','')
			alert('window\'s width = '+ww+'window\'s height = '+wh);
*/
/*http://stackoverflow.com/questions/10750603/jquery-detect-a-window-width-change-but-not-a-height-change*/

var replace_word = $(".divs div.fact:visible").attr('id').replace('div', '');
$('.vickey').html(replace_word); 
		
var bit = $('#bitcounter').attr('class')-1;

if(bit == 0)
	{
	switch (window.location.href) 
		{
		case 'http://localhost/tafara/secondjquerytest.php':
			$('nav a.prev').css({'display': 'none'});   // The 'disable' is set to true so it will disable the any tag with the id of 'prev'.
			break;
		case 'http://localhost/tafara/secondjquerytest.php?Page=1':
			$('nav a.prev').css({'display': 'none'});   // The 'disable' is set to true so it will disable the any tag with the id of 'prev'.
			break;
		case 'http://localhost/tafara/secondjquerytest.php?Pd=1&Page=1':
			$('nav a.prev').css({'display': 'none'});   // The 'disable' is set to true so it will disable the any tag with the id of 'prev'.
			break;  
		default:
			$('nav a.prev').css({'display': ''});
			break;
		}
	
	}


/*$(".divs div.fact").each(function(e) {
	if (e != 0)
		$(this).hide();
	

// below 2 lines do the same as above line

// var pathname = '/tafara/positiondiv.php'
//if (window.location.href == "http://" + window.location.hostname + pathname ){

//  window.location.href = window.location.href + "?ID=" + demo; }
});*/

$(".buttonnext").click(function()
{
	bit = bit + 1; // this variable is set for hiding prev button.

if ($(".divs div.fact:visible").next().length != 0)
	{
		$('nav a.prev').css({'display': ''});
		$(".divs div.fact:visible").next().show().prev().hide();
	// window.location.href = window.location.href + "?ID=" + demo; 
	//document.getElementById("demo").innerHTML = demo;
	//document.getElementById("demo1").innerHTML = $('.divs div.fact:visible').attr('id');
	}
else{   
	$.ajax({ url: 'pagechange.php', 
				type: 'GET',
				data: {flag: 'yes', Page: $('#pagenum').attr('class')},
				success: function(data){
							window.location.href = data;
						}
		});  

	/*var flag_value1 = 'yes';
	if(window.location.href != "http://localhost/tafara/secondjquerytest.php") 
	{

		window.location.href = window.location.href + "&flag=" + flag_value1; 
	}
	else{
		window.location.href = window.location.href + "?flag=" + flag_value1; 
	}*/
//   $(".divs div.fact:visible").hide();
// $(".divs div.fact:first").show();
}
return false;
});
// alert('Currently you are on very first page. To see more facts click "NEXT" button!');

$(".buttonprev").click(function(){

	bit = bit-1; // this variable is set for hiding prev button.
if (bit == 0)
	{
		switch (window.location.href) {
			case 'http://localhost/tafara/secondjquerytest.php':
				$('nav a.prev').css({'display': 'none'});   // The 'disable' is set to true so it will disable the any tag with the id of 'prev'.
				break;
			case 'http://localhost/tafara/secondjquerytest.php?Page=1':
				$('nav a.prev').css({'display': 'none'});   // The 'disable' is set to true so it will disable the any tag with the id of 'prev'.
				break;
			case 'http://localhost/tafara/secondjquerytest.php?Pd=1&Page=1':
				$('nav a.prev').css({'display': 'none'});   // The 'disable' is set to true so it will disable the any tag with the id of 'prev'.
				break;
			case 'http://localhost/tafara/secondjquerytest.php?Pd=2&Page=1':
					$('nav a.prev').css({'display': 'none'});   // The 'disable' is set to true so it will disable the any tag with the id of 'prev'.
					break;
			case 'http://localhost/tafara/secondjquerytest.php?Pd=3&Page=1':
					$('nav a.prev').css({'display': 'none'});   // The 'disable' is set to true so it will disable the any tag with the id of 'prev'.
					break;
			case 'http://localhost/tafara/secondjquerytest.php?Pd=4&Page=1':
					$('nav a.prev').css({'display': 'none'});   // The 'disable' is set to true so it will disable the any tag with the id of 'prev'.
					break;
			case 'http://localhost/tafara/secondjquerytest.php?Pd=5&Page=1':
					$('nav a.prev').css({'display': 'none'});   // The 'disable' is set to true so it will disable the any tag with the id of 'prev'.
					break;
			case 'http://localhost/tafara/secondjquerytest.php?Pd=6&Page=1':
					$('nav a.prev').css({'display': 'none'});   // The 'disable' is set to true so it will disable the any tag with the id of 'prev'.
					break;
			case 'http://localhost/tafara/secondjquerytest.php?Pd=7&Page=1':
					$('nav a.prev').css({'display': 'none'});   // The 'disable' is set to true so it will disable the any tag with the id of 'prev'.
					break;
			case 'http://localhost/tafara/secondjquerytest.php?Pd=8&Page=1':
					$('nav a.prev').css({'display': 'none'});   // The 'disable' is set to true so it will disable the any tag with the id of 'prev'.
					break;
			case 'http://localhost/tafara/secondjquerytest.php?Pd=9&Page=1':
					$('nav a.prev').css({'display': 'none'});   // The 'disable' is set to true so it will disable the any tag with the id of 'prev'.
					break;
			case 'http://localhost/tafara/secondjquerytest.php?Pd=10&Page=1':
					$('nav a.prev').css({'display': 'none'});   // The 'disable' is set to true so it will disable the any tag with the id of 'prev'.
					break;    
			default:
				$('nav a.prev').css({'display': ''});
				break;
		} 

		}
		if ($(".divs div.fact:visible").prev().length != 0) {

			$(".divs div.fact:visible").prev().show().next().hide();
		}

		else {
			bit = bit - 1;

			if (bit < 0){
				switch (window.location.href) {
					case 'http://localhost/tafara/secondjquerytest.php':
						alert('Currently you are on very first page. To see more facts click "NEXT" button!');   // The 'disable' is set to true so it will disable the any tag with the id of 'prev'.
						break;
					case 'http://localhost/tafara/secondjquerytest.php?Page=1':
						alert('Currently you are on very first page. To see more facts click "NEXT" button!');
						break;
					case 'http://localhost/tafara/secondjquerytest.php?Pd=1&Page=1':
						alert('Currently you are on very first page. To see more facts click "NEXT" button!');
						break;
					case 'http://localhost/tafara/secondjquerytest.php?Pd=2&Page=1':
							alert('Currently you are on very first page. To see more facts click "NEXT" button!');
							break;
					case 'http://localhost/tafara/secondjquerytest.php?Pd=3&Page=1':
							alert('Currently you are on very first page. To see more facts click "NEXT" button!');
							break;
					case 'http://localhost/tafara/secondjquerytest.php?Pd=4&Page=1':
							alert('Currently you are on very first page. To see more facts click "NEXT" button!');
							break;
					case 'http://localhost/tafara/secondjquerytest.php?Pd=5&Page=1':
							alert('Currently you are on very first page. To see more facts click "NEXT" button!');
							break;  
					case 'http://localhost/tafara/secondjquerytest.php?Pd=6&Page=1':
							alert('Currently you are on very first page. To see more facts click "NEXT" button!');
							break;
					case 'http://localhost/tafara/secondjquerytest.php?Pd=7&Page=1':
							alert('Currently you are on very first page. To see more facts click "NEXT" button!');
							break;
					case 'http://localhost/tafara/secondjquerytest.php?Pd=8&Page=1':
							alert('Currently you are on very first page. To see more facts click "NEXT" button!');
							break;
					case 'http://localhost/tafara/secondjquerytest.php?Pd=9&Page=1':
							alert('Currently you are on very first page. To see more facts click "NEXT" button!');
							break;
					case 'http://localhost/tafara/secondjquerytest.php?Pd=10&Page=1':
							alert('Currently you are on very first page. To see more facts click "NEXT" button!');
							break;    
					default:
						$('nav a.prev').css({'display': ''});
						break;
				} 

	}   
	$.ajax({url: 'pagechange.php', 
			type: 'GET',
			data: {flag: 'cool', Page: $('#pagenum').attr('class')},
			success:function(data){
						window.location.href = data;
					}
		});
		/*var flag_value2 = 'cool';
		if (window.location.href == "http://localhost/tafara/secondjquerytest.php") {

			window.location.href = window.location.href + "?flag=" + flag_value2; 
		}
		else{
			window.location.href = window.location.href + "&flag=" + flag_value2; 
		}*/
// $(".divs div.fact:visible").hide();
// $(".divs div.fact:last").show();

}
return false;
}); 

if(bit == 9){
	showLandscape_alertCondition();
}


}); 

var pd='';
function nextSetter(pd){
	$('nav a.prev').css({'display': ''});
	$('.divs div.fact:visible').hide();
	$('.divs div.fact:nth-child('+pd+')').show();
};


var h='';
function hidder(h){
	$(".divs div.fact").each(function(e) {
	if (e != h)
		$(this).hide();
	

// below 2 lines do the same as above line

// var pathname = '/tafara/positiondiv.php'
//if (window.location.href == "http://" + window.location.hostname + pathname ){

//  window.location.href = window.location.href + "?ID=" + demo; }
});
};