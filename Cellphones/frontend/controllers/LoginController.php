<?php 
	include "models/LoginModel.php";
	/**
	 * 
	 */
	class LoginController extends Controller
	{
		//hàm tạo kiểm tra đăng nhập
		// public function __construct(){
		// 	$this->authentication();
		// }
		use LoginModel;
		public function index(){
			//load view	
			$this->loadView("LoginView.php");

		}
		public function postlogin()
		{
			$this->findLogin();
		}
		public function logout()
		{
		    unset($_SESSION["customer_email"]);
		    unset($_SESSION["customer_id"]); 
			header("location:index.php");
		}
		public function info()
		{
			$user=$_SESSION["customer_id"];
			$result=$this->findUser($user);
			$this->loadView("InforUserView.php",['result'=>$result]);
		}
		public function registration()
		{
			$this->loadView("RegistrationView.php");
		}
		public function postRegistration()
		{
			if($this->postRegistrationModel())
				$this->loadView("RegistrationView.php",['mes'=>'ok']);
		}
		public function postUpdate()
		{
			if($this->postUpdateModel())
				{
					$user=$_SESSION["customer_id"];
					$result=$this->findUser($user);
					$this->loadView("InforUserView.php",['result'=>$result,'mes'=>'ok']);
				}
		}
		public function viewCart()
		{
			$result=$this->seeCartModel();
			$id=$_SESSION["customer_id"];
			$user=$this->findUser($id);
			$this->loadView("SeeCartView.php",['result'=>$result,'user'=>$user]);
		}
		public function exportExcel()
		{
			$this->exportExcelModel();
		}
		
	}
 ?>