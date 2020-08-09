<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="style/index.css" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" />
</head>
<body>
<?php
	session_start();
	//session_destroy();
	if(!isset($_SESSION['dangnhapadmin'])){
		header('location:login.php');
	}
?>
<div class="wrapper">
	<?php
		include 'modules/config.php';
		include 'modules/header.php';
		include 'modules/menu.php';
		include 'modules/content.php';
		include 'modules/footer.php';
	?>
</div>

</body>
</html>