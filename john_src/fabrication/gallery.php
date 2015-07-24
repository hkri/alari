
<!-- 

	Alari Homes Website
	Gallery Page

	Designed and layout by: John Espiritu

	Plugins:
	- jQuery
	- Lightbox Powered by NO-MARGIN-FOR-ERRORS.COM
		Credits to: http://www.no-margin-for-errors.com/projects/prettyphoto-jquery-lightbox-clone/

-->

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
		<link rel = 'stylesheet' href = '../styles/prettyPhoto.css' />
		
		
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
					<img class = 'nav-logo' src = '../res/fabrication/fabrication-dummy-logo.png' />
				</div>
				<div class = 'header-navbox'>
					<ul class = 'nav noselect'>
						<a href = '../index.html'><li>Home</li></a>
						<a href = 'index.php'><li>About Us</li></a>
						<a href = 'dda.php'><li>DDA Services</li></a>
						<a href = 'our-team.php'><li>Our Team</li></a>
						<a href = 'shop-drawings.php'><li>Shop Drawings</li></a>
						<a class = 'active'><li>Gallery</li></a>
						<a href = 'contact.php'><li>Contact</li></a>
					</ul>
				</div>
			</div>
		</div>

		<div class = 'content'>
			<div class = 'cover-photo' style = 'background-image:url("../res/fabrication/fab_gallery_cover.jpg")'>
				<h1 class = 'light'>Gallery</h1>
			</div>

			<div class = 'size-fill'>
					<h2 class = 'section-caption'>View the collection of photographs and videos of our products and services.</h2>
			</div>

			<div class = 'gallery'>
				<div class = 'thumb-wrapper'>

					<!-- A thumbnail
					[a tag]
					class = 'thumblink' - disable fader effect.
					href = "link.to.hi-res.photo" - link to high res photo
					rel = 'prettyPhoto[gal]' - always add this to enable the lightbox in gallery mode.
					title = "your.title" - the description of the photo.
				
					For QuickTime .mov files, add "?width=xxx&height=xxx" at end of file url.
					For more info, see http://www.no-margin-for-errors.com/projects/prettyphoto-jquery-lightbox-clone/#prettyPhoto
					-->
					<a class = 'thumblink' href = 'gallery/f1.jpg' rel = 'prettyPhoto[gal]' title = 'Fabrication sample.'>
						<div class = 'photothumb thumbnail-160'>
							<img src = 'gallery/thumb1.jpg' alt = 'Alari Fabrication'  />
						</div>
					</a>

					<a class = 'thumblink' href = 'gallery/f2.jpg' rel = 'prettyPhoto[gal]' title = 'Fabrication sample.'>
						<div class = 'photothumb thumbnail-160'>
							<img src = 'gallery/thumb2.jpg' alt = 'Alari Fabrication'  />
						</div>
					</a>

					<a class = 'thumblink' href = 'gallery/f3.jpg' rel = 'prettyPhoto[gal]' title = 'Fabrication sample.'>
						<div class = 'photothumb thumbnail-160'>
							<img src = 'gallery/thumb3.jpg' alt = 'Alari Fabrication'  />
						</div>
					</a>

					<a class = 'thumblink' href = 'gallery/f4.jpg' rel = 'prettyPhoto[gal]' title = 'Fabrication sample.'>
						<div class = 'photothumb thumbnail-160'>
							<img src = 'gallery/thumb4.jpg' alt = 'Alari Fabrication'  />
						</div>
					</a>

					<a class = 'thumblink' href = 'gallery/f5.jpg' rel = 'prettyPhoto[gal]' title = 'Fabrication sample.'>
						<div class = 'photothumb thumbnail-160'>
							<img src = 'gallery/thumb5.jpg' alt = 'Alari Fabrication'  />
						</div>
					</a>

					<a class = 'thumblink' href = 'gallery/f6.jpg' rel = 'prettyPhoto[gal]' title = 'Fabrication sample.'>
						<div class = 'photothumb thumbnail-160'>
							<img src = 'gallery/thumb6.jpg' alt = 'Alari Fabrication'  />
						</div>
					</a>

					<a class = 'thumblink' href = 'gallery/f7.jpg' rel = 'prettyPhoto[gal]' title = 'Fabrication sample.'>
						<div class = 'photothumb thumbnail-160'>
							<img src = 'gallery/thumb7.jpg' alt = 'Alari Fabrication'  />
						</div>
					</a>

					<a class = 'thumblink' href = 'gallery/f8.jpg' rel = 'prettyPhoto[gal]' title = 'Fabrication sample.'>
						<div class = 'photothumb thumbnail-160'>
							<img src = 'gallery/thumb8.jpg' alt = 'Alari Fabrication'  />
						</div>
					</a>

					<a class = 'thumblink' href = 'gallery/f9.jpg' rel = 'prettyPhoto[gal]' title = 'Fabrication sample.'>
						<div class = 'photothumb thumbnail-160'>
							<img src = 'gallery/thumb9.jpg' alt = 'Alari Fabrication'  />
						</div>
					</a>

					<a class = 'thumblink' href = 'gallery/f10.jpg' rel = 'prettyPhoto[gal]' title = 'Fabrication sample.'>
						<div class = 'photothumb thumbnail-160'>
							<img src = 'gallery/thumb10.jpg' alt = 'Alari Fabrication'  />
						</div>
					</a>

					<a class = 'thumblink' href = 'gallery/f11.jpg' rel = 'prettyPhoto[gal]' title = 'Fabrication sample.'>
						<div class = 'photothumb thumbnail-160'>
							<img src = 'gallery/thumb11.jpg' alt = 'Alari Fabrication'  />
						</div>
					</a>


				</div>
			</div>
		</div>

		<div class = 'footer'>
			<h6>&copy; 2015 Alari Homes and Fabrication. All Rights Reserved.</h6>
		</div>
		
		

		<!-- jQuery and Javascript Friends -->
		<script src="../scripts/jquery-1.8.0.min.js"></script>
		<script src="../scripts/page-fader.js"></script>
		<script src="../scripts/jquery.prettyPhoto.js"></script>

		<script type = 'text/javascript'>
			//Add reference to jQuery and Easings library
			var $root = $('body, html');
			var $lnk = $('.scrolllink');
			var $doc = $(document);
			var idTo = '';
			var $imgthumb = $('.photothumb img');

			//Fade in when all page finishes loading.
			$(window).bind("load", function() {
				fadePage();
				$('.icon-loading').css('display', 'none');
			});

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

				//Make image fit in wrapping div.
				$imgthumb.each(function(key, value){
					var $tb = $(value);
					var tw = parseInt($tb.css('width'));
					var th = parseInt($tb.css('height'));
					var thumbsize = parseInt($tb.parent().css('height'));
					if(tw > th){
						var factor = thumbsize / th;
						th *= factor;
						tw *= factor;
						$tb.css('height',  th);
						$tb.css('width', tw);
					} else{
						var factor = thumbsize / tw;
						th *= factor;
						tw *= factor;
						$tb.css('height',  th);
						$tb.css('width', tw);
					}
				});

			});


		</script>

	</body>
</html>