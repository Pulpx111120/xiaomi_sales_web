<?php
	$sql="SELECT * FROM hanghoa, nhomhanghoa WHERE hanghoa.MaNhom=nhomhanghoa.MaNhom ORDER BY hanghoa.SoLuongHang";
	$run=mysqli_query($conn, $sql);
?>

<div class="quanlychitietsanpham">
<p class="title1"><span class="title2">Danh sách chi tiết sản phẩm</span></p>

<center>
<table width="95%" border="0" style="text-align: center; border: 1px solid #ccc;">
	<tr style="border-bottom: 3px solid #ccc;">
		<th width="5%">ID</th>
		<th width="5%">Mã số HH</th>
		<th width="20%">Tên HH</th>
		<th width="10%">Giá</th>
		<th width="5%">Số lượng hàng</th>
		<th width="10%">Tên nhóm</th>
		<th width="10%">Hình</th>
		<th width="25%">Mô tả HH</th>
		<th colspan="2" width="10%">Quản lý</th>
	</tr>
	<?php
		$i=0;
		while($dong=mysqli_fetch_array($run)){
	?>
	<tr>
		<td><?php echo $i; ?></td>
		<td><?php echo $dong['MSHH'] ?></td>
		<td><?php echo $dong['TenHH'] ?></td>
		<td><?php echo number_format($dong['Gia']) ?></td>
		<td><?php echo $dong['SoLuongHang'] ?></td>
		<td><?php echo $dong['TenNhom'] ?></td>
		<td><img src="modules/quanlychitietsp/uploads/<?php echo $dong['Hinh'] ?>" width="60" height=60 /></td>
		<td><?php echo $dong['MoTaHH'] ?></td>
		<td><a href="index.php?quanly=quanlychitietsp&ac=sua&id=<?php echo $dong['MSHH'] ?>">Sửa</a></td>
		<td><a href="modules/quanlychitietsp/xuly.php?id=<?php echo $dong['MSHH'] ?>">Xóa</a></td>
	</tr>
	<?php
			$i++;
		}
	?>
</table>
</center>
</div>