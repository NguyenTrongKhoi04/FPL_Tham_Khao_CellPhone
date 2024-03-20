<?php 
	/**
	 * 
	 */
	include "models/LoginModel.php";
	
	class LoginController extends Controller
	{
		
		use LoginModel;
		public function index()
		{
			$this->loadView("LoginView.php");
		}
		//khi ấn nút submit
		public function login()
		{
			$this->modelLogin();
			//quay lại index
			if(isset($_SESSION["emailStaff"])==true && $_SESSION["emailStaff"]!="")
			{
				header("location:index.php?controller=staff");
			}
			else
			{
				header("location:index.php");
			}
			

		}
		public function logout(){
			unset($_SESSION["email"]);
			header("location:index.php");
		}
	}

 ?>