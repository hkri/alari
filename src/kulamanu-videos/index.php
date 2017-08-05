<?php
  $load_vid = false;
  if (isset($_GET['url']) && isset($_GET['title'])) {
    $load_vid = true;
    $GLOBALS['url'] = $_GET['url'];
    $GLOBALS['title'] = $_GET['title'];
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Specifications - 4079 Kulamanu</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Karla:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>
    <link rel = 'stylesheet' href = '../../styles/reset.css' />
    <link rel = 'stylesheet' href = '../../styles/alaristyle.css' />
    <link rel = 'stylesheet' href = '../../scripts/loading-style.css' />
    <script src="https://use.fontawesome.com/f937b6b4fb.js"></script>
    <style type = 'text/css'>
      .our-story{
        padding-right: 30px;
      }
      .row-mission{
        margin-top: 30px;
      }
      .story-image{
        margin-top: 30px;
      }
      .widebox{
        background-color: #26ac85;
      }
			.bpp-banner {
				margin: 20px 0;
			}
			.bpp-video {
				margin-bottom: 3em;
			}
      .cursor-pointer {
        cursor: pointer !important;
      }
      .kulamanu-cover {
        height: 170px;
      }
      .kulamanu-cover .tint{
        background-color: transparent;
      }
      .kulamanu-cover .tint h2{
        font-size: 1.5em;
        margin-top: 1.8em;
      }
      .row-story img {
        display: block;
        margin-bottom: 16px;
        margin: 20px auto;
        box-shadow: 0 4px 5px rgba(0, 0, 0, 0.2);
        border: 8px solid white;
        box-sizing: border-box;
        width: 95%;
        border-radius: 5px;
      }
      .row-story .caption{
        display: block;
        margin-bottom: 20px;
        text-align: right;
        font-size: 0.8em;
        padding: 0 20px;
      }
      .w800 {
        min-width: 800px !important;
        max-width: 800px !important;
        width: 800px !important;
      }
      .toc ul {
        list-style-type: none;
        padding-left: 0;
      }
      .toc ul li.active {
        background-color: rgba(0, 0, 0, 0.1);
        cursor: default;
      }
      .toc ul a {
        color: #1d70b1;
      }
      #k-toc {
        position: relative;
        width: 250px;
        margin-left: 40px;
        background-color: transparent;
        box-shadow: none;
        border-radius: 0;
        border-left: 1px solid rgba(0, 0, 0, 0.1);
      }
      .playlist {
        list-style-type: none !important;
        padding-left: 0 !important;
      }
      .playlist li {
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        padding: 10px 0;
      }
      .playlist-link {
        color: rgb(47, 47, 47);
        display: block;
      }
      .toc h3 {
       	font-family: 'Open Sans', sans-serif;
        font-size: 14px;
        text-align: left;
        margin-left: 18px;
      }
    </style>
  </head>
  <body>
    <div class = 'header'>
      <div class = 'wrapper'>
        <div class = 'header-logobox noselect'>
          <img class = 'nav-logo' src = '../../res/homes/homes-dummy-logo.png' />
        </div>
        <div class = 'header-navbox'>
          <ul class = 'nav noselect'>
            <a class = 'active' href = '../'><li class = 'cursor-pointer'>Home</li></a>
            <a href = '../dda'><li>DDA Services</li></a>
            <a href = '../our_team'><li>Our Team</li></a>
            <a href = '../plans_permits'><li>Plans and Permits</li></a>
            <a href = '../gallery'><li>Gallery</li></a>
            <a href = '../contact'><li>Contact</li></a>
          </ul>
        </div>
      </div>
    </div>
    <div class = 'content'>
      <div id = 'hero-div' class = 'cover-photo' style = 'background-image:url("../../res/homes/kulamanu_cover.jpg")'>
        <h1 class = 'light'>Videos</h1>
      </div>
      <div class = 'wrapper index-description-div' style = 'margin-top: 25px;'>
        <div class = 'row row-story'>
          <div class = 'cell size-70'>
            <h2 class = 'page-section' id = 'video-title'><?php if (!$load_vid) { echo 'The Alari Group'; } else { echo $GLOBALS['title']; } ?></h2><hr style = 'margin-bottom: 20px;' />
            <iframe class = 'page-section' width = '100%' height="420" src="<?php if (!$load_vid) { echo 'https://www.youtube.com/embed/YTqFV2mLTb0?rel=0&amp;showinfo=0'; } else { echo $GLOBALS['url']; } ?>" frameborder="0" allowfullscreen></iframe>
            <h2 class = 'page-section'><i class="fa fa-youtube-play" aria-hidden="true"></i>All Videos</h2>
            <ul class = 'playlist page-section'>
              <!-- YouTube Video > Share > Embed > (src) URL on the embed tag > set on URL parameter -->
              <li><a class = 'playlist-link' href = './index.php?url=https://www.youtube.com/embed/YTqFV2mLTb0?rel=0&amp;showinfo=0&amp;title=The+Alari+Group'><i class="fa fa-play-circle-o" aria-hidden="true"></i>The Alari Group</a></li>
              <li><a class = 'playlist-link' href = './index.php?url=https://www.youtube.com/embed/ij3p20J2Ozw?rel=0&amp;showinfo=0&amp;title=The+Black+Point+Project'><i class="fa fa-play-circle-o" aria-hidden="true"></i>The Alari Group - Black Point Project</a></li>
              <li><a class = 'playlist-link' href = './index.php?url=https://www.youtube.com/embed/WqvFksWYPNU?rel=0&amp;showinfo=0&amp;title=The+Alari+Group+and+the+Environment'><i class="fa fa-play-circle-o" aria-hidden="true"></i>The Alari Group and the Environment</a></li>
            </ul>
          </div>
          <div class = 'cell size-fill'>
            <div id = 'k-toc' class = 'kulamanu toc'>
              <h2>4079 Kulamanu
                <div class = 'subheading'>Please click on the links below to learn more.</div>
              </h2>
              <hr />
              <ul>
                <li><a href = '../history-of-kulamanu/'>History</a></li>
                <li><a href = '../kulamanu-specifications/'>Specifications</a></li>
                <li><a href = 'https://www.dropbox.com/s/svky5hvt5qzqexc/Kulamanu%20walktru.asf' target = '_blank' >3D Walkthrough</a></li>
                <li><a href = '../kulamanu_pricing/'>Pricing</a></li>
                <li><a href = '../kulamanu_gallery/'>Renderings</a></li>
              </ul>
              <h3>The Alari Group</h3>
              <ul>
                <li><a href = '../alari-group'>About the Group</a></li>
                <li class = 'active'><a>Videos</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class = 'footer'>
      <h6>&copy; 2017 Alari Homes and Fabrication. All Rights Reserved.</h6>
    </div>
    <script src="../../scripts/jquery-1.8.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js"></script>
    <script src="../../scripts/pace.min.js"></script>
    <script src="../../scripts/transitions.js"></script>
  </body>
</html>
