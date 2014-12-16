<?php

$page = 'home';

?>

<!DOCTYPE html>
<html>
	<head>
		<link rel="shortcut icon" href="images\favicon.ico">
		<title>Loop</title>
        <!-- I fixed every include php code by adding "php" after every first "?" -->
		<?php include('partials/head.php'); ?>
        
	</head>
	<body>

		<?php include('partials/nav.php'); ?>
		<!-- Main jumbotron for a primary marketing message or call to action -->

	    <div class="jumbotron header-jumbotron">
	      <div class="container">
	      	<div class="row">
	      		<div id="cta-title" class="col-sm-6 col-lg-5 col-lg-offset-1">
			        <div class="text">
						<img src="images/LoopLogoWords.png" class="img-responsive" alt="Loop">
						<br><br>
						<h3>Yes. No.<br> Get an answer. <br> Close the loop.</h3>
						<br>
					</div>

					<p class="button-row">
				      	<a href="https://itunes.apple.com/us/app/loop-by-eko/id931539244?mt=8", target="itunes_store" button type="button" class="btn btn-default btn-store"><img src="images/badge-store-ios.svg" height="30" width="30"> App Store</a>
				      	<a href="https://play.google.com/store/apps/details?id=com.ekoapp.loop&hl=en" target="_blank" button type="button" class="btn btn-default btn-store pull-right"><img src="images/badge-store-play.svg" height="30" width="30"> Play Store</a>
				    </p>
				    </p>
		        </div>
                
		        
		         <div class="col-sm-6 screenshot-device">
		        	<img src="images/landing.png" class="img-responsive" alt="Responsive image">
		        </div>
		        

		      </div>
	    	</div>
	    </div>

		<!-- Second Slide -->

		
		<div class="section team full-panel hidden-xs ">
			<div class="container">
				<div class="row">
					<div class="col-sm-7 screenshot-device3">
					<p>&nbsp;</p>
		        	<img src="images/2ndpanel.png" class="img-responsive" alt="Responsive image">
					</div>
					<div class="col-sm-5 padded-text team2">
						<h3>It's that simple.</h3>
						<p>Saying yes or no has never been easier.<br>Add a message if you'd like.</p>
				<p class="button-row">
                        <a href="https://play.google.com/store/apps/details?id=com.ekoapp.loop&hl=en" target="_blank" button type="button" class="btn btn-default btn-store2">Download For Free</a>
					</p>
					</div>
				</div>
			</div>
		</div>
	<div class="section team full-panel visible-xs ">
		<div class="container">
			<div class="row">
				
				<div class="col-sm-7 screenshot-device3">
				<p>&nbsp;</p>
	        	<img src="images/2ndpanel.png" class="img-responsive" alt="Responsive image">
					
				</div>
				<div class="col-sm-5 padded-text team2">
					<h3>It's that simple.</h3>
					<p>Saying yes or no has never been easier.<br>Add a message if you'd like.</p>
					<p class="button-row">
					<p>&nbsp;</p>
                  <a href="https://play.google.com/store/apps/details?id=com.ekoapp.loop&hl=en" target="_blank" button type="button" class="btn btn-default btn-store2">Download For Free</a>
				</p>
				</div>
				
			</div>
		</div>
	</div>
	
    
    
		<!-- desktop section -->
		<div class="section stickers full-panel hidden-xs ">
			<div class="container">
				<div class="row">
					<div class="col-sm-1 padded-text "></div>
					<div class="col-sm-4 padded-text ">
						<h3>Loops are forever.</h3>
						<p>All Loops are archived for easy access.<br>Never lose track of commitments again.
							<p>&nbsp;</p>
							<p class="button-row">
				      		<a href="https://itunes.apple.com/us/app/loop-by-eko/id931539244?mt=8", target="itunes_store" button type="button" class="btn btn-default btn-store3">Get The App</a>
							</p>
					</div>

					<div class="col-sm-7 screenshot-device2">
						<img src="images/3rdpanel.png" class="img-responsive" alt="Responsive image">
					</div>
	
				</div>
			</div>
		</div>

		<div class="section stickers full-panel visible-xs ">
			<div class="container">
				<div class="row">
					<div class="col-sm-1 padded-text "></div>
					<div class="col-sm-4 padded-text ">
						<h3>Loops are forever.</h3>
						<p>All Loops are archived for easy access.<br>Never lose track of commitments again.
							<p>&nbsp;</p>
							<p class="button-row">
				      		<a href="https://itunes.apple.com/us/app/loop-by-eko/id931539244?mt=8", target="itunes_store" button type="button" class="btn btn-default btn-store3">Get The App</a>
							</p>
					</div>

					<div class="col-sm-7 screenshot-device2">
						<img src="images/3rdpanel.png" class="img-responsive" alt="Responsive image">
					</div>
	
				</div>
			</div>
		</div>

		
		<?php include('partials/footer.php'); ?>
		<?php include('partials/scripts.php'); ?>
	</body>
</html>
