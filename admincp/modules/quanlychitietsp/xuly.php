<?php
	include '../config.php';
	$id=$_GET['id'];
	$mshh=$_POST['mshh'];
	$tenhh=$_POST['tenhh'];
	$gia=$_POST['gia'];
	$soluong=$_POST['soluong'];
	$tennhom=$_POST['tennhom'];
	$motahh=$_POST['motahh'];
	$hinh=$_FILES['hinh']['name'];
	$hinh_tmp=$_FILES['hinh']['tmp_name'];
	move_uploaded_file($hinh_tmp, 'uploads/'.$hinh);
	if(isset($_POST['them'])){
		//them
		$sql="INSERT INTO hanghoa(MSHH, TenHH, Gia, SoLuongHang, MaNhom, Hinh, MoTaHH) VALUES ('$mshh', '$tenhh', '$gia', '$soluong', '$tennhom', '$hinh', '$motahh')";
		mysqli_query($conn, $sql);
		header('location:../../index.php?quanly=quanlychitietsp&ac=them');
	}else if(isset($_POST['sua'])){
		//sua
		if($hinh!=''){ //nếu người dùng không thêm hình ảnh, thì hình ảnh giữ nguyên
			$sql="UPDATE hanghoa SET MSHH='$mshh', TenHH='$tenhh', Gia='$gia', SoLuongHang='$soluong', MaNhom='$tennhom', MoTaHH='$motahh', Hinh='$hinh' WHERE MSHH='$id'";
		}else{
			$sql="UPDATE hanghoa SET MSHH='$mshh', TenHH='$tenhh', Gia='$gia', SoLuongHang='$soluong', MaNhom='$tennhom', MoTaHH='$motahh' WHERE MSHH='$id'";
		}
		mysqli_query($conn, $sql);
		header('location:../../index.php?quanly=quanlychitietsp&ac=sua&id='.$mshh);
	}else{
		//xoa
		$sql="DELETE FROM hanghoa WHERE MSHH='$id'";
		mysqli_query($conn, $sql);
		header('location:../../index.php?quanly=quanlychitietsp&ac=them');
	}
?>