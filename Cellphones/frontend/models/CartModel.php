<?php
	trait CartModel{		
		public function cartAdd($id){
		    if(isset($_SESSION['cart'][$id])){
		        //nếu đã có sp trong giỏ hàng thì số lượng lên 1
		        $_SESSION['cart'][$id]['number']++;
		    } else {
		        //lấy thông tin sản phẩm từ CSDL và lưu vào giỏ hàng
		        //$product = db::get_one("select * from products where id=$id");
		        //---
		        //PDO
		        $conn = Connection::getInstance();
		        $query = $conn->prepare("select * from loaisp where id=:id");
		        $query->execute(array("id"=>$id));
		        $query->setFetchMode(PDO::FETCH_OBJ);
		        $product = $query->fetch();
		        //---
		        
		        $_SESSION['cart'][$id] = array(
		            'id' => $id,
		            'name' => $product->name,
		            'photo' => $product->photo,
		            'number' => 1,
		            'price' => $product->price,
		            'discount' => $product->discount
		        );
		    }
		}
		/**
		 * Cập nhật số lượng sản phẩm
		 * @param int
		 * @param int
		 */
		public function cartUpdate($id, $number){
		    if($number==0){
		        //xóa sp ra khỏi giỏ hàng
		        unset($_SESSION['cart'][$id]);
		    } else {
		        $_SESSION['cart'][$id]['number'] = $number;
		    }
		}
		/**
		 * Xóa sản phẩm ra khỏi giỏ hàng
		 * @param int
		 */
		public function cartDelete($id){
		    unset($_SESSION['cart'][$id]);
		}
		/**
		 * Tổng giá trị giỏ hàng
		 */
		public function cartTotal(){
		    $total = 0;
		    foreach($_SESSION['cart'] as $product){
		        $total += ($product['price']-$product['price']*$product['discount']/100) * $product['number'];
		    }
		    return $total;
		}
		/**
		 * Số sản phẩm có trong giỏ hàng
		 */
		public function cartNumber(){
		    $number = 0;
		    foreach($_SESSION['cart'] as $product){
		        $number += $product['number'];
		    }
		    return $number;
		}
		/**
		 * Danh sách sản phẩm trong giỏ hàng
		 */
		public function cartList(){
		    return $_SESSION['cart'];
		}
		/**
		 * Xóa giỏ hàng
		 */
		public function cartDestroy(){
		    $_SESSION['cart'] = array();
		}
		//=============
		//checkout
		public function cartCheckOut(){
			$conn = Connection::getInstance();			
			//lay id vua moi insert
			$customer_id = $_SESSION["customer_id"];
			//---
			//---
			//insert ban ghi vao orders, lay order_id vua moi insert
			//lay tong gia cua gio hang
			$price = $this->cartTotal();
			$query = $conn->prepare("insert into orders set customer_id=:customer_id, date=now(),price=:price");
			$query->execute(array("customer_id"=>$customer_id,"price"=>$price));
			//lay id vua moi insert
			$order_id = $conn->lastInsertId();
			//---
			//duyet cac ban ghi trong session array de insert vao orderdetails
			foreach($_SESSION["cart"] as $product){
				$query = $conn->prepare("insert into orderdetails set order_id=:order_id, product_id=:product_id, price=:price, quantity=:quantity");
				$query->execute(array("order_id"=>$order_id,"product_id"=>$product["id"],"price"=>($product["price"]-($product["price"]*$product["discount"]/100)),"quantity"=>$product["number"]));
			}
			return $order_id;
			//xoa gio hang
			//unset($_SESSION["cart"]);
		}
		public function findBillCustomer()
		{
			$conn=Connection::getInstance();
			$idcustomer=$_SESSION["customer_id"];
			$query=$conn->query("select * from users where id=$idcustomer");
			return $query->fetch();
		}
		public function findUserLogin()
		{
			$email=isset($_SESSION['customer_email'])?$_SESSION['customer_email']:"";
			$conn=Connection::getInstance();
			$str="select * FROM users WHERE email ='$email'";
			$query=$conn->query($str);
			return $query->fetch();
		}
		public function exportExcelBill()
		{
			//import phpexcel
			require "PHPExcel-1.8/Classes/PHPExcel.php";
			$excel = new PHPExcel();
			$excel->setActiveSheetIndex(0);
			$excel->getActiveSheet()->setTitle('Xuất hóa đơn');
			
			//lấy data
			$conn=Connection::getInstance();
			//lấy người nhận
			$idcustomer=$_SESSION["customer_id"];
			$query=$conn->query("select * from users where id=$idcustomer");
			$user=$query->fetch();

			//lấy hóa đơn
			$order_id=isset($_GET["orderId"])?$_GET["orderId"]:0;
			$query2=$conn->query("select * from orders where id=$order_id");
			$order=$query2->fetch();

			//lấy detail hóa đơn
			$query3=$conn->query("select * from orderdetails where order_id=$order->id");
			$orderDetail=$query3->fetchAll();

			//set độ rộng cho các ô
			$excel->getActiveSheet()->getColumnDimension('A')->setWidth(35);
			$excel->getActiveSheet()->getColumnDimension('B')->setWidth(30);
			$excel->getActiveSheet()->getColumnDimension('C')->setWidth(50);
			$excel->getActiveSheet()->getColumnDimension('D')->setWidth(20);
			$excel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
			
			//in đậm
			//$excel->getActiveSheet()->getStyle('A1:F1')->getFont()->setBold(true);
			//set value
			//
			//test picture (in ảnh)
		    $Drawing = new PHPExcel_Worksheet_Drawing(); 
		    $Drawing->setName('logo'); 
			$Drawing->setDescription('logo'); 
			$Drawing->setPath("../assets/imgs/mainlogo.jpg");
			$Drawing->setCoordinates('C'.'1');     
			//setOffsetX works properly 
			$Drawing->setOffsetX(5); 
			$Drawing->setOffsetY(5);     
			//set width, height 
			$Drawing->setWidth(100); 
			$Drawing->setHeight(35); 
			$Drawing->setWorksheet($excel->getActiveSheet()); 
			$excel->getActiveSheet()->getRowDimension(1)->setRowHeight(35);

			$excel->getActiveSheet()
			    ->getStyle('A1:E1')
			    ->getAlignment()
			    ->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);

			$excel->getActiveSheet()->setCellValue('A' . 1, "Công ty: ");
			$excel->getActiveSheet()->setCellValue('B' . 1, "Công ty Cổ Phần CellPhoneS ");
			$excel->getActiveSheet()->setCellValue('A' . 2, "Bên vận chuyển: ");
			$excel->getActiveSheet()->setCellValue('B' . 2, "Công ty vận chuyển CellPhoneS ");
			$excel->getActiveSheet()->setCellValue('A' . 4, "Thông tin người nhận: ");
			$excel->getActiveSheet()->setCellValue('B' . 4, "Tên đầu: ");
			$excel->getActiveSheet()->setCellValue('C' . 4, $user->first_name);

			$excel->getActiveSheet()->setCellValue('B' . 5, "Tên cuối: ");
			$excel->getActiveSheet()->setCellValue('C' . 5, $user->last_name);

			$excel->getActiveSheet()->setCellValue('B' . 6, "Điện thoại: ");
			$excel->getActiveSheet()->setCellValue('C' . 6, $user->phone);

			$excel->getActiveSheet()->setCellValue('B' . 7, "Email: ");
			$excel->getActiveSheet()->setCellValue('C' . 7, $user->email);

			$excel->getActiveSheet()->setCellValue('B' . 8, "Quốc gia: ");
			$excel->getActiveSheet()->setCellValue('C' . 8, $user->country);

			$excel->getActiveSheet()->setCellValue('B' . 9, "Địa chỉ: ");
			$excel->getActiveSheet()->setCellValue('C' . 9, $user->city);

			$excel->getActiveSheet()->setCellValue('A' . 11, "Thông tin sản phẩm: ");

			$excel->getActiveSheet()->setCellValue('A' . 12, "Tên sản phẩm");
		    $excel->getActiveSheet()->setCellValue('B' . 12, "Hình ảnh");
		    $excel->getActiveSheet()->setCellValue('C' . 12, "Giá bán lẻ");
		    $excel->getActiveSheet()->setCellValue('D' . 12, "Giảm giá");
		    $excel->getActiveSheet()->setCellValue('E' . 12, "Thành tiền");
		    
		    //in đậm
		    $excel->getActiveSheet()->getStyle('A1:B1')->getFont()->setBold(true);
		    $excel->getActiveSheet()->getStyle('A2:B2')->getFont()->setBold(true);
		    $excel->getActiveSheet()->getStyle('A4:B4')->getFont()->setBold(true);
		    $excel->getActiveSheet()->getStyle('A5:B9')->getFont()->setBold(true);
			$excel->getActiveSheet()->getStyle('A11')->getFont()->setBold(true);
			$excel->getActiveSheet()->getStyle('A12:E12')->getFont()->setBold(true);

			//căn trái ô
			$excel->getActiveSheet()
		    ->getStyle('C6')
		    ->getAlignment()
		    ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);

		    
		    
		    //in data
			$numRow = 13;
			foreach ($orderDetail as $row) {
				$query4=$conn->query("select * from loaisp where id=$row->product_id");
				$Product=$query4->fetch();

			    $excel->getActiveSheet()->setCellValue('A' . $numRow, $Product->name);
			    
			    //test picture (in ảnh)
			    $objDrawing = new PHPExcel_Worksheet_Drawing(); 
			    $objDrawing->setName('test_img'); 
				$objDrawing->setDescription('test_img'); 
				$objDrawing->setPath("../assets/upload/phone/".$Product->photo);
				$objDrawing->setCoordinates('B'.$numRow);     
				//setOffsetX works properly 
				$objDrawing->setOffsetX(5); 
				$objDrawing->setOffsetY(5);     
				//set width, height 
				$objDrawing->setWidth(100); 
				$objDrawing->setHeight(35); 
				$objDrawing->setWorksheet($excel->getActiveSheet()); 
				$excel->getActiveSheet()->getRowDimension($numRow)->setRowHeight(40);

				$excel->getActiveSheet()->setCellValue('C' . $numRow, number_format($Product->price));
			    $excel->getActiveSheet()->setCellValue('D' . $numRow, $Product->discount.'%');
			    $money=$Product->price-($Product->price*$Product->discount/100);
			    $excel->getActiveSheet()->setCellValue('E' . $numRow, number_format($money));

			    $excel->getActiveSheet()
			    ->getStyle('A'.$numRow.':E'.$numRow)
			    ->getAlignment()
			    ->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);


			    $numRow++;
			}

			$numRow=$numRow+1;
			$excel->getActiveSheet()->setCellValue('C' . $numRow, "Tổng tiền");
			$excel->getActiveSheet()->setCellValue('D' . $numRow, number_format($order->price));
			//in đậm
			$excel->getActiveSheet()->getStyle('C'.$numRow.':D'.$numRow)->getFont()->setBold(true);
			//xóa biến cart
			unset($_SESSION["cart"]);
			header('Content-type: application/vnd.ms-excel');
			header('Content-Disposition: attachment; filename="data.xls"');
			PHPExcel_IOFactory::createWriter($excel, 'Excel2007')->save('php://output');

		}
		
		//=============
	}	
?>