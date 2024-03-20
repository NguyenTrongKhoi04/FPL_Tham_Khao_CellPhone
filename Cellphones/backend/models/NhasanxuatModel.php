<?php 
	trait NhasanxuatModel
	{
		public function modelRead($recordPerPage)
		{
			//lấy biến p truyền từ url
			$p=isset($_GET["p"]) && is_numeric($_GET["p"]) && $_GET["p"]>0?($_GET["p"]-1):0;
			//Lấy từ bản ghi nào
			$from = $p*$recordPerPage;
			//Lấy biến kết nối csdl
			$conn=Connection::getInstance();
			$query=$conn->query("select * from Nhasanxuat order by id asc limit $from,$recordPerPage");
			//lấy toàn bộ trang trả về
			$result=$query->fetchAll();
			return $result;
		} 
		//Tính tổng số bản ghi
		public function totalRecord()
		{
			$conn=Connection::getInstance();
			$query=$conn->query("select id from Nhasanxuat");
			//trả về tổng số bản ghi
			return $query->rowCount();
		}

		//create bản ghi
		public function modelCreate(){
			$address=$_POST["address"];
			$contact=$_POST["contact"];
			$soluong=$_POST["soluong"];
			$name=$_POST["name"];
			$hot=isset($_POST["hot"])?1:0;
			
			
			//lấy tạm thời
			$conn=Connection::getInstance();
			$query=$conn->query("select name from Nhasanxuat where name='$name'");
			$check=$query->rowCount();
			if($check==0)
			{
				
				
				$conn->query("insert into nhasanxuat set name='$name',hot='$hot',contact='$contact',address='$address',soluong='$soluong'");
				return true;
			}
			else
			{
				// 
				return false;
			}
		}
		//update
		//lấy 1 bản ghi
		public function modelGetRecord($id)
		{
			$conn=Connection::getInstance();
			$query=$conn->query("select * from nhasanxuat where id=$id");
			return $query->fetch();
		}
		//update bản ghi
		public function modelUpdate($id){
			$address=$_POST["address"];
			$contact=$_POST["contact"];
			$soluong=$_POST["soluong"];
			$name=$_POST["name"];
			$hot=isset($_POST["hot"])?1:0;

			$conn=Connection::getInstance();
			
			$conn->query("update nhasanxuat set name='$name',hot='$hot',contact='$contact',address='$address',soluong='$soluong' where id=$id");
		}
		//xóa bản ghi
		//
		public function modelDelete($id)
		{
			$conn=Connection::getInstance();
			
			
			$query=$conn->query("delete from nhasanxuat where id=$id");
		}
	}



 ?>