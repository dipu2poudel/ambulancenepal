<?php
/*
Free Bootstrap Themes : https://www.Zerotheme.com
Free Responsive Html5 Templates : http://www.zerotheme.com
*/

$text = "<span style='color:red; font-size: 35px; line-height: 40px; magin: 10px;'>Error! Please try again.</span>";

if(isset($_POST['submitcontact']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];

	$to = "thegreatdeepak@gmail.com";
	$subject = "Zerotheme - Testing Contact Form";
	$message = " Name: " . $name ."\r\n Email: " . $email . "\r\n Message:\r\n" . $message;
	 
	$from = "Zerotheme.com";
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
	 
	if(@mail($to,$subject,$message,$headers))
	{
	  $text = "<span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Your Message was sent successfully !</span>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Ambulance Service Nepal. Providing The Best Emergency Facility" />
    <meta name="author" content="Deepak Poudel" />
	<title>Ambulance Care | Emergency</title>
	
	
	
	 <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	
	<!-- Custom Theme files -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
	<link href="css/contact-buttons.css" rel="stylesheet">
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.min.js"></script>
	
	<!---pop-up-box---->
	<script type="text/javascript" src="js/modernizr.custom.min.js"></script>    
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
	<!---//pop-up-box---->
	<script>
			$(document).ready(function() {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});
			
			});
	</script>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>	
	
	<!-- /////////////////////////////////////////Top -->
	<header>
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<a href="#" class="logo"><img src="images/logo.png" alt="Third slide"></a>
				</div>
				<div class="col-md-6 text-right">
					<span>Emergency Service:</span></br>
					<strong class="contact-phone"><i class="fa fa-phone"></i> 984-51-67407</strong>
				</div>
			</div>
		</div>
	</header>
	<!-- Header -->
	
	<!-- /////////////////////////////////////////Navigation -->
	<nav class="navbar navbar-default" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse"
						data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">
					Welcome to us !
				</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li>
                        <a class="page-scroll" href="index.html">Home</a>
                    </li>
					<li>
                        <a class="page-scroll" href="single.html">About</a>
                    </li>
					<li>
                        <a class="page-scroll" href="service.html">Services</a>
                    </li>
                    <!-- <li>
                        <a class="page-scroll" href="archive.html">Blogs</a>
                    </li> -->
                    <li>
                        <a class="page-scroll" href="contact.html">Contacts</a>
                    </li>
				</ul>
			</div>
		</div>
	</nav>
	
		
	<a id='backTop'>Back To Top</a>
	<!-- /Back To Top -->
	
	<!-- /////////////////////////////////////////Content -->
	<div id="page-content" class="archives-page">
		<div class="container">
			<div class="row">
				<div id="main-content">
					<article class="box-shadow">
						<div class="heading">
							<h2>
								<span class="hr">Contact</span>
							</h2>
						</div>
						<div class="row">
					
							<div class="col-md-4 box-item">
								<h3>Contact Info</h3>
								<span>Feel Free to Send Us Message</span><br> <br>
								<p>Kathmandu<br>
									Nepal</p>
								   <p>+977 986 543 0202<br>
									+977 9812345678</p>
								<p>siddhantbhardwaz@gmail.com</p>
							</div>
							<div class="col-md-8">
								<h3>Contact Form</h3>
								<form name="form1" method="post" action="contact.php">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
											<input type="text" class="form-control input-lg" name="name" id="name" placeholder="Enter name" required="required" />
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<input type="email" class="form-control input-lg" name="email" id="email" placeholder="Enter email" required="required" />
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<input type="text" class="form-control input-lg" name="subject" id="subject" placeholder="Subject" required="required" />
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
												placeholder="Message" style="height: 190px;"></textarea>
											</div>						
											<button type="submit" class="btn btn-red btn-block" name="submitcontact" id="submitcontact">Submit</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</article>
				</div>
			</div>
		</div>
		
	</div>


	<footer>
		<div class="wrap-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-footer footer-1">
						<div class="footer-heading"><h4>Partners</h4></div>
						<div class="content">
							<div class="row">
								<div class="col-md-6">
									<a href="#"><img src="images/22.png" /></a>
								</div>
								<div class="col-md-6">
									<a href="#"><img src="images/23.png" /></a>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<!-- <a href="#"><img src="images/24.jpg" /></a> -->
								</div>
								<div class="col-md-6">
									<!-- <a href="#"><img src="images/18.jpg" /></a> -->
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<!-- <a href="#"><img src="images/19.jpg" /></a> -->
								</div>
								<div class="col-md-6">
									<!-- <a href="#"><img src="images/20.jpg" /></a> -->
								</div>
							</div>
							
						</div>
					</div>
					<div class="col-md-3 col-footer footer-2">
						<div class="footer-heading"><h4>About Us</h4></div>
						<div class="content">
							<p>We are equipped with the most advanced health care equipments inside the ambulance to help you with the emergency condition and save the patient until hospital arrives.</p>
						</div>
					</div>
					<div class="col-md-3 col-footer footer-3">
						<div class="footer-heading"><h4>Follow us</h4></div>
						<div class="content">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
								<li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-3 col-footer footer-4">
						<div class="footer-heading"><h4>Navigation</h4></div>
						<div class="content">
							<ul>
								<li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
								<li><a href="single.html"><i class="fa fa-users"></i> About</a></li>
								<li><a href="service.html"><i class="fa fa-ambulance"></i> Services</a></li>
								<li><a href="contact.html"><i class="fa fa-envelope-o"></i> Contacts</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<div class="coppy-right">
		<div class="wrap-footer">
			<div class="clearfix">
				<div class="col-md-6 col-md-offset-3">
					<p>Copyright @ Ambulance Care - Designed by Deepak Poudel</a></p>
				</div>
			</div>	
		</div>
	</div>
	<!-- Footer -->
	
	<!-- Core JavaScript Files -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.backTop.min.js"></script>
	<script>
		$(document).ready( function() {
			$('#backTop').backTop({
				'position' : 1200,
				'speed' : 500,
				'color' : 'red',
			});
		});
	</script>
	
	<!-- Google Map -->
	<script>
		$('.maps').click(function () {
		$('.maps iframe').css("pointer-events", "auto");
	});

	$( ".maps" ).mouseleave(function() {
	  $('.maps iframe').css("pointer-events", "none"); 
	});
	</script>
</body>
</html>
	

