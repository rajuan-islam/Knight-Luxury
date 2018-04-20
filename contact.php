<!-- বিসমিল্লাহির রাহমানির রাহীম-->
<!DOCTYPE html>
<?php ob_start(); ?>
<html>
	<head>
		<title> </title>
		<!-- Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Alegreya+Sans' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
		<!-- Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Alegreya+Sans' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>

		<style>
			html, body {
			margin:0;
			padding:0;
			font-family: 'Raleway', sans-serif;
			}
			#pictureLogo {
			position: absolute;
			left: 0px;
			top: 0px;
			z-index: -1;
			width:100%;
			height:500px;

			}
			.full-body{
			min-height:420px;
			margin-top: 300px;
			<!--background: #FFB;-->
			}
			.container{
			width: 1170px;
			<!-- background: #FFB; -->
			min-height: 420px;
			margin: 0 auto;
			position: relative;
			}
			.page {

			}
			.rooms-and-suites-header {
			text-align: center;
			margin: 55px auto 70px;
			}
			.rooms-and-suites-header h3 {
				color: #88898a;
				font-weight: 300;
				font-family: 'Alegreya Sans', sans-serif;
				font-size: 40px;
				margin-bottom: 0px;
				padding-top: 72px;
			}

			.rooms-and-suites-header h1 {
				font-weight: 300;
				font-family: 'Alegreya Sans', sans-serif;
				font-size: 50px;
				margin-top: 0px;
			}

			.rooms-and-suites-header p {
				color: #212020;
				font-size: 17px;
				line-height: 26px;
				margin: 30px auto;
				max-width: 800px;
			}
			ul.rooms-and-suites {
				position: relative;
				display: block;
				margin: 0px -5px 30px;
				list-style: none;
			}
			ul.rooms-and-suites > li {
				float: left;
				display: block;
				width: 50%;
				padding: 0px;
				margin: 0px;

			}
			.footer {
				background: black;
				color: wheat;
				/* margin-top: -59px; */
				padding: 20px;
				padding-bottom: 5px;
				border-bottom: 1px solid green;
			}
			a {text-decoration: none;
				color: #ffde7e;
				text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.6);
				font-size: 18px;
			}
			a:hover {
			color:green;
			font-weight: bold;
			}
			.navcontainer {
			width:1170px;
			margin:0 auto
			}
			#header .logo {
				position: relative;
				display: block;
				margin: 0 auto 10px;
				width: 30px;
				float: left;
				margin-top: -45px;
				margin-left: -89px;

			}
			#header .logo img {
				max-height: 145px;
			}
			#header .main-nav {
				 position: relative;
				display: inline-flex;
				text-align: center;
				list-style-type: none;
				padding: 10px 0px;
				margin-left: 60px;

			}
			.inner-top {
			/*min-height: 50px; */
			/*background-color: #000; */
			/* padding-top: 12px; */
			padding: 20px;
			background: black;
			}
			#header {
			background: linear-gradient(to bottom, rgba(0,0,0,0.95) 0%,rgba(0,0,0,0.5) 70%,rgba(0,0,0,0) 100%);
			}


			.container {

			font-family: 'Raleway', sans-serif;
			width: 1170px;
			margin:0 center;
			min-height:555px;
			margin-left:60px;
			padding:20px;

			}
			.address_div, .contact_enquiry_div {
				margin-top: 75px;
			}
			.full-body {

			min-height: 420px;

			}
			.rooms-and-suites-header {
				text-align: center;
				margin: 55px auto 70px;
				margin-top: -68px;
			}
			.rooms-and-suites-header p {
				color: #212020;
				font-size: 17px;
				line-height: 26px;
				margin: 30px auto;
				max-width: 800px;
			}

			.rooms-and-suites-header h3 {
				color: #ffde7e;
				font-weight: 300;
				font-family: 'Alegreya Sans', sans-serif;
				font-size: 40px;
				margin-bottom: 0px;
				padding-top: 72px;
				margin-top: 73px;
				margin-bottom: 0px;

			}
			.rooms-and-suites-header h1 {
				font-weight: 300;
				font-family: 'Alegreya Sans', sans-serif;
				font-size: 50px;
				margin-top: 0px;
			}
			.address_div h3 {
				color: #938048;
				font-weight: normal;
			}
			.address_div ul li {
				font-weight: 400;
				color: #747373;
				font-size: 16px;
				font-family: sans-serif;
				list-style-type: none;
			}
			h3, .h3 {
			font-size: 24px;
			}
			.contact_enquiry_div {
				margin-top: 65px;
			}
			.contact_enquiry_div h3 {
				color: #938048;
				font-weight: normal;
			}
			.form-control {
				display: block;
				width: 80%;
				height: 34px;
				padding: 6px 12px;
				font-size: 14px;
				line-height: 1.42857143;
				color: #555;
				background-color: #fff;
				background-image: none;
				border: 1px solid #ccc;
				-webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
				-o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
				transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
			}

			.button {
				  display: inline-block;
				  border-radius: 4px;
				  background-color: #f4511e;
				  border: none;
				  color: #FFFFFF;
				  text-align: center;
				  font-size: 20px;
				  padding: 5px;
				  width: 100px;
				  transition: all 0.5s;
				  cursor: pointer;
				  margin-top: 10px;
				}

				.button span {
				  cursor: pointer;
				  display: inline-block;
				  position: relative;
				  transition: 0.5s;
				}

				.button span:after {
				  content: ' >';
				  position: absolute;
				  opacity: 0;
				  top: 0;
				  right: -20px;
				  transition: 0.5s;
				}

				.button:hover span {
				  padding-right: 25px;
				}

				.button:hover span:after {
				  opacity: 1;
				  right: 0;
				}

				.one {
					width: 50%;
					float: right;
				}
				.two {
					width: 50%;
					float: left;
				}
				
				input[type=submit] {
					
					background-color: #4CAF50;
					color: white;
					border: none;
					border-radius: 4px;
					cursor: pointer;
					width: 160px;
				}

				input[type=submit]:hover {
					background-color: #45a049;
					width: 160px;
				}
				
				
				/* Pulse effect */
				@-webkit-keyframes pulse {
				 25% {
				  -webkit-transform: scale(1.2);
				  transform: scale(1.2);
				  }
				  75% {
				  -webkit-transform: scale(0.8);
				  transform: scale(0.8);
				  }
				}
				@keyframes pulse {
				  25% {
				 -webkit-transform: scale(1.2);
				 -ms-transform: scale(1.2);
				 transform: scale(1.2);
				 }
				75% {
				-webkit-transform: scale(0.8);
				-ms-transform: scale(0.8);
				transform: scale(0.8);
				}
			  }
			.pulse {
			  display: inline-block;
			  -webkit-transform: translateZ(0);
			  -ms-transform: translateZ(0);
			  transform: translateZ(0);
			  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
			}
			.pulse:hover {
			  -webkit-animation-name: pulse;
			  animation-name: pulse;
			  -webkit-animation-duration: 1s;
			  animation-duration: 1s;
			  -webkit-animation-timing-function: linear;
			  animation-timing-function: linear;
			  -webkit-animation-iteration-count: infinite;
			  animation-iteration-count: infinite;
			}
		</style>
	</head>
	<body>

			<!-- 01. ছবি পর্যন্ত অংশ -->
			<div class="upper">
				<!-- ছবি এবং লোগো এবং Navbar -->
				<div id="header" class="inner-header" style="z-index: 6;">
					<!--01-->
					<div class="inner-top">

					</div>
					<!--02-->
					<div class="inner-header">
						<div id="header" class="inner-header" style="z-index: 6;">


					<div class="navcontainer">
						<div class="row">
								<div class="logo">
									<img src="images/leftSide picLogo.png" style="width: 273px; height: 261px; margin-left: 18px;">
								</div>
								<ul class="main-nav">
									<li class="odd first-child" style="padding: 20px;margin-left: 140px;/* font-weight: bold; */">
									<a href="home.php">Home</a>
									</li><li class="active even" style="padding: 20px;margin-left: -20px;/* font-weight: bold; */">
										<a href="rooms.php">Rooms &amp; Suites</a>
									</li><li class="odd" style="padding: 20px;margin-left: -20px;/* font-weight: bold; */">
										<a href="restaurants.php">Restaurants</a>
									</li><li class="even" style="padding: 20px;margin-left: -20px;/* font-weight: bold; */">
										<a href="meetings.php">Meetings  &amp; Events</a>
									</li><li class="odd" style="padding: 20px;margin-left: -20px;/* font-weight: bold; */">
										<a href="relaxation.php">Relaxation</a>
									</li><li class="even" style="padding: 20px;margin-left: -20px;/* font-weight: bold; */">
										<a href="recreations.php">Recreations</a>
									</li><li class="odd" style="padding: 20px;margin-left: -20px;/* font-weight: bold; */">
										<a href="offers.php">Offers</a>
									</li><li class="even last-child" style="padding: 20px;margin-left: -20px;/* font-weight: bold; */">
										<a href="contact.php">Contact</a>
									</li>
								</ul>

						</div><!-- End .row -->
					</div><!-- End .container -->
				</div>
				</div>
				<!-- End of 2 -->

					<!--03-->
					<div class="inner-detail-container">
						<!-- ছবি-->
						<img src="images/bigImage3.jpg" alt="Picture Not Found" id="pictureLogo">

					</div>
					<div class="reservation"
					style="background: #938048;color:white;margin-top: -120px;width: 10%;text-align: center;float: right;display=inline-block;padding: 2px;"
					>

									<a href="booking.php" style="text-decoration:none; color: white">
										Book Now
									</a>

					</div>

				</div>
			</div>
			<!-- End. of Upper -->

			<!--02.Body অংশ -->

		<div class="full-body">
			<div class="container">

			<div class="one">
				<div class="contact_enquiry_div">
					<h3>Send us your enquiry</h3>
										<form id="contact-us" class="form-horizontal" action="" method="post" >
					  <div class="form-group">
					    <label class="col-md-3 control-label">Name<span>*</span></label>
					    <div class="col-md-9">
					      <input type="text" class="form-control" id="" name="name" placeholder="" data-msg-required="Please enter your name." required="" aria-required="true">
					    </div><!-- End .col-md-10 -->
					  </div><!-- End .form-group -->

					  <div class="form-group">
					    <label class="col-md-3 control-label">Mobile<span>*</span></label>
					    <div class="col-md-9">
					      <input type="text" class="form-control" name="mobile" placeholder="" data-msg-required="Please enter your mobile number." required="" aria-required="true">
					    </div><!-- End .col-md-10 -->
					  </div><!-- End .form-group -->

					  <div class="form-group">
					    <label class="col-md-3 control-label">Email<span>*</span></label>
					    <div class="col-md-9">
					      <input type="email" class="form-control" name="email" placeholder="" data-msg-required="Please enter your email." style="width:80%;" required="" aria-required="true">
					    </div><!-- End .col-md-10 -->
					  </div><!-- End .form-group -->

					  <div class="form-group">
					    <label for="inputPassword3" class="col-md-3 control-label">Message<span>*</span></label>
					    <div class="col-md-9">
					      <textarea class="form-control" name="message" rows="3" required="" data-msg-required="Please enter your message." aria-required="true"></textarea>
					    </div><!-- End .col-md-10 -->
					  </div><!-- End .form-group -->

					  
					  <input class="button pulse" style="vertical-align:middle" type="submit" name="submit_button" value="Submit Enquiry">
					  <!--<button class="button" style="vertical-align:middle"><span>Submit! </span></button>-->

					</form>

					<?php
					if(isset($_POST['submit_button'])) {
						require 'connection.php';
						$query = "insert into enquiry (name,mobile,email,message) values( '".$_POST['name']."', '".$_POST['mobile']."', '".$_POST['email']."', '".$_POST['message']."' )";
						mysql_query($query);
						header('location: enquiry_successful.php');
					}
					 ?>

				</div>
			</div>
		<div class ="two">
			<div class="address_div">
					<h3>knights' Luxury Tea Resort &amp; Golf</h3>
					<ul>
						<li class="odd first-child">Bangladesh.</li>
						<li class="even">Mob: +88 01730 800552-4, 01930 800056-9, 01930 793596-7</li>
						<li class="odd">Tel: +88 08626 73000 - 19</li>

						<li class="even">US Number:  +17182456800</li>
						<li class="odd">UK number: +447031976800</li>
						<li class="even last-child">Fax: +88 12326 73020</li>
					</ul>

					<h3>Corporate Office</h3>
					<ul>
						<li class="odd first-child">House# 108, Apt.# A2, Road 8, Block C, Paltan,</li>
						<li class="even">Dhaka 1213, Bangladesh.</li>
						<li class="odd">Tel: +88 02 9857000, +88 02 9820000</li>
						<li class="even last-child">Fax: +88 02 885270000</li>
					</ul>

				</div>
			</div>


			</div>
		</div>
			<!-- End. of Body -->

			<!-- 03. ফুটার অংশ-->

			<div class="footer">
				<a href ="admin.php"><img src="images/adminImage.png" style="width:50px" alt="Admin Panel"/></a>
				<center><p style="text-weight:bold text-align:right;">Copyright &copy;  2016. Knignt's Luxury Tea Resort &amp; Golf. All rights reserved. </p> </center>
				<center>Site by <a href="https://www.facebook.com/Md.BiplobKarim" target="_blank">Karim</a> &amp; <a href="https://www.facebook.com/udoyabzxc" target="_blank">Khan</a><p></p></center>
			</div>
			<!-- End. of Footer -->




	</body>
</html>
