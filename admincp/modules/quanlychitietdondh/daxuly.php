<?php
	$sql="
	SELECT C.SoDonDH, C.MSHH, C.SoLuong, C.GiaDatHang 
	FROM chitietdathang C, dathang D
	WHERE C.SoDonDH=D.SoDonDH
	and D.TrangThai='true'
	ORDER BY C.GiaDatHang ASC";
	$run=mysqli_query($conn, $sql);
?>

<div class="quanlychitietdondh">
<p class="title1"><span class="title2">Quản lý chi tiết đơn đặt hàng</span><span class="title3">/</span>Danh sách chi tiết đơn đặt hàng đã xử lý</p>

<center>
<table width="95%" border="0" style="text-align: center; border: 1px solid #ccc;">
	<tr style="border-top: 3px solid #007bff; border-bottom: 3px solid #ccc;">
		<td>ID</td>
		<th>Số đơn đặt hàng</th>
		<th>MSHH</th>
		<th>Số lượng</th>
		<th>Giá đặt hàng</th>
		<th>Quản lý</th>
	</tr>
	<?php
	$i=0;
	while($dong=mysqli_fetch_array($run)){
	?>
	<tr>
		<td><?php echo $i; ?></td>
		<td><?php echo $dong['SoDonDH'] ?></td>
		<td><?php echo $dong['MSHH'] ?></td>
		<td><?php echo $dong['SoLuong'] ?></td>
		<td><?php echo number_format($dong['GiaDatHang']) ?></td>
		<td><a href="modules/quanlychitietdondh/xuly.php?ac=xoa&id=<?php echo $dong['SoDonDH'] ?>">Xóa</a></td>
	</tr>
	<?php
	$i++;
	}
	?>
</table>
</center>
</div>