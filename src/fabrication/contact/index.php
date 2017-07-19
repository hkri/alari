<!DOCTYPE html>
<html>
	<head>
		<!-- title -->
		<title>Alari Homes | Contact Us</title>
		<!-- Identify encoding as UTF-8 -->
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

		<!-- Favicon -->

		<!-- Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Karla:400,700' rel='stylesheet' type='text/css'>

		<!-- External Styles -->
		<link rel = 'stylesheet' href = '../../styles/reset.css' />
		<link rel = 'stylesheet' href = '../../styles/alaristyle.css' />
		<link rel = 'stylesheet' href = '../../styles/prettyPhoto.css' />

		<!-- Google Maps Script -->
		<script src="https://maps.googleapis.com/maps/api/js"></script>

		<!-- Local Stylsheet -->
		<style type = 'text/css'>

		 .content .wrapper{
		 	min-width: 0px;
		 	width: 750px;
		 	left: 0px;
		 }

		</style>

	</head>

	<body>

		<div class = 'header'>

			<div class = 'wrapper'>
				<div class = 'header-logobox noselect'>
					<!-- Please use 380x80 pixel logo for best results. -->
					<img class = 'nav-logo' src = '../../res/fabrication/fabrication-dummy-logo.png' />
				</div>
				<div class = 'header-navbox'>
					<ul class = 'nav noselect'>
						<a href = '/'><li>Home</li></a>
						<a href = '../'><li>About Us</li></a>
						<a href = '../our-team'><li>Our Team</li></a>
						<a href = '../shop-drawings'><li>Shop Drawings</li></a>
						<a href = '../gallery'><li>Gallery</li></a>
						<a class = 'active'><li>Contact</li></a>
					</ul>
				</div>
			</div>
		</div>

		<div class = 'content contact-us'>
				<div class = 'cover-photo' style = 'background-image:url("../../res/fabrication/fab_contactus.jpg")'>
					<h1 class = 'light'>Contact Us</h1>
				</div>

				<div class = 'wrapper'>
					<div class = 'row spacer'></div>

					<!-- Section Contact-->
					<div class = 'row csection'>
						<h1 class = 'contact-header'>U.S.A</h1>
						<hr class = 'title-line contacts fab' />
					</div>

					<div class = 'row contact-details'>
						<div class = 'cell size-50'>
							<div class = 'address-box'>
								<h2>California Headquarters</h2>
								<p>Alari Fine Homes</p>
								<p>2204 Garnet Avenue, Suite 303</p>
								<p>San Diego, CA 92109-3771</p>
							</div>
						</div>
						<div class = 'cell size-fill'>
							<div class = 'contact-box'>
								<h2>Contact</h2>
								<p>Call/Text:(323)854-1494</p>
							</div>
						</div>
					</div>
					<div class = 'row contact-details'>
						<div class = 'cell size-50'>
							<div class = 'address-box'>
								<h2>Hawaii</h2>
								<p>4079 Kulamanu Street</p>
								<p>Honolulu, HI 96816</p>
							</div>
						</div>
						<div class = 'cell size-fill'>
							<div class = 'contact-box'>
							</div>
						</div>
					</div>
					<!-- End of Section Contact -->

					<!-- Section Contact-->
					<div class = 'row csection'>
						<h1 class = 'contact-header'>Philippines</h1>
						<hr class = 'title-line contacts fab' />
					</div>

					<div class = 'row contact-details'>
						<div class = 'cell size-50'>
							<div class = 'address-box'>
								<h2>Cebu Factory</h2>
								<p>Looc, Tayud Liloan</p>
								<p>Cebu</p>
							</div>
						</div>
						<div class = 'cell size-fill'>
							<div class = 'contact-box'>
								<h2>Contact</h2>
								<p>Mobile: +639083481382</p>
							</div>
						</div>
					</div>
					<!-- End of Section Contact -->

					<div class = 'row message-box'>
						<h1>Send A Message</h1>
						<p>You can also write us a message here. Fill up the fields below, and we'll respond to your email as soon as we can.</p>
					</div>
					<div class = 'row'>
						<form class = 'messageus-form' method="post" accept-charset="utf-8">
							<p><input name = 'FullName' type = 'text' placeholder = 'Full Name' data-validation="length" data-validation-length="min4" data-validation-error-msg="Please enter valid name" /></p>
			                <p><input name = 'Email' type = 'text' placeholder = 'Email Address' data-validation="email" data-validation-error-msg="Please enter valid email" /></p>
			                <p><textarea name = 'Message' placeholder = 'Write your message here.' data-validation="length" data-validation-length="min4" data-validation-error-msg="Please enter valid message"></textarea></p>
							<?php
							  	if($_SERVER['REQUEST_METHOD'] === 'POST'){
								  	$subject = "Inquiry";
								  	$to = "spirit_renegade@yahoo.com";
									$from = "admin@alarihawaii.com";
								  	$name = $_POST['FullName'];
								  	$email = $_POST['Email'];
								  	$message = $_POST['Message'];
								  	if (strlen($name) >= 4 && strlen($email) >= 4 && strlen($message) >= 4) {
									  	$body .= "Customer: " . $name . "\n\n";
									  	$body .= "E-mail: " . $email . "\n\n";
									  	$body .= "Customer message: \n\n";
									  	$body .= $message;
									  	$headers = "From:" . $from;
									  	mail($to, $subject, $body, $headers);
									  	echo "<span class='mail-success'>Mail Sent. We will contact you shortly.</span>";
								  	} else {
									  	echo "<span class='form-error'>There was a problem submitting your inquiry. Please contact system support.</span>";
								  	}
							  	}
						  	?>
			                <div class = 'form-controls'>
			                    <input name = 'Submit' class = 'button-link' type = 'submit' value = 'Send' />
			                    <input name = 'Clear' class = 'button-link' type = 'reset' value = 'Clear' />
			                </div>
						</form>
					</div>
				</div>
		</div>

		<div class = 'footer'>
			<h6>&copy; 2015 Alari Homes and Fabrication. All Rights Reserved.</h6>
		</div>



		<!-- jQuery and Javascript Friends -->
		<script src="../../scripts/jquery-1.8.0.min.js"></script>
		<script src="../../scripts/jquery.prettyPhoto.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>

		<script type = 'text/javascript'>
			//Add reference to jQuery and Easings library
			var $root = $('body, html');
			var $lnk = $('.scrolllink');
			var $doc = $(document);
			var idTo = '';

			$doc.ready(function(){

				//Initialize prettyPhoto lightbox.
				 $("a[rel^='prettyPhoto']").prettyPhoto({
				 	social_tools:false
				 });

			});

			$.validate({});
		</script>

	</body>
</html>
