<!DOCTYPE html>

<?php
$servername = "localhost";
$username = "datalife_employees1";
$password = "rajudb";
$dbname = "datalife_employees1";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// create a variable
$name=$_POST['name'];
$text=$_POST['text'];
$email=$_POST['email'];

mysqli_query($conn,"INSERT INTO userdetails (name,text,email)
		        VALUES ('$name','$text','$email')");


	if(mysqli_affected_rows($conn) > 0)
  {
	echo "<h2>Thank you for registering with us</h2>";
	// echo "(<a href='index.html'>Go Back</a>)";
}
else {
	echo " Sorry! NOT Registered<br />";
	echo mysqli_error ($conn);
}
$conn->close();
?>

<html class="no-js" lang="zxx">
    <head>
		<!-- Meta Tags -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="Site keywords here">
		<meta name="description" content="">
		<meta name='copyright' content=''>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Title -->
		<title>DataLifeX &minus; DataScience & ML</title>
		
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="images/favicon.png">
		
		<!-- Web Font -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Font Awesome CSS -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- Nice Select CSS -->
        <link rel="stylesheet" href="css/niceselect.css">
		<!-- Fancy Box CSS -->
        <link rel="stylesheet" href="css/jquery.fancybox.min.css">
		<!-- Fancy Box CSS -->
        <link rel="stylesheet" href="css/cube-portfolio.min.css">
		<!-- Owl Carousel CSS -->
        <link rel="stylesheet" href="css/owl.carousel.min.css">
		<!-- Animate CSS -->
        <link rel="stylesheet" href="css/animate.min.css">
		<!-- Slick Nav CSS -->
        <link rel="stylesheet" href="css/slicknav.min.css">
        <!-- Magnific Popup -->
		<link rel="stylesheet" href="css/magnific-popup.css">
		
		<!-- Eduland Stylesheet -->
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="css/responsive.css">
		
		<!-- Eduland Colors -->
		<link rel="stylesheet" href="css/colors/color1.css">
		
    </head>
    <body>
	
		<!-- Header -->
		<header class="header">
			<!-- Header Inner -->
			<div class="header-inner overlay">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-3 col-12">
							<!-- Logo -->
							<div class="logo">
								<!-- <a href="index.html"><img src="images/logo.png" alt="#"></a> -->
								<h1 style="font-size:35px;font-family:Arial, 'Helvetica', sans-serif"><a href="index.html" id="logo">datalife<strong style="color:orangered;">X </strong></a></h1>
							</div>
							
							<!--/ End Logo -->
							<div class="mobile-menu"></div>
						</div>
						<div class="col-lg-9 col-md-9 col-12">
							<div class="menu-bar">
								<nav class="navbar navbar-default">
									<div class="navbar-collapse">
										<!-- Main Menu -->
										<ul id="nav" class="nav menu navbar-nav">
											<li class="active"><a href="index.html"><i class="fa fa-home"></i>Home</a></li>
											<li><a href="aboutus.html"><i class="fa fa-user-o"></i>About Us</a> 
											<!-- 	<ul class="dropdown">
													<li><a href="teachers.html">Teachers</a></li>
												</ul> -->
											</li>
											<li><a href="ibooks.html"><i class="fa fa-book"></i>iBooks</a></li>
											<li><a href="deepl.html"><i class="fa fa-bullseye"></i>CADx</a></li>
											<li><a href="codes.html"><i class="fa fa-code"></i>Codes</a> </li>
											<li><a href="contact.html"><i class="fa fa-address-book"></i>Contact Us</a> </li>

											<li><a href="privacy.html"><i class="fa fa-user-secret "></i>Privacy</a> </li>

										</ul>
										<!-- End Main Menu -->
									</div> 
								</nav>
								<!-- Search Area -->
								<div class="search-area">
									<a href="#header" class="icon"><i class="fa fa-search"></i></a>
									<form class="search-form">
										<input type="text" placeholder="ex: data science" name="search">
										<button value="search " type="submit"><i class="fa fa-search"></i></button>
									</form>
								</div>	
								<!-- End Search Area-->
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Header Inner -->
		</header>
		<!--/ End Header -->
		
		<!-- Slider Area -->
		<section class="home-slider">
			<div class="slider-active">
				<!-- Single Slider -->
				<div class="single-slider overlay">
					<div class="slider-image" style="background-image:url('images/slider/slider-bg1.jpg')"></div>
					<div class="container">
						<div class="row">
							<div class="col-lg-7 col-md-10 col-12">
								<!-- Slider Content -->
								<div class="slider-content">
									<h1 class="slider-title"><span>The Best Source for Data Science</span>DataLife <b style="color:orangered;">X</b></h1>
									<p class="slider-text">Data Science, Machine Learning, Deep Learning & AI</p>
									<!-- Button -->
									<div class="button">
										<a href="about.html" class="btn white">About DatalifeX</a>
										<a href="courses.html" class="btn white primary">iBooks</a>
									</div>
									<!--/ End Button -->
								</div>
								<!--/ End Slider Content -->
							</div>
						</div>
					</div>
				</div>
				<!--/ End Single Slider -->
			</div>
		</section>
		<!--/ End Slider Area -->
		
		<!-- Courses -->
		<section class="courses section">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3 col-12">
						<div class="section-title bg">
							<h2>Our <span>Motto</span></h2>
							<p>Provide free learning in Data Science and AI which is a disruptive technology in various fields</p>
							<div class="icon"><i class="fa fa-home"></i></div>
						</div>
					</div>
				</div>

				<div class="card bg-info text-white">
					<div class="card-body" style="text-align:center">Here are some of the works that can be accessed for learning Data Science and some of the tools that is commonly used
					in this field <h6 style="text-align:center">Interactive Books & Web Applications</h6></div>
				</div>

				<div class="row">
					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Course -->
						<div class="single-course">
							<!-- Course Head -->
							<div class="course-head overlay">
								<img src="images/courses/course1.jpg" alt="#">
								<a href="mlbook1.html" class="btn white primary">Learn More</a>
							</div>
							<!-- Course Body -->
							<div class="course-body">
								<!--<div class="name-price">
						<div class="teacher-info">
							<img src="images/author1.jpg" alt="#">
							<h4 class="title">Jewel Mathies</h4>
						</div>
						<span class="price"></span>
					</div-->
								<h4 class="c-title"><a href="mlbook1.html">Data Analysis and Machine Learning </a></h4>
								<p>This is an interactive web notebook which explains about Data Preprocessing and Machine Learning</p>
							</div>
							<!-- Course Metam-->
							<!--<div class="course-meta">
					 Rattings
								<ul class="rattings">
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star"></i></li>
									<li><i class="fa fa-star-half-o"></i></li>
									<li class="point"><span>4.5</span></li>
								</ul>
								 Course Info
								<div class="course-info">
									<span><i class="fa fa-users"></i>2.4k Enrolled</span>
									<span><i class="fa fa-calendar-o"></i>2 Month</span>
									<span><i class="fa fa-clock-o"></i>09:30 - 12:00</span>
								</div>
							</div>-->
							<!--/ End Course Meta -->
						</div>
						<!--/ End Single Course -->
					</div>



					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Course -->
						<div class="single-course">
							<!-- Course Head -->
							<div class="course-head overlay">
								<img src="images/courses/course2.jpg" alt="#">
								<a href="ucidataviz.html" class="btn white primary">Learn More</a>
							</div>
							<!-- Course Body -->
							<div class="course-body">
								<!--<div class="name-price">
						<div class="teacher-info">
							<img src="images/author1.jpg" alt="#">
							<h4 class="title">Jewel Mathies</h4>
						</div>
						<span class="price">$350</span>
					</div>-->
								<h4 class="c-title"><a href="ucidataviz.html">Interactive Data Visualization using R</a></h4>
								<p>An interactive web notebook that explains about exploratory data analysis, Descriptive Statistics and data visualization </p>
							</div>
							<!-- Course Meta -->
							<!--<div class="course-meta">
					 Rattings
					<ul class="rattings">
						<li><i class="fa fa-star"></i></li>
						<li><i class="fa fa-star"></i></li>
						<li><i class="fa fa-star"></i></li>
						<li><i class="fa fa-star"></i></li>
						<li><i class="fa fa-star-half-o"></i></li>
						<li class="point"><span>4.5</span></li>
					</ul>
					 Course Info
					<div class="course-info">
						<span><i class="fa fa-users"></i>2.4k Enrolled</span>
						<span><i class="fa fa-calendar-o"></i>2 Month</span>
						<span><i class="fa fa-clock-o"></i>09:30 - 12:00</span>
					</div>
				</div>-->
							<!--/ End Course Meta -->
						</div>
						<!--/ End Single Course -->
					</div>





					<div class="col-lg-4 col-md-6 col-12">
						<!-- Single Course -->
						<div class="single-course">
							<!-- Course Head -->
							<div class="course-head overlay">
								<img src="images/courses/course3.jpg" alt="#">
								<a href="dl/base.html" class="btn white primary">Learn Now</a>
							</div>
							<!-- Course Body -->
							<div class="course-body">
								<!--<div class="name-price">
						<div class="teacher-info">
							<img src="images/author3.jpg" alt="#">
							<h4 class="title">Noha Brown</h4>
						</div>
						<span class="price">Free</span>
					</div>-->
								<h4 class="c-title"><a href="dl/base.html">AI Web Application: Biomedical Imaging</a></h4>
								<p>Computer Aided Diagnosis of medical conditions using state-of-the-art Deep Learning classifiers </p>

							</div>
							<!--Course Meta
				<div class="course-meta">
					 Rattings
					<ul class="rattings">
						<li><i class="fa fa-star"></i></li>
						<li><i class="fa fa-star"></i></li>
						<li><i class="fa fa-star"></i></li>
						<li><i class="fa fa-star"></i></li>
						<li><i class="fa fa-star-o"></i></li>
						<li class="point"><span>4.0</span></li>
					</ul>
					 Course Info
					<div class="course-info">
						<span><i class="fa fa-users"></i>5.3k Enrolled</span>
						<span><i class="fa fa-calendar-o"></i>2 Weeks</span>
						<span><i class="fa fa-clock-o"></i>10:00 - 11:00</span>
					</div>
				</div>
				/ End Course Meta-->
						</div>
						<!--/ End Single Course -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Courses -->	
		
		 <!--Features 
		<div class="features overlay section" data-stellar-background-ratio="0.5">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-12">
						 Single Feature 
						<div class="single-feature">
							<div class="icon-img">
								<img src="images/feature1.jpg" alt="#">
								<i class="fa fa-clone"></i>
							</div>
							<div class="feature-content">
								<h4 class="f-title">Trending Course</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam suscipit fugiat sint totam soluta assumenda</p>
							</div>
						</div>
						/ End Single Feature 
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						 Single Feature 
						<div class="single-feature">
							<div class="icon-img">
								<img src="images/feature2.jpg" alt="#">
								<i class="fa fa-book"></i>
							</div>
							<div class="feature-content">
								<h4 class="f-title">Books & Library</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam suscipit fugiat sint totam soluta assumenda</p>
							</div>
						</div>
						/ End Single Feature 
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						 Single Feature 
						<div class="single-feature">
							<div class="icon-img">
								<img src="images/feature1.jpg" alt="#">
								<i class="fa fa-institution"></i>
							</div>
							<div class="feature-content">
								<h4 class="f-title">Best Facility</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam suscipit fugiat sint totam soluta assumenda</p>
							</div>
						</div>
						/ End Single Feature 
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						 Single Feature 
						<div class="single-feature">
							<div class="icon-img">
								<img src="images/feature3.jpg" alt="#">
								<i class="fa fa-users"></i>
							</div>
							<div class="feature-content">
								<h4 class="f-title">Certified Teachers</h4>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam suscipit fugiat sint totam soluta assumenda</p>
							</div>
						</div>
						/ End Single Feature 
					</div>
				</div>
			</div>
		</div>
		/ End Features--> 
		<!-- Clients CSS -->
		<div class="clients" style="text-align: center;">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-12">
						<div class="text-content">
									<div class="container" style="display: inline-block;">
				<header class="major">
					<h2 style="color:white;"> DataLife <strong style="color:orangered;font-weight: bold;">X</strong></h2>
					<p>Data Science for Everyone</p>
				</header>
			</div>
						</div>
					</div>
						
				
				</div>
			</div>
		</div>
		
		<!--/ End Clients CSS -->
		
	
		<!-- Footer -->
		<footer class="footer section">
			<!-- Footer Top -->
			<div class="footer-top overlay">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-6 col-12">
							<!-- About -->
							<div class="single-widget about">
								<h2>About DataLifeX</h2>
								<ul class="list">
									<li><i class="fa fa-phone"></i>Phone: +91 9884735283 </li>
									<li><i class="fa fa-envelope"></i>Email: <a href="mailto:admin@datalifex.in">admin@datalifex.in</a></li>
									<li><i class="fa fa-map-o"></i>Address: 15, Thiruvalluvar Rd, Taramani, Chennai, India</li>
								</ul>
								<!-- Social -->
								<ul class="social">
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li ><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
									<li class="active"><a href="https://www.linkedin.com/in/palani-thanaraj-krishnan-57487b99"><i class="fa fa-linkedin"></i></a></li>
									<li class="active"><a href="https://www.youtube.com/channel/UC8MvxTarEy9msJWo11nZnRw"><i class="fa fa-youtube"></i></a></li>
								</ul>
								<!-- End Social -->
							</div>
							<!--/ End About -->
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<!-- Useful Links -->
							<div class="single-widget list">
								<h2>Useful Links</h2>
								<ul>
									<li><i class="fa fa-angle-right"></i><a href="index.html">Home</a></li>
									<li><i class="fa fa-angle-right"></i><a href="aboutus.html">About Us</a></li>
									<li><i class="fa fa-angle-right"></i><a href="ibooks.html">iBooks</a></li>
									<li><i class="fa fa-angle-right"></i><a href="deepl.html">CADx</a></li>
									<li><i class="fa fa-angle-right"></i><a href="contact.html">Contact Us</a></li>
								</ul>
							</div>
							<!--/ End Useful Links -->
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							
							<div class="single-widget list">
								<h2>DataScience Blogs</h2>
								<ul>
									<li><i class="fa fa-angle-right"></i><a href="https://towardsdatascience.com/">Towards Data Science</a></li>
									<li><i class="fa fa-angle-right"></i><a href="https://machinelearningmastery.com/start-here/#getstarted">Machine Learning Mastery</a></li>
									<li><i class="fa fa-angle-right"></i><a href="https://medium.com/">Medium</a></li>
									<li><i class="fa fa-angle-right"></i><a href="https://www.kaggle.com/">Kaggle</a></li>
									<li><i class="fa fa-angle-right"></i><a href="https://github.com/palanithanarajk">GitHub</a></li>
								</ul>
							</div>
						</div> 
						</div>
					</div>
				</div>
			
			<!--/ End Footer Top -->
			<!-- Footer Bottom -->
			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<!-- Copyright -->
							<div class="copyright">
								<p>� Copyright DataLifeX 2020. Theme by <a href="http://themelamp.com">www.themelamp.com</a></p>
							</div>
							<!--/ End Copyright -->
						</div>
					</div>
				</div>
			</div>
			<!--/ End Footer Bottom -->
		</footer>
		<!--/ End Footer -->
		
		<!-- Jquery JS-->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-migrate.min.js"></script>
		<!-- Colors JS-->
        <script src="js/colors.js"></script>
		<!-- Popper JS-->
        <script src="js/popper.min.js"></script>
		<!-- Bootstrap JS-->
        <script src="js/bootstrap.min.js"></script>
		<!-- Owl Carousel JS-->
        <script src="js/owl.carousel.min.js"></script>
		<!-- Jquery Steller JS -->
		<script src="js/jquery.stellar.min.js"></script>
		<!-- Final Countdown JS -->
		<script src="js/finalcountdown.min.js"></script>
		<!-- Fancy Box JS-->
		<script src="js/facnybox.min.js"></script>
		<!-- Magnific Popup JS-->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<!-- Circle Progress JS -->
		<script src="js/circle-progress.min.js"></script>
		<!-- Nice Select JS -->
		<script src="js/niceselect.js"></script>
		<!-- Jquery Steller JS-->
        <script src="js/jquery.stellar.min.js"></script>
		<!-- Jquery Steller JS-->
        <script src="js/cube-portfolio.min.js"></script>
		<!-- Slick Nav JS-->
        <script src="js/slicknav.min.js"></script>
		<!-- Easing JS-->
        <script src="js/easing.min.js"></script>
		<!-- Waypoints JS-->
        <script src="js/waypoints.min.js"></script>
		<!-- Counter Up JS -->
		<script src="js/jquery.counterup.min.js"></script>
		<!-- Scroll Up JS-->
        <script src="js/jquery.scrollUp.min.js"></script>
		<!-- Gmaps JS-->
		<script src="js/gmaps.min.js"></script>
		<!-- Main JS-->
        <script src="js/main.js"></script>
    </body>
</html>