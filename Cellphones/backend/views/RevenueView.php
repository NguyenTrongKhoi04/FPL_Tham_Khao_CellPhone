<?php 
	$this->layoutPath="Layout.php";
 ?>
 <div class="top" style="padding: 1rem">
 	<form action="index.php?controller=revenue&action=search" method="post">
 		<h5>Nhập thông tin để in doanh thu</h5>
	 	<label>Nhập tháng</label>
	 	<input type="number" class="form-control" placeholder="Nhập tháng" name="month">
	 	<label>Nhập năm</label>
	 	<input type="number" class="form-control" placeholder="Nhập năm" name="year">
	 	<br>
	 	<input type="submit" value="Gửi" class="btn btn-info">
 	</form>
 	<?php if(isset($data) && $data!=""): ?>
 		<table class="table table-bordered table-striped mb-0">
		    <thead>
		      <tr>
		        <th scope="col">#</th>
		        <th scope="col">Tên người mua</th>
		        <th scope="col">Ngày mua</th>
		        <th scope="col">Số tiền</th>
		      </tr>
		    </thead>
		    <tbody>
		      <tr>
		      	<?php $i=1; ?>
		      	<?php foreach($data as $value): ?>
			        <th scope="row"><?php echo $i; ?></th>
			        <?php $user=$this->findUserBuy($value->customer_id); ?>
			        <td><?php echo $user->first_name ?> - <?php echo $user->last_name ?></td>
			        <td><?php echo $value->date ?></td>
			        <td><?php echo number_format($value->price) ?> VNĐ</td>
			        <?php $i++ ?>
		    	<?php endforeach; ?>
		      </tr>
		      
		    </tbody>
		  </table>
		<h4>Tổng doanh thu trong tháng: <?php echo number_format($sum)?> VNĐ</h4>
 	<?php endif ?>
 </div>