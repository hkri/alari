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
    <title>The Alari Group</title>
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
      .team-profile .header-logos img{
        border-radius: 0;
        border: none;
        box-shadow: none;
      }
      .team-profile .header-logos .logo {
        float: left;
        height: 60px;
        width: auto;
        margin-top: 40px;
        display: block;
      }
      .team-profile .header-logos .avatar {
        float: right;
        width: 160px;
        margin-right: 35px;
        margin-top: 20px;
        border-radius: 5px;
        border: 8px solid white;
        box-shadow: 0 4px 5px rgba(0, 0, 0, 0.1);
      }
      .team-profile .header-logos:after {
        content: ' ';
        display: block;
        visibility: hidden;
        height: 1px;
        clear: both;
      }
      .team-profile {
        margin-bottom: 20px;
      }
      .team-profile .profile-data {
        background-color: #deeef6;
        padding: 20px;
        border-radius: 6px;
        margin-top: -80px;
      }
      .team-profile .profile-data .name h2 {
        font-size: 1.2em;
        font-weight: bold;
      }
      .team-profile .profile-data .name h2 .title{
        font-size: .75em;
        font-weight: normal;
      }
      .team-profile .profile-data .info p{
        font-size: .85em;
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
            <a href = '/'><li>Home</li></a>
            <a class = 'active' href = '/homes'><li class = 'cursor-pointer'>About Us</li></a>
            <a href = '/homes/dda'><li>DDA Services</li></a>
            <a href = '/homes/our_team'><li>Our Team</li></a>
            <a href = '/homes/plans_permits'><li>Plans and Permits</li></a>
            <a href = '/homes/gallery'><li>Gallery</li></a>
            <a href = '/homes/contact'><li>Contact</li></a>
          </ul>
        </div>
      </div>
    </div>
    <div class = 'content'>
      <div id = 'hero-div' class = 'cover-photo' style = 'background-image:url("../../res/homes/kulamanu_cover.jpg")'>
        <h1 class = 'light'>The Alari Group</h1>
      </div>
      <div class = 'wrapper index-description-div' style = 'margin-top: 25px;'>
        <div class = 'row row-story'>
          <div class = 'cell size-70'>
            <h2 class = 'page-section'>Introduction</h2>
            <p class = 'page-section'>The Alari Group presents itself as a one-stop resource for local Hawaii-based luxury residential
brokers with tear-down properties. Four highly experienced firms in the design and residential
construction industry have united under one entity to deliver distinctive personalized turn-key
premium residences incorporating the latest technologies, innovative materials and design, with
the greatest convenience and level of personalized service. This team is comprised of the following
companies:</p>
            <ul class = 'page-section'>
              <li>Sketchtank (Design)</li>
              <li>Hawaii Architects (Engineering &amp; architecture)</li>
              <li>Alakea Construction (General contracting)</li>
              <li>Euroforest (Custom fabrication)</li>
            </ul>
            <p class = 'page-section'>4079 Kulamanu, a 5,424 sf single family luxury residence in Black Point, is their first collaborative
effort, and integrates Alari’s own custom building products imported from the Philippines under the
their Products &amp; Fabrication division.</p>
            <br />
            <h2 class = 'page-section'>The Alari Team</h2>
            <div class = 'team-profile page-section'>
              <div class = 'header-logos'>
                <img class = 'logo' src = '../../res/alari-team/logo-sketchtank.png' />
                <img class = 'avatar' src = '../../res/alari-team/carlos.jpg' />
              </div>
              <div class = 'profile-data'>
                <div class = 'name'>
                  <h2>Carlos S. Ferreira
                    <div class = 'title'>Architectural Designer, Owner</div>
                  </h2>
                </div>
                <div class = 'info'>
                  <p>Sketchtank is a Los Angeles-based group of environmental designers and architects specializing in
  residences, branded spaces, and furniture, established in 2001 by Carlos Ferreira.</p>
                  <p>Carlos began his studies in automotive design before achieving a BS in Industrial Design from the College for
  Creative Studies in Detroit, Michigan. His diverse design background includes the design of multi-million
  dollar automotive exhibits for the international auto salon circuit, pop-up stores for Target and with his
  partners, luxury residences for clients in the entertainment industry.</p>
                  <p>Career highlights include several retail projects for Walt Disney Resorts and lighting design for 110 Warner
  Bros. Studio Stores in the U.S. and Europe, culminating in an IDSA Lighting Design Award.</p>
                  <p>Since 2006, Carlos has been a professor of Environmental Design at the world renowned Art Center College
  of Design in Pasadena, California. He has lived on three Continents and is fluent in all forms of Portuguese.</p>
                </div>
              </div>
            </div>

            <div class = 'team-profile page-section'>
              <div class = 'header-logos'>
                <img class = 'logo' src = '../../res/alari-team/logo-ha.jpg' />
                <img class = 'avatar' src = '../../res/alari-team/jim.jpg' />
              </div>
              <div class = 'profile-data'>
                <div class = 'name'>
                  <h2>James Matichuk
                    <div class = 'title'>Licensed Architect and Professional Engineer, Owner</div>
                  </h2>
                </div>
                <div class = 'info'>
                  <p>James is the owner and manager of Hawaii Architects, Inc. (HAI), which has been providing architectural and
engineering services in Hawaii since 1990. HAI has a diverse clientele, with residential projects ranging from
tract homes to multi-million dollar custom homes. They also has an extensive portfolio of commercial
projects which includes schools, churches, office buildings, industrial and agricultural buildings, restaurants
and multi-family residential developments.</p>
                </div>
              </div>
            </div>

            <div class = 'team-profile page-section'>
              <div class = 'header-logos'>
                <img class = 'logo' src = '../../res/alari-team/logo-alakea.png' />
                <img class = 'avatar' src = '../../res/alari-team/nick.jpg' />
              </div>
              <div class = 'profile-data'>
                <div class = 'name'>
                  <h2>Nick Denzer
                    <div class = 'title'>General Contractor, Owner</div>
                  </h2>
                </div>
                <div class = 'info'>
                  <p>Alakea Construction Services is a full-service general contractor based in Honolulu, Hawaii, specializing in
custom luxury homes and innovative industrial and commercial projects. They provide ground-up
construction, including heavy civil site work, engineered structural framing, and high-end finishes,
integrating environmental consciousness and sustainability. </p>
                </div>
              </div>
            </div>

            <div class = 'team-profile page-section'>
              <div class = 'header-logos'>
                <img class = 'logo' src = '../../res/alari-team/logo-euro.jpg' />
                <img class = 'avatar' src = '../../res/alari-team/cristoph.jpg' />
              </div>
              <div class = 'profile-data'>
                <div class = 'name'>
                  <h2>Christoph Weingand
                    <div class = 'title'>Managing Director and Wood and Joinery Specialist,
Product Developer for WHERHOFF blocks</div>
                  </h2>
                </div>
                <div class = 'info'>
                  <p>Christoph Wiegand obtained a Master’s Degree in Furniture Making and Interior Design from Gewerbliche
Schule für Holztechnik (School of Industrial Engineering) in Stuttgart, Germany. Over the course of three
decades, he was commissioned by the governments of Indonesia, Papua New Guinea, Vietnam and the
Philippines as a consultant and advisor on product development, engineering and technical training for
expanding the furniture fabrication industries in these nations. Christoph eventually settled in Cebu,
Philippines where he established Euro Forest. His firm owns and runs a saw mill and a large kiln drying
operation, and is the primary importer of European hardwoods into the Philippines. He is one of the most
qualified fine wood Master Fabricators in the Philippines and oversees every Alari order, from the selection of
lumber to the final finishing and packaging of items for shipment.</p>
                </div>
              </div>
            </div>

          </div>
          <div class = 'cell size-fill page-section'>
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
                <li class = 'active'><a>About the Group</a></li>
                <li><a href = '../kulamanu-videos'>Videos</a></li>
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
