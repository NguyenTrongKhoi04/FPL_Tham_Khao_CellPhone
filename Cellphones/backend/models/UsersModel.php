<?php 
	trait UsersModel
	{
		public function modelRead($recordPerPage)
		{
			//lấy biến p truyền từ url
			$p=isset($_GET["p"]) && is_numeric($_GET["p"]) && $_GET["p"]>0?($_GET["p"]-1):0;
			//Lấy từ bản ghi nào
			$from = $p*$recordPerPage;
			//Lấy biến kết nối csdl
			$conn=Connection::getInstance();
			$query=$conn->query("select * from users order by id asc limit $from,$recordPerPage");
			//lấy toàn bộ trang trả về
			$result=$query->fetchAll();
			return $result;
		} 
		//Tính tổng số bản ghi
		public function totalRecord()
		{
			$conn=Connection::getInstance();
			$query=$conn->query("select id from users");
			//trả về tổng số bản ghi
			return $query->rowCount();
		}

		//create bản ghi
		public function modelCreate(){
			$first_name=$_POST["first_name"];
			$email=$_POST["email"];
			$password=$_POST["password"];
			$last_name=$_POST["last_name"];
			$country=$_POST["country"];
			$city=$_POST["city"];
			$position=isset($_POST["position"])?1:0;
			$password=md5($password);
			
			//lấy tạm thời
			$conn=Connection::getInstance();
			$query=$conn->query("select id from users where email='$email'");
			$check=$query->rowCount();
			if($check==0)
			{
				if($_FILES["picture"]["name"] != "")
				{
					$picture= time()."_".$_FILES["picture"]["name"];
					move_uploaded_file($_FILES["picture"]["tmp_name"], "../assets/upload/users/$picture");
				}
				
				$conn->query("insert into users set first_name='$first_name',email='$email',password='$password',last_name='$last_name',country='$country',city='$city',position='$position',picture='$picture'");
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
			$query=$conn->query("select * from users where id=$id");
			return $query->fetch();
		}
		//update bản ghi
		public function modelUpdate($id){
			$first_name=$_POST["first_name"];
			$password=$_POST["password"];
			$last_name=$_POST["last_name"];
			$country=$_POST["country"];
			$city=$_POST["city"];
			$position=isset($_POST["position"])?1:0;

			$conn=Connection::getInstance();
			if($_FILES["picture"]["name"] != "")
			{
				$picture= time()."_".$_FILES["picture"]["name"];
				move_uploaded_file($_FILES["picture"]["tmp_name"], "../assets/upload/users/$picture");

				$queryOldPicture= $conn->query("select picture from users where id=$id");
				$oldPicture=$queryOldPicture->fetch();
				if($oldPicture->picture != "" && file_exists("../assets/upload/users/".$oldPicture->picture))
				{
					unlink("../assets/upload/users/".$oldPicture->picture);
				} 
			}
			


			$conn->query("update users set first_name='$first_name',last_name='$last_name',country='$country',city='$city',position='$position',picture='$picture' where id=$id");
			if($password!="")
			{
				$password=md5($password);
				$conn->query("update users set password='$password' where id=$id");
			}
		}
		//xóa bản ghi
		//
		public function modelDelete($id)
		{
			$conn=Connection::getInstance();
			
			$queryOldPicture= $conn->query("select picture from users where id=$id");
			$oldPicture=$queryOldPicture->fetch();
			if($oldPicture->picture != "" && file_exists("../assets/upload/users/".$oldPicture->picture))
			{
				unlink("../assets/upload/users/".$oldPicture->picture);
			}

			$query=$conn->query("delete from users where id=$id");
		}
	}



 ?>