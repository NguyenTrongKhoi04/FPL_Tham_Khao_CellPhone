<?php 
	include "models/DonghoModel.php";
	/**
	 * 
	 */
	class DonghoController extends Controller
	{
		use DonghoModel;
		public function index(){
			//load view	
			$this->loadView("LoutDonghoView.php");
		}
	}
 ?>