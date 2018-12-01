
<?php include("conn.php"); ?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>LearnHub | Home</title>
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
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<!-- Bootstrap-Core-Css -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Testimonials-Css -->
	<link href="css/mislider.css" rel="stylesheet" type="text/css" />
	<link href="css/mislider-custom.css" rel="stylesheet" type="text/css" />
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
						<i class="fas fa-book text-dark bg-white p-2 rounded-circle mr-3"></i>welcome to LearnHub</h1>
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
		<!-- //top header -->
		<!-- middle header -->
	<!--	<div class="middle-w3ls-nav py-2">
			<div class="container">
				<div class="row">
					<a class="logo font-italic font-weight-bold col-lg-4 text-lg-left text-center" href="index.php">LearnHub</a>
					<div class="col-lg-8 right-info-agiles mt-lg-0 mt-sm-3 mt-1">
						<div class="row">
							<div class="col-sm-4 nav-middle">
								<i class="far fa-envelope-open text-center mr-md-4 mr-sm-2 mr-4"></i>
								<div class="agile-addresmk">
									<p>
										<span class="font-weight-bold text-dark">Mail Us</span>
										<a href="mailto:mail@example.com">info@example.com</a>
									</p>
								</div>
							</div>
							<div class="col-sm-4 col-6 nav-middle mt-sm-0 mt-2">
								<i class="fas fa-phone-volume text-center mr-md-4 mr-sm-2 mr-4"></i>
								<div class="agile-addresmk">
									<p>
										<span class="font-weight-bold text-dark">Call Us</span>
										+1234-567-890
									</p>
								</div>
							</div>
							<div class="col-sm-4 col-6 top-login-butt text-right mt-sm-2">
								<a href="login.php" class="button-head-mow3 text-white">Login</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
		<!-- //middle header -->
	</header>
	<!-- //header -->

	<!-- banner -->
	<div class="banner-agile">
		<ul class="slider">
			<li class="active">
				<div class="banner-w3ls-1">
				</div>
			</li>
			<li>
				<div class="banner-w3ls-2">
				</div>
			</li>
			<li>
				<div class="banner-w3ls-3">
				</div>
			</li>
			<li>
				<div class="banner-w3ls-4">
				</div>
			</li>
			<li class="prev">
				<div class="banner-w3ls-5">
				</div>
			</li>
		</ul>
		<ul class="pager">
			<li data-index="0" class="active"></li>
			<li data-index="1"></li>
			<li data-index="2"></li>
			<li data-index="3"></li>
			<li data-index="4"></li>
		</ul>
		<div class="banner-text-posi-w3ls">
			<div class="banner-text-whtree">
				<h3 class="text-capitalize text-white p-4">your bright future
					<b>is our mission!</b>
				</h3>
				  <!--<p class="px-4 py-3 text-dark">Become top-of-the-flight specialist after graduating!</p> -->
				<a href="about.php" class="button-agiles text-capitalize text-white mt-sm-5 mt-4">read more</a>
			</div>
		</div>

		<!-- navigation -->
		<div class="navigation-w3ls">
			<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-nav">
				<button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				 aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
					<ul class="navbar-nav justify-content-center">
						<li class="nav-item active">
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
								
							<!--	<a class="dropdown-item" href="course_details.php">Course Details</a>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="form.php">Apply Now</a>  -->
							</div>
						</li>
					<!--	<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle text-white" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Pages
							</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="about.php">Instructors</a>
								<a class="dropdown-item" href="index.php">What We Do</a>
								<a class="dropdown-item" href="login.php">Login</a>
								<a class="dropdown-item" href="register.php">Register</a>
								<a class="dropdown-item" href="404.php">404 Page</a>
								<a class="dropdown-item" href="coming_soon.php">Coming Soon</a>
								<a class="dropdown-item" href="form.php">Admission Form</a>
								<a class="dropdown-item" href="faq.php">Faq</a>
							</div>
						</li>  -->
						
						<li class="nav-item">
							<a class="nav-link text-white" href="gallery.php">Gallery</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white" href="contact.php">Contact Us</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white" href="login.php" style="float:right;">Login</a>
						</li>
						
					</ul>
				</div>
			</nav>
		</div>
		<!-- //navigation -->
	</div>
	<!-- //banner -->

	<!-- about -->
	<div class="about py-5">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">Welcome to
				<span class="font-weight-bold">LearnHub</span>
			</h3>
			<div class="row pt-md-4">
				<div class="col-lg-6 about_right">
					<h3 class="text-capitalize text-right font-weight-light font-italic">interface friendly learning at
						<span class="font-weight-bold">LearnHub</span>
					</h3>
					
					<div class="about_left-list">
						<h6 class="mb-lg-3 mb-2 font-weight-bold text-dark">Our Benefits</h6>
						<ul class="list-unstyled">
							<li class="mb-2">
								<i class="fas fa-check mr-3"></i>Indepth courses</li>
							<li class="mb-2">
								<i class="fas fa-check mr-3"></i>Courses at reasonable cost</li>
							<li class="mb-2">
								<i class="fas fa-check mr-3"></i>Variety of courses</li>
						</ul>
					</div>
				</div>
			<div class="col-lg-6 left-img-agikes mt-lg-0 mt-sm-4 mt-3 text-right">
					<img src="images/ab.jpg" alt="" class="img-fluid" />

				<!--	<div class="about-bottom text-center p-sm-5 p-4">
						<ul>
							<li>
								<h5>60+</h5>
								<p class="text-dark font-weight-bold">Teachers</p>
							</li>
							<li>
								<h5>2000+</h5>
								<p class="text-dark font-weight-bold">Students</p>
							</li>
							<li>
								<h5>80+</h5>
								<p class="text-dark font-weight-bold">Courses</p>
							</li>
						</ul>
					</div>
				</div>  -->
			</div>
		</div>
	</div>
	<!-- //about -->

	<!-- Stats-->
