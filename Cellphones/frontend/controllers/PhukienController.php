<?php 
	include "models/PhukienModel.php";
	/**
	 * 
	 */
	class PhukienController extends Controller
	{
		use PhukienModel;
		public function index(){
			//load view	
			$this->loadView("LoutPhukienView.php");
		}
	}
 ?>