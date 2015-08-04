<?php $this->layout = false; ?>
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
                        <a href = '../index.html'><li>Home</li></a>
                        <a class = 'active'><li>About Us</li></a>
                        <a href = 'dda.html'><li>DDA Services</li></a>
                        <a href = 'our-team.html'><li>Our Team</li></a>
                        <a href = 'plans-permits.html'><li>Plans and Permits</li></a>
                        <a href = 'gallery.html'><li>Gallery</li></a>
                        <a href = 'contact.html'><li>Contact</li></a>
                    </ul>
                </div>
            </div>
        </div>

        <div class = 'content'>
            
            <div class = 'index-cover' style = 'background-image: url("../res/homes/index_image01.jpg")'>
                <div class = 'hero'>
                </div>
            </div>

            

            <div class = 'index-description-div'>
                <h3>Our Story</h3>
                <p>
                    Heralding back the 1960’s dominance and halcyon era in art deco design and construction that Kahala became world famous for – ALARI HOMES is dedicated in leading the resurgence in bringing back Kahala’s reputation, one brick/home at a time.<br />

                    An ALARI HOME carries the flags of high craftsmanship, industrial know-how, intelligent design, and perceptible luxury. Built to be in a class of its own with a mature sense of drama – and an unyielding dedication to quality… in both function and forms – an ALARI HOME is from which the owner demands an exceptional and intelligent space from which they can enjoy alone or entertain six to 110 guests - effortlessly.<br />

                    ALARI HOMES is a multi-faceted builder staffed by “in house” designers and architects both local and foreign based.<br />

                    Foreign: Our permanent full time team includes our dedicated expert carpenters, craftsmen and fabricators at our own overseas factories in Cebu, Philippines.  From Germany comes our hardware (<a href = 'http://www.hafele.com'>Hafele</a>) and our factory management (Christoph Wiegand).  Our hardwoods and natural materials (including mother-of-pearl used throughout) are culled only from renewable local sources.

                </p>
                <br />
                <hr />
                    <h3>Our Mission</h3>
                <hr />
                <p>
                    From concept to design; combining both what’s classic and current; top-to-bottom custom fabrication (at our own overseas factories) to finish construction, an ALARI HOME inspires.
                </p>

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
