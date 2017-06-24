<!DOCTYPE html>
<html>
    <head>
        <!-- title -->
        <title><?= $this->fetch('title') ?></title>

        <!-- Identify encoding as UTF-8 for IE  -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        <!-- Favicon -->

        <!-- Fonts -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,300' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Karla:400,700' rel='stylesheet' type='text/css'>

        <!-- External Styles -->
        <link rel = 'stylesheet' href = '../styles/reset.css' />
        <link rel = 'stylesheet' href = '../styles/alaristyle.css' />
        <link rel = 'stylesheet' href = '../styles/prettyPhoto.css' />
        <link rel = 'stylesheet' href = '../styles/cake.css' />

        <!-- jQuery and Javascript Friends -->
        <script src="../scripts/jquery-1.8.0.min.js"></script>
        <script src="../scripts/jquery.easing.1.3.js"></script>
        <script src="../scripts/jquery.scrollTo.min.js"></script>
        <script src="../scripts/page-fader.js"></script>
        <script src="../scripts/jquery.prettyPhoto.js"></script>

        <script type = 'text/javascript'>
            //Add reference to jQuery and Easings library
            var $root = $('body, html');
            var $lnk = $('.scrolllink');
            var $doc = $(document);
            var idTo = '';
            var $imgthumb;

            //Fade in when all page finishes loading.
            $(window).bind("load", function() {
                fadePage();
                $('.icon-loading').css('display', 'none');

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

            $doc.ready(function(){
                //DOM complete: initialize objects.
                $imgthumb = $('.photothumb img');

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

    </head>

    <body>
        <div class = 'header'>
            <div class = 'wrapper'>
                <div class = 'header-logobox noselect'>
                    <!-- Please use 380x80 pixel logo for best results. -->
                    <?php if ($this->request->controller === 'Homes'): ?>
                        <img class = 'nav-logo' src = '../res/homes/homes-dummy-logo.png' />
                    <?php else: ?>
                        <img class = 'nav-logo' src = '../res/fabrication/fabrication-dummy-logo.png' />
                    <?php endif; ?>
                </div>
                <div class = 'header-navbox'>
                    <ul class = 'nav noselect'>
                        <?php if ($this->request->controller === 'Homes'): ?>
                            <a href = '/'><li>Home</li></a>
                            <a class="<?php echo $this->request->action === 'index' ? 'active' : ''; ?>" href = '/homes/'><li>About Us</li></a>
                            <a class="<?php echo $this->request->action === 'dda' ? 'active' : ''; ?>" href = '/homes/dda'><li>DDA Services</li></a>
                            <a class="<?php echo $this->request->action === 'our_team' ? 'active' : ''; ?>" href = '/homes/our_team'><li>Our Team</li></a>
                            <a class="<?php echo $this->request->action === 'plans_permits' ? 'active' : ''; ?>" href = '/homes/plans_permits'><li>Plans and Permits</li></a>
                            <a class="<?php echo $this->request->action === 'gallery' ? 'active' : ''; ?>" href = '/homes/gallery'><li>Gallery</li></a>
                            <a class="<?php echo $this->request->action === 'contact' ? 'active' : ''; ?>" href = '/homes/contact'><li>Contact</li></a>
                            <a class="<?php echo strpos($this->request->action, 'kulamanu_') !== false ? 'active' : ''; ?>">
                                <li>4079 Kulamanu
                                    <ul class = 'dropdown'>
                                        <li><a href = '/homes/kulamanu_pricing'>Pricing</a></li>
                                        <li><a href = '/homes/kulamanu_gallery'>Gallery</a></li>
                                    </ul>
                                </li>
                            </a>
                        <?php else: ?>
                            <a href = '/'><li>Home</li></a>
                            <a class="<?php echo $this->request->action === 'index' ? 'active' : ''; ?>" href = '/fabrication/'><li>About Us</li></a>
                            <a class="<?php echo $this->request->action === 'our_team' ? 'active' : ''; ?>" href = '/fabrication/our_team'><li>Our Team</li></a>
                            <a class="<?php echo $this->request->action === 'shop_drawings' ? 'active' : ''; ?>" href = '/fabrication/shop_drawings'><li>Shop Drawings</li></a>
                            <a class="<?php echo $this->request->action === 'gallery' ? 'active' : ''; ?>" href = '/fabrication/gallery'><li>Gallery</li></a>
                            <a class="<?php echo $this->request->action === 'contact' ? 'active' : ''; ?>" href = '/fabrication/contact'><li>Contact</li></a>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>

        <?= $this->fetch('content') ?>

        <div class = 'footer'>
            <h6>&copy; 2015 Alari Homes and Fabrication. All Rights Reserved.</h6>
        </div>
    </body>
</html>
