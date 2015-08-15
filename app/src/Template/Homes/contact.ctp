<?php $this->assign('title', 'Alari Homes | Contact Us'); ?>
<!-- Local Stylsheet -->
<style type = 'text/css'>
 .content .wrapper{
     min-width: 0px;
     width: 750px;
     left: 0px;
 }
</style>
<div class = 'content contact-us'>
    <div class = 'cover-photo' style = 'background-image:url("../res/homes/homes_contactus.jpg")'>
        <h1 class = 'light'>Contact Us</h1>
    </div>

    <div class = 'wrapper'>
        <div class = 'row spacer'><?= $this->Flash->render() ?></div>

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

        <div class = 'row cdetails'>
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
        <div class = 'row'>
            <div id="map-canvas" class = 'hidden'></div>
        </div>
        <div class = 'row message-box'>
            <h1>Send A Message</h1>
            <p>You can also write us a message here. Fill up the fields below, and we'll respond to your email as soon as we can.</p>
        </div>
        <div class = 'row'>
            <form class = 'messageus-form' method="post" accept-charset="utf-8" action="/homes/contact">
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
