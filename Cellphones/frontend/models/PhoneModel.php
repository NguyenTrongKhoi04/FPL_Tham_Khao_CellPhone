
<?php 
	trait PhoneModel{
		public function modelHotSp()
		{
			$conn=Connection::getInstance();
			$id_nsx=$_GET["id"];
			$query=$conn->query("select *  from loaisp where id_nsx=$id_nsx AND parent_id in (select id from loaisp where name='Điện thoại')");
			return $query->fetchAll();
		}
		public function modelGetStarAvg($id)
		{
			$conn=Connection::getInstance();
			$queryCheck=$conn->query("select Avg(star) as avg,count(id) as count FROM `rating` WHERE product_id=$id");
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
	}


 ?>