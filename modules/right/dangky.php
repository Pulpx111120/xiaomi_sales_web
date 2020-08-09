<a name="dangky"></a>
<div class="dangky">
<center>
<h1>Đăng ký</h1>
<?php
	if(isset($_POST['dangky'])){
		$mskh=$_POST['mskh'];
		$tenkhachhang=$_POST['tenkhachhang'];
		$diachi=$_POST['diachi'];
		$dienthoai=$_POST['dienthoai'];
		$sql_dangky="INSERT INTO khachhang(MSKH, HoTenKH, DiaChi, SoDienThoai) VALUES('$mskh', '$tenkhachhang', '$diachi', '$dienthoai')";
		$run_query=mysqli_query($conn, $sql_dangky);
		if($run_query){
			header('location:index.php?xem=thongbao#thongbao');
		}else{
			header('location:index.php?xem=dangky#dangky');
		}
	}
?>
<form action="index.php?xem=dangky" method="post" enctype="multipart/form-data" name="myForm" onsubmit="return sign_up()">
<table width="auto">
	<tr>
		<td><input type="text" name="mskh" placeholder="MSKH (Mật khẩu KH)"><span id="mskh_error"></span></td>
	</tr>
	<tr>
		<td><input type="text" name="tenkhachhang" placeholder="Họ và tên"><span id="tenkhachhang_error"></span></td>
	</tr>
	<tr>
		<td><input type="text" name="diachi" placeholder="Địa chỉ"><span id="diachi_error"></span></td>
	</tr>
	<tr>
		<td><input type="text" name="dienthoai" placeholder="Số điện thoại"><span id="dienthoai_error"></span></td>
	</tr>
	<tr>
		<td align="center"><input type="submit" name="dangky" value="Đăng ký"><span id="user_error"></span></td>
	</tr>
</table>
</form>
<p>Nếu bạn đã có tài khoản rồi - <a href="index.php?xem=thanhtoan#dangnhap">Trang đăng nhập</a></p>
</center>
</div>

<script type="text/javascript">
	function sign_up() {
		//
		var mskh = document.forms["myForm"]["mskh"].value;
		if(mskh==""){
			document.getElementById("mskh_error").innerHTML = "<br /><i class='fa fa-times-circle' style='font-size:15px; margin-top: 7px;'></i> Bạn chưa nhập MSKH!";
			return false;
		}else if(mskh.match(/\s/)){
			document.getElementById("mskh_error").innerHTML = "<br /><i class='fa fa-times-circle' style='font-size:15px; margin-top: 7px;'></i> MSKH không chứa khoảng trắng!";
			return false;
		}else if(mskh.length>5){
			document.getElementById("mskh_error").innerHTML = "<br /><i class='fa fa-times-circle' style='font-size:15px; margin-top: 7px;'></i> MSKH phải từ 1-5 ký tự!";
			return false;
		}else{
			document.getElementById("mskh_error").innerHTML = "<br /><i class='fa fa-check-circle' style='font-size:15px; margin-top: 7px;'></i>";
		}

		//
		var tenkhachhang = document.forms["myForm"]["tenkhachhang"].value;
		if(tenkhachhang==""){
			document.getElementById("tenkhachhang_error").innerHTML = "<br /><i class='fa fa-times-circle' style='font-size:15px; margin-top: 7px;'></i> Bạn chưa nhập tên!";
			return false;
		}else{
			document.getElementById("tenkhachhang_error").innerHTML = "<br /><i class='fa fa-check-circle' style='font-size:15px; margin-top: 7px;'></i>";
		}

		//
		var diachi = document.forms["myForm"]["diachi"].value;
		if(diachi==""){
			document.getElementById("diachi_error").innerHTML = "<br /><i class='fa fa-times-circle' style='font-size:15px; margin-top: 7px;'></i> Bạn chưa nhập địa chỉ!";
			return false;
		}else{
			document.getElementById("diachi_error").innerHTML = "<br /><i class='fa fa-check-circle' style='font-size:15px; margin-top: 7px;'></i>";
		}

		//
		var dienthoai = document.forms["myForm"]["dienthoai"].value;
		var isPhone = isNaN(dienthoai);
		if(dienthoai==""){
			document.getElementById("dienthoai_error").innerHTML = "<br /><i class='fa fa-times-circle' style='font-size:15px; margin-top: 7px;'></i> Bạn chưa nhập số điện thoại!";
			return false;
		}else if(isPhone==true){
			document.getElementById("dienthoai_error").innerHTML = "<br /><i class='fa fa-times-circle' style='font-size:15px; margin-top: 7px;'></i> Nhập không đúng!";
			return false;
		}else if(dienthoai.length!=10){
			document.getElementById("dienthoai_error").innerHTML = "<br /><i class='fa fa-times-circle' style='font-size:15px; margin-top: 7px;'></i> Số điện thoại gồm 10 ký số!";
			return false;
		}else{
			document.getElementById("dienthoai_error").innerHTML = "<br /><i class='fa fa-check-circle' style='font-size:15px; margin-top: 7px;'></i>";
		}
	}
</script>
