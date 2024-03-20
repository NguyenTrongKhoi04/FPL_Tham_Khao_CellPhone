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
						<li><img src="../assets/upload/phone/<?php echo $value->photo;?>" alt=""></li>
						<li><img src="../assets/upload/phone/<?php echo $value->photo1;?>" alt=""></li>
						<li><img src="../assets/upload/phone/<?php echo $value->photo2;?>" alt=""></li>
						<li><img src="../assets/upload/phone/<?php echo $value->photo3;?>" alt=""></li>
						<li><img src="../assets/upload/phone/<?php echo $value->photo4;?>" alt=""></li>
					</ul>
				</div>
				<div class="anhphu">
					<ul>
						<li><img src="../assets/upload/phone/<?php echo $value->photo;?>" alt=""></li>
						<li><img src="../assets/upload/phone/<?php echo $value->photo1;?>" alt=""></li>
						<li><img src="../assets/upload/phone/<?php echo $value->photo2;?>" alt=""></li>
						<li><img src="../assets/upload/phone/<?php echo $value->photo3;?>" alt=""></li>
						<li><img src="../assets/upload/phone/<?php echo $value->photo4;?>" alt=""></li>
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
					<?php $Gia_Sp=$value->price-($value->price*($value->discount/100)); ?>
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
							<a href="index.php?controller=phonedetail&action=checkOut&category=phukien&id=<?php echo $value->id ?>&star=1" class="badge badge-info">Đánh giá</a>
							&nbsp;
							<span class="badge badge-warning"><?php echo $this->modelGetStar($value->id,1); ?> votes</span>
						</p>
						<p>
							<a href="index.php?controller=phonedetail&action=checkOut&category=phukien&id=<?php echo $value->id ?>&star=2" class="badge badge-info">Đánh giá</a>
							&nbsp;
							<span class="badge badge-warning"><?php echo $this->modelGetStar($value->id,2); ?> votes</span>
						</p>
						<p>
							<a href="index.php?controller=phonedetail&action=checkOut&category=phukien&id=<?php echo $value->id ?>&star=3" class="badge badge-info">Đánh giá</a>
							&nbsp;
							<span class="badge badge-warning"><?php echo $this->modelGetStar($value->id,3); ?> votes</span>
						</p>
						<p>
							<a href="index.php?controller=phonedetail&action=checkOut&category=phukien&id=<?php echo $value->id ?>&star=4" class="badge badge-info">Đánh giá</a>
							&nbsp;
							<span class="badge badge-warning"><?php echo $this->modelGetStar($value->id,4); ?> votes</span>
						</p>
						<p>
							<a href="index.php?controller=phonedetail&action=checkOut&category=phukien&id=<?php echo $value->id ?>&star=5" class="badge badge-info">Đánh giá</a>
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
					<a href="index.php?controller=cart&action=create&id=<?php echo $value->id?>">
						<p style="font-size: 18px; font-weight: bold;">Mua ngay</p>
						<p>Giao hàng tận nơi,giá tốt,an toàn</p>
					</a>
					
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
			<h3>Các sản phẩm cùng giá khác</h3>
		</div>	
	</div>
<div class="container sanphamcunggia">
	<div class="row">
		<?php $spcunggia=$this->Sanphancunggia($Gia_Sp); ?>
		<?php foreach($spcunggia as $value): ?>
		<div class="col-md-3 all">
			<?php if(isset($value->photo)): ?>
				<a href="index.php?controller=phonedetail&id=<?php echo $value->id; ?>"><img src="../assets/upload/phone/<?php echo $value->photo;?>" alt="" style="width: 100%;"></a>
			<?php endif; ?>
			<div class="sale"><?php echo "Giảm  ".$value->discount."%"; ?></div>	
			<!-- đánh giá-->
			<a href="index.php?controller=home&action=checkOut&id=<?php echo $value->id ?>" class="btn btn-warning tragop">Đánh giá</a>
			<!-- / -->
			<div class="tensp">
				<a title="<?php echo $value->name; ?>" href="index.php?controller=phonedetail&id=<?php echo $value->id; ?>"><?php echo $value->name; ?></a>
			</div>
			<p>
				<span style="color: #e11b1e;"><?php echo number_format($value->price-($value->price*($value->discount/100))); ?>&nbsp;₫</span>
				<span style="text-decoration: line-through;color: #716b6b;"><?php echo number_format($value->price); ?>&nbsp;₫</span>
			</p>
			<div class="danhgia">
				<?php $avg=$this->modelGetStarAvg_Count($value->id); ?>
				<?php foreach ($avg as $key):?>
					<p><?php echo $var = floatval(preg_replace('/[^\d.]/', '', $key->avg));?><i class="fa fa-star checked" style="color: #ffc107;"></i></p>
					<p style="text-align: right;"><?php echo $key->count ?> đánh giá</p>
				<?php endforeach; ?>
			</div>
			<!-- Cart -->
			<a href="index.php?controller=cart&action=create&id=<?php echo $value->id;?>" class="btn btn-outline-success buy">Mua</a>
			<!-- / -->
		</div>
		<?php endforeach; ?>
	</div>
</div>

<div class="container binhluan" style="margin-top: 2rem;">
	<?php $id=isset($_GET['id'])?$_GET['id']:''; ?>
	<form method="post" action="index.php?controller=comment&id_product=<?php echo $id; ?>">
	   <div class="form-group">
	   	<?php $nameUser=$this->findUserLogin(); ?>
	    <?php if(!empty($nameUser))
	   	{
	   		echo "<h5>Bình luận từ: $nameUser->first_name - $nameUser->last_name</h5>";
	   	}
	   	else
	   	{
	   	 	echo "<h5>Vui lòng đăng nhập để bình luận</h5>";
	   	}
		?>
	</div>

	<div class="form-group">
	   <label for="textArea">Nhập bình luận của bạn</label>
	   <textarea class="form-control" id="textArea" rows="3" name="comment"></textarea>
	</div>
	  
	  <button type="submit" class="btn btn-primary">Thêm bình luận</button>
	</form>
</div>

<div class="container mt-5" >
	<h5>Những comment sản phẩm</h5>
	<?php $findComment=$this->findComment(); ?>
	<?php foreach($findComment as $value): ?>
		<?php $findUser=$this->findUser($value->id_user); ?>
	<div class="row" style="border-bottom: 1px solid black; margin-bottom: .2rem;">
		<div class="col-md-2" style="background: #ccc;padding: .5rem;">
			<img src="../assets/upload/users/<?php echo $findUser->picture;?>" alt="" width="50">
			<span style="font-weight: bold;"><?php echo $findUser->first_name.' '.$findUser->last_name; ?></span>
		</div>
		<div class="col-md-10" style="background: #f1f1f1;padding: .5rem;">
			<h6><?php echo $value->comment; ?></h6>
		</div>
	</div>
<?php endforeach; ?>
</div>