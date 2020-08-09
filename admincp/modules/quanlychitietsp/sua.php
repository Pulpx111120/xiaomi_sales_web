<?php
	$sql="SELECT * FROM hanghoa WHERE MSHH='$_GET[id]'";
	$run=mysqli_query($conn, $sql);
	$dong=mysqli_fetch_array($run);
?>

<div class="quanlychitietsanpham">
<p class="title1"><span class="title2">Quản lý chi tiết sản phẩm</span><span class="title3">/</span>Sửa chi tiết sản phẩm</p>

<center>
<form action="modules/quanlychitietsp/xuly.php?id=<?php echo $dong['MSHH'] ?>" method="post" enctype="multipart/form-data">
	<table width="50%" border="0" style="text-align: center; border: 1px solid #ccc;">
		<tr style="border-top: 3px solid #007bff;">
			<th>Mã số hàng hóa</th>
			<td colspan="2"><input type="text" name="mshh" value="<?php echo $dong['MSHH'] ?>"></td>
		</tr>
		<tr>
			<th>Tên hàng hóa</th>
			<td colspan="2"><input type="text" name="tenhh" value="<?php echo $dong['TenHH'] ?>"></td>
		</tr>
		<tr>
			<th>Giá</th>
			<td colspan="2"><input type="text" name="gia" value="<?php echo $dong['Gia'] ?>"></td>
		</tr>
		<tr>
			<th>Số lượng hàng</th>
			<td colspan="2"><input type="text" name="soluong" value="<?php echo $dong['SoLuongHang'] ?>"></td>
		</tr>
		<?php
			$sql_loaisp="SELECT * FROM nhomhanghoa";
			$run_loaisp=mysqli_query($conn, $sql_loaisp);
		?>
		<tr>
			<th>Tên nhóm</th>
			<td colspan="2"><select name=tennhom>
				<?php
					while($dong_loaisp=mysqli_fetch_array($run_loaisp)){
						if($dong['MaNhom']==$dong_loaisp['MaNhom']){
				?>
				<option selected="selected" value="<?php echo $dong_loaisp['MaNhom'] ?>"><?php echo $dong_loaisp['TenNhom'] ?></option>
				<?php
						}else{
				?>
				<option value="<?php echo $dong_loaisp['MaNhom'] ?>"><?php echo $dong_loaisp['TenNhom'] ?></option>
				<?php
						}
					}
				?>
			</select></td>
		</tr>
		<tr>
			<th>Hình</th>
			<td><input type="file" name="hinh" /></td>
			<th><img src="modules/quanlychitietsp/uploads/<?php echo $dong['Hinh'] ?>" width=60 height=60 /></th>
		</tr>
		<tr>
			<th>Mô tả hàng hóa</th>
			<td colspan="2"><textarea name="motahh" cols="40" rows="15"><?php echo $dong['MoTaHH'] ?></textarea></td>
		</tr>
	</table>
	<input type="submit" name="sua" value="Sửa">
</form>
</center>
</div>