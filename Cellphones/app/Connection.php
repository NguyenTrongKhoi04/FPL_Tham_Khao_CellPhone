<?php 
	//connection
	/**
	 * 
	 */
	class Connection 
	{
		public static function getInstance(){
			$conn=new PDO("mysql:hostname=localhost;dbname=cellphones",'root',"");
			// lấy dữ liệu kiểu unicode
			$conn->exec("set names utf8");
			//mặc định duyệt bản ghi theo oject
			$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
			return $conn;
		}
	}
 ?>
