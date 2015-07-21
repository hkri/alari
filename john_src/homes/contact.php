<!DOCTYPE html>
<html>
	<head>
		<!-- title -->
		<title>Alari Homes | Contact Us</title>

		<!-- Favicon -->

		<!-- Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>

		<!-- External Styles -->
		<link rel = 'stylesheet' href = '../styles/reset.css' />
		<link rel = 'stylesheet' href = '../styles/alaristyle.css' />
		<link rel = 'stylesheet' href = '../styles/prettyPhoto.css' />

		<!-- Google Maps Script -->
		<script src="https://maps.googleapis.com/maps/api/js"></script>

		<!-- TypeKit Font -->
		<!-- Register domain first to use TypeKit fonts. -->
		<!-- Remove the script below to disable the TypeKit font. -->
		<script src="//use.typekit.net/jnx0liq.js"></script>
		<script>try{Typekit.load();}catch(e){}</script>

		<!-- Local Stylsheet -->
		<style type = 'text/css'>
		 h1{
		 	font-size: 2.0em;
		 	font-weight: lighter;
		 	color: #212122;
		 	font-family: 'Open Sans', sans-serif;
		 }
		 p{
		 	font-family: 'Open Sans', sans-serif;
		 	font-size: 1.1em;
		 	line-height: 1.6;
		 	color: #4b4c50;
		 	
			-ms-word-break: break-all;
		    word-break: break-all;
		    word-break: break-word;
			-webkit-hyphens: auto;
			-moz-hyphens: auto;
		    hyphens: auto;
		 }
		 .spacer{
		 	height: 80px;
		 }
		 .contact-box{
		 	float:none;
		 	margin-left: 40px;
		 	max-width: 350px;
		 }

		 .content .wrapper{
		 	min-width: 0px;
		 	width: 800px;
		 	left: 0px;
		 }
		 .message-box{
		 	margin-top: 40px;
		 	padding-top: 20px;
		 	border-top: 1px solid #dddddd;
		 }
		 #btnShowMap{
		 	margin-top: 15px;
		 }
		 #map-canvas{
		 	margin-top: 20px;
		 	height: 500px;
		 }
		 .message-box h1{
		 	margin-left: 5px;
		 }
		 .message-box p{
		 	margin-top: 15px;
		 	margin-left: 5px;
		 	font-size: 1.1em;
		 	line-height: 1.6;
		 }
		 input[name='Submit']{
		 	margin: 5px;
		 	background-color: #409e73;
		 }
		 input[name='Submit']:hover{
		 	background-color: #487d65;
		 }
		 input[name='Clear']{
		 	margin: 5px;
		 	background-color: #84858a;
		 }
		 input[name='Clear']:hover{
		 	background-color: #5a5b63;
		 }
		 .form-controls{
		 	text-align: center;
		 }
		</style>
		
	</head>

	<body>
		<div id = 'fader' class = "fader"></div>
		<!-- If script is enabled, make fading possible. -->
		<script>
			document.getElementById("fader").style.display= 'block';
		</script>

		<div class = 'header'>

			<div class = 'wrapper'>
				<div class = 'header-logobox noselect'>
					<!-- Please use 380x80 pixel logo for best results. -->
					<img class = 'nav-logo' src = '../res/homes/homes-dummy-logo.png' />
				</div>
				<div class = 'header-navbox'>
					<ul class = 'nav noselect'>
						<a href = 'index.php'><li>About Us</li></a>
						<a href = 'dda.php'><li>DDA Services</li></a>
						<a href = 'our-team.php'><li>Our Team</li></a>
						<a href = 'plans-permits.php'><li>Plans and Permits</li></a>
						<a href = 'gallery.php'><li>Gallery</li></a>
						<a class = 'active'><li>Contact</li></a>
					</ul>
				</div>
			</div>
		</div>

		<div class = 'content'>
				<div class = 'cover-photo' style = 'background-image:url("../res/homes/homes_contactus.jpg")'>
					<h1 class = 'light'>Contact Us</h1>
				</div>

				<div class = 'wrapper'>
					<div class = 'row spacer'></div>
					<div class = 'row'>
						<div class = 'cell size-5'></div>
						<div class = 'cell size-50'>
							<div class = 'address-box'>
								<h1>Address</h1>
								<hr class = 'title-line contacts' />
								<p>Blk 123 Lot 50 #55 Kahit anong street kung saan saan man sulok sa mundo</p>
								<p>Cebu City, Cebu</p>
								<p><a id = 'btnShowMap' class = 'button-link' href = '#'>View Address on Google Maps</a></p>
							</div>
						</div>
						<div class = 'cell fill'>
							<div class = 'contact-box'>
								<h1>Contact</h1>
								<hr class = 'title-line contacts' />
								<p>Landline: (431)252-4851</p>
								<p>Mobile: +634123498503</p>
								<p>Email: alarihomes@gmail.com</p>
							</div>
						</div>
					</div>
					<div class = 'row'>
						<div id="map-canvas" class = 'hidden'></div>
					</div>
					<div class = 'row message-box'>
						<h1>Send A Message</h1>
						<p>You can also write us a message here. Fill up the fields below, and we'll respond to your email as soon as we can.</p>
					</div>
					<div class = 'row'>
						<form class = 'messageus-form'>
							<input name = 'FullName' type = 'text' placeholder = 'Full Name' />
							<input name = 'Email' type = 'text' placeholder = 'Email Address' />
							<textarea name = 'Message' placeholder = 'Write your message here.'></textarea>
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
		<script src="../scripts/jquery-2.0.1.min.js"></script>
		<script src="../scripts/jquery.easing.1.3.js"></script>
		<script src="../scripts/jquery.scrollTo.min.js"></script>
		<script src="../scripts/jquery.prettyPhoto.js"></script>
		<script src="../scripts/page-fader.js"></script>

		<script type = 'text/javascript'>
			//Add reference to jQuery and Easings library
			var $root = $('body, html');
			var $lnk = $('.scrolllink');
			var $doc = $(document);
			var idTo = '';
			var mapCanvas = document.getElementById('map-canvas');
			var map;

			//Initialize GoogleMaps
			 function initializeMaps() {
			    var mapOptions = {
		          center: new google.maps.LatLng(10.37, 123.84),
		          zoom: 11,
  				  mapTypeControl: false,
  				  streetViewControl: false,
		          mapTypeId: google.maps.MapTypeId.ROADMAP
		        }
			    map = new google.maps.Map(mapCanvas, mapOptions);
			  }

			//Fade in when all page finishes loading.
			$(window).bind("load", function() {
				fadePage();
			});


			var $btnShowMap = $('#btnShowMap');
			var $GMap = $('#map-canvas');
			$('#btnShowMap').click(function(){
				if($GMap.hasClass('hidden')){
					$GMap.removeClass('hidden');
			    	setTimeout(updateGoogleMap, 500);
				} else{
					$GMap.addClass('hidden');
				}
				return false;
			});

			function updateGoogleMap(){
				initializeMaps();
			}

			$doc.ready(function(){

				//Initialize prettyPhoto lightbox.
				 $("a[rel^='prettyPhoto']").prettyPhoto({
				 	social_tools:false
				 });

				//smooth scroll function.
				$lnk.click(function(){
					event.preventDefault();
					idTo =  $(this).attr('href');
				    $root.stop().animate({
				        scrollTop: $(idTo).offset().top
				    }, 1000, 'easeInOutQuint');
				    return false;
				});

			});


		</script>

	</body>
</html>