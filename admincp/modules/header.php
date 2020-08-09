<?php
	if(isset($_GET['ac']) && $_GET['ac']=='logoutadmin'){
		unset($_SESSION['dangnhapadmin']);
		//khác session_destroy() vì session_destroy() bỏ tất cả session còn unset chỉ bỏ 1 session đã chọn
		header('location:login.php');
	}
?>

<div class="header">
	<a href="index.php" class="a">Quản lý admin</a>
	<a href="index.php?ac=logoutadmin" class="b">Đăng xuất</a>
</div>

<p style="clear: both;"></p>