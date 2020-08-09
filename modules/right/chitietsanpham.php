<?php
	$sql_chitietsp="SELECT * FROM hanghoa WHERE MSHH='$_GET[id]'";
	$query_chitietsp=mysqli_query($conn, $sql_chitietsp);
	$dong_chitietsp=mysqli_fetch_array($query_chitietsp);
?>
<a name="chitietsanpham"></a>

<p style="height: 50px; line-height: 50px; color: #333333; font-size: 22px; margin-left: 0px;" class="title">Chi tiết sản phẩm</p>
<div class="chitietsanpham">
<table width="100%" border="1" style="border-collapse: collapse; text-align: center;">
	<tr style="border-bottom: 3px solid #ccc;">
		<th colspan="2"><?php echo $dong_chitietsp['TenHH'] ?></th>
		<td rowspan="6"><img src="admincp/modules/quanlychitietsp/uploads/<?php echo $dong_chitietsp['Hinh'] ?>" width=200 height=200 /></td>
	</tr>
	<tr>
		<th width="30%">Giá</th>
		<td width="70%"><?php echo number_format($dong_chitietsp['Gia']).' VND' ?></td>
	</tr>
	<tr>
		<th>Số lượng hàng</th>
		<td><?php echo $dong_chitietsp['SoLuongHang'] ?></td>
	</tr>
	<tr>
		<th>Mã nhóm</th>
		<td><?php echo $dong_chitietsp['MaNhom'] ?></td>
	</tr>
	<tr>
		<th colspan="2">Mô tả thông số kỹ thuật</th>
	</tr>
	<tr>
		<td colspan="2"><?php echo $dong_chitietsp['MoTaHH'] ?></td>
	</tr>
</table>

<div class="cart">
	<a href="index.php?xem=giohang&add=<?php echo $dong_chitietsp['MSHH'] ?>#giohang"><i class="fa fa-cart-plus"><span>Thêm vào giỏ hàng</span></i></a>
</div>

<p style="clear: both;"></p>

<?php
	if(isset($_GET['trang'])){
		$get_trang=$_GET['trang'];
	}else{
		$get_trang='';
	}if($get_trang=='' || $get_trang==1){
		$trang1=0;
	}else{
		$trang1=($get_trang*4)-4;
	}
	$sql_spcungloai=mysqli_query($conn, "SELECT * FROM hanghoa WHERE MaNhom='$_GET[idloaisp]' AND hanghoa.MSHH<>'$_GET[id]' LIMIT $trang1, 4");
?>
</div>
<p style="height: 50px; line-height: 50px; color: #333333; font-size: 22px; margin-left: 0px;" class="title">Sản phẩm cùng loại</p>

<div class="danhsachsanphamcungloai">
	<ul>
		<?php
			while($dong_spcungloai=mysqli_fetch_array($sql_spcungloai)){
		?>
		<li><a href="index.php?xem=chitietsanpham&idloaisp=<?php echo $dong_spcungloai['MaNhom'] ?>&id=<?php echo $dong_spcungloai['MSHH'] ?>#chitietsanpham">
			<img src="admincp/modules/quanlychitietsp/uploads/<?php echo $dong_spcungloai['Hinh'] ?>" />
			<p style="color: #212121;">Tên sản phẩm: <?php echo $dong_spcungloai['TenHH'] ?></p>
			<p style="color: #b0b0b0;">Giá sản phẩm: <?php echo number_format($dong_spcungloai['Gia']).' VND' ?></p>
		</a></li>
		<?php
			}
		?>
	</ul>
</div>