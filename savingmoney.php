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
<title>Saving Money</title>
<meta charset="utf-8">

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
		bottom: 1px solid #000000;
		color:black;
	}

</style>
</head>
<body>

<div class="container">

	<!-- Home -->

	<div class="home">
		<div  data-parallax="scroll" data-image-src="images/news_background.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content">
						<div class="home_content_inner">
							<h2>Findout Saving money by Date</h2>

									<form action="savingmoney.php" method="post">

		                               <input type="date" name="edate" placeholder="Search Date" >
			                           <input type="submit" name="submit" value="Search" style="border:0;

	                                   background: purple;
	                                   display: block;
	                                   margin: 20px auto;
	                                   text-align: center;
	                                   border:2px solid #2ecc71;
	                                   padding: 14px 10px;
	                                   width: 100px;
	                                   outline: none;
	                                   color: white;
	                                   border-radius: 24px;
                                       transition: 0.25s;
                                       cursor: pointer;" >

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

										</a></li>
									</ul>
								</div>
								<div class="main_menu_contact ml-auto">
									<div class="main_menu_phone"><img src="images/phone-call.svg" alt=""><span>+880 1755456020</span></div>
									<div class="main_menu_email"><img src="images/envelope.svg" alt=""><span>mkhmilton786@gmail.com</span></div>

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
<center>
<table style="color: white;font-size: 20px;background-color: purple;text-align: center;" width="100%" border="1"<tr> <th>Date</th><th>Category</th><th>Expenses amount</th><th>Earning amount</th></tr>
<?php
include_once("config.php");
if(isset($_POST["submit"]))
{
	$edate=$_POST['edate'];
	$result=mysqli_query($con,"SELECT * FROM dailyexpenses WHERE Expensesdate='$edate'");

       $expensesamount=0;
       $earningamount=0;
					while($res = mysqli_fetch_array($result))
					{
						echo "<tr><td>".$res['Expensesdate']."</td>";
						echo "<td>".$res['category']."</td>";
						echo "<td>".$res['amount']."</td>";
						echo"<td>".$res['earningamount']."</td>";
						echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a></td>";
						echo "<td><a href=\"delete.php?id=$res[id]\">Delete</a></td></tr>";



						//$prod=$res['credit']*$res['grade'];
						$expensesamount +=$res['amount'];
						$earningamount +=$res['earningamount'];

					}

					$savingmoney=$earningamount-$expensesamount;
					echo "<font color='black'; font  size='18px'>Saving Money is:" .$savingmoney;

}




?>
</table>
<br>
<br><br>
</center>
