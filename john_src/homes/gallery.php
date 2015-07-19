<!DOCTYPE html>
<html>
	<head>
		<!-- title -->
		<title>Alari Homes | Gallery</title>

		<!-- Favicon -->

		<!-- Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>

		<!-- External Styles -->
		<link rel = 'stylesheet' href = '../styles/reset.css' />
		<link rel = 'stylesheet' href = '../styles/alaristyle.css' />

		<!-- TypeKit Font -->
		<!-- Register domain first to use TypeKit fonts. -->
		<!-- Remove the script below to disable the TypeKit font. -->
		<script src="//use.typekit.net/jnx0liq.js"></script>
		<script>try{Typekit.load();}catch(e){}</script>
		
	</head>

	<body>

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
						<a class = 'active'><li>Gallery</li></a>
						<a href = 'contact.php'><li>Contact</li></a>
					</ul>
				</div>
			</div>
		</div>

		<div class = 'content'>
			<h1 style = 'position: absolute;top: 50%; width: 100%;text-align: center;font-weight: normal;opacity: 0.7'>TODO: PUT "GALLERY" RELATED STUFF HERE.</h1>
		</div>

		<div class = 'footer'>
			<h6>&copy; 2015 Alari Homes and Fabrication. All Rights Reserved.</h6>
		</div>
		
		

		<!-- jQuery and Javascript Friends -->
		<script src="scripts/jquery-2.0.1.min.js"></script>
		<script src="scripts/jquery.easing.1.3.js"></script>
		<script src="scripts/jquery.scrollTo.min.js"></script>

		<script type = 'text/javascript'>
			//Add reference to jQuery and Easings library
			var $root = $('body, html');
			var $lnk = $('.scrolllink);
			var $doc = $(document);
			var idTo = '';

			$doc.ready(function(){

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