<?php
	$connect = mysqli_connect('localhost','root','','db');
	mysqli_set_charset($connect,"utf8");
	session_start();
?>
<!-- 'start thực hiện kiểm tra dữ liệu người dùng đăng ký' -->
	<?php
		if(isset($_POST["dangky"])){
			$user_name = $_POST["user_name"];
			$pass1 = $_POST["pass1"];
			$pass2 = $_POST["pass2"];
			$name = $_POST["full_name"];
			//kiểm tra xem 2 mật khẩu có giống nhau hay không:
			if($pass1!=$pass2){
				header("location:index.php");
				setcookie("error", "Đăng ký không thành công!", time()+1, "/","", 0);
			}
			else{
				$pass = md5($pass1);
				mysqli_query($connect,"
					insert into user (user_name,password,full_name)
					values ('$user_name','$pass','$name')
				");
				header("location:index.php");
				setcookie("success", "Đăng ký thành công!", time()+1, "/","", 0);
			}
		}

	?>
	<!-- 'start nếu thành công thì hiện thông báo:' -->
			<?php
				if(isset($_COOKIE["success"])){
			?>
			<div class="alert alert-success">
			  	<strong>'Chúc mừng!'</strong> <?php echo $_COOKIE["success"]; ?>
			</div>
			<?php } ?>
			<!-- 'end nếu thành công thì hiện thông báo:' -->
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="headercss.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div class="top">
		<?php
			require_once 'vitri.php';
		?>
	</div>
	<div class="row">
			<div style="margin-top: 3px;" class="col-md-4">
			<a href="login.php?page=dangnhap" class="btn btn-success">Đăng nhập</a>
	</div>
	<div class="col-sm-12">
          <nav class="List-menu navbar navbar-default"> 
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?php
                  include 'logo.php';
                  include 'menu.php';
                ?>
              </div>
          </nav>
      </div>
<form action="" method="post">
<div class="col-md-6 col-md-offset-3">
	<div class="alert alert-info">
	  <strong>Đăng ký</strong>
	</div>
	<div class="panel panel-primary">
	    <div class="panel-body">
	    	<div class="form-group">
				<label for="email">Email:</label>
				<input type="text" class="form-control" name="user_name" placeholder="Nhập tên đăng nhập...">
			</div>
 
			<div class="form-group">
				<label for="pwd">Mật khẩu: </label>
				<input type="password" class="form-control" name="pass1" placeholder="Nhập mật khẩu...">
			</div>
 
			<div class="form-group">
				<label for="pwd">Nhập lại mật khẩu:</label>
				<input type="password" class="form-control" name="pass2" placeholder="Nhập lại mật khẩu...">
			</div>
 
			<div class="form-group">
				<label for="email">Tên đầy đủ của bạn:</label>
				<input type="text" class="form-control" name="full_name" placeholder="Nhập tên đầy đủ của bạn...">
			</div>
 
			<button type="submit" class="btn btn-default" name="dangky">Đăng ký</button>

	    </div>
	</div>
</div>
</form>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
