<?php 
	$this->layoutPath="LayoutStaff.php";
 ?>
 <style>
 	form{
 		    background: #eeeeee;
		    padding: 2rem;
		    border-radius: 12px;
 	}
 	td a{color: black;}
 	.mainlogo{width: 200px}
 </style>
  <div class="col-md-10 template-cart">
   <div id="print">
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
          <td><img src="../assets/upload/users/<?php echo $user->picture ?>" alt="" style="width: 100px;"></td>
        </tr>
        <tr>
          <th scope="col">First_Name</th>
          <td><?php echo $user->first_name ?></td>
        </tr>
        <tr>
         <th scope="col">Last_Name</th>
          <td><?php echo $user->last_name ?></td>
        </tr>

        <tr>
         <th scope="col">Phone</th>
          <td><?php echo $user->phone ?></td>
        </tr>

        <tr>
          <th scope="col">Quốc Gia</th>
          <td><?php echo $user->country ?></td>
        </tr>
        <tr>
          <th scope="col">Địa chỉ</th>
          <td><?php echo $user->city ?></td>
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
                 	<?php foreach ($detailOder as  $rows):?>
                 		<?php $loaisp=$this->findLoaisp($rows->product_id); ?>
                  <tr>
                    <td><img src="../assets/upload/phone/<?php echo $loaisp->photo ?>" class="img-responsive" /></td>
                    <td><a href="http://localhost:8080/cellphones/frontend/index.php?controller=phonedetail&id=<?php echo $loaisp->id ?>"><?php echo $loaisp->name ?></a></td>
                    <td> <?php echo number_format($loaisp->price-($loaisp->price*$loaisp->discount/100)) ?> đ</td>
                    <td>
                      <?php echo $rows->quantity ?>
                    </td>
                    <td><p><b><?php echo number_format($rows->quantity*($loaisp->price-(($loaisp->discount/100)*$loaisp->price)));?>đ</b></p></td>
                    
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
            <?php echo number_format($order->price) ?><br>
          </div>
        </div>
            <a href="index.php?controller=staff&action=exportExcelUser&orderId=<?php echo $order->id; ?>&customer=<?php echo $user->id ?>" class="btn btn-success">Xuất Excel</a> 
            <button type="button" class="btn btn-primary exportBill">In hóa đơn</button>
          <script>
              $('.exportBill').click(function(){
                  var DocumentContainer = document.getElementById('print');
                  var WindowObject = window.open('', "PrintWindow", "width=1000,height=650,top=50,left=50,toolbars=no,scrollbars=yes,status=no,resizable=yes");
                  WindowObject.document.writeln(DocumentContainer.innerHTML);
                  WindowObject.document.close();
                  WindowObject.focus();
                  WindowObject.print();
                  WindowObject.close();
              });
            </script>
        </div>


