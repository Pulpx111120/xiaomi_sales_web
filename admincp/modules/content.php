<div class="content">
	<?php
		if(isset($_GET['quanly'])){
			$tam=$_GET['quanly'];
		}else{
			$tam='';
		}if($tam=='quanlyloaisp'){
			include 'modules/quanlyloaisp/main.php';
		}else if($tam=='quanlychitietsp'){
			include 'modules/quanlychitietsp/main.php';
		}else if($tam=='quanlykhachhang'){
			include 'modules/quanlykhachhang/main.php';
		}else if($tam=='quanlynhanvien'){
			include 'modules/quanlynhanvien/main.php';
		}else if($tam=='quanlydondathang'){
			include 'modules/quanlydondathang/main.php';
		}else if($tam=='quanlychitietdondh'){
			include 'modules/quanlychitietdondh/main.php';
		}
	?>
</div>
<div class="clear"></div>