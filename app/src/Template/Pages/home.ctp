<?php $this->layout = false; ?>
<!DOCTYPE html>
<html>
    <head>
        <!-- title -->
        <title>Alari Homes and Fabrication</title>

        <!-- External Styles -->
        <link rel = 'stylesheet' href = 'styles/reset.css' />
        <link rel = 'stylesheet' href = 'styles/alarimain.css' />

        <!-- Favicon -->

        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
        
    </head>

    <body>
        <div id = 'fader' class = "fader"></div>
        <!-- If script is enabled, make fading possible. -->
        <script>
            document.getElementById("fader").style.display= 'block';
        </script>

        <div class = 'topbar'>
            <!-- TOPBAR Logo should be AT MOST 1000 x 100 pixels -->
            <div class = 'alari-logo' style = 'background-image:url("res/landing/logo_sample_white.png")'></div>
        </div>

        <div class = 'wrapper'>

            <div class = 'section homes'>
                <div class = 'thumbnail' style = 'background-image:url("res/landing/home_thumb.jpg")'>
                </div>

                <!-- ALARI HOMES DESCRIPTION -->
                <h1>Alari Homes</h1>
                <p>Delivering a tour de force and uncompromising fusion of <b><i>modern island</i></b> elegance to the Kahala and Hawaii beachfront luxury residential real estate marketplace.</p>
                <a href = 'homes' class = 'button-link'>Learn More</a>
            </div>

            <div class = 'section fab'>
                <div class = 'thumbnail' style = 'background-image:url("res/landing/fab_thumb.jpg")'>
                </div>

                <!-- ALARI FABRICATION DESCRIPTION -->
                <h1>Alari Custom Fabrication &amp; Design</h1>
                <p>Coming into existence solely to create exquisite and unique one-of-a-kind designs for both the interior and exterior of your high end build.  Covering the full spectrum of the classic and modern – from conceptualization to fabrication to installation.</p>
                <a href = 'fabrication' class = 'button-link'>Learn More</a>
            </div>
            
        </div>

        <div class = 'footer'>
            <p>&copy; 2015 Alari Homes and Fabrication. All Rights Reserved.</p>
        </div>
        

        <!-- jQuery and Javascript Friends -->
        <script src="scripts/jquery-1.8.0.min.js"></script>
        <script src="scripts/jquery.easing.1.3.js"></script>
        <script src="scripts/jquery.scrollTo.min.js"></script>
        <script src="scripts/page-fader.js"></script>

        <script type = 'text/javascript'>
            //Add reference to jQuery and Easings library
            var $root = $('body, html');
            var $lnk = $('.slide-a');
            var $doc = $(document);
            var idTo = '';

            //Fade in when all page finishes loading.
            $(window).bind("load", function() {
                fadePage();
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
