<?php
	include '../config.php';
	$id=$_GET['id'];
	$msnv=$_POST['msnv'];
	$name=$_POST['name'];
	$chucvu=$_POST['chucvu'];
	$diachi=$_POST['diachi'];
	$phone=$_POST['phone'];
	if(isset($_POST['them'])){
		//them
		$sql="INSERT INTO nhanvien(MSNV, HoTenNV, ChucVu, DiaChi, SoDienThoai) VALUES ('$msnv', '$name', '$chucvu', '$diachi', '$phone')";
		mysqli_query($conn, $sql);
		header('location:../../index.php?quanly=quanlynhanvien&ac=them');
	}else if(isset($_POST['sua'])){
		//sua
		$sql="UPDATE nhanvien SET MSNV='$msnv', HoTenNV='$name', ChucVu='$chucvu', DiaChi='$diachi', SoDienThoai='$phone' WHERE MSNV='$id'";
		mysqli_query($conn, $sql);
		header('location:../../index.php?quanly=quanlynhanvien&ac=sua&id='.$msnv);
	}else{
		//xoa
		$sql="DELETE FROM nhanvien WHERE MSNV='$id'";
		mysqli_query($conn, $sql);
		header('location:../../index.php?quanly=quanlynhanvien&ac=them');
	}
?>