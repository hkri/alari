<!-- Fonts -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>

<!-- Local Stylsheet -->
<style type = 'text/css'>
 h1, h2{
    font-size: 1.6em;
    font-weight: lighter;
    color: #212122;
    font-family: 'Open Sans', sans-serif;
 }

 h2{
    font-size: 1.2em;
    font-weight: 600;
 }
 p{
    font-family: 'Open Sans', sans-serif;
    font-size: 1.0em;
    line-height: 1.6;
    color: #4b4c50;

    -ms-word-break: break-all;
    word-break: break-all;
    word-break: break-word;
    -webkit-hyphens: auto;
    -moz-hyphens: auto;
    hyphens: auto;
 }
 .row.cdetails{
    margin-bottom: 40px;
 }
 .spacer{
    height: 80px;
 }
 .contact-box{
    float:none;
    margin-left: 50px;
    max-width: 350px;
 }

 .content .wrapper{
    min-width: 0px;
    width: 750px;
    left: 0px;
 }
 .message-box{
    margin-top: 40px;
    padding-top: 20px;
    border-top: 1px solid #dddddd;
 }
 #btnShowMap{
    margin-top: 15px;
 }
 #map-canvas{
    margin-top: 20px;
    height: 500px;
 }
 .message-box p{
    margin-top: 15px;
    font-size: 1.1em;
    line-height: 1.6;
 }
 .title-line.contacts{
    background-color: #924178;
 }
 input[name='Submit']{background-color: #409e73;}
 input[name='Submit']:hover{background-color: #487d65;}
 input[name='Clear']{background-color: #84858a;}
 input[name='Clear']:hover{background-color: #5a5b63;}
 .form-controls{text-align: center;}
</style>

<div class = 'content'>
    <div class = 'cover-photo' style = 'background-image:url("../res/fabrication/fab_contactus.jpg")'>
        <h1 class = 'light'>Contact Us</h1>
    </div>

    <div class = 'wrapper'>
        <div class = 'row spacer'><?= $this->Flash->render() ?></div>

        <!-- Section Contact-->
        <div class = 'row csection'>
            <h1>U.S.A</h1>
            <hr class = 'title-line contacts' />
        </div>

        <div class = 'row cdetails'>
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
                    <p>Landline:(323)854-1494</p>
                </div>
            </div>
        </div>
        <div class = 'row cdetails'>
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
            <h1>Philippines</h1>
            <hr class = 'title-line contacts' />
        </div>

        <div class = 'row cdetails'>
            <div class = 'cell size-50'>
                <div class = 'address-box'>
                    <h2>Cebu Factory</h2>
                    <p>Looc, Tayud Liloan</p>
                    <p>Cebu</p>
                </div>
            </div>
            <div class = 'cell size-fill'>
                <div class = 'contact-box'>
                    <h2>Contact</h2>
                    <p>Mobile: +639083481382</p>
                </div>
            </div>
        </div>
        <!-- End of Section Contact -->

        <div class = 'row message-box'>
            <h1>Send A Message</h1>
            <p>You can also write us a message here. Fill up the fields below, and we'll respond to your email as soon as we can.</p>
        </div>
        <div class = 'row'>
            <form class = 'messageus-form' method="post" accept-charset="utf-8" action="/fabrication/contact">
                <p><input name = 'FullName' type = 'text' placeholder = 'Full Name' data-validation="length" data-validation-length="min4" data-validation-error-msg="Please enter valid name" /></p>
                <p><input name = 'Email' type = 'text' placeholder = 'Email Address' data-validation="email" data-validation-error-msg="Please enter valid email" /></p>
                <p><textarea name = 'Message' placeholder = 'Write your message here.' data-validation="length" data-validation-length="min4" data-validation-error-msg="Please enter valid message"></textarea></p>
                <div class = 'form-controls'>
                    <input name = 'Submit' class = 'button-link' type = 'submit' value = 'Send' />
                    <input name = 'Clear' class = 'button-link' type = 'reset' value = 'Clear' />
                </div>
            </form>
            <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.2.1/jquery.form-validator.min.js"></script>
            <script>
              $.validate();
            </script>
        </div>
    </div>
</div>
<script type = 'text/javascript'>
    //Initialize GoogleMaps
     function initializeMaps() {
        var mapOptions = {
          center: new google.maps.LatLng(10.37, 123.84),
          zoom: 11,
          mapTypeControl: false,
          streetViewControl: false,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        map = new google.maps.Map(mapCanvas, mapOptions);
      }
    var $btnShowMap = $('#btnShowMap');
    var $GMap = $('#map-canvas');
    $('#btnShowMap').click(function(){
        if($GMap.hasClass('hidden')){
            $GMap.removeClass('hidden');
            setTimeout(updateGoogleMap, 500);
        } else{
            $GMap.addClass('hidden');
        }
        return false;
    });

    function updateGoogleMap(){
        initializeMaps();
    }
</script>