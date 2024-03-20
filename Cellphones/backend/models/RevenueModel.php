<?php 
	trait RevenueModel
	{
		public function findSearch($month,$year)
		{
			$conn = Connection::getInstance();
			$query = $conn->query("select * FROM `orders` where month(date)=$month and year(date)=$year");
			//lay tong so ban ghi
			return $query->fetchAll();
		}
		public function findUserBuy($customer_id)
		{
			$conn=Connection::getInstance();
			$query=$conn->query("select * from users where id=$customer_id");
			$data= $query->fetch();
			return $data;
		}
		
	}



 ?>