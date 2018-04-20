<!-- বিসমিল্লাহির রাহমানির রাহীম-->
<?php ob_start(); ?>
<!DOCTYPE html>
<html>
	<head>
		<title> </title>
		   <title>Knignt's Luxury</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!--Bootstrap stylesheet-->
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">

	<!-- Bootstrap JS File-->
	<script src="Bootstrap/js/jquery.min.js"></script>
	<script src="Bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="font/css/font-awesome.min.css">

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
			margin:0 auto;
			margin-left: 105px;
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
				margin-top: 14px;
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
			width: 800px;
			margin:0 auto;
			background: white;

			padding:20px;
			min-height:700px;
			border-radius: 10px;
			border-style: solid;
			border-color: green;

			}
			/* first Image */
			.items {
				position:relative;
				height: 518px;margin: 5px;width: 50%;float: left;

				overflow:hidden;
			}
			.items img {

				height: 515px;margin: 5px;width: 50%;float: left;
			}
			.shadow {
				background: rgba(0,0,0,.6);
				height:100%;
				width:100%;
				position:absolute;
				top: -100%;
				transition:.9s;
				margin: 5px;
				margin-top: 0px;
			}
			.items:hover .shadow {
				top:0;
				margin: 5px;

			}


			/* Last Image same as First */
			.items8 {
				position:relative;
				height: 515px;margin: 5px;width: 50%;float: right;

				overflow:hidden;
			}
			.items8 img {

				height: 515px;margin: 5px;width: 50%;float: right;
			}
			.shadow8 {
				background: rgba(0,0,0,.6);
				height:100%;
				width:100%;
				position:absolute;
				top: -100%;
				transition:.9s;
				margin: 5px;
				margin-top: 0px;
			}
			.items8:hover .shadow8 {
				top:0;
				margin: 5px;

			}

			/* second image */
			.items2 {
				position:relative;
				height: 515px;margin: 5px;width: 48%;float: right;

				overflow:hidden;
				margin-left:0px;
			}
			.items2 img {

				height: 515px;margin: 5px;width: 48%;float: left; margin-left:0px;
			}
			.shadow2 {
				background: rgba(0,0,0,.6);
				height:100%;
				width:100%;
				position:absolute;
				top: -100%;
				transition:.9s;
				margin: 5px;
				margin-top: 0px;
				margin-left:0px;
			}
			.items2:hover .shadow2 {
				top:0;
				margin: 5px;
				margin-left:0px;
			}
			/* 3rd image */
			.items3 {
				position:relative;
				height: 515px;margin: 5px;width: 50%;float: left;

				overflow:hidden;
			}
			.items3 img {

				height: 515px;margin: 5px;width: 50%;float: left;
			}
			.shadow3 {
				background: rgba(0,0,0,.6);
				height:100%;
				width:100%;
				position:absolute;
				top: -100%;
				transition:.9s;
				margin: 5px;
				margin-top: 0px;
			}
			.items3:hover .shadow3 {
				top:0;
				margin: 5px;

			}
			/* Little first Image */
			.items4 {
				position:relative;

				height: 250px;margin: 5px;width: 48%; float:right;

				overflow:hidden;
			}
			.items4 img {

				height: 250px;margin: 5px;width: 48%; float:right;
			}
			.shadow4 {
				background: rgba(0,0,0,.6);
				height:100%;
				width:99%;
				position:absolute;
				top: -100%;
			   transition:.9s;
				margin: 5px;
				margin-top: 0px;
			}
			.items4:hover .shadow4 {
				top:0;
				margin: 5px;
				margin-left:0;

			}
			/* Little 2nd Image */
			.items5 {
				position:relative;
				height: 258px;margin: 5px;width: 48%; float:right;
				overflow:hidden;
			}
			.items5 img {

				height: 258px;margin: 5px;width: 48%; float:right;
			}
			.shadow5 {
				background: rgba(0,0,0,.6);
				height:97%;
				width:99%;
				position:absolute;
				top: -100%;
				transition:.9s;

				margin-top: 0px;
			}
			.items5:hover .shadow5 {
				top:0;
				margin:5px;
				margin-left:0;

			}
			.full-body {

			min-height: 420px;
			background-image: url("images/tile.jpg");
			margin-top:352px;
			padding-bottom: 30px;
			padding-top: 20px;
			border-top: 2px solid white;
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
			* {
			  -webkit-box-sizing: border-box;
				 -moz-box-sizing: border-box;
				  -ms-box-sizing: border-box;
					  box-sizing: border-box;
			}


			.pic {
			  border: 10px solid #fff;
			  float: left;
			  height: 300px;
			  width: 300px;
			  margin: 20px;
			  overflow: hidden;

			  -webkit-box-shadow: 5px 5px 5px #111;
					  box-shadow: 5px 5px 5px #111;
			}
			/*MORPH*/
			.morph {
			  -webkit-transition: all 0.5s ease;
				 -moz-transition: all 0.5s ease;
				   -o-transition: all 0.5s ease;
				  -ms-transition: all 0.5s ease;
					  transition: all 0.5s ease;
			}

			.morph:hover {
			  border-radius: 50%;
			  -webkit-transform: rotate(360deg);
				 -moz-transform: rotate(360deg);
				   -o-transform: rotate(360deg);
				  -ms-transform: rotate(360deg);
					  transform: rotate(360deg);
			}

         input[type=submit]{
                width: 145px;
                margin-top: 30px;
                border: none;
                border-radius: 10px;
                background-color: lightgreen;
                color: white;
                text-decoration-color: black;
                padding: 15px;
                cursor: pointer;
            }

            input[type=submit]:hover{
                width: 145px;
                margin-top: 30px;
                border: none;
                border-radius: 10px;
                background-color: green;
                color: white;
                text-decoration-color: black;
                padding: 15px;
                cursor: pointer;
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
			
			input[type=text], select {
					width: 100%;
					padding: 8px 20px;
					margin: 8px 0;
					display: inline-block;
					border: 1px solid #ccc;
					border-radius: 4px;
					box-sizing: border-box;
				}
				
			input[type=number], select {
					width: 100%;
					padding: 8px 20px;
					margin: 8px 0;
					display: inline-block;
					border: 1px solid #ccc;
					border-radius: 4px;
					box-sizing: border-box;
				}
			input[type=email], select {
					width: 100%;
					padding: 8px 20px;
					margin: 8px 0;
					display: inline-block;
					border: 1px solid #ccc;
					border-radius: 4px;
					box-sizing: border-box;
				}
			input[type=date], select {
					width: 100%;
					padding: 8px 20px;
					margin: 8px 0;
					display: inline-block;
					border: 1px solid #ccc;
					border-radius: 4px;
					box-sizing: border-box;
				}		

				input[type=submit] {
					
					background-color: #4CAF50;
					color: white;
					border: none;
					border-radius: 4px;
					cursor: pointer;
				}

				input[type=submit]:hover {
					background-color: #45a049;
					
				}
				h4 {
					font-family: 'Fjalla One', sans-serif;
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
						<img src="images/contactLogo2.jpg" alt="Picture Not Found" id="pictureLogo">

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
						<!-- Form start -->
						<!-- Important & all PHP code here -->
						<div class="col-xs-12 col-sm-9 col-md-9" style="width:100%">

							<div class="contact_enquiry_div reservation_container" style="width:100%;">
								<h1 class="header" style="color: lightgreen; font-weight: bold; margin-bottom: 30px;">
									Book For Reservation <span></span> <span class="bracket"></span>
									<span class="title-block"></span>
								</h1>

                                <form class="" action="" method="post">
                                    Check In Date:*
                                    <input type="date" name="check_in_date" value="" required> <br>

                                    Check Out Date:*
                                    <input type="date" name="check_out_date" value="" required> <br>

                                    <h4>Reservation Information</h4>
                                    Room Type:*
                                    <select name="room_type" required>
                                      <?php
                                      require 'connection.php';
                                      $query = "select * from room_type";
                                      $result = mysql_query($query);
                                      while($row = mysql_fetch_assoc($result)) {
                                         echo '<option value="'.$row["name"].'">'.$row["name"].'</option>';
                                      }
                                      ?>
                                  </select><br>
                                    Number of room/suite:*
                                    <input type="number" name="room_no" value="1" min="1" max="10" required><br>
                                    Number of Persons:*
                                    <input type="number" name="person_no" value="1" min="1" max="10" required><br>
                                    Number of Children:
                                    <input type="number" name="children_no" value="0" min="0" max="10" required><br>

                                    <h4>Personal Information</h4>
                                    First Name:*
                                    <input type="text" name="name_first" value="" required><br>
                                    Last Name:*
                                    <input type="text" name="name_last" value="" required><br>
                                    Primary Contact No.:*
                                    <input type="text" name="contact_no" value="" required><br>
                                    Email:*
                                    <input type="email" name="email" value="" required><br>
                                    Address:*
                                    <input type="text" name="address" value="" required><br>

                                <center><input class="pulse" type="submit" name="book_button" value="Confrim Booking"></center>
                                </form>

                                <?php
		                        // to catch 'Notice' errors as exceptions
                                set_error_handler('exceptions_error_handler');
		                        function exceptions_error_handler($severity, $message, $filename, $lineno) {
				                    if (error_reporting() == 0) {
					                    return;
				                    }
				                    if (error_reporting() & $severity) {
					                    throw new ErrorException($message, 0, $severity, $filename, $lineno);
				                    }
		                        }
		                        ?>

                                <?php
                                if( isset($_POST['book_button']) ) {
                                    require "connection.php";
                                    $query = "insert into booking (check_in_date,check_out_date,room_type,no_room,no_person,no_children,name_first,name_last,contact_no,email,address) values('".$_POST['check_in_date']."', '".$_POST['check_out_date']."', '".$_POST['room_type']."', ".$_POST['room_no'].", ".$_POST['person_no'].", ".$_POST['children_no'].", '".$_POST['name_first']."', '".$_POST['name_last']."' , '".$_POST['contact_no']."', '".$_POST['email']."', '".$_POST['address']."' )";
                                    mysql_query($query);
                                    header("location: booking_successful.php");
                                }
                                 ?>

							</div>
						</div>
			<!--End. Form-->

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
