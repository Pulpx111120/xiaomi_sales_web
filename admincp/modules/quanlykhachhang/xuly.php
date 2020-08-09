<?php
	include '../config.php';
	$id=$_GET['id'];
	$mskh=$_POST['mskh'];
	$name=$_POST['name'];
	$diachi=$_POST['diachi'];
	$phone=$_POST['phone'];
	if(isset($_POST['them'])){
		//them
		$sql="INSERT INTO khachhang(MSKH, HoTenKH, DiaChi, SoDienThoai) VALUES ('$mskh', '$name', '$diachi', '$phone')";
		mysqli_query($conn, $sql);
		header('location:../../index.php?quanly=quanlykhachhang&ac=them');
	}else if(isset($_POST['sua'])){
		//sua
		$sql="UPDATE khachhang SET MSKH='$mskh', HoTenKH='$name', DiaChi='$diachi', SoDienThoai='$phone' WHERE MSKH='$id'";
		mysqli_query($conn, $sql);
		header('location:../../index.php?quanly=quanlykhachhang&ac=sua&id='.$mskh);
	}else{
		//xoa
		$sql="DELETE FROM khachhang WHERE MSKH='$id'";
		mysqli_query($conn, $sql);
		header('location:../../index.php?quanly=quanlykhachhang&ac=them');
	}
?>