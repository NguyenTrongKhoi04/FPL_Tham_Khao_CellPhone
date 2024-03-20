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
</head>
<body>
	<div class="fixed-menu">
		<div class="container-fluid title">
			<div class="your-website">
				<a href="index.php?controller=thongtinchung">YOUR WEBSITE</a>
			</div>
			<div class="mail">
				<a href="http://localhost:8080/cellphones" target="_blank">Frond end</a>
			</div>
			<div class="login">
				<div class="small-icon">
					<img src="../assets/imgs/icon.jpg" alt="">
				</div>
				<div class="name">
					Admin
				</div>
				<div class="smail-login">
					<a href="index.php?controller=login&action=logout" style="padding: 10px;">Đăng xuất</a>
				</div>
			</div>
		</div>
		<div class="main-page">
			<div class="content">
			<!-- Thông tin chung -->
			<div class="muc">
				<a class="fixed-a dashbroad" href="index.php?controller=thongtinchung">
					<i class="fas fa-robot" style="color: #f89a14;"></i>
					Thông tin chung
				</a>
			</div>
			<!-- / -->
			

			<!-- User -->
			<div class="muc">
				<div class="first-muc">
					<a class="fixed-a users"  href="#">
						<i class="fas fa-user-friends" style="color: #6cc66c;"></i>
							Usesr
						<i class="fas fa-angle-left more"></i>
					</a>
				</div>
			
				<div class="second-muc">
					<ul class="follow-users">
						<li>
							<a href="index.php?controller=users" class="second-muc-items items-users">
								<i class="fas fa-angle-double-right"></i>List users</a>
								
						</li>
					</ul>
				</div>
			</div>
			<!-- / -->
			<!-- Nhà sản xuất -->
			<div class="muc">
				<div class="first-muc">
					<a class="fixed-a nsx"  href="#">
						<i class="fas fa-building" style="color: #f56a28;"></i>
							Nhà sản xuất
						<i class="fas fa-angle-left more"></i>
					</a>
				</div>
				<div class="second-muc">
					<ul class="follow-nsx">
						<li>
							<a href="index.php?controller=nhasanxuat" class="second-muc-items items-nsx">
								<i class="fas fa-angle-double-right"></i>Nhà sản xuất
							</a>
								
						</li>
					</ul>
				</div>
			</div>
			<!-- / -->
			<!-- Điện thoại -->
			<div class="muc">
				<div class="first-muc">
					<a class="fixed-a phone" href="#">
						<i class="fas fa-mobile-alt" style="color: #418bca;"></i>
							Điện thoại
						<i class="fas fa-angle-left more"></i>
					</a>
				</div>
			
				<div class="second-muc">
					<ul class="follow-phone" id="follow-phone">
						<li>
							<a href="index.php?controller=loaisp" class="second-muc-items items-phone">
							<i class="fas fa-angle-double-right"></i>Điện thoại</a>
						</li>
						
					</ul>
				</div>
			</div>
			<!-- / -->

			<!-- Lap top -->
			<div class="muc">
				<div class="first-muc">
					<a class="fixed-a laptop" href="#">
						<i class="fas fa-laptop" style="color: #45d0de;"></i>
							Lap top
						<i class="fas fa-angle-left more"></i>
					</a>
				</div>
			
				<div class="second-muc">
					<ul class="follow-laptop" id="follow-laptop">
						<li>
							<a href="index.php?controller=laptop" class="second-muc-items items-laptop">
							<i class="fas fa-angle-double-right"></i>Lap top</a>
						</li>
						
					</ul>
				</div>
			</div>
			<!-- / -->
			<!-- Tai nghe -->
			<div class="muc">
				<div class="first-muc">
					<a class="fixed-a headphone" href="#">
						<i class="fas fa-headphones-alt" style="color: #ef6f6c;"></i>
							Tai nghe
						<i class="fas fa-angle-left more"></i>
					</a>
				</div>
			
				<div class="second-muc">
					<ul class="follow-headphone" id="follow-headphone">
						<li>
							<a href="index.php?controller=headphone" class="second-muc-items items-headphone">
							<i class="fas fa-angle-double-right"></i>Tai nghe</a>
						</li>
						
					</ul>
				</div>
			</div>
			<!-- / -->
			<!-- Đòng hồ -->
			<div class="muc">
				<div class="first-muc">
					<a class="fixed-a dongho" href="#">
						<i class="fas fa-stopwatch" style="color: #ff6429;"></i>
							Đồng hồ
						<i class="fas fa-angle-left more"></i>
					</a>
				</div>
			
				<div class="second-muc">
					<ul class="follow-dongho" id="follow-dongho">
						<li>
							<a href="index.php?controller=dongho" class="second-muc-items items-dongho">
							<i class="fas fa-angle-double-right"></i>Đồng hồ</a>
						</li>
						
					</ul>
				</div>
			</div>
			<!-- / -->
			<!-- Phụ kiện -->
			<div class="muc">
				<div class="first-muc">
					<a class="fixed-a phukien" href="#">
						<i class="fas fa-archive" style="color: #3fd295;"></i>
							Phụ kiện
						<i class="fas fa-angle-left more"></i>
					</a>
				</div>
			
				<div class="second-muc">
					<ul class="follow-phukien" id="follow-phukien">
						<li>
							<a href="index.php?controller=phukien" class="second-muc-items items-phukien">
							<i class="fas fa-angle-double-right"></i>Phụ kiện</a>
						</li>
						
					</ul>
				</div>
			</div>
			<!-- / -->
			<!-- Hàng cũ -->
			<div class="muc">
				<div class="first-muc">
					<a class="fixed-a hangcu" href="#">
						<i class="fas fa-hat-cowboy-side" style="color: #fdcd1c;"></i>
							Hàng cũ
						<i class="fas fa-angle-left more"></i>
					</a>
				</div>
			
				<div class="second-muc">
					<ul class="follow-hangcu" id="follow-hangcu">
						<li>
							<a href="index.php?controller=hangcu" class="second-muc-items items-hangcu">
							<i class="fas fa-angle-double-right"></i>Hàng cũ</a>
						</li>
						
					</ul>
				</div>
			</div>
			<!-- / -->
			<!-- Hàng cũ -->
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
							<a href="index.php?controller=order" class="second-muc-items items-order">
							<i class="fas fa-angle-double-right"></i>Giao hàng</a>
						</li>
						
					</ul>
				</div>
			</div>
			<!-- / -->
			<!-- Doanh thu -->
			<div class="muc">
				<div class="first-muc">
					<a class="fixed-a revenue" href="#">
						<i class="fas fa-dollar-sign" style="color:#ffd400;;"></i>
							Doanh thu
						<i class="fas fa-angle-left more"></i>
					</a>
				</div>
			
				<div class="second-muc">
					<ul class="follow-revenue" id="follow-revenue">
						<li>
							<a href="index.php?controller=revenue" class="second-muc-items items-revenue">
							<i class="fas fa-angle-double-right"></i>Doanh thu</a>
						</li>
						
					</ul>
				</div>
			</div>
			<!-- /doanhthu -->
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
			if($controller=='revenue'|| $controller=='revenue#')
			{
				echo " 
					$('.muc .revenue').css('background','#444954');
					$('.follow-revenue').css('display','block');
					$('.items-revenue').css('background','#418bca');
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