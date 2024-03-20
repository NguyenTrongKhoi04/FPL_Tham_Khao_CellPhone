<?php 
	include "models/CommentModel.php";
	/**
	 * 
	 */
	class CommentController extends Controller
	{
		use CommentModel;
		public function index(){
			$this->modelComment();
			$id_product=isset($_GET['id_product'])?$_GET['id_product']:0;
			header("location:index.php?controller=phonedetail&id=$id_product");	
		}
	}
 ?>