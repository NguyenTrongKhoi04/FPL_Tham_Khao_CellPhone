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
          <form action="index.php?controller=cart&action=update" method="post">
            <div class="table-responsive">
              <table class="table table-cart">
                <thead>
                  <tr>
                    <th class="image">Ảnh sản phẩm</th>
                    <th class="name">Tên sản phẩm</th>
                    <th class="price">Giá bán lẻ</th>
                    <th class="quantity">Số lượng</th>
                    <th class="price">Thành tiền</th>
                    <th>Xóa</th>
                  </tr>
                </thead>
                <tbody>
                 	<?php foreach ($_SESSION["cart"] as  $rows):?>
                  <tr>
                    <td><img src="../assets/upload/phone/<?php echo $rows["photo"] ?>" class="img-responsive" /></td>
                    <td><a href="index.php?controller=phonedetail&id=<?php echo $rows["id"] ?>"><?php echo $rows["name"] ?></a></td>
                    <td> <?php echo number_format($rows["price"]) ?> đ</td>
                    <td><input type="number" id="qty" min="1" class="input-control" value="<?php echo $rows["number"] ?>" name="product_<?php echo $rows["id"]; ?>" required="Không thể để trống"></td>
                    <td><p><b><?php echo number_format($rows["number"]*($rows["price"]-(($rows["discount"]/100)*$rows["price"])));?>đ</b></p></td>
                    <td><a href="index.php?controller=cart&action=delete&id=<?php echo $rows["id"]; ?>" data-id="2479395"><i class="fa fa-trash"></i></a></td>
                  </tr>
              <?php endforeach; ?>
                </tbody>
                <tfoot>
                  <tr>
                    <td colspan="6">
                    	<input type="submit" class="btn btn-primary" value="Cập nhật">
                    	<br><br>
                    	<a href="index.php?controller=cart&action=destroy" class="btn btn-danger">Xóa toàn bộ</a> 
                    	<a href="index.php" class="btn btn-info">Tiếp tục mua hàng</a>
                     </td>
                  </tr>
                </tfoot>
              </table>
            </div>
            <div class="total-cart" style="font-size: 20px; font-weight: 500;padding: .75rem;"> <span>TỔNG TIỀN THANH TOÁN: </span>
            <?php echo number_format($this->cartTotal()) ?><br>
            <a href="index.php?controller=cart&action=billcheckOut" class="btn btn-success">Thanh toán</a>
           
            </div>
          </form>
          
        </div>
<?php endif; ?>
