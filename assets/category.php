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
	<link rel="stylesheet" type="text/css" href="../style.css">
	<script type="text/javascript" src="../control.js"></script>

</head>
<body>

	<!-- Navbar -->

	<?php require 'navbar.php'; ?>



	<section class="container-fluid" id="customSnippets">
		<div class="row" id="row">

			<?php 

			$user = 'root';
			$password = '';
			$db = 'tutorialPoint';

			$cat = $_GET['cat'];

					// Create connection
			$conn = mysqli_connect('localhost', $user, $password, $db);

					// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}

			$sql = "SELECT * FROM snippets WHERE name LIKE '%$cat%'";

			$myData = mysqli_query($conn,$sql);

			if(mysqli_num_rows($myData) > 0) {


				while($record=mysqli_fetch_array($myData)) {

					$image = $record['image'];

					?>

					<div class="col-md-4 mb-4">
						<div class="thumbnail rounded shadow">
							<a href="../snippet.php?id=<?php echo $record['id']; ?>">
								<?php

								echo "<img src='data:image;base64,".base64_encode($record['image'])."' class='rounded-top' alt='Nature' style='width:100%; height: 200px;'>";
								// echo $record['id'];

								?>

								<div id="badge" class="position-absolute p-1" style="z-index: ; top: 0;">
									<div class="badge badge-primary">HTML</div>
									<div class="badge badge-success">CSS</div>
									<!-- <div class="badge badge-danger">JavaScript</div> -->
								</div><hr class="m-0 p-0">
								<div class="p-2 caption">
									<p class="text-dark font-weight-bold">
										<?php echo $record['name']; ?>
									</p>
									<span class="text-right"><i class="fa fa-clock-o"></i></span>
									<span class="text-secondary" id="time" data-attribute='December 31, 2019'>December 31, 2020</span>
									<span class="float-right pr-2"><i class="fa fa-comment"></i></span>
								</div>
							</a>
						</div>
					</div>

					<?php

				}

			}


			else {

				echo '<h3 class="d-flex align-items-center justify-content-center h-100 w-100 text-white bg-info m-2 rounded" style="min-height: 100vh;">COMING SOON 😉</h3>';
			}

			mysqli_close($conn);

			?>
		</div>
	</section>
	
	<!-- Footer -->
	<?php require 'footer.php'; ?>

	<script type="text/javascript" src="../control.js"></script>



</body>
</html>