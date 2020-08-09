<?php
	if(isset($_POST['dangnhap'])){
		$tentaikhoan=$_POST['tentaikhoan'];
		$matkhau=$_POST['matkhau'];
		$sql_dangnhap="SELECT * FROM khachhang WHERE HoTenKH='$tentaikhoan' AND MSKH='$matkhau' LIMIT 1";
		$run_dangnhap=mysqli_query($conn, $sql_dangnhap);
		$count_dangnhap=mysqli_num_rows($run_dangnhap);
		if($count_dangnhap==0){
			echo '<script>alert("Sai tài khoản hay mật khẩu")</script>';
		}else{
			$_SESSION['dangnhap']=$tentaikhoan;
			header('location:index.php?xem=giohang');
		}
	}
?>

<a name="dangnhap"></a>
<div class="dangnhap">
<center>
<h1>Đăng nhập</h1>
<form action="" method="post" enctype="multipart/form-data">
	<table width="auto" >
		<tr>
			<td><input type="text" name="tentaikhoan" placeholder="Họ và tên" /></td>
		</tr>
		<tr>
			<td><input type="password" name="matkhau" placeholder="Mật khẩu (MSKH)" /></td>
		</tr>
		<tr>
			<td align="center"><input type="submit" name="dangnhap" value="Đăng nhập" /></td>
		</tr>
	</table>
</form>
<p>Nếu bạn chưa có tài khoản - <a href="index.php?xem=dangky#dangky">Đăng ký tài khoản</a></p>
</center>
</div>