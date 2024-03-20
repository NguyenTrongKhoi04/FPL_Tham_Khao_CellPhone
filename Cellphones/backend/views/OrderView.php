
 <!-- load file layout chung -->
<?php 
	$this->layoutPath="Layout.php";
 ?>
 <head>
 	<link rel="stylesheet" href="../assets/css/NSX.css">
	<script type="text/javascript" src="../assets/js/NSX.js"></script>
</head>

 				<div class="title-main">
					THÔNG TIN ORDER
				</div>
					
					<div class="main-content">
						<div class="list">
							<i class="fas fa-building"></i>
							List Orders
						</div>
						<div class="search">
							<span>Search: </span>
							<input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" >
						</div>
						

						<table class="table table-striped">
						  <thead>
						    <tr>
				
						      <th scope="col">Name</th>
						      <th scope="col">FirstName</th>
						      <th scope="col">LastName</th>
						      <th scope="col">Date</th>
						      <th scope="col">Price</th>
						      <th scope="col">Status</th>
						      <th scope="col">Delivery</th>
						     
						      
						    </tr>
						  </thead>
						  <tbody>
						  	
						    <?php foreach($listRecord as $value): ?>
						    	<?php   
			                    //lay ban ghi customer
			                    $customer = $this->modelGetCustomers($value->customer_id);
			                 ?>
						    <tr>
						    	<!-- id -->
						      	<td><?php echo $customer->email; ?></th>
						      	<td><?php echo $customer->first_name; ?></th>
						      	<td><?php echo $customer->last_name; ?></th>
						      	<td>
			                        <?php 
			                        $date = Date_create($value->date);
			                        echo Date_format($date, "d/m/Y");
			                        ?>                            
			                    </td>
			                    <td><?php echo number_format($value->price); ?></td>
			                    <td style="text-align: center;">
			                         <?php if($value->status == 1): ?>
			                            <span class="badge badge-info">Đã giao hàng</span>
			                         <?php else: ?>
			                            <span class="badge badge-danger">Chưa giao hàng</span>
			                         <?php endif; ?>
			                     </td>
			                     <td style="text-align: center;">
			                        <a href="index.php?controller=order&action=detail&id=<?php echo $value->id; ?>" class="badge badge-success">Chi tiết</a>
			                        <?php if($value->status == 0): ?>
			                            <a href="index.php?controller=order&action=delivery&id=<?php echo $value->id; ?>" class="badge badge-primary">Giao hàng</a>
			                         <?php endif; ?>
			                     </td>
			                </tr>
                	<?php endforeach; ?>
						      	
						</tbody>
						</table>

						<!-- phân trang -->
						<div class="row">
							<div class="col-md-4"></div>
							<div class="col-md-8">
			            		<ul class="pagination">
			            			<li class="disabled" ><a href="#" class="no-drop">Page</a></li>
			            			<?php for($j=1;$j<=$numPage;$j++): ?>
			            			<li><a href="index.php?controller=order&p=<?php echo $j; ?>"> <?php echo $j; ?> </a></li>
			            		<?php endfor; ?>
			            	</ul>

			            	</div>
						</div>
			        	
			            <!-- phân trang -->
					</div>

			           

				</div>

	

