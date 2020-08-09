<?php
	$sql="SELECT * FROM nhomhanghoa WHERE MaNhom='$_GET[id]'";
	$run=mysqli_query($conn, $sql);
	$dong=mysqli_fetch_array($run);
?>

<div class="quanlyloaisp">
<p class="title1"><span class="title2">Quản lý loại sản phẩm</span><span class="title3">/</span>Sửa loại sản phẩm</p>

<center>
<form action="modules/quanlyloaisp/xuly.php?id=<?php echo $dong['MaNhom'] ?>" method="post" enctype="multipart/form-data">
	<table width="50%" border="0" style="text-align: center; border: 1px solid #ccc;">
		<tr style="border-top: 3px solid #007bff;">
			<th>Mã nhóm</th>
			<td><input type="text" name="manhom" value="<?php echo $dong['MaNhom'] ?>"></td>
		</tr>
		<tr>
			<th>Tên nhóm</th>
			<td><input type="text" name="tennhom" value="<?php echo $dong['TenNhom'] ?>"></td>
		</tr>
	</table>
	<input type="submit" name="sua" id="sua" value="Sửa">
</form>
</center>
</div>