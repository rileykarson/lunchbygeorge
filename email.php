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
			mail('leonard.bonfils@queensu.ca', $_POST['name'], $_POST['email'], $_POST['number'],$_POST['inquiry'],$_POST['lunchWithGeorge'],$_POST['comments']);
		?>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/main.js"></script>
		<script src="js/index.js"></script>

		<h3>The form has been submitted.</h3>


	</body>
</html>