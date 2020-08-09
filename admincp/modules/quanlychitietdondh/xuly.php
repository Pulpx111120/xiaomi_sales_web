<?php
	include '../config.php';
	$id=$_GET['id'];
	if(isset($_GET['ac'])){
		$tam=$_GET['ac'];
	}else{
		$tam='';
	}if($tam=='xoa'){
		//xoa
		$sql_1="DELETE FROM chitietdathang WHERE SoDonDH='$id'";
		mysqli_query($conn, $sql_1);
		$sql_2="DELETE FROM dathang WHERE SoDonDH='$id'";
		mysqli_query($conn, $sql_2);
		header('location:../../index.php?quanly=quanlychitietdondh');
	}
?>