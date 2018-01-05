<?php
$date=date("Y/m/d");
$offset=3*60*60 + 1800;
$t = time()+$offset;
$x = $t+date("Z",$t);
$x1=strftime(" %H:%M:%S ", $x);
  			if (getenv('HTTP_X_FORWARDED_FOR')) {
      		  $pipaddress = getenv('HTTP_X_FORWARDED_FOR');
        	   $ipaddress = getenv('REMOTE_ADDR');
				} 
			else {
       		 $ipaddress = getenv('REMOTE_ADDR');
			 
			 }
			 ?>