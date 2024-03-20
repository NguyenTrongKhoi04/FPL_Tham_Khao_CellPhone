<?php  	
	session_start();
	//load file controller
	include "../app/Controller.php";
	//load file Connection
	include "../app/Connection.php";
	//---
	//lấy biến controller truyền từ url 
	$controller=isset($_GET["controller"])?$_GET["controller"]:"Home";
	// $controller="Login";
	//lấy biến action truyền từ url
	$action=isset($_GET["action"])?$_GET["action"]:"index";
	//ghếp đường dẫn file controller vật lý
	$fileController="controllers/".ucfirst($controller)."Controller.php";
	//tên class
	$classController=ucfirst($controller)."Controller";
	//load file controller
	include $fileController;
	//kiểm tra class có tồn tại hay k, nếu k thì khởi tạo
	if(class_exists($classController))
	{
		$obj=new $classController();
		$obj->$action();
	}
	else die("$fileController không tồn tại");
	//---
?>