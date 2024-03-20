<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CellphoneS - Điện thoại, Laptop, iPad, phụ kiện chính hãng, giá tốt nhất</title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="../assets/fontawesome-free-5.14.0-web/css/all.css">
	<link rel="shortcut icon" href="https://cdn.cellphones.com.vn/media/favicon/default/logo-cps.png" type="image/x-icon">
	<link rel="stylesheet" href="../assets/bootstrap-4.5.0-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/slick-1.8.1/slick-1.8.1/slick/slick.css">
	<link rel="stylesheet" href="../assets/slick-1.8.1/slick-1.8.1/slick/slick-theme.css">
	<script type="text/javascript" src="../assets/js/jquery-3.5.1.js"></script>
	<script type="text/javascript" src="../assets/slick-1.8.1/slick-1.8.1/slick/slick.min.js"></script>
	<link rel="stylesheet" href="../assets/css/chitiet.css">
	<script src="../assets/js/chitiet.js"></script>
	<link rel="stylesheet" href="../assets/css/header.css">
</head>
<body>
	<?php include "controllers/NhasanxuatController.php"; ?>
	<?php include "views/HeaderView.php"; ?>
	
	<div class="av" style="height: 20px;"></div>
	<?php echo $this->view; ?>
	<!-- ****************** -->
	<div class="BachtoTop" >
			<i class="fas fa-angle-up"></i>
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