<!DOCTYPE html>
<html lang="en">
<head>

	<title>Blog</title>

	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width,initial-scale=1">

	<!-- bootstrap -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

	<!-- fontawesome -->
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

	<!-- isotope -->
	<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>

	<!-- customizations -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="control.js"></script>

</head>
<body>

	<!-- Navbar -->

	<?php require 'assets/navbar.php'; ?>

	<section class="container-fluid">
		<div class="row m-3" id="row">
			<div class="col-sm-8">
				<h2 class="font-weight-bold" style="font-family: 'Montserrat',sans-serif; ">


					<!-- Responsive Image Gallery - HTML | CSS | JavaScript  -->

					<?php 

					$Id = $_GET['id'];

					$sql = "SELECT name,image,source,badge FROM snippets WHERE id = '$Id'";
					$myData = mysqli_query($conn,$sql);


					if(mysqli_num_rows($myData) > 0) {
					  
					while($record=mysqli_fetch_array($myData)){

						echo $record['name'];
						$source = $record['source'];
						$img = $record['image'];
						$badge = $record['badge'];

						}
					}

					?>



				</h2><br>
				<div class="thumbnail rounded shadow">
					<img src="data:image/jpeg;base64,<?php echo base64_encode($img); ?>" class="rounded-top" alt="Nature" style="width:100%; height: 350px;"><hr style="margin: 0; padding: 0;">
					
					<?php echo $badge; ?>
						<!-- <span class="text-secondary">--</span> -->
						<span class="float-right pr-2"><i class="text-primary fa fa-comment"></i></span>
					</div>
				</div>

				<!-- Getting source code from database -->

				<?php

					echo $source;

					mysqli_close($conn);

				?>

				
			</div>

			<!-- ASIDE -->

			<div class="col-sm-4 w-100" id="aside">
				
				<div class="list-group" id="list-group">
				  <a href="#" class="list-group-item list-group-item-action active pointer-none">
				    Browse by
				  </a>
				  <a href="assets/category.php?cat=bs" class="list-group-item list-group-item-action">Bootstrap designs</a>
				  <a href="assets/category.php?cat=JavaScript" class="list-group-item list-group-item-action">JavaScript</a>
				  <a href="assets/category.php?cat=HTML" class="list-group-item list-group-item-action">Simple HTML codes</a>
				  <a href="assets/category.php?cat=0" class="list-group-item list-group-item-action">Tricky Challenges</a>
				</div><br>
				
				<div class="list-group" id="list-group">
				  <a href="#" class="list-group-item list-group-item-action active">
				    Popular
				  </a>
				  <a href="#" class="list-group-item list-group-item-action">Responsive Image Gallery</a>
				  <a href="#" class="list-group-item list-group-item-action">Tab Gallery</a>
				  <a href="#" class="list-group-item list-group-item-action">Floating Form codes</a>
				  <a href="#" class="list-group-item list-group-item-action">Something else</a>
				</div>

			</div>
		</div>
	</section><br><br>

	<!-- footer -->

	<?php require 'footer.php';?>

	<script type="text/javascript" src="control.js"></script>
</body>
</html>