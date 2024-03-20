<?php 
	include "models/NhasanxuatModel.php";
	/**
	 * 
	 */
	class NhasanxuatController extends Controller
	{
		use NhasanxuatModel;
		public function index()
		{
			$this->loadView("NhasanxuatView.php");
		}
		public function dongho()
		{
			$this->loadView("DonghoView.php");
		}
		
		public function amthanh()
		{
			$this->loadView("AmthanhView.php");
		}
		public function laptop()
		{
		    $this->loadView("LaptopView.php");
		}
		public function phukien()
		{
		    $this->loadView("PhuKienView.php");
		}
		public function hangcu()
		{
		    $this->loadView("HangcuView.php");
		}
		
	}

 ?>