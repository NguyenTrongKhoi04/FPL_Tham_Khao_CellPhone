<!-- load file layout chung -->
<?php 
	$this->layoutPath="LayoutTrangTrong.php";
 ?>
 <style>
 	form{
 		    background: #eeeeee;
		    padding: 2rem;
		    border-radius: 12px;
 	}
 </style>
 

 <?php if($this->cartNumber()>0): ?>
  <div class="col-md-10 template-cart">
   
      <h3 style="font-weight: bold;">Thông tin bên bán sản phẩm</h3>

      <div class="row" style="margin-bottom: 2rem;">
        <div class="col-md-3">
          <img src="../assets/imgs/mainlogo.jpg" alt="" class="mainlogo">
        </div>
        <div class="col-md-9" style="text-align: center;">
            <h4 style="font-weight: bold;color: #e1052b;">Công ti cổ phần CellPhoneS</h4>
            <h6 style="font-weight: bold;color: #e1052b;">Thông tin bên giao hàng: Hệ thống giao hàng của CellphoneS</h6>
        </div>
      </div>

    <div class="table_customer">
      <h3 style="font-weight: bold;">Hóa đơn mua hàng</h3>
      <h4 style="color: #e1052b;">Thông tin khách mua hàng</h4>
   <table class="table">
        <tr>
          <th scope="col">Picture</th>
          <td><img src="../assets/upload/users/<?php echo $data->picture ?>" alt="" style="width: 100px;"></td>
        </tr>
        <tr>
          <th scope="col">First_Name</th>
          <td><?php echo $data->first_name ?></td>
        </tr>
        <tr>
         <th scope="col">Last_Name</th>
          <td><?php echo $data->last_name ?></td>
        </tr>

        <tr>
         <th scope="col">Phone</th>
          <td><?php echo $data->phone ?></td>
        </tr>

        <tr>
          <th scope="col">Quốc Gia</th>
          <td><?php echo $data->country ?></td>
        </tr>
        <tr>
          <th scope="col">Địa chỉ</th>
          <td><?php echo $data->city ?></td>
        </tr>
    </table>
 </div>

            <h4>Thông tin các sản phẩm đã mua</h4>
            <div class="table-responsive">
              <table class="table table-cart">
                <thead>
                  <tr>
                    <th class="image">Ảnh sản phẩm</th>
                    <th class="name">Tên sản phẩm</th>
                    <th class="price">Giá bán lẻ</th>
                    <th class="quantity">Số lượng</th>
                    <th class="price">Thành tiền</th>
                  
                  </tr>
                </thead>
                <tbody>
                 	<?php foreach ($_SESSION["cart"] as  $rows):?>
                  <tr>
                    <td><img src="../assets/upload/phone/<?php echo $rows["photo"] ?>" class="img-responsive" /></td>
                    <td><a href="index.php?controller=phonedetail&id=<?php echo $rows["id"] ?>"><?php echo $rows["name"] ?></a></td>
                    <td> <?php echo number_format($rows["price"]-($rows["price"]*$rows["discount"]/100)) ?> đ</td>
                    <td>
                      <?php echo $rows["number"] ?>
                    </td>
                    <td><p><b><?php echo number_format($rows["number"]*($rows["price"]-(($rows["discount"]/100)*$rows["price"])));?>đ</b></p></td>
                    
                  </tr>
              <?php endforeach; ?>
                </tbody>
                <tfoot>
                  <tr>
                    <td colspan="6">
                    	<!-- <a href="index.php" class="btn btn-info">Tiếp tục mua hàng</a> -->
                      
                     </td>
                  </tr>
                </tfoot>
              </table>
            </div>
            <div class="total-cart" style="font-size: 20px; font-weight: 500;padding: .75rem;"> <span>TỔNG TIỀN THANH TOÁN: </span>
            <?php echo number_format($this->cartTotal()) ?><br>
           <!--  <a href="index.php?controller=cart&action=checkOut&orderId=<?php echo $order_id; ?>" class="btn btn-success">Xuất Excel</a> </div> -->

          
          
        </div>
<?php endif; ?>
