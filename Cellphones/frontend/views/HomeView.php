<!-- load file layout chung -->
<?php 
	$this->layoutPath="LayoutTrangChu.php";// phần đầu chứa các link css,js,...
 ?>
 <div class="Main">
			<div class="Dienthoai">
				<div class="title">
					<div class="left">
						<a href="index.php?controller=home&action=hot" style="color: black;">Sản phẩm nổi bật nhất</a>
					</div>
					<div class="right">

						<ul style="display: flex;">
							
								<?php 
                					include "controllers/NhasanxuatController.php";
                					$obj= new NhasanxuatController();
                					$obj->index();
          						?> 
							
							
						</ul>
					</div>		
				</div>
				<div class="danhmuc">
					<div class="khoi1">
						<i class="fas fa-bars"></i>
						<p>Danh mục</p>
					</div>
					<div class="khoi2" id="khoi2">
						<ul id="gia">
							<li><a href="index.php?controller=search&action=price3M">Dưới 3 triệu</a></li>
							<li><a href="index.php?controller=search&action=price3to6M">3->6 triệu</a></li>
							<li><a href="index.php?controller=search&action=price6to9M">6->9 triệu</a></li>
							<li><a href="index.php?controller=search&action=price9to12M">9->12 triệu</a></li>
							<li><a href="index.php?controller=search&action=price12M">Trên 12 triệu</a></li>
						</ul>
					</div>
				</div>
				<div class="content">
					<ul>
						<?php $hotProducts=$this->modelHotLoaisp(); ?>
              			<?php 
              				foreach ($hotProducts as $value):  ?>
						<li>
							<?php if(isset($value->photo)): ?>
								<a href="index.php?controller=phonedetail&id=<?php echo $value->id; ?>"><img src="../assets/upload/phone/<?php echo $value->photo;?>" alt=""></a>
							<?php endif; ?>
							
							<div class="sale"><?php echo "Giảm  ".$value->discount."%"; ?></div>
							<!-- đánh giá-->
							<a href="index.php?controller=home&action=checkOut&id=<?php echo $value->id ?>" class="btn btn-warning tragop">Đánh giá</a>
							<!-- / -->
							<a href="index.php?controller=phonedetail&id=<?php echo $value->id; ?>" style="font-size: 13px;color: black;font-weight: bold;margin-left: 12px;"><?php echo $value->name; ?></a>
							<p style="margin-bottom: 0;font-size: 13px;font-weight: bold;margin-left: 12px;margin-top: 12px;">
								<span style="color: #d70018;"><?php echo number_format($value->price-($value->price*($value->discount/100))); ?>&nbsp;₫</span>
								<span style="color: #716b6b;text-decoration: line-through;"><?php echo number_format($value->price); ?>&nbsp;₫</span>
							</p>
							<!-- Cart -->
							<a href="index.php?controller=cart&action=create&id=<?php echo $value->id?>" class="btn btn-outline-success" style="border-radius: 20px;width: 70%;position: absolute;bottom: 5px;left: 15%;">Mua</a>
							<!-- / -->
						</li>
						<?php endforeach; ?>	
					</ul>
					
				</div>
			</div>
			<div class="Dongho" >
				<div class="title">
					<div class="left">
						<a href="index.php?controller=home&action=hotdongho" style="color: black;">Đồng hồ thông minh</a>
					</div>
					<div class="right">
						<ul style="display: flex;">
							
							
							<?php 
            					$ob= new NhasanxuatController();
            					$ob->dongho();
      						?> 
						</ul>
					</div>		
				</div>
				<div class="danhmuc">
					<div class="khoi1">
						<i class="fas fa-bars"></i>
						<p>Danh mục</p>
					</div>
					<div class="khoi2" id="khoi2">
						<ul id="gia">
							<li><a href="index.php?controller=search&action=price3M">Dưới 3 triệu</a></li>
							<li><a href="index.php?controller=search&action=price3to6M">3->6 triệu</a></li>
							<li><a href="index.php?controller=search&action=price6to9M">6->9 triệu</a></li>
							<li><a href="index.php?controller=search&action=price9to12M">9->12 triệu</a></li>
							<li><a href="index.php?controller=search&action=price12M">Trên 12 triệu</a></li>
						</ul>
					</div>
				</div>
				<div class="content">
					<ul>
						<?php $hotWatch=$this->modelHotWatch(); ?>
						<?php foreach ($hotWatch as $value):  ?>
						<li>
							<a href="index.php?controller=phonedetail&id=<?php echo $value->id; ?>"><img src="../assets/upload/phone/<?php echo $value->photo;?>" alt=""></a>
							<div class="sale"><?php echo "Giảm  ".$value->discount."%"; ?></div>
							<!-- đánh giá-->
							<a href="index.php?controller=home&action=checkOut&id=<?php echo $value->id ?>" class="btn btn-warning tragop">Đánh giá</a>
							
							<!-- / -->
							<a href="index.php?controller=phonedetail&id=<?php echo $value->id; ?>" style="font-size: 13px;color: black;font-weight: bold;margin-left: 12px;"><?php echo $value->name; ?></a>
							<p style="margin-bottom: 0;font-size: 13px;font-weight: bold;margin-left: 12px;margin-top: 12px;">
								<span style="color: #d70018;"><?php echo number_format($value->price-($value->price*($value->discount/100))); ?>&nbsp;₫</span>
								<span style="color: #716b6b;text-decoration: line-through;"><?php echo number_format($value->price); ?>&nbsp;₫</span>
							</p>
							<!-- Cart -->
							<a href="index.php?controller=cart&action=create&id=<?php echo $value->id?>" class="btn btn-outline-success" style="border-radius: 20px;width: 70%;position: absolute;bottom: 5px;left: 15%;">Mua</a>
							<!-- / -->
						</li>

						<?php endforeach; ?>
					</ul>
					
				</div>
			</div>
			<div class="Amthanh">
				<div class="title">
					<div class="left">
						<a href="index.php?controller=home&action=hotamthanh" style="color: black;">Âm thanh</a>
					</div>
					<div class="right">
						<ul style="display: flex;">
							
							
							<?php 
            					$ob= new NhasanxuatController();
            					$ob->amthanh();
      						?> 

						</ul>
					</div>		
				</div>
				<div class="danhmuc">
					<div class="khoi1">
						<i class="fas fa-bars"></i>
						<p>Danh mục</p>
					</div>
					<div class="khoi2" id="khoi2">
						<ul id="gia">
							<li><a href="index.php?controller=search&action=price3M">Dưới 3 triệu</a></li>
							<li><a href="index.php?controller=search&action=price3to6M">3->6 triệu</a></li>
							<li><a href="index.php?controller=search&action=price6to9M">6->9 triệu</a></li>
							<li><a href="index.php?controller=search&action=price9to12M">9->12 triệu</a></li>
							<li><a href="index.php?controller=search&action=price12M">Trên 12 triệu</a></li>
						</ul>
					</div>
				</div>
				<div class="content">
					<ul>
						<?php $hot=$this->modelHotAmthanh(); ?>
						<?php foreach ($hot as $value):  ?>
						<li>
							<a href="index.php?controller=phonedetail&id=<?php echo $value->id; ?>"><img src="../assets/upload/phone/<?php echo $value->photo;?>" alt=""></a>
							<div class="sale"><?php echo "Giảm  ".$value->discount."%"; ?></div>
							<!-- đánh giá-->
							<a href="index.php?controller=home&action=checkOut&id=<?php echo $value->id ?>" class="btn btn-warning tragop">Đánh giá</a>
							
							<!-- / -->
							<a href="index.php?controller=phonedetail&id=<?php echo $value->id; ?>" style="font-size: 13px;color: black;font-weight: bold;margin-left: 12px;"><?php echo $value->name; ?></a>
							<p style="margin-bottom: 0;font-size: 13px;font-weight: bold;margin-left: 12px;margin-top: 12px;">
								<span style="color: #d70018;"><?php echo number_format($value->price-($value->price*($value->discount/100))); ?>&nbsp;₫</span>
								<span style="color: #716b6b;text-decoration: line-through;"><?php echo number_format($value->price); ?>&nbsp;₫</span>
							</p>
							<!-- Cart -->
							<a href="index.php?controller=cart&action=create&id=<?php echo $value->id?>" class="btn btn-outline-success" style="border-radius: 20px;width: 70%;position: absolute;bottom: 5px;left: 15%;">Mua</a>
							<!-- / -->
						</li>

						<?php endforeach; ?>
					</ul>
				
				</div>
			</div>
			<div class="Laptop">
				<div class="title">
					<div class="left">
						<a href="index.php?controller=home&action=hotlaptop" style="color: black;">Lap top</a>
					</div>
					<div class="right">
						<ul style="display: flex;">
							<?php 
            					$ob= new NhasanxuatController();
            					$ob->laptop();
      						?>
						</ul>
					</div>		
				</div>
				<div class="danhmuc">
					<div class="khoi1">
						<i class="fas fa-bars"></i>
						<p>Danh mục</p>
					</div>
					<div class="khoi2" id="khoi2">
						<ul id="gia">
							<li><a href="index.php?controller=search&action=price3M">Dưới 3 triệu</a></li>
							<li><a href="index.php?controller=search&action=price3to6M">3->6 triệu</a></li>
							<li><a href="index.php?controller=search&action=price6to9M">6->9 triệu</a></li>
							<li><a href="index.php?controller=search&action=price9to12M">9->12 triệu</a></li>
							<li><a href="index.php?controller=search&action=price12M">Trên 12 triệu</a></li>
						</ul>
					</div>
				</div>
				<div class="content">
					
					<ul>
						<?php $hotlaptop=$this->modelHotLaptop(); ?>
						<?php foreach ($hotlaptop as $value):  ?>
						<li>
							<a href="index.php?controller=phonedetail&id=<?php echo $value->id; ?>"><img src="../assets/upload/phone/<?php echo $value->photo;?>" alt=""></a>
							<div class="sale"><?php echo "Giảm  ".$value->discount."%"; ?></div>
							<!-- đánh giá-->
							<a href="index.php?controller=home&action=checkOut&id=<?php echo $value->id ?>" class="btn btn-warning tragop">Đánh giá</a>
							
							<!-- / -->
							<a href="index.php?controller=phonedetail&id=<?php echo $value->id; ?>" style="font-size: 13px;color: black;font-weight: bold;margin-left: 12px;"><?php echo $value->name; ?></a>
							<p style="margin-bottom: 0;font-size: 13px;font-weight: bold;margin-left: 12px;margin-top: 12px;">
								<span style="color: #d70018;"><?php echo number_format($value->price-($value->price*($value->discount/100))); ?>&nbsp;₫</span>
								<span style="color: #716b6b;text-decoration: line-through;"><?php echo number_format($value->price); ?>&nbsp;₫</span>
							</p>
							<!-- Cart -->
							<a href="index.php?controller=cart&action=create&id=<?php echo $value->id?>" class="btn btn-outline-success" style="border-radius: 20px;width: 70%;position: absolute;bottom: 5px;left: 15%;">Mua</a>
							<!-- / -->
						</li>

						<?php endforeach; ?>
					</ul>
				</div>
			</div>
			<div class="Phukien">
				<div class="title">
					<div class="left">
						<a href="index.php?controller=home&action=hotphukien" style="color: black;">Phụ kiện</a>
					</div>
					<div class="right">
						<ul style="display: flex;">
							<?php 
            					$ob= new NhasanxuatController();
            					$ob->phukien();
      						?>
						</ul>
					</div>		
				</div>
				<div class="danhmuc">
					<div class="khoi1">
						<i class="fas fa-bars"></i>
						<p>Danh mục</p>
					</div>
					<div class="khoi2" id="khoi2">
						<ul id="gia">
							<li><a href="index.php?controller=search&action=price3M">Dưới 3 triệu</a></li>
							<li><a href="index.php?controller=search&action=price3to6M">3->6 triệu</a></li>
							<li><a href="index.php?controller=search&action=price6to9M">6->9 triệu</a></li>
							<li><a href="index.php?controller=search&action=price9to12M">9->12 triệu</a></li>
							<li><a href="index.php?controller=search&action=price12M">Trên 12 triệu</a></li>
						</ul>
					</div>
				</div>
				<div class="content">
					<ul>
						<?php $hotlaptop=$this->modelHotPhukien(); ?>
						<?php foreach ($hotlaptop as $value):  ?>
						<li>
							<a href="index.php?controller=phonedetail&id=<?php echo $value->id; ?>"><img src="../assets/upload/phone/<?php echo $value->photo;?>" alt=""></a>
							<div class="sale"><?php echo "Giảm  ".$value->discount."%"; ?></div>
							<!-- đánh giá-->
							<a href="index.php?controller=home&action=checkOut&id=<?php echo $value->id ?>" class="btn btn-warning tragop">Đánh giá</a>
							
							<!-- / -->
							<a href="index.php?controller=phonedetail&id=<?php echo $value->id; ?>" style="font-size: 13px;color: black;font-weight: bold;margin-left: 12px;"><?php echo $value->name; ?></a>
							<p style="margin-bottom: 0;font-size: 13px;font-weight: bold;margin-left: 12px;margin-top: 12px;">
								<span style="color: #d70018;"><?php echo number_format($value->price-($value->price*($value->discount/100))); ?>&nbsp;₫</span>
								<span style="color: #716b6b;text-decoration: line-through;"><?php echo number_format($value->price); ?>&nbsp;₫</span>
							</p>
							<!-- Cart -->
							<a href="index.php?controller=cart&action=create&id=<?php echo $value->id?>" class="btn btn-outline-success" style="border-radius: 20px;width: 70%;position: absolute;bottom: 5px;left: 15%;">Mua</a>
							<!-- / -->
						</li>

						<?php endforeach; ?>
					</ul>
				</div>
			</div>
			<div class="Hangcu">
				<div class="title">
					<div class="left">
						<a href="index.php?controller=home&action=hothangcu" style="color: black;">Hàng cũ</a>
					</div>
					<div class="right">
						<ul style="display: flex;">
							
							<?php 
            					$ob= new NhasanxuatController();
            					$ob->hangcu();
      						?>
						</ul>
					</div>		
				</div>
				<div class="danhmuc">
					<div class="khoi1">
						<i class="fas fa-bars"></i>
						<p>Danh mục</p>
					</div>
					<div class="khoi2" id="khoi2">
						<ul id="gia">
							<li><a href="index.php?controller=search&action=price3M">Dưới 3 triệu</a></li>
							<li><a href="index.php?controller=search&action=price3to6M">3->6 triệu</a></li>
							<li><a href="index.php?controller=search&action=price6to9M">6->9 triệu</a></li>
							<li><a href="index.php?controller=search&action=price9to12M">9->12 triệu</a></li>
							<li><a href="index.php?controller=search&action=price12M">Trên 12 triệu</a></li>
						</ul>
					</div>
				</div>
				<div class="content">
					<ul>
						<?php $hotlaptop=$this->modelHotHangcu(); ?>
							<?php foreach ($hotlaptop as $value):  ?>
							<li>
								
								<a href="index.php?controller=hangcu&&action=detail&id=<?php echo $value->id; ?>"><img src="../assets/upload/hangcu/<?php echo $value->photo;?>" alt=""></a>
								<div class="sale"><?php echo "Giảm  ".$value->discount."%"; ?></div>
								<!-- đánh giá-->
								<a href="index.php?controller=home&action=checkOut&id=<?php echo $value->id ?>" class="btn btn-warning tragop">Đánh giá</a>
							
								<!-- / -->
								<a href="index.php?controller=hangcu&&action=detail&id=<?php echo $value->id; ?>" style="font-size: 13px;color: black;font-weight: bold;margin-left: 12px;"><?php echo $value->name; ?></a>
								<p style="margin-bottom: 0;font-size: 13px;font-weight: bold;margin-left: 12px;margin-top: 12px;">
									<span style="color: #d70018;"><?php echo number_format($value->price-($value->price*($value->discount/100))); ?>&nbsp;₫</span>
									<span style="color: #716b6b;text-decoration: line-through;"><?php echo number_format($value->price); ?>&nbsp;₫</span>
								</p>
								<p style="font-size: 12px;margin-left: 12px;margin-top: 10px;">Liên hệ với chúng tôi để biết giá sản phẩm</p>
							</li>

							<?php endforeach; ?>
					</ul>
					
				</div>
			</div>

		</div>