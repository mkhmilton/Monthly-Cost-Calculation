<?php
session_start();
if(!isset($_SESSION['ID']))
{
	header("Location:index.html");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Monthly Saving</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Invest project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>

<div class="super_container">

	<div class="home">
		<div class="home_slider_container">

			<div class="home">
		<div class="home_slider_container">

			<!-- Home Slider -->

			<div class="owl-carousel owl-theme home_slider">

				<!-- Slider Item -->
				<div class="owl-item">
					<div class="slider_background" style="background-image:url(images/home_slider_1.jpg)"></div>
					<div class="home_slider_content text-center">
						<h1>Khalid Hasan Milton</h1>
						<div class="home_slider_text">I AM A STUDENT.I COME FROM RAJSHAHI.STUDYING AT DAFFODIL INTERNATIONAL UNIVERSITY.B.SC. IN SOFTWARE ENGINEERING</div>
						<div class="link_button home_slider_button"><a href="#">read more</a></div>
					</div>
				</div>
				<!-- Slider Item -->
				<div class="owl-item">
					<div class="slider_background" style="background-image:url(images/home_slider_1.jpg)"></div>
					<div class="home_slider_content text-center">
						<h1>Khalid Hasan Milton</h1>
						<div class="home_slider_text">I AM A STUDENT.I COME FROM RAJSHAHI.STUDYING AT DAFFODIL INTERNATIONAL UNIVERSITY.B.SC. IN SOFTWARE ENGINEERING</div>
						<div class="link_button home_slider_button"><a href="#">read more</a></div>
					</div>
				</div>


			</div>

			<div class="home_slider_nav home_slider_prev d-flex flex-column align-items-center justify-content-center"><img src="images/arrow_l.png" alt=""></div>
			<div class="home_slider_nav home_slider_next d-flex flex-column align-items-center justify-content-center"><img src="images/arrow_r.png" alt=""></div>

		</div>

		<!-- Header -->

		<header class="header">

			<!-- Top Bar -->
			<div class="top_bar">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="top_bar_container d-flex flex-row align-items-center justify-content-start">
								<div class="logo_container">
									<div class="logo">
										<a href="#">
											<div class="logo_line_1"><span>Monthly</span>Saving</div>
											<div class="logo_line_2">BD Price</div>
											<div class="logo_img"><img src="images/logo.png" alt=""></div>
										</a>
									</div>
								</div>
								<div class="top_bar_content ml-auto">
									<div class="coins">

									</div>
									<div class="register_login">

										<div class="login"><a href="signout.php">logout</a></div>
									</div>
								</div>
								<div class="burger">
									<i class="fa fa-bars" aria-hidden="true"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Main Menu -->
			<div class="main_menu">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="main_menu_container d-flex flex-row align-items-center justify-content-start">
								<div class="main_menu_content">
									<ul class="main_menu_list">
										<li class="active hassubs">
											<a href="#">home</a>
											</li>
										<li><a href="#">about us
										</a></li>
										<li class="hassubs">
											<a href="dailyexpensess.php">Daily Expenses
												</a>
										<li class="hassubs">
											<a href="savingmoney.php">Money Saving
												</a>
										</li>
										<li><a href="contact.html">contact
											<svg version="1.1" id="Layer_16" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
												 width="9px" height="5px" viewBox="0 0 9 5" enable-background="new 0 0 9 5" xml:space="preserve">
												<g>
													<polyline class="arrow_d" fill="none" stroke="#FFFFFF" stroke-miterlimit="10" points="0.022,-0.178 4.5,4.331 9.091,-0.275 	"/>
												</g>
											</svg>
										</a></li>
									</ul>
								</div>
								<div class="main_menu_contact ml-auto">
									<div class="main_menu_phone"><img src="images/phone-call.svg" alt=""><span>+880 1755456020</span></div>
									<div class="main_menu_email"><img src="images/envelope.svg" alt=""><span>mkhmilton786@gmail.com</span></div>
									<div class="main_menu_search">
										<div class="main_menu_search_button">
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" viewBox="0 0 512 512" enable-background="new 0 0 512 512" width="15px" height="15px">
												<g>
												<path class="mag_path" d="M495,466.2L377.2,348.4c29.2-35.6,46.8-81.2,46.8-130.9C424,103.5,331.5,11,217.5,11C103.4,11,11,103.5,11,217.5   S103.4,424,217.5,424c49.7,0,95.2-17.5,130.8-46.7L466.1,495c8,8,20.9,8,28.9,0C503,487.1,503,474.1,495,466.2z M217.5,382.9   C126.2,382.9,52,308.7,52,217.5S126.2,52,217.5,52C308.7,52,383,126.3,383,217.5S308.7,382.9,217.5,382.9z" fill="#f4f4f8"/>
												</g>
											</svg>
										</div>
										<div class="main_menu_search_content">
											<form action="#">
												<input class="search_input" type="search" placeholder="Keyword" required="required">
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!-- Menu -->

			<div class="menu">
				<div class="menu_register_login">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="menu_register_login_content d-flex flex-row align-items-center justify-content-end">
									<div class="register"><a href="#">register</a></div>
									<div class="login"><a href="signout.php">logout</a></div>
								</div>
							</div>
						</div>
					</div>


						
	<!-- Intro -->




<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
