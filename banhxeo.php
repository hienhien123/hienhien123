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

							<?php 
								$connect = mysqli_connect('localhost','root','','db');
								mysqli_set_charset($connect,"utf8");

								$rows = mysqli_query($connect,"
								select * from quanngon where name = 'Bánh xèo Cô Hai'
								");
								while($info=mysqli_fetch_assoc($rows)){
								$name = $info['name'];
								$img = $info['image'];
								$review = $info['review'];
								$address = $info['address'];
							}
						
							?>

							<h4>Review về: <?php echo "$name" ?></h4>
							<?php echo "<img style='width:730px;' src='".$img."' alt='BanhXeo'>"?>
							
								<div class="review-content">
								<?php echo "$review" ?>
								<h4>Địa chỉ: <?php echo "$address" ?></h4>
								</div>
								<div class="danhgia">
									<h4>Đánh giá:</h4>
								<div style="margin-left: -200px; margin-top: -200px;" class="rating">
									<?php include 'rate.php';?>
								</div>
								
								</div>
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
