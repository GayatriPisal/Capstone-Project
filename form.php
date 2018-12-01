<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>LearnHub | Form</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<!--<meta name="keywords" content="Edulearn Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/> -->
	<meta name="keywords" content="LearnHub"/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Style-Css -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Font-Awesome-Icons-Css -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- //Custom-Files -->
	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	 rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<!-- //Web-Fonts -->
</head>
<body>
	<!-- header -->
	<header>
		<!-- top header -->
		<div class="top-head-w3ls py-2 bg-dark">
			<div class="container">
				<div class="row">
					<h1 class="text-capitalize text-white col-7">
						<i class="fas fa-book text-dark bg-white p-2 rounded-circle mr-3"></i>welcome to edulearn</h1>
					<!-- social icons -->
					<div class="social-icons text-right col-5">
						<ul class="list-unstyled">
							<li>
								<a href="#" class="fab fa-facebook-f icon-border facebook rounded-circle"> </a>
							</li>
							<li class="mx-2">
								<a href="#" class="fab fa-twitter icon-border twitter rounded-circle"> </a>
							</li>
							<li>
								<a href="#" class="fab fa-google-plus-g icon-border googleplus rounded-circle"> </a>
							</li>
							
						</ul>
					</div>
					<!-- //social icons -->
				</div>
			</div>
		</div>
		<!-- //middle header -->
	</header>
	<!-- //header -->

	<!-- banner -->
	<div class="banner-agile-2">
		<!-- navigation -->
		<div class="navigation-w3ls">
			<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-nav">
				<button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				 aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
					<ul class="navbar-nav justify-content-center">
						<li class="nav-item">
							<a class="nav-link text-white" href="index.php">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white" href="about.php">About Us</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Courses
							</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="language.php">Language</a>
								<a class="dropdown-item" href="communication.php">Communication</a>
								<a class="dropdown-item" href="business.php">Business</a>
								<a class="dropdown-item" href="software.php">Software</a>
								<a class="dropdown-item" href="social_media.php">Social Media</a>
								<a class="dropdown-item" href="photography.php">Photography</a>
							</div>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white" href="gallery.php">Gallery</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white" href="contact.php">Contact Us</a>
						</li>
					</ul>
					<div align="right">
					   <a href="login.php" class="button-head-mow3 text-white">Login</a>
				   </div>
				</div>
			</nav>
		</div>
		<!-- //navigation -->
	</div>
	<!-- breadcrumb -->
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.php">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Admission Form</li>
		</ol>
	</nav>
	<!-- breadcrumb -->
	<!-- //banner -->
	<!-- admission form -->
	<div class="form-w3l py-5">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">Admission
				<span class="font-weight-bold">form</span>
			</h3>
			<div class="register-form pt-md-4">
				<form action="" method="post">
					<div class="styled-input form-group">
						<input type="text" class="form-control" placeholder="Your Name" name="name" id="name" required="">
					</div>
					<div class="styled-input form-group">
						<input id="datepicker" class="form-control" placeholder="Birth Date" name="dob" id="dob" type="text" value="" onfocus="this.value = '';"
						 onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
					</div>
					<div class="styled-input agile-styled-input-top form-group">
						<select class="category2" required="" name="gender" id="gender">
							<option value="">Gender</option>
							<option value="Female">Female</option>
							<option value="Male">Male</option>
							<option value="Other">Other</option>
						</select>
					</div>
					<div class="styled-input form-group">
						<input type="email" class="form-control" placeholder="Your E-mail" id="email" name="email" required="">
					</div>
					<div class="styled-input form-group">
						<input type="text" class="form-control" placeholder="Phone Number" id="phone_number" name="phone_number" required="">
					</div>
					<div class="styled-input agile-styled-input-top form-group">
						<select class="category2" required="" name="select_course" id="select_course">
							<option value="">Select Course</option>
							<option value="Language">Language</option>
							<option value="Communication">Communication</option>
							<option value="Business">Business</option>
							<option value="Software">Software</option>
							<option value="Social Media">Social Media</option>
							<option value="Photography">Photography</option>
							<option value="Web Designing">Web Designing</option>
							<option value="Web Technology">Web Technology </option>
							<option value="PC Systems">PC Systems </option>
							<option value="IT Foundations">IT Foundations </option>
							<option value="HR Management">HR Management </option>
							<option value="Modeling">Modeling </option>
							<option value="Basic Marketing">Basic Marketing</option>
						</select>
						<span></span>
					</div>
					<div class="styled-input form-group">
						<div class="agileits_w3layouts_grid">
							<select class="category2" name="time" id="time" required="">
								<option value="">Select Course Time</option>
								<option value="08:00:00 10:00:00">Hours: 8am - 10am</option>
								<option value="10:00:00 12:00:00">Hours: 10am - 12pm</option>
								<option value="12:00:00 16:00:00">Hours: 12pm - 4pm</option>
								<option value="16:00:00 19:00:00">Hours: 4pm - 7pm</option>
								<option value="19:00:00 21:00:00">Hours: 7pm - 9pm</option>
							</select>
						</div>
					</div>
					<div class="styled-input">
						<label class="header-admin-form font-weight-bold text-dark my-3">Your Address</label>
						<div class="form-group">
							<input type="text" name="address" id="address" class="form-control" placeholder="Address" title="Please enter your Address" required="">
						</div>
						<div class="form-group">
							<input type="text" name="line" id="line" class="form-control" placeholder="Line" title="Please enter your Line" required="">
						</div>
						<div class="form-group">
							<input type="text" name="city" id="city" class="form-control" placeholder="City" title="Please enter your City" required="">
						</div>
						<div class="form-group">
							<input type="text" name="zipcode" id="zipcode" class="form-control" placeholder="Zip Code" title="Please enter your Zip code" required="">
						</div>
					</div>
					<input type="submit" id="submit" name="submit" value="Submit">
				</form>
			</div>
		</div>
	</div>
	<!-- admission form -->
	<!-- footer -->
	<footer>
		<div class="copyright-agiles py-3">
			<div class="container">
				<div class="row">
					<p class="col-lg-8 copy-right-grids text-white text-lg-left text-center mt-lg-1">© 2018 LearnHub. All Rights Reserved | Design by
						<a href="https://w3layouts.com/" target="_blank">team 2</a>
					</p>
					<!-- social icons -->
					<div class="social-icons text-lg-right text-center col-lg-4 mt-lg-0 mt-3">
						<ul class="list-unstyled">
							<li>
								<a href="#" class="fab fa-facebook-f icon-border facebook rounded-circle"> </a>
							</li>
							<li class="mx-2">
								<a href="#" class="fab fa-twitter icon-border twitter rounded-circle"> </a>
							</li>
							<li>
								<a href="#" class="fab fa-google-plus-g icon-border googleplus rounded-circle"> </a>
							</li>
							
						</ul>
					</div>
					<!-- //social icons -->
				</div>
			</div>
		</div>
	</footer>
	<!-- //footer -->
	<!-- Js files -->
	<!-- JavaScript -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->
	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- Calendar -->
	<link rel="stylesheet" href="css/jquery-ui.css" />
	<script src="js/jquery-ui.js"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});
	</script>
	<!-- //Calendar -->

	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smooth scrolling -->

	<!-- move-top -->
	<script src="js/move-top.js"></script>
	<!-- easing -->
	<script src="js/easing.js"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="js/edulearn.js"></script>

	<!-- //Js files -->
	<?php include("conn.php"); ?>
	<?php
	if(isset($_POST['submit'])){
	$Name = preg_split('/ +/', $_POST['name']);
	$fName=$Name[0];
	$lName=$Name[1];
	$Time = preg_split('/ +/', $_POST['time']);
	$startTime = $Time[0];
	$endTime = $Time[1];
	$sqlCheck = "SELECT * from user where firstName='$fName' AND lastName='$lName' AND email ='$_POST[email]'";
		$result = mysqli_query($conn,$sqlCheck);
	if(!mysqli_num_rows($result)){
		$message = "Please register or login!!!";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}else{
		$sqlCheck = "SELECT * from user where course='$_POST[select_course]'";
		$result = mysqli_query($conn,$sqlCheck);
		if(!mysqli_num_rows($result)){
			echo "Not found";
			$sql="UPDATE user set dob='$_POST[dob]', gender='$_POST[gender]', phone='$_POST[phone_number]', course='$_POST[select_course]', startTime='$startTime', endTime='$endTime', address='$_POST[address]', street='$_POST[line]', city='$_POST[city]', zip='$_POST[zipcode]' where email ='$_POST[email]'";
			$result = mysqli_query($conn,$sql);
			$message = "Successfully applied for the course!!!";
			echo "<script type='text/javascript'>alert('$message');</script>";
			
		}else{
			echo "found";
			$message = "you already registered for this course!!!";
			echo "<script type='text/javascript'>alert('$message');</script>";
	}
	}
	}else{		
	}
         ?>
</body>

</html>