<!--	<div class="stats-w3layouts py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="stats-info">
				<div class="row">
					<div class="col-md-3 col-6 stats-grid-w3-agile text-center px-xl-5 px-3">
						<div class='numscroller font-weight-bold my-2' data-slno='1' data-min='0' data-max='1280' data-delay='.5' data-increment="1">1280</div>
						<p class="text-uppercase text-white border-top pt-4 mt-3">happy students</p>
					</div>
					<div class="col-md-3 col-6 stats-grid-w3-agile text-center  px-xl-5 px-3">
						<div class='numscroller font-weight-bold my-2' data-slno='1' data-min='0' data-max='920' data-delay='.5' data-increment="1">920</div>
						<p class="text-uppercase text-white border-top pt-4 mt-3">approved courses</p>
					</div>
					<div class="col-md-3 col-6 stats-grid-w3-agile text-center mt-md-0 mt-5  px-xl-5 px-3">
						<div class='numscroller font-weight-bold my-2' data-slno='1' data-min='0' data-max='1200' data-delay='.5' data-increment="1">1200</div>
						<p class="text-uppercase text-white border-top pt-4 mt-3">certified teachers</p>
					</div>
					<div class="col-md-3 col-6 stats-grid-w3-agile text-center mt-md-0 mt-5  px-xl-5 px-3">
						<div class='numscroller font-weight-bold my-2' data-slno='1' data-min='0' data-max='1200' data-delay='.5' data-increment="1">1200</div>
						<p class="text-uppercase text-white border-top pt-4 mt-3">graduate students</p>
					</div>
				</div>
			</div>
		</div>
	</div>  -->
	<!-- //Stats -->

	<!-- course-->
	<div class="classes py-5">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title text-capitalize font-weight-light text-dark text-center mb-sm-5 mb-4">choose your
				<span class="font-weight-bold">course</span>
			</h3>
			<div class="row pt-4">
				<div class="col-lg-4 col-news-top text-center">
					<!-- Left to right -->
					<!-- normal -->
					<div class="ih-item circle effect16 left_to_right mx-auto">
						<a href="language.php">
							<div class="img">
								<img src="images/c1.jpg" alt="img" class="img-fluid rounded-circle">
							</div>
							<div class="info">
								<h3 class="text-capitalize text-white">language</h3>
								<p>Description goes here</p>
							</div>
						</a>
					</div>
					<h6 class="small-heading text-capitalize text-center mt-4">
						<a href="language.php" class="text-dark">language
							<i class="fas fa-long-arrow-alt-right ml-1"></i>
						</a>
					</h6>
					<!-- end normal -->
					<!-- end Left to right -->
				</div>
				<div class="col-lg-4 col-news-top text-center my-lg-0 my-sm-5 my-4">
					<!-- Left to right -->
					<!-- normal -->
					<div class="ih-item circle effect16 left_to_right mx-auto">
						<a href="communication.php">
							<div class="img">
								<img src="images/c2.jpg" alt="img" class="img-fluid rounded-circle">
							</div>
							<div class="info">
								<h3 class="text-capitalize text-white">communication</h3>
								<p>Description goes here</p>
							</div>
						</a>
					</div>
					<h6 class="small-heading text-capitalize text-center mt-4">
						<a href="communication.php" class="text-dark">communication
							<i class="fas fa-long-arrow-alt-right ml-1"></i>
						</a>
					</h6>
					<!-- end normal -->
					<!-- end Left to right -->
				</div>
				<div class="col-lg-4 col-news-top text-center">
					<!-- Left to right -->
					<!-- normal -->
					<div class="ih-item circle effect16 left_to_right mx-auto">
						<a href="business.php">
							<div class="img">
								<img src="images/c3.jpg" alt="img" class="img-fluid rounded-circle">
							</div>
							<div class="info">
								<h3 class="text-capitalize text-white">business</h3>
								<p>Description goes here</p>
							</div>
						</a>
					</div>
					<h6 class="small-heading text-capitalize text-center mt-4">
						<a href="business.php" class="text-dark">business
							<i class="fas fa-long-arrow-alt-right ml-1"></i>
						</a>
					</h6>
					<!-- end normal -->
					<!-- end Left to right -->
				</div>
			</div>
			<!--<div class="row mt-5">
				<div class="col-lg-4 col-news-top text-center">
					<!-- Left to right -->
					<!-- normal 
					<div class="ih-item circle effect16 left_to_right mx-auto">
						<a href="software.php">
							<div class="img">
								<img src="images/c4.jpg" alt="img" class="img-fluid rounded-circle">
							</div>
							<div class="info">
								<h3 class="text-capitalize text-white">software</h3>
								<p>Description goes here</p>
							</div>
						</a>
					</div>
					<h6 class="small-heading text-capitalize text-center mt-4">
						<a href="software.php" class="text-dark">software
							<i class="fas fa-long-arrow-alt-right ml-1"></i>
						</a>
					</h6>
					<!-- end normal -->
					<!-- end Left to right 
				</div>
				<div class="col-lg-4 col-news-top text-center  my-lg-0 my-sm-5 my-4">
					<!-- Left to right -->
					<!-- normal 
					<div class="ih-item circle effect16 left_to_right mx-auto">
						<a href="social_media.php">
							<div class="img">
								<img src="images/c6.jpg" alt="img" class="img-fluid rounded-circle">
							</div>
							<div class="info">
								<h3 class="text-capitalize text-white">social media </h3>
								<p>Description goes here</p>
							</div>
						</a>
					</div>
					<h6 class="small-heading text-capitalize text-center mt-4">
						<a href="social_media.php" class="text-dark">social media
							<i class="fas fa-long-arrow-alt-right ml-1"></i>
						</a>
					</h6>
					<!-- end normal -->
					<!-- end Left to right -->
				</div>
				<div class="col-lg-4 col-news-top text-center">
					<!-- Left to right -->
					<!-- normal 
					<div class="ih-item circle effect16 left_to_right mx-auto">
						<a href="photography.php">
							<div class="img">
								<img src="images/c5.jpg" alt="img" class="img-fluid rounded-circle">
							</div>
							<div class="info">
								<h3 class="text-capitalize text-white">photography </h3>
								<p>Description goes here</p>
							</div>
						</a>
					</div>
					<h6 class="small-heading text-capitalize text-center mt-4">
						<a href="photography.php" class="text-dark">photography
							<i class="fas fa-long-arrow-alt-right ml-1"></i>
						</a>
					</h6>
					<!-- end normal -->
					<!-- end Left to right -->
				</div>
			</div>
		</div>
	</div>
	<!-- //course -->

	<!-- what we do 
	<div class="why-choose-agile py-5">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title text-capitalize font-weight-light text-white text-center mb-5">what we
				<span class="font-weight-bold">do</span>
			</h3>
			<div class="row agileits-w3layouts-grid pt-md-4">
				<div class="col-lg-4 services-agile-1">
					<div class="row wthree_agile_us">
						<div class="col-lg-3 col-md-2 col-3  agile-why-text">
							<div class="wthree_features_grid text-center p-3 border rounded">
								<i class="fab fa-accusoft"></i>
							</div>
						</div>
						<div class="col-9 agile-why-text-2">
							<h4 class="text-capitalize text-white font-weight-bold mb-3">special education</h4>
							<p>Lorem ipsum magna, vehicula ut scelerisque ornare porta ete celerisque ornare.</p>
							<a class="btn mt-3 service-button p-0" href="about.php" role="button">Read More
								<i class="fas fa-long-arrow-alt-right ml-1"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 services-agile-1 my-lg-0 my-5">
					<div class="row wthree_agile_us">
						<div class="col-lg-3 col-md-2 col-3  agile-why-text">
							<div class="wthree_features_grid text-center p-3 border rounded">
								<i class="fas fa-book"></i>
							</div>
						</div>
						<div class="col-9 agile-why-text-2">
							<h4 class="text-capitalize text-white font-weight-bold mb-3">full day session</h4>
							<p>Lorem ipsum magna, vehicula ut scelerisque ornare porta ete celerisque ornare.</p>
							<a class="btn mt-3 service-button p-0" href="about.php" role="button">Read More
								<i class="fas fa-long-arrow-alt-right ml-1"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 services-agile-1">
					<div class="row wthree_agile_us">
						<div class="col-lg-3 col-md-2 col-3  agile-why-text">
							<div class="wthree_features_grid text-center p-3 border rounded">
								<i class="fas fa-users"></i>
							</div>
						</div>
						<div class="col-9 agile-why-text-2">
							<h4 class="text-capitalize text-white font-weight-bold mb-3">qualified teachers</h4>
							<p>Lorem ipsum magna, vehicula ut scelerisque ornare porta ete celerisque ornare.</p>
							<a class="btn mt-3 service-button p-0" href="about.php" role="button">Read More
								<i class="fas fa-long-arrow-alt-right ml-1"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row agileits-w3layouts-grid mt-5">
				<div class="col-lg-4 services-agile-1">
					<div class="row wthree_agile_us">
						<div class="col-lg-3 col-md-2 col-3  agile-why-text">
							<div class="wthree_features_grid text-center p-3 border rounded">
								<i class="far fa-calendar-alt"></i>
							</div>
						</div>
						<div class="col-9 agile-why-text-2">
							<h4 class="text-capitalize text-white font-weight-bold mb-3">events</h4>
							<p>Lorem ipsum magna, vehicula ut scelerisque ornare porta ete celerisque ornare.</p>
							<a class="btn mt-3 service-button p-0" href="about.php" role="button">Read More
								<i class="fas fa-long-arrow-alt-right ml-1"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 services-agile-1  my-lg-0 my-5">
					<div class="row wthree_agile_us">
						<div class="col-lg-3 col-md-2 col-3  agile-why-text">
							<div class="wthree_features_grid text-center p-3 border rounded">
								<i class="fas fa-graduation-cap"></i>
							</div>
						</div>
						<div class="col-9 agile-why-text-2">
							<h4 class="text-capitalize text-white font-weight-bold mb-3">pre classes</h4>
							<p>Lorem ipsum magna, vehicula ut scelerisque ornare porta ete celerisque ornare.</p>
							<a class="btn mt-3 service-button p-0" href="about.php" role="button">Read More
								<i class="fas fa-long-arrow-alt-right ml-1"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4 services-agile-1">
					<div class="row wthree_agile_us">
						<div class="col-lg-3 col-md-2 col-3  agile-why-text">
							<div class="wthree_features_grid text-center p-3 border rounded">
								<i class="far fa-clock"></i>
							</div>
						</div>
						<div class="col-9 agile-why-text-2">
							<h4 class="text-capitalize text-white font-weight-bold mb-3">24/7 supports</h4>
							<p>Lorem ipsum magna, vehicula ut scelerisque ornare porta ete celerisque ornare.</p>
							<a class="btn mt-3 service-button p-0" href="about.php" role="button">Read More
								<i class="fas fa-long-arrow-alt-right ml-1"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //what we do -->

	<!-- video and events -->
	<div class="video-choose-agile py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="row">
				<div class="col-lg-7 video">
					<h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">our
						<span class="font-weight-bold">video</span>
					</h3>
					<?php
	$sql = "SELECT * FROM test where id=1";
	$result = $conn->query($sql);
	$data = $result->fetch_assoc();
	$video='https://s3.amazonaws.com/learnhub12/videoplayback.mp4';
