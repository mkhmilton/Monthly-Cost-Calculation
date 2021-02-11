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
<title>Daily Expenses</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Invest project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/news.css">
<link rel="stylesheet" type="text/css" href="styles/news_responsive.css">
<style type="text/css">
	input
	{
		width: 300px;
		bottom: 1px solid;
		background:none;
		color:white;
	}
</style>
</head>
<body>

<div class="super_container">

	<!-- Home -->

	<div class="home">
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/news_background.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content">
						<div class="home_content_inner">

									<form action="addexpenses.php" method="post">
										<input type="date" placeholder="Enter Expenses date" name="date" required><br><br>
										<select name="category" style="width: 300px;
		                                  bottom: 1px solid;
		                                  background:none;
		                                  color:green;">
											<option>Select Category</option>
											<option value="Food">Food</option>
											<option value="Electronic">Electronic</option>
											<option value="Cloths">Cloths</option>
											<option value="Other">Other</option>
										</select><br><br>
										<input type="number" placeholder="Enter Daily Expenses amount" name="expenses_amount" required><br><br>
										<input type="number" placeholder="Enter Earning amount" name="earningamount" required>
										<input type="submit" name="submit" value="Save" style=" border:0;
	                                   background:black;
	                                   display: block;
	                                   font-size: 16px;
	                                   margin: 20px auto;
	                                   text-align: center;
	                                   border:2px solid #2ecc71;
	                                   width: 200px;
	                                   outline: none;
	                                   color: white;
	                                   border-radius: 24px;
                                     transition: 0.25s;
                                     cursor: pointer;
	                                    	">
									</form>


						</div>
					</div>
				</div>
			</div>
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
											<div class="logo_line_2">Daily Expenses</div>
											<div class="logo_img"><img src="images/logo.png" alt=""></div>
										</a>
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
											<a href="mainpage.php">home</a>
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

			

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/news_custom.js"></script>
</body>
</html>
