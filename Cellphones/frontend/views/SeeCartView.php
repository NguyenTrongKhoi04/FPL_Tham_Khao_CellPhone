<?php 
  $this->layoutPath="LayoutTrangChiTiet.php";
 ?>
 <style>
 	.main{
 		width: 80%;
 		margin: auto;
 		margin-top: 5rem;
 		padding: 2rem;
 		border-radius: 12px;
 		box-shadow: 0 0 12px lightgray;
 	}
 	.main .list{
 		color: #e11b1e;
 		font-weight: 700;
	    font-size: 25px;
	    font-family: auto;
 	}
 	.title-main{
 		color: #e11b1e;
 		font-weight: bold;
	    font-size: 25px;
	    font-family: auto;
 	}
 </style>
 <div class="main">
<div class="title-main">
	THÔNG TIN CHI TIẾT ORDER
</div>
	<div class="main-content">
		<?php $i=1; ?>
		<?php foreach ($result as $value):?>
		<div class="list">
			<i class="fas fa-building"></i>
			Đơn đặt hàng <?php echo $i; ?>
		</div>
		
		<table class="table table-striped">
			<thead>
				<tr>
					<th scope="col">FirstName</th>
					<th scope="col">LastName</th>
					<th scope="col">Email</th>
					<th scope="col">Phone</th>
					<th scope="col">Country</th>
					<th scope="col">City</th>
					<th scope="col">Date</th>
					<th scope="col">Price</th>
					<th scope="col">Status</th>
				</tr>
			</thead>
			<tbody>
	             <tr>
	             	<td><?php echo $user->first_name; ?></td>
	             	<td><?php echo $user->last_name; ?></td>
	             	<td><?php echo $user->email; ?></td>
	             	<td><?php echo $user->phone; ?></td>
	             	<td><?php echo $user->country; ?></td>
	             	<td><?php echo $user->city; ?></td>
	             	<td><?php echo $value->date; ?></td>
	             	<td><?php echo number_format($value->price); ?></td>
	             	<td>
	             	<?php if( $value->status==1): ?>
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
		  	
		    
		    <?php   
		    	$detail=$this->modelGetDetailOrder($value->id);
             ?>
             <?php foreach ($detail as $rows):?>
             <?php $product = $this->modelGetProducts($rows->product_id); ?>
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

		<!-- Excel -->
		<div style="width: 100%;text-align: right;">
        	<a href="index.php?controller=login&action=exportExcel&idExport=<?php echo $value->id ?>" class="btn btn-warning" style="margin: 1.5rem;">Export Excel</a>
        </div>
        <!-- !Excel -->

	<?php $i++; ?>
	<?php endforeach; ?>
	</div>
</div>
