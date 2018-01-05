
<!-- INCLUDE HEADER PHP FILE -->
<?php include'adminHeader.php';?>
<!-- END OF INCLUDE HEADER PHP FILE -->


<?php
error_reporting(1);

include'ipaddress.php';


$category=$_POST['category'];
$title=$_POST['title'];
$subHeading=$_POST['subHeading'];
// $image=$_POST['image'];
$article=$_POST['article'];
$source=$_POST['source'];

include'config.php';

if(isset($_POST['sub']))
	{
		$query="insert into facts(regCode, date, ipAddress, userName, postedBy, category, title, subHeading, image, article,source) values('$regCode', now(),'$ipaddress', '$userName','$name','$category','$title','$subHeading','$title.jpg','$article','$source')";
		
		// echo $query;
		
		$inserted=mysql_query($query);


		if($inserted)
			{
				move_uploaded_file($_FILES['upload']['tmp_name'],"../Image_Name/$title.jpg");

			}
		
		$msg='<p class="error-msg">Inserted!</p>';

	}
?>


<div class="row">
	<div class="container margin-top-bottom">
		
		<!-- INCLUDE ASIDE BAR  HERE -->
		<?php include'adminAside.php'; ?>
		<!-- END OF INCLUDE ASIDE BAR  HERE -->

		<div class="col-lg-9">
			<div class="row">
				<div class="dash-header">
					<h1>Add</h1>
				</div>
			</div>
			
			<?php echo $msg; ?>

			<div class="row">
				<div class="col-md-12">
					<form action="" method="post" enctype="multipart/form-data">
						<div>
							<label>Category</label>
							<select class="form-control" id="category" name="category">
							    <option>Select</option>
							    <option>Science</option>
							    <option>Technology</option>
							    <option>Animals</option>
							    <option>Mamels</option>
							    <option>Nature</option>
							    <option>Human</option>
							    <option>Food</option>
							    <option>Others</option>
						  	</select>
						</div>
						<div>
							<label>Title</label>
							<input type="text" class="form-control" name="title"/>
						</div>
						<div>
							<label>Tfara Fact</label>
							<textarea class="form-control" rows="3" name="subHeading"></textarea>
						</div>
						<div>
							<label>Image</label>
							 <input type="file" id="upload" name="upload">
						</div>
						<div>
							<label>Article</label>
							<textarea class="form-control" rows="3" name="article"></textarea>
						</div>
						<div>
							<label>Soruce</label>
							<input type="text" class="form-control" name="source"/>
						</div>
						<div style="float:right;">
							<br>
							<button type="submit"class="btn btn-info" name="sub">Add Post</button>
						</div>

					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- INCLUDE FOOTER PHP FILE HERE -->
<?php include'footer.php';?>
<!-- END OF INCLUDE FOOTER PHP FILE HERE -->
