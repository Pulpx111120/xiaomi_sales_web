<div class="left">
	<?php
		if(isset($_GET['ac'])){
			$tam=$_GET['ac'];
		}else{
			$tam='';
		}if($tam=='them'){
			include 'modules/quanlynhanvien/them.php';
		}else if($tam=='sua'){
			include 'modules/quanlynhanvien/sua.php';
		}
	?>
</div>

<div class="right">
	<?php
		include 'modules/quanlynhanvien/lietke.php';
	?>
</div>