<!-- load file layout chung -->
<?php 
	$this->layoutPath="LayoutTrangChiTiet.php";
 ?>
<?php 
	$product=$this->detailProduct();
 ?>
 <style>
 	.anh img{width: 100%;}
 </style>
<?php foreach ($product as $value): ?>
<div class="container-fluid Main">
		<div class="col-md-12 chidan">
			<ul>
				<li>Home</li>
				<i class="fas fa-chevron-right"></i>
				<?php $action=isset($_GET['action'])?$_GET['action']:"" ?>
				<li>
					<?php if($action=='')echo 'Điện thoại' ?>
					<?php if($action=='phukiendetail')echo 'Phụ kiện' ?>
					<?php if($action=='donghodetail')echo 'Đồng hồ' ?>
					<?php if($action=='amthanhdetail')echo 'Âm thanh' ?>
					<?php if($action=='laptopdetail')echo 'Lap top' ?>
				</li>
				<i class="fas fa-chevron-right"></i>
				<li><?php echo $value->name; ?></li>
			</ul>
		</div>
		<div class="tensp">
			<h3><?php echo $value->name; ?></h3>
			<hr style="margin: 0;background: #eeeeee;">
		</div>
		<div class="row main">
			<div class="col-md-4 anh">
				<div class="anhchinh">
					<ul>
						<li><img src="../assets/upload/hangcu/<?php echo $value->photo;?>" alt=""></li>
						<li><img src="../assets/upload/hangcu/<?php echo $value->photo1;?>" alt=""></li>
						<li><img src="../assets/upload/hangcu/<?php echo $value->photo2;?>" alt=""></li>
						<li><img src="../assets/upload/hangcu/<?php echo $value->photo3;?>" alt=""></li>
						<li><img src="../assets/upload/hangcu/<?php echo $value->photo4;?>" alt=""></li>
					</ul>
				</div>
				<div class="anhphu">
					<ul>
						<li><img src="../assets/upload/hangcu/<?php echo $value->photo;?>" alt=""></li>
						<li><img src="../assets/upload/hangcu/<?php echo $value->photo1;?>" alt=""></li>
						<li><img src="../assets/upload/hangcu/<?php echo $value->photo2;?>" alt=""></li>
						<li><img src="../assets/upload/hangcu/<?php echo $value->photo3;?>" alt=""></li>
						<li><img src="../assets/upload/hangcu/<?php echo $value->photo4;?>" alt=""></li>
					</ul>
				</div>
			</div>
			<div class="col-md-4 gia">
				<div class="dong0">
					<p>Mua từ: </p>
					<img src="../assets/imgs/mainlogo.jpg" style="width: 100px;" alt="">
				</div>
				<div class="dong1">
					<span style="color: #eb1c24;margin-right: 8px;font-size: 20px;"><?php echo number_format($value->price-($value->price*($value->discount/100))); ?>&nbsp;₫</span>
					<p>Giá niêm yết: <span><?php echo number_format($value->price); ?>&nbsp;₫</span></p>
					<div class="tragop">Trả góp 0%</div>
				</div>
				<div class="dong2">
					<ul>
						<li><a href="#">
							<p>Offline</p>
							<p style="color: #eb1c24;font-weight: bold;"><?php echo number_format($value->price-($value->price*($value->discount/100))); ?>&nbsp;₫</p>
						</a></li>
						<li><a href="#">
							<p>ATM <span style="color: #eb1c24;"><i class="fas fa-long-arrow-alt-down"></i>8%</span></p>
							<p style="color: #eb1c24;font-weight: bold;"><?php 
								$price=$value->price-($value->price*($value->discount/100));
								$price=$price-(($price*8)/100);
								echo number_format($price);
							 ?>&nbsp;₫</p>
						</a></li>
						<li><a href="#">
							<p>Mono <span style="color: #eb1c24;"><i class="fas fa-long-arrow-alt-down"></i>4%</span></p>
							<p style="color: #eb1c24;font-weight: bold;"><?php 
								$price=$value->price-($value->price*($value->discount/100));
								$price=$price-(($price*4)/100);
								echo number_format($price);
							 ?>&nbsp;₫</p>
						</a></li>
					</ul>
				</div>
				<div class="dong3">
					<p style="color:#eb1c24; ">Trả góp 0%:</p>
					<p style="font-size: 13px;">Trả góp lãi suất 0% với Home Credit. Trả trước 50%, kỳ hạn 8 tháng (Áp dụng trên GIÁ NIÊM YẾT, không áp dụng cùng các khuyến mại khác)</p>
					
				</div>
				<div class="row dong4">
					<div class="col-6">
						<p><i class="fas fa-star"></i></p>
						<p>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
						</p>
						<p>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
						</p>
						<p>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
						</p>
						<p>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
						</p>
					</div>
					
					<div class="col-6" style="text-align: right;">
						<p>
							<a href="index.php?controller=hangcu&action=checkOut&id=<?php echo $value->id ?>&star=1" class="badge badge-info">Đánh giá</a>
							&nbsp;
							<span class="badge badge-warning"><?php echo $this->modelGetStar($value->id,1); ?> votes</span>
						</p>
						<p>
							<a href="index.php?controller=hangcu&action=checkOut&id=<?php echo $value->id ?>&star=2" class="badge badge-info">Đánh giá</a>
							&nbsp;
							<span class="badge badge-warning"><?php echo $this->modelGetStar($value->id,2); ?> votes</span>
						</p>
						<p>
							<a href="index.php?controller=hangcu&action=checkOut&id=<?php echo $value->id ?>&star=3" class="badge badge-info">Đánh giá</a>
							&nbsp;
							<span class="badge badge-warning"><?php echo $this->modelGetStar($value->id,3); ?> votes</span>
						</p>
						<p>
							<a href="index.php?controller=hangcu&action=checkOut&id=<?php echo $value->id ?>&star=4" class="badge badge-info">Đánh giá</a>
							&nbsp;
							<span class="badge badge-warning"><?php echo $this->modelGetStar($value->id,4); ?> votes</span>
						</p>
						<p>
							<a href="index.php?controller=hangcu&action=checkOut&id=<?php echo $value->id ?>&star=5" class="badge badge-info">Đánh giá</a>
							&nbsp;
							<span class="badge badge-warning"><?php echo $this->modelGetStar($value->id,5); ?> votes</span>
						</p>
					</div>
					<script>
						
						<?php if(isset($_GET["message"]) && $_GET["message"]="Success")
								{
									echo "alert('Bạn đã đánh giá thành công')";
								}
						 ?>
					</script>
				</div>
				<div class="col-md-12 dong5 star">
					<?php $avg=$this->modelGetStarAvg($value->id); ?>
					<?php foreach ($avg as $key):?>
					<h5><?php echo $var = floatval(preg_replace('/[^\d.]/', '', $key->avg));?><i class="fas fa-star"></i></h5>
					<?php endforeach; ?>
				</div>
				<div class="muangay">
					<?php if($_GET['controller']=='hangcu'): ?>
						<a href="#"><p style="font-size: 18px; font-weight: bold;">Liên hệ với cửa hàng</p></a>
						<p>Để nhận được ưu đãi tốt nhất</p>
					<?php else: ?>
						<a href="index.php?controller=cart&action=create&id=<?php echo $value->id?>">
							<p style="font-size: 18px; font-weight: bold;">Mua ngay</p>
							<p>Giao hàng tận nơi,giá tốt,an toàn</p>
						</a>
					<?php endif; ?>
					
				</div>
			</div>
			<div class="col-md-4"  style="padding-left: 3%;">
				<h5>THÔNG SỐ KỸ THUẬT</h5>
				<?php 
					$thongso=$this->detailThongso($value->id);
 				?>
 				
				<table class="thongso table">
					  <thead class="thead-light">
					    <tr>
					      
					      <th scope="col">Mục tiêu</th>
					      <th scope="col">Thông số</th>
					    
					    </tr>
					  </thead>
					  <tbody>
					  	<?php foreach ($thongso as $rows): ?>
					    <tr>
					      <td>Hãng sản xuất</td>
					      <td><?php echo $rows->hang; ?></td>
					    </tr>
					    <tr>
					      <td>Kích thước</td>
					      <td><?php echo $rows->kichthuoc; ?></td>
					    </tr>
					    <tr>
					      <td>Trọng lượng</td>
					      <td><?php echo $rows->trongluong; ?></td>
					    </tr>
					    <tr>
					      <td>RAM</td>
					      <td><?php echo $rows->ram; ?> GB</td>
					    </tr>
					    <tr>
					      <td>ROM</td>
					      <td><?php echo $rows->rom; ?> GB</td>
					    </tr>
					    <tr>
					      <td>Hệ điều hành</td>
					      <td><?php echo $rows->hedieuhanh; ?></td>
					    </tr>
					    <tr>
					      <td>Loại màn hình</td>
					      <td><?php echo $rows->loaiman; ?></td>
					    </tr>
					    <tr>
					      <td>Độ phân giải</td>
					      <td><?php echo $rows->dophangiai; ?> pixels</td>
					    </tr>
						<?php endforeach; ?>
					  </tbody>
					</table>
			</div>
		</div>
			<div class="description row">
				<div class="col-md-8">
					<p style="color:#eb1c24; ">Mô tả sản phẩm</p>
					<p style="font-size: 13px;"><?php echo $value->description; ?></p>
				</div>
