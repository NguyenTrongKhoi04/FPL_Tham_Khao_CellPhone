<?php 
	trait HomeModel{
		public function modelHotLoaisp()
		{
			$conn=Connection::getInstance();
			$query=$conn->query("select * from loaisp where hot=1 order by Rand() asc limit 10");
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
		public function modelHotWatch()
		{
			$conn=Connection::getInstance();
			$str="select * FROM loaisp WHERE parent_id <> 0  AND parent_id in (select id from loaisp WHERE name='Đòng hồ') ORDER BY RAND () limit 10";
			$query=$conn->query($str);
			return $query->fetchAll();
			
		}
		public function modelHotAmthanh()
		{
			$conn=Connection::getInstance();
			$str="select * FROM loaisp WHERE parent_id <> 0  AND parent_id in (select id from loaisp WHERE name='Tai nghe') ORDER BY RAND () limit 10";
			$query=$conn->query($str);
			return $query->fetchAll();
			
		}
		public function modelHotLaptop()
		{
			$conn=Connection::getInstance();
			$str="select * FROM loaisp WHERE parent_id <> 0  AND parent_id in (select id from loaisp WHERE name='Lap top') ORDER BY RAND () limit 10";
			$query=$conn->query($str);
			return $query->fetchAll();
			
		}
		public function modelHotPhukien()
		{
			$conn=Connection::getInstance();
			$str="select * FROM loaisp WHERE parent_id <> 0  AND parent_id in (select id from loaisp WHERE name='Phụ kiện') ORDER BY RAND () limit 10";
			$query=$conn->query($str);
			return $query->fetchAll();
			
		}
		public function modelHotHangcu()
		{
			$conn=Connection::getInstance();
			$str="select * FROM hangcu WHERE hot=1 ORDER BY RAND () limit 5";
			$query=$conn->query($str);
			return $query->fetchAll();
			
		}

		public function modelHotSp()
		{
			$conn=Connection::getInstance();
			$query=$conn->query("select *  from loaisp where hot='1' and parent_id <> 0");
			return $query->fetchAll();
		}
		public function modelHotDongho()
		{
			$conn=Connection::getInstance();
			$query=$conn->query("select *  from loaisp where hot='1' and parent_id <> 0 and parent_id in (select id from loaisp where name='Đồng hồ')");
			return $query->fetchAll();
		}
		public function modelHotSpNsx($id_nsx)
		{
			$conn=Connection::getInstance();
			$query=$conn->query("select *  from loaisp where hot='1' and parent_id <> 0 and id_nsx=$id_nsx");
			return $query->fetchAll();
		}
		public function modelGetStarAvg($id)
		{
			$conn=Connection::getInstance();
			$queryCheck=$conn->query("select Avg(star) as avg,count(id) as count FROM `rating` WHERE product_id=$id");
			return $queryCheck->fetchAll();
		}
		public function modelHotSpNsxDongho($id_nsx)
		{
			$conn=Connection::getInstance();
			$query=$conn->query("select * from loaisp where hot='1' and parent_id <> 0 and id_nsx=$id_nsx and parent_id in (select id from loaisp where name='Đồng hồ')");
			return $query->fetchAll();
		}
		public function modelHotTainghe()
		{
			$conn=Connection::getInstance();
			$query=$conn->query("select *  from loaisp where hot='1' and parent_id <> 0 and parent_id in (select id from loaisp where name='Tai nghe')");
			return $query->fetchAll();
		}
		//fid nsx
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
				$query=$conn->query("select *  from loaisp where parent_id<>0 and id_nsx=$id and hot='1' order BY RAND() limit 5");
				return $query->fetchAll();
			}
			else
			{
				$conn=Connection::getInstance();
				$query=$conn->query("select *  from loaisp where parent_id<>0 and hot='1' order BY RAND() limit 5");
				return $query->fetchAll();
			}
		}
		public function modelHotSpNsxAmthanh($id_nsx)
		{
			$conn=Connection::getInstance();
			$query=$conn->query("select * from loaisp where hot='1' and parent_id <> 0 and id_nsx=$id_nsx and parent_id in (select id from loaisp where name='Tai nghe')");
			return $query->fetchAll();
		}
		public function modelHotMaytinh()
		{
			$conn=Connection::getInstance();
			$query=$conn->query("select *  from loaisp where hot='1' and parent_id <> 0 and parent_id in (select id from loaisp where name='Lap top' or name='Mac book')");
			return $query->fetchAll();
		}
		public function modelHotSpNsxLaptop($id_nsx)
		{
			$conn=Connection::getInstance();
			$query=$conn->query("select * from loaisp where hot='1' and parent_id <> 0 and id_nsx=$id_nsx and parent_id in (select id from loaisp where name='Lap top' or name='Mac book')");
			return $query->fetchAll();
		}
		public function modelHotPhuKien2()
		{
			$conn=Connection::getInstance();
			$query=$conn->query("select *  from loaisp where hot='1' and parent_id <> 0 and parent_id in (select id from loaisp where name='Phụ kiện')");
			return $query->fetchAll();
		}
		public function modelHotSpNsxPhukien($id_nsx)
		{
			$conn=Connection::getInstance();
			$query=$conn->query("select * from loaisp where hot='1' and parent_id <> 0 and id_nsx=$id_nsx and parent_id in (select id from loaisp where name='Phụ kiện')");
			return $query->fetchAll();
		}
		public function modelHangCu()
		{
			$conn=Connection::getInstance();
			$query=$conn->query("select *  from hangcu");
			return $query->fetchAll();
		}
		public function modelHotSpNsxHangcu($id_nsx)
		{
			$conn=Connection::getInstance();
			$query=$conn->query("select * from hangcu where hot='1' and id_nsx=$id_nsx");
			return $query->fetchAll();
		}
	}

 ?>