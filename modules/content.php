<div class="content">
	<div class="left">
		<?php
			include 'modules/left/danhsach.php';
		?>
	</div>
	
	<div class="right">
		<?php
			if(isset($_GET['xem'])){
				$tam=$_GET['xem'];
			}else{
				$tam='';
			}if($tam=='chitietloaisanpham'){
				include 'modules/right/chitietloaisanpham.php';
			}else if($tam=='chitietsanpham'){
				include 'modules/right/chitietsanpham.php';
			}else if($tam=='giohang'){
				include 'modules/right/cart.php';
			}else if($tam=='dangky'){
				include 'modules/right/dangky.php';
			}else if($tam=='dangnhap'){
				include 'modules/right/thanhtoan.php';
			}else if($tam=='thanhtoan'){
				include 'modules/right/thanhtoan.php';
			}else if($tam=='thongbao'){
				include 'modules/right/thongbao.php';
			}else if($tam=='danhsachtrong'){
				include 'modules/right/danhsachtrong.php';
			}else if(isset($_POST['search'])){
				include 'modules/right/search.php';
			}else{
				include 'modules/right/tatcasanpham.php';
			}
		?>
	</div>
</div>
<div class="clear"></div>