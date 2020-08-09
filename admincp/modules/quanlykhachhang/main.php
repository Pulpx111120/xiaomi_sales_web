<div class="left">
	<?php
		if(isset($_GET['ac'])){
			$tam=$_GET['ac'];
		}else{
			$tam='';
		}if($tam=='them'){
			include 'modules/quanlykhachhang/them.php';
		}else if($tam=='sua'){
			include 'modules/quanlykhachhang/sua.php';
		}
	?>
</div>

<div class="right">
	<?php
		include 'modules/quanlykhachhang/lietke.php';
	?>
</div>