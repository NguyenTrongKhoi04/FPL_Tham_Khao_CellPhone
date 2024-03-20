<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<script type="text/javascript" src="../assets/js/jquery-3.5.1.js"></script>
	<link rel="stylesheet" href="../assets/css/login.css">
	<link rel="stylesheet" href="../assets/bootstrap-4.5.0-dist/css/bootstrap.min.css">
	<script type="text/javascript" src="../assets/js/login.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div class="all">
		<div class="title">
			You have to Login!
		</div>
		<div class="login">
			<div class="infor">
				YOUR WEBSITE
			</div>
			<div class="main">
				<form method="post" action="index.php?controller=login&action=login">
				  <div class="form-group">
				    <label for="exampleInputEmail1">Email address</label>
				    <input type="email" class="form-control box1" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
				    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input type="password" class="form-control box2" id="exampleInputPassword1" placeholder="Password" name="password">
				  </div>
				  <div class="form-check">
				    <input type="checkbox" class="form-check-input" id="exampleCheck1">
				    <label class="form-check-label" for="exampleCheck1">Keep me logged in</label>
				  </div>
				  <button type="submit" class="btn btn-primary login-btn" value="Login">
				  	Login
				  </button>
				</form>
			</div>
			<div class="forgot">
				<a href="#">Forgot password</a>
			</div>
			<div class="fb">
				<a href="#"><img src="../assets/imgs/Untitled-1.jpg" alt=""></a>
			</div>
			<div class="gg">
				<a href="#"><img src="../assets/imgs/Untitled-2.jpg" alt=""></a>
			</div>
		</div>

	</div>
	
</body>
</html>