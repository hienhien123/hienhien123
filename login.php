<?php
	$connect = mysqli_connect('localhost','root','','db');
	mysqli_set_charset($connect,"utf8");
	session_start();
   
?>
			
	<!-- 'start thực hiện kiểm tra dữ liệu người dùng nhập ở form đăng nhập' -->

	<?php
		if(isset($_POST["dangnhap"])){
			$tk = $_POST["user_name_lg"];
			$mk = md5($_POST["passlg"]);
			$rows = mysqli_query($connect,"
				select * from user where user_name = '$tk' and password = '$mk' 
				");
			$name = mysqli_query($connect,"
				select * from user where user_name = '$tk'
				");
			while($full_name=mysqli_fetch_assoc($name)){
			$hienthi = $full_name['full_name'];
			$admin = $full_name['admin'];
			$id = $full_name['id'];}
			$_SESSION['admin'] = $admin;
			$_SESSION['id_post']=$id;
			$_SESSION['fullname'] = $hienthi;
			$count = mysqli_num_rows($rows);
			if($count==1){
				$_SESSION["loged"] = true;
				header("location:index.php");
				setcookie("success", "Đăng nhập thành công!", time()+1, "/","", 0);
			}
			else{
				header("location:index.php");
				setcookie("error", "Đăng nhập không thành công!", time()+1, "/","", 0);
			}
			
		}
	?>
	<!-- 'end thực hiện kiểm tra dữ liệu người dùng nhập ở form đăng nhập' -->
	<!-- 'start nếu thành công thì hiện thông báo:' -->
			<?php
				if(isset($_COOKIE["success"])){
			?>
			<div class="alert alert-success">
			  	<strong>'Chúc mừng!'</strong> <?php echo $_COOKIE["success"]; ?>
			</div>
			<?php
			}
			?>
			<!-- 'end nếu thành công thì hiện thông báo:' -->

	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="headercss.css">
	</head>
	<body>
		<div class="top">
			<div class="row">
				<?php
					require_once 'vitri.php';
				?>
		</div>	
	</div>
	<div class="row">
	<div class="col-md-12">
          <nav class="List-menu navbar navbar-default"> 
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?php
                  include 'logo.php';
                  include 'menu.php';
                ?>
              </div>
          </nav>
      </div>
  </div>
<form action="login.php" method="post">
<div class="col-md-6 col-md-offset-3">
	<div class="alert alert-info">
	  <strong>Đăng nhập</strong>
	</div>
 
	<div class="panel panel-primary">
	    <div class="panel-body">
	    	<div class="form-group">
				<label for="email">Tài khoản:</label>
				<input type="text" class="form-control" name="user_name_lg" placeholder="Nhập tên đăng nhập...">
			</div>
 
			<div class="form-group">
				<label for="pwd">Mật khẩu:</label>
				<input type="password" class="form-control" name="passlg" placeholder="Nhập mật khẩu..." required>
			</div>
 
			<button type="submit" class="btn btn-default" name="dangnhap">Đăng nhập</button>
			<button type="submit" class="btn btn-default" name="dangki"><a style="text-decoration: none" href="register.php"> Đăng ký </a></button>
	    </div>
	</div>
</div>
</form>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</body>
	</html>
