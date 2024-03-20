<?php 
	trait CommentModel{
		public function modelComment()
		{
			$conn=Connection::getInstance();
			$id_product=isset($_GET['id_product'])?$_GET['id_product']:0;
			$id_user=isset($_SESSION['customer_id'])?$_SESSION['customer_id']:"";
			$comment=isset($_POST['comment'])?$_POST['comment']:"";

			$conn->query("insert into comment set id_product='$id_product',id_user='$id_user',comment='$comment'");
			return true;
			
		}
	}
?>