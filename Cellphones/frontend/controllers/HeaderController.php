<?php 
	include "models/HeaderModel.php";
	/**
	 * 
	 */
	class HeaderController extends Controller
	{
		//hàm tạo kiểm tra đăng nhập
		// public function __construct(){
		// 	$this->authentication();
		// }
		use HeaderModel;
		public function ListPhukien(){
			return $this->modelListPhukien();

		}
		public function ListDongho(){
			return $this->modelListDongho();

		}
		public function ListAmthanh(){
			return $this->modelListAmthanh();

		}
		public function ListLaptop(){
			return $this->modelListLaptop();

		}
		public function ListHangcu(){
			return $this->modelListHangcu();

		}
		public function ListPhone(){
			return $this->modelListPhone();

		}
		
		
		
	}
 ?>