echo"<video width='520' height='340' controls> 
<source src='$video' type='video/mp4'> 
</video>";
	?>
					<!--<iframe src="https://player.vimeo.com/video/58123228"></iframe>-->
					<!--	<iframe src="https://s3.amazonaws.com/learnhub12/videoplayback.mp4"></iframe>-->						
				</div>
			<!---	<div class="col-lg-5 events">
					<h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">upcoming
						<span class="font-weight-bold">events</span>
					</h3>
					<div class="events-w3ls">
						<div class="d-flex">
							<div class="col-sm-2 col-3 events-up p-3 text-center">
								<h5 class="text-white font-weight-bold">28
									<span class="border-top font-weight-light pt-2 mt-2">May</span>
								</h5>
							</div>
							<div class="col-sm-10 col-9 events-right">
								<h4 class="text-dark">Admission Fair Spring </h4>
								<ul class="list-unstyled">
									<li class="my-2">
										<i class="far fa-clock mr-2"></i>5.00 pm - 7.30 pm</li>
									<li>
										<i class="fas fa-map-marker mr-2"></i>25 Newyork City.</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="d-flex my-4">
						<div class="col-sm-2 col-3 events-up p-3 text-center">
							<h5 class="text-white font-weight-bold">28
								<span class="border-top font-weight-light pt-2 mt-2">May</span>
							</h5>
						</div>
						<div class="col-sm-10 col-9 events-right">
							<h4 class="text-dark">Admission Fair Spring </h4>
							<ul class="list-unstyled">
								<li class="my-2">
									<i class="far fa-clock mr-2"></i>5.00 pm - 7.30 pm</li>
								<li>
									<i class="fas fa-map-marker mr-2"></i>25 Newyork City.</li>
							</ul>
						</div>
					</div>
					<div class="d-flex">
						<div class="col-sm-2 col-3 events-up p-3 text-center">
							<h5 class="text-white font-weight-bold">28
								<span class="border-top font-weight-light pt-2 mt-2">May</span>
							</h5>
						</div>
						<div class="col-sm-10 col-9 events-right">
							<h4 class="text-dark">Admission Fair Spring </h4>
							<ul class="list-unstyled">
								<li class="my-2">
									<i class="far fa-clock mr-2"></i>5.00 pm - 7.30 pm</li>
								<li>
									<i class="fas fa-map-marker mr-2"></i>25 Newyork City.</li>
							</ul>
						</div>
					</div>
				</div>-->
			</div>
		</div>
	</div>

	
	<!-- news -->
	<!--<div class="news-section py-5">
		<div class="container py-xl-5 py-lg-3">
			<h3 class="title text-capitalize font-weight-light text-dark text-center mb-5">our lastest
				<span class="font-weight-bold">news</span>
			</h3>
			<div class="row news-grids-w3l pt-md-4">
				<div class="col-md-4 news-grid">
					<a href="blog.php">
						<img src="images/n1.jpg" class="img-fluid" alt="" />
					</a>
					<div class="news-text">
						<div class="news-events-agile event-colo1 py-2 px-3">
							<h5 class="float-left">
								<a href="blog.php" class="text-white">07 May</a>
							</h5>
							<div class="post-img float-right">
								<ul>
									<li>
										<a href="#">
											<i class="far fa-comments text-white"></i>
										</a>
									</li>
									<li class="mx-3">
										<a href="#">
											<i class="far fa-heart text-white"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fas fa-share text-white"></i>
										</a>
									</li>
								</ul>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="detail-bottom">
							<h6 class="my-3">
								<a href="blog.php" class="text-dark">
									Eiusmod tempor incididunt ut labore sed do eiusmod
								</a>
							</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore sed do eiusmod
								tempor incididunt ut labore</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 news-grid my-md-0 my-sm-5 my-4">
					<a href="blog.php">
						<img src="images/n2.jpg" class="img-fluid" alt="" />
					</a>
					<div class="news-text">
						<div class="news-events-agile py-2 px-3">
							<h5 class="float-left">
								<a href="blog.php" class="text-white">07 May</a>
							</h5>
							<div class="post-img float-right">
								<ul>
									<li>
										<a href="#">
											<i class="far fa-comments text-white"></i>
										</a>
									</li>
									<li class="mx-3">
										<a href="#">
											<i class="far fa-heart text-white"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fas fa-share text-white"></i>
										</a>
									</li>
								</ul>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="detail-bottom">
							<h6 class="my-3">
								<a href="blog.php" class="text-dark">
									Eiusmod tempor incididunt ut labore sed do eiusmod
								</a>
							</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore sed do eiusmod
								tempor incididunt ut labore</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 news-grid">
					<a href="blog.php">
						<img src="images/n3.jpg" class="img-fluid" alt="" />
					</a>
					<div class="news-text">
						<div class="news-events-agile event-colo3 py-2 px-3">
							<h5 class="float-left">
								<a href="blog.php" class="text-white">07 May</a>
							</h5>
							<div class="post-img float-right">
								<ul>
									<li>
										<a href="#">
											<i class="far fa-comments text-white"></i>
										</a>
									</li>
									<li class="mx-3">
										<a href="#">
											<i class="far fa-heart text-white"></i>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="fas fa-share text-white"></i>
										</a>
									</li>
								</ul>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="detail-bottom">
							<h6 class="my-3">
								<a href="blog.php" class="text-dark">
									Eiusmod tempor incididunt ut labore sed do eiusmod
								</a>
							</h6>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore sed do eiusmod
								tempor incididunt ut labore</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>  -->
	<!-- //news -->

	<!-- brands -->
