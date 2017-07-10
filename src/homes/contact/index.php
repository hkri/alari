<!DOCTYPE html>
<html>
  <head>
    <!-- title -->
    <title>Alari Homes | Contact Us</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Karla:400,700' rel='stylesheet' type='text/css'>

    <!-- External Styles -->
    <link rel = 'stylesheet' href = '../../styles/reset.css' />
    <link rel = 'stylesheet' href = '../../styles/alaristyle.css' />

    <!-- Local Stylsheet -->
    <style type = 'text/css'>
     .content .wrapper{
       min-width: 0px;
       width: 750px;
       left: 0px;
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
            <a href = '../'><li>About Us</li></a>
            <a href = '../dda'><li>DDA Services</li></a>
            <a href = '../our_team'><li>Our Team</li></a>
            <a href = '../plans_permits'><li>Plans and Permits</li></a>
            <a href = '../gallery'><li>Gallery</li></a>
            <a class = 'active'><li>Contact</li></a>
            <a><li>4079 Kulamanu<ul class = 'dropdown'>
              <li><a href = '../kulamanu_pricing'>Pricing</a></li>
              <li><a href = '../kulamanu_gallery'>Gallery</a></li>
            </ul></li></a>
          </ul>
        </div>
      </div>
    </div>

    <div class = 'content contact-us'>
        <div class = 'cover-photo' style = 'background-image:url("../../res/homes/homes_contactus.jpg")'>
          <h1 class = 'light'>Contact Us</h1>
        </div>

        <div class = 'wrapper'>
          <div class = 'row spacer'></div>

          <!-- Section Contact-->
          <div class = 'row csection'>
            <h1 class = 'contact-header'>U.S.A</h1>
            <hr class = 'title-line contacts' />
          </div>

          <div class = 'row contact-details'>
            <div class = 'cell size-50'>
              <div class = 'address-box'>
                <h2>California Headquarters</h2>
                <p>Alari Fine Homes</p>
                <p>2204 Garnet Avenue, Suite 303</p>
                <p>San Diego, CA 92109-3771</p>
              </div>
            </div>
            <div class = 'cell size-fill'>
              <div class = 'contact-box'>
                <h2>Contact</h2>
                <p>Call/Text:(323)854-1494</p>
              </div>
            </div>
          </div>
          <div class = 'row contact-details'>
            <div class = 'cell size-50'>
              <div class = 'address-box'>
                <h2>Hawaii</h2>
                <p>4079 Kulamanu Street</p>
                <p>Honolulu, HI 96816</p>
              </div>
            </div>
            <div class = 'cell size-fill'>
              <div class = 'contact-box'>
              </div>
            </div>
          </div>
          <!-- End of Section Contact -->

          <!-- Section Contact-->
          <div class = 'row csection'>
            <h1 class = 'contact-header'>Philippines</h1>
            <hr class = 'title-line contacts' />
          </div>

          <div class = 'row contact-details'>
            <div class = 'cell size-50'>
              <div class = 'address-box'>
                <h2>Manila Office - JAKA Center</h2>
                <p>2111 Chino Roces Ave.</p>
                <p>1231 Makati City, Philippines</p>
              </div>
            </div>
            <div class = 'cell size-fill'>
              <div class = 'contact-box'>
                <h2>Contact</h2>
                <p>Mobile: +63928935531 to 40</p>
                <p>Mobile: +63928928821 to 30</p>
              </div>
            </div>
          </div>
          <!-- End of Section Contact -->

          <div class = 'row message-box'>
            <h1>Send A Message</h1>
            <p>You can also write us a message here. Fill up the fields below, and we'll respond to your email as soon as we can.</p>
          </div>
          <div class = 'row'>
            <form class = 'messageus-form' method="post" accept-charset="utf-8">
              <p><input name = 'FullName' type = 'text' placeholder = 'Full Name' data-validation="length" data-validation-length="min4" data-validation-error-msg="Please enter valid name" /></p>
                      <p><input name = 'Email' type = 'text' placeholder = 'Email Address' data-validation="email" data-validation-error-msg="Please enter valid email" /></p>
                      <p><textarea name = 'Message' placeholder = 'Write your message here.' data-validation="length" data-validation-length="min4" data-validation-error-msg="Please enter valid message"></textarea></p>
                      <div class = 'form-controls'>
                          <input name = 'Submit' class = 'button-link' type = 'submit' value = 'Send' />
                          <input name = 'Clear' class = 'button-link' type = 'reset' value = 'Clear' />
                      </div>
            </form>
            <!-- TODO: Validate and send email -->
          </div>
        </div>
      </div>
    </div>
    <div class = 'footer'>
      <h6>&copy; 2017 Alari Homes and Fabrication. All Rights Reserved.</h6>
    </div>
  </body>
</html>
