<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Lunch By George</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href = "//cdn.foundation5.zurb.com/foundation.css" rel="stylesheet">
		<link href = "css/index.css" rel="stylesheet">
		<link rel="stylesheet" src="//normalize-css.googlecode.com/svn/trunk/normalize.css" />
		<script src="js/vendor/modernizr-2.6.2.min.js"></script>
	</head>
	<body>
		<?php
			include "navbar.html"
		?>
		<div class = "row">
		<div class = "columns small-6">
			<div class = "row">
				<div class = "columns small-12">
					<h1>Contact Us</h1>
				</div>
			</div>
			<form method="post" action="email.php">
				<div class="row">
					<div class="large-12 columns">
						<label>First and Last Name
							<input type="text" placeholder="Required" name="name" />
						</label>
					</div>
				</div>
				<div class="row">
					<div class="large-6 columns">
						<label>Email Address
							<input type="text" placeholder="Required" name="email" />
						</label>
					</div>
					<div class="large-6 columns">
						<label>Phone
							<input type="tel" placeholder="Required" name="number"/>
						</label>
					</div>
				</div>
				<div class="row">
					<div class="large-12 columns">
						<label>Select your inquiry
							<select name="inquiry">
								<option value="Select an inquiry">Select an inquiry</option>
								<option value="sponsorship" >Sponsorship</option>
								<option value="volunteering">Volunteering</option>
								<option value="donate">Donate</option>
								<option value="other">Other</option>
							</select>
						</label>
					</div>
				</div>
				<div class="row">
					<div class="large-12 columns">
						<label>Are you already involved with "Lunch with George"?</label>
						<input type="radio" name="lunchWithGeorge" value="Yes" id="involvedYes"><label for="Yes">Yes</label>
						<input type="radio" name="lunchwithGeorge" value="No" id="involvedNo"><label for="No">No</label>
					</div>
				</div>
				<div class="row">
					<div class="large-12 columns">
						<label>Comments on your inquiry
							<br>
							<textarea placeholder="Enter your comments here" name="comments"></textarea> </br>
						</label>
					</div>
				</div>
				<input type="submit" name="submit1" VALUE="Submit" class="button round small"/>
			</form>
			</div>
				<div class = "columns small-6">
					<img class = "bottomImage" src="./img/Brochure1.jpg"/>
				</div>
		</div>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/main.js"></script>
		<script src="js/index.js"></script>
		<script src="js/foundation.min.js"></script>
		<script src="js/foundation.topbar.js"></script>
		<script>$(document).foundation();</script>
	</body>
</html>