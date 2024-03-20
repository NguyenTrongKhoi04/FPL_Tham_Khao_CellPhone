<?php 
	include "models/NhasanxuatModel.php";

	/**
	 * 
	 */
	class NhasanxuatController extends Controller
	{
		use NhasanxuatModel;
		public function __construct()
		{
			$this->authentication();
		}

		public function index()
		{
			//định nghĩa số bản ghi trên 1 trang
			$recordPerPage=5;
			//tính tổng số trang
			$numPage=ceil($this->totalRecord()/$recordPerPage);
			//lấy dữ liệu từ model
			$data=$this->modelRead($recordPerPage);
			//load view truyền dữ kiệu ra view
			$this->loadView("NhasanxuatView.php",["data"=>$data,"numPage"=>$numPage]);
		}

		//creat
		
		public function create(){
			$action="index.php?controller=nhasanxuat&action=createPost";
			//gọi hàm update dữu iệu
			$this->loadView("NhasanxuatFormView.php",["action"=>$action]);
		}
		public function createPost(){
			//gọi hàm update dữu iệu
			if($this->modelCreate())
			{
				header("location:index.php?controller=nhasanxuat");
			}
			else
			{
				header("location:index.php?controller=nhasanxuat&action=create&notify=nameExits");
			}
		}

		//update-Get
		public function update(){
			$id=isset($_GET["id"])?$_GET["id"]:0;
			//gọi hàm từ model để lấy dữ liệu
			$record=$this->modelGetRecord($id);
			//tạo biến $action để đưa thuộc tích action của form
			$action="index.php?controller=nhasanxuat&action=updatePost&id=$id";

			//gọi view truyền dữ liệu ra view
			$this->loadView("NhasanxuatFormView.php",["record"=>$record,"action"=>$action]);
		}
		//update - Post
		public function updatePost(){
			$id=isset($_GET["id"])?$_GET["id"]:0;
			//gọi hàm update dữu iệu
			$record=$this->modelUpdate($id);
			header("location:index.php?controller=nhasanxuat");
		}


		//xóa bản ghi
		public function delete()
		{
			$id=isset($_GET["id"])?$_GET["id"]:0;
			$record=$this->modelDelete($id);
			header("location:index.php?controller=nhasanxuat");
		}
	}
 ?>