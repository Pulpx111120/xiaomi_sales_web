<?php
	$sql="SELECT * FROM khachhang WHERE MSKH='$_GET[id]'";
	$run=mysqli_query($conn, $sql);
	$dong=mysqli_fetch_array($run);
?>

<div class="quanlykhachhang">
<p class="title1"><span class="title2">Quản lý khách hàng</span><span class="title3">/</span>Sửa thông tin khách hàng</p>

<center>
<form action="modules/quanlykhachhang/xuly.php?id=<?php echo $dong['MSKH'] ?>" method="post" enctype="multipart/form-data">
	<table width="50%" border="0" style="text-align: center; border: 1px solid #ccc;">
		<tr style="border-top: 3px solid #007bff;">
			<td>MSKH</td>
			<td><input type="text" name="mskh" value="<?php echo $dong['MSKH'] ?>"></td>
		</tr>
		<tr>
			<td>Họ tên KH</td>
			<td><input type="text" name="name" value="<?php echo $dong['HoTenKH'] ?>"></td>
		</tr>
		<tr>
			<td>Địa chỉ</td>
			<td><input type="text" name="diachi" value="<?php echo $dong['DiaChi'] ?>"></td>
		</tr>
		<tr>
			<td>Số điện thoại</td>
			<td><input type="text" name="phone" value="<?php echo $dong['SoDienThoai'] ?>"></td>
		</tr>
	</table>
	<input type="submit" name="sua" id="sua" value="Sửa">
</form>
</center>
</div>