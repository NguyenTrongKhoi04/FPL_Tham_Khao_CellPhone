<?php 
	include "models/HomeModel.php";
	/**
	 * 
	 */
	class HomeController extends Controller
	{
		//hàm tạo kiểm tra đăng nhập
		// public function __construct(){
		// 	$this->authentication();
		// }
		use HomeModel;
		public function index(){
			//load view	
			$this->loadView("HomeView.php");

		}
		public function notify()
		{
			$this->loadView("NotifyView.php");
		}
		public function checkOut()
		{
			if(!isset($_SESSION["customer_id"]))
				header("location:index.php?controller=login");
			else
			{
				$id=isset($_GET["id"])?$_GET["id"]:0;
				header("location:index.php?controller=phonedetail&id=$id");
			}
		}
		public function hot()
		{
			$this->loadView("HotView.php");
		}
		public function nsxhot()
		{
			$this->loadView("NsxhotView.php");
		}
		public function hotdongho()
		{
			$this->loadView("HotDonghoView.php");
		}
		public function nsxhotDongho()
		{
			$this->loadView("NsxhotDonghoView.php");
		}
		public function hotamthanh()
		{
			$this->loadView("HotAmthanhView.php");
		}
		public function nsxhotAmthanh()
		{
			$this->loadView("NsxhotAmthanhView.php");
		}
		public function hotlaptop()
		{
			$this->loadView("HotLaptopView.php");
		}
		public function nsxhotLaptop()
		{
			$this->loadView("NsxhotLaptopView.php");
		}
		public function hotphukien()
		{
			$this->loadView("HotPhuKienView.php");
		}
		public function nsxhotPhukien()
		{
			$this->loadView("NsxhotPhukienView.php");
		}
		public function hothangcu()
		{
			$this->loadView("HotHangCuView.php");
		}
		public function hangcu()
		{
			$this->loadView("NsxhotHangCuView.php");
		}
	}
 ?>