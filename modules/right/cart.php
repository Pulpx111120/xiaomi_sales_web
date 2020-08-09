<a name="giohang"></a>
<div class="giohang">
<h2 style="float: left;">
	<?php
		if(isset($_SESSION['dangnhap'])){
			echo 'Xin chào: ' .$_SESSION['dangnhap'];
		}else{
			header('location:index.php?xem=dangnhap#dangnhap');
		}
	?>
</h2>
<h1 style="float: right;">Giỏ hàng</h1>
<p style="clear: both;"></p>
<?php
	// session_destroy();
	// them san pham moi
	if(isset($_GET['add']) && !empty($_GET['add'])){
		$id=$_GET['add'];
		@$_SESSION['cart_'.$id]+=1;
		header('location:index.php?xem=giohang');
	}
	//cong san phan
	if(isset($_GET['them'])){
		$_SESSION['cart_'.$_GET['them']]+=1;
		header('location:index.php?xem=giohang#giohang');
	}
	//tru san phan
	if(isset($_GET['tru'])){
		$_SESSION['cart_'.$_GET['tru']]-=1;
		header('location:index.php?xem=giohang#giohang');
	}
	//xoa san pham
	if(isset($_GET['xoa'])){
		$_SESSION['cart_'.$_GET['xoa']]=0;
		header('location:index.php?xem=giohang#giohang');
	}
	//hien thi san pham da them
	$thanhtien=0;?>
<table width="100%" style="text-align: center;">
	<tr style="background: #007bff; color: #fff;">
		<th width="5%"><p style="width: 150px;">Hình ảnh</p></th>
		<th width="60%">Tên sản phẩm</th>
		<th width="5%">Đơn giá</th>
		<th width="15%">Số lượng</th>
		<th width="10%">Thành tiền</th>
		<th width="5%">Quản lý</th>
	</tr>
<?php
	$count = 0;
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$date = date("Y-m-d G:i:s");
	foreach($_SESSION as $name => $value){
		if($value>0){
			if(substr($name, 0, 5)=='cart_'){
				$id=substr($name, 5, strlen($name)-5);
				$sql="SELECT * FROM hanghoa WHERE MSHH='".$id."'";
				$query=mysqli_query($conn, $sql);
				while($dong=mysqli_fetch_array($query)){
					$tongtien=$dong['Gia']*$value;
?>
	<tr>
		<td width="5%"><img src="admincp/modules/quanlychitietsp/uploads/<?php echo $dong['Hinh'] ?>" width=150 height=150 ></td>
		<td width="60%"><?php echo $dong['TenHH'] ?></td>
		<td width="5%"><?php echo number_format($dong['Gia']).' VND' ?></td>
		<td width="15%">
			<div class="stt">
			<?php
				if($value<$dong['SoLuongHang']){
					echo '<a href="index.php?xem=giohang&them='.$id.'">+</a>';
				}else{
					echo '<a href="index.php?xem=giohang#giohang" title="Số lượng hàng trong kho không đủ" class="isF">+</a>';
				}
			?>
			<?php echo $value ?>
			<a href="index.php?xem=giohang&tru=<?php echo $id ?>">-</a>
			<p>Số lượng còn lại trong kho <?php echo $dong['SoLuongHang'] ?></p>
			</div>
		</td>
		<td width="10%"><?php echo number_format($tongtien).' VND' ?></td>
		<td width="5%"><a href="index.php?xem=giohang&xoa=<?php echo $id ?>">[Xóa]</a></td>
	</tr>
<?php
					$thanhtien+=$tongtien;
					$arrTenHH[$count] = $dong['TenHH'];
					$arrValue[$count] = $value;
					$arrTongTien[$count] = $tongtien;
					$count++;
				}
			}
		}
	}?>
</table>
<h3 style="float: right;">
<?php
	if($thanhtien==0){
		echo 'Giỏ hàng trống';
	}else{
		echo 'Tổng tiền = '.number_format($thanhtien).' VND';
	}
?>
</h3>
<p style="clear: both;"></p>
<p style="float: right;" class="tmp"><a href="index.php?xem=giohang&dathang=true#giohang">Thanh toán</a></p>
<p style="clear: both;"></p>

<?php
	if(isset($_GET['dathang']) && $_GET['dathang']=='true'){
		for($i=0; $i<$count; $i++){		
			$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
			$MSDH = substr(str_shuffle($permitted_chars), 0, 5);
			$sql_dathang="INSERT INTO chitietdathang(SoDonDH, MSHH, SoLuong, GiaDatHang) VALUES ('$MSDH', (SELECT MSHH FROM hanghoa WHERE TenHH='$arrTenHH[$i]'), '$arrValue[$i]', '$arrTongTien[$i]')";
			mysqli_query($conn, $sql_dathang);
			$sql_dondathang="INSERT INTO dathang(SoDonDH, MSKH, MSNV, NgayDH, TrangThai) VALUES ('$MSDH', (SELECT MSKH FROM khachhang WHERE HoTenKH='$_SESSION[dangnhap]'), NULL, '$date', 'false')";
			mysqli_query($conn, $sql_dondathang);
			$sql_hanghoa="UPDATE hanghoa SET SoLuongHang=SoLuongHang-$arrValue[$i] WHERE MSHH=(SELECT MSHH FROM hanghoa WHERE TenHH='$arrTenHH[$i]')";
			mysqli_query($conn, $sql_hanghoa);
		}
		$_SESSION[substr($name, 0, 5)=='cart_'] = array();
		foreach ($_SESSION as $name => $value) {
			if($value>0){
				if(substr($name, 0, 5)=='cart_'){
					unset($_SESSION[$name]);
				}
			}
		}
		echo '<script>alert("Bạn đã đặt hàng thành công")</script>';
	}
?>

</div>