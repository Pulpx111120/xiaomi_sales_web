<?php
	if(isset($_GET['trang'])){
		$get_trang=$_GET['trang'];
	}else{
		$get_trang='';
	}
	if($get_trang=='' || $get_trang==1){
		$trang1=0;
	}else{
		$trang1=($get_trang*8)-8;
	}
	$sql_all="SELECT * FROM hanghoa LIMIT $trang1, 8";
	$query_all=mysqli_query($conn, $sql_all);
?>
<a name="sanphamall"></a>
<p style="height: 50px; line-height: 50px; color: #333333; font-size: 22px; margin-left: 0px;" class="title">Tất cả sản phẩm</p>
<div class="danhsachsanpham">
	<ul>
		<?php
			while($dong_all=mysqli_fetch_array($query_all)){
		?>
		<li><a href="index.php?xem=chitietsanpham&idloaisp=<?php echo $dong_all['MaNhom'] ?>&id=<?php echo $dong_all['MSHH'] ?>#chitietsanpham">
			<img src="admincp/modules/quanlychitietsp/uploads/<?php echo $dong_all['Hinh'] ?>" />
			<p style="color: #212121;">Tên sản phẩm: <?php echo $dong_all['TenHH'] ?></p>
			<p style="color: #b0b0b0;">Giá sản phẩm: <?php echo number_format($dong_all['Gia']).' VND' ?></p>
		</a></li>
		<?php
			}
		?>
	</ul>
</div>

<p style="clear: both;"></p>

<?php
	$sql_trang=mysqli_query($conn, "SELECT * FROM hanghoa");
	$count=mysqli_num_rows($sql_trang);
	//ceil(x): làm tròn số lên
	$a=ceil($count/8); //mỗi trang hiển thị bao nhiêu sản phẩm thì chia cho x
	
?>
<div class="page">
	<p>
		Trang&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<?php
			for($i=1;$i<=$a;$i++){
				echo '<a href="?trang='.$i.'#sanphamall">'.$i.'</a>';
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