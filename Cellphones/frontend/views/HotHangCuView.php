<!-- load file layout chung -->
<?php 
	$this->layoutPath="LayoutTrangTrong.php";
 ?>
<div class="col-md-10 right">
	<?php $findNsx=$this->findNsx(); ?>
	<h3 style="font-weight: bold;"><?php 
		if($findNsx=="")
			echo "Sản phẩm nổi bật";
		else
			echo $findNsx->name;
	 ?></h3>
	<div class="title">
		<ul>
			<?php $hotSpNsx=$this->hotSpNsx(); ?>
			<?php foreach ($hotSpNsx as $value): ?>
				<li><a href="index.php?controller=phonedetail&id=<?php echo $value->id; ?>" style="width: 400px"><?php echo $value->name; ?></a></li>
			<?php endforeach; ?>
		</ul>
	</div>
	<div class="short-info">
		<span style="color: #e72124">Điện thoại</span> iPhone chính hãng VN/A bảo hành chính hãng 1 năm tại các trung tâm bảo hành uỷ quyền Apple Việt nam, đổi mới 30 ngày đầu tiên tại CellphoneS. CellphoneS hiện là đại lý bán lẻ uỷ quyền iPhone chính hãng VN/A của Apple Việt Nam do Viettel phân phối.
		<span style="color: #e72124">Thu cũ đổi mới iPhone - Giá thu tốt nhất thị trường</span>
	</div>
	<div class="row bonus">
		<div class="col-md-8 gia">
			<span style="font-weight: bold;">Chọn mức giá: </span>
			<ul style="display: flex; margin-left: 5px;">
				<?php $id_nsx=isset($_GET["id"])?$_GET["id"]:1 ?>
				<?php $category=isset($_GET["category"])?$_GET["category"]:"" ?>
				<li>
					<a href="index.php?controller=search&action=price3M&id=<?php echo $id_nsx; ?>&category=<?php echo $category ?>">Dưới 3 triệu</a>
				</li>
				<li>
					<a href="index.php?controller=search&action=price3to6M&id=<?php echo $id_nsx; ?>&category=<?php echo $category ?>">3->6 triệu</a>
				</li>
				<li>
					<a href="index.php?controller=search&action=price6to9M&id=<?php echo $id_nsx; ?>&category=<?php echo $category ?>">6->9 triệu</a>
				</li>
				<li>
					<a href="index.php?controller=search&action=price9to12M&id=<?php echo $id_nsx; ?>&category=<?php echo $category ?>">9->12 triệu</a>
				</li>
				<li>
					<a href="index.php?controller=search&action=price12M&id=<?php echo $id_nsx; ?>&category=<?php echo $category ?>">Trên 12 triệu</a>
				</li>
			</ul>
		</div>
		<div class="col-md-4 sort">
			<span style="font-weight: bold;">Săp xếp theo giá: </span>
			<ul style="display: flex; margin-left: 5px;">
				<li><a href="index.php?controller=search&action=priceUp&id=<?php echo $id_nsx; ?>&category=<?php echo $category ?>">Tăng dần</a></li>
				<li><a href="index.php?controller=search&action=priceDown&id=<?php echo $id_nsx; ?>&category=<?php echo $category ?>">Giảm dần</a></li>
			</ul>
		</div>
	</div>
	<div class="danhmuc">
		<ul class="col-md-12">
			<?php 
				$product=$this->modelHangCu();
			 ?>
			 <?php 
					foreach ($product as $value):  ?>
			<li>
				<?php if(isset($value->photo)): ?>
				<a href="index.php?controller=hangcu&action=detail&id=<?php echo $value->id; ?>"><img src="../assets/upload/hangcu/<?php echo $value->photo;?>" alt="" style="width: 100%;"></a>
			<?php endif; ?>
				<div class="sale"><?php echo "Giảm  ".$value->discount."%"; ?></div>
				
				<!-- đánh giá-->
					<a href="index.php?controller=home&action=checkOut&id=<?php echo $value->id ?>" class="btn btn-warning tragop">Đánh giá</a>
				<!-- / -->

				<div class="tensp" style="height: 40px;padding-left: 5px;">
					<a href="index.php?controller=hangcu&action=detail&id=<?php echo $value->id; ?>" style="font-size: 13px;font-weight: 700;"><?php echo $value->name; ?></a>
				</div>
				<p style="font-size: 13px;padding-left: 5px;padding-top: 15px;">
					<span style="color: #e11b1e;"><?php echo number_format($value->price-($value->price*($value->discount/100))); ?>&nbsp;₫</span>
					<span style="text-decoration: line-through;color: #716b6b;"><?php echo number_format($value->price); ?>&nbsp;₫</span>
				</p>
				<div class="danhgia">
					<?php $avg=$this->modelGetStarAvg($value->id); ?>
					<?php foreach ($avg as $key):?>
					<p><?php echo $var = floatval(preg_replace('/[^\d.]/', '', $key->avg));?><i class="fa fa-star checked"></i></p>
					
					
					<p style="position: absolute;right: 16px;bottom: 15%;"><?php echo $key->count; ?> đánh giá</p>
					<?php endforeach; ?>
				</div>
				<!-- Cart -->
				<p style="font-size: 12px;margin-left: 12px;margin-top: 10px;">Liên hệ với chúng tôi để biết giá sản phẩm</p>
				<!-- / -->
			</li>
		<?php endforeach; ?>
		</ul>
	</div>

	<div class="col-md-6" style="padding-top: 12px; clear: left;">
		<ul class="pagination">
			<li class="page-item"><a href="#" class="page-link">1</a></li>
			<li class="page-item"><a href="#" class="page-link">2</a></li>
			<li class="page-item"><a href="#" class="page-link">3</a></li>
		</ul>
	</div>
	<div class="long-info" >
		<h4 style="font-weight: 700">Thương hiệu điện thoại Apple – iPhone</h4>
		<p style="font-size: 13px">iPhone là thương hiệu smartphone nổi tiếng đến từ công ty Apple bên cạnh các thương hiệu Samsung, Xiaomi, Huawei, Oppo... Apple là công ty được thành lập vào ngày 1/4/1975 tại Mỹ bởi Steve Jobs. CEO hiện tại là Tim Cook. Apple giới thiệu mẫu điện thoại iPhone đầu tiên vào ngày 29/1/2007. Chiếc iPhone đầu tiên này được đánh giá là bước đột phá trong thế giới smartphone lúc đó. Với thiết kế tinh tế, nhỏ gọn, sử dụng hệ điều hành được thiết kế riêng, màn hình cảm ứng hiện đại kèm theo nhiều tính năng nổi bật. Mẫu iPhone đầu tiên này đã đặt nền móng giúp Apple tiếp tục hoàn thiện các tính năng trên mẫu sản phẩm nổi bật nhất của mình</p>
		<img src="../assets/imgs/info.jpg" alt="" style="margin-top: 20px;margin-bottom: 20px;">
		<div class="chean">
			<p>Xem thêm</p>
		</div>
		<div class="an">

			<h4 style="font-weight: 700">Các mẫu điện thoại iPhone đang được bán chính hãng tại Việt Nam</h4>
			<p style="font-size: 13px">
			Không như Android, điện thoại iPhone chính hãng tại Việt Nam được phân ra khá nhiều loại khác nhau như: iPhone chính hãng, iPhone xách tay, iPhone đổi bảo hành,…
			<br>
			Cụ thể:
			<br>
			- iPhone chính hãng là hàng chính hãng của Apple, được bán tại Việt Nam với mã VN/A thông qua các nhà phân phối, được bảo hành 12 tháng.
			<br>
			- iPhone xách tay chất lượng tương tự hàng chính hãng, được xách tay từ nước ngoài về, đa số không có bảo hành.
			<br>
			- iPhone đổi bảo hành chất lượng như hàng chính hãng, được sản xuất mới hoàn toàn và dành riêng để đổi bảo hành cho khách hàng theo chính sách 1 đổi 1 của Apple. Thời gian bảo hành tính theo thời gian bảo hành còn lại của sản phẩm lỗi trước đó.
			<br>
			Từ lúc đẫu điện thoại iPhone đầu tiên được ra mắt cho đến nay Apple đã đều đặn giới thiệu các mẫu smartphone mới mỗi năm. Và những người yêu thích công nghệ luôn quan dành nhiều sự quan tâm cho các mẫu điện thoại mới ra dẫn đầu xu hướng. Với cấu hình và tính năng ngày càng. Bên cạnh đó, mức giá của các mẫu điện thoại iPhone có thể trả dài từ phân khúc giá rẻ đến cao cấp. Với nhiều mức giá khác nhau cho phép Apple tiếp cận nhiều đối tượng khách hàng hơn thay vì chỉ tập trung vào phân khúc smartphone cao cấp
		</p>
		<img src="imgs/info2.jpg" alt="" style="margin-top: 20px;margin-bottom: 20px;">
		</div>
	</div>
</div>