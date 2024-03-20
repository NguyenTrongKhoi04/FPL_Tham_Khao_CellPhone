<div class="Menutop" style="position: fixed;width: 100%;top: 0;z-index: 3">
			<div class="col-md-4 search">
				<div class="background"  style="width: 360px;display: flex;">
					<ul style="display: flex;">
						<li>
							<a href="index.php"><img src="../assets/imgs/logo.jpg" alt="" style="margin: 7px 7px;"></a>
						</li>
						<li style="width: 100px;">
							<a href="index.php">
							<img src="../assets/imgs/mainlogo.jpg" class="mainlogo" alt="">
							</a>
						</li>
						<li style="position: relative;"> 
							<input type="text" placeholder="Tìm kiếm" class="inputserach" onkeyup="smartSearch();" id="key">

							<div class="divsearch" id="divsearch">
								<ul>
									
								</ul>
							</div>	

						</li>
						<script type="text/javascript">
							function smartSearch()
							{
								var key=document.getElementById('key').value;
						          if(key!="")
						          {
						            document.getElementById('divsearch').setAttribute("style","display:block;");
						            //---
						            $.ajax({
						              url: "index.php?controller=search&action=smartSearch&key="+key,
						              success: function( result ) {
						                $( "#divsearch ul" ).empty();
						                $( "#divsearch ul" ).append(result);
						              }
						            });

						          }
						          else
						          {
						            document.getElementById('divsearch').setAttribute("style","display:none;");
						          }
							}
						</script>
						<li>
							<div class="smart-search" style="cursor: pointer;">
								<i class="fas fa-search" style="height: 33px;padding-top: 7px"></i>
							</div>
							<script>
								$(document).ready(function(){
									$('.smart-search').click(function(){
										var value=$('#key').val();
										if(value!="")
										{
											window.location.href = 'index.php?controller=search&action=SearchDanhMuc&key='+value;
										}
										else
										{
											alert("Hãy nhập thông tin tìm kiếm");
										}
									});
									$('#key').keypress(function(event) {
									if (event.keyCode == 13 || event.which == 13) {
									        var value=$('#key').val();
											if(value!="")
											{
												window.location.href = 'index.php?controller=search&action=SearchDanhMuc&key='+value;
											}
											else
											{
												alert("Hãy nhập thông tin tìm kiếm");
											}      
									    }
									});
								});
							</script>	
						</li>
					</ul>
				</div>	
			</div>
			<div class="col-md-8 menu">
				<ul style="display: flex;">
						<li class="phone">
							<div class="title">
								<a href="#">
								<i class="fas fa-mobile-alt" style="font-size: 18px"></i>
								<br>
								<p>Điện thoại</p>
								</a>
							</div>
							<div class="dienthoai" >
								<ul style="display: inline-block;">
									<?php 
										include "controllers/HeaderController.php"; 
										$oj=new HeaderController();
										$result=$oj->ListPhone();
									?>
									<?php foreach ($result as $value):?>
										<li ><a href="index.php?controller=phone&id=<?php echo $value->id ?>&category=dienthoai"><?php echo $value->name ?></a></li>
									<?php endforeach; ?>
								</ul>
							</div>						
						</li>
						<li class="phukien">
							<div class="title">
							<a href="#">
							<i class="fas fa-plug" style="font-size: 18px"></i>
							<br>
							<p>Phụ kiện</p>
							</a>
						</div>
							<div class="phukien-plus" >
								<ul style="display: inline-block;">
									<?php 
										
										$oj=new HeaderController();
										$result=$oj->ListPhukien();
									?>
									<?php foreach ($result as $value):?>
										<li ><a href="index.php?controller=phukien&id=<?php echo $value->id ?>&category=phukien"><?php echo $value->name ?></a></li>
									<?php endforeach; ?>
								</ul >
								
							</div>
						</li>
					
					
						<li class="dongho">
							<div class="title">
							<a href="#" >
							<i class="fas fa-clock" style="font-size: 18px"></i>
							<br>
							<p>Đồng hồ</p>
							</a>
							</div>
							<div class="dongho-plus" >
								<ul style="display: inline-block;">
									<?php 
										$oj=new HeaderController();
										$result=$oj->ListDongho();
									?>
									<?php foreach ($result as $value):?>
										<li ><a href="index.php?controller=dongho&id=<?php echo $value->id ?>&category=dongho"><?php echo $value->name ?></a></li>
									<?php endforeach; ?>
									
								</ul>
								
							</div>
						</li>
					
					
						<li class="amthanh">
							<div class="title">
							<a href="#" >
							<i class="fas fa-music" style="font-size: 18px"></i>
							<br>
							<p>Âm thanh</p>
							</a>
						</div>
							<div class="amthanh-plus" >
								<ul style="display: inline-block;">
									<?php 
										$oj=new HeaderController();
										$result=$oj->ListAmthanh();
									?>
									<?php foreach ($result as $value):?>
										<li ><a href="index.php?controller=amthanh&id=<?php echo $value->id ?>&category=amthanh"><?php echo $value->name ?></a></li>
									<?php endforeach; ?>
								</ul>
							</div>
						</li>
					
					
						<li class="laptop">
							<div class="title">
							<a href="#" >
							<i class="fas fa-laptop" style="font-size: 18px"></i>
							<br>
							<p>Laptop</p>
							</a>
						</div>
							<div class="laptop-plus" >
								<ul style="display: inline-block;">
									<?php 
										$oj=new HeaderController();
										$result=$oj->ListLaptop();
									?>
									<?php foreach ($result as $value):?>
										<li ><a href="index.php?controller=laptop&id=<?php echo $value->id ?>&category=laptop"><?php echo $value->name ?></a></li>
									<?php endforeach; ?>
								</ul>
							</div>
						</li>
					
					
					
						<li class="simthe">
							<div class="title">
							<a href="#" >
							<i class="fas fa-sim-card" style="font-size: 18px;color: red"></i>
							<br>
							<p>Sim thẻ</p>
							</a>
						</div>
							<div class="simthe-plus" >
								<ul>
									<li><a href="#">Thẻ cào</a></li>
									<li><a href="#">Dịch vụ sim</a></li>
								</ul>
							</div>
						</li>
				
					
						<li class="hangcu">
							<div class="title">
							<a href="#" >
							<i class="fas fa-sync-alt" style="font-size: 18px;"></i>
							<br>
							<p>Hàng cũ</p>
							</a>
						</div>
							<div class="hangcu-plus" >
								<ul style="display: inline-block;">
									<?php 
										$oj=new HeaderController();
										$result=$oj->ListHangcu();
									?>
									<?php foreach ($result as $value):?>
										<li ><a href="index.php?controller=hangcu&id=<?php echo $value->id ?>"><?php echo $value->name ?></a></li>
									<?php endforeach; ?>
								</ul>
								
							</div>
						</li>
					

					
						<li class="tragop">
							<div class="title">
							<a href="#" >
							<i class="fas fa-piggy-bank" style="font-size: 18px;"></i>
							<br>
							<p>Trả góp</p>
							</a>
							</div>
						</li>
					
					
						<li class="dichvu">
							<div class="title">
							<a href="#" >
							<i class="fas fa-hands-helping"  style="font-size: 18px;color: red"></i>
							<br>
							<p>Dịch vụ</p>
							</a>
						</div>
						</li>
					
					
						<li  class="congnghe">
							<div class="title">
							<a href="#"  >
							<i class="fas fa-book-reader" style="font-size: 18px"></i>
							<br>
							<p>Công nghệ</p>
							</a>
							</div>
						</li>
					
					
						<li  class="doanhnghiep">
							<div class="title">
							<a href="#">
							<i class="fas fa-ankh" style="font-size: 18px;"></i>
							<br>
							<p>Doanh nghiệp</p>
							</a>
							</div>
						</li>
					
					
						<li class="khuyenmai">
							<div class="title">
							<a href="#" >
							<i class="fas fa-gift" style="font-size: 18px;"></i>
							<br>
							<p>Khuyến mại</p>
							</a>
							</div>
						</li>
					
				</ul>
			</div>

			
			</div>
