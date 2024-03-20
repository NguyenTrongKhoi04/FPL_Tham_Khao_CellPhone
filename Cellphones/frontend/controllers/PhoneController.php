<?php 
	include "models/PhoneModel.php";
	/**
	 * 
	 */
	class PhoneController extends Controller
	{
		//hàm tạo kiểm tra đăng nhập
		// public function __construct(){
		// 	$this->authentication();
		// }
		use PhoneModel;
		public function index(){
			//load view	
			$this->loadView("PhoneView.php");

		}
	}
 ?>