<?php endforeach; ?>
				<div class="col-md-4 cuahang">
					<div class="socuahang">
						<div class="title"><p>Số cửa hàng tại Hà Nội</p></div>
						<ul>
							<li><a href="#">300 Cầu Giấy</a></li>
							<li><a href="#">299 Giảng Võ</a></li>
							<li><a href="#">10 Đê La Thành</a></li>
							<li><a href="#">90 Lê Thanh Nghị</a></li>
							<li><a href="#">1 Nguyễn Văn Cừ</a></li>
						</ul>
					</div>
					<div class="tinhtrang">
						<div class="title"><p>Tình trạng</p></div>
						<p style="font-size: 13px;padding: 10px;color: #716b6b;">Mới, đầy đủ phụ kiện từ nhà sản xuất</p>
						
					</div>
					<div class="hopbaogom">
						<div class="title"><p>Hộp bao gồm</p></div>
						<ul>
							<li>-Máy</li>
							<li>-Sạc 5W</li>
							<li>-Cáp lightning</li>
							<li>-Tai nghe</li>
							<li>-Que lấy sim</li>
							<li>-Hướng dẫn sử dụng</li>
						</ul>
					</div>
					<div class="baohanh">
						<div class="title"><p>Bảo hành</p></div>
						<p style="font-size: 13px;padding: 10px;color: #716b6b;">
							Bảo hành chính hãng 12 tháng tại trung tâm bảo hành của Apple Việt Nam. Đổi mới trong 30 ngày tại CellphoneS nếu có lỗi nhà sản xuất
						</p>
					</div>
				</div>
			</div>
		</div>	
	</div>