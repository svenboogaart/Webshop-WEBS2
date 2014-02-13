<html>
	<?php require_once("private/etc/globals.php") ?>
	 <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Webshop</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="css/custom-style.css">
        <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		
		<!-- Optional theme -->
		<link rel="stylesheet" href="css/bootstrap-theme.min.css">
		
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	    <!--[if lt IE 9]>
	      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
    </head>
	<body>
		<div class="container">
			<?php require($GLOBALS['VIEWS_FOLDER'] . 'header.php'); ?>
			
			<?php require $GLOBALS['VIEWS_FOLDER'] . 'content.php'; ?>
		 </div>
		 <?php require($GLOBALS['VIEWS_FOLDER'].'footer.php'); ?>
	</body>
	<!-- Check if latest jQuery is found : else get local -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
    <!-- Latest compiled and minified JavaScript -->
	<script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
</html>