<?php 
	include "models/StaffModel.php";
	/**
	 * 
	 */
	class StaffController extends Controller
	{
		use StaffModel;
		//hàm tạo kiểm tra đăng nhập
		public function __construct(){
			
			$this->checkLogin();
		}
		// public function index(){
		// 	//load view	
		// 	$this->loadView("StaffView.php");

		// }
		public function index(){
			//quy dinh so ban ghi tren mot trang
			$recordPerPage = 10;
			//tinh so trang
			$numPage = ceil($this->modelTotal()/$recordPerPage);
			//goi ham de lay du lieu
			$listRecord = $this->modelRead($recordPerPage);
			//load view
			$this->loadView("StaffView.php",["listRecord"=>$listRecord,"numPage"=>$numPage]);
		}	
		//xac nhan da giao hang
		public function delivery(){
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//goi ham tu model de thuc hien
			$this->modelDelivery($id);
			//di chuyen den trang danh sach cac ban ghi
			// echo "<script>location.href='index.php?controller=orders';</script>";
			header('location:index.php?controller=staff');
		}	
		//chi tiet don hang
		public function detail(){
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			//goi ham tu model de thuc hien
			$data = $this->modelListOrderDetails($id);
			//load view
			$this->loadView("StaffDetailView.php",["data"=>$data,"id"=>$id]);
		}
		public function exportExcel()
		{
			$idExport=isset($_GET['idExport'])?$_GET['idExport']:0;
			
			$this->exportExcelModel($idExport);
		}
		public function seeBill()
		{
			$idExport=isset($_GET['idExport'])?$_GET['idExport']:"";

			$user=$this->findBillUser($idExport);
			$order=$this->findBillOder($idExport);
			$detailOder=$this->finddetailOder($idExport);
			$this->loadView("StaffBillViewUser.php",['user'=>$user,'order'=>$order,'detailOder'=>$detailOder]);
		}
		public function exportExcelUser()
		{
			$this->exportExcelBillUser();
		}
		public function logoutStaff()
		{
			unset($_SESSION["emailStaff"]);
			header("location:index.php");
		}	
	}
 ?>