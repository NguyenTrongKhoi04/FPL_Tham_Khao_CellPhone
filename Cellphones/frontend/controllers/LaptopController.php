<?php 
	include "models/LaptopModel.php";
	/**
	 * 
	 */
	class LaptopController extends Controller
	{
		use LaptopModel;
		public function index(){
			//load view	
			$this->loadView("LoutLaptopView.php");
		}
	}
 ?>