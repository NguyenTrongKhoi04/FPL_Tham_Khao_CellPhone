<?php 
	trait LoginModel{
		public function modelLogin(){
			$email=$_POST["email"];
			$password=$_POST["password"];
			$password=md5($password);
			$conn=Connection::getInstance();
			$query=$conn->query("select email,password,position from users where email='$email'");
			//lấy 1 bản ghi
			$result=$query->fetch();
			if(isset($result->email))
			{
				if($result->password==$password && $result->position==1)
				{
					//đăg nhập thành công
					$_SESSION["email"]=$email;
				}
				else if($result->password==$password && $result->position==2)
				{
					$_SESSION["emailStaff"]=$email;
				}
			}
			
		}
		
	}


 ?>