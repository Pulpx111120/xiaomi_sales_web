<?php
	$sql="SELECT * FROM nhanvien";
	$run=mysqli_query($conn, $sql);
?>

<div class="quanlynhanvien">
<p class="title1"><span class="title2">Danh sách nhân viên</span></p>

<center>
<table width="95%" border="0" style="text-align: center; border: 1px solid #ccc;">
	<tr style="border-bottom: 3px solid #ccc;">
		<th>ID</th>
		<th>MSNV</th>
		<th>Họ tên NV</th>
		<th>Chức vụ</th>
		<th>Địa chỉ</th>
		<th>Số điện thoại</th>
		<th colspan="2">Quản lý</th>
	</tr>
	<?php
	$i=0;
	while($dong=mysqli_fetch_array($run)){
	?>
	<tr>
		<td><?php echo $i; ?></td>
		<td><?php echo $dong['MSNV'] ?></td>
		<td><?php echo $dong['HoTenNV'] ?></td>
		<td><?php echo $dong['ChucVu'] ?></td>
		<td><?php echo $dong['DiaChi'] ?></td>
		<td><?php echo $dong['SoDienThoai'] ?></td>
		<td><a href="index.php?quanly=quanlynhanvien&ac=sua&id=<?php echo $dong['MSNV'] ?>">Sửa</a></td>
		<td><a href="modules/quanlynhanvien/xuly.php?id=<?php echo $dong['MSNV'] ?>">Xóa</a></td>
	</tr>
	<?php
	$i++;
	}
	?>
</table>
</center>
</div>