<!-- LayoutStaff.php -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Admin</title>
	<link rel="stylesheet" href="../assets/bootstrap-4.5.0-dist/css/bootstrap.min.css">
	<script type="text/javascript" src="../assets/js/jquery-3.5.1.js"></script>
	
	<link rel="stylesheet" href="../assets/fontawesome-free-5.14.0-web/css/all.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
	<script src="../assets/js/admin.js"></script>
	<link rel="stylesheet" type="text/css" href="../assets/css/admin.css">
	<!-- load ckeditor vào đây -->
    <script src="../assets/ckeditor/ckeditor.js"></script>
    <style>
    	.login .name{
    		padding: 0 !important;
    	}
    </style>
</head>
<body>
	<div class="fixed-menu">
		<div class="container-fluid title">
			<div class="your-website">
				<a href="index.php?controller=staff">YOUR WEBSITE</a>
			</div>
			<div class="mail">
				<a href="http://localhost:8080/cellphones" target="_blank">Frond end</a>
			</div>
			<div class="login">
				<div class="small-icon">
					<img src="../assets/imgs/icon.jpg" alt="">
				</div>
				<div class="name">
					Staff-<?php echo $_SESSION["emailStaff"]; ?>
				</div>
				<div class="smail-login">
					<a href="index.php?controller=staff&action=logoutStaff" style="padding: 10px;">Đăng xuất</a>

				</div>
			</div>
		</div>
		<div class="main-page">
			<div class="content">
			<!-- Giao hàng -->
			<div class="muc">
				<div class="first-muc">
					<a class="fixed-a order" href="#">
						<i class="fas fa-sort-alpha-up" style="color:#f2d1f3;"></i>
							Giao hàng
						<i class="fas fa-angle-left more"></i>
					</a>
				</div>
			
				<div class="second-muc">
					<ul class="follow-order" id="follow-order">
						<li>
							<a href="index.php?controller=staff" class="second-muc-items items-order">
							<i class="fas fa-angle-double-right"></i>Giao hàng</a>
						</li>
						
					</ul>
				</div>
			</div>
			<!-- / -->
		</div>
			<div class="main">
				<?php echo $this->view; ?>
			</div>
		
		</div>
	</div>
</body>
</html>
<script type="text/javascript">
	$(document).ready(function(){
		<?php 
			$controller=isset($_GET["controller"])?$_GET["controller"]:"";
			if($controller=='order'|| $controller=='hangcu#')
			{
				echo " 
					$('.muc .order').css('background','#444954');
					$('.follow-order').css('display','block');
					$('.items-order').css('background','#418bca');
				";
			}
			if($controller=='thongtinchung'|| $controller=='thongtinchung#' || $controller=="")
			{
				echo " 
					$('.muc .dashbroad').css('background','#444954');
				";
			}
			
			if($controller=='nhasanxuat'|| $controller=='nhasanxuat#')
			{
				echo " 
					$('.muc .nsx').css('background','#444954');
					$('.follow-nsx').css('display','block');
					$('.items-nsx').css('background','#418bca');
				";
			}
			if($controller=='loaisp'|| $controller=='loaisp#')
			{
				echo " 
					$('.muc .phone').css('background','#444954');
					$('.follow-phone').css('display','block');
					$('.items-phone').css('background','#418bca');
				";
			}
			if($controller=='users'|| $controller=='users#')
			{
				echo " 
					$('.muc .users').css('background','#444954');
					$('.follow-users').css('display','block');
					$('.items-users').css('background','#418bca');
				";
			}
			if($controller=='laptop'|| $controller=='laptop#')
			{
				echo " 
					$('.muc .laptop').css('background','#444954');
					$('.follow-laptop').css('display','block');
					$('.items-laptop').css('background','#418bca');
				";
			}
			if($controller=='headphone'|| $controller=='headphone#')
			{
				echo " 
					$('.muc .headphone').css('background','#444954');
					$('.follow-headphone').css('display','block');
					$('.items-headphone').css('background','#418bca');
				";
			}
			if($controller=='dongho'|| $controller=='dongho#')
			{
				echo " 
					$('.muc .dongho').css('background','#444954');
					$('.follow-dongho').css('display','block');
					$('.items-dongho').css('background','#418bca');
				";
			}
			if($controller=='hangcu'|| $controller=='hangcu#')
			{
				echo " 
					$('.muc .hangcu').css('background','#444954');
					$('.follow-hangcu').css('display','block');
					$('.items-hangcu').css('background','#418bca');
				";
			}
			if($controller=='phukien'|| $controller=='hangcu#')
			{
				echo " 
					$('.muc .phukien').css('background','#444954');
					$('.follow-phukien').css('display','block');
					$('.items-phukien').css('background','#418bca');
				";
			}
			
		 ?>

	});
</script>