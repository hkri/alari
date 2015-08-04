<!DOCTYPE html>
<html>
    <head>
        <!-- title -->
        <title>Alari Homes</title>

        <!-- Identify encoding as UTF-8 for IE  -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        <!-- Favicon -->

        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Alegreya' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Karla' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css'>

        <!-- External Styles -->
        <link rel = 'stylesheet' href = '../styles/reset.css' />
        <link rel = 'stylesheet' href = '../styles/alaristyle.css' />
        
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
                        <a href = '/'><li>Home</li></a>
                        <a href = '/homes/'><li>About Us</li></a>
                        <a href = '/homes/dda'><li>DDA Services</li></a>
                        <a href = '/homes/our_team'><li>Our Team</li></a>
                        <a href = '/homes/plans_permits'><li>Plans and Permits</li></a>
                        <a href = '/homes/gallery'><li>Gallery</li></a>
                        <a href = '/homes/contact'><li>Contact</li></a>
                    </ul>
                </div>
            </div>
        </div>
            
        <?= $this->fetch('content') ?>

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
            var idTo = '';

            //Fade in when all page finishes loading.
            $(window).bind("load", function() {
                fadePage();
                $('.icon-loading').css('display', 'none');
            });


            $doc.ready(function(){

                //Enable smooth scroll.
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
