<?php
	$sql_nhomhh="SELECT * FROM nhomhanghoa";
	$query=mysqli_query($conn, $sql_nhomhh);
?>
<p style="text-align: center; color: #fff; padding: 10px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.15); font-size: 17px; font-weight: bolder;">Danh mục sản phẩm</p>
<div class="danhmucsanpham">
	<ul>
		<?php
			while($dong_nhomhh=mysqli_fetch_array($query)){
		?>
		<li><a href="index.php?xem=chitietloaisanpham&id=<?php echo $dong_nhomhh['MaNhom'] ?>#line"><?php echo $dong_nhomhh['TenNhom'] ?><i class="fa fa-reorder"></i></a></li>
		<?php
			}
		?>
	</ul>
</div>