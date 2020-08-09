<div class="quanlychitietsanpham">
<p class="title1"><span class="title2">Quản lý chi tiết sản phẩm</span><span class="title3">/</span>Thêm chi tiết sản phẩm</p>

<center>
<form action="modules/quanlychitietsp/xuly.php" method="post" enctype="multipart/form-data">
	<table width="50%" border="0" style="text-align: center; border: 1px solid #ccc;">
		<tr style="border-top: 3px solid #007bff;">
			<th>Mã số hàng hóa</th>
			<td><input type="text" name="mshh"></td>
		</tr>
		<tr>
			<th>Tên hàng hóa</th>
			<td><input type="text" name="tenhh"></td>
		</tr>
		<tr>
			<th>Giá</th>
			<td><input type="text" name="gia"></td>
		</tr>
		<tr>
			<th>Số lượng hàng</th>
			<td><input type="text" name="soluong"></td>
		</tr>
		<?php
			$sql="SELECT * FROM nhomhanghoa";
			$run=mysqli_query($conn, $sql);
		?>
		<tr>
			<th>Tên nhóm</th>
			<td><select name=tennhom>
				<?php
					while($dong=mysqli_fetch_array($run)){
				?>
				<option value="<?php echo $dong['MaNhom'] ?>"><?php echo $dong['TenNhom'] ?></option>
				<?php
					}
				?>
			</select></td>
		</tr>
		<tr>
			<th>Hình</th>
			<td><input type="file" name="hinh"></td>
		</tr>
		<tr>
			<th>Mô tả hàng hóa</th>
			<td><textarea name="motahh" cols="40" rows="15"></textarea></td>
		</tr>
	</table>
	<input type="submit" name="them" value="Thêm">
</form>
</center>
</div>