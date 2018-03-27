<?php

require("config.php");

if ($connect)
{
	if (isset($_POST['subscribesubmit']) && !empty($_POST['subscribe']) )
   {
		 $email = $_POST['subscribe'];
		 //inset email into db
		  $result = mysqli_query($connect, "insert into subscribers_email (sub_email) values('$email')");
			if(!$result)
			{
echo "not inserted";
			}
	 }
}



 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Rentit</title>
	<!-- favicon -->
<link href="images/ico/favicon.jpg" rel="icon" type="image">
	<!-- css -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/materialdesignicons.min.css" />
	<link rel="stylesheet" type="text/css" href="css/jquery.mCustomScrollbar.min.css" />
	<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css" />
	<link rel="stylesheet" type="text/css" href="css/unslider.css" />
	<link rel="stylesheet" type="text/css" href="css/template.css" />
</head>

<body id="home-page">
	<!-- Header
    ================================================== -->
	<header id="nino-header">
		<div id="nino-headerInner">
			<nav id="nino-navbar" class="navbar navbar-default" role="navigation">
				<div class="container">

					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nino-navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.php">Rentit</a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="nino-menuItem pull-right">
						<div class="collapse navbar-collapse pull-left" id="nino-navbar-collapse">
							<ul class="nav navbar-nav">
								<li>
									<a href="index.php">Home </a></li>
								<li><a href="#nino-story">About</a></li>
								<li><a href="posts.php">Posts</a></li>
								<li><a href="profile.php">My Account</a></li>
							</ul>
						</div>

					</div>
				</div><!-- /.container-fluid -->
			</nav>

			<section id="nino-slider" class="carousel slide container" data-ride="carousel">

				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<h2 class="nino-sectionHeading">
							<span class="nino-subHeading">Welcome To</span>
							 Rentit<br>
						</h2>
						<a href="rentit.purplestha.com" class="nino-btn">Get The App</a>
					</div>

				</div>

			</section>
		</div>
	</header><!--/#header-->

	<!-- Story About Us
    ================================================== -->
	<section id="nino-story">
		<div class="container">
			<h2 class="nino-sectionHeading">
				<span class="nino-subHeading">What we do</span>
				Story about us
			</h2>
			<p class="nino-sectionDesc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>

		</div>
	</section><!--/#nino-story-->
    <!-- Unique Design
    ================================================== -->
    <section id="nino-uniqueDesign">
    	<div class="container">
    		<h2 class="nino-sectionHeading">
				<span class="nino-subHeading">For all devices</span>
				Unique design
			</h2>
			<div class="sectionContent">
				<div class="nino-devices">
					<img class="tablet" src="images/img-2.png" alt="">
				</div>
			</div>
    	</div>
    </section><!--/#nino-uniqueDesign-->
    <!-- Our Team
    ================================================== -->
	<section id="nino-ourTeam">
		<div class="container">
			<h2 class="nino-sectionHeading">
				<span class="nino-subHeading">Who we are</span>
				Meet our team
			</h2>
			<p class="nino-sectionDesc">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
			</p>
			<div class="sectionContent">
				<div class="row nino-hoverEffect">
					<div class="col-md-4 col-sm-4">
						<div class="item">
							<img src="images/our-team/img-1.jpg" alt="">

						</div>
						<div class="info">
							<h4 class="name">Matthew Dix</h4>
							<span class="regency">Graphic Design</span>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="item">
											<img src="images/our-team/img-2.jpg" alt="">
						</div>
						<div class="info">
							<h4 class="name">Christopher Campbell</h4>
							<span class="regency">Branding/UX design</span>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="item">
								<img src="images/our-team/img-3.jpg" alt="">
						</div>
						<div class="info">
							<h4 class="name">Michael Fertig </h4>
							<span class="regency">Developer</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section><!--/#nino-ourTeam-->
    <!-- Footer
    ================================================== -->
    <footer id="footer">
        <div class="container">
        	<div class="row">
        		<div class="col-md-12">
        			<div class="colInfo">
	        			<div class="footerLogo">
	        				<a href="#" >Rentit</a>
	        			</div>
	        			<p>
										We can post rents as well as search post which are best suited for us.
									</p>
	        			<div class="nino-followUs">
	        				<div class="socialNetwork">
	        					<span class="text">Follow Us: </span>
	        					<a href="" class="nino-icon"><i class="mdi mdi-facebook"></i></a>
	        					<a href="" class="nino-icon"><i class="mdi mdi-twitter"></i></a>
	        					<a href="" class="nino-icon"><i class="mdi mdi-instagram"></i></a>
	        					<a href="" class="nino-icon"><i class="mdi mdi-pinterest"></i></a>
	        					<a href="" class="nino-icon"><i class="mdi mdi-google-plus"></i></a>
	        					<a href="" class="nino-icon"><i class="mdi mdi-youtube-play"></i></a>
	        					<a href="" class="nino-icon"><i class="mdi mdi-dribbble"></i></a>
	        					<a href="" class="nino-icon"><i class="mdi mdi-tumblr"></i></a>
	        				</div>
	        			</div>
								<form action="" class="nino-subscribeForm" method="post">
									<div class="input-group input-group-lg">
										<input type="email" class="form-control" placeholder="Your Email"name="subscribe" required>
											<span class="input-group-btn">
												<button class="btn btn-success" type="submit" name="subscribesubmit">Subscribe</button>
											</span>
									</div>
								</form>
        			</div>
        		</div>
        	</div>
			<div class="nino-copyright">Copyright &copy; 2017 <a target="_blank" href="" >Rentit</a>. All Rights Reserved. <br/> </div>
        </div>
    </footer><!--/#footer-->



    <!-- Scroll to top
    ================================================== -->
	<a href="#" id="nino-scrollToTop">Go to Top</a>

	<!-- javascript -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.hoverdir.js"></script>
	<script type="text/javascript" src="js/modernizr.custom.97074.js"></script>
	<script type="text/javascript" src="js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script type="text/javascript" src="js/template.js"></script>
	<script type="text/javascript" src="js/my.js"></script>


</body>
</html>
