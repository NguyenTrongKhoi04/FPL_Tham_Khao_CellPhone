<?php 
	trait SearchModel{
		
		public function modelSmartSearch($key)
		{
			$conn=Connection::getInstance();
			$query=$conn->query("select * from loaisp where name like '%$key%' and parent_id<>0 order by rand() limit 5");
			return $query->fetchAll();
		}
		public function modelGetStarAvg($id)
		{
			$conn=Connection::getInstance();
			$queryCheck=$conn->query("select Avg(star) as avg,count(id) as count FROM `rating` WHERE product_id=$id");
			return $queryCheck->fetchAll();
		}
		public function findAll($id_nsx,$category)
		{
			$conn=Connection::getInstance();
			$str="";
			if($category=="dienthoai")
			{
				$str="select *  from loaisp where id_nsx=$id_nsx AND parent_id in (select id from loaisp where name='Điện thoại')";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="phukien")
			{
				$str="select *  from loaisp where id_nsx=$id_nsx AND parent_id in (select id from loaisp where name='Phụ kiện')";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="dongho")
			{
				$str="select *  from loaisp where id_nsx=$id_nsx AND parent_id in (select id from loaisp where name='Đồng hồ')";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="amthanh")
			{
				$str="select *  from loaisp where id_nsx=$id_nsx AND parent_id in (select id from loaisp where name='Tai nghe')";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="laptop")
			{
				$str="select *  from loaisp where id_nsx=$id_nsx AND parent_id in (select id from loaisp where name='Lap top')";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="")
			{
				$str="select *  from loaisp where parent_id<>0";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
		}
		public function findDuoi5($id_nsx,$category)
		{
			$conn=Connection::getInstance();
			
			if($category=="dienthoai")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Điện thoại') and detail.kichthuocman<5 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="phukien")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Phụ kiện') and detail.kichthuocman<5 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="dongho")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Đồng hồ') and detail.kichthuocman<5 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="amthanh")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Tai nghe') and detail.kichthuocman<5 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="laptop")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Lap top') and detail.kichthuocman<5 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.parent_id<>0  and detail.kichthuocman<5 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
		}
		public function findTren5($id_nsx,$category)
		{
			$conn=Connection::getInstance();
			
			if($category=="dienthoai")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Điện thoại') and detail.kichthuocman>=5 and detail.kichthuocman<6 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="phukien")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Phụ kiện') and detail.kichthuocman>=5 and detail.kichthuocman<6 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="dongho")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Đồng hồ') and detail.kichthuocman>=5 and detail.kichthuocman<6 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="amthanh")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Tai nghe') and detail.kichthuocman>=5 and detail.kichthuocman<6 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="laptop")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Tai nghe') and detail.kichthuocman>=5 and detail.kichthuocman<6 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.parent_id<>0  and detail.kichthuocman>=5 and detail.kichthuocman<6 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
		}
		public function findTren6($id_nsx,$category)
		{
			$conn=Connection::getInstance();
			
			if($category=="dienthoai")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Điện thoại') and detail.kichthuocman>=6 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="phukien")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Phụ kiện') and detail.kichthuocman>=6 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="dongho")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Đồng hồ') and detail.kichthuocman>=6 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="amthanh")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Tai nghe') and detail.kichthuocman>=6 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="laptop")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Lap top') and detail.kichthuocman>=6 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.parent_id <>0 and detail.kichthuocman>=6 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
		}
		//find rom
		public function findRom32($id_nsx,$category)
		{
			$conn=Connection::getInstance();
			
			if($category=="dienthoai")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Điện thoại') and detail.rom=32 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="phukien")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Phụ kiện') and detail.rom=32 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="dongho")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Đồng hồ') and detail.rom=32 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="amthanh")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Tai nghe') and detail.rom=32 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="laptop")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Lap top') and detail.rom=32 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.parent_id <> 0 and detail.rom=32 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
		}
		public function findRom64($id_nsx,$category)
		{
			$conn=Connection::getInstance();
			
			if($category=="dienthoai")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Điện thoại') and detail.rom=64 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="phukien")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Phụ kiện') and detail.rom=64 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="dongho")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Đồng hồ') and detail.rom=64 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="amthanh")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Tai nghe') and detail.rom=64 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="laptop")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Lap top') and detail.rom=64 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.parent_id <> 0 and detail.rom=64 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
		}
		public function findRom128($id_nsx,$category)
		{
			$conn=Connection::getInstance();
			
			if($category=="dienthoai")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Điện thoại') and detail.rom=128 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="phukien")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Phụ kiện') and detail.rom=128 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="dongho")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Đồng hồ') and detail.rom=128 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="amthanh")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Tai nghe') and detail.rom=128 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="laptop")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Lap top') and detail.rom=128 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.parent_id<>0 and detail.rom=128 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
		}
		
		public function findRom256($id_nsx,$category)
		{
			$conn=Connection::getInstance();
			
			if($category=="dienthoai")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Điện thoại') and detail.rom=256 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="phukien")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Phụ kiện') and detail.rom=256 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="dongho")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Đồng hồ') and detail.rom=256 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="amthanh")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Tai nghe') and detail.rom=256 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="laptop")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Lap top') and detail.rom=256 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="")
			{
				$str="select loaisp.* from loaisp,detail where  loaisp.parent_id<>0 and detail.rom=256 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
		}
		public function findRom512($id_nsx,$category)
		{
			$conn=Connection::getInstance();
			
			if($category=="dienthoai")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Điện thoại') and detail.rom=512 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="phukien")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Phụ kiện') and detail.rom=512 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="dongho")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Đồng hồ') and detail.rom=512 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="amthanh")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Tai nghe') and detail.rom=512 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="laptop")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Lap top') and detail.rom=512 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.parent_id<>0 and detail.rom=512 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
		}
		//find sim
		public function findOneSim($id_nsx,$category)
		{
			$conn=Connection::getInstance();
			
			if($category=="dienthoai")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Điện thoại') and detail.sosim=1 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="phukien")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Phụ kiện') and detail.sosim=1 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="dongho")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Đồng hồ') and detail.sosim=1 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="amthanh")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Tai nghe') and detail.sosim=1 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="laptop")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Lap top') and detail.sosim=1 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.parent_id<>0 and detail.sosim=1 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
		}
		public function findTwoSim($id_nsx,$category)
		{
			$conn=Connection::getInstance();
			
			if($category=="dienthoai")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Điện thoại') and detail.sosim=2 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="phukien")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Phụ kiện') and detail.sosim=2 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="dongho")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Đồng hồ') and detail.sosim=2 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="amthanh")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Tai nghe') and detail.sosim=2 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="laptop")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Lap top') and detail.sosim=2 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.parent_id<>0 and detail.sosim=1 and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
		}
		//search hệ điều hành
		
		public function findIos($id_nsx,$category)
		{
			$conn=Connection::getInstance();
			
			if($category=="dienthoai")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Điện thoại') and detail.hedieuhanh like 'Ios' and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="phukien")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Phụ kiện') and detail.hedieuhanh like 'Ios' and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="dongho")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Đồng hồ') and detail.hedieuhanh like 'Ios' and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="amthanh")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Tai nghe') and detail.hedieuhanh like 'Ios' and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="laptop")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Lap top') and detail.hedieuhanh like 'Ios' and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.parent_id<>0 and detail.hedieuhanh like 'Ios' and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
		}
		public function findAndroi($id_nsx,$category)
		{
			$conn=Connection::getInstance();
			
			if($category=="dienthoai")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Điện thoại') and detail.hedieuhanh like 'Androi' and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="phukien")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Phụ kiện') and detail.hedieuhanh like 'Androi' and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="dongho")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Đồng hồ') and detail.hedieuhanh like 'Androi' and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="amthanh")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Tai nghe') and detail.hedieuhanh like 'Androi' and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="laptop")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Lap top') and detail.hedieuhanh like 'Androi' and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="")
			{
				$str="select loaisp.* from loaisp,detail where loaisp.parent_id<>0 and detail.hedieuhanh like 'Androi' and loaisp.id=detail.id_products";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
		}
		//search giá
		public function findPrice3M($id_nsx,$category)
		{
			$conn=Connection::getInstance();
			
			if($category=="dienthoai")
			{
				$str="select * from loaisp where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Điện thoại') and (price-(price*discount/100))<3000000";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="phukien")
			{
				$str="select * from loaisp where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Phụ kiện') and (price-(price*discount/100))<3000000";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="dongho")
			{
				$str="select * from loaisp where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Đồng hồ') and (price-(price*discount/100))<3000000";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="amthanh")
			{
				$str="select * from loaisp where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Tai nghe') and (price-(price*discount/100))<3000000";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="laptop")
			{
				$str="select * from loaisp where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Lap top') and (price-(price*discount/100))<3000000";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="")
			{
				$str="select * from loaisp where loaisp.hot='1' and loaisp.parent_id<>0 and (price-(price*discount/100))<3000000";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
		}
		public function findPrice3to6M($id_nsx,$category)
		{
			$conn=Connection::getInstance();
			
			if($category=="dienthoai")
			{
				$str="select * from loaisp where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Điện thoại') and (price-(price*discount/100))>=3000000 and (price-(price*discount/100))<6000000";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="phukien")
			{
				$str="select * from loaisp where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Phụ kiện') and (price-(price*discount/100))>=3000000 and (price-(price*discount/100))<6000000";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="dongho")
			{
				$str="select * from loaisp where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Đồng hồ') and (price-(price*discount/100))>=3000000 and (price-(price*discount/100))<6000000";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="amthanh")
			{
				$str="select * from loaisp where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Tai nghe') and (price-(price*discount/100))>=3000000 and (price-(price*discount/100))<6000000";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="laptop")
			{
				$str="select * from loaisp where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Lap top') and (price-(price*discount/100))>=3000000 and (price-(price*discount/100))<6000000";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="")
			{
				$str="select * from loaisp where loaisp.hot='1' and loaisp.parent_id<>0 and (price-(price*discount/100))>=3000000 and (price-(price*discount/100))<6000000";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
		}
		public function findPrice6to9M($id_nsx,$category)
		{
			$conn=Connection::getInstance();
			
			if($category=="dienthoai")
			{
				$str="select * from loaisp where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Điện thoại') and (price-(price*discount/100))>=6000000 and (price-(price*discount/100))<9000000";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="phukien")
			{
				$str="select * from loaisp where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Phụ kiện') and (price-(price*discount/100))>=6000000 and (price-(price*discount/100))<9000000";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="dongho")
			{
				$str="select * from loaisp where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Đồng hồ') and (price-(price*discount/100))>=6000000 and (price-(price*discount/100))<9000000";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="amthanh")
			{
				$str="select * from loaisp where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Tai nghe') and (price-(price*discount/100))>=6000000 and (price-(price*discount/100))<9000000";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="laptop")
			{
				$str="select * from loaisp where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Lap top') and (price-(price*discount/100))>=6000000 and (price-(price*discount/100))<9000000";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="")
			{
				$str="select * from loaisp where loaisp.hot='1' and loaisp.parent_id<>0 and (price-(price*discount/100))>=6000000 and (price-(price*discount/100))<9000000";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
		}
		public function findPrice9to12M($id_nsx,$category)
		{
			$conn=Connection::getInstance();
			
			if($category=="dienthoai")
			{
				$str="select * from loaisp where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Điện thoại') and (price-(price*discount/100))>=9000000 and (price-(price*discount/100))<12000000";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="phukien")
			{
				$str="select * from loaisp where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Phụ kiện') and (price-(price*discount/100))>=9000000 and (price-(price*discount/100))<12000000";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="dongho")
			{
				$str="select * from loaisp where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Đồng hồ') and (price-(price*discount/100))>=9000000 and (price-(price*discount/100))<12000000";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="amthanh")
			{
				$str="select * from loaisp where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Tai nghe') and (price-(price*discount/100))>=9000000 and (price-(price*discount/100))<12000000";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="laptop")
			{
				$str="select * from loaisp where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Lap top') and (price-(price*discount/100))>=9000000 and (price-(price*discount/100))<12000000";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="")
			{
				$str="select * from loaisp where loaisp.hot='1' and loaisp.parent_id<>0 and (price-(price*discount/100))>=9000000 and (price-(price*discount/100))<12000000";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
		}
		public function findPrice12M($id_nsx,$category)
		{
			$conn=Connection::getInstance();
			
			if($category=="dienthoai")
			{
				$str="select * from loaisp where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Điện thoại') and (price-(price*discount/100))>=12000000";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="phukien")
			{
				$str="select * from loaisp where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Phụ kiện') and (price-(price*discount/100))>=12000000";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="dongho")
			{
				$str="select * from loaisp where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Đồng hồ') and (price-(price*discount/100))>=12000000";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="amthanh")
			{
				$str="select * from loaisp where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Tai nghe') and (price-(price*discount/100))>=12000000";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="laptop")
			{
				$str="select * from loaisp where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Lap top') and (price-(price*discount/100))>=12000000";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="")
			{
				$str="select * from loaisp where loaisp.hot='1' and loaisp.parent_id<>0 and (price-(price*discount/100))>=12000000";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
		}
		//sắp xếp
		public function findPriceUp($id_nsx,$category)
		{
			$conn=Connection::getInstance();
			
			if($category=="dienthoai")
			{
				$str="select * from loaisp where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Điện thoại') ORDER BY price ASC";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="phukien")
			{
				$str="select * from loaisp where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Phụ kiện') ORDER BY price ASC";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="dongho")
			{
				$str="select * from loaisp where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Đồng hồ') ORDER BY price ASC";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="amthanh")
			{
				$str="select * from loaisp where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Tai nghe') ORDER BY price ASC";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="laptop")
			{
				$str="select * from loaisp where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Lap top') ORDER BY price ASC";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="")
			{
				$str="select * from loaisp where loaisp.parent_id<>0 ORDER BY price ASC";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
		}
		public function findPriceDown($id_nsx,$category)
		{
			$conn=Connection::getInstance();
			
			if($category=="dienthoai")
			{
				$str="select * from loaisp where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Điện thoại') ORDER BY price DESC";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="phukien")
			{
				$str="select * from loaisp where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Phụ kiện') ORDER BY price DESC";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="dongho")
			{
				$str="select * from loaisp where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Đồng hồ') ORDER BY price DESC";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="amthanh")
			{
				$str="select * from loaisp where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Tai nghe') ORDER BY price DESC";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="laptop")
			{
				$str="select * from loaisp where loaisp.id_nsx=$id_nsx AND loaisp.parent_id in (select id from loaisp where name='Lap top') ORDER BY price DESC";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
			if($category=="")
			{
				$str="select * from loaisp where loaisp.parent_id<>0 ORDER BY price DESC";
				$query=$conn->query($str);
				return $query->fetchAll();
			}
		}
		public function SearchDanhMucModel($key)
		{
			$conn=Connection::getInstance();
			$str="select * from loaisp where name like '%$key%'";
			$query=$conn->query($str);
			return $query->fetchAll();
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
	}

 ?>