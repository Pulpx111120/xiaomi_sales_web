<?php
	include '../config.php';
	$id=$_GET['id'];
	$manhom=$_POST['manhom'];
	$tennhom=$_POST['tennhom'];
	if(isset($_POST['them'])){
		//them
		$sql="INSERT INTO nhomhanghoa(MaNhom, TenNhom) VALUES ('$manhom', '$tennhom')";
		mysqli_query($conn, $sql);
		header('location:../../index.php?quanly=quanlyloaisp&ac=them');
	}else if(isset($_POST['sua'])){
		//sua
		$sql="UPDATE nhomhanghoa SET MaNhom='$manhom', TenNhom='$tennhom' WHERE MaNhom='$id'";
		mysqli_query($conn, $sql);
		header('location:../../index.php?quanly=quanlyloaisp&ac=sua&id='.$manhom);
	}else{
		//xoa
		$sql="DELETE FROM nhomhanghoa WHERE MaNhom='$id'";
		mysqli_query($conn, $sql);
		header('location:../../index.php?quanly=quanlyloaisp&ac=them');
	}
?>