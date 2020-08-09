<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Xiaomi</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<link rel="stylesheet" href="style/index.css" />
	<link rel="stylesheet" href="style/rwd/responsive_home.css" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" />
</head>
<body>
<div class="wrapper">
	<?php
		include 'admincp/modules/config.php';
		session_start();
		//session_destroy();
		if(!isset($_SESSION['dangnhap'])){
			include 'modules/header.php';
		}else{
			include 'modules/header1.php';
		}
		include 'modules/menu.php';
		include 'modules/content.php';
		include 'modules/footer.php';
	?>
</div>
<script type="text/javascript" src="js/banner.js"></script>
</body>
</html>