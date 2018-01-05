<?php
error_reporting(1);
session_start();
if($_SESSION['INFO'] ["userName"])
{
$userName=$_SESSION['INFO'] ["userName"];
?>
<div class="row">
	<div class="col-md-12 text-center">
		<div class="lfooter">
			<p>tafara@gmail.com</p>
		</div>
	</div>
</div>

</body>
</html>

<?php 
	} 
	else{
			header("Location:login.php");
		}
?>
