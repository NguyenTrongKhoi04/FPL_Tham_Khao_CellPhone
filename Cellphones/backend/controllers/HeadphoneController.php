<?php 
	include "models/HeadphoneModel.php";

	/**
	 * 
	 */
	class HeadphoneController extends Controller
	{
		use HeadphoneModel;
		public function __construct()
		{
			$this->authentication();
		}

		public function index()
		{
			//định nghĩa số bản ghi trên 1 trang
			$recordPerPage=1;
			//tính tổng số trang
			$numPage=ceil($this->totalRecord()/$recordPerPage);
			//lấy dữ liệu từ model
			$data=$this->modelRead($recordPerPage);
			//load view truyền dữ kiệu ra view
			$this->loadView("HeadphoneView.php",["data"=>$data,"numPage"=>$numPage]);
		}

		//creat
		
		public function create(){
			$action="index.php?controller=headphone&action=createPost";
			//gọi hàm update dữu iệu
			$this->loadView("HeadphoneFormView.php",["action"=>$action]);
		}
		public function createPost(){
			//gọi hàm update dữu iệu
			if($this->modelCreate())
			{
				header("location:index.php?controller=headphone");
			}
			else
			{
				header("location:index.php?controller=headphone&action=create&notify=nameExits");
			}
		}

		//update-Get
		public function update(){
			$id=isset($_GET["id"])?$_GET["id"]:0;
			//gọi hàm từ model để lấy dữ liệu
			$record=$this->modelGetRecord($id);
			//tạo biến $action để đưa thuộc tích action của form
			$action="index.php?controller=headphone&action=updatePost&id=$id";

			//gọi view truyền dữ liệu ra view
			$this->loadView("HeadphoneFormView.php",["record"=>$record,"action"=>$action]);
		}
		//update - Post
		public function updatePost(){
			$id=isset($_GET["id"])?$_GET["id"]:0;
			//gọi hàm update dữu iệu
			$record=$this->modelUpdate($id);
			header("location:index.php?controller=headphone");
		}


		//xóa bản ghi
		public function delete()
		{
			$id=isset($_GET["id"])?$_GET["id"]:0;
			$record=$this->modelDelete($id);
			header("location:index.php?controller=headphone");
		}
	}
 ?>