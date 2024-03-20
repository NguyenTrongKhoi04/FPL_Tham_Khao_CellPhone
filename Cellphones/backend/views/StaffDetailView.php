 <!-- load file layout chung -->
<?php 
	$this->layoutPath="LayoutStaff.php";
 ?>
 <head>
 	<link rel="stylesheet" href="../assets/css/NSX.css">
	<script type="text/javascript" src="../assets/js/NSX.js"></script>
</head>

 				<div class="title-main">
					THÔNG TIN CHI TIẾT ORDER
				</div>
					
					<div class="main-content">
						<div class="list">
							<i class="fas fa-building"></i>
							Orders
						</div>
						<table class="table table-striped">
							<thead>
								<tr>
									<th scope="col">FirstName</th>
									<th scope="col">LastName</th>
									<th scope="col">Email</th>
									<th scope="col">Country</th>
									<th scope="col">City</th>
									<th scope="col">Date</th>
									<th scope="col">Price</th>
									<th scope="col">Status</th>
								</tr>
							</thead>
							<tbody>
								<?php 
					                $order = $this->modelGetOrders($id);
					                $customer = $this->modelGetCustomers($order->customer_id);
					             ?>
					             <tr>
					             	<td><?php echo $customer->first_name; ?></td>
					             	<td><?php echo $customer->last_name; ?></td>
					             	<td><?php echo $customer->email; ?></td>
					             	<td><?php echo $customer->country; ?></td>
					             	<td><?php echo $customer->city; ?></td>
					             	<td><?php echo $order->date; ?></td>
					             	<td><?php echo number_format($order->price); ?></td>
					             	<td>
					             	<?php if( $order->status==1): ?>
					             		<span class="badge badge-info">Đã giao hàng</span>
					             	<?php else: ?>
					             		<span class="badge badge-danger">Chưa giao hàng</span>
					             	<?php endif; ?>
					             	</td>
					             </tr>
							</tbody>
						</table>


						<table class="table table-striped">
						  <thead>
						    <tr>
						      <th scope="col">Photo</th>
						      <th scope="col">Name</th>
						      <th scope="col">Price</th>
						      <th scope="col">Number</th>
						    </tr>
						  </thead>
						  <tbody>
						  	<?php foreach($data as $rows): ?>
						    
						    <?php   
			                    //lay ban ghi customer
			                   $product = $this->modelGetProducts($rows->product_id);
			                 ?>
						    <tr>
						    	<tr>
						    		<td><img src="../assets/upload/phone/<?php echo $product->photo; ?>" style="width: 100px;"></td>
				                    <td><?php echo $product->name; ?></td>
				                    <td><?php echo number_format($rows->price); ?></td>
				                    <td><?php echo $rows->quantity; ?></td>
			                    </tr>
			                </tr>
                	<?php endforeach; ?>
						      	
						</tbody>
						</table>

					<!-- Export excel -->
					<div style="width: 100%;text-align: right;">
						<?php $idExport=isset($_GET['id'])?$_GET['id']:"" ?>
			            <a href="index.php?controller=staff&action=exportExcel&idExport=<?php echo $idExport ?>" class="btn btn-warning" style="margin: 1.5rem;">Export Excel</a>

			            <a href="index.php?controller=staff&action=seeBill&idExport=<?php echo $idExport ?>" class="btn btn-info" style="margin: 1.5rem;">Xuất hóa đơn</a>
			        </div>
					<!-- /Export excel -->

					</div>
					
				</div>

	