<!--	<div class="brands-w3ls py-md-5 py-4">
		<div class="container py-xl-3">
			<ul class="list-unstyled">
				<li>
					<i class="fab fa-supple"></i>
				</li>
				<li>
					<i class="fab fa-angrycreative"></i>
				</li>
				<li>
					<i class="fab fa-aviato"></i>
				</li>
				<li>
					<i class="fab fa-aws"></i>
				</li>
				<li>
					<i class="fab fa-cpanel"></i>
				</li>
				<li>
					<i class="fab fa-hooli"></i>
				</li>
				<li>
					<i class="fab fa-node"></i>
				</li>
			</ul>
		</div>
	</div>  -->
	<!-- //brands -->

	<!-- footer -->
	<footer>
<!--		<div class="container py-4">
			<div class="row py-xl-5 py-sm-3">
				<div class="col-lg-6 map">
					<h2 class="contact-title text-capitalize text-white font-weight-light mb-sm-4 mb-3">our
						<span class="font-weight-bold">directions</span>
					</h2>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.495758873587!2d-74.0005340845242!3d40.72911557933012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25991b7473067%3A0x59fbd02f7b519ce8!2s550+LaGuardia+Pl%2C+New+York%2C+NY+10012%2C+USA!5e0!3m2!1sen!2sin!4v1516166447283"></iframe>
					<div class="conta-posi-w3ls p-4 rounded">
						<h5 class="text-white font-weight-bold mb-3">Address</h5>
						<p>25095 Blue Ravine Rd,
							<span>Diamonds street,</span> California, USA</p>
					</div>
				</div>
				<div class="col-lg-6 contact-agileits-w3layouts mt-lg-0 mt-4">
					<h4 class="contact-title text-capitalize text-white font-weight-light mb-sm-4 mb-3">get in
						<span class="font-weight-bold">touch</span>
					</h4>
					<p class="conta-para-style border-left pl-4">If you have any questions about the services we provide simply use the form below. We try and respond to all queries
						and comments within 24 hours.</p>
					<div class="subscribe-w3ls my-xl-5 my-4">
						<h6 class="text-white text-capitalize mb-4">subscribe our newsletter</h6>
						<form action="#" method="post" class="subscribe_form">
							<input class="form-control" type="email" name="email" placeholder="Enter your email..." required="">
							<button type="submit" class="btn btn-primary submit">Submit</button>
						</form>
					</div>
					<p class="para-agileits-w3layouts text-white">
						<i class="fas fa-map-marker pr-3"></i>25095 Blue Ravine Rd,USA</p>
					<p class="para-agileits-w3layouts text-white my-sm-3 my-2">
						<i class="fas fa-phone pr-3"></i>032 625 4592</p>
					<p class="para-agileits-w3layouts">
						<i class="far fa-envelope-open pr-2"></i>
						<a href="mailto:mail@example.com" class=" text-white">info@example.com</a>
					</p>
				</div>
			</div>
		</div>  -->
		<div class="copyright-agiles py-3">
			<div class="container">
				<div class="row">
					<p class="col-lg-8 copy-right-grids text-white text-lg-left text-center mt-lg-1">© 2018 LearnHub. All Rights Reserved | Design by Team 2
						
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

	<!-- banner slider -->
	<script src="js/slider.js"></script>
	<!-- //banner slider -->

	<!-- testimonial-plugin -->
	<script src="js/mislider.js"></script>
	<script>
		jQuery(function ($) {
			var slider = $('.mis-stage').miSlider({
				//  The height of the stage in px. Options: false or positive integer. false = height is calculated using maximum slide heights. Default: false
				stageHeight: 320,
				//  Number of slides visible at one time. Options: false or positive integer. false = Fit as many as possible.  Default: 1
				slidesOnStage: false,
				//  The location of the current slide on the stage. Options: 'left', 'right', 'center'. Defualt: 'left'
				slidePosition: 'center',
				//  The slide to start on. Options: 'beg', 'mid', 'end' or slide number starting at 1 - '1','2','3', etc. Defualt: 'beg'
				slideStart: 'mid',
				//  The relative percentage scaling factor of the current slide - other slides are scaled down. Options: positive number 100 or higher. 100 = No scaling. Defualt: 100
				slideScaling: 150,
				//  The vertical offset of the slide center as a percentage of slide height. Options:  positive or negative number. Neg value = up. Pos value = down. 0 = No offset. Default: 0
				offsetV: -5,
				//  Center slide contents vertically - Boolean. Default: false
				centerV: true,
				//  Opacity of the prev and next button navigation when not transitioning. Options: Number between 0 and 1. 0 (transparent) - 1 (opaque). Default: .5
				navButtonsOpacity: 1,
			});
		});
	</script>
	<!-- //testimonial-plugin -->

	<!-- numscroller-js-file -->
	<script src="js/numscroller-1.0.js"></script>
	<!-- //numscroller-js-file -->

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

</body>

</html>