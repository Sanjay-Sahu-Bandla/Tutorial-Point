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

	<?php include 'assets/navbar.php'; ?>

	<section id="home">

		<div class="bg"></div>

		<div id="home-content" class="container d-flex justify-content-center align-items-center">
			<div class="heading text-center">
				<h3 class="text-white" id="title">doSo Developers</h3>
				<h1 class="font-weight-normal text-white">An <span class="font-weight-bolder">Online Tutorial </span> For Beginners</h1><br>
				<a class="text-white shadow btn btn-primary btn-lg rounded-pill px-5" id="joinUs">Join Us !</a>
			</div>
		</div>

	</section>

	<section class="container-fluid" id="snippets">
		<div class="row" id="row">
			<div class="col-md-4 mb-4">
				<div class="thumbnail rounded shadow">
					<a href="snippet.php?id=10">
						<img src="images/torchLight.png" class="rounded-top" alt="Nature" style="width:100%; height: 200px;">
						<div id="badge" class="position-absolute p-1" style="z-index: ; top: 0;">
							<div class="badge badge-primary">HTML</div>
							<div class="badge badge-success">CSS</div>
							<div class="badge badge-danger">JavaScript</div>
						</div><hr class="m-0 p-0">
						<div class="p-2 caption">
							<p class="text-dark font-weight-bold">Creating Torch Light - HTML | CSS | JavaScript</p>
							<span class="text-right"><i class="fa fa-clock-o"></i></span>
							<span class="text-secondary" id="time" data-attribute='December 31, 2019'>December 31, 2020</span>
							<span class="float-right pr-2"><i class="fa fa-comment"></i></span>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-4 mb-4">
				<div class="thumbnail rounded shadow">
					<a href="snippet.php?id=9">
						<img src="images/timingProgress.png" class="rounded-top" alt="Nature" style="width:100%; height: 200px;">
						<div id="badge" class="position-absolute p-1" style="z-index: ; top: 0;">
							<div class="badge badge-primary">HTML</div>
							<div class="badge badge-success">CSS</div>
							<div class="badge badge-danger">JavaScript</div>
						</div>
						<div class="p-2 caption">
							<p class="text-dark font-weight-bold">12 Hours Timing With Progressbar - HTML | CSS | JS</p>
							<span class="text-right"><i class="fa fa-clock-o"></i></span>
							<span class="text-secondary" id="time" data-attribute='November 11, 2019'>November 11, 2019</span>
							<span class="float-right pr-2"><i class="fa fa-comment"></i></span>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-4 mb-4">
				<div class="thumbnail rounded shadow">
					<a href="snippet.php?id=8">
						<img src="images/trafficLoader.png" class="rounded-top" alt="Nature" style="width:100%; height: 200px;">
						<div id="badge" class="position-absolute p-1" style="z-index: ; top: 0;">
							<div class="badge badge-primary">HTML</div>
							<div class="badge badge-success">CSS</div>
						</div>
						<div class="p-2 caption">
							<p class="text-dark font-weight-bold">Traffic Loader - HTML | CSS</p>
							<span class="text-right"><i class="fa fa-clock-o"></i></span>
							<span class="text-secondary" id="time" data-attribute='November 1, 2019'>November 1, 2019</span>
							<span class="float-right pr-2"><i class="fa fa-comment"></i></span>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-4 mb-4">
				<div class="thumbnail rounded shadow">
					<a href="snippet.php?id=7">
						<img src="images/tabGallery.png" class="rounded-top" alt="Nature" style="width:100%; height: 200px;">
						<div id="badge" class="position-absolute p-1" style="z-index: ; top: 0;">
							<div class="badge badge-primary">HTML</div>
							<div class="badge badge-success">CSS</div>
							<div class="badge badge-danger">JavaScript</div>
						</div>
						<div class="p-2 caption">
							<p class="text-dark font-weight-bold">Creating Tab Gallery - HTML | CSS | JavaScript</p>
							<span class="text-right"><i class="fa fa-clock-o"></i></span>
							<span class="text-secondary" id="time" data-attribute='August 21, 2019'>August 21, 2019</span>
							<span class="float-right pr-2"><i class="fa fa-comment"></i></span>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-4 mb-4">
				<div class="thumbnail rounded shadow">
					<a href="snippet.php?id=6">
						<img src="images/validForm.png" class="rounded-top" alt="Nature" style="width:100%; height: 200px;">
						<div id="badge" class="position-absolute p-1" style="z-index: ; top: 0;">
							<div class="badge badge-primary">HTML</div>
							<div class="badge badge-success">CSS</div>
							<div class="badge badge-danger">JavaScript</div>
						</div>
						<div class="p-2 caption">
							<p class="text-dark font-weight-bold">Floating Fields : Login Form - HTML | CSS</p>
							<span class="text-right"><i class="fa fa-clock-o"></i></span>
							<span class="text-secondary" id="time" data-attribute='July 1, 2019'>July 1, 2019</span>
							<span class="float-right pr-2"><i class="fa fa-comment"></i></span>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-4 mb-4">
				<div class="thumbnail rounded shadow">
					<a href="snippet.php?id=5">
						<img src="images/profileCard.png" class="rounded-top" alt="Nature" style="width:100%; height: 200px;">
						<div id="badge" class="position-absolute p-1" style="z-index: ; top: 0;">
							<div class="badge badge-primary">HTML</div>
							<div class="badge badge-success">CSS</div>
						</div>
						<div class="p-2 caption">
							<p class="text-dark font-weight-bold">Creating Resoponsive Profile Card - HTML | CSS</p>
							<span class="text-right"><i class="fa fa-clock-o"></i></span>
							<span class="text-secondary" id="time" data-attribute='June 1, 2019'>June 1, 2019</span>
							<span class="float-right pr-2"><i class="fa fa-comment"></i></span>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-4 mb-4">
				<div class="thumbnail rounded shadow">
					<a href="snippet.php?id=4">
						<img src="images/MSLoader.png" class="rounded-top" alt="Nature" style="width:100%; height: 200px;">
						<div id="badge" class="position-absolute p-1" style="z-index: ; top: 0;">
							<div class="badge badge-primary">HTML</div>
							<div class="badge badge-success">CSS</div>
						</div>
						<div class="p-2 caption">
							<p class="text-dark font-weight-bold">Microsoft Loader - HTML | CSS  - HTML | CSS</p>
							<span class="text-right"><i class="fa fa-clock-o"></i></span>
							<span class="text-secondary" id="time" data-attribute='May 24, 2019'>May 24, 2019</span>
							<span class="float-right pr-2"><i class="fa fa-comment"></i></span>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-4 mb-4">
				<div class="thumbnail rounded shadow">
					<a href="snippet.php?id=3">
						<img src="images/customCheckbox.png" class="rounded-top" alt="Nature" style="width:100%; height: 200px;">
						<div id="badge" class="position-absolute p-1" style="z-index: ; top: 0;">
							<div class="badge badge-primary">HTML</div>
							<div class="badge badge-success">CSS</div>
						</div>
						<div class="p-2 caption">
							<p class="text-dark font-weight-bold">Custom Checkbox & Radio - HTML | CSS </p>
							<span class="text-right"><i class="fa fa-clock-o"></i></span>
							<span class="text-secondary" id="time" data-attribute='February 28, 2019'>February 28, 2019</span>
							<span class="float-right pr-2"><i class="fa fa-comment"></i></span>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-4 mb-4">
				<div class="thumbnail rounded shadow" style='height: 100%;'>
					<a href="snippet.php?id=2">
						<img src="images/circleLoader.png" class="rounded-top" alt="Nature" style="width:100%; height: 200px;"><hr style="margin: 0; padding: 0;">
						<div id="badge" class="position-absolute p-1" style="z-index: ; top: 0;">
							<div class="badge badge-primary">HTML</div>
							<div class="badge badge-success">CSS</div>
						</div>
						<div class="p-2 caption">
							<p class="text-dark font-weight-bold">Circle Loader - HTML | CSS</p>
							<span class="text-right"><i class="fa fa-clock-o"></i></span>
							<!-- <span class="text-secondary">--</span> -->
							<span class="text-secondary" id="time" data-attribute='Jan 12, 2019'>January 12, 2019
							</span>
							<!-- <span class="text-secondary">--</span> -->
							<span class="float-right pr-2"><i class="fa fa-comment"></i></span>
						</div>
					</a>
				</div>
			</div>
			<div class="col-md-4 mb-4">
				<div class="thumbnail rounded shadow" style='height: 100%;'>
					<a href="snippet.php?id=1">
						<img src="images/gallery.png" class="rounded-top" alt="Nature" style="width:100%; height: 200px;"><hr style="margin: 0; padding: 0;">
						<div id="badge" class="position-absolute p-1" style="z-index: ; top: 0;">
							<div class="badge badge-primary">HTML</div>
							<div class="badge badge-success">CSS</div>
							<div class="badge badge-danger">JavaScript</div>
						</div>
						<div class="p-2 caption">
							<p class="text-dark font-weight-bold">Responsive Image Gallery - HTML | CSS | JavaScript</p>
							<span class="text-right"><i class="fa fa-clock-o"></i></span>
							<!-- <span class="text-secondary">--</span> -->
							<span class="text-secondary" id="time" data-attribute='Jan 14, 2019'>January 14, 2019
							</span>
							<!-- <span class="text-secondary">--</span> -->
							<span class="float-right pr-2"><i class="fa fa-comment"></i></span>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>

	<!-- Footer -->
	<?php require 'assets/footer.php'; ?>

	<script type="text/javascript" src="control.js"></script>
</body>
</html>