<?php
	include '../config.php';
	$id=$_GET['id'];
	$ad=$_GET['ad'];
	if(isset($_GET['ac'])){
		$tam=$_GET['ac'];
	}else{
		$tam='';
	}if($tam=='xuly'){
		//xuly
		$sql="UPDATE dathang SET TrangThai='true', MSNV=(SELECT MSNV FROM nhanvien WHERE HoTenNV='$ad') WHERE SoDonDH='$id'";
		mysqli_query($conn, $sql);
		header('location:../../index.php?quanly=quanlydondathang');
	}else if($tam=='xoa'){
		//xoa
		$sql_1="DELETE FROM dathang WHERE SoDonDH='$id'";
		mysqli_query($conn, $sql_1);
		$sql_2="DELETE FROM chitietdathang WHERE SoDonDH='$id'";
		mysqli_query($conn, $sql_2);
		header('location:../../index.php?quanly=quanlydondathang');
	}
?>