<?php 
	include "models/RevenueModel.php";

	/**
	 * 
	 */
	class RevenueController extends Controller
	{
		use RevenueModel;
		public function __construct()
		{
			$this->authentication();
		}
		public function index()
		{
			$this->loadView("RevenueView.php");
		}
		public function search()
		{
			$month=isset($_POST['month'])?$_POST['month']:"";
			$year=isset($_POST['year'])?$_POST['year']:"";
			$data=$this->findSearch($month,$year);
			$sum=0;
			foreach ($data as  $value) {
				$sum=$sum+$value->price;
			}
			$this->loadView("RevenueView.php",["data"=>$data,'sum'=>$sum]);
			
		}
	}
 ?>