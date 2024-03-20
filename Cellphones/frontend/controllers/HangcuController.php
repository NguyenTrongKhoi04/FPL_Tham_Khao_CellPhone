<?php 
	include "models/HangcuModel.php";
	/**
	 * 
	 */
	class HangcuController extends Controller
	{
		use HangcuModel;
		public function index(){
			//load view	
			$this->loadView("LoutHangcuView.php");
		}
		public function detail()
		{
			$this->loadView("HangcudetailView.php");
		}
		public function modelGetStar($product_id,$star)
		{
			$conn=Connection::getInstance();
			$query=$conn->query("select id from ratingold where product_id=$product_id and star=$star");
			//trả về số lượng bản ghi
			return $query->rowCount();

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
				header("location:index.php?controller=hangcu&action=detail&id=$id&message=Success");
			}
		}
	}
 ?>