<!-- INCLUDE HEADER PHP FILE -->
<?php include'adminHeader.php';?>
<!-- END OF INCLUDE HEADER PHP FILE -->

<div class="row">
	<div class="container margin-top-bottom">
	
	<!-- INCLUDE ASIDE BAR  HERE -->
	<?php include'adminAside.php'; ?>
	<!-- END OF INCLUDE ASIDE BAR  HERE -->
		<div class="col-lg-9">
			<div class="row">
				<div class="dash-header">
					<h1>View</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					
					<?php
						include 'config.php';
						$query = "SELECT * FROM facts";
						$sqlquery = mysql_query($query);

						if(mysql_num_rows($sqlquery)>0){
							while ($arr = mysql_fetch_array($sqlquery)){
									
									$code=$arr['code'];
									$date=$arr['date'];
									$postedBy = $arr['postedBy'];
									$category = $arr['category'];
									$title = $arr['title'];
									$subHeading = $arr['subHeading'];
									$image = $arr['image'];
									$article = $arr['article'];
									$source = $arr['source'];
									// echo "<div class='fetch'>";	
									// echo "$factId";
									// echo "$date";
									// echo "$postedBy";
									// echo "$category";
									// echo "$title";
									// echo "$tfaraFact";
									// echo "<img src='../Image_Name/$title' height='100' width='100'>";
									// echo "$article";
									// echo "$source";
									// echo "</div>";

									?>
									<div class="row">
										<div class="col-sm-1 bgColor-darkRed">
											<h1><?php echo '#'.$code; ?></h1>
										</div>
										<div class="col-sm-11 bgColor-lightRed">
											<div class="row">
												<div class="col-sm-9">
													<h2><?php echo $title; ?></h2>
													<p><?php echo $subHeading; ?></p>
													<h5><?php echo 'Source: '.$source ?></h5>
												</div>
												<div class="col-sm-3">
													<img src="../Image_Name/<?php echo $image; ?>" width="130" height="130"/>
												</div>
											</div>
											<div class="row">
												<div class="col-sm-12 bgColor-darkRed">
													<div class="left">
														<?php echo 'Date: '.$date; ?>
													</div>
													<div class="right">
														<?php echo 'Posted By: '.$postedBy; ?>
													</div>
												</div>
											</div>
										</div>
									</div>
									<br>
									<?php

							}
						}else{
								echo "No Data Found";
						}

					 ?>

				</div>
			</div>
		</div>
	</div>
</div>
<!-- INCLUDE FOOTER PHP FILE HERE -->
<?php include'footer.php';?>
<!-- END OF INCLUDE FOOTER PHP FILE HERE -->