<!-- load file layout chung -->
<?php 
	$this->layoutPath="LayoutTrangTrong.php";

 ?>

 	<div class="col-md-10">
 		<?php 
 			$message=isset($_GET["message"])?$_GET["message"]:"";
 		 ?>
 		 <?php if($message=="emailExists"): ?>
 		 	<div class="alert alert-danger">Email đã tồn tại</div>
 		 <?php endif; ?>

 		<?php if($message=="registerSuccess"): ?>
 		 	<div class="alert alert-danger">Đăng kí thành công</div>
 		 <?php endif; ?>

 		 <?php if($message=="checkOutSuccess"): ?>
 		 	<div class="alert alert-danger">Thanh toán giỏ hàng thành công </div>
 		 <?php endif; ?>
 	</div>
