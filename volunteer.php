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
		<link rel="stylesheet" type="text/css" href="slick/slick.css"/>
		<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
		<script src="js/vendor/modernizr-2.6.2.min.js"></script>
	</head>
	<body>
		<?php
			include "navbar.html"
		?>
		<div class = "row">
			<div class = "columns small-12">
				<div class="your-class">
					<div><img src="img/meals.png"/></div>
					<div><img src="img/garden.jpg"/></div>
					<div><img src="img/meals2.png"/></div>
				</div>
			</div>
		</div>
		<div class = "row">
			<div class = "columns small-12">
				<h1>Volunteer!</h1>
			</div>
		</div>
		<div class = "row">
			<div class = "columns small-12">
				<p> Explore different volunteering opportunities to help the Kingston community </p>
				<ul>
					<li>Serve meals to the Kingston community</li>
					<li>Help us grow our vegetables in our very own garden</li>
					<li>Get involved in administrative functioning</li>
				</ul>
				

				<p>To volunteer, head to the <a href="./contactus.php">Contact us</a> webpage!</p>
			</div>
		</div>
	 	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/main.js"></script>
		<script src="js/index.js"></script>
		<script type="text/javascript" src="slick/slick.min.js"></script>
		<script type="text/javascript">
		    $(document).ready(function(){
		      $('.your-class').slick({
		      		arrows: true,
		      		dots: true,
		      		infinite: true,
					autoplay: true,
					autoplaySpeed: 2000
				});
		    });
		  </script>
	</body>
</html>