<header>

		<?php 

		$user = 'root';
		$password = '';
		$db = 'tutorialPoint';

					// Create connection
		$conn = mysqli_connect('localhost', $user, $password, $db);

					// Check connection
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}

		$sql = "SELECT id,name,image,source,badge FROM snippets";

		$myData = mysqli_query($conn,$sql);

		if(mysqli_num_rows($myData) > 0) {

			echo "<datalist id='similar'>";

			while($record=mysqli_fetch_array($myData)) {

				echo "<option id='/TutorialPoint/snippet.php?id=". $record['id'] ."'>";
				echo $record['name'] . "</option>";

			}
			echo "</datalist>";

		}

		?>

		<nav class="m-1 rounded shadow navbar navbar-expand-lg navbar-dark bg-primary" style="border-radius: 8px !important;">
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
						<a class="nav-link" href="mailto:sanjaysahubandla@gmail.com">Contact</a>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							Brose by
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="/TutorialPoint/assets/category.php?cat=html">HTML</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="/TutorialPoint/assets/category.php?cat=css">CSS</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="/TutorialPoint/assets/category.php?cat=JavaScript">JavaScript</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="smoothSocial" href="#social">Social</a>
					</li>
				</ul>
				<form class="form-inline my-2 my-lg-0" method="post" action="">
					<input id="similarCode" list="similar" type="text" class="form-control mr-sm-2" name="keyword" type="" placeholder="Search snippet ..." aria-label="Search">
					<button name="search" id="searchbtn" class="rounded-circle btn btn-outline-light my-2 my-sm-0" type="button"><i class="fa fa-search"></i></button>
				</form>
			</div>
		</nav>
	</header>