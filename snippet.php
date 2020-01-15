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

	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
			<a class="navbar-brand" href="#">< doSo Developers /></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Link</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Dropdown
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Disabled</a>
					</li>
				</ul>
				<form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="search" placeholder="Search snippet ..." aria-label="Search">
					<button class="rounded-circle btn btn-outline-light my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
				</form>
			</div>
		</nav>
	</header>

	<div class="text-primary"><?php echo $_GET['id']; ?></div>

	<footer class="small pt-4" style="color: #fff; background: #45526e !important;">

		<!-- Footer Links -->
		<div class="container text-center text-md-left">

			<!-- Footer links -->
			<div class="row text-center text-md-left mt-3 pb-3">

				<!-- Grid column -->
				<div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
					<h6 class="text-uppercase mb-4 font-weight-bold">doSo Developers</h6>
					<p>Here you can learn flexible and responsive web designing snippets with practial demos.</p>
				</div>
				<!-- Grid column -->

				<hr class="w-100 clearfix d-md-none">

				<!-- Grid column -->
				<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
					<h6 class="text-uppercase mb-4 font-weight-bold">Courses Involved</h6>
					<p>
						<a href="#" class="text-white font-weight-lighter">HTML</a>
					</p>
					<p>
						<a href="#" class="text-white">CSS</a>
					</p>
					<p>
						<a href="#" class="text-white">JavaScript</a>
					</p>
					<p>
						<a href="#" class="text-white">Bootstrap</a>
					</p>
				</div>
				<!-- Grid column -->

				<hr class="w-100 clearfix d-md-none">

				<!-- Grid column -->
				<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
					<h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
					<p>
						<a href="#!" class="text-white">Your Account</a>
					</p>
					<p>
						<a href="#!" class="text-white">Become an Affiliate</a>
					</p>
					<p>
						<a href="#!" class="text-white">Shipping Rates</a>
					</p>
					<p>
						<a href="#!" class="text-white">Help</a>
					</p>
				</div>

				<!-- Grid column -->
				<hr class="w-100 clearfix d-md-none">

				<!-- Grid column -->
				<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
					<h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
					<p><i class="fa fa-home pr-2"></i> Nizamabad, Telangana, Inida</p>
					<p><i class="fa fa-envelope pr-2"></i> sanjaysahubandla@gmail.com</p>
					<p><i class="fa fa-phone pr-2"></i> + 91 99080 6610</p>
					<p><i class="fa fa-print pr-2"></i> + 91 95533 11848</p>
				</div>
				<!-- Grid column -->

			</div>
			<!-- Footer links -->

			<hr>

			<!-- Grid row -->
			<div class="row d-flex align-items-center">

				<!-- Grid column -->
				<div class="col-md-7 col-lg-8">

					<!--Copyright-->
					<p class="text-center text-md-left">© 2020 Copyright:
						<a href="#" class="text-white">
							<strong> dosodevelopers.com</strong>
						</a>
					</p>

				</div>
				<!-- Grid column -->

				<!-- Grid column -->
				<div class="col-md-5 col-lg-4 ml-lg-0">

					<!-- Social buttons -->
					<div class="text-center text-md-right socialIcons"><br>
						<ul class="list-unstyled list-inline">
							<li class="list-inline-item">
								<a class="btn-lg text-white rounded-circle shadow rgba-white-slight mx-1" href="https://www.facebook.com/profile.php?id=100010035810827" style="background: #3b5998;">
									<i class="fa fa-facebook" style="margin-left: 0;"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a class="btn-lg text-white rounded-circle shadow rgba-white-slight mx-1" href="https://twitter.com/SanjaySahu14312" style="background: #1DA1F2;">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a class="btn-lg text-white  rounded-circle shadow rgba-white-slight mx-1" href="https://in.pinterest.com/sanjaysahubandla" style="background: #c8232c;">
									<i class="fa fa-pinterest"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a class="btn-lg text-white  rounded-circle shadow rgba-white-slight mx-1" href="https://www.linkedin.com/in/sanjay-sahu-395b2a147/" style="background: #0e76a8;">
									<i class="fa fa-linkedin"></i>
								</a>
							</li>
							<li class="list-inline-item">
								<a class="btn-lg text-white  rounded-circle shadow 				rgba-white-slight mx-1" href="https://www.instagram.com/	sanjay_sahu_bandla" style="background: #f09433; background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%); filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f09433', endColorstr='#bc1888',GradientType=1 );"><i class="fa fa-instagram"></i>
								</a>
							</li>
						</ul>
					</div>

				</div>
				<!-- Grid column -->

			</div>
			<!-- Grid row -->

		</div>
		<!-- Footer Links -->

	</footer>

	<script type="text/javascript" src="control.js"></script>
</body>
</html>