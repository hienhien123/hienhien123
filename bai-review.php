<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="noidungcss.css">
	<link rel="stylesheet" type="text/css" href="headercss.css">
</head>
<body>
	<div class="top">
		<div class="row">
		<?php
			require_once 'vitri.php';
		?>
			<div style="margin-top:3px;" class="col-md-4">
			<a href="login.php?page=dangnhap" class="btn btn-success">Đăng nhập</a>
			<a href="register.php?page=dangki" class="btn btn-success">Đăng kí</a>
			
			<?php if(isset($_SESSION["loged"])){
				
				echo "<a href='index.php?act=logout' class='btn btn-danger'>Đăng xuất</a>";
			?>

				<script type="text/javascript">$('.btn-success').hide();</script>
						<?php
			 } ?>
		</div>

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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>