
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>CellphoneS - Điện thoại, Laptop, iPad, phụ kiện chính hãng, giá tốt nhất</title>
	
	<link rel="stylesheet" href="../assets/fontawesome-free-5.14.0-web/css/all.css">

	<link rel="shortcut icon" href="https://cdn.cellphones.com.vn/media/favicon/default/logo-cps.png" type="image/x-icon">
	<link rel="stylesheet" href="../assets/css/index.css">
	<link rel="stylesheet" href="../assets/css/header.css">
	<link rel="stylesheet" href="../assets/bootstrap-4.5.0-dist/css/bootstrap.min.css">
	<script type="text/javascript" src="../assets/js/jquery-3.5.1.js"></script>
	<script type="text/javascript" src="../assets/js/index.js"></script>
</head>
<body>
	
	<div class="cellphones">
		<!-- Header -->
		<?php include "views/HeaderView.php";?>
		<!-- /Header -->
		<div class="Banner">
			<div class="slideShow">
				<div class="slide">
					<ul class="chuyen-slide">
						<li class="first"><a href="#"><img src="../assets/imgs/slide1.jpg" alt=""></a></li>
						<li class="img2"><a href="#"><img src="../assets/imgs/slide2.jpg" alt=""></a></li>
						<li class="img3"><a href="#"><img src="../assets/imgs/slide3.jpg" alt=""></a></li>
						<li class="img4"><a href="#"><img src="../assets/imgs/slide4.jpg" alt=""></a></li>
						<li class="img5"><a href="#"><img src="../assets/imgs/slide5.jpg" alt=""></a></li>
						<li class="img6"><a href="#"><img src="../assets/imgs/slide6.jpg" alt=""></a></li>
					</ul>
				</div>
				<div class="title">
					<ul>
						<li class="order-1"><p style="font-weight: bold;margin-top: 12px">GALAXY NOTE 10+</p>
							<p>Giá mới,ưu đãi mới</p>
						</li>
						<li class="order-2"><p style="font-weight: bold;margin-top: 12px">APPLE WATCH</p>
							<p>Chính hãng VNA</p>
						</li>
						<li class="order-3"><p style="font-weight: bold;margin-top: 12px">HUAWAI P30</p>
							<p>Siêu sao AI</p>
						</li>
						<li class="order-4"><p style="font-weight: bold;margin-top: 12px">RENO 4|RENO 4+</p>
							<p>Nổi bật và khác biệt</p>
						</li>
						<li class="order-5"><p style="font-weight: bold;margin-top: 12px">ACER NITRO</p>
							<p>Chuẩn Gaming</p>
						</li>
						<li class="order-6"><p style="font-weight: bold;margin-top: 12px">JPL PULSE 3</p>
							<p>Hot sale độc quyền</p>
						</li>
					</ul>
				</div>
				

			</div>

			<div class="quangcao">
				<ul>
					<a href="#"><li><img src="../assets/imgs/quangcao1.jpg" alt=""></li></a>
					<a href="#"><li><img src="../assets/imgs/quangcao2.jpg" alt=""></li></a>
				</ul>
			</div>
		</div>
		<div class="dathang" style="margin: auto;width: 1200px;height: 75px;margin-top: 15px">
			<img alt="Đặt hàng Samsung Galaxy Note Mới" height="75" src="https://cdn.cellphones.com.vn/media/wysiwyg/SAMSUNG-NOTE-M_I_1200x75_1.gif" width="1200" >
		</div>
		

		<div class="Hotsale" style="margin: auto;width: 1200px;height: 305px;padding-top: 15px;z-index: 2">
			<div class="title">
				<span></span>
				<script type="text/javascript">
					$(document).ready(function(){
						var d = new Date();
						var month=d.getMonth()+1;
						$('.Hotsale .title span').html('HOT SALE THÁNG '+month);
					});
				</script>
			</div>
			<div class="content" id="slide-sale">
				<i class="fas fa-chevron-circle-left" id="Nextsale"></i>
				<div class="noidung">

					<ul>
					<li><a href="#">
						<img src="../assets/imgs/sale.jpg" alt="">
						<p>Vsmart Active 3 6GB ram</p>
					</a></li>
					<li><a href="#">
						<img src="../assets/imgs/sale2.jpg" alt="">
						<p>NOKIA 5.3</p>
					</a></li>
					<li><a href="#">
						<img src="../assets/imgs/sale3.jpg" alt="">
						<p>Realme 6i</p>
					</a></li>
					<li><a href="#">
						<img src="../assets/imgs/sale4.jpg" alt="">
						<p>OPPO file X2</p>
					</a></li>
					<li><a href="#">
						<img src="../assets/imgs/sale5.jpg" alt="">
						<p>Realme C3i</p>
					</a></li>
				</ul>

				<ul>
					<li><a href="#">
						<img src="../assets/imgs/sale.jpg" alt="">
						<p>Vsmart Active 3 6GB ram</p>
					</a></li>
					<li><a href="#">
						<img src="../assets/imgs/sale.jpg" alt="">
						<p>Vsmart Active 3 6GB ram</p>
					</a></li>
					<li><a href="#">
						<img src="../assets/imgs/sale.jpg" alt="">
						<p>Vsmart Active 3 6GB ram</p>
					</a></li>
					<li><a href="#">
						<img src="../assets/imgs/sale.jpg" alt="">
						<p>Vsmart Active 3 6GB ram</p>
					</a></li>
					<li><a href="#">
						<img src="../assets/imgs/sale.jpg" alt="">
						<p>Vsmart Active 3 6GB ram</p>
					</a></li>
				</ul>

				</div>
				<i class="fas fa-chevron-circle-right" id="Prevsale"></i>
				
			</div>
		</div>
		<!-- Main -->
		<?php echo $this->view; ?>
		<!-- /Main -->
		<!-- Footer -->
		<?php include "views/FooterView.php";?>
		<!-- /Footer -->
		
		<div class="Message"></div>
		<div class="BachtoTop" >
			<i class="fas fa-angle-up"></i>
		</div>
	</div>
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