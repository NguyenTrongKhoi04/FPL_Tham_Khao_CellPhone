<?php 
	include "models/CartModel.php";
	/**
	 * 
	 */
	class CartController extends Controller
	{
		use CartModel;
		public function __construct()
		{
			//kiểm tra nếu giỏ hàng chưa tồn tại thì khởi tạo nó
			if(!isset($_SESSION["cart"]))
				$_SESSION["cart"]=array();
		}
		//hàm hiển thị giỏi hàng
		public function index()
		{
			$this->loadView("CartView.php");
		}
		//
		//thêm vào rỏ hàng
		public function create()
		{
			$id=isset($_GET["id"])?$_GET["id"]:0;
			//gọi hàm cartAdd từ model vào sesion array
			$this->cartAdd($id);
			//quay lại trang giỏi hàng
			header("location:index.php?controller=cart");
		}
		//xóa thanh phần khỏi rỏ hàng
		public function delete()
		{
			$id=isset($_GET["id"])?$_GET["id"]:0;
			//gọi hàm cartAdd từ model vào sesion array
			$this->cartDelete($id);
			//quay lại trang giỏi hàng
			header("location:index.php?controller=cart");
		}
		public function destroy()
		{
			//gọi hàm cartAdd từ model vào sesion array
			$this->cartDestroy();
			//quay lại trang giỏi hàng
			header("location:index.php?controller=cart");
		}
		//update số lượng sản phẩm trong giỏ hàng
		public function update()
		{
			
			foreach ($_SESSION["cart"] as $rows) {
				$product_id=$rows["id"];
				$quantity=$_POST["product_$product_id"];
				$this->cartUpdate($product_id,$quantity);
			}
			header("location:index.php?controller=cart");
		}
		public function checkOut()
		{
			if(!isset($_SESSION["customer_id"]))
				header("location:index.php?controller=login");
			else
			{

				$this->exportExcelBill();
				$_SESSION["cart"]=array();
			}
		}
		public function billcheckOut()
		{
			if(!isset($_SESSION["customer_id"]))
				header("location:index.php?controller=login");
			else
			{
				$order_id=$this->cartCheckOut();
				$data=$this->findBillCustomer();
				$this->loadView("BillView.php",['data'=>$data,'order_id'=>$order_id]);
			}
		}
		
	}


 ?>