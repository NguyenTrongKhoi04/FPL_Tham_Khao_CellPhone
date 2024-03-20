<!-- load file layout chung -->
<?php 
	$this->layoutPath="Layout.php";
 ?>

<div class="login-sussec">
	Bạn đã đăng nhập thành công!
</div>
<div class="title-main">
	CHÀO MỪNG ĐẾN VỚI TÔI! CHÚC MỘT NGÀY TỐT LÀNH
</div>
<div class="car-body">
	<ul>
		<?php 
		  	$date = getdate();
		  	$month=$date['mon'];
			$revenue=$this->RevenueModel($month);
			?> 
		<li class="car-items" style="background: #418bca;">
			<div class="left">
				<p style="font-size: 14px;font-weight: bold;">Doanh thu</p>
				<p style="font-size: 20px; font-weight: bold;margin-bottom: 30px;"><?php 
					if($revenue=="")
						echo "0";
					else
						echo number_format($revenue->tong);
				 ?></p>
			</div>
			<div class="right">
				<p>Tháng <?php echo $month; ?></p>
				<i class="fas fa-money-check-alt"></i>
				
			</div>
		</li>
		<?php $totalpr=$this->totalProduct(); ?>
		<li class="car-items" style="background: #ef6f6c;">
			<div class="left">
				<p style="font-size: 14px;font-weight: bold;">Sản phẩm</p>
				<p style="font-size: 20px; font-weight: bold;margin-bottom: 30px;"><?php 
					if($totalpr=="")
						echo "0";
					else
						echo number_format($totalpr->tong);
				 ?></p>
				<!-- <span style="font-size: 13px;font-weight: bold;">Nhập tháng trước : 2000</span> -->
			</div>
			<div class="right">
				<p>Tháng <?php echo $month; ?></p>
				<i class="fas fa-toolbox"></i>
				
			</div>
		</li>
		<?php $feedback=$this->feedBack(); ?>
		<li class="car-items" style="background: #f89a14;">
			<div class="left">
				<p style="font-size: 14px;font-weight: bold;">Phản hồi</p>
				<p style="font-size: 20px; font-weight: bold;margin-bottom: 30px;"><?php 
					if($feedback=="")
						echo "0";
					else
						echo number_format($feedback);
				 ?></p>
				<!-- <span style="font-size: 13px;font-weight: bold;">Tháng trước: 20</span> -->
			</div>
			<div class="right">
				<p>Tháng <?php echo $month; ?></p>
				<i class="fas fa-comments"></i>
				
			</div>
		</li>
		<?php $countuser=$this->countUser(); ?>
		<li class="car-items" style="background: #00bc8c;">
			<div class="left">
				<p style="font-size: 14px;font-weight: bold;">Users</p>
				<p style="font-size: 20px; font-weight: bold;margin-bottom: 30px;"><?php 
					if($countuser=="")
						echo "0";
					else
						echo number_format($countuser->tong);
				 ?></p>
				<!-- <span style="font-size: 13px;font-weight: bold;">Tháng trước: 5</span> -->
			</div>
			<div class="right">
				<p>Tháng <?php echo $month; ?></p>
				<i class="fas fa-user"></i>
				
			</div>
		</li>
	</ul>
</div>
<div class="chart">
	<canvas id="line-chart" style="width: 100%"></canvas>
	<!-- <script src="js/admin.js"></script> -->
</div>
<div class="chart">
	<canvas id="bar-chart" style="width: 100%;"></canvas>
</div>
<div class="backup" style="margin-left: 1rem;margin-top: 2rem;padding: .5rem">
	<h4>Backup hệ thống</h4>
	<p>Thao tác này sẽ sao chép toàn bộ database về máy của bạn. Trong trường hợp website có trục trặc, hoặc kẻ xấu tấn công!</p>
	<a href="index.php?controller=thongtinchung&action=backUp" class="btn btn-warning">Backup</a>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		new Chart(document.getElementById("line-chart"),{
		  type: 'bar',
		  data: {
		    labels: ['Tổng số sản phẩm','Tổng số đánh giá','Tổng số tài khoản'],
		    datasets: [{ 
		        data: [
						<?php if($totalpr=="")echo "0";
							else echo ($totalpr->tong);
						  ?>,
						<?php if($feedback=="")echo "0";
							else echo ($feedback);
						  ?>,
						<?php if($countuser=="")echo "0";
							else echo ($countuser->tong);
						  ?>
					],
		        label: "Tháng <?php echo $month; ?>",
		        backgroundColor: ["#ef6f6c","#f89a14","#00bc8c"],
		        fill: false
		      }
		    ]
		  },
		  options: {
		    title: {
		      display: true,
		      text: 'Đồ thị thông tin chung cửa hàng'
		    }
		  }
		});
	});
</script>

<?php 
	$lastMonth=$this->findLastMonth($month);
	$oldMonth=$this->findOldMonth($month);
	$presentMonth=$this->findPresentMonth($month);
 ?>
<script type="text/javascript">
	$(document).ready(function(){
		new Chart(document.getElementById("bar-chart"),{
		  type: 'line',
		  data: {
		    labels: ["Tháng <?php echo $month-2; ?>","Tháng <?php echo $month-1; ?>","Tháng <?php echo $month; ?>"],
		    datasets: [{ 
		        data: [
						<?php if($lastMonth=="")echo "0";
							else echo ($lastMonth->tong);
						  ?>,
						<?php if($oldMonth=="")echo "0";
							else echo ($oldMonth->tong);
						  ?>,
						<?php if($presentMonth=="")echo "0";
							else echo ($presentMonth->tong);
						  ?>
					],
		        label: ['Doanh thu cửa hàng VNĐ'],
		        backgroundColor: ["#ef6f6c","#f89a14","#00bc8c"],
		        fill: false
		      }
		    ]
		  },
		  options: {
		    title: {
		      display: true,
		      text: 'Đồ thị thông tin doanh thu theo tháng'
		    }
		  }
		});
	});
</script>