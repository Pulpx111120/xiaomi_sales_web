<?php
	if(isset($_GET['ac']) && $_GET['ac']=='logout'){
		unset($_SESSION['dangnhap']);
		//khác session_destroy() vì session_destroy() bỏ tất cả session còn unset chỉ bỏ 1 session đã chọn
		header('location:index.php');
	}
?>

<div class="header">
	<div class="topbar">
		<div class="left">
			<ul>
				<li><a href="#">MIUI</a></li>
				<li>|</li>
				<li><a href="#">Cộng đồng</a></li>
				<li>|</li>
				<li><a href="#">Hướng dẫn</a></li>
				<li>|</li>
				<li><a href="#lienhe">Liên hệ</a></li>
			</ul>
		</div>
		<div class="right">
			<ul>
				<li><a href="index.php?xem=giohang#giohang"><?php echo $_SESSION['dangnhap'] ?>'s account</a></li>
				<li>|</li>
				<li><a href="index.php?ac=logout">Đăng xuất</a></li>
				<li class="cart"><i class="fa fa-cart-plus"></i><a href="index.php?xem=giohang#giohang">Giỏ hàng</a></li>
			</ul>
		</div>
	</div>
</div>
<div class="clear"></div>