<div class="headerbottum">
	<?php if(isset($_SESSION["customer_email"])): ?>
		<a href="index.php?controller=login&action=info" class="login">
			<?php  $findName=$this->findUserLogin(); ?>
			<?php echo 'Xin chào: '.$findName->first_name.' '.$findName->last_name ?></a>
		<a href="index.php?controller=login&action=logout" class="logout">Đăng xuất</a>
	<?php else:  ?>
		<a href="index.php?controller=login" class="login"> Đăng nhập</a>
		<a href="index.php?controller=login&action=registration" class="logout">Đăng kí</a>
	<?php endif; ?>	
	<a href="index.php?controller=cart" class="cart">Giỏ hàng</a>

</div>
<style>
	.headerbottum{
	position: fixed;
    padding-left: 2%;
    right: 0;
    top: 7.5%;
    background: #dedddd;
    z-index: 1200;
    font-size: 15px;
    text-align: center;
    border-radius: 3px 3px 10px 10px;
}
	.headerbottum a{
	padding-right: 13px;
    color: #f30000;
    font-family: auto;
    display: inline-block;
}
	.headerbottum a:hover{
		text-decoration: none;
	}
	.Banner{
		margin-top: 80px !important;
	}
	.Main{
		margin-top: 70px;
	}
</style>