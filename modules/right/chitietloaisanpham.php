<?php
	if(isset($_GET['trang'])){
		$get_trang=$_GET['trang'];
	}else{
		$get_trang='';
	}if($get_trang=='' || $get_trang==1){
		$trang1=0;
	}else{
		$trang1=($get_trang*8)-8;
	}
	$sql_chitiet="SELECT * FROM hanghoa where MaNhom='$_GET[id]' LIMIT $trang1, 8";
	$query=mysqli_query($conn, $sql_chitiet);
	$query_tmp=mysqli_query($conn, $sql_chitiet);
?>
<?php
	$sql_loaisp="SELECT * FROM nhomhanghoa WHERE MaNhom='$_GET[id]'";
	$query_loaisp=mysqli_query($conn, $sql_loaisp);
	$dong_loaisp=mysqli_fetch_array($query_loaisp);
	if($dong_tmp=mysqli_fetch_array($query_tmp)==0){
		header('location:index.php?xem=danhsachtrong#danhsachtrong');
	}
?>
<a name="line"></a>
<p style="height: 50px; line-height: 50px; color: #333333; font-size: 22px; margin-left: 0px;"  class="title"><?php echo $dong_loaisp['TenNhom'] ?></p>
<div class="danhsachsanpham">
	<ul>
		<?php
			while($dong_chitiet=mysqli_fetch_array($query)){
		?>
		<li><a href="index.php?xem=chitietsanpham&idloaisp=<?php echo $dong_chitiet['MaNhom'] ?>&id=<?php echo $dong_chitiet['MSHH'] ?>#chitietsanpham">
			<img src="admincp/modules/quanlychitietsp/uploads/<?php echo $dong_chitiet['Hinh'] ?>" />
			<p style="color: #212121;">Tên sản phẩm: <?php echo $dong_chitiet['TenHH'] ?></p>
			<p style="color: #b0b0b0;">Giá sản phẩm: <?php echo number_format($dong_chitiet['Gia']).' VND' ?></p>
		</a></li>
		<?php
			}
		
		?>
	</ul>
</div>

<p style="clear: both;"></p>

<?php
	$sql_trang=mysqli_query($conn, "SELECT * FROM hanghoa WHERE MaNhom='$_GET[id]'");
	$count=mysqli_num_rows($sql_trang);
	//ceil(x): làm tròn số lên
	$a=ceil($count/8); //mỗi trang hiển thị bao nhiêu sản phẩm thì chia cho x
	$id=$dong_loaisp['MaNhom'];
?>
<div class="page">
	<p>
		Trang&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<?php
			for($i=1;$i<=$a;$i++){
				echo '<a href="?xem=chitietloaisanpham&id='.$id.'&trang='.$i.'#line">'.$i.'</a>';
			}
		?>
	</p>
	<?php 
	if($get_trang>=1)
		echo '<p>Trang hiện tại: '.$get_trang.'</p>';
	else
		echo '<p>Trang hiện tại: 1</p>';
	?>
</div>

<p style="clear: both;"></p>