<?php 
	trait LoginModel{
		public function findLogin()
		{
			$email = $_POST["email"];
			$password = $_POST["password"];
			$password=md5($password);
			$conn=Connection::getInstance();
			$query=$conn->query("select * from users where email='$email' and position=0");
			$result=$query->fetch();

			if(isset($result->email))
			{
				if($result->password==$password)
				{
					$_SESSION["customer_email"]=$email;
					$_SESSION["customer_id"]=$result->id;
					header("location:index.php");
				}
				else
				{
					echo "Sai mật khẩu";
				}
			}
			else
			{
				header("location:index.php?controller=login");
			}

			
		}
		public function findUserLogin()
		{
			$email=isset($_SESSION['customer_email'])?$_SESSION['customer_email']:"";
			$conn=Connection::getInstance();
			$str="select * FROM users WHERE email ='$email'";
			$query=$conn->query($str);
			return $query->fetch();
		}
		public function postRegistrationModel()
		{
			$conn=Connection::getInstance();
			$email=isset($_POST['email'])?$_POST['email']:"";
			$password=isset($_POST['password'])?$_POST['password']:"";
			$password=md5($password);
			$phone=isset($_POST['phone'])?$_POST['phone']:"";
			$first_name=isset($_POST['first_name'])?$_POST['first_name']:"";
			$last_name=isset($_POST['last_name'])?$_POST['last_name']:"";
			$country=isset($_POST['country'])?$_POST['country']:"";
			$city=isset($_POST['city'])?$_POST['city']:"";
			if($_FILES["picture"]["name"] != "")
			{

				$picture= time()."_".$_FILES["picture"]["name"];
				move_uploaded_file($_FILES["picture"]["tmp_name"], "../assets/upload/users/$picture");
			}
			$conn->query("insert into users set email='$email',phone='$phone',password='$password',first_name='$first_name',position='0',last_name='$last_name',country='$country',city='$city',picture='$picture'");
			return true;
		}
		public function findUser($user)
		{
			$conn=Connection::getInstance();
			$query=$conn->query("select * from users where id=$user and position=0");
			$result=$query->fetch();
			return 	$result;
		}
		public function postUpdateModel()
		{
			$conn=Connection::getInstance();
			$id=$_SESSION["customer_id"];
			$password=$_POST['password'];
			$phone=$_POST['phone'];
			$first_name=$_POST['first_name'];
			$last_name=$_POST['last_name'];
			$country=$_POST['country'];
			$city=$_POST['city'];
			if($_FILES["picture"]["name"] != "")
			{
				$picture= time()."_".$_FILES["picture"]["name"];
				move_uploaded_file($_FILES["picture"]["tmp_name"], "../assets/upload/users/$picture");
				$queryOldPicture= $conn->query("select picture from users where id=$id");
				$oldPicture=$queryOldPicture->fetch();
				if($oldPicture->picture != "" && file_exists("../assets/upload/users/".$oldPicture->picture))
				{
					unlink("../assets/upload/users/".$oldPicture->picture);
				} 
			}
			$conn->query("update users set phone='$phone',first_name='$first_name',last_name='$last_name',country='$country',city='$city',picture='$picture' where id=$id");
			if($password!="")
			{
				$password=md5($password);
				$conn->query("update users set password='$password' where id=$id");
			}
			return true;
		}
		public function seeCartModel()
		{
			$conn=Connection::getInstance();
			$id=$_SESSION["customer_id"];
			$query=$conn->query("select * from orders where customer_id=$id");
			$result=$query->fetchAll();
			return $result;
		}
		public function modelGetProducts($product_id)
		{
			$conn=Connection::getInstance();
			$query=$conn->query("select * from loaisp where id=$product_id");
			$result=$query->fetch();
			return $result;
		}
		public function modelGetDetailOrder($order_id)
		{
			$conn=Connection::getInstance();
			$query=$conn->query("select * from orderdetails where order_id=$order_id");
			$result=$query->fetchAll();
			return $result;
		}
		public function exportExcelModel()
		{
			$idExport=isset($_GET['idExport'])?$_GET['idExport']:0;
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
			$excel->getActiveSheet()->setCellValue('D1', 'Giảm giá %');
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
			$tong=0;
			foreach ($orderdetails as $row){
				$query3=$conn->query("select * from loaisp where id = $row->product_id");
				$loaisp=$query3->fetch();
				$tong=$tong+$loaisp->price;
				// ($loaisp->price-($loaisp->price*$loaisp->discount/100));
			}
			
			$excel->getActiveSheet()->setCellValue('C' . $numRow, 'Tổng giá: '.$tong);

			header('Content-type: application/vnd.ms-excel');
			header('Content-Disposition: attachment; filename="xuathoadon.xls"');
			PHPExcel_IOFactory::createWriter($excel, 'Excel2007')->save('php://output');
		}
	}


 ?>