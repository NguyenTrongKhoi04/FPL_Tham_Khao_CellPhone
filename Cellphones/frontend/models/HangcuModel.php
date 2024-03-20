<?php 
	trait HangcuModel{
		public function modelHotSp()
		{
			$conn=Connection::getInstance();
			$id_nsx=$_GET["id"];
			$query=$conn->query("select *  from hangcu where id_nsx=$id_nsx");
			return $query->fetchAll();
		}
		public function findUserLogin()
		{
			$email=isset($_SESSION['customer_email'])?$_SESSION['customer_email']:"";
			$conn=Connection::getInstance();
			$str="select * FROM users WHERE email ='$email'";
			$query=$conn->query($str);
			return $query->fetch();
		}
		public function modelGetStarAvg($id)
		{
			$conn=Connection::getInstance();
			$queryCheck=$conn->query("select Avg(star) as avg,count(id) as count FROM `ratingold` WHERE product_id=$id");
			return $queryCheck->fetchAll();
		}
		public function detailProduct()
		{
			$conn=Connection::getInstance();
			$id=$_GET["id"];
			$query=$conn->query("select * from hangcu where id=$id");
			return $query->fetchAll();
		}

		public function detailThongso($id)
		{
			$conn=Connection::getInstance();
			$query=$conn->query("select *  from detailold where id_products=$id");
			return $query->fetchAll();
		}
		public function starProduct($id,$star)
		{
			$conn=Connection::getInstance();
			$user_id=$_SESSION["customer_id"];
			$queryCheck=$conn->query("select id from ratingold where id_user=$user_id and product_id=$id");
			if($queryCheck->rowCount()==0)
			{
				$query=$conn->query("insert into ratingold set product_id=$id, star=$star,id_user=$user_id");
			}
			else
			{
				$queryDelete=$conn->query("delete from ratingold where id_user=$user_id and product_id=$id");
				$query=$conn->query("insert into ratingold set product_id=$id, star=$star,id_user=$user_id");
			}
		}
		public function findNsx()
		{
			if(isset($_GET['id']))
			{
				$id=isset($_GET['id'])?$_GET['id']:"";
				$conn=Connection::getInstance();
				$query=$conn->query("select *  from nhasanxuat where id=$id");
				return $query->fetch();
			}
		}
		public function hotSpNsx()
		{
			if(isset($_GET['id']))
			{
				$id=isset($_GET['id'])?$_GET['id']:"";
				$conn=Connection::getInstance();
				$query=$conn->query("select *  from hangcu where id_nsx=$id and hot='1' order BY RAND() limit 5");
				return $query->fetchAll();
			}
			else
			{
				$conn=Connection::getInstance();
				$query=$conn->query("select *  from hangcu where hot='1' order BY RAND() limit 5");
				return $query->fetchAll();
			}
		}	
		
	}


 ?>