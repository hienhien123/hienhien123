<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="BTL_css/noidungcss.css">
	<link rel="stylesheet" type="text/css" href="BTL_css/headercss.css">
	<style type="text/css">
	#Trang ul li{
		height: 150px;
	}
</style>
</head>
<body>
	<div class="top">	
		<div class="row">
			<?php
			require_once 'vitri.php';
			include 'dangki.php';
			?>
			

		</div>
		<div class="row">
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
		</div>
	</div>
	<div class="NoiDung">
		<div class="row">
			<div class="col-md-1"></div>

			<div class="col-md-10">
				<!-- Menu left -->
				<div style="width: 70%; float: left;padding:0 10px;"  class="menu-left">
					<div class="row">
						<h1> Giới thiệu </h1>

						<p>Là trang web về ẩm thực cung cấp các thông tin về nhà hàng, phong cách ẩm thực, các món ngon hấp dẫn,…, của các vùng, miền Việt
							Nam . Với số lượng lớn độc giả lớn, thường xuyên <a href="http://localhost/BTL/index.php" target="_blank">GoodFood.com</a> là cầu nối quan trọng giữa nhà hàng và công chúng; là địa chỉ tin cậy để các nhà hàng quảng bá thương hiệu, hình ảnh, món ăn, sản phẩm của mình đến thực khách một cách hiệu quả. </p>
							<p>Cùng với <a href="http://localhost/BTL/index.php" target="_blank">GoodFood.com</a> các phụ trang liên quan gồm:  truyền tải hình ảnh, các món ăn của nhà hàng. Trang về nhà hàng nổi tiếng nơi hội tụ các nhà hàng nổi tiếng ở các vùng miền Việt Nam, giúp thực khách dễ dàng tìm kiếm, lựa chọn các nhà hàng với những món ăn, dịch vụ, giá cả phù hợp . Các phụ trang này sẽ giúp cho việc quảng bá thương hiệu của nhà hàng, doanh nghiệp tăng thêm hiệu quả.</p>

							
						</div>
					</div><!-- end menu-left-->
					
					<div style="width: 30%; float: right; padding-left: 20px;" class="menu-right"> <!-- menu right -->
						<div class="chude">
							<?php
							include 'chude-menu.php';
							?>
						</div>
						<hr>
						<div class="top-review"> <!-- top review -->
							<div class="panel with-nav-tabs panel-default">
								<?php
								include 'tab-review.php';
								?>
							</div>
						</div> <!-- end top review -->
					</div><!-- end menu right -->
				</div>
				<div class="col-md-1"></div>
			</div>
		</div>
		<div class="bottom">
			<?php require_once 'footer.php'; ?>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</body>
	</html>