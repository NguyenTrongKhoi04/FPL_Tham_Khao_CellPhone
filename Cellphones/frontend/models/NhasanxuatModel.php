<?php 
	trait NhasanxuatModel{
		public function modelListNhasanxuat()
		{
			//liên kết các danh mục con cấp cha
			$conn=Connection::getInstance();
			$query=$conn->query("select * from nhasanxuat where hot = 1 order by id asc");
			return $query->fetchAll();
		}
		public function modelListDongho()
		{
			//liên kết các danh mục con cấp cha
			$conn=Connection::getInstance();
			$query=$conn->query("select nhasanxuat.name,nhasanxuat.id FROM nhasanxuat,loaisp WHERE loaisp.name = 'Đồng hồ' and loaisp.parent_id=0 and nhasanxuat.id=loaisp.id_nsx");
			return $query->fetchAll();
		}
		public function modelListAmthanh()
		{
			//liên kết các danh mục con cấp cha
			$conn=Connection::getInstance();
			$query=$conn->query("select nhasanxuat.name,nhasanxuat.id FROM nhasanxuat,loaisp WHERE loaisp.name = 'Tai nghe' and loaisp.parent_id=0 and nhasanxuat.id=loaisp.id_nsx");
			return $query->fetchAll();
		}
		public function modelListLaptop()
		{
			//liên kết các danh mục con cấp cha
			$conn=Connection::getInstance();
			$query=$conn->query("select nhasanxuat.name,nhasanxuat.id FROM nhasanxuat,loaisp WHERE loaisp.name = 'Lap top' and loaisp.parent_id=0 and nhasanxuat.id=loaisp.id_nsx");
			return $query->fetchAll();
		}
		public function modelListPhukien()
		{
			//liên kết các danh mục con cấp cha
			$conn=Connection::getInstance();
			$query=$conn->query("select nhasanxuat.name,nhasanxuat.id FROM nhasanxuat,loaisp WHERE loaisp.name = 'Phụ kiện' and loaisp.parent_id=0 and nhasanxuat.id=loaisp.id_nsx");
			return $query->fetchAll();
		}
		
		

		public function modelListHangcu()
		{
			$conn=Connection::getInstance();
			$str="select distinct nhasanxuat.name,nhasanxuat.id from nhasanxuat,hangcu where nhasanxuat.id=hangcu.id_nsx";
			$query=$conn->query($str);
			return $query->fetchAll();
		}
	}


?>