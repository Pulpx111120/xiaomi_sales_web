<?php
	$sql="SELECT * FROM khachhang";
	$run=mysqli_query($conn, $sql);
?>

<div class="quanlykhachhang">
<p class="title1"><span class="title2">Danh sách khách hàng</span></p>

<center>
<table width="95%" border="0" style="text-align: center; border: 1px solid #ccc;">
	<tr style="border-bottom: 3px solid #ccc;">
		<th>ID</th>
		<th>MSKH</th>
		<th>Họ tên KH</th>
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
		<td><?php echo $dong['MSKH'] ?></td>
		<td><?php echo $dong['HoTenKH'] ?></td>
		<td><?php echo $dong['DiaChi'] ?></td>
		<td><?php echo $dong['SoDienThoai'] ?></td>
		<td><a href="index.php?quanly=quanlykhachhang&ac=sua&id=<?php echo $dong['MSKH'] ?>">Sửa</a></td>
		<td><a href="modules/quanlykhachhang/xuly.php?id=<?php echo $dong['MSKH'] ?>">Xóa</a></td>
	</tr>
	<?php
	$i++;
	}
	?>
</table>
</center>
</div>