<!-- load file layout chung -->
<?php 
	$this->layoutPath="Layout.php";
 ?>
 <head>
 	<link rel="stylesheet" href="../assets/css/NSX.css">
	<script type="text/javascript" src="../assets/js/NSX.js"></script>
</head>

 				<div class="title-main">
					THÔNG TIN DANH MỤC ĐIỆN THOẠI
				</div>
					<div class="main-content">
						<div class="list">
							<i class="fas fa-building"></i>
							Loại sản phẩm List
						</div>
						<div class="search">
							<span>Search: </span>
							<input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
						</div>
						
						<a href="index.php?controller=loaisp&action=create" style="display: inline-block;margin-bottom: 1%;margin-left: 1%;">
							<button type="button" class="btn btn-primary users">
								Add Các loại sản phẩm
							</button>	
						</a>
						

						<table class="table table-striped">
						  <thead>
						    <tr>
						     
						      <th scope="col">id</th>
						      <th scope="col">Photo</th>
						      <th scope="col">Tên nhà sản xuất</th>
						      <th scope="col">Danh mục cha</th>
						      <th scope="col">Tên sản phẩm</th>
						      <th scope="col">Số lượng</th>
						      <th scope="col">Hot</th>
						      <th scope="col">Giá</th>
						      <th scope="col">Actions</th>
						      
						    </tr>
						  </thead>
						  <tbody>
						  	
						    <?php foreach($data as $value): ?>
						    <tr>
						    	<!-- id -->
						      	<th scope="row"><?php echo $value->id ?></th>
						      	<!-- / -->
						      	<!-- photo -->
                    		  	<td style="text-align: center;">
                        			<?php if($value->photo !="" && file_exists("../assets/upload/phone/".$value->photo)):  ?>
                        			<img src="../assets/upload/phone/<?php echo $value->photo; ?>" alt="" style="width: 100px;">
                    				<?php endif; ?>

                    		  	</td>
                    		  	<!-- / -->
                    		  	<!-- Nhà sản xuất -->
						      	<td>		
						      		<?php
                            			$tensp = $this->modelTensp($value->id_nsx!=null?$value->id_nsx:0);
                            			if(isset($tensp->name))
                            			{
                            				echo $tensp->name;
                            			}
                            			
                         			?>

						      	</td>
						      	<!-- / -->
						      	<!-- Danh mục cha -->
						      	<td>
						      		<?php
                            			$muccha = $this->modelMuccha($value->parent_id!=null?$value->parent_id:0);
                            			
                            			if(isset($muccha->name))
                            			{
                            				echo $muccha->name;
                            			}
                         			?>
						      	</td>
						      	<!-- / -->
						      	<!-- Tên sản phẩm -->
						      	<td><?php echo $value->name ?></td>
						      	<!-- / -->
						      	<!-- Số lượng -->
						      	<td><?php echo $value->slsp ?></td>
						      	<!-- / -->
						      	<!-- Hot -->
						    	<td>
						    		<?php if($value->hot==1): ?>
                            			<span class="fa fa-check"></span>
                        			<?php endif; ?>
						    	</td>
						    	<!-- / -->
						    	<!-- Giá -->
						    	<td><?php echo number_format($value->price-($value->price*($value->discount/100))) ?></td>
						    	<!-- / -->
						      <!-- action -->
						      <td style="display: flex;">

						      	<div class="fix">
						      	<a href="index.php?controller=loaisp&action=update&id=<?php echo $value->id ?>">
						      			<button type="button" class="btn btn-success fix" >	
						      				<i class="fas fa-edit"></i>
						      			</button>
						      	</a>
						      </div>
						      <div style="width: 10%"></div>
						      	<div class="xoa">
						      		<a href="index.php?controller=loaisp&action=delete&id=<?php echo $value->id ?>">
						      			<button type="button" class="btn btn-danger delete">
						      				<i class="far fa-trash-alt"></i>
						      			</button>
						      		</a>
						      	</div>
						      	

						      </td>
						     	<!-- /action -->
						    </tr>
						    

						    <!-- More -->
						    <?php $danhmuccon=$this->laymuccon($value->id); ?>
						   
						    <?php foreach($danhmuccon as $rows): ?>
						    	
						    <tr>

						      	<th scope="row"><?php echo $rows->id ?></th>
                    		  	<td style="text-align: center;">
                        			<?php if($rows->photo !="" && file_exists("../assets/upload/phone/".$rows->photo)):  ?>
                        			<img src="../assets/upload/phone/<?php echo $rows->photo; ?>" alt="" style="width: 100px;">
                    				<?php endif; ?>

                    		  	</td>

						      	<td>		
						      		<?php
                            			$tensp = $this->modelTensp($rows->id_nsx!=null?$rows->id_nsx:0);
                            			if(isset($tensp->name))
                            			{
                            				echo $tensp->name;
                            			}
                            			
                         			?>

						      	</td>
						      	<td>
						      		<?php
                            			$muccha = $this->modelMuccha($rows->parent_id!=null?$rows->parent_id:0);
                            			
                            			if(isset($muccha->name))
                            			{
                            				echo $muccha->name;
                            			}
                         			?>
						      	</td>

						      	<td><?php echo $rows->name ?></td>
						      	<!-- Số lượng -->
						      	<td><?php echo $rows->slsp ?></td>
						      	<!-- / -->
						    	<!-- Hot -->
						    	<td>
						    		<?php if($rows->hot==1): ?>
                            			<span class="fa fa-check"></span>
                        			<?php endif; ?>
						    	</td>
						    	<!-- / -->
						    	<!-- Giá -->
						    	<td><?php echo number_format($rows->price-($rows->price*($rows->discount/100))) ?></td>
						    	<!-- / -->
						      <!-- action -->
						      <td style="display: flex;">

						      	<div class="fix">
						      	<a href="index.php?controller=loaisp&action=update&id=<?php echo $rows->id ?>">
						      			<button type="button" class="btn btn-success fix" >	
						      				<i class="fas fa-edit"></i>
						      			</button>
						      	</a>
						      </div>
						      <div style="width: 10%"></div>
						      	<div class="xoa">
						      		<a href="index.php?controller=loaisp&action=delete&id=<?php echo $rows->id ?>">
						      			<button type="button" class="btn btn-danger delete">
						      				<i class="far fa-trash-alt"></i>
						      			</button>
						      		</a>
						      	</div>
						      	

						      </td>
						     	<!-- /action -->
						    </tr>
						    

						    <!-- / -->
						    <?php endforeach ?>
						    
						<?php endforeach ?>
						</tbody>
						</table>

						<!-- phân trang -->
						<div class="row">
							<div class="col-md-4"></div>
							<div class="col-md-8">
			            		<ul class="pagination">
			            			<li class="disabled" ><a href="#" class="no-drop">Page</a></li>
			            			<?php for($j=1;$j<=$numPage;$j++): ?>
			            			<li><a href="index.php?controller=loaisp&p=<?php echo $j; ?>"> <?php echo $j; ?> </a></li>
			            		<?php endfor; ?>
			            	</ul>

			            	</div>
						</div>
			        	
			            <!-- phân trang -->
			            <div style="width: 100%;text-align: right;">
			            	<a href="index.php?controller=loaisp&action=exportExcel" class="btn btn-warning" style="margin: 1.5rem;">Export Excel</a>
			            </div>
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

	