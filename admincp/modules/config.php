<?php
	$tenmaychu = 'localhost';
	$tentaikhoan = 'root';
	$pass = '';
	$csdl = 'quanlybanhang';
	
	$conn = mysqli_connect($tenmaychu, $tentaikhoan, $pass, $csdl) or die("Không kết nối được");
?>