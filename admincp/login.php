<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="style/login.css" />
</head>
<body>
<?php
	include 'modules/config.php';
	session_start();
	if(isset($_POST['login'])){
		$username=$_POST['username'];
		$password=$_POST['password'];
		$sql="SELECT * FROM nhanvien WHERE HoTenNV='$username' AND MSNV='$password' limit 1";
		$query=mysqli_query($conn, $sql);
		$nums=mysqli_num_rows($query);
		if($nums>0){
			$_SESSION['dangnhapadmin']=$username;
			header('location:index.php');
		}else{
			header('location:login.php');
		}
	}
?>
<div class="login">
<h1>Đăng nhập</h1>
<center>
<form action="" method="post">
		<table width="auto">
			<tr>
				<td><input type="text" name="username" placeholder="Họ tên NV"></td>
			</tr>
			<tr>
				<td><input type="password" name="password" placeholder="Mật khẩu (MSNV)"></td>
			</tr>
			<tr>
				<td colspan="2"	align="center"><form name="form1" method="post" action="">
					<input type="submit" name="login" id="button" value="Đăng nhập" />
				</form></td>
			</tr>
		</table>
</form>
</center>
</div>
</body>
</html>