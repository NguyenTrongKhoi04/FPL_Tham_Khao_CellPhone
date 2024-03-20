<?php 
	trait StaffModel{
		public function checkLogin()
		{
			if(isset($_SESSION["emailStaff"])==false)
			{
				header("location:index.php?controller=login");
			}
		}
		public function modelRead($recordPerPage){
			//lay tong to so ban ghi
			$total = $this->modelTotal();
			//tinh so trang
			$numPage = ceil($total/$recordPerPage);
			//lay so trang hien tai truyen tu url
			$page = isset($_GET["p"]) && $_GET["p"] > 0 ? $_GET["p"]-1 : 0;
			//lay tu ban ghi nao
			$from = $page * $recordPerPage;
			//thuc hien truy van
			$conn = Connection::getInstance();
			$query = $conn->query("select * from orders order by id,status desc limit $from, $recordPerPage");
			//tra ve tat ca cac ban truy van duoc
			return $query->fetchAll();
		}
		//ham tinh tong so ban ghi
		public function modelTotal(){
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("select id from orders");
			//lay tong so ban ghi
			return $query->rowCount();
			//---
		}
		//lay mot ban ghi table orders
		public function modelGetOrders($id){
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("select * from orders where id = $id");
			//tra ve mot ban ghi
			return $query->fetch();
			//---
		}
		//lay mot ban ghi trong table customers		
		public function modelGetCustomers($id){
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("select * from users where id = $id");
			//tra ve mot ban ghi
			return $query->fetch();
			//---
		}
		//lay mot ban ghi trong table products		
		public function modelGetProducts($id){
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("select * from loaisp where id = $id");
			//tra ve mot ban ghi
			return $query->fetch();
			//---
		}
		//xac nhan da giao hang
		public function modelDelivery($id){
			//---
			$conn = Connection::getInstance();
			$conn->query("update orders set status = 1 where id = $id");
		}
		//lay danh sach cac san pham trong talbe orderdetails
		public function modelListOrderDetails($id){
			//---
			$conn = Connection::getInstance();
			$query = $conn->query("select * from orderdetails where order_id = $id");
			//tra ve mot ban ghi
			return $query->fetchAll();
			//---
		}
		
		public function exportExcelModel($idExport)
		{
			$conn = Connection::getInstance();
			$query = $conn->query("select * from orders where id = $idExport");
			$orders=$query->fetch();
			
			
			$query2 = $conn->query("select * from orderdetails where order_id =$orders->id");
			$orderdetails=$query2->fetchAll();



			require "PHPExcel-1.8/Classes/PHPExcel.php";
			$excel = new PHPExcel();
			$excel->setActiveSheetIndex(0);
			$excel->getActiveSheet()->setTitle('demo ghi dữ liệu');

			$excel->getActiveSheet()->getColumnDimension('A')->setWidth(20);
			$excel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
			$excel->getActiveSheet()->getColumnDimension('C')->setWidth(30);
			$excel->getActiveSheet()->getColumnDimension('D')->setWidth(20);
			$excel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
			

			$excel->getActiveSheet()->getStyle('A1:F1')->getFont()->setBold(true);

			$excel->getActiveSheet()->setCellValue('A1', 'Id');
			$excel->getActiveSheet()->setCellValue('B1', 'Tên sản phẩm');
			$excel->getActiveSheet()->setCellValue('C1', 'Giá');
			$excel->getActiveSheet()->setCellValue('D1', 'Giảm giá');
			$excel->getActiveSheet()->setCellValue('E1', 'Số lượng mua hàng');
			

			

			$numRow = 2;
			foreach ($orderdetails as $row) {
				$query3=$conn->query("select * from loaisp where id = $row->product_id");
				$loaisp=$query3->fetch();

			    $excel->getActiveSheet()->setCellValue('A' . $numRow, $loaisp->id);
			    $excel->getActiveSheet()->setCellValue('B' . $numRow, $loaisp->name);
			    $excel->getActiveSheet()->setCellValue('C' . $numRow, $loaisp->price);
			    $excel->getActiveSheet()->setCellValue('D' . $numRow, $loaisp->discount);
			    $excel->getActiveSheet()->setCellValue('E' . $numRow, $row->quantity);
			    
			    $numRow++;
			}
			header('Content-type: application/vnd.ms-excel');
			header('Content-Disposition: attachment; filename="data.xls"');
			PHPExcel_IOFactory::createWriter($excel, 'Excel2007')->save('php://output');

		}
		public function findBillUser($idExport)
		{
			$conn=Connection::getInstance();
			$query=$conn->query("select * from orders where id=$idExport");
			$data=$query->fetch();

			$query2=$conn->query("select * from users where id=$data->customer_id");
			return $query2->fetch();
		}
		public function findBillOder($idExport)
		{
			$conn=Connection::getInstance();
			$query=$conn->query("select * from orders where id=$idExport");
			$data=$query->fetch();
			return $data;
		}
		public function finddetailOder($idExport)
		{
			$conn=Connection::getInstance();
			$query=$conn->query("select * from orders where id=$idExport");
			$data=$query->fetch();

			$query2=$conn->query("select * from orderdetails where 	order_id=$data->id");
			return $query2->fetchAll();
		}
		public function findLoaisp($product_id)
		{
			$conn=Connection::getInstance();
			$query=$conn->query("select * from loaisp where id=$product_id");
			return $query->fetch();
		}
		public function exportExcelBillUser()
		{
			//import phpexcel
			require "PHPExcel-1.8/Classes/PHPExcel.php";
			$excel = new PHPExcel();
			$excel->setActiveSheetIndex(0);
			$excel->getActiveSheet()->setTitle('Xuất hóa đơn');
			
			//lấy data
			$conn=Connection::getInstance();
			//lấy người nhận
			$idcustomer=isset($_GET["customer"])?$_GET["customer"]:0;
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
	}


 ?>