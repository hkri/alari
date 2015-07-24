<!DOCTYPE html>
<html>
	<head>
		<!-- title -->
		<title>Alari Homes | Our Team</title>

		<!-- Favicon -->

		<!-- Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>

		<!-- External Styles -->
		<link rel = 'stylesheet' href = '../styles/reset.css' />
		<link rel = 'stylesheet' href = '../styles/alaristyle.css' />

		<!-- Page specific styles -->
		<style type = 'text/css'>
			.spacer{
				min-height: 40px;
				margin-bottom: 70px;
			}
			.row{
				min-height: 240px;
				margin-bottom: 25px;
			}
			.team-name, .team-title{
				display: block;
				position: relative;
				margin-top: 15px;
				font-size: 1.5em;
				color: #2e2f32;
				font-weight: normal;
			}
			.team-title{
				font-size: 1.2em;
				color: #225e45;
				margin-top: 0;

			}
			.team-description{
				margin-top: 15px;
				font-size: 1.0em;
				color: #4b4b4d;
				line-height: 1.6;
			}
			.profile-photo{
				margin-right: 40px;
			}
		</style>
		
	</head>

	<body>
		<div id = 'fader' class = "fader">
			<div class = 'centerer'></div>
			<img class = 'icon-loading' src = '../res/icons/loading.gif' />
		</div>
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
						<a href = '../index.html'><li>Home</li></a>
						<a href = 'index.php'><li>About Us</li></a>
						<a href = 'dda.php'><li>DDA Services</li></a>
						<a class = 'active'><li>Our Team</li></a>
						<a href = 'plans-permits.php'><li>Plans and Permits</li></a>
						<a href = 'gallery.php'><li>Gallery</li></a>
						<a href = 'contact.php'><li>Contact</li></a>
					</ul>
				</div>
			</div>
		</div>

		<div class = 'content'>
			<!--
			<h1 style = 'position: absolute;top: 50%; width: 100%;text-align: center;font-weight: normal;opacity: 0.7'>TODO: PUT "OUR TEAM" RELATED STUFF HERE.</h1>
			-->
			<div class = 'cover-photo' style = 'background-image:url("../res/homes/homes_ourteam_cover.jpg")'>
				<h1 class = 'light'>Our Team</h1>
			</div>

			<div class = 'wrapper'>
				<!-- Row for caption -->
				<div class = 'size-fill spacer'>
					<h2 class = 'section-caption'>Meet the members of Alari's team of highly skilled and talented architects and engineers.</h2>
				</div>

				<!-- Rows for members. Small divisions for avatar, large for profile info. -->
				<div class = 'row'>
					<div class = 'cell size-35'>
						<div class = 'profile-photo'>
							<img src = '../res/homes/team_mem1.jpg' />
						</div>
					</div>
					<div class = 'cell size-fill'>
						<h3 class = 'team-name'>Lorem Ipsum</h3>
						<h4 class = 'team-title'>President, Engineer</h4>
						<hr class = 'title-line team' />
						<p class = 'team-description'>
							Lorem is a passionate and success-driven individual. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna.
						</p> 
					</div>
				</div>

				<div class = 'row'>
					<div class = 'cell size-35'>
						<div class = 'profile-photo'>
							<img src = '../res/homes/team_mem2.jpg' />
						</div>
					</div>
					<div class = 'cell size-fill'>
						<h3 class = 'team-name'>Dolor Sit Amet</h3>
						<h4 class = 'team-title'>Senior Architect</h4>
						<hr class = 'title-line team' />
						<p class = 'team-description'>
							She make sure every design is accurate and functional. Coffee addict.
						</p>
					</div>
				</div>

				<div class = 'row'>
					<div class = 'cell size-35'>
						<div class = 'profile-photo'>
							<img src = '../res/homes/team_mem3.jpg' />
						</div>
					</div>
					<div class = 'cell size-fill'>
						<h3 class = 'team-name'>Qwerty Asdfgjk</h3>
						<h4 class = 'team-title'>Senior Engineer</h4>
						<hr class = 'title-line team' />
						<p class = 'team-description'>
							In charge of every work done in the construction.
						</p>
					</div>
				</div>

				<div class = 'newrow'></div>
			</div>
		</div>

		<div class = 'footer'>
			<h6>&copy; 2015 Alari Homes and Fabrication. All Rights Reserved.</h6>
		</div>
		
		

		<!-- jQuery and Javascript Friends -->
		<script src="../scripts/jquery-1.8.0.min.js"></script>
		<script src="../scripts/jquery.easing.1.3.js"></script>
		<script src="../scripts/jquery.scrollTo.min.js"></script>
		<script src="../scripts/page-fader.js"></script>

		<script type = 'text/javascript'>
			//Add reference to jQuery and Easings library
			var $root = $('body, html');
			var $lnk = $('.scrolllink');
			var $doc = $(document);

			//Fade in when all page finishes loading.
			$(window).bind("load", function() {
				fadePage();
				$('.icon-loading').css('display', 'none');
			});

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