
	function viv(a, b, c){
				
		if(jQuery.type(a)==="undefined"){
			alert("No paramerter asigned!");
			return false;
		}

		else if(jQuery.type(a)!=='undefined' && jQuery.type(b)=="undefined" && jQuery.type(c)== "undefined"){

				if(jQuery.type(a) === "string"){
					var url = a;
				}else{
					return false;
				}
		}else{

				if( (jQuery.type(a)==jQuery.type(b)) || (jQuery.type(a)==jQuery.type(c)) || (jQuery.type(b)==jQuery.type(c)) ){
					alert('same parameters!');
					return false;
				}		
				
				if(jQuery.type(a) === "string"){
					var url = a;
				}else if(jQuery.type(a)=== "object"){
					var obj = a;
				}else if(jQuery.type(a) === "function"){
					var fn = a;
				}else{
					return false;
				}

				if(jQuery.type(b) === "string"){
					var url = b;
				}
				if(jQuery.type(b)=== "object"){
					var obj = b;
				}
				if(jQuery.type(b) === "function"){
					var fn = b;
				}
				if((jQuery.type(b) !== "undefined") && (jQuery.type(b) !== "string") && (jQuery.type(b) !== "object") && (jQuery.type(b) !== "function")){
					return false;
				}

				if(jQuery.type(c) === "string"){
					var url = c;
				} 
				if(jQuery.type(c)=== "object"){
					var obj = c;
				} 
				if(jQuery.type(c) === "function"){
					var fn = c;
				}
				if((jQuery.type(c) !== "undefined") && (jQuery.type(c) !== "string") && (jQuery.type(c) !== "object") && (jQuery.type(c) !== "function")){
					return false;
				}			
				
		}	
		/*console.log("fn: "+fn+", url: "+url+", obj: "+obj);*/


						$form = $('form');
					uploadData($form, url, obj, fn);
						
	};
	function uploadData($form, url, obj, fn){
		$(".progress").fadeIn(300);
		$form.find('.progress-bar').removeClass('progress-bar-success');

		var formData =  new FormData($form[0]); // form element
		
		if(jQuery.type(obj)!=="undefined"){
			for(var key in obj) {
				var value = obj[key];
				formData.append(key, value);
			}
		}
		
		var request = new XMLHttpRequest();

		// progress event...
		request.upload.addEventListener('progress', function(e){
			var percent = Math.round(e.loaded/e.total * 100);
			$form.find('.progress-bar').width(percent+'%').html(percent+'%');

		});

		//progress complete load event
		request.addEventListener('load', function(e){
			$form.find('.progress-bar').addClass('progress-bar-success').html('upload completed...');
			$form.find('.progress').fadeOut(1400); //.delay(1000)
		});

		//progress error event
		request.addEventListener('error', function(e){
			$form.find('.progress-bar').addClass('progress-bar-danger').html('Error!!');
		});

		// call back function
		if(jQuery.type(fn) !== "undefined"){
			request.addEventListener('readystatechange', function(e) {
				if(request.readyState === 4){
					if(request.status === 200){
						fn(request.responseText);
					}
					else{
						console.log("server: "+request.status);
					}
				}
			}, fn);
		} 


		request.open('post', url);
		request.send(formData); 
	};
	
