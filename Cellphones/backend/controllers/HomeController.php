<?php 
	include "models/HomeModel.php";
	/**
	 * 
	 */
	class HomeController extends Controller
	{
		use HomeModel;
		//hàm tạo kiểm tra đăng nhập
		public function __construct(){
			
			$this->authentication();
		}
		public function index(){
			//load view	
			$this->loadView("HomeView.php");

		}
		public function backUp()
		{
			$this->backUpModel();
		}	
	}
 ?>