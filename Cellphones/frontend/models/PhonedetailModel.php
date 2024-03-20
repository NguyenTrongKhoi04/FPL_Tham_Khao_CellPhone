
<?php 
	trait PhonedetailModel{
		public function detailProduct()
		{
			$conn=Connection::getInstance();
			$id=$_GET["id"];
			$query=$conn->query("select *  from loaisp where id=$id");
			return $query->fetchAll();
		}
		public function detailThongso($id)
		{
			$conn=Connection::getInstance();
			$query=$conn->query("select *  from detail where id_products=$id");
			return $query->fetchAll();
		}
		public function starProduct($id,$star)
		{
			$conn=Connection::getInstance();
			$user_id=$_SESSION["customer_id"];
			$queryCheck=$conn->query("select id from rating where id_user=$user_id and product_id=$id");
			if($queryCheck->rowCount()==0)
			{
				$query=$conn->query("insert into rating set product_id=$id, star=$star,id_user=$user_id");
			}
			else
			{
				$queryDelete=$conn->query("delete from rating where id_user=$user_id and product_id=$id");
				$query=$conn->query("insert into rating set product_id=$id, star=$star,id_user=$user_id");
			}
		}
		public function modelGetStarAvg($id)
		{
			$conn=Connection::getInstance();
			$queryCheck=$conn->query("select Avg(star) as avg FROM `rating` WHERE product_id=$id");
			return $queryCheck->fetchAll();
		}

		public function modelGetStarAvg_Count($id)
		{
			$conn=Connection::getInstance();
			$queryCheck=$conn->query("select Avg(star) as avg,count(id) as count FROM `rating` WHERE product_id=$id");
			return $queryCheck->fetchAll();
		}
		//phukien
		public function Sanphancunggia($Gia_Sp)
		{
			$conn=Connection::getInstance();
			$Min_Price=$Gia_Sp-500000;
			$Max_Price=$Gia_Sp+500000;

			$queryCheck=$conn->query("select * FROM `loaisp` WHERE parent_id<>0 and ((price-(price*(discount/100))) BETWEEN $Min_Price and $Max_Price) ORDER BY RAND() limit 12");
			return $queryCheck->fetchAll();
		}
		public function findUserLogin()
		{
			$email=isset($_SESSION['customer_email'])?$_SESSION['customer_email']:"";
			$conn=Connection::getInstance();
			$str="select * FROM users WHERE email ='$email'";
			$query=$conn->query($str);
			return $query->fetch();
		}
		public function findUser($id)
		{
			$conn=Connection::getInstance();
			$str="select * FROM users WHERE id ='$id'";
			$query=$conn->query($str);
			return $query->fetch();
		}
		public function findComment()
		{
			$id=isset($_GET['id'])?$_GET['id']:"";
			$conn=Connection::getInstance();
			$query=$conn->query("select * from comment where id_product=$id");
			return $query->fetchAll();
		}
	}


 ?>