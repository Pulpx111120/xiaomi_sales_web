<?php
	$sql="SELECT * FROM nhanvien WHERE MSNV='$_GET[id]'";
	$run=mysqli_query($conn, $sql);
	$dong=mysqli_fetch_array($run);
?>

<div class="quanlykhachhang">
<p class="title1"><span class="title2">Quản lý nhân viên</span><span class="title3">/</span>Sửa thông tin nhân viên</p>

<center>
<form action="modules/quanlynhanvien/xuly.php?id=<?php echo $dong['MSNV'] ?>" method="post" enctype="multipart/form-data">
	<table width="50%" border="0" style="text-align: center; border: 1px solid #ccc;">
		<tr style="border-top: 3px solid #007bff;">
			<th>MSNV</th>
			<td><input type="text" name="msnv" value="<?php echo $dong['MSNV'] ?>"></td>
		</tr>
		<tr>
			<th>Họ tên NV</th>
			<td><input type="text" name="name" value="<?php echo $dong['HoTenNV'] ?>"></td>
		</tr>
		<tr>
			<th>Chức vụ</th>
			<td><input type="text" name="chucvu" value="<?php echo $dong['ChucVu'] ?>"></td>
		</tr>
		<tr>
			<th>Địa chỉ</th>
			<td><input type="text" name="diachi" value="<?php echo $dong['DiaChi'] ?>"></td>
		</tr>
		<tr>
			<th>Số điện thoại</th>
			<td><input type="text" name="phone" value="<?php echo $dong['SoDienThoai'] ?>"></td>
		</tr>
	</table>
	<input type="submit" name="sua" id="sua" value="Sửa">
</form>
</center>
</div>