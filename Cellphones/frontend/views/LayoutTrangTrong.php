<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CellphoneS - Điện thoại, Laptop, iPad, phụ kiện chính hãng, giá tốt nhất</title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="../assets/fontawesome-free-5.14.0-web/css/all.css">
	<link rel="shortcut icon" href="https://cdn.cellphones.com.vn/media/favicon/default/logo-cps.png" type="image/x-icon">
	<link rel="stylesheet" href="../assets/bootstrap-4.5.0-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/danhmuc.css">
	<link rel="stylesheet" href="../assets/slick-1.8.1/slick-1.8.1/slick/slick.css">
	<link rel="stylesheet" href="../assets/slick-1.8.1/slick-1.8.1/slick/slick-theme.css">
	<script type="text/javascript" src="../assets/js/jquery-3.5.1.js"></script>
	<script type="text/javascript" src="../assets/slick-1.8.1/slick-1.8.1/slick/slick.min.js"></script>
	<script type="text/javascript" src="../assets/js/danhmuc.js"></script>
	<link rel="stylesheet" href="../assets/css/header.css">
</head>
<body>
	<?php include "controllers/NhasanxuatController.php"; ?>
	<?php include "views/HeaderView.php"; ?>

		<div class="container-fluid Main">
			<div class="col-md-12 chidan">
			<ul>
				<li>Home</li>
				<i class="fas fa-chevron-right"></i>
				<?php $category=isset($_GET['category'])?$_GET['category']:"search" ?>
				<li>
					<?php if($category=='')echo 'Tìm kiếm' ?>
					<?php if($category=='search')echo 'Tìm kiếm' ?>
					<?php if($category=='dienthoai')echo 'Điện thoại' ?>
					<?php if($category=='phukien')echo 'Phụ kiện' ?>
					<?php if($category=='dongho')echo 'Đồng hồ' ?>
					<?php if($category=='amthanh')echo 'Tai nghe' ?>
					<?php if($category=='laptop')echo 'Lap top' ?>
					<?php if($category=='hangcu')echo 'Hàng cũ' ?>
				</li>
			</ul>
			</div>

			<div class="col-md-12 slide">
				<div><a href="#"><img src="../assets/imgs/danhmuc.quangcao.jpg" alt=""></a></div>
				<div><a href="#"><img src="../assets/imgs/danhmuc.quangcao2.jpg" alt=""></a></div>
			</div>
			
			<div class="row main">
				<div class="col-md-2 left">
					<div class="manhinh">
						<div class="title">Màn hình</div>
						<div class="content">
							<ul>
								<?php $id_nsx=isset($_GET["id"])?$_GET["id"]:1 ?>
								<?php $category=isset($_GET["category"])?$_GET["category"]:"" ?>
								<li>
									<a href="index.php?controller=search&action=all&id=<?php echo $id_nsx; ?>&category=<?php echo $category ?>" style="color: #d96757;">Tất cả</a>
								</li>
								<li>
									<a href="index.php?controller=search&action=manDuoi5&id=<?php echo $id_nsx; ?>&category=<?php echo $category ?>"><5inches</a>
								</li>
								<li>
									<a href="index.php?controller=search&action=manTren5&id=<?php echo $id_nsx; ?>&category=<?php echo $category ?>">Từ 5 -> 6 inches</a>
								</li>
								<li>
									<a href="index.php?controller=search&action=manTren6&id=<?php echo $id_nsx; ?>&category=<?php echo $category ?>">>=6inches</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="bonhotrong">
						<div class="title">Bộ nhớ trong</div>
						<div class="content">
							<ul>
								<li>
									<a href="index.php?controller=search&action=all&id=<?php echo $id_nsx; ?>&category=<?php echo $category ?>" style="color: #d96757;">Tất cả</a>
								</li>
								<li>
									<a href="index.php?controller=search&action=rom32&id=<?php echo $id_nsx; ?>&category=<?php echo $category ?>">32GB</a>
								</li>
								<li>
									<a href="index.php?controller=search&action=rom64&id=<?php echo $id_nsx; ?>&category=<?php echo $category ?>">64GB</a>
								</li>
								<li>
									<a href="index.php?controller=search&action=rom128&id=<?php echo $id_nsx; ?>&category=<?php echo $category ?>">128GB</a>
								</li>
								<li>
									<a href="index.php?controller=search&action=rom256&id=<?php echo $id_nsx; ?>&category=<?php echo $category ?>">256GB</a>
								</li>
								<li>
									<a href="index.php?controller=search&action=rom512&id=<?php echo $id_nsx; ?>&category=<?php echo $category ?>">512GB</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="Sim">
						<div class="title">Số sim</div>
						<div class="content">
							<ul>
								<li>
									<a href="index.php?controller=search&action=all&id=<?php echo $id_nsx; ?>&category=<?php echo $category ?>" style="color: #d96757;">Tất cả</a>
								</li>
								<li>
									<a href="index.php?controller=search&action=oneSim&id=<?php echo $id_nsx; ?>&category=<?php echo $category ?>">1 Sim</a>
								</li>
								<li>
									<a href="index.php?controller=search&action=twoSim&id=<?php echo $id_nsx; ?>&category=<?php echo $category ?>">2 Sim</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="hedieuhanh">
						<div class="title">Hệ điều hành</div>
						<div class="content">
							<ul>
								<li>
									<a href="index.php?controller=search&action=all&id=<?php echo $id_nsx; ?>&category=<?php echo $category ?>" style="color: #d96757;">Tất cả</a>
								</li>
								<li>
									<a href="index.php?controller=search&action=ios&id=<?php echo $id_nsx; ?>&category=<?php echo $category ?>">IOS</a>
								</li>
								<li>
									<a href="index.php?controller=search&action=androi&id=<?php echo $id_nsx; ?>&category=<?php echo $category ?>">Androi</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<?php echo $this->view; ?>

			</div>
			<!-- </main row> -->
			<div class="BacktoTop" >
				<i class="fas fa-angle-up"></i>
			</div>
			
		</div>

		<!-- Footer -->
		<?php include "views/FooterView.php";?>
		<!-- /Footer -->
	<!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v8.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="104323344818272"
  theme_color="#ff7e29"
  logged_in_greeting="Tôi có thể giúp gì cho bạn!"
  logged_out_greeting="Tôi có thể giúp gì cho bạn!">
      </div>	
  </body>
</html>