<?php
	$sql="SELECT * FROM nhomhanghoa ORDER BY MaNhom ASC";
	$run=mysqli_query($conn, $sql);
?>

<div class="quanlyloaisp">
<p class="title1"><span class="title2">Danh sách loại sản phẩm</span></p>

<center>
<table width="95%" border="0" style="text-align: center; border: 1px solid #ccc;">
	<tr style="border-bottom: 3px solid #ccc;">
		<th>ID</th>
		<th>Mã nhóm</th>
		<th>Tên nhóm</th>
		<th colspan="2">Quản lý</th>
	</tr>
	<?php
	$i=0;
	while($dong=mysqli_fetch_array($run)){
	?>
	<tr>
		<td><?php echo $i; ?></td>
		<td><?php echo $dong['MaNhom'] ?></td>
		<td><?php echo $dong['TenNhom'] ?></td>
		<td><a href="index.php?quanly=quanlyloaisp&ac=sua&id=<?php echo $dong['MaNhom'] ?>">Sửa</a></td>
		<td><a href="modules/quanlyloaisp/xuly.php?id=<?php echo $dong['MaNhom'] ?>">Xóa</a></td>
	</tr>
	<?php
	$i++;
	}
	?>
</table>
</center>
</div>