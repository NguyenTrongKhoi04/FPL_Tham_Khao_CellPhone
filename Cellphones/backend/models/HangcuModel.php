<?php 
	trait HangcuModel
	{
		public function modelRead($recordPerPage)
		{
			//lấy biến p truyền từ url
			$p=isset($_GET["p"]) && is_numeric($_GET["p"]) && $_GET["p"]>0?($_GET["p"]-1):0;
			//Lấy từ bản ghi nào
			$from = $p*$recordPerPage;
			//Lấy biến kết nối csdl
			$conn=Connection::getInstance();
			$query=$conn->query("select * from Hangcu order by id asc limit $from,$recordPerPage");
			//lấy toàn bộ trang trả về
			$result=$query->fetchAll();
			return $result;
		} 
		//Tính tổng số bản ghi
		public function totalRecord()
		{
			$conn=Connection::getInstance();
			$query=$conn->query("select id from Hangcu");
			//trả về tổng số bản ghi
			return $query->rowCount();
		}

		//create bản ghi
		public function modelCreate(){
			$id_nsx=$_POST["id_nsx"];
			
			$name=$_POST["name"];
			$slsp=$_POST["slsp"];
			$price=$_POST["price"];
			$discount=$_POST["discount"];
			$description=$_POST["description"];
			$hot=isset($_POST["hot"])?1:0;
			
			//lấy tạm thời
			$conn=Connection::getInstance();
			$query=$conn->query("select name from hangcu where name='$name'");
			$check=$query->rowCount();
			if($check==0)
			{
				if($_FILES["photo"]["name"] != "")
				{

					$photo= time()."_".$_FILES["photo"]["name"];
					move_uploaded_file($_FILES["photo"]["tmp_name"], "../assets/upload/hangcu/$photo");
				}
				if($_FILES["photo1"]["name"] != "")
				{
					$photo1= time()."_".$_FILES["photo1"]["name"];
					move_uploaded_file($_FILES["photo1"]["tmp_name"], "../assets/upload/hangcu/$photo1");
				}
				if($_FILES["photo2"]["name"] != "")
				{
					$photo2= time()."_".$_FILES["photo2"]["name"];
					move_uploaded_file($_FILES["photo2"]["tmp_name"], "../assets/upload/hangcu/$photo2");
				}
				if($_FILES["photo3"]["name"] != "")
				{
					$photo3= time()."_".$_FILES["photo3"]["name"];
					move_uploaded_file($_FILES["photo3"]["tmp_name"], "../assets/upload/hangcu/$photo3");
				}
				if($_FILES["photo4"]["name"] != "")
				{
					$photo4= time()."_".$_FILES["photo4"]["name"];
					move_uploaded_file($_FILES["photo4"]["tmp_name"], "../assets/upload/hangcu/$photo4");
				}
				
				$conn->query("insert into hangcu set name='$name',description='$description',id_nsx='$id_nsx',slsp='$slsp',price='$price',discount='$discount',hot='$hot',photo='$photo',photo1='$photo1',photo2='$photo2',photo3='$photo3',photo4='$photo4'");
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
			$query=$conn->query("select * from hangcu where id=$id");
			return $query->fetch();
		}
		//update bản ghi
		public function modelUpdate($id){
			$id_nsx=$_POST["id_nsx"];
			
			$name=$_POST["name"];
			$slsp=$_POST["slsp"];
			$price=$_POST["price"];
			$discount=$_POST["discount"];
			$description=$_POST["description"];
			$hot=isset($_POST["hot"])?1:0;

			$conn=Connection::getInstance();
			$conn->query("update hangcu set name='$name',description='$description',id_nsx='$id_nsx',slsp='$slsp',price='$price',discount='$discount',hot='$hot' where id=$id");
			if($_FILES["photo"]["name"] != "")
			{
				$photo= time()."_".$_FILES["photo"]["name"];
				move_uploaded_file($_FILES["photo"]["tmp_name"], "../assets/upload/hangcu/$photo");

				$queryOldPicture= $conn->query("select photo from hangcu where id=$id");
				$oldPicture=$queryOldPicture->fetch();
				if($oldPicture->photo != "" && file_exists("../assets/upload/hangcu/".$oldPicture->photo))
				{
					unlink("../assets/upload/hangcu/".$oldPicture->photo);
				} 
				$conn->query("update hangcu set photo='$photo' where id=$id");
			}
			if($_FILES["photo1"]["name"] != "")
			{
				$photo1= time()."_".$_FILES["photo1"]["name"];
				move_uploaded_file($_FILES["photo1"]["tmp_name"], "../assets/upload/hangcu/$photo1");

				$queryOldPicture= $conn->query("select photo1 from hangcu where id=$id");
				$oldPicture=$queryOldPicture->fetch();
				if($oldPicture->photo1 != "" && file_exists("../assets/upload/hangcu/".$oldPicture->photo1))
				{
					unlink("../assets/upload/hangcu/".$oldPicture->photo1);
				}
				$conn->query("update hangcu set photo1='$photo1' where id=$id");
			}
			if($_FILES["photo2"]["name"] != "")
			{
				$photo2= time()."_".$_FILES["photo2"]["name"];
				move_uploaded_file($_FILES["photo2"]["tmp_name"], "../assets/upload/hangcu/$photo2");

				$queryOldPicture= $conn->query("select photo2 from hangcu where id=$id");
				$oldPicture=$queryOldPicture->fetch();
				if($oldPicture->photo2 != "" && file_exists("../assets/upload/hangcu/".$oldPicture->photo2))
				{
					unlink("../assets/upload/hangcu/".$oldPicture->photo2);
				} 
				$conn->query("update hangcu set photo2='$photo2' where id=$id");
			}
			if($_FILES["photo3"]["name"] != "")
			{
				$photo3= time()."_".$_FILES["photo3"]["name"];
				move_uploaded_file($_FILES["photo3"]["tmp_name"], "../assets/upload/hangcu/$photo3");

				$queryOldPicture= $conn->query("select photo3 from hangcu where id=$id");
				$oldPicture=$queryOldPicture->fetch();
				if($oldPicture->photo3 != "" && file_exists("../assets/upload/hangcu/".$oldPicture->photo3))
				{
					unlink("../assets/upload/hangcu/".$oldPicture->photo3);
				}
				$conn->query("update hangcu set photo3='$photo3' where id=$id"); 
			}
			if($_FILES["photo4"]["name"] != "")
			{
				$photo4= time()."_".$_FILES["photo4"]["name"];
				move_uploaded_file($_FILES["photo4"]["tmp_name"], "../assets/upload/hangcu/$photo4");

				$queryOldPicture= $conn->query("select photo4 from hangcu where id=$id");
				$oldPicture=$queryOldPicture->fetch();
				if($oldPicture->photo4 != "" && file_exists("../assets/upload/hangcu/".$oldPicture->photo4))
				{
					unlink("../assets/upload/hangcu/".$oldPicture->photo4);
				} 
				$conn->query("update hangcu set photo4='$photo4' where id=$id");
			}
			
		}
		//xóa bản ghi
		//
		public function modelDelete($id)
		{
			$conn=Connection::getInstance();

			$queryOldPicture= $conn->query("select photo from hangcu where id=$id");
			$oldPicture=$queryOldPicture->fetch();
			if($oldPicture->photo != "" && file_exists("../assets/upload/hangcu/".$oldPicture->photo))
			{
				unlink("../assets/upload/hangcu/".$oldPicture->photo);
			}

			$queryOldPicture= $conn->query("select photo1 from hangcu where id=$id");
			$oldPicture=$queryOldPicture->fetch();
			if($oldPicture->photo1 != "" && file_exists("../assets/upload/hangcu/".$oldPicture->photo1))
			{
				unlink("../assets/upload/hangcu/".$oldPicture->photo1);
			}
			$queryOldPicture= $conn->query("select photo2 from hangcu where id=$id");
			$oldPicture=$queryOldPicture->fetch();
			if($oldPicture->photo2 != "" && file_exists("../assets/upload/hangcu/".$oldPicture->photo2))
			{
				unlink("../assets/upload/hangcu/".$oldPicture->photo2);
			}
			$queryOldPicture= $conn->query("select photo3 from hangcu where id=$id");
			$oldPicture=$queryOldPicture->fetch();
			if($oldPicture->photo3 != "" && file_exists("../assets/upload/hangcu/".$oldPicture->photo3))
			{
				unlink("../assets/upload/hangcu/".$oldPicture->photo3);
			}
			$queryOldPicture= $conn->query("select photo4 from hangcu where id=$id");
			$oldPicture=$queryOldPicture->fetch();
			if($oldPicture->photo4 != "" && file_exists("../assets/upload/hangcu/".$oldPicture->photo4))
			{
				unlink("../assets/upload/hangcu/".$oldPicture->photo4);
			}

			$query=$conn->query("delete from hangcu where id=$id");
		}
		
		public function modelTensp($id)
		{
			$conn=Connection::getInstance();
			$query=$conn->query("select * from nhasanxuat where id=$id");
			return $query->fetch();
		}
		
		// public function modelMuccha($id)
		// {
		// 	$conn=Connection::getInstance();
		// 	$query=$conn->query("select * from hangcu where id=$id");
		// 	return $query->fetch();
		// }
		// public function laymuccon($id)
		// {
		// 	$conn=Connection::getInstance();
		// 	$query=$conn->query("select * from hangcu where parent_id=$id");
		// 	return $query->fetchAll();
		// }
		public function modelListHangcu()
		{
			$conn=Connection::getInstance();
			$query=$conn->query("select * from nhasanxuat");
			return $query->fetchAll();
		}
		
		public function modelListParent($id)
		{
			$conn=Connection::getInstance();

			$query=$conn->query("select hangcu.id,nhasanxuat.name as 'nsx',hangcu.name as 'hangcu' from nhasanxuat,hangcu WHERE hangcu.id <> $id and hangcu.id_nsx=nhasanxuat.id AND hangcu.parent_id=0 ");
			return $query->fetchAll();
		}
	}



 ?>