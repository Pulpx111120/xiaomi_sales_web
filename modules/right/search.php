<?php
	if(isset($_POST['search'])){
		$search=$_POST['searchtext'];
		$sql_search="SELECT * FROM hanghoa WHERE TenHH LIKE '%$search%'";
		$query_search=mysqli_query($conn, $sql_search);
	}
?>
<a name="sanphamtimthay"></a>
<p style="height: 50px; line-height: 50px; color: #333333; font-size: 22px; margin-left: 0px;"  class="title">Sản phẩm tìm thấy</p>
<div class="danhsachsanphamtimthay">
	<?php
		if($count=mysqli_num_rows($query_search)==0){?>
			<p class="title">Không tìm thấy sản phẩm</p>
	<?php
		}else{
	?>
	<ul>
		<?php
			while($dong_search=mysqli_fetch_array($query_search)){
		?>
		<li><a href="index.php?xem=chitietsanpham&idloaisp=<?php echo $dong_search['MaNhom'] ?>&id=<?php echo $dong_search['MSHH'] ?>">
			<img src="admincp/modules/quanlychitietsp/uploads/<?php echo $dong_search['Hinh'] ?>" />
			<p style="color: #212121;">Tên sản phẩm: <?php echo $dong_search['TenHH'] ?></p>
			<p style="color: #b0b0b0;">Giá sản phẩm: <?php echo number_format($dong_search['Gia']).' VND' ?></p>
		</a></li>
		<?php
			}
		}
		?>
	</ul>
</div>