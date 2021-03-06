<!DOCTYPE html>
<html>
	<head>
		<!-- title -->
		<title>Alari Homes | Our Team</title>

		<!-- Identify encoding as UTF-8 -->
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

		<!-- Favicon -->

		<!-- Fonts -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Numans' rel='stylesheet' type='text/css'>

		<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>


		<!-- External Styles -->
		<link rel = 'stylesheet' href = '../../styles/reset.css' />
		<link rel = 'stylesheet' href = '../../styles/alaristyle.css' />

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
				font-size: 1.4em;
				color: #2e2f32;
				font-weight: normal;
				font-family: 'Numans', sans-serif;
			}
			.team-title{
				font-size: 1.0em;
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
		<div class = 'header'>
			<div class = 'wrapper'>
				<div class = 'header-logobox noselect'>
					<!-- Please use 380x80 pixel logo for best results. -->
					<img class = 'nav-logo' src = '../../res/homes/homes-dummy-logo.png' />
				</div>
				<div class = 'header-navbox'>
					<ul class = 'nav noselect'>
						<a href = '/'><li>Home</li></a>
						<a href = '../'><li>About Us</li></a>
						<a href = '../dda'><li>DDA Services</li></a>
						<a class = 'active'><li>Our Team</li></a>
						<a href = '../plans_permits'><li>Plans and Permits</li></a>
						<a href = '../gallery'><li>Gallery</li></a>
						<a href = '../contact'><li>Contact</li></a>
						<a><li>4079 Kulamanu<ul class = 'dropdown'>
              <li><a href = 'kulamanu_pricing'>Pricing</a></li>
              <li><a href = 'kulamanu_gallery'>Gallery</a></li>
            </ul></li></a>
					</ul>
				</div>
			</div>
		</div>

		<div class = 'content'>
			<!--
			<h1 style = 'position: absolute;top: 50%; width: 100%;text-align: center;font-weight: normal;opacity: 0.7'>TODO: PUT "OUR TEAM" RELATED STUFF HERE.</h1>
			-->
			<div class = 'cover-photo' style = 'background-image:url("../../res/homes/homes_ourteam_cover.jpg")'>
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
						<div class = 'profile-photo' style = 'background-image:url("../../res/bio/jim.jpg")'></div>
					</div>
					<div class = 'cell size-fill'>
						<h3 class = 'team-name'>James Matichuk</h3>
						<h4 class = 'team-title'>Licensed Architect and Professional Engineer in Hawaii</h4>
						<hr class = 'title-line team' />
						<p class = 'team-description'>
							Principal and Manager of Hawaii Architects, Inc. that has been providing architectural and engineering services in Hawaii since 1990. Hawaii Architects, Inc. (HAI) has a diverse cliental which includes everything from Tract Homes to multi-million dollar Custom Homes. HAI has also designed many commercial projects, including but not limited to, schools, churches, offices, industrial and agricultural buildings, restaurants and multi-family projects.
						</p>
					</div>
				</div>

				<div class = 'row'>
					<div class = 'cell size-35'>
						<div class = 'profile-photo' style = 'background-image:url("../../res/bio/emilio.jpg")'></div>
					</div>
					<div class = 'cell size-fill'>
						<h3 class = 'team-name'>Emilio Elpedes</h3>
						<h4 class = 'team-title'>Philippine based Senior Architect</h4>
						<hr class = 'title-line team' />
						<p class = 'team-description'>
							In charge in scaled model making for houses exterior and interior.
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
		<script src="../../scripts/jquery-1.8.0.min.js"></script>
	</body>
</html>
