<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<!-- Meta -->
   <meta name="description" content="Ocean Park And Resort is a very popular destination which lies in Itahari.">
	<meta name="keywords" content="waterpark, resort, swimming pool, fun ithari, itahari, restaurant, health club, gym in itahari, swimming in itahari, itahari, sunsari, nepal"/>
    <meta name="author" content="Pracas Infosys">
	<meta name="robots" content="index, follow"/>
	<meta name="revisit-after" content="3 days"/>
	<link rel="shortcut icon" href="http://pfs.com.np/images/favicon.ico">
    <title>Contact Us | Ocean Park And Resort | Itahari</title>
	
	<!-- Styles -->			
    <!-- Uikit CSS -->
    <link href="assets/css/uikit.min.css" rel="stylesheet">	
    <link href="assets/css/slidenav.almost-flat.css" rel="stylesheet">
    <link href="assets/css/slideshow.almost-flat.css" rel="stylesheet">
    <link href="assets/css/sticky.almost-flat.css" rel="stylesheet">
    <link href="assets/css/tooltip.almost-flat.css" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">	
    <!-- Animate CSS -->
	<link href="assets/css/animate.css" rel="stylesheet"/>	
    <!-- Pe-icon-7-stroke Fonts -->	
    <link href="assets/css/helper.css" rel="stylesheet">	
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet">	
    <!-- Template CSS -->
    <link href="assets/css/template.css" rel="stylesheet">	
    <link href="assets/color/color1.css" rel="stylesheet" type="text/css" title="color1">		
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- Google Maps -->	
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script>
	  "use strict";
	  var myCenter=new google.maps.LatLng(-33.82599600, 151.18014700);
      function initialize() {
        var mapCanvas = document.getElementById('mapCanvas');
        var mapOptions = {
          center: myCenter,
          zoom: 14,
		  scrollwheel: false,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
        //var iconBase = 'https://maps.google.com/mapfiles/kml/pushpin/';
		var iconBase = 'images/elements/index.html';
        var marker = new google.maps.Marker({
          position: mapOptions.center,
          map: map,
		  icon: iconBase + 'garlic.png'
        });	
        marker.setMap(map);
        var infowindow = new google.maps.InfoWindow({
          content:"<div id='legend' style='color: #000 !important; text-align: center;'>Welcome to our main office!</div>"
        });
        infowindow.open(map,marker);		
      }
      google.maps.event.addDomListener(window, 'load', initialize);  
    </script>		
  </head>

  <body>
      <?php include("header.php"); ?>
	  <?php include_once("analyticstracking.php") ?>
	  <!-- /Sticky Menu -->

      <!-- Page Title -->
      <section class="page-title">
		<div class="container">	  
	      <div class="row">
		    <div class="col-sm-12 col-md-12 title">
			  <h2>Contacts</h2>
              <ol class="breadcrumb">
                <li>You are here: &nbsp;</li>
				<li><a class="pathway" href="index.php">Home</a></li>
				<li class="active">Contacts</li>				  
		      </ol>
			</div>
		  </div>
		</div>
	  </section>
	  <!-- /Page Title -->	  
	  
	  <!-- Map -->	
      <section class="map">
	    <div class="container-fluid">
	      <div class="row">
		    <div class="col-sm-12 col-md-12">
             <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d3565.91004124483!2d87.27814001452649!3d26.65136258324084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x39ef6c406986b36b%3A0x904b6d192bedcf6b!2z4KSF4KWL4KS44KS_4KSv4KSoIOCkquCkvuCksOCljeCklSDgpI_gpKPgpY3gpKEg4KSw4KS_4KS44KWL4KSw4KWN4KSfLCBCZWhpbmQgU2F0aGkgRnVlbCBDZW50ZXIsIDEsIOCkh-Ckn-CkueCksOClgCA1NjcwNQ!3m2!1d26.6513626!2d87.2803287!5e0!3m2!1sne!2snp!4v1481381260459" width="1352" height="480" frameborder="0" style="border:0" allowfullscreen></iframe>  
            </div>		  
		  </div>
		</div>
      </section>	  
	  <!-- /Map -->
	  <!-- Contact -->
      <section class="main-body">
	    <div class="container">
		  <div class="row">
		    <div class="col-sm-3 col-md-3" id="left">
			  <div class="module title1">
			    <h3 class="module-title">Contacts</h3>
				<div class="module-content">
	               <p><i class="uk-icon-envelope"></i>&nbsp;&nbsp;Email : info@oceanparknresort.com.np</p>
                    <p class="uk-text-contrast"><i class="uk-icon-phone "></i><a href="tel:+97721523832">977-21-523832</a></p>
                    <p class="uk-text-contrast"><i class="uk-icon-phone "></i><a href="tel:+9779852022201">977-98520-22201</a></p>
                    <p class="uk-text-contrast"><i class="uk-icon-phone "></i><a href="tel:+9779852020058">977-98520-20058</a></p>
                    <p><i class="uk-icon-hospital-o"></i>&nbsp;&nbsp; Behind Sathi Fuel Center, Itahari  Sunsari, Nepal </p>
                  </div>
                  <div class="module title1" style="margin-top: 15px;"><h3 class="module-title">Follow us</h3></div>
                  <p>
                    <a class="uk-icon-button uk-icon-facebook" href="https://www.facebook.com/oceanparknresort/?ref=page_internal"></a>
                     </p>
                    </div>
                  </div>
			<div class="col-sm-6 col-md-6 contact">		
			  <h3>Contact Us</h3>		  
              <form class="form-horizontal" method="post">
                <fieldset>
			      <legend>Send an Email. All fields with an asterisk (*) are required.</legend>					
                  <div class="form-group">
                    <label for="inputName" class="control-label label-left col-xs-4">Name *</label>
                    <div class="col-xs-8">
                      <input type="text" class="form-control" id="inputName" placeholder=" Your name" name="inputName">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email" class="control-label label-left col-xs-4">Email *</label>
                    <div class="col-xs-8">
                      <input type="email" class="form-control" id="email" placeholder=" Email for contact" name="email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSubject" class="control-label label-left col-xs-4">Subject *</label>
                    <div class="col-xs-8">
                      <input type="text" class="form-control" id="inputSubject" placeholder=" Enter the subject of your message here" name="inputSubject">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputMessage" class="control-label label-left col-xs-4">Message *</label>
                    <div class="col-xs-8">
                      <textarea class="form-control" id="inputMessage" placeholder="Enter your message here" name="inputMessage"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="sendToYourself" class="control-label label-left col-xs-4">Send copy to yourself</label>
                    <div class="col-xs-8">
                      <div class="checkbox">
                        <label><input type="checkbox" id="sendToYourself" name="sendToYourself">Sends a copy of the message to the address you have supplied</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label label-left col-xs-4"></label>			
                    <div class=" col-xs-8">
					  <button class="btn btn-primary validate" type="submit" aria-invalid="false">Send Email</button>
                    </div>
                  </div>
                </fieldset>				
              </form>					
            </div>
			<div class="col-sm-3 col-md-3" id="right">
			  <div>
				<div class="module-content">
	              <a href="#"><img alt="Farmer Review" src="images/elements/farmer.png" title="Review"></a>
                </div>
			  </div>
			</div>
		  </div>
		</div>
	  </section>	  
	  <!-- /Contact -->	    
</div>
	<?php include("footer.php"); ?>
    <!-- Scripts placed at the end of the document so the pages load faster -->
	
    <!-- Jquery scripts -->
    <script src="assets/js/jquery.min.js"></script>
	
    <!-- Uikit scripts -->
	<script src="assets/js/uikit.min.js"></script>	
	<script src="assets/js/slideshow.min.js"></script> 
	<script src="assets/js/slideshow-fx.min.js"></script> 
	<script src="assets/js/slideset.min.js"></script> 	
	<script src="assets/js/sticky.min.js"></script>
	<script src="assets/js/tooltip.min.js"></script>	
	<script src="assets/js/parallax.min.js"></script>
	<script src="assets/js/lightbox.min.js"></script>
	<script src="assets/js/grid.min.js"></script>
	
	<!-- WOW scripts -->
	<script src="assets/js/wow.min.js"></script>
    <script> new WOW().init(); </script>	
	
    <!-- Template scripts -->
	<script src="assets/js/template.js"></script> 	
	
	<!-- Bootstrap core JavaScript -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>


  </body>
</html>
