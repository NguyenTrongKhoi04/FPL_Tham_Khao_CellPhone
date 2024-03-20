<?php 
	include "models/AmthanhModel.php";
	/**
	 * 
	 */
	class AmthanhController extends Controller
	{
		use AmthanhModel;
		public function index(){
			//load view	
			$this->loadView("LoutAmthanhView.php");
		}
	}
 ?>