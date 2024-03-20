<?php 
	trait HeaderModel{
		public function modelListPhukien()
		{
			$conn=Connection::getInstance();
			$str="select nhasanxuat.name,nhasanxuat.id from nhasanxuat,loaisp where nhasanxuat.id=loaisp.id_nsx AND loaisp.name='Phụ kiện'";
			$query=$conn->query($str);
			return $query->fetchAll();
		}
		
		public function modelListDongho()
		{
			$conn=Connection::getInstance();
			$str="select nhasanxuat.name,nhasanxuat.id from nhasanxuat,loaisp where nhasanxuat.id=loaisp.id_nsx AND loaisp.name='Đồng hồ'";
			$query=$conn->query($str);
			return $query->fetchAll();
		}
		public function modelListAmthanh()
		{
			$conn=Connection::getInstance();
			$str="select nhasanxuat.name,nhasanxuat.id from nhasanxuat,loaisp where nhasanxuat.id=loaisp.id_nsx AND loaisp.name='Tai nghe'";
			$query=$conn->query($str);
			return $query->fetchAll();
		}
		public function modelListLaptop()
		{
			$conn=Connection::getInstance();
			$str="select nhasanxuat.name,nhasanxuat.id from nhasanxuat,loaisp where nhasanxuat.id=loaisp.id_nsx AND (loaisp.name='Lap top' OR loaisp.name='Mac book')";
			$query=$conn->query($str);
			return $query->fetchAll();
		}
		public function modelListHangcu()
		{
			$conn=Connection::getInstance();
			$str="select distinct nhasanxuat.name,nhasanxuat.id from nhasanxuat,hangcu where nhasanxuat.id=hangcu.id_nsx";
			$query=$conn->query($str);
			return $query->fetchAll();
		}
		public function modelListPhone()
		{
			$conn=Connection::getInstance();
			$str="select nhasanxuat.name,nhasanxuat.id from nhasanxuat,loaisp where nhasanxuat.id=loaisp.id_nsx AND loaisp.name='Điện thoại'";
			$query=$conn->query($str);
			return $query->fetchAll();
		}
		
		
		
	}

 ?>