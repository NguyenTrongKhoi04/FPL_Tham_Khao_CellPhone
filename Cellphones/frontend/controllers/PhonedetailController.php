<?php 
	include "models/PhonedetailModel.php";
	/**
	 * 
	 */
	class PhonedetailController extends Controller
	{
		//hàm tạo kiểm tra đăng nhập
		// public function __construct(){
		// 	$this->authentication();
		// }
		use PhonedetailModel;
		public function index(){
			//load view	
			$this->loadView("PhonedetailView.php");

		}
		public function checkOut()
		{
			if(!isset($_SESSION["customer_id"]))
				header("location:index.php?controller=login");
			else
			{

				$id=isset($_GET["id"])?$_GET["id"]:0;
				$star=isset($_GET["star"])?$_GET["star"]:1;
				$this->starProduct($id,$star);

				$category=isset($_GET["category"])?$_GET["category"]:"";
				if($category=="")
					header("location:index.php?controller=phonedetail&id=$id&message=Success");
				else if($category=="phukien")
					header("location:index.php?controller=phonedetail&action=phukiendetail&id=$id&message=Success");
				else if($category=="dongho")
					header("location:index.php?controller=phonedetail&action=donghodetail&id=$id&message=Success");
				else if($category=="amthanh")
					header("location:index.php?controller=phonedetail&action=amthanhdetail&id=$id&message=Success");
				else if($category=="laptop")
					header("location:index.php?controller=phonedetail&action=laptopdetail&id=$id&message=Success");
				
			}
		}
		public function modelGetStar($product_id,$star)
		{
			$conn=Connection::getInstance();
			$query=$conn->query("select id from rating where product_id=$product_id and star=$star");
			//trả về số lượng bản ghi
			return $query->rowCount();

		}
		public function phukiendetail()
		{
			$this->loadView("PhukiendetailView.php");
		}
		public function donghodetail()
		{
			$this->loadView("DonghodetailView.php");
		}
		public function amthanhdetail()
		{
			$this->loadView("AmthanhdetailView.php");
		}
		public function laptopdetail()
		{
			$this->loadView("LaptopdetailView.php");
		}
		
	}
 ?>