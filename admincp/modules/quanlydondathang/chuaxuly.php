<?php
	$sql="SELECT * FROM dathang WHERE TrangThai='false' ORDER BY NgayDH ASC";
	$run=mysqli_query($conn, $sql);
?>

<div class="quanlydondathang">
<p class="title1"><span class="title2">Quản lý đơn đặt hàng</span><span class="title3">/</span>Danh sách đơn đặt hàng chưa xử lý</p>

<center>
<table width="95%" border="0" style="text-align: center; border: 1px solid #ccc;">
	<tr style="border-top: 3px solid #007bff; border-bottom: 3px solid #ccc;">
		<td>ID</td>
		<th>Số đơn đặt hàng</th>
		<th>MSKH</th>
		<th>MSNV</th>
		<th>Ngày đặt hàng</th>
		<th>Trạng thái</th>
		<th colspan="2">Quản lý</th>
	</tr>
	<?php
	$i=0;
	while($dong=mysqli_fetch_array($run)){
	?>
	<tr>
		<td><?php echo $i; ?></td>
		<td><?php echo $dong['SoDonDH'] ?></td>
		<td><?php echo $dong['MSKH'] ?></td>
		<td><?php echo $dong['MSNV'] ?></td>
		<td><?php echo $dong['NgayDH'] ?></td>
		<td><?php echo $dong['TrangThai'] ?></td>
		<td><a href="modules/quanlydondathang/xuly.php?ac=xuly&ad=<?php echo $_SESSION['dangnhapadmin'] ?>&id=<?php echo $dong['SoDonDH'] ?>">Xử lý</a></td>
		<td><a href="modules/quanlydondathang/xuly.php?ac=xoa&id=<?php echo $dong['SoDonDH'] ?>">Xóa</a></td>
	</tr>
	<?php
	$i++;
	}
	?>
</table>
</center>
</div>