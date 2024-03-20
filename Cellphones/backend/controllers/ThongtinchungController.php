<?php 
	include "models/ThongtinchungModel.php";
	/**
	 * 
	 */
	class ThongtinchungController extends Controller
	{
		use ThongtinchungModel;
		public function index()
		{
			$this->loadView("ThongtinchungView.php");
		}
		public function backUp()
		{
			$this->backUpModel();
		}		
	}

 ?>