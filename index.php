<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Xiaomi</title>

	<link 
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" 
        rel="stylesheet" 
    />
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"
        rel="stylesheet"
    />
    <link
        rel="stylesheet"
        href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />

	<link rel="stylesheet" href="style/index.css" />
	<link rel="stylesheet" href="style/rwd/responsive_home.css" />
</head>
<body>
<div class="wrapper">
	<?php
		include 'admincp/modules/config.php';
		session_start();
		// session_destroy();
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