<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>PPbasket.ru - Баскетбол в Павловском Посаде</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!--  -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/common.css" rel="stylesheet">

	<!-- <link href='http://fonts.googleapis.com/css?family=Rancho&effect=shadow-multiple' rel='stylesheet' type='text/css'> -->

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="js/html5shiv.js"></script>
	<![endif]-->

	<link rel="shortcut icon" href="img/favicon.png">
</head>

<body>
	<?php include "views/navbar.view.php"; ?>
	<?php include "views/header.view.php"; ?>

	<div class="body">
		<div class="container">

			<?php include ($view); ?>

			<hr>
			<?php include "views/footer.view.php"; ?>

		</div> <!-- /. container -->
	</div> <!-- /. body -->

	 <script src="js/jquery.1.9.1.js"></script>
	<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->
	<script src="js/bootstrap.js"></script>
	<script src="js/holder.js"></script>
	<script src="js/script.js"></script>
</body>
</html>
