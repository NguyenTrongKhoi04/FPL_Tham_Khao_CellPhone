<!-- load file layout chung -->
<?php 
	$this->layoutPath="Layout.php";
 ?>
 <head>
 	<link rel="stylesheet" href="../assets/css/NSX.css">
	<script type="text/javascript" src="../assets/js/NSX.js"></script>
</head>

 				<div class="title-main">
					THÔNG TIN NHÀ SẢN XUẤT
				</div>

				<div class="infor-main">
					<!-- <div class="row main-title">
						<div class="col-md-3 title-1">
							Thông tin
						</div>
						
						<div class="col-md-9 line">
							
						</div>
					</div> -->
					<div class="main-content">
						<div class="list">
							<i class="fas fa-building"></i>
							Nhà sản xuất List
						</div>
						<div class="search">
							<span>Search: </span>
							<input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
						</div>
						
						<a href="index.php?controller=nhasanxuat&action=create" style="display: inline-block;margin-bottom: 1%;margin-left: 1%;">
							<button type="button" class="btn btn-primary users">
								Add Nhà sản xuất
							</button>	
						</a>
						

						<table class="table table-striped">
						  <thead>
						    <tr>
						      <th scope="col">STT</th>
						      <th scope="col">id</th>
						      <th scope="col">Name</th>
						      <th scope="col">Địa chỉ</th>
						      <th scope="col">Số điện thoại</th>
						      <th scope="col">Số lượng hàng</th>
						      <th scope="col">Actions</th>
						      
						    </tr>
						  </thead>
						  <tbody>
						  	<?php $i=0; ?>
						    <?php foreach($data as $value): ?>
						    <tr>
						      <th scope="row"><?php echo $i; ?></th>
						      <td><?php echo $value->id ?></td>
						      <td><?php echo $value->name ?></td>
						      <td><?php echo $value->address ?></td>
						      <td><?php echo $value->contact ?></td>
						      <td><?php echo $value->soluong ?></td>
						      </td>
						      <!-- action -->
						      <td style="display: flex;">

						      	<div class="fix">
						      	<a href="index.php?controller=nhasanxuat&action=update&id=<?php echo $value->id ?>">
						      			<button type="button" class="btn btn-success fix" >	
						      				<i class="fas fa-edit"></i>
						      			</button>
						      	</a>
						      </div>
						      <div style="width: 10%"></div>
						      	<div class="xoa">
						      		<a href="index.php?controller=nhasanxuat&action=delete&id=<?php echo $value->id ?>">
						      			<button type="button" class="btn btn-danger delete">
						      				<i class="far fa-trash-alt"></i>
						      			</button>
						      		</a>
						      	</div>
						      	

						      </td>
						     	<!-- /action -->
						    </tr>
						    <?php $i++; ?>
						<?php endforeach ?>
						  </tbody>
						</table>

						<!-- phân trang -->
						
			        <div>
			            	<ul class="pagination">
			            		<li class="disabled" ><a href="#" class="no-drop">Page</a></li>
			            		<?php for($j=1;$j<=$numPage;$j++): ?>
			            		<li><a href="index.php?controller=nhasanxuat&p=<?php echo $j; ?>"> <?php echo $j; ?> </a></li>
			            	<?php endfor; ?>
			            	</ul>

			            </div>
			           
		
			            <!-- phân trang -->
					</div>

			            <!-- Hỏi xóa -->
						<div class="ask">
							<div class="ask-title">
								Chú ý!
							</div>
							<p>Bạn có chắc chắn muốn xóa!</p>
							<button type="button" class="btn btn-danger">Yes</button>
							<button type="button" class="btn btn-primary">No</button>
						</div>
						<!-- /Hỏi xóa -->

				</div>

